@extends('layout.app')

@section('title', 'Demo - OctoBuss')

<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
<link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

@section('content')

    {{-- Hero Section --}}
    <section class="bms-hero position-relative overflow-hidden text-light d-flex align-items-center">

        <!-- Hero Content -->
        <div class="container position-relative text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-3">
                Experience <span class="text-gradient">Octopyder BMS</span> in Action
            </h1>
            <p class="lead text-white-50 mb-4" style="max-width: 720px; margin: 0 auto;">
                Take a closer look at how our all-in-one platform helps you manage people, projects,
                clients, and finances — all from one intuitive dashboard.
            </p>

            <!-- CTA Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <a href="#" class="btn btn-light btn-lg px-4 py-2 rounded-pill fw-semibold shadow-sm">
                    <i class="fa-solid fa-play me-2"></i> Start Free Trial
                </a>
                <a href="#" class="btn btn-outline-light btn-lg px-4 py-2 rounded-pill fw-semibold">
                    <i class="fa-solid fa-calendar-check me-2"></i> Book a Live Demo
                </a>
            </div>
        </div>
    </section>

    {{-- Introducton Sectio  --}}
    <section class="overview-section py-5 position-relative text-light overflow-hidden">
        <div class="overview-bg"></div>

        <div class="container position-relative text-center" data-aos="fade-up">
            <!-- Heading -->
            <h5 class="text-uppercase fw-semibold text-accent mb-2">Interactive Overview</h5>
            <h1 class="fw-bold display-6 mb-3">Your Business Command Center</h1>
            <p class="lead text-white-50 mx-auto mb-5" style="max-width: 720px;">
                Get a live glimpse of the main dashboard — the heart of your operations.
                Monitor performance indicators, view pending tasks, approvals, and analytics — all in one glance.
            </p>

            <!-- Interactive Visual / Carousel -->
            <div class="dashboard-showcase position-relative mx-auto mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div id="dashboardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
                    <div class="carousel-inner rounded-4 shadow-lg overflow-hidden">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/dashboard-main.png') }}" class="d-block w-100" alt="Dashboard Overview">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/dashboard-kpi.png') }}" class="d-block w-100" alt="KPI Overview">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/dashboard-quick-actions.png') }}" class="d-block w-100"
                                alt="Quick Actions Menu">
                        </div>
                    </div>
                </div>


                <!-- CTA -->
                <div class="mt-4">
                    <a href="#" class="btn btn-primary-gradient btn-lg px-5 py-2 rounded-pill fw-semibold shadow-sm">
                        <i class="fa-solid fa-play me-2"></i> Watch Interactive Demo
                    </a>
                </div>
            </div>
    </section>

    {{-- Core Modules Section --}}
    <section class="modules-table-section py-5 position-relative overflow-hidden text-dark">
        <div class="modules-bg"></div>

        <div class="container position-relative" data-aos="fade-up">
            <div class="text-center mb-5">
                <h5 class="text-uppercase fw-semibold text-primary mb-2">Explore the Core Modules</h5>
                <h1 class="fw-bold display-6 mb-3">Powerful Modules, <span class="text-gradient">Seamlessly
                        Integrated</span></h1>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    Each module in Octopyder BMS is designed to simplify one essential part of your business —
                    yet all of them work together as a single powerful system.
                </p>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle table-hover modules-table">
                    <thead>
                        <tr>
                            <th scope="col">Module</th>
                            <th scope="col">Mini Description</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fa-solid fa-users me-2 text-primary"></i> Human Resource Management</td>
                            <td>Automate attendance, payroll, and performance tracking.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-bullhorn me-2 text-primary"></i> Sales & Marketing</td>
                            <td>Track leads, manage campaigns, and close deals faster.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-sack-dollar me-2 text-primary"></i> Finance & Accounting</td>
                            <td>Handle invoices, payments, and analytics effortlessly.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-cart-flatbed me-2 text-primary"></i> Procurement & Supply Chain</td>
                            <td>Manage vendors, orders, and inventory in real-time.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-headset me-2 text-primary"></i> Customer Support</td>
                            <td>Deliver excellent support through tickets and automation.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-industry me-2 text-primary"></i> Operations & Production</td>
                            <td>Optimize workflows and monitor real-time progress.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-scale-balanced me-2 text-primary"></i> Compliance, Legal & Risk</td>
                            <td>Stay compliant with legal and policy management automation.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-building me-2 text-primary"></i> Administration & Services</td>
                            <td>Streamline facility, asset, and internal service requests.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-microchip me-2 text-primary"></i> IT & Technology</td>
                            <td>Monitor assets, resolve tickets, and secure digital systems.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-user-tie me-2 text-primary"></i> Executive Management</td>
                            <td>Gain insights and make data-driven strategic decisions.</td>
                            <td class="text-center"><button class="btn btn-outline-primary btn-sm"><i
                                        class="fa-solid fa-play me-1"></i>Watch Demo</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Live Product Demo Section --}}
    <section class="walkthrough-section py-5 position-relative text-dark overflow-hidden">
        <div class="walkthrough-bg"></div>

        <div class="container position-relative" data-aos="fade-up">
            <!-- Heading -->
            <div class="text-center mb-5">
                <h5 class="text-uppercase fw-semibold text-primary mb-2">Live Product Walkthrough</h5>
                <h1 class="fw-bold display-6 mb-3">See How Easy It Is to Get Started</h1>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    Explore how Octopyder BMS helps your business set up, customize, automate, and grow — step by step.
                </p>
            </div>

            <!-- Walkthrough Steps -->
            <div class="walkthrough-steps">
                <div class="row align-items-center mb-5" data-aos="fade-right">
                    <div class="col-md-6">
                        <div class="step-number">1</div>
                        <h4 class="fw-bold">Create Your Workspace</h4>
                        <p class="text-muted">
                            Set up your company and invite your team members within minutes. Personalize your workspace to
                            reflect your brand.
                        </p>
                    </div>
                    <div class="col-md-6 text-center" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('img/step1.png') }}" alt="Create Workspace"
                            class="img-fluid walkthrough-img rounded-4 shadow-sm">
                    </div>
                </div>

                <div class="row align-items-center mb-5 flex-md-row-reverse" data-aos="fade-left">
                    <div class="col-md-6">
                        <div class="step-number">2</div>
                        <h4 class="fw-bold">Customize Modules</h4>
                        <p class="text-muted">
                            Choose from HR, CRM, Finance, Projects, or any combination of modules to match your
                            organization’s needs.
                        </p>
                    </div>
                    <div class="col-md-6 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/step2.png') }}" alt="Customize Modules"
                            class="img-fluid walkthrough-img rounded-4 shadow-sm">
                    </div>
                </div>

                <div class="row align-items-center mb-5" data-aos="fade-right">
                    <div class="col-md-6">
                        <div class="step-number">3</div>
                        <h4 class="fw-bold">Automate Workflows</h4>
                        <p class="text-muted">
                            Define your own rules, approval hierarchies, and automations — reduce manual work and boost
                            productivity.
                        </p>
                    </div>
                    <div class="col-md-6 text-center" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('img/step3.png') }}" alt="Automate Workflows"
                            class="img-fluid walkthrough-img rounded-4 shadow-sm">
                    </div>
                </div>

                <div class="row align-items-center mb-5 flex-md-row-reverse" data-aos="fade-left">
                    <div class="col-md-6">
                        <div class="step-number">4</div>
                        <h4 class="fw-bold">Analyze & Optimize</h4>
                        <p class="text-muted">
                            Track KPIs, monitor project progress, and gain data-driven insights to make smarter business
                            decisions.
                        </p>
                    </div>
                    <div class="col-md-6 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/step4.png') }}" alt="Analyze & Optimize"
                            class="img-fluid walkthrough-img rounded-4 shadow-sm">
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-4" data-aos="zoom-in" data-aos-delay="200">
                <a href="#" class="btn btn-primary-gradient btn-lg px-5 py-2 rounded-pill fw-semibold shadow-sm">
                    Try It Yourself →
                </a>
            </div>
        </div>
    </section>

    {{-- Success Stories Section --}}
    <section class="success-stories-section py-5 position-relative text-dark overflow-hidden">
        <div class="success-bg"></div>

        <div class="container position-relative" data-aos="fade-up">
            <!-- Heading -->
            <div class="text-center mb-5">
                <h5 class="text-uppercase fw-semibold text-primary mb-2">Success Stories</h5>
                <h1 class="fw-bold display-6 mb-3">Trusted by Growing Teams and Enterprises</h1>
                <p class="text-muted mx-auto" style="max-width: 720px;">
                    Businesses across industries use Octopyder BMS to improve productivity, reduce costs,
                    and gain control over their operations.
                </p>
            </div>

            <!-- Testimonials -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="testimonial-card shadow-sm glassy h-100 p-4 rounded-4">
                        <div
                            class="quote-icon bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="fa-solid fa-quote-left fa-lg"></i>
                        </div>
                        <p class="fs-5 fst-italic mb-3">
                            “The product tour convinced us within minutes — we could visualize our entire workflow
                            instantly.”
                        </p>
                        <div>
                            <h6 class="fw-bold mb-0">Sanya Mehta</h6>
                            <small class="text-muted">Operations Head, NexTech Solutions</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-left">
                    <div class="testimonial-card shadow-sm glassy h-100 p-4 rounded-4">
                        <div
                            class="quote-icon bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="fa-solid fa-quote-left fa-lg"></i>
                        </div>
                        <p class="fs-5 fst-italic mb-3">
                            “Octopyder BMS replaced three tools for us and made reporting effortless.”
                        </p>
                        <div>
                            <h6 class="fw-bold mb-0">Rahul Gupta</h6>
                            <small class="text-muted">Founder, Edusoft Systems</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-5" data-aos="zoom-in">
                <a href="#" class="btn btn-primary-gradient btn-lg px-5 py-2 rounded-pill fw-semibold shadow-sm">
                    Read More Stories →
                </a>
            </div>
        </div>
    </section>

    {{-- Request Demo Section --}}
    <section class="demo-request-section py-5 position-relative text-dark overflow-hidden">
        <div class="demo-bg"></div>

        <div class="container position-relative" data-aos="fade-up">
            <!-- Heading -->
            <div class="text-center mb-5">
                <h5 class="text-uppercase fw-semibold text-primary mb-2">Request a Personalized Demo</h5>
                <h1 class="fw-bold display-6 mb-3">See What Octopyder BMS Can Do for You</h1>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    Want to see your own processes mapped inside our system? Schedule a live one-on-one session with our
                    experts.
                    We’ll show you exactly how Octopyder BMS can fit your business workflow.
                </p>
            </div>

            <!-- Demo Form -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form class="demo-form p-4 p-md-5 rounded-4 shadow-sm glassy">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Company / Organization</label>
                                <input type="text" class="form-control" placeholder="Your company name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control" placeholder="you@company.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="+91-XXXXXXXXXX" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Preferred Demo Date & Time</label>
                                <input type="datetime-local" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Message (optional)</label>
                                <input type="text" class="form-control" placeholder="Any specific requirement...">
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="text-center mt-4">
                            <button type="submit"
                                class="btn btn-primary-gradient btn-lg px-5 py-2 rounded-pill fw-semibold shadow-sm">
                                <i class="fa-solid fa-calendar-check me-2"></i> Book My Demo
                            </button>
                        </div>

                        <!-- Support Note -->
                        <p class="text-muted text-center mt-3 small">
                            We’ll confirm your session within 24 hours. Online & in-person demo options available.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section  --}}
    <section class="final-cta-section py-5 text-center text-white position-relative overflow-hidden">
        <div class="cta-bg"></div>

        <div class="container position-relative" data-aos="zoom-in">
            <h1 class="fw-bold display-5 mb-3">Manage Everything. From One Place.</h1>
            <p class="lead fw-normal mb-4 text-light">
                Join 100+ organizations already running their operations with <strong>Octopyder BMS</strong>.<br>
                Get your own workspace today and experience the difference.
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
                <a href="#" class="btn btn-light text-primary fw-semibold btn-lg px-5 py-2 rounded-pill shadow-sm">
                    <i class="fa-solid fa-play me-2"></i> Start Free Trial
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            gsap.from(".final-cta-section h1", {
                opacity: 0,
                y: 50,
                duration: 0.8,
                ease: "power2.out"
            });
            gsap.from(".final-cta-section p", {
                opacity: 0,
                y: 30,
                duration: 0.8,
                delay: 0.3
            });
            gsap.from(".final-cta-section a", {
                opacity: 0,
                scale: 0.95,
                duration: 0.6,
                delay: 0.5,
                stagger: 0.15
            });
        });
    </script>
@endpush
