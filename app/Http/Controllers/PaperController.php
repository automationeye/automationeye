<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Intervention\Image\Facades\Image;

class PaperController extends Controller
{
    public function index()
    {
        $featuredPapers = Paper::with('categories')
            ->where('is_featured', true)
            ->orderBy('published_date', 'desc')
            ->take(6)
            ->get();
            
        $recentPapers = Paper::with('categories')
            ->where('is_featured', false)
            ->orderBy('published_date', 'desc')
            ->take(6)
            ->get();
            
        $categories = Category::withCount('papers')
            ->get();
            
        return view('research-papers', compact('featuredPapers', 'recentPapers', 'categories'));
    }

    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $papers = Paper::whereHas('categories', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('published_date', 'desc')
        ->paginate(9);
        
        $categories = Category::withCount('papers')->get();
        
        return view('papers-category', compact('papers', 'category', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.papers.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'abstract' => 'required|string',
            'authors' => 'required|string|max:255',
            'published_date' => 'required|date',
            'keywords' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'references' => 'nullable|string',
            'author_bios' => 'nullable|string',
            'is_featured' => 'boolean',
            'categories' => $request->has('categories') ? 'required|array' : 'nullable',
            'categories.*' => 'exists:categories,id',
            'thumbnail' => 'nullable|image|max:2048',
            'paper_file' => 'required|file|mimes:pdf,doc,docx|max:10240',
        ]);

        $slug = Str::slug($validated['title']);
        
        $paper_path = null;
        if ($request->hasFile('paper_file')) {
            $paper_path = $request->file('paper_file')->store('papers', 'public');
        }
        
        $thumbnail_url = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail_path = $request->file('thumbnail')->store('paper_thumbnails', 'public');
            $thumbnail_url = asset('storage/' . $thumbnail_path);
            
            $img = Image::make(storage_path('app/public/' . $thumbnail_path));
            $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save();
        }
        
        $paper = Paper::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'abstract' => $validated['abstract'],
            'authors' => $validated['authors'],
            'published_date' => $validated['published_date'],
            'keywords' => $validated['keywords'] ?? null,
            'excerpt' => $validated['excerpt'] ?? null,
            'references' => $validated['references'] ?? null,
            'author_bios' => $validated['author_bios'] ?? null,
            'is_featured' => $validated['is_featured'] ?? false,
            'thumbnail_url' => $thumbnail_url,
            'download_url' => asset('storage/' . $paper_path),
        ]);
        
        $download_url = route('papers.download', $paper->id);
        $qr_path = 'qrcodes/paper-' . $paper->id . '.png';
        $qr_storage_path = storage_path('app/public/' . $qr_path);
        
        if (!file_exists(dirname($qr_storage_path))) {
            mkdir(dirname($qr_storage_path), 0755, true);
        }
        
        QrCode::format('png')
            ->size(300)
            ->margin(2)
            ->errorCorrection('H')
            ->generate($download_url, $qr_storage_path);
        
        $paper->qr_code_url = asset('storage/' . $qr_path);
        $paper->save();
        
        $paper->categories()->attach($validated['categories']);
        
        return redirect()->route('admin.papers.index')
            ->with('success', 'Research paper uploaded successfully!');
    }

    public function show($slug)
    {
        $paper = Paper::with('categories')->where('slug', $slug)->firstOrFail();
        
        $relatedPapers = Paper::whereHas('categories', function($query) use ($paper) {
            $query->whereIn('categories.id', $paper->categories->pluck('id'));
        })
        ->where('id', '!=', $paper->id)
        ->take(3)
        ->get();
        
        $categories = Category::withCount('papers')->get();
        
        return view('paper-single', compact('paper', 'relatedPapers', 'categories'));
    }
    public function download($id)
    {
        $paper = Paper::findOrFail($id);
        
        $file_path = str_replace(asset('storage/'), '', $paper->download_url);
        
        $paper->downloads = $paper->downloads + 1;
        $paper->save();
        
        return Storage::disk('public')->download($file_path, Str::slug($paper->title) . '.' . pathinfo($file_path, PATHINFO_EXTENSION));
    }

    public function edit($id)
    {
        $paper = Paper::findOrFail($id);
        $categories = Category::all();
        $selectedCategories = $paper->categories->pluck('id')->toArray();
        
        return view('admin.papers.edit', compact('paper', 'categories', 'selectedCategories'));
    }

    public function update(Request $request, $id)
    {
        $paper = Paper::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'abstract' => 'required|string',
            'authors' => 'required|string|max:255',
            'published_date' => 'required|date',
            'keywords' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'references' => 'nullable|string',
            'author_bios' => 'nullable|string',
            'is_featured' => 'boolean',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'thumbnail' => 'nullable|image|max:2048',
            'paper_file' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        if ($paper->title !== $validated['title']) {
            $paper->slug = Str::slug($validated['title']);
        }
        
        if ($request->hasFile('paper_file')) {
            if ($paper->download_url) {
                $old_path = str_replace(asset('storage/'), '', $paper->download_url);
                Storage::disk('public')->delete($old_path);
            }
            
            $paper_path = $request->file('paper_file')->store('papers', 'public');
            $paper->download_url = asset('storage/' . $paper_path);
            
            $download_url = route('papers.download', $paper->id);
            $qr_path = 'qrcodes/paper-' . $paper->id . '.png';
            $qr_storage_path = storage_path('app/public/' . $qr_path);
            
            QrCode::format('png')
                ->size(300)
                ->margin(2)
                ->errorCorrection('H')
                ->generate($download_url, $qr_storage_path);
                
            $paper->qr_code_url = asset('storage/' . $qr_path);
        }
        
        if ($request->hasFile('thumbnail')) {
            if ($paper->thumbnail_url) {
                $old_path = str_replace(asset('storage/'), '', $paper->thumbnail_url);
                Storage::disk('public')->delete($old_path);
            }
            
            $thumbnail_path = $request->file('thumbnail')->store('paper_thumbnails', 'public');
            $paper->thumbnail_url = asset('storage/' . $thumbnail_path);
            
            $img = Image::make(storage_path('app/public/' . $thumbnail_path));
            $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save();
        }
        
        $paper->title = $validated['title'];
        $paper->abstract = $validated['abstract'];
        $paper->authors = $validated['authors'];
        $paper->published_date = $validated['published_date'];
        $paper->keywords = $validated['keywords'] ?? null;
        $paper->excerpt = $validated['excerpt'] ?? null;
        $paper->references = $validated['references'] ?? null;
        $paper->author_bios = $validated['author_bios'] ?? null;
        $paper->is_featured = $validated['is_featured'] ?? false;
        
        $paper->save();
        
        $paper->categories()->sync($validated['categories']);
        
        return redirect()->route('admin.papers.index')
            ->with('success', 'Research paper updated successfully!');
    }

    public function destroy($id)
    {
        $paper = Paper::findOrFail($id);
        
        if ($paper->thumbnail_url) {
            $thumbnail_path = str_replace(asset('storage/'), '', $paper->thumbnail_url);
            Storage::disk('public')->delete($thumbnail_path);
        }
        
        if ($paper->download_url) {
            $paper_path = str_replace(asset('storage/'), '', $paper->download_url);
            Storage::disk('public')->delete($paper_path);
        }
        
        if ($paper->qr_code_url) {
            $qr_path = str_replace(asset('storage/'), '', $paper->qr_code_url);
            Storage::disk('public')->delete($qr_path);
        }
        
        $paper->categories()->detach();
        $paper->delete();
        
        return redirect()->route('admin.papers.index')
            ->with('success', 'Research paper deleted successfully!');
    }
}