@extends('layouts.app')
@section('content')

    <div class="text-center">
        <h1>All Languages</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id </th>
                    <th>Name</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lang as $l)
                    <tr>
                        <td>{{ $l->id }}</td>
                        <td>{{ $l->name }}</td>
                        <td><a class="btn btn-success" href="/language/{{ $l->id }}/edit">Update</a>
                            <a class="btn btn-danger" href="/language/{{ $l->id }}">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    </div>



@endsection
