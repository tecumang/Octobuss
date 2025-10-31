@extends('layout.app')

@section('title', 'login')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('content')

    <section class="login-page vh-100 d-flex align-items-center justify-content-center position-relative overflow-hidden">
        <div class="login-bg"></div>

        <div class="container position-relative">
            <div class="row align-items-center justify-content-center g-0 shadow-lg rounded-4 overflow-hidden">

                <!-- LEFT: Login Form -->
                <div class="col-lg-6 col-md-8 bg-white p-5 position-relative z-2" data-aos="fade-right">
                    <div class="text-center mb-4">
                        <img src="{{ asset('img/logo.png') }}" alt="Octopyder Logo" class="mb-3" style="height: 60px;">
                        <h2 class="fw-bold text-dark mb-2">Welcome Back to <span class="text-primary">Octopyder BMS</span>
                        </h2>
                        <p class="text-muted mb-4">Sign in to access your dashboard and continue managing your business
                            smarter.</p>
                    </div>

                    <form>
                        <!-- Email -->
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <input type="email" id="email" class="form-control form-control-lg rounded-3"
                                placeholder="you@company.com" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3 text-start position-relative">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <div class="input-group">
                                <input type="password" id="password" class="form-control form-control-lg rounded-start-3"
                                    placeholder="Enter your password" required>
                                <button type="button" class="btn btn-outline-secondary rounded-end-3" id="togglePassword">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Options -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <a href="#" class="text-primary fw-semibold small">Forgot Password?</a>
                        </div>

                        <!-- Login Button -->
                        <button type="submit"
                            class="btn btn-primary-gradient w-100 py-3 fw-semibold rounded-pill">Login</button>

                        <!-- Secondary Text -->
                        <p class="text-center mt-4 mb-0 text-muted">
                            Don’t have an account yet?
                            <a href="#" class="text-primary fw-semibold text-decoration-none">Create an Account →</a>
                        </p>
                    </form>
                </div>

                <!-- RIGHT: Visual / Banner -->
                <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center text-center text-light p-5 login-banner"
                    data-aos="fade-left">
                    <div class="banner-overlay"></div>
                    <div class="position-relative z-2">
                        <h3 class="fw-bold mb-3">Your entire business — one login away</h3>
                        <img src="{{ asset('img/contact.png') }}" alt="Octopyder Dashboard Preview"
                            class="img-fluid rounded-4 shadow-lg mb-4" style="max-width: 420px;">
                        <p class="lead opacity-75">Analytics, projects, clients & operations — unified in one powerful
                            workspace.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const icon = this.querySelector('i');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    </script>
@endpush
