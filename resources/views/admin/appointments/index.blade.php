
@extends('layouts.admin')

@section('content')

<div class="p-6">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">
                Appointments
            </h2>
            <p class="text-sm text-slate-500 mt-1">
                Manage all appointment requests
            </p>
        </div>

        <div class="bg-indigo-50 text-indigo-700 px-4 py-2 rounded-lg text-sm font-semibold">
            Total: {{ $appointments->total() }}
        </div>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow overflow-x-auto">

        <table class="min-w-full divide-y divide-slate-200">

            <thead class="bg-slate-50">
                <tr>
                    @foreach(['#', 'Name', 'Email', 'Phone', 'Date', 'Program', 'Message', 'Status', 'Actions'] as $heading)
                        <th class="px-5 py-4 text-xs font-semibold text-slate-600 uppercase text-left whitespace-nowrap">
                            {{ $heading }}
                        </th>
                    @endforeach
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200">

                @forelse($appointments as $appointment)

                <tr class="hover:bg-slate-50 transition">

                    <td class="px-5 py-4 text-sm text-slate-600">
                        {{ $appointments->firstItem() + $loop->index }}
                    </td>

                    <td class="px-5 py-4 text-sm font-semibold text-slate-800 whitespace-nowrap">
                        {{ $appointment->name ?? 'N/A' }}
                    </td>

                    <td class="px-5 py-4 text-sm text-slate-600">
                        {{ $appointment->email ?? 'N/A' }}
                    </td>

                    <td class="px-5 py-4 text-sm text-slate-600 whitespace-nowrap">
                        {{ $appointment->phone ?? 'N/A' }}
                    </td>

                    <td class="px-5 py-4 text-sm text-slate-600 whitespace-nowrap">
                        {{ $appointment->appointment_date
                            ? \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y')
                            : 'N/A' }}
                    </td>

                    <td class="px-5 py-4 text-sm text-slate-700 whitespace-nowrap">
                        {{ $appointment->program->name ?? 'N/A' }}
                    </td>

                    <td class="px-5 py-4 text-sm text-slate-600 max-w-xs">
                        <span title="{{ $appointment->message }}">
                            {{ \Illuminate\Support\Str::limit($appointment->message ?? 'N/A', 50) }}
                        </span>
                    </td>

                    <td class="px-5 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full
                            {{ $appointment->status == 'pending'
                                ? 'bg-yellow-100 text-yellow-700'
                                : ($appointment->status == 'approved'
                                    ? 'bg-green-100 text-green-700'
                                    : 'bg-red-100 text-red-700') }}">
                            {{ ucfirst($appointment->status) }}
                        </span>
                    </td>

                    <td class="px-5 py-4 whitespace-nowrap">

                        <div class="flex items-center gap-2">

                            @if($appointment->status != 'approved')
                                <form action="{{ route('admin.appointments.approve', $appointment->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('PATCH')

                                    <button class="px-3 py-2 bg-green-600 text-white text-xs rounded-lg hover:bg-green-700">
                                        Approve
                                    </button>
                                </form>
                            @endif

                            @if($appointment->status != 'rejected')
                                <form action="{{ route('admin.appointments.reject', $appointment->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('PATCH')

                                    <button class="px-3 py-2 bg-orange-500 text-white text-xs rounded-lg hover:bg-orange-600">
                                        Reject
                                    </button>
                                </form>
                            @endif

                            <form action="{{ route('admin.appointments.destroy', $appointment->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                                @csrf
                                @method('DELETE')

                                <button class="px-3 py-2 bg-red-600 text-white text-xs rounded-lg hover:bg-red-700">
                                    Delete
                                </button>
                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="9" class="px-6 py-12 text-center text-slate-500">
                        No appointments found.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    {{-- Pagination --}}
    <div class="mt-5">
        {{ $appointments->links() }}
    </div>

</div>

@endsection
