@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-6">Edit Video Review</h2>

    <form method="POST"
          action="{{ route('admin.video-reviews.update', $video_review) }}"
          enctype="multipart/form-data">
        @method('PUT')
        @include('admin.video_reviews.form')
    </form>
</div>
@endsection