@extends('layouts.app')
@section('content')

    <div class="text-center">
        <h1>All Authors</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id </th>
                    <th>Name</th>
                    <th>About</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($author as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->about }}</td>
                        <td>
                            <a class="btn btn-success" href="/authors/{{ $a->id }}/edit">Edit</a>
                            <a class="btn btn-danger" href="/authors/{{ $a->id }}">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>





@endsection
