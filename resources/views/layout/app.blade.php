<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>OctoBuss</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />

    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background-color: #f9fafe;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            transition: all 0.4s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar.scrolled {
            background-color: #010d30;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .navbar .nav-link {
            position: relative;
            color: #010d30 !important;
            margin: 0 12px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .navbar.scrolled .nav-link {
            color: #fff !important;
        }

        .navbar .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0%;
            height: 2px;
            background: #007bff;
            transition: width 0.3s ease;
        }

        .navbar .nav-link:hover::after {
            width: 100%;
        }

        /* Button Animation */
        .Btn-Container {
            background: linear-gradient(45deg, #007bff, #00d4ff);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 22px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 3px 12px rgba(0, 123, 255, 0.4);
        }

        .Btn-Container:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.6);
        }

        .icon-Container svg {
            transform: translateX(0);
            transition: transform 0.3s ease;
        }

        .Btn-Container:hover .icon-Container svg {
            transform: translateX(4px);
        }

        /* Footer */
        footer {
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, #03247b 0%, #010d30 70%);
            transform: rotate(25deg);
            z-index: 0;
        }

        footer * {
            position: relative;
            z-index: 1;
        }

        footer a:hover {
            color: #00d4ff !important;
            transition: color 0.3s ease;
        }

        footer i {
            transition: transform 0.3s ease;
        }

        footer i:hover {
            transform: scale(1.3);
            color: #00d4ff;
        }

        /* ==== Animated Footer Background ==== */
        .footer-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, #010d30, #03247b, #0057ff, #00d4ff);
            background-size: 400% 400%;
            animation: gradientMove 10s ease infinite;
            z-index: 0;
            opacity: 0.7;
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* ==== Links & Socials ==== */
        .footer-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .footer-link::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #00d4ff;
            transition: width 0.3s ease;
        }

        .footer-link:hover::after {
            width: 100%;
        }

        .social-link {
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: scale(1.3);
            color: #00d4ff !important;
        }

        /* Divider glow effect */
        .footer-divider {
            height: 2px;
            width: 80%;
            margin: 0 auto;
            background: linear-gradient(90deg, transparent, #00d4ff, transparent);
            animation: glowPulse 3s ease-in-out infinite;
        }

        @keyframes glowPulse {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button data-mdb-collapse-init class="navbar-toggler" type="button"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="{{ asset('img/logo.png') }}" height="50" alt="Logo" loading="lazy" />
                </a>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link fs-5" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="#">Modules</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="#">Pricing</a></li>
                </ul>
            </div>

            <div class="d-flex align-items-center">
                <button class="Btn-Container">
                    <span class="text">Get Started</span>
                    <span class="icon-Container">
                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="1.61321" cy="1.61321" r="1.5" fill="white"></circle>
                            <circle cx="5.73583" cy="1.61321" r="1.5" fill="white"></circle>
                            <circle cx="5.73583" cy="5.5566" r="1.5" fill="white"></circle>
                            <circle cx="9.85851" cy="5.5566" r="1.5" fill="white"></circle>
                            <circle cx="9.85851" cy="9.5" r="1.5" fill="white"></circle>
                            <circle cx="13.9811" cy="9.5" r="1.5" fill="white"></circle>
                            <circle cx="5.73583" cy="13.4434" r="1.5" fill="white"></circle>
                            <circle cx="9.85851" cy="13.4434" r="1.5" fill="white"></circle>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </nav>

    <div style="margin-top: 80px;">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-light position-relative overflow-hidden">
        <!-- Animated Gradient Background -->
        <div class="footer-bg"></div>

        <!-- Social Section -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" data-aos="fade-up">
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>

            <div>
                <a href="#" class="me-4 text-reset social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="me-4 text-reset social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="me-4 text-reset social-link"><i class="fab fa-google"></i></a>
                <a href="#" class="me-4 text-reset social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="me-4 text-reset social-link"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="me-4 text-reset social-link"><i class="fab fa-github"></i></a>
            </div>
        </section>

        <!-- Links -->
        <section>
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" data-aos="fade-up" data-aos-delay="100">
                        <h6 class="text-uppercase fw-bold mb-4 d-flex align-items-center">
                            <img src="{{ asset('img/logo.png') }}" height="45" alt="Logo"
                                class="bg-light me-2 rounded-circle p-1" />
                            OctoBuss
                        </h6>
                        <p>The complete business management platform for modern enterprises.</p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                        <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                        <p><a href="#!" class="text-reset footer-link">Features</a></p>
                        <p><a href="#!" class="text-reset footer-link">Integrations</a></p>
                        <p><a href="#!" class="text-reset footer-link">Pricing</a></p>
                        <p><a href="#!" class="text-reset footer-link">Updates</a></p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" data-aos="fade-up" data-aos-delay="300">
                        <h6 class="text-uppercase fw-bold mb-4">Company</h6>
                        <p><a href="#!" class="text-reset footer-link">About</a></p>
                        <p><a href="#!" class="text-reset footer-link">Careers</a></p>
                        <p><a href="#!" class="text-reset footer-link">Contact</a></p>
                        <p><a href="#!" class="text-reset footer-link">Explore Octopyder</a></p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" data-aos="fade-up" data-aos-delay="400">
                        <h6 class="text-uppercase fw-bold mb-4">Legal</h6>
                        <p><a href="#!" class="text-reset footer-link">Terms</a></p>
                        <p><a href="#!" class="text-reset footer-link">Privacy</a></p>
                        <p><a href="#!" class="text-reset footer-link">Cancellation</a></p>
                        <p><a href="#!" class="text-reset footer-link">Security</a></p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" data-aos="fade-up"
                        data-aos-delay="500">
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope me-3"></i> info@example.com</p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer-divider"></div>

        <div class="text-center p-4" style="background-color: rgba(0,0,0,0.05);" data-aos="fade-up">
            © 2025 Designed & Developed by
            <a class="text-reset fw-bold" href="https://octopyderservices.com/">OctopyderServices.com</a>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('js/mdb.umd.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
