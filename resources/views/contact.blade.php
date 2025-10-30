@extends('layout.app')

@section('title', 'Run Your Entire Business on One Smart Platform')

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

@section('content')

    {{-- Hero section  --}}
    <section class="contact-hero-section py-5 position-relative overflow-hidden text-center text-dark">
        <div class="contact-hero-bg"></div>
        <div class="container position-relative" data-aos="fade-up">

            <!-- Heading -->
            <h1 class="fw-bold display-5 mb-3">
                Let’s Talk About <span class="text-primary-gradient">Growing Your Business Smarter</span>
            </h1>

            <!-- Subheading -->
            <p class="lead text-muted mx-auto mb-4" style="max-width: 720px;">
                Whether you’re ready to get started with <strong>Octopyder BMS</strong>, want a product demo,
                or just have a few questions — we’d love to hear from you.

            </p>

            <!-- CTA Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <a href="#" class="btn btn-primary btn-lg px-4 py-2 rounded-pill fw-semibold shadow-sm">
                    <i class="fa-solid fa-video me-2"></i> Book a Demo
                </a>
                <a href="#" class="btn btn-outline-primary btn-lg px-4 py-2 rounded-pill fw-semibold">
                    <i class="fa-solid fa-paper-plane me-2"></i> Send Message
                </a>
            </div>


        </div>
    </section>

    {{-- Contact form Section  --}}
    <section class="contact-form-section py-5 position-relative overflow-hidden text-dark">
        <div class="contact-form-bg"></div>
        <div class="container position-relative" data-aos="fade-up">

            <!-- Heading -->
            <div class="text-center mb-5">
                <h5 class="text-uppercase text-primary fw-semibold">Contact Us</h5>
                <h1 class="fw-bold display-6 mb-3">We’re Just a Message Away</h1>
                <p class="text-muted lead mb-0">
                    Fill out the form below, and our team will reach out within <strong>24 hours</strong>.<br>
                    Let’s understand your business needs and find the right <strong>BMS solution</strong> for you.
                </p>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form class="contact-form glassy p-4 p-md-5 rounded-4 shadow-lg">

                        <!-- Full Name -->
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="fullName" placeholder="Full Name" required>
                            <label for="fullName">Full Name</label>
                        </div>

                        <!-- Company -->
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="company"
                                placeholder="Company / Organization Name">
                            <label for="company">Company / Organization Name</label>
                        </div>

                        <!-- Email -->
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                            <label for="email">Email Address</label>
                        </div>

                        <!-- Phone -->
                        <div class="form-floating mb-4">
                            <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
                            <label for="phone">Phone Number</label>
                        </div>

                        <!-- Inquiry Type -->
                        <div class="form-floating mb-4">
                            <select class="form-select" id="subject" required>
                                <option value="">Select Inquiry Type</option>
                                <option>Sales</option>
                                <option>Support</option>
                                <option>Partnership</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div class="form-floating mb-4">
                            <textarea class="form-control" id="message" style="height: 140px" placeholder="Write your message here..." required></textarea>
                            <label for="message">Message</label>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary-gradient btn-lg rounded-pill px-5 py-2 shadow-sm">
                                <i class="fa-solid fa-paper-plane me-2"></i> Send Message
                            </button>
                            <p class="text-muted small mt-3">
                                <i class="fa-solid fa-lock text-success me-1"></i>
                                Your information is secure and will never be shared with third parties.
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section  --}}
    <section class="contact-info-section py-5 position-relative overflow-hidden text-dark">
        <div class="contact-info-bg"></div>
        <div class="container position-relative" data-aos="fade-up">

            <!-- Section Title -->
            <div class="text-center mb-5">
                <h5 class="text-uppercase text-primary fw-semibold">Contact Info</h5>
                <h1 class="fw-bold display-6 mb-3">Reach Us Directly</h1>
                <p class="text-muted lead mb-0">
                    We’re always ready to connect. Here’s how you can reach our team or visit our corporate office.
                </p>
            </div>

            <!-- Content Layout -->
            <div class="row align-items-center">
                <!-- Left Column -->
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="contact-card glassy p-4 p-md-5 rounded-4 shadow-sm">

                        <!-- Office -->
                        <div class="mb-4">
                            <h5 class="fw-bold text-primary mb-2"><i class="fa-solid fa-building me-2"></i> Corporate Office
                            </h5>
                            <p class="mb-0">Bhamashah Techno Hub,<br>Jhalana Institutional Area,<br>Jaipur, Rajasthan –
                                302017</p>
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <h5 class="fw-bold text-primary mb-2"><i class="fa-solid fa-phone me-2"></i> Phone</h5>
                            <p class="mb-0"><a href="tel:+919999999999"
                                    class="text-decoration-none text-dark">+91-9999999999</a></p>
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <h5 class="fw-bold text-primary mb-2"><i class="fa-solid fa-envelope me-2"></i> Email</h5>
                            <p class="mb-0">
                                <a href="mailto:support@octopyder.com"
                                    class="text-decoration-none text-dark d-block">support@octopyder.com</a>
                                <a href="mailto:sales@octopyder.com"
                                    class="text-decoration-none text-dark d-block">sales@octopyder.com</a>
                            </p>
                        </div>

                        <!-- Office Hours -->
                        <div>
                            <h5 class="fw-bold text-primary mb-2"><i class="fa-solid fa-clock me-2"></i> Office Hours</h5>
                            <p class="mb-0">Monday – Saturday, 10:00 AM to 7:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Map or Illustration -->
                <div class="col-lg-6 text-center" data-aos="fade-left">
                    <div class="map-wrapper mx-auto rounded-4 overflow-hidden shadow">
                        <iframe src="https://www.google.com/maps?q=Bhamashah+Techno+Hub,+Jaipur,+Rajasthan&output=embed"
                            width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Quick Links Section --}}
    <section class="quick-links-section py-5 position-relative overflow-hidden text-dark">
        <div class="quick-links-bg"></div>

        <div class="container position-relative text-center" data-aos="fade-up">
            <!-- Title -->
            <h5 class="text-uppercase text-primary fw-semibold mb-3">Quick Links</h5>
            <h2 class="fw-bold mb-5">Explore More with Octopyder</h2>

            <!-- Links Grid -->
            <div class="row justify-content-center g-4">
                <div class="col-md-3 col-6">
                    <a href="#" class="quick-link-card d-block py-4 px-3 rounded-4 shadow-sm">
                        <i class="fa-solid fa-video fa-2x mb-3 text-primary"></i>
                        <h6 class="fw-semibold mb-0">Request a Demo</h6>
                    </a>
                </div>

                <div class="col-md-3 col-6">
                    <a href="#" class="quick-link-card d-block py-4 px-3 rounded-4 shadow-sm">
                        <i class="fa-solid fa-tags fa-2x mb-3 text-primary"></i>
                        <h6 class="fw-semibold mb-0">View Pricing Plans</h6>
                    </a>
                </div>

                <div class="col-md-3 col-6">
                    <a href="#" class="quick-link-card d-block py-4 px-3 rounded-4 shadow-sm">
                        <i class="fa-solid fa-layer-group fa-2x mb-3 text-primary"></i>
                        <h6 class="fw-semibold mb-0">Explore Features</h6>
                    </a>
                </div>

                <div class="col-md-3 col-6">
                    <a href="#" class="quick-link-card d-block py-4 px-3 rounded-4 shadow-sm">
                        <i class="fa-solid fa-users fa-2x mb-3 text-primary"></i>
                        <h6 class="fw-semibold mb-0">Join Our Team</h6>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Support Section --}}
    <section class="support-section py-5 mb-5 text-light position-relative overflow-hidden">
        <div class="support-bg"></div>

        <div class="container position-relative text-center" data-aos="fade-up">
            <!-- Heading -->
            <h5 class="text-uppercase fw-semibold text-light mb-2">Support & Assistance</h5>
            <h1 class="fw-bold display-6 mb-3">Need Immediate Assistance?</h1>
            <p class="lead text-light opacity-75 mx-auto mb-5" style="max-width: 720px;">
                Our support team is always here to help with your queries, onboarding, or troubleshooting.
                Whether you prefer chatting, emailing, or calling — we’re ready to assist you.
            </p>

            <!-- Contact Options -->
            <div class="row justify-content-center g-4 mb-4">
                <!-- Live Chat -->
                <div class="col-md-4">
                    <div class="support-card p-4 rounded-4 h-100">
                        <i class="fa-solid fa-comments fa-2x mb-3 text-accent"></i>
                        <h5 class="fw-semibold">Live Chat</h5>
                        <p class="small opacity-75 mb-0">Available Monday to Saturday</p>
                    </div>
                </div>

                <!-- Email Support -->
                <div class="col-md-4">
                    <div class="support-card p-4 rounded-4 h-100">
                        <i class="fa-solid fa-envelope fa-2x mb-3 text-accent"></i>
                        <h5 class="fw-semibold">Email Support</h5>
                        <p class="small opacity-75 mb-0">24×7 response window</p>
                    </div>
                </div>

                <!-- Phone Assistance -->
                <div class="col-md-4">
                    <div class="support-card p-4 rounded-4 h-100">
                        <i class="fa-solid fa-phone fa-2x mb-3 text-accent"></i>
                        <h5 class="fw-semibold">Phone Assistance</h5>
                        <p class="small opacity-75 mb-0">During business hours</p>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <a href="#" class="btn btn-light btn-lg px-4 py-2 rounded-pill fw-semibold shadow-sm">
                    <i class="fa-solid fa-headset me-2"></i> Chat with Support
                </a>
                <a href="mailto:support@octopyder.com"
                    class="btn btn-outline-light btn-lg px-4 py-2 rounded-pill fw-semibold">
                    <i class="fa-solid fa-envelope me-2"></i> Email Us
                </a>
            </div>
        </div>
    </section>

    {{-- Partners Section  --}}
    <section class="partnership-section py-5 position-relative overflow-hidden text-dark text-center">
        <div class="partnership-bg"></div>

        <div class="container position-relative" data-aos="fade-up">
            <!-- Heading -->
            <h5 class="text-uppercase fw-semibold text-primary mb-2">Partnership & Collaboration</h5>
            <h1 class="fw-bold display-6 mb-3">Collaborate with Octopyder</h1>

            <!-- Body -->
            <p class="lead text-muted mx-auto mb-5" style="max-width: 720px;">
                We love working with forward-thinking partners, resellers, and educational institutions.
                If you’re interested in collaboration, partnership, or hosting a joint event — let’s connect
                and grow together.
            </p>

            <!-- CTA -->
            <div class="mt-4">
                <a href="#" class="btn btn-primary-gradient btn-lg px-5 py-2 rounded-pill fw-semibold shadow-sm">
                    <i class="fa-solid fa-handshake me-2"></i> Submit Partnership Inquiry
                </a>
            </div>
        </div>
    </section>


     {{-- Section - Call to Action  --}}
    <section class="cta-section text-center py-5 position-relative overflow-hidden">
        <div class="cta-bg"></div>
        <div class="cta-particles"></div>

        <div class="container position-relative" data-aos="zoom-in">
            <h1 class="text-light fw-bold mb-2">Ready to Transform Your Business?</h1>
            <p class="text-light fs-5 mb-4">
                Join thousands of businesses using OctoBuss to streamline operations and drive growth.
            </p>

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-cta-glow cta-ripple">
                    Get Started <i class="fa-solid fa-arrow-right ms-2"></i>
                </button>
                <button class="btn btn-light cta-ripple">
                    Schedule Demo
                </button>
            </div>
        </div>
    </section>

    <!-- Sticky CTA bar (appears after you scroll past the main CTA) -->
    <div class="sticky-cta shadow-lg" id="stickyCta" aria-hidden="true">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-2 py-2">
            <span class="text-light fw-semibold">Supercharge your operations with OctoBuss</span>
            <div class="d-flex gap-2">
                <button class="btn btn-light cta-ripple">Schedule Demo</button>
                <button class="btn btn-light cta-ripple">
                    Get Started <i class="fa-solid fa-arrow-right ms-1"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Scroll-to-top chip -->
    <button class="to-top" id="toTop" aria-label="Scroll to top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

