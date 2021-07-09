@extends('layouts.app')
@section('content')

    <div class="text-center">
        <h1>Add Language</h1>
    </div>
    <div class="container">
        <form action="{{ route('language.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="text">Name:</label>
                <input type="text" class="form-control" placeholder="Enter language name" id="name" name="name">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>



    </div>


    </div>
@endsection
