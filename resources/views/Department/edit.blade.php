@extends('layouts.app')
@section('content')

    <div class="text-center">
        <h1>Update Department</h1>
    </div>
    <div class="container">
        <form action="/department/{{ $department->id }}/update" method="POST">
            @csrf
            <div class="form-group">
                <label for="text">Name:</label>
                <input type="text" class="form-control" placeholder="Enter department name" id="name" name="name"
                    value="{{ $department->name }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>



    </div>


    </div>
@endsection
