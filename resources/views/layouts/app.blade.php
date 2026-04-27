<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Heard In Africa - Premium Event Speaker Management')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700|outfit:300,400,500,600,700,800" rel="stylesheet" />

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
                --font-heading: 'Outfit', ui-sans-serif, system-ui, sans-serif;
                --color-primary: #F59E0B; /* Amber/Gold */
                --color-primary-dark: #D97706;
                --color-dark: #0F172A; /* Slate 900 */
                --color-darker: #020617; /* Slate 950 */
                --color-light: #F8FAFC;
            }
            body {
                font-family: var(--font-sans);
                background-color: var(--color-light);
                color: #334155;
            }
            h1, h2, h3, h4, h5, h6, .font-heading {
                font-family: var(--font-heading);
            }
        </style>
    @endif
</head>
<body class="antialiased flex flex-col min-h-screen bg-[#F9FAFB] text-slate-800">

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
