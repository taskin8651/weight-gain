<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoReviewController extends Controller
{
    public function index()
    {
        $reviews = VideoReview::latest()->paginate(10);

        return view('admin.video_reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.video_reviews.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'youtube_url' => 'required|url',
            'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // 'is_active'   => 'nullable|boolean',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] =
                $request->file('thumbnail')->store('video_reviews', 'public');
        }

        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        VideoReview::create($validated);

        return redirect()
            ->route('admin.video-reviews.index')
            ->with('success', 'Video Review Created Successfully');
    }

    public function edit(VideoReview $video_review)
    {
        return view('admin.video_reviews.edit', compact('video_review'));
    }

    public function update(Request $request, VideoReview $video_review)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'youtube_url' => 'required|url',
            'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // 'is_active'   => 'nullable|boolean',
        ]);

        if ($request->hasFile('thumbnail')) {

            if ($video_review->thumbnail) {
                Storage::disk('public')->delete($video_review->thumbnail);
            }

            $validated['thumbnail'] =
                $request->file('thumbnail')->store('video_reviews', 'public');
        }

        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        $video_review->update($validated);

        return redirect()
            ->route('admin.video-reviews.index')
            ->with('success', 'Video Review Updated Successfully');
    }

    public function destroy(VideoReview $video_review)
    {
        if ($video_review->thumbnail) {
            Storage::disk('public')->delete($video_review->thumbnail);
        }

        $video_review->delete();

        return redirect()
            ->route('admin.video-reviews.index')
            ->with('success', 'Video Review Deleted Successfully');
    }
}