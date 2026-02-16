@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Services</h2>

    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">
        Add Service
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

        @foreach($services as $service)
        <tr>
            <td>{{ $service->title }}</td>
            <td>
                @if($service->image_one)
                    <img src="{{ asset('storage/'.$service->image_one) }}" width="80">
                @endif
            </td>
            <td>
                <a href="{{ route('services.edit',$service->id) }}"
                   class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('services.destroy',$service->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $services->links() }}
</div>
@endsection
