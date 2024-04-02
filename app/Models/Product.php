<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model {
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'quatity',
        'price',
        'inStock',
        'published',
        'description',
        'created_by',
        'deleted_by',
        'updated_by',

    ];

    public function getSlugOptions(): SlugOptions {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
