@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Contact Messages</h2>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a href="{{ route('contacts.show',$contact->id) }}"
                   class="btn btn-info btn-sm">View</a>

                <form action="{{ route('contacts.destroy',$contact->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $contacts->links() }}
</div>
@endsection
