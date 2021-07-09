<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>library - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-phone"></i> +963 945935236
                <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat:
                    11:00 AM - 23:00 PM</span>
            </div>
            <div class="languages">
                <ul>
                    <li>En</li>
                    <li><a href="#">De</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html">Library</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Arabic Books </a></li>

                    <li><a href="#English">English Books </a></li>
                    <li><a href="#search_result">Search </a></li>
                    <li><a href="#specials">the best today </a></li>
                    <li><a href="#events">The Latest Today</a></li>
                    <li><a href="#chefs">authors </a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>Electronic library </span></h1>
                    <h2>One of the greatest electronic Libraries in the Arab world </h2>

                    <div class="btns text-center">
                        <a href="#English" class="btn-menu animated fadeInUp scrollto">Our Book </a>

                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in"
                    data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="assets/img/images/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>electronic library </h3>
                        <p class="font-italic">
                            An electronic library is allows users, to read or refer any published items from their
                            residence or office or college via internet. Users are no need to visit the library directly
                            for their reference.Elibrarys.
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> This library offers Arabic and English books</li>
                            <li><i class="icofont-check-circled"></i> This library offers all scientific books, novels
                                and stories</li>

                        </ul>
                        <p>
                            The more you read, the more you know, the more places you can travel to with your
                            imagination.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!---english book-->
        <section id="English" class="menu section-bg">
            <div class="container" data-aos="fade-up">



                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">

                        <ul id="menu-flters">
                            <li data-filter="*">All</li>
                            @foreach ($department as $one)
                                <li data-filter=".{{ $one->id }}" class="filter-active">{{ $one->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="section-title">
                    <h2>Sections</h2>
                    <p>Check English Books</p>
                </div>
                <div class="row menu-container" data-aos="fade-up1" data-aos-delay="200">
                    @foreach ($english_book as $b)
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
        </section><!-- End english book Section -->

        <!---arabic book-->
        <section id="menu" class="menu section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Sections</h2>
                    <p>Check Arabic Books</p>
                </div>



                <div class="row menu-container" data-aos="fade-up1" data-aos-delay="200">
                    @foreach ($arabic_book as $b)
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

        </section>
        <!--end arabic book-->


        <!-- ======= the best Today  Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>The Best Today</h2>
                    <p>Check Today's best books</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Arabic Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">English Book</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            @foreach ($bestArabic as $b)


                                <div class="tab-pane active show" id="tab-1">
                                    <div class="row">
                                        <div class="col-lg-8 details order-2 order-lg-1">
                                            <h3>{{ $b->title }}</h3>
                                            <p>Written by:
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
                                            </p>

                                            <p> {{ $b->description }}</p>
                                        </div>
                                        <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="Uploaded/image/book/{{ $b->image }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($bestEnglish as $b)
                                <div class="tab-pane" id="tab-2">
                                    <div class="row">
                                        <div class="col-lg-8 details order-2 order-lg-1">
                                            <h3>{{ $b->title }}</h3>
                                            <p>Written by: @foreach ($auth_book as $a)
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
                                            </p>

                                            <p> {{ $b->description }}</p>
                                        </div>
                                        <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="Uploaded/image/book/{{ $b->image }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End the best today  Section -->

        <!-- ======= The Latest Today Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>The Latest Today</h2>
                    <p>Latest Arabic and English books</p>
                </div>


                <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($last_book as $b)
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="Uploaded/image/book/{{ $b->image }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>{{ $b->title }}</h3>
                                <div class="price">
                                    <p><span>Number of Page: {{ $b->pages_num }}</span></p>
                                </div>

                                <ul>
                                    <li><i class="icofont-check-circled"></i>Authors:
                                        @foreach ($auth_book as $a)
                                           
                                                @if ($a->books_id == $b->id)
                                                    @foreach ($author as $aa)
                                                        @if ($a->author_id == $aa->id)

                                                            {{ $aa->name }} </br>
                                                        @endif

                                                    @endforeach
                                                @endif
                                          
                                        @endforeach
                                    </li>

                                    <li><i class="icofont-check-circled"></i> Publication date: {{ $b->created_at }}
                                    </li>
                                </ul>

                                <p class="font-italic">
                                    {{ $b->description }}
                                </p>

                            </div>
                        </div>
                    @endforeach



                </div>

            </div>
        </section><!-- End The Latest Today Section -->



        <!-- ======= Search Section ======= -->
        <section id="search_result" class="testimonials section-bg footer-info">
            <div class="section-title container">
                <h2>Search</h2>
                <p>Search Book </p>
            </div>

            <div class="footer-newsletter footer-top container text-center">

                <form action="/search" type="GET">
                    <input type="text" name="search" placeholder="Enter Title of book"><input type="submit">
                </form>

            </div>

        </section>
        <!-- End Search Section -->

        <!-- ======= authers Section ======= -->
        <section id="chefs" class="chefs">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Authers</h2>
                    <p>Greatest Authors </p>
                </div>

                <div class="row">
                    @foreach ($author as $a)
                        <div class="col-lg-4 col-md-6">
                            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                <img src="Uploaded/image/author/{{ $a->image }}" class="img-fluid" alt=""
                                    style="width:100%; ">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{ $a->name }}</h4>

                                        <p>{{ $a->about }}</p>
                                        <h6>Number of Book: {{ $a->book_num }}</h6>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
        </section><!-- End authers Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">


                <div class="info container">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="open-hours">
                        <i class="icofont-clock-time icofont-rotate-90"></i>
                        <h4>Open Hours:</h4>
                        <p>
                            Monday-Saturday:<br>
                            11:00 AM - 2300 PM
                        </p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+963 938 045 918</p>
                    </div>

                </div>

            </div>





        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Library</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +963 938 045 918<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Library</span></strong>. All Rights Reserved
            </div>


            <div id="preloader"></div>
            <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>
            <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/venobox/venobox.min.js"></script>
            <script src="assets/vendor/aos/aos.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

</body>

</html>
