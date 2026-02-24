<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoReview;

class VideoReviewController extends Controller
{
     public function index()
    {
        $videoReviews = VideoReview::where('is_active',1)
                            ->latest()
                            ->paginate(12);

        return view('custom.video_review', compact('videoReviews'));
    }
}
