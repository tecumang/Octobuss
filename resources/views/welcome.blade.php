@extends('layout.app')

<style>
    /* === Hero Section === */
    .hero-section {
        position: relative;
        background: linear-gradient(90deg, #0a4ed7 55%, rgba(10, 78, 215, 0.13) 100%);
        overflow: hidden;
        min-height: 85vh;
        padding: 100px 0;
    }

    .hero-section .hero-img {
        max-width: 90%;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    /* Animated gradient blobs */
    .blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.6;
        z-index: 0;
        animation: moveBlob 15s infinite alternate ease-in-out;
    }

    .blob1 {
        width: 400px;
        height: 400px;
        background: #00d4ff;
        top: -100px;
        left: -100px;
    }

    .blob2 {
        width: 300px;
        height: 300px;
        background: #ff008c;
        bottom: -100px;
        right: -80px;
    }

    @keyframes moveBlob {
        0% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(30px, -40px) scale(1.1);
        }

        100% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }

    /* === Button Glow === */
    .btn-glow {
        background: linear-gradient(90deg, #007bff, #00d4ff);
        border: none;
        color: #fff;
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(0, 212, 255, 0.6);
        z-index: 2;
    }

    .btn-glow:hover {
        transform: translateY(-4px);
        box-shadow: 0 0 20px rgba(0, 212, 255, 0.8);
    }

    /* === Animated Badge === */
    .badge-info {
        background: rgba(0, 212, 255, 0.1);
        border: 1px solid #00d4ff;
        animation: pulseBadge 3s infinite;
    }

    @keyframes pulseBadge {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(0, 212, 255, 0.4);
        }

        50% {
            box-shadow: 0 0 15px 10px rgba(0, 212, 255, 0.1);
        }
    }

    /* === Card Hover Animation === */
    .card {
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        background: #fff;
        z-index: 1;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.15);
    }

    /* === Section Backgrounds === */
    section {
        position: relative;
        z-index: 2;
    }

    section[data-aos] {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    /* === Trusted Section === */
    .trusted-section {
        background: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .trusted-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 200%;
        height: 200%;
        background: linear-gradient(120deg, #e9f3ff, #f8fbff, #d6ecff);
        background-size: 300% 300%;
        animation: bgMove 12s ease-in-out infinite;
        z-index: 0;
        opacity: 0.6;
    }

    @keyframes bgMove {
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

    /* === Orbs === */
    .orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(90px);
        opacity: 0.4;
        animation: orbFloat 10s ease-in-out infinite alternate;
        z-index: 0;
    }

    .orb-left {
        width: 250px;
        height: 250px;
        background: #00d4ff;
        top: -60px;
        left: -80px;
    }

    .orb-right {
        width: 300px;
        height: 300px;
        background: #0a4ed7;
        bottom: -80px;
        right: -60px;
    }

    @keyframes orbFloat {
        0% {
            transform: translateY(0px) scale(1);
        }

        50% {
            transform: translateY(-25px) scale(1.1);
        }

        100% {
            transform: translateY(0px) scale(1);
        }
    }

    /* === Animated Badge === */
    .animate-pulse {
        animation: pulseBadge 3s infinite;
    }

    @keyframes pulseBadge {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.3);
        }

        50% {
            box-shadow: 0 0 25px 10px rgba(0, 123, 255, 0.1);
        }
    }

    /* === Buttons === */
    .btn-glow {
        background: linear-gradient(90deg, #007bff, #00d4ff);
        border: none;
        color: #fff;
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(0, 212, 255, 0.6);
        z-index: 2;
    }

    .btn-glow:hover {
        transform: translateY(-4px);
        box-shadow: 0 0 20px rgba(0, 212, 255, 0.8);
    }

    /* Section background with subtle animated wash */
    .section-platform {
        border-radius: 18px;
        background: #fff;
    }

    .platform-bg {
        position: absolute;
        inset: 0;
        background: radial-gradient(1200px 500px at -10% -20%, rgba(0, 212, 255, .12), transparent 60%),
            radial-gradient(900px 400px at 110% 120%, rgba(10, 78, 215, .10), transparent 60%);
        animation: platformPulse 10s ease-in-out infinite alternate;
        z-index: 0;
    }

    @keyframes platformPulse {
        0% {
            filter: blur(0px);
            opacity: .9;
        }

        100% {
            filter: blur(2px);
            opacity: .7;
        }
    }

    /* Accent underline below heading */
    .accent-underline {
        width: 120px;
        height: 4px;
        border-radius: 8px;
        background: linear-gradient(90deg, #0a4ed7, #00d4ff);
        box-shadow: 0 0 16px rgba(0, 212, 255, .35);
    }

    /* Small “chips” list beneath description */
    .chip {
        display: inline-flex;
        align-items: center;
        gap: .25rem;
        padding: .4rem .8rem;
        border-radius: 999px;
        font-weight: 500;
        background: rgba(10, 78, 215, .08);
        border: 1px solid rgba(10, 78, 215, .18);
        color: #0a2a66;
    }

    /* Right card polish */
    .glassy {
        backdrop-filter: blur(6px);
        border-radius: 16px;
    }

    .feature-card {
        border: 1px solid rgba(0, 0, 0, .06);
        overflow: hidden;
        /* Sticky on large screens for nice scroll feel */
        position: sticky;
        top: 100px;
    }

    .feature-card .card-header {
        position: relative;
    }

    .feature-card .dot {
        width: 10px;
        height: 10px;
        background: #00d4ff;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 212, 255, .8);
    }

    /* List and items */
    .list-clean .list-group-item {
        border: 0;
        padding-left: 0;
        padding-right: 0;
    }

    .feature-item {
        transition: transform .25s ease, box-shadow .25s ease, background-color .25s ease;
        border-radius: 12px;
        padding: .75rem .5rem;
    }

    .feature-item:hover {
        transform: translateY(-4px);
        background-color: rgba(10, 78, 215, .06);
        box-shadow: 0 8px 18px rgba(10, 78, 215, .08);
    }

    /* Icons next to module names */
    .mod-icon {
        width: 32px;
        height: 32px;
        object-fit: contain;
        margin-right: 10px;
    }

    /* Glow CTA (reuses earlier style if you added it) */
    .btn-glow {
        background: linear-gradient(90deg, #007bff, #00d4ff);
        border: none;
        color: #fff;
        border-radius: 50px;
        padding: 10px 22px;
        font-weight: 600;
        transition: all .25s ease;
        box-shadow: 0 0 10px rgba(0, 212, 255, .6);
    }

    .btn-glow:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 20px rgba(0, 212, 255, .8);
    }

    /* === Metrics Section === */
    .metrics-section {
        background: linear-gradient(90deg, #0a4ed7 55%, rgba(10, 78, 215, 0.13) 100%);
        position: relative;
        overflow: hidden;
    }

    .metrics-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 300%;
        height: 300%;
        background: linear-gradient(120deg, #0a4ed7, #007bff, #00d4ff, #0a4ed7);
        background-size: 400% 400%;
        animation: waveMove 12s ease-in-out infinite;
        opacity: 0.4;
        z-index: 0;
        filter: blur(100px);
    }

    @keyframes waveMove {
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

    .metrics-section .row>div {
        position: relative;
        z-index: 2;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .metrics-section .row>div:hover {
        transform: translateY(-5px);
        text-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
    }

    /* Counter numbers */
    .metric-number {
        font-size: 4rem;
        line-height: 1;
        margin-bottom: 0.5rem;
        color: #ffffff;
        text-shadow: 0 0 10px rgba(0, 212, 255, 0.6);
    }

    /* Section subtle animated background */
    .features-section {
        position: relative;
    }

    .features-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        opacity: .7;
        pointer-events: none;
        background:
            radial-gradient(700px 260px at -10% -10%, rgba(0, 212, 255, .12), transparent 60%),
            radial-gradient(600px 240px at 110% 120%, rgba(10, 78, 215, .10), transparent 60%);
        animation: featuresWash 12s ease-in-out infinite alternate;
    }

    @keyframes featuresWash {
        0% {
            filter: blur(0px);
            transform: translateY(0);
        }

        100% {
            filter: blur(1px);
            transform: translateY(6px);
        }
    }

    /* Feature cards */
    .feature-tile {
        border: 1px solid rgba(0, 0, 0, .06);
        border-radius: 16px;
        overflow: hidden;
        background: #fff;
        transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        box-shadow: 0 6px 20px rgba(0, 0, 0, .06);
        position: relative;
        z-index: 1;
    }

    .feature-tile:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(10, 78, 215, .12);
        border-color: rgba(10, 78, 215, .25);
    }

    /* Icon with glow ring */
    .icon-wrap {
        position: relative;
        width: 64px;
        height: 64px;
        border-radius: 50%;
        display: inline-grid;
        place-items: center;
        background: linear-gradient(135deg, #0a4ed7, #00d4ff);
        color: #fff;
        font-size: 1.5rem;
        box-shadow: 0 8px 24px rgba(10, 78, 215, .35);
    }

    .icon-wrap i {
        line-height: 1;
    }

    .icon-ring {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: 50%;
        border: 2px solid rgba(0, 212, 255, .5);
        box-shadow: 0 0 18px rgba(0, 212, 255, .5), inset 0 0 8px rgba(255, 255, 255, .2);
        animation: ringPulse 2.4s ease-in-out infinite;
    }

    @keyframes ringPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: .9;
        }

        50% {
            transform: scale(1.06);
            opacity: 1;
        }
    }

    /* Headings & spacing polish */
    .features-section h1 {
        position: relative;
        z-index: 1;
    }

    .features-section p {
        position: relative;
        z-index: 1;
    }

    /* Optional: tighter cards on small screens */
    @media (max-width: 768px) {
        .icon-wrap {
            width: 56px;
            height: 56px;
            font-size: 1.3rem;
        }

        .feature-tile .card-body {
            padding: 1rem .9rem;
        }
    }

    /* Section container + background */
    .brand-section {
        position: relative;
    }

    .brand-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        opacity: .9;
        background: linear-gradient(180deg, #f7faff 0%, #ebeef9 60%, #ffffff 100%);
    }

    .brand-section::before {
        content: "";
        position: absolute;
        inset: -20% -10% auto -10%;
        height: 60%;
        background: radial-gradient(600px 300px at -10% -10%, rgba(0, 212, 255, .10), transparent 60%);
        filter: blur(1px);
        z-index: 0;
    }

    .brand-section::after {
        content: "";
        position: absolute;
        inset: auto -10% -20% -10%;
        height: 60%;
        background: radial-gradient(600px 300px at 110% 120%, rgba(10, 78, 215, .08), transparent 60%);
        filter: blur(1px);
        z-index: 0;
    }

    /* Accent underline */
    .brand-underline {
        width: 140px;
        height: 4px;
        border-radius: 8px;
        background: linear-gradient(90deg, #0a4ed7, #00d4ff);
        box-shadow: 0 0 18px rgba(0, 212, 255, .35);
    }

    /* Testimonial card */
    .glassy {
        backdrop-filter: blur(6px);
        border-radius: 18px;
    }

    .testimonial {
        position: relative;
        z-index: 1;
        background: #fff;
        box-shadow: 0 12px 32px rgba(10, 78, 215, .10);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .testimonial:hover {
        transform: translateY(-4px);
        box-shadow: 0 18px 42px rgba(10, 78, 215, .14);
    }

    /* Quote visuals */
    .quote-icon {
        width: 56px;
        height: 56px;
        font-size: 1.25rem;
        box-shadow: 0 10px 24px rgba(0, 0, 0, .25);
    }

    .brand-quote-text {
        line-height: 1.25;
        text-wrap: balance;
    }

    /* Author */
    .author-avatar {
        width: 44px;
        height: 44px;
        object-fit: contain;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, .08);
    }

    /* Decorative orbs */
    .orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: .45;
        z-index: 0;
        animation: orbDrift 12s ease-in-out infinite alternate;
    }

    .orb-a {
        width: 220px;
        height: 220px;
        background: #00d4ff;
        right: -60px;
        bottom: -60px;
    }

    .orb-b {
        width: 180px;
        height: 180px;
        background: #0a4ed7;
        right: 120px;
        top: -40px;
    }

    @keyframes orbDrift {
        0% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(-14px, 10px) scale(1.06);
        }

        100% {
            transform: translate(10px, -14px) scale(1.02);
        }
    }

    /* Small polish for headings on smaller screens */
    @media (max-width: 768px) {
        .brand-quote-text {
            font-size: 1.35rem !important;
        }
    }

    /* === Brands Section === */
    .brands-section {
        position: relative;
        background: #fff;
        overflow: hidden;
    }

    .brands-bg {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at top left, rgba(10, 78, 215, 0.08), transparent 60%),
            radial-gradient(circle at bottom right, rgba(0, 212, 255, 0.08), transparent 60%);
        z-index: 0;
        animation: bgDrift 10s ease-in-out infinite alternate;
    }

    @keyframes bgDrift {
        0% {
            transform: translateY(0);
            opacity: .8;
        }

        100% {
            transform: translateY(10px);
            opacity: 1;
        }
    }

    /* === Marquee Container === */
    .brands-marquee {
        overflow: hidden;
        position: relative;
        width: 100%;
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }

    /* Infinite loop track */
    .brands-track {
        display: flex;
        gap: 60px;
        animation: scrollBrands 25s linear infinite;
    }

    .brands-marquee:hover .brands-track {
        animation-play-state: paused;
    }

    @keyframes scrollBrands {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Individual Brand */
    .brand-item {
        flex: 0 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        min-width: 120px;
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .brand-item img {
        width: 60px;
        height: 60px;
        object-fit: contain;
        filter: grayscale(100%) brightness(0.9);
        transition: all 0.3s ease;
    }

    .brand-item span {
        font-weight: 500;
        font-size: 0.9rem;
        color: #333;
    }

    .brand-item:hover img {
        filter: grayscale(0%) brightness(1);
        transform: scale(1.1);
    }

    .brand-item:hover span {
        color: #0a4ed7;
    }

    /* Section subtle background */
    .modules-section {
        position: relative;
    }

    .modules-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        opacity: .85;
        background:
            radial-gradient(500px 220px at -10% -10%, rgba(0, 212, 255, .10), transparent 60%),
            radial-gradient(520px 240px at 110% 120%, rgba(10, 78, 215, .08), transparent 60%);
        animation: modulesWash 12s ease-in-out infinite alternate;
    }

    @keyframes modulesWash {
        0% {
            transform: translateY(0);
            filter: blur(0px);
        }

        100% {
            transform: translateY(6px);
            filter: blur(1px);
        }
    }

    /* Card layout */
    .module-card {
        border: 1px solid rgba(0, 0, 0, .06);
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 8px 22px rgba(0, 0, 0, .06);
        transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        position: relative;
        z-index: 1;
    }

    .module-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 36px rgba(10, 78, 215, .12);
        border-color: rgba(10, 78, 215, .25);
    }

    /* Icon halo */
    .mod-ico {
        position: relative;
        width: 74px;
        height: 74px;
        flex: 0 0 auto;
        border-radius: 18px;
        display: grid;
        place-items: center;
        overflow: hidden;
        background: linear-gradient(135deg, #0a4ed7, #00d4ff);
        box-shadow: 0 10px 26px rgba(10, 78, 215, .26);
    }

    .mod-ico img {
        width: 44px;
        height: 44px;
        object-fit: contain;
    }

    .ico-ring {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: 22px;
        border: 2px solid rgba(255, 255, 255, .6);
        box-shadow: inset 0 0 10px rgba(255, 255, 255, .3), 0 0 14px rgba(0, 212, 255, .45);
        animation: icoPulse 2.6s ease-in-out infinite;
    }

    @keyframes icoPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: .95;
        }

        50% {
            transform: scale(1.05);
            opacity: 1;
        }
    }

    /* Buttons inside cards */
    .module-card .btn.btn-link {
        text-decoration: none;
        color: #0a4ed7;
    }

    .module-card .btn.btn-link:hover {
        text-decoration: underline;
    }

    /* Tighten on small screens */
    @media (max-width: 768px) {
        .mod-ico {
            width: 64px;
            height: 64px;
        }

        .mod-ico img {
            width: 38px;
            height: 38px;
        }
    }

    /* === CTA Section === */
    .cta-section {
        background: linear-gradient(90deg, #0a4ed7 55%, rgba(10, 78, 215, .13) 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-bg {
        position: absolute;
        inset: -20% -10%;
        z-index: 0;
        opacity: .55;
        filter: blur(2px);
        background:
            radial-gradient(600px 280px at -10% -10%, rgba(0, 212, 255, .22), transparent 60%),
            radial-gradient(520px 260px at 110% 120%, rgba(255, 255, 255, .10), transparent 60%);
        animation: ctaWash 12s ease-in-out infinite alternate;
    }

    @keyframes ctaWash {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(8px);
        }
    }

    /* floating particles */
    .cta-particles {
        position: absolute;
        inset: 0;
        z-index: 0;
        background:
            radial-gradient(2px 2px at 10% 30%, rgba(255, 255, 255, .7) 50%, transparent 51%) repeat,
            radial-gradient(2px 2px at 60% 70%, rgba(255, 255, 255, .6) 50%, transparent 51%) repeat,
            radial-gradient(2px 2px at 85% 20%, rgba(255, 255, 255, .55) 50%, transparent 51%) repeat;
        background-size: 300px 200px, 260px 220px, 220px 180px;
        animation: floatDots 18s linear infinite;
        opacity: .45;
    }

    @keyframes floatDots {
        from {
            background-position: 0 0, 0 0, 0 0;
        }

        to {
            background-position: 300px -200px, -260px 220px, 220px -180px;
        }
    }

    /* Buttons */
    .btn-cta-glow {
        background: linear-gradient(90deg, #00a2ff, #00d4ff);
        color: #fff;
        border: none;
        border-radius: 999px;
        padding: 10px 22px;
        font-weight: 600;
        box-shadow: 0 0 12px rgba(0, 212, 255, .6);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .btn-cta-glow:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 22px rgba(0, 212, 255, .85);
    }

    .btn-cta-ghost {
        background: rgba(255, 255, 255, .12);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, .35);
        border-radius: 999px;
        padding: 10px 22px;
        font-weight: 600;
        backdrop-filter: blur(4px);
        transition: background .25s ease, transform .25s ease, border-color .25s ease;
    }

    .btn-cta-ghost:hover {
        background: rgba(255, 255, 255, .18);
        transform: translateY(-2px);
        border-color: rgba(255, 255, 255, .55);
    }

    /* Ripple micro-interaction */
    .cta-ripple {
        position: relative;
        overflow: hidden;
    }

    .cta-ripple:after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        opacity: 0;
        pointer-events: none;
        background: radial-gradient(circle, rgba(255, 255, 255, .6) 10%, transparent 60%);
        transform: scale(0);
        transition: transform .5s ease, opacity .6s ease;
    }

    .cta-ripple.rippling:after {
        opacity: .9;
        transform: scale(3);
    }

    /* Sticky CTA */
    .sticky-cta {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 14px;
        z-index: 999;
        transform: translateY(120%);
        opacity: 0;
        pointer-events: none;
        transition: transform .35s ease, opacity .35s ease;
        background: linear-gradient(90deg, rgba(10, 78, 215, .95), rgba(0, 212, 255, .85));
        border-radius: 14px;
        margin: 0 14px;
    }

    .sticky-cta.visible {
        transform: translateY(0);
        opacity: 1;
        pointer-events: auto;
    }

    /* To-top chip */
    .to-top {
        position: fixed;
        right: 18px;
        bottom: 18px;
        z-index: 1000;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: none;
        background: #0a4ed7;
        color: #fff;
        display: grid;
        place-items: center;
        box-shadow: 0 10px 24px rgba(10, 78, 215, .35);
        transform: translateY(120%);
        opacity: 0;
        transition: transform .3s ease, opacity .3s ease;
    }

    .to-top.visible {
        transform: translateY(0);
        opacity: 1;
    }

    .to-top:hover {
        filter: brightness(1.05);
    }
