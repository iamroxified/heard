<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Heard In Africa')</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800" rel="stylesheet" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <style type="text/tailwindcss">
            @theme {
                --font-sans: 'Inter', ui-sans-serif, system-ui, sans-serif;
                --font-heading: 'Inter', ui-sans-serif, system-ui, sans-serif;
                --color-primary: #1A1A2E;
                --color-primary-dark: #10101c;
                --color-accent: #1B6B3A;
                --color-gold: #C8933A;
                --color-dark: #1A1A2E;
                --color-darker: #0f1020;
                --color-light: #F4F4F4;
            }
            body {
                font-family: var(--font-sans);
                background-color: var(--color-light);
                color: #1f2937;
            }
            h1, h2, h3, h4, h5, h6, .font-heading {
                font-family: var(--font-heading);
                font-weight: 700;
            }
        </style>
    @endif
</head>
<body class="antialiased flex flex-col min-h-screen bg-light text-slate-800">

    <x-navbar />

    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />

    <!-- Alpine.js and AOS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic',
            });
        });
    </script>
</body>
</html>
