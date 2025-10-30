@extends('layout.app')

@section('title', 'Run Your Entire Business on One Smart Platform')

<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@section('content')

    {{-- Hero Section --}}
    <section class="hero-section position-relative overflow-hidden py-5 mt-4">
        <div class="container position-relative z-3">
            <div class="row align-items-center">

                <!-- LEFT: Text -->
                <div class="col-lg-6 mb-5" data-aos="fade-right">
                    <h1 class="display-5 fw-bold lh-sm mb-3">
                        Building the <br> <span class="text-gradient">Digital Backbone</span><br>
                        for Modern Businesses
                    </h1>
                    <p class="lead text-muted mb-4">
                        At Octopyder, we believe every business — no matter its size — deserves
                        powerful, affordable, and intelligent tools to run efficiently.<br><br>
                        That’s why we created <strong>Octopyder BMS</strong>, a unified platform that empowers
                        organizations to simplify operations and focus on growth.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#" class="btn btn-primary btn-lg rounded-pill px-4 py-2 shadow-sm">
                            <i class="fa-solid fa-cube me-2"></i> Explore Our Product
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-lg rounded-pill px-4 py-2">
                            <i class="fa-solid fa-message me-2"></i> Get in Touch
                        </a>
                    </div>
                </div>

                <!-- RIGHT: Animated Abstract Illustration -->
                <div class="col-lg-6 text-center position-relative" data-aos="fade-left">
                    <div class="illustration-wrapper mx-auto">
                        <div class="network-bg"></div>

                        <!-- Core node -->
                        <div class="core-node">
                            <i class="fa-solid fa-globe"></i>
                        </div>

                        <!-- Connected nodes -->
                        <div class="orbit orbit-1">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="orbit orbit-2">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <div class="orbit orbit-3">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <div class="orbit orbit-4">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <div class="orbit orbit-5">
                            <i class="fa-solid fa-building"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Who We Are Section --}}
    <section class="who-we-are-section py-5 position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row align-items-center g-5">

                <!-- LEFT: Image + Floating Labels -->
                <div class="col-lg-6 text-center" data-aos="fade-right">
                    <div class="about-visual position-relative mx-auto">
                        <img src="{{ asset('img/team-illustration.svg') }}" alt="Team"
                            class="img-fluid main-illustration">

                        <div class="label-bubble label-top-left">
                            <i class="fa-solid fa-lightbulb me-1"></i> Innovation
                        </div>
                        <div class="label-bubble label-top-right">
                            <i class="fa-solid fa-shield-halved me-1"></i> Security
                        </div>
                        <div class="label-bubble label-bottom">
                            <i class="fa-solid fa-brain me-1"></i> Intelligence
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Text Content -->
                <div class="col-lg-6" data-aos="fade-left">
                    <h6 class="text-uppercase text-primary fw-bold mb-2">Who We Are</h6>
                    <h1 class="fw-bold display-6 lh-sm mb-3">
                        We’re a Team of <span class="text-gradient">Innovators, Engineers,</span> and Problem Solvers
                    </h1>

                    <p class="text-muted fs-5 mb-4">
                        Founded in <strong>2022</strong>, <b>Octopyder Services Pvt. Ltd.</b> is a Jaipur-based technology
                        company
                        driven by innovation and efficiency.
                    </p>
                    <p class="text-dark fs-5 mb-4">
                        We specialize in developing intelligent business solutions that combine
                        <b>automation</b>, <b>cybersecurity</b>, and <b>data intelligence</b>.
                        Our flagship product, <strong>Octopyder BMS</strong>, connects every department —
                        HR, Projects, CRM, and Finance — under one unified system.
                    </p>

                    <!-- Highlights Grid -->
                    <div class="row g-3 mt-3">
                        <div class="col-sm-6">
                            <div class="highlight-box">
                                <i class="fa-solid fa-bolt"></i>
                                <h6>Automation-Driven</h6>
                                <p>Smart workflows to reduce manual work and improve efficiency.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="highlight-box">
                                <i class="fa-solid fa-lock"></i>
                                <h6>Secure by Design</h6>
                                <p>Built with enterprise-grade cybersecurity principles.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="highlight-box">
                                <i class="fa-solid fa-database"></i>
                                <h6>Data Intelligence</h6>
                                <p>Transform raw data into actionable business insights.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="highlight-box">
                                <i class="fa-solid fa-users"></i>
                                <h6>Customer-Centric</h6>
                                <p>Solutions designed around your business needs.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Mission and Vision  --}}
    <section class="mission-vision-section py-5 position-relative overflow-hidden">
        <div class="mv-bg"></div>
        <div class="container position-relative z-2">

            <!-- Mission -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-uppercase text-primary fw-semibold mb-2">Our Mission</h5>
                <h1 class="fw-bold display-6 mb-3">To Simplify, Secure, and Scale Business Operations</h1>
                <p class="lead text-muted mb-4">
                    Our mission is to empower organizations with <b>smart</b>, <b>scalable</b>, and <b>secure technology
                        solutions</b>.<br>
                    We aim to make digital transformation accessible — not just for large enterprises,
                    but for startups, educational institutions, and every growing business that values efficiency and
                    transparency.
                </p>

                <div class="mission-quote mx-auto mt-4" data-aos="fade-up" data-aos-delay="200">
                    <i class="fa-solid fa-quote-left text-primary me-2"></i>
                    <span>“To help businesses work smarter, not harder — through automation, intelligence, and
                        innovation.”</span>
                </div>
            </div>

            <div class="divider my-5" data-aos="zoom-in"></div>

            <!-- Vision -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <h5 class="text-uppercase text-primary fw-semibold mb-2">Our Vision</h5>
                <h1 class="fw-bold display-6 mb-3">To Be the Technology Engine Behind Every Successful Business</h1>
                <p class="lead text-muted mb-4 mx-auto" style="max-width: 850px;">
                    We envision a future where every business — from schools to enterprises — operates seamlessly
                    with technology that <b>understands</b> and <b>adapts</b> to their needs.<br>
                    <strong>Octopyder BMS</strong> is our step toward that future — where decisions are <b>data-driven</b>,
                    processes are <b>automated</b>, and collaboration happens effortlessly.
                </p>
            </div>


        </div>
    </section>

    {{-- Journey Section --}}
    <section class="journey-section py-5 position-relative overflow-hidden">
        <div class="journey-bg"></div>
        <div class="container position-relative">

            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-uppercase text-primary fw-semibold mb-2">Our Journey</h5>
                <h1 class="fw-bold display-6 mb-3">A Journey of Innovation and Growth</h1>
                <p class="text-muted lead">
                    From humble beginnings to building a connected business ecosystem.<br> our path has been driven
                    by innovation, collaboration, and resilience.
                </p>
            </div>

            <!-- Timeline -->
            <div class="timeline position-relative">

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="0">
                    <div class="timeline-dot"><i class="fa-solid fa-flag"></i></div>
                    <div class="timeline-content">
                        <h4>2022 <br> A Strong Foundation</h4>
                        <p>Octopyder Services Pvt. Ltd. was founded with a vision to bring digital efficiency to Indian
                            startups and institutions.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-dot"><i class="fa-solid fa-rocket"></i></div>
                    <div class="timeline-content">
                        <h4>2023 <br> Growth & Expansion</h4>
                        <p>Successfully onboarded multiple clients and launched products in web development and
                            cybersecurity training.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-dot"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="timeline-content">
                        <h4>2024 <br> Resilience & Adaptation</h4>
                        <p>Enhanced our services with machine learning, SOC implementation, and advanced cybersecurity
                            solutions.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-dot"><i class="fa-solid fa-network-wired"></i></div>
                    <div class="timeline-content">
                        <h4>2025 <br> A New Era</h4>
                        <p>Introduced <b>Octopyder BMS</b>, our complete Business Management System — uniting all business
                            functions into one connected ecosystem.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Leadershp Section --}}
    <section class="leadership-section py-5 position-relative overflow-hidden">
        <div class="leadership-bg"></div>
        <div class="container position-relative text-center">

            <!-- Heading -->
            <div class="mb-5" data-aos="fade-up">
                <h5 class="text-uppercase text-primary fw-semibold mb-2">Leadership Team</h5>
                <h1 class="fw-bold display-6 mb-3">Meet Our Founders</h1>
                <p class="text-muted lead mb-4">
                    The visionaries driving Octopyder’s mission to simplify, secure, and scale digital operations.
                </p>
            </div>

            <!-- Founder Cards -->
            <div class="row justify-content-center g-4">

                <!-- Himanshu Harsh -->
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="founder-card glassy shadow-lg p-4 text-center">
                        <img src="{{ asset('img/himanshu.png') }}" alt="Himanshu Harsh" class="founder-img mb-3">
                        <h4 class="fw-bold mb-1">Himanshu Harsh</h4>
                        <p class="text-primary fw-semibold mb-2">Director & Cybersecurity Lead</p>
                        <p class="text-muted small">
                            A technology enthusiast and cybersecurity expert passionate about digital safety and business
                            automation.
                            He drives Octopyder’s vision for secure digital transformation.
                        </p>
                    </div>
                </div>

                <!-- Ajeet Kumar -->
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="founder-card glassy shadow-lg p-4 text-center">
                        <img src="{{ asset('img/ajeet.png') }}" alt="Ajeet Kumar" class="founder-img mb-3">
                        <h4 class="fw-bold mb-1">Ajeet Kumar</h4>
                        <p class="text-primary fw-semibold mb-2">Director & Operations Head</p>
                        <p class="text-muted small">
                            An innovator focused on simplifying business processes and building scalable software systems
                            that solve real-world problems.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Founders Quote -->
            <div class="mt-5" data-aos="fade-up" data-aos-delay="300">
                <blockquote class="founder-quote mx-auto">
                    <i class="fa-solid fa-quote-left text-primary me-2"></i>
                    “We started Octopyder with one simple goal — to help businesses work smarter
                    by uniting technology and practicality.”
                </blockquote>
            </div>
        </div>
    </section>

    {{-- Core value Section --}}
    <section class="values-section py-5 position-relative overflow-hidden">
        <div class="values-bg"></div>
        <div class="container position-relative text-center">

            <!-- Section Title -->
            <div class="mb-5" data-aos="fade-up">
                <h5 class="text-uppercase text-primary fw-semibold mb-2">Our Core Values</h5>
                <h1 class="fw-bold display-6 mb-3">The Principles That Drive Octopyder</h1>
                <p class="text-muted lead">
                    These five pillars shape how we build, collaborate, and innovate — ensuring every solution we deliver
                    creates lasting impact.
                </p>
            </div>

            <!-- Values Grid -->
            <div class="row g-4 justify-content-center">

                <!-- Transparency -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="value-card glassy p-4 shadow-sm h-100">
                        <div class="value-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h5 class="fw-bold mt-3">Transparency</h5>
                        <p class="text-muted small mb-0">
                            We believe in open communication and honest collaboration.
                        </p>
                    </div>
                </div>

                <!-- Innovation -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card glassy p-4 shadow-sm h-100">
                        <div class="value-icon">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>
                        <h5 class="fw-bold mt-3">Innovation</h5>
                        <p class="text-muted small mb-0">
                            We push boundaries to create technology that empowers.
                        </p>
                    </div>
                </div>

                <!-- Collaboration -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card glassy p-4 shadow-sm h-100">
                        <div class="value-icon">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <h5 class="fw-bold mt-3">Collaboration</h5>
                        <p class="text-muted small mb-0">
                            We grow by growing others — our clients, partners, and team.
                        </p>
                    </div>
                </div>

                <!-- Security -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-card glassy p-4 shadow-sm h-100">
                        <div class="value-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h5 class="fw-bold mt-3">Security</h5>
                        <p class="text-muted small mb-0">
                            Every product we build is rooted in trust and data protection.
                        </p>
                    </div>
                </div>

                <!-- Growth -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-card glassy p-4 shadow-sm h-100">
                        <div class="value-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h5 class="fw-bold mt-3">Growth</h5>
                        <p class="text-muted small mb-0">
                            We evolve continuously — learning, adapting, and improving.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Acheivement Section --}}
    <section class="achievements-section py-5 position-relative overflow-hidden text-center text-dark">
        <div class="achievements-bg"></div>
        <div class="container position-relative">

            <!-- Heading -->
            <div class="mb-5" data-aos="fade-up">
                <h5 class="text-uppercase text-primary fw-semibold mb-2">Our Achievements</h5>
                <h1 class="fw-bold display-6 mb-3">Milestones That Define Our Growth</h1>
                <p class="text-muted lead">
                    From startup incubation to national recognition — our journey reflects innovation, impact, and
                    dedication.
                </p>
            </div>

            <!-- Achievements List -->
            <div class="row justify-content-center g-4">

                <!-- iStart Rajasthan -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="0">
                    <div class="achievement-card glassy p-4 h-100 shadow-sm text-start d-flex align-items-start gap-3">
                        <div class="icon-badge">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Recognized under iStart Rajasthan</h5>
                            <p class="text-muted small mb-0">
                                Incubated under the <strong>iStart Rajasthan Program</strong>, fostering our vision to
                                revolutionize digital transformation in India.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Startup Mahakumbh -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="achievement-card glassy p-4 h-100 shadow-sm text-start d-flex align-items-start gap-3">
                        <div class="icon-badge">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Showcased at Startup Mahakumbh 2025</h5>
                            <p class="text-muted small mb-0">
                                Qualified for the <strong>Startup MahaRathi Challenge</strong> and presented at Bharat
                                Mandapam, New Delhi — celebrating India’s startup innovation.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Cybersecurity Sessions -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="achievement-card glassy p-4 h-100 shadow-sm text-start d-flex align-items-start gap-3">
                        <div class="icon-badge">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Cybersecurity Training Initiatives</h5>
                            <p class="text-muted small mb-0">
                                Conducted multiple <strong>Cybersecurity & Ethical Hacking</strong> workshops in
                                collaboration with leading educational institutions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Product Development -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="achievement-card glassy p-4 h-100 shadow-sm text-start d-flex align-items-start gap-3">
                        <div class="icon-badge">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Innovative Product Development</h5>
                            <p class="text-muted small mb-0">
                                Built intelligent solutions like <strong>Eduphin</strong> (ERP for Schools & Colleges) and
                                <strong>OCTOPYDER</strong> (Intrusion Prevention & Detection System).
                            </p>
                        </div>
                    </div>
                </div>

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
        document.addEventListener("DOMContentLoaded", () => {
            // Fade-up animation
            gsap.from(".core-node", {
                scale: 0,
                opacity: 0,
                duration: 1,
                ease: "back.out(1.7)"
            });
            gsap.from(".orbit", {
                scale: 0,
                opacity: 0,
                stagger: 0.2,
                duration: 1,
                ease: "back.out(1.5)",
                delay: 0.3,
            });

            // Gentle orbit rotation
            gsap.to(".orbit-1", {
                rotation: 360,
                transformOrigin: "center center",
                repeat: -1,
                duration: 20,
                ease: "linear"
            });
            gsap.to(".orbit-2", {
                rotation: 360,
                transformOrigin: "center center",
                repeat: -1,
                duration: 25,
                ease: "linear"
            });
            gsap.to(".orbit-3", {
                rotation: -360,
                transformOrigin: "center center",
                repeat: -1,
                duration: 22,
                ease: "linear"
            });
            gsap.to(".orbit-4", {
                rotation: -360,
                transformOrigin: "center center",
                repeat: -1,
                duration: 28,
                ease: "linear"
            });
            gsap.to(".orbit-5", {
                rotation: 360,
                transformOrigin: "center center",
                repeat: -1,
                duration: 24,
                ease: "linear"
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            gsap.from(".highlight-card", {
                opacity: 0,
                y: 30,
                stagger: 0.2,
                duration: 0.8,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".who-we-are-section",
                    start: "top 80%",
                },
            });
        });
    </script>

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
