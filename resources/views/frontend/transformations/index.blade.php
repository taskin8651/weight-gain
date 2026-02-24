@extends('custom.master')

@section('content')

  <!-- Inner Banner -->
        <div class="inner-banner inner-bg8">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Our Body Transformation</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Our Body Transformation</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Services Area -->
  <div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>What We Offer</span>
            <h2>Our Body Transformation</h2>
        </div>

        <div class="row pt-45 justify-content-center">

            @forelse($transformations as $item)

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="services-card transformation-card">

                        <!-- Before / After Image -->
                        <div class="transformation-img position-relative overflow-hidden">

                            <!-- Before -->
                            <img src="{{ !empty($item->before_image)
                                ? asset('storage/'.$item->before_image)
                                : 'https://via.placeholder.com/500x500' }}"
                                class="before-img w-100">

                            <!-- After -->
                            <img src="{{ !empty($item->after_image)
                                ? asset('storage/'.$item->after_image)
                                : 'https://via.placeholder.com/500x500' }}"
                                class="after-img w-100">

                            <div class="hover-text">
                                Hover to See After
                            </div>
                        </div>

                        <div class="content text-center mt-3">

                            <h3>{{ $item->name ?? 'Client Name' }}</h3>

                            <span class="goal-badge
                                {{ $item->goal=='weight_loss'
                                    ? 'goal-weight'
                                    : 'goal-muscle' }}">
                                {{ ucfirst(str_replace('_',' ',$item->goal ?? 'weight_loss')) }}
                            </span>

                            <p class="mt-3">
                                {{ \Illuminate\Support\Str::limit($item->description,120) }}
                            </p>

                            <a href="{{ route('transformations.detail',$item->id) }}"
                               class="learn-btn mt-3">
                                View Story
                            </a>

                        </div>

                    </div>
                </div>

            @empty
                <div class="col-12 text-center">
                    <p>No Transformations Yet</p>
                </div>
            @endforelse


            <!-- Pagination -->
            <div class="col-lg-12 text-center mt-4">
                {{ $transformations->links() }}
            </div>

        </div>
    </div>
</div>
        <!-- Services Area End -->

      
<style>
    .transformation-img {
    height: 300px;
    position: relative;
}

.transformation-img img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: opacity 0.5s ease;
}

.after-img {
    opacity: 0;
}

.transformation-card:hover .after-img {
    opacity: 1;
}

.hover-text {
    position: absolute;
    bottom: 10px;
    left: 10px;
    background: rgba(0,0,0,0.6);
    color: #fff;
    padding: 5px 12px;
    font-size: 12px;
    border-radius: 4px;
}

.goal-badge {
    display: inline-block;
    padding: 5px 12px;
    font-size: 12px;
    border-radius: 20px;
    margin-top: 5px;
}

.goal-weight {
    background: #e6f7f0;
    color: #0d9f6e;
}

.goal-muscle {
    background: #e6f0ff;
    color: #2563eb;
}
</style>
@endsection
