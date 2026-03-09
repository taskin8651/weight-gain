<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoReview extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'youtube_url',
        'video',
        'thumbnail',
        'is_active',
    ];

    // Extract YouTube ID
    public function getYoutubeIdAttribute()
    {
        if (!$this->youtube_url) return null;

        preg_match(
            '/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([^\&\?\/]+)/',
            $this->youtube_url,
            $matches
        );

        return $matches[1] ?? null;
    }

    // Check if Instagram
    public function getIsInstagramAttribute()
    {
        return str_contains($this->youtube_url, 'instagram.com');
    }
}