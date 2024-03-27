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
        <div class="signincontainer">
            <form class="form" method="POST" action="{{ route('authenticate') }}" enctype="multipart/form-data">
                @csrf
                <p class="title">Sign in </p>
                <p class="message">Sign in to your account.</p>
                <label>
                    <input type="text" class="input" name='name' required>
                    <span>Ism</span>
                </label>
                <label>
                    <input type="password" class="input" name='telefon_raqam' id="password" required>
                    <span>Parol (Telefon Raqam)</span>
                    <span class='show'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16"> <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/> <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/> <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/> </svg> -->
                    </span>
                </label>
                <input type="submit" class="submit" value="Submit" name="submit">
                <p class="signin">No acount? <a href="{{ route('signup') }}">Signup</a> </p>
            </form>
        </div>
    </center>
    <script>
        var show = document.querySelector('.show')
        var password = document.querySelector('#password')
        show.addEventListener('click', function() {
            if (password.getAttribute('type') === 'password') {
                password.setAttribute('type', 'text');
            } else {
                password.setAttribute('type', 'password');
            }
        });
    </script>
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

