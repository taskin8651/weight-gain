@extends('custom.master')
@section('content')

 <!-- Inner Banner -->
        <div class="inner-banner inner-bg8">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Student Reviews</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Student Reviews</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Widget Area -->
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

                                <div class="video-wrapper">
                                    <iframe 
                                        src="https://www.youtube.com/embed/{{ $review->youtube_id }}"
                                        title="{{ $review->name }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>

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

<style>
    .video-wrapper {
    position: relative;
    width: 100%;
    padding-top: 56.25%; /* 16:9 */
    overflow: hidden;
    border-radius: 10px;
}

.video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}
</style>
        <!-- Blog Widget Area End -->


@endsection