@push('scripts')
<script>
        // Ripple feedback
        document.querySelectorAll('.cta-ripple').forEach(btn => {
            btn.addEventListener('click', () => {
                btn.classList.remove('rippling');
                void btn.offsetWidth; // reflow
                btn.classList.add('rippling');
                setTimeout(() => btn.classList.remove('rippling'), 450);
            });
        });

        // Sticky CTA + To-top visibility using IntersectionObserver (graceful fallback)
        const sticky = document.getElementById('stickyCta');
        const toTop = document.getElementById('toTop');
        const ctaSection = document.querySelector('.cta-section');

        function showSticky(flag) {
            if (!sticky) return;
            sticky.classList.toggle('visible', flag);
            sticky.setAttribute('aria-hidden', flag ? 'false' : 'true');
        }

        function showToTop(flag) {
            if (!toTop) return;
            toTop.classList.toggle('visible', flag);
        }

        if ('IntersectionObserver' in window && ctaSection) {
            const io = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    const isVisible = e.isIntersecting && e.intersectionRatio > 0.2;
                    showSticky(!isVisible);
                    showToTop(!isVisible);
                });
            }, {
                threshold: [0, .2, 1]
            });
            io.observe(ctaSection);
        } else {
            // Fallback on scroll
            window.addEventListener('scroll', () => {
                const trigger = 300;
                const scrolled = window.scrollY > trigger;
                showSticky(scrolled);
                showToTop(scrolled);
            });
        }

        // Scroll to top
        if (toTop) {
            toTop.addEventListener('click', () => window.scrollTo({
                top: 0,
                behavior: 'smooth'
            }));
        }
    </script>
@endpush
