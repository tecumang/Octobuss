@extends('layout.app')

@section('title', 'Run Your Entire Business on One Smart Platform')

@section('content')

    {{-- hero section  --}}
    <section class="hero-section py-5 mt-5 position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row align-items-center">
                <!-- LEFT SIDE: Text -->
                <div class="col-lg-6 mb-5" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-3 hero-title">
                        Run Your Entire Business<br>on One Smart Platform
                    </h1>
                    <p class="lead text-secondary mb-4">
                        Manage every aspect of your business efficiently — all from one integrated system.
                    </p>

                    <ul class="list-unstyled text-muted mb-4 fs-6">
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Automate daily operations and reduce
                            manual effort</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Manage people, projects, and finances
                            in one place</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Improve collaboration and
                            decision-making</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Gain real-time visibility across
                            departments</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Scale seamlessly as your team or
                            business grows</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Designed for startups, SMEs, and
                            enterprises alike</li>
                    </ul>

                    <div class="d-flex flex-wrap gap-3 mb-3">
                        <a href="#" class="btn btn-primary btn-lg px-4">Start Free Trial</a>
                        <a href="#" class="btn btn-outline-primary btn-lg px-4">Request a Demo</a>
                    </div>

                    <p class="text-muted small">
                        <i class="fa-solid fa-check text-success"></i> No setup hassle &nbsp;·&nbsp;
                        <i class="fa-solid fa-check text-success"></i> Free onboarding support &nbsp;·&nbsp;
                        <i class="fa-solid fa-check text-success"></i> 14-day free trial
                    </p>
                </div>


                <!-- RIGHT SIDE: Visual Dashboard -->
                <div class="col-lg-6 text-center position-relative" data-aos="fade-left">
                    <div class="dashboard-preview position-relative mx-auto">

                        <!-- Center Dashboard -->


                        <!-- Hover Images -->
                        <img src="{{ asset('img/hr.png') }}" id="img-hr" class="img-fluid hero-image" alt="HR Dashboard">
                        <img src="{{ asset('img/fa.png') }}" id="img-fa" class="img-fluid hero-image"
                            alt="Finance Dashboard">
                        <img src="{{ asset('img/sm.png') }}" id="img-sm" class="img-fluid hero-image"
                            alt="Sales Dashboard">
                        <img src="{{ asset('img/ps.png') }}" id="img-ps" class="img-fluid hero-image"
                            alt="Procurement Dashboard">
                        <img src="{{ asset('img/op.png') }}" id="img-op" class="img-fluid hero-image"
                            alt="Operations Dashboard">
                        <img src="{{ asset('img/cs.png') }}" id="img-cs" class="img-fluid hero-image"
                            alt="Customer Support">
                        <img src="{{ asset('img/clr.png') }}" id="img-clr" class="img-fluid hero-image"
                            alt="Compliance Dashboard">
                        <img src="{{ asset('img/as.png') }}" id="img-as" class="img-fluid hero-image"
                            alt="Admin Dashboard">
                        <img src="{{ asset('img/it.png') }}" id="img-it" class="img-fluid hero-image" alt="IT Dashboard">
                        <img src="{{ asset('img/em.png') }}" id="img-em" class="img-fluid hero-image"
                            alt="Executive Dashboard">

                        <!-- Circular Floating Cards -->
                        @php
                            $modules = [
                                ['id' => 'hr', 'icon' => 'fa-users', 'title' => 'Human Resource'],
                                ['id' => 'fa', 'icon' => 'fa-sack-dollar', 'title' => 'Finance & Accounting'],
                                ['id' => 'sm', 'icon' => 'fa-bullhorn', 'title' => 'Sales & Marketing'],
                                ['id' => 'ps', 'icon' => 'fa-cart-flatbed', 'title' => 'Procurement & Supply Chain'],
                                ['id' => 'op', 'icon' => 'fa-industry', 'title' => 'Operations & Production'],
                                ['id' => 'cs', 'icon' => 'fa-headset', 'title' => 'Customer Support'],
                                ['id' => 'clr', 'icon' => 'fa-scale-balanced', 'title' => 'Compliance, Legal & Risk'],
                                ['id' => 'as', 'icon' => 'fa-building', 'title' => 'Administration & Services'],
                                ['id' => 'it', 'icon' => 'fa-microchip', 'title' => 'IT & Technology'],
                                ['id' => 'em', 'icon' => 'fa-user-tie', 'title' => 'Executive Management'],
                            ];
                        @endphp

                        @foreach ($modules as $i => $m)
                            <div class="module-card card-trigger" data-target="{{ $m['id'] }}">
                                <i class="fa-solid {{ $m['icon'] }}"></i>
                                <p>{{ $m['title'] }}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- product overview section  --}}
    <section class="py-5 product-overview position-relative overflow-hidden">
        <div class="container py-4">
            <div class="row align-items-center">
                <!-- Left Text -->
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="fw-bold display-5 mb-3 text-primary">
                        All Your Business Operations in One Place
                    </h2>
                    <p class="lead text-secondary">
                        Running a business today means handling people, projects, customers, vendors, payments, and strategy
                        —
                        often across different tools that don’t talk to each other.
                    </p>
                    <p class="text-muted fs-6 mb-4">
                        Octopyder BMS replaces this complexity with a single, intelligent system that connects every
                        department seamlessly.
                        From HR and Project Management to CRM and Finance, every process flows smoothly — giving you total
                        visibility and control.
                    </p>

                    <div class="highlight-box p-4 rounded-4 shadow-sm" data-aos="zoom-in">
                        <h5 class="fw-semibold text-dark mb-0">
                            <i class="fa-solid fa-lightbulb text-warning me-2"></i>
                            Think of <span class="text-primary fw-bold">Octopyder BMS</span> as your digital headquarters —
                            where teams collaborate, decisions are made faster, and operations run without friction.
                        </h5>
                    </div>
                </div>

                <!-- Right Image / Graphic -->
                <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="overview-graphic position-relative">
                        <img src="{{ asset('img/background.png') }}" alt="Business Overview"
                            class="img-fluid rounded-4 shadow-lg overview-image">

                        <!-- Floating circles for motion -->
                        <div class="pulse-circle circle-1"></div>
                        <div class="pulse-circle circle-2"></div>
                        <div class="pulse-circle circle-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section - Trusted by Businesses Worldwide --}}
    <section class="py-5 position-relative overflow-hidden text-center text-dark">

        <div class="container position-relative px-3 px-md-5" data-aos="fade-up">
            <div class="d-flex justify-content-center mb-3">
                <span
                    class="badge bg-light text-primary fs-5 fs-md-4 fs-sm-6 px-4 px-md-3 px-sm-2 py-2 rounded-pill shadow-sm 
                    d-inline-flex flex-wrap align-items-center justify-content-center gap-2 mx-auto mt-3 mb-3 w-auto animate-pulse text-center">
                    <i class="fa-solid fa-star text-primary"></i>
                    <span>Trusted by <strong>10+ Businesses</strong> Worldwide</span>
                </span>
            </div>



            <h1 class="fw-bold display-4 mt-4" data-aos="fade-up" data-aos-delay="100">One Platform for Your</h1>
            <h1 class="fw-bold display-4 text-primary mb-3" data-aos="fade-up" data-aos-delay="200">Entire Business</h1>
            <h5 class="text-muted mb-4" data-aos="fade-up" data-aos-delay="300">
                Unify your operations with our centralized business management platform.<br>
                From HR to supply chain, manage everything seamlessly in one intelligent system.
            </h5>

            <div class="d-flex justify-content-center gap-3 my-4" data-aos="fade-up" data-aos-delay="400">
                <button class="btn btn-outline-primary rounded-pill px-4 py-2">
                    Schedule Demo
                </button>
                <button class="btn btn-outline-secondary rounded-pill px-4 py-2">
                    Get Started <i class="fa-solid fa-arrow-right ms-2"></i>
                </button>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-4 mt-4 text-muted fs-6" data-aos="zoom-in"
                data-aos-delay="500">
                <div><i class="fa-solid fa-check text-success me-2"></i>No credit card required</div>
                <div><i class="fa-solid fa-check text-success me-2"></i>14-day free trial</div>
                <div><i class="fa-solid fa-check text-success me-2"></i>Cancel anytime</div>
            </div>
        </div>
    </section>

    {{-- Section - Platform Features --}}
    <section class="section-platform container-fluid py-5 position-relative overflow-hidden">
        <div class="platform-gradient"></div>

        <div class="row align-items-center justify-content-between px-3 px-md-5">
            <!-- LEFT: Copy -->
            <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right">
                <h1 class="fw-bold lh-1 mb-3 text-dark">
                    Empower Your <span class="text-primary">Business Operations</span>
                </h1>
                <div class="underline mb-4"></div>

                <p class="lead text-muted mb-4">
                    Transform how your company runs — unify HR, finance, sales, and operations in one platform that
                    automates workflows, eliminates silos, and boosts real-time collaboration.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <span class="chip"><i class="fa-regular fa-circle-check me-2"></i>Unified Dashboard</span>
                    <span class="chip"><i class="fas fa-bolt me-2"></i>Instant Insights</span>
                    <span class="chip"><i class="fas fa-lock me-2"></i>Enterprise Security</span>
                </div>

                <a href="#" class="btn btn-primary rounded-pill px-4 py-2 shadow-sm">
                    Explore Modules <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>

            <!-- RIGHT: Feature Card -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
                <div class="feature-card glass-card border-0 p-4 shadow-lg">
                    <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                        <span class="dot"></span> Core Business Modules
                    </h5>
                    <div class="list-group list-group-flush">
                        @php
                            $modules = [
                                ['img' => 'hr.png', 'title' => 'Human Resource Management'],
                                ['img' => 'fa.png', 'title' => 'Finance & Accounting'],
                                ['img' => 'sm.png', 'title' => 'Sales & Marketing'],
                                ['img' => 'ps.png', 'title' => 'Procurement & Supply Chain'],
                                ['img' => 'op.png', 'title' => 'Operations & Production'],
                                ['img' => 'cs.png', 'title' => 'Customer Support'],
                                ['img' => 'clr.png', 'title' => 'Compliance, Legal & Risk'],
                                ['img' => 'as.png', 'title' => 'Administration & Services'],
                                ['img' => 'it.png', 'title' => 'IT & Technology'],
                                ['img' => 'em.png', 'title' => 'Executive Management'],
                            ];
                        @endphp
                        @foreach ($modules as $i => $m)
                            <div class="list-group-item feature-item d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="{{ $i * 50 }}">
                                <img src="{{ asset('img/' . $m['img']) }}" class="mod-icon" alt="{{ $m['title'] }}">
                                <span>{{ $m['title'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section - Key Metrics --}}
    <section class="metrics-section text-center py-5 position-relative overflow-hidden">
        <div class="metrics-overlay"></div>
        <div class="container position-relative">
            <div class="row justify-content-center text-white">
                <div class="col-6 col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="0">
                    <h1 class="metric-number fw-bold" data-target="10">0</h1>
                    <p>Active Companies</p>
                </div>
                <div class="col-6 col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <h1 class="metric-number fw-bold" data-target="99.9">0</h1>
                    <p>Uptime SLA</p>
                </div>
                <div class="col-6 col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <h1 class="metric-number fw-bold" data-target="10">0</h1>
                    <p>Integrations</p>
                </div>
                <div class="col-6 col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <h1 class="metric-number fw-bold" data-target="24">0</h1>
                    <p>Support (Hrs)</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section - Features Highlights  --}}
    <section class="my-5 position-relative overflow-hidden">

        <h1 class="text-center text-dark fw-bold" data-aos="fade-up">Built for Modern Businesses</h1>
        <p class="text-center text-dark fs-5" data-aos="fade-up" data-aos-delay="100">
            Everything you need to run your business efficiently, securely, and at scale
        </p>

        <div class="row g-3 mt-3">
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="0">
                <div class="card feature-tile tilt-card">
                    <div class="card-body text-center">
                        <span class="icon-wrap">
                            <i class="fa-solid fa-bolt"></i>
                            <span class="icon-ring"></span>
                        </span>
                        <h3 class="my-3 fw-bold">Lightning Fast</h3>
                        <p class="mb-0">Built for speed with real-time updates across all modules</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="card feature-tile tilt-card">
                    <div class="card-body text-center">
                        <span class="icon-wrap">
                            <i class="fa-solid fa-shield"></i>
                            <span class="icon-ring"></span>
                        </span>
                        <h3 class="my-3 fw-bold">Enterprise Security</h3>
                        <p class="mb-0">Bank-level encryption and compliance with global standards</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="card feature-tile tilt-card">
                    <div class="card-body text-center">
                        <span class="icon-wrap">
                            <i class="fas fa-chart-bar"></i>
                            <span class="icon-ring"></span>
                        </span>
                        <h3 class="my-3 fw-bold">Advanced Analytics</h3>
                        <p class="mb-0">AI-powered insights and customizable dashboards</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="card feature-tile tilt-card">
                    <div class="card-body text-center">
                        <span class="icon-wrap">
                            <i class="fas fa-globe"></i>
                            <span class="icon-ring"></span>
                        </span>
                        <h3 class="my-3 fw-bold">Global Scale</h3>
                        <p class="mb-0">Multi-currency, multi-language, multi-location support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section - About OctoBuss --}}
    <section class="about-octobuss position-relative overflow-hidden py-5 text-dark">
        <div class="about-bg"></div>

        <div class="container position-relative">
            <div class="row align-items-center g-5">

                <!-- Left: Copy -->
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="badge rounded-pill bg-light text-primary px-3 py-2 fw-semibold shadow-sm mb-3">
                        <i class="fa-solid fa-layer-group me-2"></i> All-in-One Business OS
                    </span>

                    <h1 class="fw-bold display-4 lh-1 mb-2 text-dark">
                        OctoBuss — <span class="text-primary">Simplify Business. Amplify Growth.</span>
                    </h1>
                    <div class="accent-line mb-3"></div>

                    <p class="lead text-muted">
                        OctoBuss is your intelligent business operating system — unifying HR, finance, projects, and
                        customer operations into one powerful platform. Automate workflows, collaborate in real time, and
                        scale faster with insights that drive results.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <span class="chip"><i class="fa-solid fa-bolt me-2"></i> Real-time Analytics</span>
                        <span class="chip"><i class="fa-solid fa-gear me-2"></i> Automated Workflows</span>
                        <span class="chip"><i class="fa-solid fa-shield-halved me-2"></i> Enterprise Security</span>
                    </div>
                </div>

                <!-- Right: Testimonial -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="testimonial glass-card shadow-lg p-4 p-md-5 text-start position-relative">
                        <div class="quote-icon">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>

                        <blockquote class="mt-3">
                            <p class="fs-4 fw-semibold text-dark mb-3">
                                “OctoBuss has completely transformed our workflow. The unified dashboard and automation
                                tools reduced manual effort, improved collaboration, and gave us data-driven control.”
                            </p>
                        </blockquote>

                        <div class="d-flex align-items-center gap-3 mt-4">
                            <img src="{{ asset('img/logo.png') }}" alt="Octopyder Services" class="author-avatar">
                            <div>
                                <h6 class="fw-bold mb-0">Himanshu Harsh</h6>
                                <p class="text-muted mb-1 small">CEO, Octopyder Services</p>
                                <div class="text-warning small">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    <span class="text-muted ms-1">4.5 / 5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section - Brands That Trust Us --}}
    <section class="brands-trust text-center py-5 position-relative overflow-hidden">
        <div class="brands-overlay"></div>

        <div class="container position-relative">
            <h1 class="fw-bold text-dark mb-2" data-aos="fade-up">Brands That Trust Us</h1>
            <div class="divider mx-auto mb-5" data-aos="fade-up" data-aos-delay="100"></div>

            <!-- Marquee -->
            <div class="brands-marquee" data-aos="fade-up" data-aos-delay="200">
                <div class="brands-track d-flex align-items-center">
                    @php
                        $brands = [
                            ['img' => 'b1.png', 'name' => 'RNKS Services'],
                            ['img' => 'b2.png', 'name' => 'Taaffeite Infratech'],
                            ['img' => 'b3.png', 'name' => 'LBSATI'],
                            ['img' => 'b4.png', 'name' => 'LBSATI Pathlab'],
                            ['img' => 'b5.png', 'name' => 'Uniquoor'],
                            ['img' => 'b6.png', 'name' => 'Kalkai Studio'],
                        ];
                    @endphp

                    @foreach ($brands as $b)
                        <div class="brand-item">
                            <img src="{{ asset('img/' . $b['img']) }}" alt="{{ $b['name'] }}"
                                class="img-fluid rounded-circle">
                            <span>{{ $b['name'] }}</span>
                        </div>
                    @endforeach

                    <!-- Duplicate set for infinite scroll -->
                    @foreach ($brands as $b)
                        <div class="brand-item">
                            <img src="{{ asset('img/' . $b['img']) }}" alt="{{ $b['name'] }}" class="img-fluid">
                            <span>{{ $b['name'] }}</span>
                        </div>
                    @endforeach
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
            const cards = document.querySelectorAll(".module-card");
            const mainImage = document.getElementById("mainImage");

            const images = {
                hr: document.getElementById("img-hr"),
                fa: document.getElementById("img-fa"),
                sm: document.getElementById("img-sm"),
                ps: document.getElementById("img-ps"),
                op: document.getElementById("img-op"),
                cs: document.getElementById("img-cs"),
                clr: document.getElementById("img-clr"),
                as: document.getElementById("img-as"),
                it: document.getElementById("img-it"),
                em: document.getElementById("img-em"),
            };

            const dashboard = document.querySelector(".dashboard-preview");
            const total = cards.length;
            let currentIndex = 0;
            let rotationAngle = 0;

            // --- Get radius dynamically from container width ---
            function getRadius() {
                const width = dashboard.offsetWidth;
                return width > 450 ? 280 : width > 350 ? 220 : width > 280 ? 170 : 130;
            }

            let radius = getRadius();

            // --- Position cards in a circle ---
            function positionCards() {
                radius = getRadius();
                cards.forEach((card, index) => {
                    const angle = ((index / total) * (2 * Math.PI)) + rotationAngle;
                    const x = radius * Math.cos(angle);
                    const y = radius * Math.sin(angle);
                    card.style.left = `calc(50% + ${x}px)`;
                    card.style.top = `calc(50% + ${y}px)`;
                    card.style.transform = "translate(-50%, -50%)";
                });
            }
            positionCards();

            // --- Rotate continuously ---
            gsap.to({}, {
                repeat: -1,
                duration: 0.05,
                onRepeat: () => {
                    rotationAngle += 0.005;
                    positionCards();
                }
            });

            // --- Floating bounce effect ---
            gsap.to(".module-card", {
                y: "+=10",
                repeat: -1,
                yoyo: true,
                duration: 3,
                stagger: 0.1,
                ease: "sine.inOut"
            });

            // --- Spotlight animation ---
            function showModule(index) {
                const currentCard = cards[index];
                const target = currentCard.dataset.target;

                cards.forEach(card => {
                    gsap.to(card, {
                        scale: 1,
                        boxShadow: "0 0 10px rgba(0,0,0,0.1)",
                        duration: 0.3,
                        zIndex: 5
                    });
                });

                Object.values(images).forEach(img => gsap.to(img, {
                    opacity: 0,
                    duration: 0.4
                }));

                gsap.to(currentCard, {
                    left: "50%",
                    top: "50%",
                    scale: 1.3,
                    zIndex: 30,
                    boxShadow: "0 0 40px rgba(10,78,215,0.6)",
                    duration: 0.8,
                    ease: "power2.out"
                });

                gsap.to(images[target], {
                    opacity: 1,
                    duration: 0.6
                });

                setTimeout(() => {
                    const angle = ((index / total) * (2 * Math.PI)) + rotationAngle;
                    const x = radius * Math.cos(angle);
                    const y = radius * Math.sin(angle);

                    gsap.to(currentCard, {
                        left: `calc(50% + ${x}px)`,
                        top: `calc(50% + ${y}px)`,
                        scale: 1,
                        zIndex: 5,
                        boxShadow: "0 0 10px rgba(0,0,0,0.1)",
                        duration: 0.8,
                        ease: "power2.inOut"
                    });
                }, 3000);
            }

            // --- Auto rotation ---
            function autoRotate() {
                showModule(currentIndex);
                currentIndex = (currentIndex + 1) % total;
            }

            setInterval(autoRotate, 4000);
            autoRotate();

            // --- Reposition on resize ---
            window.addEventListener("resize", () => {
                positionCards();
            });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            gsap.from(".product-overview h2", {
                y: 40,
                opacity: 0,
                duration: 0.8
            });
            gsap.from(".product-overview p", {
                y: 30,
                opacity: 0,
                duration: 1,
                delay: 0.2,
                stagger: 0.15
            });
            gsap.from(".overview-image", {
                x: 60,
                opacity: 0,
                duration: 1.2,
                delay: 0.3
            });
        });
    </script>

    <script>
        // === Count-Up Animation ===
        const counters = document.querySelectorAll('.metric-number');
        let started = false;

        function animateCounters() {
            if (started) return;
            const triggerHeight = window.innerHeight / 1.2;

            counters.forEach(counter => {
                const rect = counter.getBoundingClientRect();
                if (rect.top < triggerHeight) {
                    started = true;
                    counters.forEach(c => {
                        const updateCount = () => {
                            const target = parseFloat(c.getAttribute('data-target'));
                            const current = parseFloat(c.innerText);
                            const increment = target / 100;

                            if (current < target) {
                                c.innerText = (current + increment).toFixed(1).replace(/\.0$/, '');
                                requestAnimationFrame(updateCount);
                            } else {
                                c.innerText = target;
                            }
                        };
                        updateCount();
                    });
                }
            });
        }

        window.addEventListener('scroll', animateCounters);
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
