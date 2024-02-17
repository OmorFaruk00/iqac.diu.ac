<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/variables.css') }}" rel="stylesheet">


    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <!-- Include jQuery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <!-- Include Owl Carousel CSS and JS files -->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <link rel="icon" href="{{ asset('/image/iqac.png') }}" type="image/x-icon">



    <title>INSTITUTIONAL QUALITY ASSURANCE CELL</title>
</head>

<body>
    <style>
        .footer-top {
            background: #000 !important;
            /* background: linear-gradient(to right, #008080, #135C51) !important;
  /* Replace #008080 and #135C51 with your desired gradient colors */
            color: #fff !important;
        }

        .footer-contact p {
            color: #fff !important;
        }

        .footer-links ul li a,
        i {
            color: #000 !important;
        }

        .footer-links h4 {
            color: #fff !important;
        }

        #footer {
            background: #f5f5f5 !important;
        }

        .copyright {
            height: 30px;
        }

        .copyright p {
            color: #000;
            padding-top: 15px;
        }

        .nav-link:hover {
            color: #C3E92E;
        }
    </style>

    <!-- ======= Top Bar ======= -->
    {{-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a
            href="mailto:contact@example.com">ahsan@diu.ac
          </a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+8801302690340</span></i>
      </div>

      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter" target="_blank"><img src="img/icon/fb.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/ins.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/youtube.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/twiter.png" alt="" class="icon"></a>

      </div>
    </div>
  </section> --}}
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a class="navbar-brand" href="{{ route('home') }}"><img src="/image/iqac.png" alt=""
                    style="height:50px;width:60px"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}">Home</a></li>

                    <li class="dropdown"><a href="#"><span>About Us</span> <img src="/image/down.png"
                                height="15px" alt="">

                        </a>
                        <ul>
                            <li><a href="{{ route('mission-vision') }}">Mission & vision</a></li>
                            <li><a href="{{ route('organogram-of-iqac') }}">Organogram of IQAC</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Members</span> <img src="/image/down.png"
                                height="15px" alt="">

                        </a>
                        <ul>
                            <li><a href="{{ env('APP_URL') }}/members/iqac">IQAC</a></li>
                            <li><a href="{{ env('APP_URL') }}/members/sac">SAC</a></li>
                            <li><a href="{{ env('APP_URL') }}/members/qac">QAC</a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto {{ Request::is('event') ? ' active' : '' }}"
                            href="{{ route('event') }}">News & Events</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('gallery') ? ' active' : '' }}"
                            href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('resource') ? ' active' : '' }}"
                            href="{{ route('resource') }}">Resources</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('contact') ? ' active' : '' }}"
                            href="{{ route('contact') }}">Cotact Us</a></li>

                </ul>
                {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mobile-nav-toggle" style="height: 30px">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->


    <main>
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container d-flex justify-content-center">
            <div class="copyright">
                <p class=""> © @php
                    $currentYear = date('Y');
                    echo $currentYear;
                @endphp <strong>DIU</strong>. All rights Reserved. | Developed & Powered
                    by: <strong>IT-Team,
                        DIU</strong></p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
