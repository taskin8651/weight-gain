@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>About Sections</h2>

    <a href="{{ route('abouts.create') }}" class="btn btn-primary mb-3">
        Add About
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        @foreach($abouts as $about)
        <tr>
            <td>{{ $about->title }}</td>
            <td>
                @if($about->image)
                    <img src="{{ asset('storage/'.$about->image) }}" width="80">
                @endif
            </td>
            <td>
                <a href="{{ route('abouts.edit',$about->id) }}"
                   class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('abouts.destroy',$about->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $abouts->links() }}
</div>
@endsection
