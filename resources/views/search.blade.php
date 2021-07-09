@extends('inner-page')

@section('content')


    <!---start result section-->
    <section class="menu section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Search Result</h2>

            </div>
            <div class="row menu-container" data-aos="fade-up1" data-aos-delay="200">
                @foreach ($books as $b)
                    <div class="col-lg-6 menu-item {{ $b->department_id }}">
                        <img src="Uploaded/image/book/{{ $b->image }}" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="/details{{$b->id}} ">{{ $b->title }}</a><span>P.Number: {{ $b->pages_num }}</span>
                        </div>

                        @foreach ($auth_book as $a)
                            <div class="menu-ingredients">
                                @if ($a->books_id == $b->id)
                                    @foreach ($author as $aa)
                                        @if ($a->author_id == $aa->id)

                                            {{ $aa->name }}
                                        @endif

                                    @endforeach
                                @endif
                            </div>
                        @endforeach
                    </div>

                @endforeach

            </div>



        </div>
    </section>
    <!-- End result Section -->

@endsection
