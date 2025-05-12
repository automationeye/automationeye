<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Paper extends Model
{
    use HasFactory;
    protected $table = 'research_papers';

    protected $fillable = [
        'title',
        'slug',
        'abstract',
        'authors',
        'published_date',
        'keywords',
        'excerpt',
        'references',
        'author_bios',
        'is_featured',
        'thumbnail_url',
        'download_url',
        'qr_code_url',
        'downloads',
    ];

    protected $casts = [
        'published_date' => 'date',
        'is_featured' => 'boolean',
        'downloads' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($paper) {
            $paper->slug = Str::slug($paper->title);
            $paper->downloads = 0;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function incrementDownloadCount()
    {
        $this->downloads++;
        $this->save();
    }

    public function getShortAbstractAttribute($length = 150)
    {
        return Str::limit($this->abstract, $length);
    }
}