<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin | Heard In Africa')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light text-slate-800 antialiased">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen bg-light">
        <div class="fixed inset-y-0 z-50 flex w-72 flex-col bg-dark text-white transition-transform duration-300 lg:translate-x-0" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">
            <div class="flex h-20 items-center justify-between border-b border-white/10 px-6">
                <a href="{{ route('admin.dashboard') }}" class="text-lg font-bold tracking-tight text-white">
                    Heard In Africa
                </a>
                <button class="lg:hidden text-gray-300" @click="sidebarOpen = false">×</button>
            </div>
            <nav class="flex-1 space-y-1 px-4 py-6 text-sm">
                <a href="{{ route('admin.dashboard') }}" class="block rounded-md px-4 py-3 hover:bg-white/5 {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-gold' : 'text-gray-300' }}">Dashboard</a>
                <a href="{{ route('admin.speakers.index') }}" class="block rounded-md px-4 py-3 hover:bg-white/5 {{ request()->routeIs('admin.speakers.*') ? 'bg-white/10 text-gold' : 'text-gray-300' }}">Speakers</a>
                <a href="{{ route('admin.events.index') }}" class="block rounded-md px-4 py-3 hover:bg-white/5 {{ request()->routeIs('admin.events.*') ? 'bg-white/10 text-gold' : 'text-gray-300' }}">Events</a>
                <a href="{{ route('admin.blog.index') }}" class="block rounded-md px-4 py-3 hover:bg-white/5 {{ request()->routeIs('admin.blog.*') ? 'bg-white/10 text-gold' : 'text-gray-300' }}">Blog Posts</a>
                <a href="{{ route('admin.enquiries.index') }}" class="block rounded-md px-4 py-3 hover:bg-white/5 {{ request()->routeIs('admin.enquiries.*') ? 'bg-white/10 text-gold' : 'text-gray-300' }}">Enquiries</a>
                <a href="{{ route('admin.settings.edit') }}" class="block rounded-md px-4 py-3 hover:bg-white/5 {{ request()->routeIs('admin.settings.*') ? 'bg-white/10 text-gold' : 'text-gray-300' }}">Settings</a>
                <form method="POST" action="{{ route('admin.logout') }}" class="pt-4">
                    @csrf
                    <button type="submit" class="w-full rounded-md border border-white/10 px-4 py-3 text-left text-gray-300 hover:border-gold hover:text-gold">
                        Logout
                    </button>
                </form>
            </nav>
        </div>

        <div class="lg:pl-72">
            <header class="sticky top-0 z-40 border-b border-slate-200 bg-white/90 backdrop-blur">
                <div class="flex h-20 items-center justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-3">
                        <button class="rounded-md border border-slate-200 px-3 py-2 text-sm text-slate-700 lg:hidden" @click="sidebarOpen = true">
                            Menu
                        </button>
                        <div>
                            <p class="text-xs uppercase tracking-[0.3em] text-accent">Admin Panel</p>
                            <h1 class="text-lg font-bold text-dark">@yield('page_title', 'Dashboard')</h1>
                        </div>
                    </div>
                    <div class="text-sm text-slate-500">
                        {{ auth()->user()->name }}
                    </div>
                </div>
            </header>

            <main class="px-4 py-8 sm:px-6 lg:px-8">
                @if (session('success'))
                    <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('scripts')
</body>
</html>

