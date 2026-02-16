@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Create Contact
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.contacts.store') }}"
              method="POST">
            @include('admin.contacts._form')
        </form>
    </div>

</div>
@endsection
