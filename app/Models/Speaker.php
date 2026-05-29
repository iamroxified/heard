<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speaker extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'full_name',
        'slug',
        'headshot_path',
        'short_bio',
        'expertise_tags',
        'speaking_topics',
        'notable_past_stages',
        'category',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'expertise_tags' => 'array',
        ];
    }
}
