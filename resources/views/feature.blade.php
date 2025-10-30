@extends('layout.app')

@section('title', 'Run Your Entire Business on One Smart Platform')

@section('content')

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT -->
                <div class="col-lg-6 mb-5" data-aos="fade-right">
                    <h1 class="display-5 fw-bold mb-3 lh-sm">
                        All the Tools You Need to Run Your Business — <br>
                        <span class="text-primary">Unified in One Platform</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Octopyder BMS connects every part of your organization — from employees and clients
                        to finances and insights — into one seamless digital workspace.
                    </p>

                    <div class="d-flex flex-wrap gap-3 justify-content-lg-start justify-content-center">
                        <a href="#" class="btn btn-primary btn-lg rounded-pill px-4">
                            <i class="fa-solid fa-calendar-check me-2"></i> Book a Demo
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-lg rounded-pill px-4">
                            <i class="fa-solid fa-rocket me-2"></i> Start Free Trial
                        </a>
                    </div>
                </div>

                <!-- RIGHT: Animation -->
                <div class="col-lg-6 text-center position-relative" data-aos="fade-left">
                    <div class="module-elevator-wrapper">
                        <div class="module-elevator">
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
                            @foreach ($modules as $m)
                                <div class="module-item">
                                    <div class="module-inner">
                                        <img src="{{ asset('img/' . $m['img']) }}" alt="{{ $m['title'] }}">
                                        <span class="module-name">{{ $m['title'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="center-highlight"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="intro-section py-5 position-relative overflow-hidden text-center text-dark">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="fw-bold display-5 mb-3">
                        TEN Powerful Modules. <span class="text-primary">Infinite Possibilities.</span>
                    </h1>
                    <p class="lead text-muted mb-5">
                        Each module in Octopyder BMS is designed to simplify one core part of your business —
                        yet all of them work together perfectly.
                        The result? A smarter, faster, more connected way to manage operations.
                    </p>
                </div>
            </div>

            <!-- Animated module showcase -->
            <div class="module-showcase mx-auto">
                <div class="module-display">
                    <img id="module-img" src="{{ asset('img/hr.png') }}" class="img-fluid module-img" alt="Module Image">
                    <div class="module-text mt-4">
                        <h2 id="module-title" class="fw-bold text-primary mb-2">Human Resource Management</h2>
                        <p id="module-desc" class="text-muted fs-5 mb-3">
                            Streamline your employee lifecycle — from onboarding and payroll to performance management.
                        </p>
                        <a id="module-btn" href="#" class="btn btn-outline-primary rounded-pill px-4">Explore
                            Module</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elevator = document.querySelector('.module-elevator');
            const visibleCount = 5;
            const moveDur = 0.6;
            const holdDur = 2.0;
            let items = Array.from(elevator.children);
            const rowH = items[0].offsetHeight;
            const centerRow = Math.floor(visibleCount / 2);

            // Clone items for looping
            for (let i = 0; i < visibleCount; i++) {
                elevator.appendChild(items[i].cloneNode(true));
            }
            items = Array.from(elevator.children);

            function setActiveByIndex(activeIndex) {
                items.forEach(el => el.classList.remove('active'));
                const idx = ((activeIndex % items.length) + items.length) % items.length;
                items[idx].classList.add('active');
            }

            function buildTimeline() {
                const tl = gsap.timeline({
                    repeat: -1,
                    defaults: {
                        ease: 'power1.inOut'
                    }
                });
                const steps = items.length - visibleCount;
                let active = centerRow;

                setActiveByIndex(active);
                tl.to({}, {
                    duration: holdDur
                });

                for (let s = 0; s < steps; s++) {
                    tl.to(elevator, {
                            y: `-=${rowH}`,
                            duration: moveDur
                        })
                        .add(() => {
                            active++;
                            setActiveByIndex(active);
                        })
                        .to({}, {
                            duration: holdDur
                        });
                }

                // Reset loop seamlessly
                tl.to(elevator, {
                        y: 0,
                        duration: 0
                    })
                    .add(() => {
                        active = centerRow;
                        setActiveByIndex(active);
                    });

                return tl;
            }

            buildTimeline();
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const modules = [{
                    img: "hr.png",
                    title: "Human Resource Management",
                    desc: "Streamline your employee lifecycle — from onboarding and payroll to performance management.",
                },
                {
                    img: "fa.png",
                    title: "Finance & Accounting",
                    desc: "Automate your finances, manage budgets, and gain real-time insights with precision.",
                },
                {
                    img: "sm.png",
                    title: "Sales & Marketing",
                    desc: "Drive growth with integrated CRM, campaigns, and performance analytics.",
                },
                {
                    img: "ps.png",
                    title: "Procurement & Supply Chain",
                    desc: "Optimize sourcing, orders, and vendor relationships with smart automation.",
                },
                {
                    img: "op.png",
                    title: "Operations & Production",
                    desc: "Monitor production, inventory, and workflows — all in one place.",
                },
                {
                    img: "cs.png",
                    title: "Customer Support",
                    desc: "Deliver exceptional service with unified ticketing and live chat tools.",
                },
                {
                    img: "clr.png",
                    title: "Compliance, Legal & Risk",
                    desc: "Ensure compliance and mitigate risks with real-time reporting and alerts.",
                },
                {
                    img: "as.png",
                    title: "Administration & Services",
                    desc: "Simplify facility, asset, and service management with one unified dashboard.",
                },
                {
                    img: "it.png",
                    title: "IT & Technology",
                    desc: "Oversee IT assets, requests, and infrastructure — all in one secure hub.",
                },
                {
                    img: "em.png",
                    title: "Executive Management",
                    desc: "Make data-driven decisions with dashboards, KPIs, and AI insights.",
                },
            ];

            const imgEl = document.getElementById("module-img");
            const titleEl = document.getElementById("module-title");
            const descEl = document.getElementById("module-desc");
            const btnEl = document.getElementById("module-btn");
            const display = document.querySelector(".module-display");

            let index = 0;

            function showModule(i) {
                const m = modules[i];
                display.classList.remove("module-active");

                // Fade-out
                gsap.to([imgEl, titleEl, descEl, btnEl], {
                    opacity: 0,
                    y: 20,
                    duration: 0.4,
                    onComplete: () => {
                        // Change content
                        imgEl.src = `/img/${m.img}`;
                        titleEl.textContent = m.title;
                        descEl.textContent = m.desc;
                        // Fade-in new content
                        gsap.to([imgEl, titleEl, descEl, btnEl], {
                            opacity: 1,
                            y: 0,
                            duration: 0.8,
                            stagger: 0.1,
                            ease: "power2.out"
                        });
                    }
                });
            }

            // Start auto cycle
            setInterval(() => {
                index = (index + 1) % modules.length;
                showModule(index);
            }, 4000);

            // Initialize first module
            showModule(0);
        });
    </script>
@endpush
