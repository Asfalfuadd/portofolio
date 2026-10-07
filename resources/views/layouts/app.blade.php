<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Portfolio') - palpilpup</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=jetbrains-mono:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* CSS Reset & Base */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* CSS Custom Properties - Neubrutalist Design System */
        :root {
            /* Colors */
            --color-primary: #FFEB3B;
            --color-secondary: #FF5252;
            --color-tertiary: #2196F3;
            --color-neutral: #000000;
            --color-off-black: #1a1a1a;
            --color-white: #ffffff;
            --color-gray-light: #f5f5f5;

            /* Typography */
            --font-system: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            --font-mono: 'JetBrains Mono', Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;

            /* Font Sizes */
            --fs-hero: clamp(2.5rem, 5vw, 4rem);
            --fs-h1: 2.25rem;
            --fs-h2: 1.5rem;
            --fs-body: 1rem;
            --fs-small: 0.875rem;
            --fs-label: 0.75rem;

            /* Spacing */
            --space-xs: 0.25rem;
            --space-sm: 0.5rem;
            --space-md: 1rem;
            --space-lg: 1.5rem;
            --space-xl: 2rem;
            --space-2xl: 3rem;
            --space-3xl: 4rem;

            /* Border & Shadow */
            --border-width: 3px;
            --border-color: var(--color-neutral);
            --shadow-offset: 4px;
            --border-radius: 0.5rem;

            /* Container */
            --container-max: 1280px;
            --container-padding: var(--space-lg);

            /* Z-index */
            --z-base: 0;
            --z-nav: 100;
            --z-overlay: 200;
            --z-modal: 300;
            --z-toast: 500;
        }

        /* Typography */
        html {
            font-family: var(--font-system);
            font-size: 16px;
            line-height: 1.6;
        }

        body {
            background-color: var(--color-white);
            color: var(--color-off-black);
            font-size: var(--fs-body);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: var(--space-md);
        }

        h1 { font-size: var(--fs-h1); }
        h2 { font-size: var(--fs-h2); }

        .hero-text {
            font-size: var(--fs-hero);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        p {
            margin-bottom: var(--space-md);
            max-width: 72ch;
        }

        /* Container & Layout */
        .container {
            max-width: var(--container-max);
            margin: 0 auto;
            padding: 0 var(--container-padding);
        }

        .section {
            padding: clamp(4rem, 8vw, 8rem) 0;
        }

        /* Navigation */
        .nav {
            background: var(--color-white);
            border-bottom: var(--border-width) solid var(--color-neutral);
            position: sticky;
            top: 0;
            z-index: var(--z-nav);
            padding: var(--space-md) 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo {
            font-size: var(--fs-h2);
            font-weight: 700;
            color: var(--color-off-black);
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: var(--space-xl);
        }

        .nav-link {
            color: var(--color-off-black);
            text-decoration: none;
            font-weight: 500;
            font-size: var(--fs-small);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: color 200ms ease-out;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--color-secondary);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--color-primary);
        }

        /* Mobile Navigation */
        .nav-toggle {
            display: none;
            background: none;
            border: none;
            font-size: var(--fs-h2);
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--color-white);
                border: var(--border-width) solid var(--color-neutral);
                border-top: none;
                flex-direction: column;
                padding: var(--space-lg);
                gap: var(--space-lg);
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-toggle {
                display: block;
            }
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px var(--space-lg);
            border: var(--border-width) solid var(--color-neutral);
            border-radius: var(--border-radius);
            font-family: var(--font-system);
            font-size: var(--fs-body);
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 200ms ease-out;
            box-shadow: var(--shadow-offset) var(--shadow-offset) 0 var(--color-neutral);
            position: relative;
        }

        .btn:active {
            transform: translate(1px, 1px);
            box-shadow: 2px 2px 0 var(--color-neutral);
        }

        .btn-primary {
            background: var(--color-primary);
            color: var(--color-neutral);
        }

        .btn-primary:hover {
            background: #f9dd00;
            box-shadow: 6px 6px 0 var(--color-neutral);
        }

        .btn-secondary {
            background: var(--color-secondary);
            color: var(--color-white);
        }

        .btn-secondary:hover {
            background: #e04848;
            box-shadow: 6px 6px 0 var(--color-neutral);
        }

        .btn-outline {
            background: var(--color-white);
            color: var(--color-neutral);
            border-width: 2px;
        }

        .btn-outline:hover {
            background: var(--color-gray-light);
            box-shadow: 6px 6px 0 var(--color-neutral);
        }

        /* Cards */
        .card {
            background: var(--color-white);
            border: var(--border-width) solid var(--color-neutral);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-offset) var(--shadow-offset) 0 var(--color-neutral);
            padding: var(--space-xl);
            transition: transform 200ms ease-out, box-shadow 200ms ease-out;
        }

        .card:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0 var(--color-neutral);
        }

        /* Forms */
        .form-group {
            margin-bottom: var(--space-lg);
        }

        .form-label {
            display: block;
            font-weight: 500;
            font-size: var(--fs-small);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: var(--space-sm);
            color: var(--color-off-black);
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 12px var(--space-md);
            border: 2px solid var(--color-neutral);
            border-radius: var(--border-radius);
            font-family: var(--font-system);
            font-size: var(--fs-body);
            background: var(--color-white);
            transition: border-color 200ms ease-out, box-shadow 200ms ease-out;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--color-tertiary);
            box-shadow: 0 0 0 2px var(--color-tertiary);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Alerts */
        .alert {
            padding: var(--space-md) var(--space-lg);
            border: var(--border-width) solid var(--color-neutral);
            border-radius: var(--border-radius);
            margin-bottom: var(--space-lg);
            font-weight: 500;
        }

        .alert-success {
            background: #4CAF50;
            color: var(--color-white);
        }

        .alert-error {
            background: var(--color-secondary);
            color: var(--color-white);
        }

        /* Grid System */
        .grid {
            display: grid;
            gap: var(--space-xl);
        }

        .grid-2 {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .grid-3 {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }

        /* Utilities */
        .text-center { text-align: center; }
        .text-mono { font-family: var(--font-mono); }
        .mt-0 { margin-top: 0; }
        .mb-0 { margin-bottom: 0; }
        .mb-sm { margin-bottom: var(--space-sm); }
        .mb-md { margin-bottom: var(--space-md); }
        .mb-lg { margin-bottom: var(--space-lg); }
        .mb-xl { margin-bottom: var(--space-xl); }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(16px);
            animation: fadeIn 420ms ease-out forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            :root {
                --container-padding: var(--space-lg);
            }
            
            .section {
                padding: clamp(3rem, 6vw, 6rem) 0;
            }
        }

        @media (max-width: 768px) {
            :root {
                --container-padding: var(--space-md);
                --fs-h1: 1.875rem;
                --fs-h2: 1.25rem;
                --space-xl: 1.5rem;
                --space-2xl: 2rem;
                --space-3xl: 2.5rem;
            }

            .section {
                padding: clamp(2rem, 5vw, 4rem) 0;
            }

            .grid-2,
            .grid-3 {
                grid-template-columns: 1fr;
                gap: var(--space-lg);
            }

            .hero-text {
                font-size: clamp(2rem, 8vw, 2.75rem);
                line-height: 1.1;
            }

            .nav-container {
                position: relative;
            }

            .card {
                padding: var(--space-lg);
            }

            .btn {
                padding: 10px var(--space-md);
                font-size: var(--fs-small);
                width: 100%;
                justify-content: center;
            }

            /* Mobile-specific button containers */
            .btn-container {
                display: flex;
                flex-direction: column;
                gap: var(--space-sm);
                width: 100%;
            }

            .btn-container .btn {
                width: 100%;
            }

            /* Mobile typography adjustments */
            h1, h2, h3 {
                text-align: center;
            }

            p {
                text-align: left;
            }

            /* Mobile spacing utilities */
            .mobile-text-center {
                text-align: center;
            }

            .mobile-mb-lg {
                margin-bottom: var(--space-lg);
            }
        }

        @media (max-width: 480px) {
            :root {
                --container-padding: var(--space-sm);
                --fs-body: 0.9rem;
                --space-lg: 1rem;
                --space-xl: 1.25rem;
            }

            .hero-text {
                font-size: clamp(1.75rem, 7vw, 2.25rem);
            }

            .card {
                padding: var(--space-md);
            }

            .form-input,
            .form-textarea {
                padding: 10px var(--space-sm);
            }

            .nav-menu {
                padding: var(--space-md);
            }

            .nav-link {
                font-size: var(--fs-body);
                padding: var(--space-sm) 0;
                display: block;
                text-align: center;
            }
        }

        /* Responsive utilities */
        .hide-mobile {
            display: block;
        }

        .show-mobile {
            display: none;
        }

        @media (max-width: 768px) {
            .hide-mobile {
                display: none;
            }

            .show-mobile {
                display: block;
            }

            .mobile-stack {
                flex-direction: column;
                align-items: stretch;
            }

            .mobile-center {
                text-align: center;
            }

            .mobile-full-width {
                width: 100%;
            }
        }

        /* Touch-friendly interactions */
        @media (hover: none) {
            .btn:hover,
            .card:hover,
            .nav-link:hover {
                transform: none;
                box-shadow: var(--shadow-offset) var(--shadow-offset) 0 var(--color-neutral);
            }

            .btn:active {
                transform: translate(1px, 1px);
                box-shadow: 2px 2px 0 var(--color-neutral);
            }
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="nav-logo">Portfolio</a>
            
            <ul class="nav-menu" id="nav-menu">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            
            <button class="nav-toggle" id="nav-toggle">☰</button>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="section" style="background: var(--color-gray-light); border-top: var(--border-width) solid var(--color-neutral);">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Portfolio. Built with Laravel & Neubrutalist design.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile Navigation Toggle
        document.getElementById('nav-toggle').addEventListener('click', function() {
            document.getElementById('nav-menu').classList.toggle('active');
        });

        // Fade in animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        // Observe elements with animation class
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

    @stack('scripts')
</body>
</html>