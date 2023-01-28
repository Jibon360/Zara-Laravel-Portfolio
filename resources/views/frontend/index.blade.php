<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zara minimal personal portfolio</title>
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fancybox.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/kursor.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/poppin-google-font.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/aos.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/normalize.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body data-bs-spy="scroll" data-bs-target="navbar">

    <!-- ===================================header================================================ -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('frontpage') }}"> @isset($logo->logo_name)
                        {{ $logo->logo_name }}
                    @endisset
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- ===================================header end================================================ -->

    <!-- ===================================Banner================================================ -->

    <section class="banner" id="home" style="background-image: url('{{ asset($banner->image) }}');">
        <div class="container baner-fluid" id="particles-js">
            <div class="banner-content">
                <h4><span class=" text-brand">{{ $banner->title }}</span></h4>
                <div class="selector">
                    <h1 class="ah-headline">
                        <span>I am</span>
                        <span class="ah-words-wrapper">
                            @foreach ($animatedheadlines as $animatedheadline)
                                <b class="is-visible">{{ $animatedheadline->title }}</b>
                            @endforeach


                        </span>
                    </h1>
                </div>
                <p>{{ $banner->descriptions }} </p>
                <a href="
                @isset($cv->cvfile)
                {{ asset($cv->cvfile) }}
                @endisset
                
                "
                    class="btn btn-danger" download="">Download Cv &nbsp; <i class="fa-solid fa-download fa-bounce"
                        style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;"></i></a>
            </div>
        </div>
    </section>
    <!-- ===================================Banner end================================================ -->

    <!-- ===================================About start================================================ -->
    <section class="p-80" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left" data-aos="fade-right" data-aos-offset="200" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                        <div class="about-image">
                            <img src="{{ asset($about->image) }}" class=" img-fluid" alt="about image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right mt-4 mt-lg-0" data-aos="fade-left" data-aos-offset="200"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-mirror="true">
                        <h2>{{ $about->bigtitle }}</h2>
                        <p>{{ $about->descriptions }}
                        </p>

                        @forelse ($aboutshorts as $aboutshort)
                            <div class="about-bio">
                                <!-- single big -->
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span
                                            class=" fw-semibold">{{ $aboutshort->info }}</span></li>
                                    <li class="list-inline-item">:</li>
                                    <li class="list-inline-item">{{ $aboutshort->data }}</li>
                                </ul>
                            </div>
                        @empty
                        @endforelse

                        <a href="" class="btn btn-danger">Download Cv &nbsp; <i
                                class="fa-solid fa-download fa-bounce"
                                style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================About end================================================ -->

    <!-- ===================================Services setart================================================ -->
    <section class="pb-80" id="services">
        <div class="container">
            <!-- section caption -->
            <div class="sec-cap pb-45 text-center" data-aos="flip-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <h2>my <span>services</span></h2>
                <div class="sec-border fa-flip" style="--fa-animation-duration: 3s;"></div>
            </div>
            <div class="row g-4">

                <!-- services item -->
                @forelse ($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-offset="200" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                        <div class="signle-services text-center">
                            <i class="{{ $service->icon }}"></i>
                            <h4>{{ $service->title }}
                            </h4>
                            <p>{{ $service->descripiton }}</p>
                            <div class="servi-overly"></div>
                        </div>
                    </div>
                @empty
                    <p class=" text-center text-brand">no services Available,Available comming Soon</p>
                @endforelse


            </div>
        </div>
    </section>
    <!-- ===================================Services end================================================ -->

    <!-- ===================================i am available availabe================================================ -->
    <section class="p-80 available"
        style="background-image: url('{{ asset('frontend') }}/assets/images/cta-action.jpg');">
        <div class="container">
            <div class="avaiable-info text-center text-white" data-aos="flip-down" data-aos-offset="200"
                data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <h2>I Am Available For Freelancer !
                </h2>
                <a href="" class="mt-4 btn btn-danger ">Hire Me</a>
            </div>
        </div>
    </section>
    <!-- ===================================i am available availabe end===================================== -->

    <!-- ===================================my portfolio start===================================== -->
    <section class="portfolio p-80" id="portfolio">
        <div class="container">
            <div class="sec-cap pb-45 text-center" data-aos="flip-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <h2>my <span>portfolio</span></h2>
                <div class="sec-border fa-flip" style="--fa-animation-duration: 3s;"></div>
            </div>
            <div class="portfolio-btngroup mb-5" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <ul class="liist-inline justify-content-center text-center">
                    <li class="list-inline-item"><button type="button" data-filter="all"
                            class="btn btn-outline-danger btn-sm">All</button></li>
                    <li class="list-inline-item"><button type="button" data-filter=".branding"
                            class="btn btn-outline-danger btn-sm">Brnading</button></li>
                    <li class="list-inline-item"><button type="button" data-filter=".design"
                            class="btn btn-outline-danger btn-sm">Design</button></li>
                    <li class="list-inline-item mt-3 mt-sm-0"><button type="button" data-filter=".photo"
                            class="btn btn-outline-danger btn-sm">Photography</button></li>
                </ul>
            </div>
            <div class="row mixitup g-3">
                <!-- single portfolio item -->
                <div class="col-lg-4  col-sm-6 mix branding col-md-6" data-aos="fade-down" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-mirror="true">
                    <div class="single-portfolio text-center">
                        <div class="portfolio-overly"></div>
                        <img src="{{ asset('frontend') }}/assets/images/1.jpg" class=" img-fluid"
                            alt="portfolio image">
                        <div class="portfolooverly-item">
                            <a href="{{ asset('frontend') }}/assets/images/1.jpg" data-fancybox="gallery"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single portfolio item -->
                <div class="col-lg-4  col-sm-6 mix design col-md-6" data-aos="fade-down" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-mirror="true">
                    <div class="single-portfolio text-center">
                        <div class="portfolio-overly"></div>
                        <img src="{{ asset('frontend') }}/assets/images/2.jpg" class=" img-fluid"
                            alt="portfolio image">
                        <div class="portfolooverly-item">
                            <a href="{{ asset('frontend') }}/assets/images/2.jpg" data-fancybox="gallery"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single portfolio item -->
                <div class="col-lg-4  col-sm-6 mix design photo col-md-6" data-aos="fade-down" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-mirror="true">
                    <div class="single-portfolio text-center">
                        <div class="portfolio-overly"></div>
                        <img src="{{ asset('frontend') }}/assets/images/3.jpg" class=" img-fluid"
                            alt="portfolio image">
                        <div class="portfolooverly-item">
                            <a href="{{ asset('frontend') }}/assets/images/3.jpg" data-fancybox="gallery"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single portfolio item -->
                <div class="col-lg-4 col-sm-6 mix col-md-6 branding photo" data-aos="fade-up" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-mirror="true">
                    <div class="single-portfolio text-center">
                        <div class="portfolio-overly"></div>
                        <img src="{{ asset('frontend') }}/assets/images/4.jpg" class=" img-fluid"
                            alt="portfolio image">
                        <div class="portfolooverly-item">
                            <a href="{{ asset('frontend') }}/assets/images/4.jpg" data-fancybox="gallery"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single portfolio item -->
                <div class="col-lg-4 col-sm-6 mix col-md-6 design photo" data-aos="fade-up" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-mirror="true">
                    <div class="single-portfolio text-center">
                        <div class="portfolio-overly"></div>
                        <img src="{{ asset('frontend') }}/assets/images/5.jpg" class=" img-fluid"
                            alt="portfolio image">
                        <div class="portfolooverly-item">
                            <a href="{{ asset('frontend') }}/assets/images/5.jpg" data-fancybox="gallery"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single portfolio item -->
                <div class="col-lg-4 col-sm-6 mix col-md-6 design branding" data-aos="fade-up" data-aos-offset="200"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-mirror="true">
                    <div class="single-portfolio text-center">
                        <div class="portfolio-overly"></div>
                        <img src="{{ asset('frontend') }}/assets/images/6.jpg" class=" img-fluid"
                            alt="portfolio image">
                        <div class="portfolooverly-item">
                            <a href="{{ asset('frontend') }}/assets/images/6.jpg" data-fancybox="gallery"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ===================================my portfolio end===================================== -->

    <!-- ===================================counter up start===================================== -->
    <section class=" countersection"
        style="background-image: url('{{ asset('frontend') }}/assets/images/counter-bg.jpg');">
        <div class="container">
            <div class="row g-4" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <!-- single counter -->
                @forelse ($projectinofos as $projectinofo)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-counter text-center">
                            <h2><span class=" text-brand counter">{{ $projectinofo->number }}</span>+</h2>
                            <p>{{ $projectinofo->title }}
                            </p>
                        </div>
                    </div>
                @empty
                    <p class=" text-brand">No data found coming soon</p>
                @endforelse

            </div>
        </div>
    </section>
    <!-- ===================================counter up end===================================== -->

    <!-- ===================================resume===================================== -->
    <section class="p-80 resume" id="resume">
        <div class="container">
            <div class="sec-cap pb-45 text-center" data-aos="flip-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <h2>my <span>resume</span></h2>
                <div class="sec-border fa-flip" style="--fa-animation-duration: 3s;"></div>
            </div>
            <div class="row g-5">
                <!-- single resume -->
                @forelse ($resumes as $resume)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-resume" data-aos="flip-right" data-aos-offset="200" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                            <h5>{{ $resume->title }}</h5>
                            <span>{{ $resume->short_title }}</span>
                            <p>{{ $resume->descriptions }}</p>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <!-- ===================================resume end===================================== -->
    <!-- ===================================blog===================================== -->
    <section class="blog pb-80" id="blog">
        <div class="container">
            <div class="sec-cap pb-45 text-center" data-aos="flip-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <h2>my <span>blog</span></h2>
                <div class="sec-border fa-flip" style="--fa-animation-duration: 3s;"></div>
            </div>
            <div class="row g-4">
                <!-- blog item -->
                @forelse ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item" data-aos="flip-right" data-aos-offset="200" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                            <a href="{{ route('single.blog',['id'=>$blog->id]) }}">
                                <img src="{{ asset($blog->image) }}" class=" img-fluid" alt="blog image">
                            </a>
                            <div class="blog-box">
                                <div class="blog-list">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class=" text-brand"><i
                                                    class="fa-regular fa-clock"></i> </span> </li>
                                        <li class="list-inline-item"><span
                                                class=" text-brand">{{ $blog->created_at->format('M d,Y') }} </span>
                                        </li>
                                        <li class="list-inline-item"><span> |
                                                {{ $blog->category->category_name }}</span></li>
                                    </ul>
                                </div>
                                <a href="{{ route('single.blog',['id'=>$blog->id]) }}" class="blog-link">{{ $blog->bigtitle }}</a>
                                <p>{{ Str::limit($blog->descriptions, 80, '...') }}</p>
                                <a href="{{ route('single.blog',['id'=>$blog->id]) }}" class="read-more">read more</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <!-- ===================================blog end===================================== -->

    <!-- ===================================contact===================================== -->
    <section class="contact pb-80" id="contact">
        <div class="container">
            <div class="sec-cap pb-45 text-center" data-aos="flip-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <h2>my <span>contact</span></h2>
                <div class="sec-border fa-flip" style="--fa-animation-duration: 3s;"></div>
            </div>
            @if (session()->has('message'))
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </symbol>
                </svg>


                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ session()->get('message') }}
                    </div>
                </div>
            @endif






            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('message.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="singleform-group my-2">
                                    <input type="text" name="name" class=" form-control" id="name"
                                        placeholder="Name">

                                    @error('name')
                                        <span class=" text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="singleform-group my-2">
                                    <input type="email" name="email" class=" form-control" id="email"
                                        placeholder="E-mail">

                                    @error('email')
                                        <span class=" text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="singleform-group my-2">
                                    <input type="text" name="subject" class=" form-control" id="subject"
                                        placeholder="Subject">
                                    @error('subject')
                                        <span class=" text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="singleform-group my-2">
                            <textarea class="form-control" name="message" id="message" rows="8" placeholder="Your Message"></textarea>
                            @error('message')
                                <span class=" text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="singleform-group my-2">
                            <button type="submit" class=" btn btn-danger">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- ===================================contact end===================================== -->
    <!-- ===================================footer===================================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-text text-center">
                <p>{{ $footer->footer_text }}</p>
            </div>
        </div>
    </footer>
    <!-- ===================================footer===================================== -->

    <!-- ===================================webiste color switcher===================================== -->
    <div class="color-switcher shadow">
        <div class="coloseitcher-icon">
            <i class="fa-solid fa-cog fa-spin"></i>
        </div>
        <div class="colorbox">
            <span class="text-brand mb-3">choose Your Favourite Color</span>
            <ul class="list-inline">
                <li class="list-inline-item green colorbtn" data-color="#55E6C1"></li>
                <li class="list-inline-item purple colorbtn" data-color="#FF4757"></li>
                <li class="list-inline-item blue colorbtn" data-color="#1B9CFC"></li>
                <li class="list-inline-item yellow colorbtn" data-color="#FFC312"></li>
                <li class="list-inline-item orange colorbtn" data-color="#F28123"></li>
            </ul>
        </div>
    </div>
    <!-- ===================================webiste color switcher===================================== -->




    <script src="{{ asset('frontend') }}/assets/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.animatedheadline.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/particles.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/app.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/fancybox.umd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/mixitup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/kursor.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/aos.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
