@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Transformations</h2>

    <a href="{{ route('transformations.create') }}" class="btn btn-primary mb-3">
        Add Transformation
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Before</th>
            <th>After</th>
            <th>Action</th>
        </tr>

        @foreach($transformations as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>
                <img src="{{ asset('storage/'.$item->before_image) }}"
                     width="80">
            </td>
            <td>
                <img src="{{ asset('storage/'.$item->after_image) }}"
                     width="80">
            </td>
            <td>
                <a href="{{ route('transformations.edit',$item->id) }}"
                   class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('transformations.destroy',$item->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $transformations->links() }}
</div>
@endsection
