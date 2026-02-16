@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Programs</h2>

    <a href="{{ route('programs.create') }}" class="btn btn-primary mb-3">
        Add Program
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Type</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Action</th>
        </tr>

        @foreach($programs as $program)
        <tr>
            <td>{{ $program->title }}</td>
            <td>{{ $program->type }}</td>
            <td>{{ $program->price }}</td>
            <td>{{ $program->duration }}</td>
            <td>
                <a href="{{ route('programs.edit',$program->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('programs.destroy',$program->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $programs->links() }}
</div>
@endsection
