<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoReview extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'youtube_url',
        'thumbnail',
        'is_active',
    ];

    // Extract YouTube ID
    public function getYoutubeIdAttribute()
    {
        preg_match(
            '/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([^\&\?\/]+)/',
            $this->youtube_url,
            $matches
        );

        return $matches[1] ?? null;
    }
}