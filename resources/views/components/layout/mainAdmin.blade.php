<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Clinic admin panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/adminCss/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/adminCss/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar navbar-light">
                <a href="{{ route('admin') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-dark">Clinic</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="{{ route("admin") }}" class="nav-item nav-link {{ $SideBarActiveIn ?? '' }}">
                        <i class="fa fa-tachometer-alt me-2"></i>
                        Shifokorlar
                    </a>
                    <a href="{{ route('services.index') }}" class="nav-item nav-link {{ $SideBarActiveAt ?? '' }}">
                        <i class="fa fa-keyboard me-2"></i>
                        Xizmatlar
                    </a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand navbar-bg navbar-light sticky-top px-4 py-0" style="margin-bottom:20px">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler text-light flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border border-light navbarInput-bg" type="search" placeholder="Search..." id="search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/adminImg/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-white rounded-0 rounded-bottom m-0">
                            <form action="{{ route('logout') }}" method="POST">
                                <input type="submit" name="submit" value="Log Out" class="dropdown-item">
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            {{ $slot }}


        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script>
        // Your first section of code for listItems styling
    
        const searchInput = document.querySelector("#search");
        const users = document.querySelectorAll("tbody tr");
        
        searchInput.addEventListener("input", function () {
            const query = this.value.trim().toLowerCase();
            
            users.forEach(user => {
                console.log(user);
                const cardTitle = user.querySelector('.uName').textContent.toLowerCase();
                if (cardTitle.includes(query)) {
                    user.style.display = 'table-row';
                } else {
                    user.style.display = 'none';
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="/adminJs/main.js"></script>
</body>

</html>