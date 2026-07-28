<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedVideo extends Model
{
    protected $fillable = [
        'title',
        'youtube_url',
        'description',
        'sort_order',
        'status',
    ];

    /**
     * Extract YouTube video ID from various URL formats.
     */
    public function getYoutubeIdAttribute(): ?string
    {
        $url = $this->youtube_url;

        // youtu.be/ID
        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]{11})/', $url, $m)) {
            return $m[1];
        }

        // youtube.com/watch?v=ID or /shorts/ID or /embed/ID
        if (preg_match('/(?:v=|\/embed\/|\/shorts\/)([a-zA-Z0-9_-]{11})/', $url, $m)) {
            return $m[1];
        }

        return null;
    }

    /**
     * Return the highest-quality thumbnail available for the video.
     */
    public function getThumbnailUrlAttribute(): string
    {
        $id = $this->youtube_id;

        if (!$id) {
            return 'https://placehold.co/640x360/1a1a2e/gold?text=Video';
        }

        return "https://img.youtube.com/vi/{$id}/maxresdefault.jpg";
    }

    /**
     * Return a clean YouTube watch URL.
     */
    public function getWatchUrlAttribute(): string
    {
        $id = $this->youtube_id;

        return $id ? "https://www.youtube.com/watch?v={$id}" : $this->youtube_url;
    }

    /**
     * Return a clean YouTube embed URL for use in iframes.
     */
    public function getEmbedUrlAttribute(): string
    {
        $id = $this->youtube_id;

        return $id ? "https://www.youtube.com/embed/{$id}" : $this->youtube_url;
    }
}
