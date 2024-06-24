@extends('layouts.index')

@section('content')
<div class="container">
    <h1>Users</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->birthdate }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
