@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Testimonials</h2>

    <a href="{{ route('testimonials.create') }}"
       class="btn btn-primary mb-3">Add Testimonial</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Rating</th>
            <th>Action</th>
        </tr>

        @foreach($testimonials as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>
                @if($item->image)
                    <img src="{{ asset('storage/'.$item->image) }}" width="60">
                @endif
            </td>
            <td>{{ $item->rating }} ⭐</td>
            <td>
                <a href="{{ route('testimonials.edit',$item->id) }}"
                   class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('testimonials.destroy',$item->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $testimonials->links() }}
</div>
@endsection
