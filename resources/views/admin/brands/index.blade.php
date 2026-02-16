@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Brands</h2>

    <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">
        Add Brand
    </a>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Logo</th>
            <th>Action</th>
        </tr>

        @foreach($brands as $brand)
        <tr>
            <td>{{ $brand->name }}</td>
            <td>
                <img src="{{ asset('storage/'.$brand->logo) }}" width="80">
            </td>
            <td>
                <a href="{{ route('brands.edit',$brand->id) }}"
                   class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('brands.destroy',$brand->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $brands->links() }}
</div>
@endsection
