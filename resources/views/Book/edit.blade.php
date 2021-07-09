@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Update Book</h1>
    </div>
    <div class="container">
        <form action="/book/{{ $book->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="text">Title:</label>
                <input type="text" class="form-control" placeholder="Enter book title" id="title" name="title"
                    value="{{ $book->title }}">
            </div>

            <div class="form-group">
                <label for="Number">Page Number:</label>
                <input type="Number" class="form-control" placeholder="Enter number of page" id="p_num" name="number"
                    value="{{ $book->pages_num }}">
            </div>

            <div class="form-group">
                <label for="text">description:</label>
                <textarea class="form-control" placeholder="Enter book description" id="description"
                    name="description">{{ $book->description }}</textarea>
            </div>

            <div>



                <label for="file">Select File:</label></br>
                <input type="file" id="file" name="file">

            </div>
            </br>
            <div>



                <label for="img">Select image:</label></br>
                <input type="file" id="img" name="img" value="{{ $book->image }}">

            </div>


            </br>
            <label for="text">Language:</label></br>
            <div class="form-group">
                <Select class="form-control" name="lang_id">
                    @foreach ($lang as $l)
                        <option value="{{ $l->id }}">{{ $l->name }} </option>
                    @endforeach


                </Select>
            </div>



            <label for="text">Department:</label></br>

            <div class="form-group">
                <Select class="form-control" name="depart_id">
                    @foreach ($department as $d)
                        <option value="{{ $d->id }}">{{ $d->name }} </option>
                    @endforeach


                </Select>
            </div>
            </br>
            <label for="text">Author:</label></br>

            <div class="form-group">
                <Select class="form-control" name="aut[]" multiple>
                    @foreach ($author as $a)
                        <option value="{{ $a->id }}">{{ $a->name }} </option>
                    @endforeach


                </Select>
            </div>
            </br>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>



    </div>


    </div>
@endsection
