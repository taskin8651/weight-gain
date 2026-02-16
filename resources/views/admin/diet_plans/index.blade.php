@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Diet Plans</h2>

    <a href="{{ route('diet-plans.create') }}" class="btn btn-primary mb-3">
        Add Diet Plan
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Goal</th>
            <th>Program</th>
            <th>Action</th>
        </tr>

        @foreach($dietPlans as $plan)
        <tr>
            <td>{{ $plan->title }}</td>
            <td>{{ ucfirst(str_replace('_',' ',$plan->goal)) }}</td>
            <td>{{ $plan->program->title ?? '-' }}</td>
            <td>
                <a href="{{ route('diet-plans.edit',$plan->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('diet-plans.destroy',$plan->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $dietPlans->links() }}
</div>
@endsection
