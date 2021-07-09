@extends('layouts.app')
@section('content')

    <div class="text-center">
        <h1>All Book</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id </th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->description }}</td>
                        <td>
                            <a class="btn btn-success" href="/book/{{ $b->id }}/edit">Update</a>
                            <a class="btn btn-danger" href="/book/{{ $b->id }}">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    </div>



@endsection
