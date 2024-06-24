@extends('layouts.index')

@section('content')
<div class="container">
    <h1>User Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td>{{ $user->fullname }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $user->address }}</td>
        </tr>
        <tr>
            <th>Birthdate</th>
            <td>{{ $user->birthdate }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $user->gender }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $user->phone }}</td>
        </tr>
    </table>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
