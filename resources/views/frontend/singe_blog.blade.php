<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>zara-blog</title>
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jquery.animatedheadline.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fancybox.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/kursor.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/poppin-google-font.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/aos.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/normalize.css" />
</head>

<body data-bs-spy="scroll" data-bs-target="navbar">
    <!-- ===================================header================================================ -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top singleblog-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('frontpage') }}">
                    @isset($logo->logo_name)
                        {{ $logo->logo_name }}
                    @endisset</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('frontpage') }}">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontpage') }}">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontpage') }}">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontpage') }}">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontpage') }}">resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontpage') }}">blog</a>
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

    <!-- ===================================my portfolio start===================================== -->
    <section class="single-blog p-80" id="portfolio">
        <div class="container">
            <div class="row mixitup g-3 mt-5">
                <div class="col-lg-8">
                    <div class="single-post-left">
                        <img src="{{ asset($singleblog->image) }}" class="img-fluid" alt="blog image" />
                        <div class="blog-list mt-4">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="text-brand"><i class="fa-regular fa-clock"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-brand">{{ $singleblog->created_at->format('M d,Y') }} </span>
                                </li>
                                <li class="list-inline-item"><span> | {{ $singleblog->category->category_name }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <h4 class="fw-semibold">{{ $singleblog->bigtitle }}</h4>
                    <div class="post-para-box">
                        <p>
                       {{ $singleblog->descriptions }}
                        </p>
              
                       
                    </div>
                    <div class="shareing-post mt-4">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-brand"><i class="fa-solid fa-share fa-flip fa-2xl"
                                        style="--fa-animation-duration: 3s"></i>
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-brand"><a   href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-brand"><a href=""><i class="fa-brands fa-twitter"></i></a>
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-brand"><a href=""><i class="fa-brands fa-instagram"></i></a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- right side column -->
                <div class="col-lg-4">
                    <div class="sisng-blg-right p-3  bg-light">
                        <div class="">
                            <div class="sec-cap mb-4 shadow-sm ps-3">
                                <h4 class="fw-semibold">
                                    Recent Relase <span class="text-brand">Blog</span>
                                </h4>
                                <div class="sec-border fa-flip ms-0" style="--fa-animation-duration: 3s"></div>
                            </div>
                            <div class="row g-2">
                                <!-- single recent blog post -->
                             @forelse ($recentblogs as $recentblog) 
                                   <div class="col-lg-12 col-md-6 col-sm-6">
                                    
                                       <a class=" text-decoration-none" href="{{ route('single.blog',['id'=>$recentblog->id]) }}">
                                        
                                           <div class="recent-post-item">
                                               <div>
                                                   <img src="{{ asset($recentblog->image) }}" class="img-fluid img-thumbnail"
                                                       alt="post image " />
                                               </div>
                                               
                                               <div class="p-2 my-2 recent-blog-text">
                                                <small class=" text-brand">{{ $recentblog->category->category_name }}</small>
                                                <br>
                                                   <a class="post-title" href="{{ route('single.blog',['id'=>$recentblog->id]) }}">{{ $recentblog->bigtitle }}</a>
                                                   <p>
                                                      {{Str::limit($recentblog->descriptions, 50, '...')}}.
                                                   </p>
                                                   <a href="{{ route('single.blog',['id'=>$recentblog->id]) }}" class="btn btn-danger btn-sm">Read More</a>
                                               </div>
                                           </div>
                                       </a>
                                   </div>
                             @empty 
                             
                             @endforelse
                              
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================my portfolio end===================================== -->

    <!-- related post -->
    <section class="blog pb-80" id="blog">
        <div class="container">
            <div class="sec-cap mb-4" data-aos="flip-up" data-aos-offset="200" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                <h4 class="fw-semibold">
                    Related <span class="text-brand">Blog</span>
                </h4>
                <div class="sec-border fa-flip ms-0" style="--fa-animation-duration: 3s"></div>
            </div>
            <div class="row g-4">
                <!-- blog item -->
             @forelse ($relatedblogs as $relatedblog) 
                   <div class="col-lg-4 col-md-6">
                       <div class="blog-item" data-aos="flip-right" data-aos-offset="200" data-aos-delay="50"
                           data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true">
                           <a href="{{ route('single.blog',['id'=>$relatedblog->id]) }}">
                               <img src="{{ asset($relatedblog->image) }}" class="img-fluid" alt="blog image" />
                           </a>
                           <div class="blog-box">
                               <div class="blog-list">
                                   <ul class="list-inline">
                                       <li class="list-inline-item">
                                           <span class="text-brand"><i class="fa-regular fa-clock"></i>
                                           </span>
                                       </li>
                                       <li class="list-inline-item">
                                           <span class="text-brand">{{ $relatedblog->created_at->format('M d,Y') }} </span>
                                       </li>
                                       <li class="list-inline-item"><span> | {{ $relatedblog->category->category_name }}</span></li>
                                   </ul>
                               </div>
                               <a href="{{ route('single.blog',['id'=>$relatedblog->id]) }}" class="blog-link">{{ $relatedblog->bigtitle }}</a>
                               <p>
                                {{ Str::limit($relatedblog->descriptions, 80, '...') }}
                               </p>
                               <a href="{{ route('single.blog',['id'=>$relatedblog->id]) }}" class="read-more">read more</a>
                           </div>
                       </div>
                   </div>
             @empty 
             
             @endforelse
             
            </div>
        </div>
    </section>
    <!-- related post end -->

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
                <p>
                    CopyRight © 2023 <span class="text-brand">Zarin</span> | All Rights
                    Reserved
                </p>
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
</body>

</html>