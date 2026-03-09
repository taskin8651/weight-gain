@extends('custom.master')
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg8">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Student Reviews</h3>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Student Reviews</li>
            </ul>
        </div>
    </div>
</div>


<!-- Reviews Area -->
<div class="blog-widget-area pt-100 pb-70">
<div class="container">
<div class="row">

<div class="categories-title mb-4">
<h3>Student Reviews</h3>
</div>

<div class="col-lg-12">
<div class="row justify-content-center">

@forelse($videoReviews as $review)

<div class="col-lg-4 col-md-6 mb-4">
<div class="blog-item">

{{-- Uploaded Video --}}
@if($review->video)

<div class="video-wrapper">

<video controls width="100%">
<source src="{{ asset('storage/'.$review->video) }}" type="video/mp4">
</video>

</div>

{{-- YouTube Video --}}
@elseif($review->youtube_id)

<div class="video-wrapper">

<iframe
src="https://www.youtube.com/embed/{{ $review->youtube_id }}"
title="{{ $review->name }}"
frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
allowfullscreen>
</iframe>

</div>

{{-- Instagram Video --}}
@elseif(Str::contains($review->youtube_url,'instagram.com'))

<div class="video-thumb" onclick="openVideo('{{ $review->youtube_url }}')">

<img src="/images/instagram-thumb.jpg" alt="">

<div class="play-btn">▶</div>

</div>

@endif


<div class="content text-center mt-3">
<h5>{{ $review->name }}</h5>
<span>{{ $review->designation }}</span>
</div>

</div>
</div>

@empty

<div class="col-12 text-center">
<p>No Reviews Available</p>
</div>

@endforelse


<!-- Pagination -->
<div class="col-lg-12 text-center mt-4">
{{ $videoReviews->links() }}
</div>

</div>
</div>

</div>
</div>
</div>


<!-- Video Popup -->
<div id="videoModal" class="video-modal">
<div class="video-modal-content">
<span class="close" onclick="closeVideo()">×</span>
<iframe id="modalVideo" frameborder="0" allowfullscreen></iframe>
</div>
</div>


<style>

.video-wrapper{
position:relative;
width:100%;
padding-top:56.25%;
overflow:hidden;
border-radius:10px;
}

.video-wrapper iframe,
.video-wrapper video{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
border:none;
}

.video-thumb{
position:relative;
cursor:pointer;
}

.video-thumb img{
width:100%;
border-radius:10px;
}

.play-btn{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
font-size:40px;
color:#fff;
background:red;
width:60px;
height:60px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
}

.video-modal{
display:none;
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,.8);
justify-content:center;
align-items:center;
z-index:9999;
}

.video-modal-content{
width:80%;
max-width:800px;
position:relative;
}

.video-modal iframe{
width:100%;
height:450px;
}

.close{
position:absolute;
top:-40px;
right:0;
color:#fff;
font-size:35px;
cursor:pointer;
}

</style>


<script>

function openVideo(url){

let embedUrl = url.replace(/\/$/, "") + "/embed";

document.getElementById('videoModal').style.display='flex';
document.getElementById('modalVideo').src=embedUrl;

}

function closeVideo(){

document.getElementById('videoModal').style.display='none';
document.getElementById('modalVideo').src='';

}

</script>

@endsection