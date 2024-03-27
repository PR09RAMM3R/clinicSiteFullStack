<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">

    <title>Shifomed - Sog'ligingiz uchun qayg'uradi</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="/images/logo.png" /> --}}

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/signin.css">
    <link rel="stylesheet" href="/css/signup.css">

</head>

<body id="top">

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@shifomed.com"><i class="icofont-support-faq mr-2"></i>support@shifomed.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Manzil: Farg'ona shahri, Mustaqillik ko'chasi </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+998-99-123-45-67">
                                <span>Telefon: </span>
                                <span class="h7">+998-99-123-45-67</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h1>Logo</h1>
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Asosiy</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('doctors') }}">Shifokorlar</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Admin</a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Xizmatlar</a></li>
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Admin</a></li>
                            <form action="{{ route('logout') }}" method="POST" class="logout">
                                @csrf
                                <button class="btn btn-main-2" type="submit">Log out</button>
                            </form>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('signin') }}">Kirish</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">Ro'yxatdan o'tish</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}

    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <h1>logo</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias in debitis vel fuga quis suscipit earum commodi voluptatibus ipsam saepe!</p>
                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Bo'lim</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Jarrohlik </a></li>
                            <li><a href="#">Ayollar salomatligi</a></li>
                            <li><a href="#">Radiologiya</a></li>
                            <li><a href="#">Kardiok</a></li>
                            <li><a href="#">Dori</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Yordam</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Foydalanish shartlari</a></li>
                            <li><a href="#">Maxfiylik siyosati</a></li>
                            <li><a href="#">Qo'llab-quvvatlash</a></li>
                            <li><a href="#">Savollar</a></li>
                            <li><a href="#">Kompaniya litsenziyasi
                                </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Aloqa</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Qo'llab-quvvatlash 24/7 uchun mavjud</span>
                            </div>
                            <h4 class="mt-2"><a href="#">Support@shifomed.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Dushanbadan Jumagacha: 08:30 dan 18:00 gacha</span>
                            </div>
                            <h4 class="mt-2"><a href="#">+998-99-123-45-67</a></h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>



    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="/plugins/jquery/jquery.js"></script>
    <!-- Bootstra/p 4.3.2 -->
    <script src="/plugins/bootstrap/js/popper.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Sl/ider -->
    <script src="/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counteru/p -->
    <script src="/plugins/counterup/jquery.waypoints.min.js"></script>

    <script src="/plugins/shuffle/shuffle.min.js"></script>
    <script src="/plugins/counterup/jquery.counterup.min.js"></script>

    <script src="/js/script.js"></script>
    <script src="/js/contact.js"></script>

</body>

</html>
