@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Contact Message Detail
    </h2>

    <div class="bg-white p-6 rounded-xl shadow space-y-5">

        <div>
            <span class="font-semibold text-slate-700">Name:</span>
            <p class="text-slate-600 mt-1">{{ $contact->name }}</p>
        </div>

        <div>
            <span class="font-semibold text-slate-700">Email:</span>
            <p class="text-slate-600 mt-1">{{ $contact->email }}</p>
        </div>

        <div>
            <span class="font-semibold text-slate-700">Phone:</span>
            <p class="text-slate-600 mt-1">
                {{ $contact->phone ?? 'Not Provided' }}
            </p>
        </div>

        <div>
            <span class="font-semibold text-slate-700">Message:</span>
            <div class="mt-2 p-4 bg-slate-50 rounded-lg text-slate-700">
                {{ $contact->message }}
            </div>
        </div>

        <div class="pt-4">
            <a href="{{ route('admin.contacts.index') }}"
               class="px-5 py-2 bg-slate-600 text-white rounded-lg
                      hover:bg-slate-700 transition">
                Back
            </a>
        </div>

    </div>

</div>
@endsection
