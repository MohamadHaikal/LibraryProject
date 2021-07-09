@extends('inner-page')

@section('content')

    <div class="text-center">

        <h1>Book Details</h1>
    </div>
    </br>
    <div class="text-center">
        <img src="Uploaded/image/book/{{ $book->image }}" class="img-fluid" alt=""
            style="width:30%; height:30% ;align-self: center;">
    </div>
    </br>

    <div class="text-center">

        <button type="button" class="btn btn-success"><a href="Uploaded/file/{{ $book->file }}"
                download="{{ $book->title }}">Download</a></button>

        <button type="button" class="btn btn-info" style="margin-left:100px;"><a href="#reading">Reading</a></button>
    </div>

    <div style="margin-top: -300px;">

        <h5>Title: {{ $book->title }} </h5>
        </br>


        <h5>Authors:
            @foreach ($auth_book as $a)

                @if ($a->books_id == $book->id)
                    @foreach ($author as $aa)
                        @if ($a->author_id == $aa->id)

                            {{ $aa->name }}
                            </br>
                        @endif

                    @endforeach
                @endif

            @endforeach
        </h5>
        </br>

        <h5>PagesNumber: {{ $book->pages_num }}</h5>
        </br>

        <h5>Department:
            @foreach ($department as $d)

                @if ($d->id == $book->department_id)

                    {{ $d->name }}

                @endif

            @endforeach

        </h5>
        </br>
        <h5>Language:
            @foreach ($language as $l)

                @if ($l->id == $book->language_id)

                    {{ $l->name }}

                @endif

            @endforeach
        </h5>
        </br>

    </div>
    </br>
    <h5 style=" margin-top: 50px">Description:</br></h5>

    <textarea style="width:100% ; height: 118px; margin-bottom: 50px;" readonly>
            {{ $book->description }}
        </textarea>
    </br>

    <section id="reading" class="text-center">
        <object data="Uploaded/file/{{ $book->file }}" type="application/pdf" style="width:100% ;height:450px ;">
            <p>Alternative text - include a link <a href="Uploaded/file/{{ $book->file }}">to the PDF!</a></p>
        </object>
    </section>

@endsection
