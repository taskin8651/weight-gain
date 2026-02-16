@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-6">

        <div class="bg-white rounded-2xl shadow-lg p-10 border">

            <h2 class="text-3xl font-bold text-slate-800 mb-8 text-center">
                Book Your Appointment
            </h2>

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid md:grid-cols-2 gap-6">

                    {{-- Name --}}
                    <div>
                        <label class="block text-sm font-medium mb-2">Full Name</label>
                        <input type="text" name="name"
                               class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-emerald-500"
                               value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" name="email"
                               class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-emerald-500"
                               value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label class="block text-sm font-medium mb-2">Phone</label>
                        <input type="text" name="phone"
                               class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-emerald-500"
                               value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Program --}}
                    <div>
                        <label class="block text-sm font-medium mb-2">Select Program</label>
                        <select name="program_id"
                                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-emerald-500">
                            <option value="">Choose Program</option>
                            @foreach($programs as $program)
                                <option value="{{ $program->id }}">
                                    {{ $program->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('program_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Date --}}
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium mb-2">Preferred Date</label>
                        <input type="date" name="date"
                               class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-emerald-500">
                        @error('date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                {{-- Message --}}
                <div>
                    <label class="block text-sm font-medium mb-2">Message (Optional)</label>
                    <textarea name="message" rows="4"
                              class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-emerald-500"></textarea>
                </div>

                <button type="submit"
                        class="w-full bg-emerald-600 text-white py-3 rounded-lg hover:bg-emerald-700 transition text-lg font-semibold">
                    Book Appointment
                </button>

            </form>

        </div>

    </div>
</section>

@endsection
