<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EbookDownload extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'organisation',
        'ebook_title',
        'status',
        'downloaded_at',
    ];

    protected function casts(): array
    {
        return [
            'downloaded_at' => 'datetime',
        ];
    }
}
