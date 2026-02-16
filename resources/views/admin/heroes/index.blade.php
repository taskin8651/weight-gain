@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Hero Sections</h2>

    <a href="{{ route('hero-sections.create') }}"
       class="btn btn-primary mb-3">Add Hero</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Background</th>
            <th>Action</th>
        </tr>

        @foreach($heroes as $hero)
        <tr>
            <td>{{ $hero->title }}</td>
            <td>
                @if($hero->background_image)
                    <img src="{{ asset('storage/'.$hero->background_image) }}"
                         width="100">
                @endif
            </td>
            <td>
                <a href="{{ route('hero-sections.edit',$hero->id) }}"
                   class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('hero-sections.destroy',$hero->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $heroes->links() }}
</div>
@endsection
