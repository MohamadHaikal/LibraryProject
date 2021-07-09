@extends('layouts.app')
@section('content')

    <div class="text-center">
        <h1>Update Language</h1>
    </div>
    <div class="container">
        <form action="/language/{{ $language->id }}/update" method="POST">
            @csrf
            <div class="form-group">
                <label for="text">Name:</label>
                <input type="text" class="form-control" placeholder="Enter language name" id="name" name="name"
                    value="{{ $language->name }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>



    </div>


    </div>
@endsection
