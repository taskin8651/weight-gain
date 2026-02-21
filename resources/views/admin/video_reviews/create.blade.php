@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-6">Add Video Review</h2>

    <form method="POST"
          action="{{ route('admin.video-reviews.store') }}"
          enctype="multipart/form-data">
        @include('admin.video_reviews.form')
    </form>
</div>
@endsection