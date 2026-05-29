<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'featured_image_path',
        'excerpt',
        'content',
        'author',
        'published_at',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'date',
        ];
    }
}