</style>

@section('content')
    <div class="container-fluid p-0">

        {{-- Hero Section  --}}
        <div class="row justify-content-center align-items-center hero-section mb-5">
            <div class="col-md-6 text-white text-center text-md-start px-5" data-aos="fade-right">
                <h1 class="display-3 fw-bold mb-3" style="font-family:'Cinzel',serif;">OCTO BUSS</h1>
                <p class="fs-5 mb-4 text-light">A Complete Solution for Modern Business Management</p>
                <div class="d-flex justify-content-center justify-content-md-start gap-3">
                    <button class="btn-glow">Get Started <i class="fa-solid fa-arrow-right ms-2"></i></button>
                    <button class="btn-outline-light rounded-pill px-4 py-2">Schedule Demo</button>
                </div>
            </div>

            <div class="col-md-6 text-center" data-aos="fade-left">
                <img src="{{ asset('img/main.png') }}" alt="Business Team" class="hero-img img-fluid">
            </div>

            <!-- Animated Gradient Blob -->
            <div class="blob blob1"></div>
            <div class="blob blob2"></div>
        </div>

        {{-- Section - Trusted by Businesses Worldwide --}}
        <section class="trusted-section py-5 position-relative overflow-hidden text-center text-dark">
            <!-- Animated Background -->
            <div class="trusted-bg"></div>

            <div class="container position-relative" data-aos="fade-up">
                <span
                    class="badge badge-info text-primary fs-5 px-4 py-2 rounded-pill shadow-sm d-inline-flex align-items-center gap-2 animate-pulse">
                    <i class="fa-solid fa-star text-primary"></i>
                    Trusted by <strong>10+ Businesses</strong> Worldwide
                </span>

                <h1 class="fw-bold display-4 mt-4" data-aos="fade-up" data-aos-delay="100">One Platform for Your</h1>
                <h1 class="fw-bold display-4 text-primary mb-3" data-aos="fade-up" data-aos-delay="200">Entire Business</h1>
                <h5 class="text-muted mb-4" data-aos="fade-up" data-aos-delay="300">
                    Unify your operations with our centralized business management platform.<br>
                    From HR to supply chain, manage everything seamlessly in one intelligent system.
                </h5>

                <div class="d-flex justify-content-center gap-3 my-4" data-aos="fade-up" data-aos-delay="400">
                    <button class="btn btn-glow">
                        Get Started <i class="fa-solid fa-arrow-right ms-2"></i>
                    </button>
                    <button class="btn btn-outline-primary rounded-pill px-4 py-2">
                        Schedule Demo
                    </button>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-4 mt-4 text-muted fs-6" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div><i class="fa-solid fa-check text-success me-2"></i>No credit card required</div>
                    <div><i class="fa-solid fa-check text-success me-2"></i>14-day free trial</div>
                    <div><i class="fa-solid fa-check text-success me-2"></i>Cancel anytime</div>
                </div>
            </div>

            <!-- Decorative gradient orbs -->
            <div class="orb orb-left"></div>
            <div class="orb orb-right"></div>
        </section>


        {{-- Section - Platform Features  --}}
        <section class="row m-4 p-4 section-platform align-items-center position-relative overflow-hidden">
            <!-- softly animated background -->
            <div class="platform-bg"></div>

            <!-- Left: Copy -->
            <div class="col-md-8 my-2 position-relative" data-aos="fade-right">
                <h1 class="mb-1 lh-1 fw-semibold">
                    <i>Your Business, Our Platform</i>
                </h1>
                <div class="accent-underline mb-3"></div>

                <p class="display-6 text-dark-50 mb-4">
                    Streamline operations with our all-in-one business management platform. From HR to supply chain,
                    manage everything seamlessly in one intelligent system designed to boost efficiency and drive growth.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <span class="chip"><i class="fa-regular fa-circle-check me-2"></i>Unified modules</span>
                    <span class="chip"><i class="fas fa-bolt me-2"></i>Real-time updates</span>
                    <span class="chip"><i class="fas fa-shield me-2"></i>Enterprise-grade security</span>
                </div>

                <button class="btn btn-glow">
                    Get Started <i class="fa-solid fa-arrow-right ms-2"></i>
                </button>
            </div>

            <!-- Right: Featured modules card -->
            <div class="col-md-4 my-2 position-relative" data-aos="fade-left" data-aos-delay="100">
                <div class="card feature-card glassy shadow-3">
                    <div class="card-header bg-white border-0 pb-0 d-flex align-items-center gap-2">
                        <span class="dot"></span>
                        <h6 class="mb-0 fw-bold">Featured Business Modules</h6>
                    </div>

                    <div class="card-body pt-3">
                        <ul class="list-group list-group-flush list-clean">
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="0">
                                <img src="{{ asset('img/hr.png') }}" class="mod-icon" alt="HR icon" />
                                <span>Human Resource Management</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="50">
                                <img src="{{ asset('img/fa.png') }}" class="mod-icon" alt="Finance & Accounting icon" />
                                <span>Finance & Accounting Management</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="100">
                                <img src="{{ asset('img/sm.png') }}" class="mod-icon" alt="Sales & Marketing icon" />
                                <span>Sales & Marketing Management</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="150">
                                <img src="{{ asset('img/ps.png') }}" class="mod-icon"
                                    alt="Procurement & Supply Chain icon" />
                                <span>Procurement & Supply Chain Management</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="{{ asset('img/op.png') }}" class="mod-icon"
                                    alt="Operations & Production icon" />
                                <span>Operations & Production Management</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="250">
                                <img src="{{ asset('img/cs.png') }}" class="mod-icon" alt="Customer Support icon" />
                                <span>Customer Support System</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="300">
                                <img src="{{ asset('img/clr.png') }}" class="mod-icon"
                                    alt="Compliance Legal Risk icon" />
                                <span>Compliance, Legal & Risk Management</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="350">
                                <img src="{{ asset('img/as.png') }}" class="mod-icon"
                                    alt="Administration & General Services icon" />
                                <span>Administration & General Services</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="400">
                                <img src="{{ asset('img/it.png') }}" class="mod-icon" alt="IT & Technology icon" />
                                <span>IT & Technology Management</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center feature-item" data-aos="fade-up"
                                data-aos-delay="450">
                                <img src="{{ asset('img/em.png') }}" class="mod-icon" alt="Executive Management icon" />
                                <span>Executive Management</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



        {{-- Section - Key Metrics --}}
        <section class="metrics-section text-center py-5 position-relative overflow-hidden">
            <div class="metrics-bg"></div>

            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="0">
                        <h1 class="metric-number text-light fw-bold" data-target="10">0</h1>
                        <p class="text-light fw-semibold">Active Companies</p>
                    </div>

                    <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="100">
                        <h1 class="metric-number text-light fw-bold" data-target="99.9">0</h1>
                        <p class="text-light fw-semibold">Uptime SLA</p>
                    </div>

                    <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <h1 class="metric-number text-light fw-bold" data-target="10">0</h1>
                        <p class="text-light fw-semibold">Integrations</p>
                    </div>

                    <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="300">
                        <h1 class="metric-number text-light fw-bold" data-target="24">0</h1>
                        <p class="text-light fw-semibold">Support (Hrs)</p>
                    </div>
                </div>
            </div>
        </section>


        {{-- Section - Features Highlights  --}}

        <section class="my-5 features-section position-relative overflow-hidden">
            <div class="features-bg"></div>

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


        {{-- Section - About OctoBuss  --}}
        <section class="my-5 container-fluid p-0 text-dark brand-section position-relative overflow-hidden">
            <div class="brand-bg"></div>
            <div class="row g-0 p-4 p-md-5 align-items-center">
                <!-- Left: Brand copy -->
                <div class="col-md-6 my-2 position-relative" data-aos="fade-right">
                    <h5 class="text-uppercase fw-semibold text-primary mb-2">All-in-one</h5>
                    <h1 class="display-3 fw-bold lh-1 mb-1">OctoBuss</h1>
                    <div class="brand-underline mb-3"></div>
                    <h5 class="text-muted mb-3">A Business Software</h5>

                    <p class="fs-5 mb-0">
                        OctoBuss is a comprehensive business management platform designed to streamline and optimize
                        operations across
                        departments. From human resources and finance to sales and supply chain management, OctoBuss
                        integrates essential
                        business functions into a single, user-friendly interface. With real-time analytics, automated
                        workflows, and
                        customizable modules, OctoBuss helps teams boost productivity, improve decision-making, and drive
                        growth—whether
                        you're a startup or an enterprise.
                    </p>
                </div>

                <!-- Right: Testimonial -->
                <div class="col-md-6 my-2 position-relative" data-aos="fade-left">
                    <div class="testimonial card border-0 shadow-3 p-4 p-md-5 mx-md-4 glassy">
                        <div
                            class="quote-icon bg-dark text-light rounded-circle d-inline-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>

                        <blockquote class="mb-3 mt-3">
                            <p class="display-6 fs-2 fw-semibold mb-2 brand-quote-text">
                                “OctoBuss transformed our operations. The all-in-one platform streamlined processes,
                                improved collaboration,
                                and delivered insights that accelerated growth.”
                            </p>
                        </blockquote>

                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('img/logo.png') }}" alt="Octopyder Services" class="author-avatar">
                            <div>
                                <div class="fw-bold">Himanshu Harsh</div>
                                <div class="text-muted small">CEO, Octopyder Services</div>
                                <div class="mt-1 text-warning small">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    <span class="text-muted ms-1">4.5/5</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative orbs -->
                    <span class="orb orb-a"></span>
                    <span class="orb orb-b"></span>
                </div>
            </div>
        </section>


        {{-- Section - Brands That Trust Us  --}}
        <section class="my-5 text-center brands-section position-relative overflow-hidden">
            <div class="brands-bg"></div>

            <h1 class="text-dark fw-bold" data-aos="fade-up">Brands That Trust Us</h1>
            <hr class="text-primary w-25 mx-auto" data-aos="fade-up" data-aos-delay="100">

            <div class="brands-marquee mt-5" data-aos="fade-up" data-aos-delay="200">
                <div class="brands-track d-flex align-items-center">
                    <div class="brand-item">
                        <img src="{{ asset('img/b1.png') }}" alt="RNKS Services">
                        <span>RNKS Services</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b2.png') }}" alt="Taaffeite Infratech">
                        <span>Taaffeite Infratech</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b3.png') }}" alt="LBSATI">
                        <span>LBSATI</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b4.png') }}" alt="LBSATI Pathlab">
                        <span>LBSATI Pathlab</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b5.png') }}" alt="Uniquoor">
                        <span>Uniquoor</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b6.png') }}" alt="Kalkai Studio">
                        <span>Kalkai Studio</span>
                    </div>

                    <!-- Duplicate set for seamless loop -->
                    <div class="brand-item">
                        <img src="{{ asset('img/b1.png') }}" alt="RNKS Services">
                        <span>RNKS Services</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b2.png') }}" alt="Taaffeite Infratech">
                        <span>Taaffeite Infratech</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b3.png') }}" alt="LBSATI">
                        <span>LBSATI</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b4.png') }}" alt="LBSATI Pathlab">
                        <span>LBSATI Pathlab</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b5.png') }}" alt="Uniquoor">
                        <span>Uniquoor</span>
                    </div>
                    <div class="brand-item">
                        <img src="{{ asset('img/b6.png') }}" alt="Kalkai Studio">
                        <span>Kalkai Studio</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section - Business Modules Overview  --}}
        <section class="my-5 text-center modules-section position-relative overflow-hidden">
            <div class="modules-bg"></div>

            <h1 class="text-dark display-5 fw-bold" data-aos="fade-up">All Your Business Modules</h1>
            <h2 class="text-primary display-6 fw-bold" data-aos="fade-up" data-aos-delay="80">In One Platform</h2>
            <p class="text-dark fs-5" data-aos="fade-up" data-aos-delay="140">
                Comprehensive solutions for every department, fully integrated and ready to use
            </p>

            <div class="row g-4 mt-3">
                <!-- HR -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="0">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/hr.png') }}" alt="HR" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Human Resource Management System</h3>
                                <p class="mb-2">Complete employee lifecycle management, payroll, and performance tracking
                                </p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Finance -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="60">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/fa.png') }}" alt="Finance & Accounting" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Finance & Accounting Management System</h3>
                                <p class="mb-2">Automated invoicing, expense tracking, and financial reporting</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sales & Marketing -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="120">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/sm.png') }}" alt="Sales & Marketing" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Sales & Marketing Management System</h3>
                                <p class="mb-2">CRM, lead management, and campaign analytics to boost sales</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Procurement & Supply Chain -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="180">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/ps.png') }}" alt="Procurement & Supply Chain" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Procurement & Supply Chain Management</h3>
                                <p class="mb-2">Inventory management, order processing, and supplier collaboration</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Operations & Production -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="240">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/op.png') }}" alt="Operations & Production" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Operations & Production Management</h3>
                                <p class="mb-2">Production scheduling, quality control, and workflow automation</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customer Support -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/cs.png') }}" alt="Customer Support" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Customer Support System</h3>
                                <p class="mb-2">Helpdesk, ticketing system, and customer feedback management</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Compliance, Legal & Risk -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="360">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/clr.png') }}" alt="Compliance Legal Risk" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Compliance, Legal & Risk Management</h3>
                                <p class="mb-2">Regulatory tracking, contract management, and risk assessment</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Administration & General Services -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="420">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/as.png') }}" alt="Administration & General Services" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Administration & General Services</h3>
                                <p class="mb-2">Facility management, asset tracking, and administrative workflows</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IT & Technology -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="480">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/it.png') }}" alt="IT & Technology" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">IT & Technology Management</h3>
                                <p class="mb-2">IT asset management, helpdesk support, and network monitoring</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Executive Management -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="540">
                    <div class="card module-card tilt-card">
                        <div class="card-body d-flex align-items-center gap-3">
                            <span class="mod-ico">
                                <img src="{{ asset('img/em.png') }}" alt="Executive Management" />
                                <span class="ico-ring"></span>
                            </span>
                            <div class="text-start flex-grow-1">
                                <h3 class="h4 fw-bold mb-1">Executive Management System</h3>
                                <p class="mb-2">Strategic planning, performance dashboards, and reporting</p>
                                <a href="#" class="btn btn-link px-0 fw-semibold">Learn More <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
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


    </div>

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
        // lightweight tilt effect
        document.querySelectorAll('.tilt-card').forEach(card => {
            const strength = 12; // tilt intensity
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left,
                    y = e.clientY - rect.top;
                const rx = ((y - rect.height / 2) / rect.height) * -strength;
                const ry = ((x - rect.width / 2) / rect.width) * strength;
                card.style.transform = `rotateX(${rx}deg) rotateY(${ry}deg) translateY(-6px)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>

    <!-- already referenced earlier in our flow -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>

    <script>
        // Reuse with any .tilt-card on the page
        document.querySelectorAll('.tilt-card').forEach(card => {
            const strength = 10;
            card.addEventListener('mousemove', (e) => {
                const r = card.getBoundingClientRect();
                const x = e.clientX - r.left,
                    y = e.clientY - r.top;
                const rx = ((y - r.height / 2) / r.height) * -strength;
                const ry = ((x - r.width / 2) / r.width) * strength;
                card.style.transform = `rotateX(${rx}deg) rotateY(${ry}deg) translateY(-6px)`;
            });
            card.addEventListener('mouseleave', () => card.style.transform = '');
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
@endsection
