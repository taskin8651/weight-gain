@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Appointments</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>User</th>
            <th>Date</th>
            <th>Goal</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($appointments as $appointment)
        <tr>
            <td>{{ $appointment->user->name }}</td>
            <td>{{ $appointment->appointment_date }}</td>
            <td>{{ ucfirst(str_replace('_',' ',$appointment->goal)) }}</td>
            <td>
                <span class="badge bg-{{ 
                    $appointment->status == 'approved' ? 'success' :
                    ($appointment->status == 'rejected' ? 'danger' : 'warning')
                }}">
                    {{ ucfirst($appointment->status) }}
                </span>
            </td>
            <td>

                @if($appointment->status == 'pending')
                    <form action="{{ route('appointments.approve',$appointment->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-sm btn-success">Approve</button>
                    </form>

                    <form action="{{ route('appointments.reject',$appointment->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-sm btn-danger">Reject</button>
                    </form>
                @endif

                <form action="{{ route('appointments.destroy',$appointment->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-dark">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

    {{ $appointments->links() }}
</div>
@endsection
