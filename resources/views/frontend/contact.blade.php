@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-emerald-50">
    <div class="max-w-5xl mx-auto px-6">

        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-slate-800">Contact Us</h1>
            <p class="mt-4 text-slate-600">
                Get in touch and start your fitness journey today.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow p-8">

            <form method="POST" action="#">
                @csrf

                <div class="grid md:grid-cols-2 gap-6 mb-6">

                    <input type="text" name="name"
                           placeholder="Your Name"
                           class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-emerald-500">

                    <input type="email" name="email"
                           placeholder="Your Email"
                           class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-emerald-500">

                </div>

                <textarea name="message" rows="5"
                          placeholder="Your Message"
                          class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-emerald-500 mb-6"></textarea>

                <button type="submit"
                        class="bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700 transition">
                    Send Message
                </button>

            </form>

        </div>

    </div>
</section>

@endsection
