<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquiry extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'form_type',
        'name',
        'organisation',
        'email',
        'phone',
        'event_name',
        'event_date',
        'event_type',
        'audience_size',
        'location',
        'speaker_request',
        'programme_support',
        'budget',
        'message',
        'status',
        'read_at',
        'replied_at',
    ];

    protected function casts(): array
    {
        return [
            'event_date' => 'date',
            'read_at' => 'datetime',
            'replied_at' => 'datetime',
        ];
    }
}
