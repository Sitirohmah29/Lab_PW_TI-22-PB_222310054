@extends('StudentIBIK.layouts.index')

@section('main-content')
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header fw-bold ">
                    List of Students
                </div>
                <div class="card-body">
                    <table class="table">
                        @if (count($data) > 0)
                            <thead>
                                <tr>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $student)
                                    <tr>
                                        <th>{{ $loop->index + 1 }}</th>
                                        <td>{{ $student->npm }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="/details/{{ $student->id }}" class="mx-2">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                </a>
                                                <a href="/update/{{ $student->id }}">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                </a>
                                                <form action="/delete/{{ $student->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm mx-2"
                                                        onclick="return confirm('Apakah data {{ $student->name }} tersebut mau dihapus?')">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @else
                            <h3>No Record!</h3>
                        @endif
                    </table>
                </div>
            </div>
            <div class="mt-3">
                {{-- {{ $data->links() }} --}}
            </div>
        </div>
        <div class="col-lg-4">
            @include('StudentIBIK.modules.students.create')
        </div>
    </div>
@endsection
