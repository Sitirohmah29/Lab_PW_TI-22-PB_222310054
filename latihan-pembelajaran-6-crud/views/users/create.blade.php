@extends('layouts.index')

@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @include('users.form')
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
