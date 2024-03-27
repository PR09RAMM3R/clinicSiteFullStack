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

<body>
    <center>
        <div class="signupcontainer">
            <form class="form" enctype="multipart/form-data" method="POST" action="{{ route('registor.store') }}">
                @csrf
                <p class="title">Register</p>
                <p class="message">Signup now and get full access to our app. </p>
                <div class="flex">
                    <label>
                        <input type="text" name="name" class="input" required>
                        <span>Ism</span>
                    </label>

                    <label>
                        <input type="text" name="familya" class="input" required>
                        <span>Familya</span>
                    </label>
                </div>

                <label>
                    <input type="text" name="yosh" class="input" required>
                    <span>yosh</span>
                </label>

                <label>
                    <input type="text" name="telefon_raqam" class="input" required>
                    <span>Parol (Telefon Raqam)</span>
                </label>
                <input type="submit" class="submit" value="Submit">
                <p class="signin">Already have an acount ? <a href="{{ route('signin') }}">Signin</a> </p>
            </form>
        </div>
    </center>

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
    <!-- Google Map -->
    <script src="/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="/js/script.js"></script>
    <script src="/js/contact.js"></script>

</body>

</html>
