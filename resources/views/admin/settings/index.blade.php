@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Settings</h2>

    <a href="{{ route('settings.create') }}"
       class="btn btn-primary mb-3">
        Add Setting
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Site Name</th>
            <th>Logo</th>
            <th>Action</th>
        </tr>

        @foreach($settings as $setting)
        <tr>
            <td>{{ $setting->site_name }}</td>
            <td>
                @if($setting->logo)
                    <img src="{{ asset('storage/'.$setting->logo) }}"
                         width="80">
                @endif
            </td>
            <td>
                <a href="{{ route('settings.edit',$setting->id) }}"
                   class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('settings.destroy',$setting->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $settings->links() }}
</div>
@endsection
