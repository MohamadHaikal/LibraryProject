@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Add Author</h1>
    </div>
    <div class="container">
        <form action="{{ route('Authors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="text">Name:</label>
                <input type="text" class="form-control" placeholder="Enter author name" id="title" name="name">
            </div>

            <div class="form-group">
                <label for="text">about:</label>
                <textarea class="form-control" placeholder="Enter about author" id="description" name="about"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" name="image">
            </div>


            </br>

            </br>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>



    </div>


    </div>
@endsection
