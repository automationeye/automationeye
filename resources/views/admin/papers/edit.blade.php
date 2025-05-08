@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Research Paper</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.papers.update', $paper->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="form-group">
                    <label for="title">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $paper->title) }}" required>
                </div>
                
                <div class="form-group">
                    <label for="authors">Authors <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="authors" name="authors" value="{{ old('authors', $paper->authors) }}" required>
                </div>
                
                <div class="form-group">
                    <label for="published_date">Publication Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="published_date" name="published_date" value="{{ old('published_date', $paper->published_date->format('Y-m-d')) }}" required>
                </div>

                <div class="form-group">
                    <label>Categories <span class="text-danger">*</span></label>
                    <div class="categories-checkbox">
                        @foreach($categories as $category)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="category-{{ $category->id }}" name="categories[]" value="{{ $category->id }}" 
                                    {{ (is_array(old('categories')) && in_array($category->id, old('categories'))) || 
                                       (in_array($category->id, $selectedCategories)) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="abstract">Abstract <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="abstract" name="abstract" rows="5" required>{{ old('abstract', $paper->abstract) }}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" class="form-control" id="keywords" name="keywords" value="{{ old('keywords', $paper->keywords) }}">
                    <small class="form-text text-muted">Separate keywords with commas</small>
                </div>
                
                <div class="form-group">
                    <label for="excerpt">Excerpt (Optional)</label>
                    <textarea class="form-control" id="excerpt" name="excerpt" rows="4">{{ old('excerpt', $paper->excerpt) }}</textarea>
                    <small class="form-text text-muted">A brief excerpt or highlight from the paper. Supports HTML formatting.</small>
                </div>
                
                <div class="form-group">
                    <label for="references">References (Optional)</label>
                    <textarea class="form-control" id="references" name="references" rows="4">{{ old('references', $paper->references) }}</textarea>
                    <small class="form-text text-muted">Supports HTML formatting</small>
                </div>
                
                <div class="form-group">
                    <label for="author_bios">Author Biographies (Optional)</label>
                    <textarea class="form-control" id="author_bios" name="author_bios" rows="4">{{ old('author_bios', $paper->author_bios) }}</textarea>
                    <small class="form-text text-muted">Supports HTML formatting</small>
                </div>
                
                <div class="form-group">
                    <label for="paper_file">Paper File</label>
                    <input type="file" class="form-control-file" id="paper_file" name="paper_file" accept=".pdf,.doc,.docx">
                    <small class="form-text text-muted">Allowed formats: PDF, DOC, DOCX (max 10MB)</small>
                    @if($paper->download_url)
                        <div class="mt-2 mb-2">
                            <p>Current file: <a href="{{ $paper->download_url }}" target="_blank">View current document</a></p>
                            <p class="text-muted">Upload a new file only if you want to replace the current one</p>
                        </div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="thumbnail">Thumbnail Image</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail" accept="image/*">
                    <small class="form-text text-muted">Recommended size: 800x600px (max 2MB)</small>
                    @if($paper->thumbnail_url)
                        <div class="mt-2 mb-2">
                            <p>Current thumbnail:</p>
                            <img src="{{ $paper->thumbnail_url }}" alt="Current thumbnail" style="max-width: 200px; height: auto;">
                            <p class="text-muted">Upload a new image only if you want to replace the current one</p>
                        </div>
                    @endif
                </div>
                
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $paper->is_featured) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="is_featured">Feature this paper</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Paper</button>
                    <a href="{{ route('admin.papers.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection