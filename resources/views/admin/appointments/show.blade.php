@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Appointment Details
    </h2>

    <div class="bg-white p-6 rounded-xl shadow space-y-4">

        <div>
            <strong>User:</strong>
            {{ $appointment->user->name ?? 'Guest' }}
        </div>

        <div>
            <strong>Date:</strong>
            {{ $appointment->appointment_date }}
        </div>

        <div>
            <strong>Goal:</strong>
            {{ ucfirst(str_replace('_',' ',$appointment->goal)) }}
        </div>

        <div>
            <strong>Status:</strong>
            {{ ucfirst($appointment->status) }}
        </div>

        <div>
            <strong>Message:</strong>
            <div class="mt-2 p-4 bg-slate-50 rounded-lg">
                {{ $appointment->message }}
            </div>
        </div>

        {{-- Status Update Buttons --}}
        <div class="pt-4 flex gap-3">

            <form action="{{ route('admin.appointments.update',$appointment->id) }}"
                  method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="approved">
                <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Approve
                </button>
            </form>

            <form action="{{ route('admin.appointments.update',$appointment->id) }}"
                  method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="rejected">
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Reject
                </button>
            </form>

        </div>

    </div>

</div>
@endsection
