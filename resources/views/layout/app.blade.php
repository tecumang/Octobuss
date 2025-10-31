<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'OctoBuss | Centralized Business Platform')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        :root {
            --primary: #0a4ed7;
            --secondary: #00d4ff;
            --dark: #0b1120;
            --light: #f9faff;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light);
            color: #1a1a1a;
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            transition: background 0.3s ease;
        }

        .navbar-brand img {
            height: 50px;
        }

        .nav-link {
            font-weight: 500;
            color: #1a1a1a;
            margin: 0 12px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        /* CTA Button */
        .btn-primary {
            background: var(--primary);
            border: none;
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background: var(--secondary);
            color: #000;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: #ccc;
            padding-top: 3rem;
        }

        footer a {
            color: #ccc;
            text-decoration: none;
        }

        footer a:hover {
            color: var(--secondary);
        }

        footer h6 {
            color: #fff;
            font-weight: 600;
        }

        footer .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 2rem;
            padding-top: 1rem;
            text-align: center;
            color: #aaa;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="OctoBuss Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('feature') }}" class="nav-link">Features</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item ms-lg-3">
                        <a href="{{ route('login') }}" class="btn btn-primary">Get Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-vh-100">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('img/logo.png') }}" alt="OctoBuss" class="mb-3" height="45">
                    <p>OctoBuss — a centralized platform to streamline your entire business management ecosystem.</p>
                </div>
                <div class="col-md-2 mb-4">
                    <h6>Product</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">Updates</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h6>Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h6>Connect</h6>
                    <div class="d-flex gap-3">
                        <a href="#"><i class="fab fa-facebook fs-5"></i></a>
                        <a href="#"><i class="fab fa-linkedin fs-5"></i></a>
                        <a href="#"><i class="fab fa-instagram fs-5"></i></a>
                        <a href="#"><i class="fab fa-x-twitter fs-5"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                © {{ date('Y') }} OctoBuss | Designed & Developed by Octopyder Services
            </div>
        </div>
    </footer>

    <!-- JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        // Optional: GSAP for section transitions
        gsap.from("nav", {
            y: -60,
            opacity: 0,
            duration: 0.8
        });
    </script>

    @stack('scripts')
</body>

</html>
