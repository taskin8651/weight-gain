@extends('custom.master')

@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg8">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Submit Testimonial</h3>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>Testimonial</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->


<div class="contact-area pt-100 pb-70">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-8">

<div class="contact-form">

<h3>Share Your Experience</h3>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<form action="{{ route('testimonial.store') }}" method="POST">
@csrf

<div class="row">

<div class="col-lg-6">
<div class="form-group">
<input type="text" name="name"
class="form-control"
placeholder="Your Name*"
value="{{ old('name') }}">
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<input type="text" name="designation"
class="form-control"
placeholder="Your Designation (Student / Client)"
value="{{ old('designation') }}">
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<textarea name="message"
class="form-control"
rows="5"
placeholder="Your Testimonial*">{{ old('message') }}</textarea>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<select name="rating" class="form-control">

<option value="">Select Rating</option>

<option value="5">⭐⭐⭐⭐⭐ Excellent</option>
<option value="4">⭐⭐⭐⭐ Very Good</option>
<option value="3">⭐⭐⭐ Good</option>
<option value="2">⭐⭐ Average</option>
<option value="1">⭐ Poor</option>

</select>
</div>
</div>

<div class="col-lg-12">
<button type="submit" class="default-btn">
Submit Testimonial
</button>
</div>

</div>
</form>

</div>

</div>

</div>
</div>
</div>

@endsection