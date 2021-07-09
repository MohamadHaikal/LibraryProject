@extends('layouts.app')
@section('content')

    <div class="text-center">
        <h1>All Department</h1>
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
                @foreach ($department as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->name }}</td>
                        <td>
                            <a class="btn btn-success" href="/department/{{ $d->id }}/edit">Update</a>
                            <a class="btn btn-danger" href="/department/{{ $d->id }}">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    </div>



@endsection
