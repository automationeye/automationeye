<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories'; 

    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon_class'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function papers()
    {
        return $this->belongsToMany(Paper::class, 'category_research_paper', 'category_id', 'paper_id');
    }
}