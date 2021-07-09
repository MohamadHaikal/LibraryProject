@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Update Author</h1>
    </div>
    <div class="container">
        <form action="/authors/{{ $author->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="text">Name:</label>
                <input type="text" class="form-control" placeholder="Enter author name" id="title" name="name"
                    value="{{ $author->name }}">
            </div>

            <div class="form-group">
                <label for="Number">Book Number:</label>
                <input type="Number" class="form-control" placeholder="Enter number of page" id="p_num" name="number"
                    value="{{ $author->book_num }}">
            </div>

            <div class="form-group">
                <label for="text">About:</label>
                <textarea class="form-control" placeholder="Enter book description" id="description"
                    name="about">{{ $author->about }}</textarea>
            </div>


            <div>

                <label for="image">Select image:</label></br>
                <input type="file" id="img" name="image" value="{{ $author->image }}">

            </div>


            </br>

            </br>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>



    </div>


    </div>
@endsection
