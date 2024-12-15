
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Muffin Fun's</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Peddana&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Peddana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">



   
</head>

<body>

<!-- navbar -->

    <nav class="navbar navbar-expand-lg primary-bg py-2 fixed-top bg-white shadow-sm w-100 z-index-1000 ">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand fw-bold" href="/home" style="color: #5a4a42; font-family: 'Aclonica', sans-serif;">Muffin Fun's</a>

            <!-- navbar link -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-center w-100">
                    <li class="nav-item">
                        <a class="nav-link text-black navbar-brand " href="/about" style="color: #5a4a42; font-family: 'Libre Baskerville Static', serif;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black navbar-brand " href="/menu" style="color: #5a4a42; font-family: 'Libre Baskerville Static', serif;">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black navbar-brand " href="/new" style="color: #5a4a42; font-family: 'Libre Baskerville Static', serif;">New</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-black navbar-brand " href="/promo" style="color: #5a4a42; font-family: 'Libre Baskerville Static', serif;">Promo</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-black navbar-brand " href="/contact" style="color: #5a4a42; font-family: 'Libre Baskerville Static', serif;">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Icon di navbar -->
            <div class="navbar-icons d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus-fill mr-3" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </div>

            <!-- Tombol navbar (hamburger) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

@yield('container')

<!-- bagian footer -->
<footer class="footer">
    <div class="footer__container">
        <!-- About Section -->
        <div class="footer__about">
            <h3>Muffin Fun's</h3>
            <p>
                Cake to celebrate your sweet life! Temukan berbagai macam kue terbaik di tempat kami.
            </p>
        </div>

        <!-- Quick Links -->
        <div class="footer__links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">New</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer__contact">
            <h3>Contact Us</h3>
            <p><i class="bi bi-geo-alt"></i> Muffin Fun Street, Sweet City</p>
            <p><i class="bi bi-envelope"></i> support@muffinfuns.com</p>
            <p><i class="bi bi-telephone"></i> +62 812 3456 7890</p>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer__bottom">
        <p>© 2024 Muffin Fun's. All rights reserved.</p>
        <ul class="footer__social">
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-youtube"></i></a></li>
        </ul>
    </div>
</footer>


    <!-- Bootstrap JS -->
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
