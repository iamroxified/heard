<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
        :class="{'bg-[#0a0f1d] shadow-lg': scrolled, 'bg-[#0a0f1d] md:bg-transparent': !scrolled}"
        class="fixed w-full top-0 z-50 transition-all duration-300 text-white border-b border-white/10">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="flex w-full items-center justify-between py-5 lg:py-6">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-heading font-bold tracking-tight text-white flex items-center gap-2">
                    <span class="text-primary text-3xl leading-none">&bull;</span> Heard In Africa
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : 'text-gray-300' }}">Home</a>
                <a href="{{ route('about') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary' : 'text-gray-300' }}">About</a>
                <a href="{{ route('how-we-work') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('how-we-work') ? 'text-primary' : 'text-gray-300' }}">How We Work</a>
                <a href="{{ route('services') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('services') ? 'text-primary' : 'text-gray-300' }}">Services</a>
                <a href="{{ route('events') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('events') ? 'text-primary' : 'text-gray-300' }}">Events</a>
                <a href="{{ route('blog') }}" class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('blog') ? 'text-primary' : 'text-gray-300' }}">Blog</a>
            </div>
            
            <div class="hidden lg:flex items-center space-x-4">
                <a href="{{ route('contact') }}" class="inline-block rounded-none border border-primary text-primary px-6 py-2.5 text-sm font-medium hover:bg-primary hover:text-[#0a0f1d] transition-all duration-300 uppercase tracking-wider">
                    Request Support
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-300 hover:text-white">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-cloak x-show="mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div x-cloak x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden bg-[#0a0f1d] border-t border-white/10 shadow-xl absolute w-full">
        <div class="space-y-1 px-4 pb-6 pt-2">
            <a href="{{ route('home') }}" class="block rounded-md px-3 py-3 text-base font-medium hover:bg-white/5 hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : 'text-gray-300' }}">Home</a>
            <a href="{{ route('about') }}" class="block rounded-md px-3 py-3 text-base font-medium hover:bg-white/5 hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary' : 'text-gray-300' }}">About</a>
            <a href="{{ route('how-we-work') }}" class="block rounded-md px-3 py-3 text-base font-medium hover:bg-white/5 hover:text-primary transition-colors {{ request()->routeIs('how-we-work') ? 'text-primary' : 'text-gray-300' }}">How We Work</a>
            <a href="{{ route('services') }}" class="block rounded-md px-3 py-3 text-base font-medium hover:bg-white/5 hover:text-primary transition-colors {{ request()->routeIs('services') ? 'text-primary' : 'text-gray-300' }}">Services</a>
            <a href="{{ route('events') }}" class="block rounded-md px-3 py-3 text-base font-medium hover:bg-white/5 hover:text-primary transition-colors {{ request()->routeIs('events') ? 'text-primary' : 'text-gray-300' }}">Events</a>
            <a href="{{ route('blog') }}" class="block rounded-md px-3 py-3 text-base font-medium hover:bg-white/5 hover:text-primary transition-colors {{ request()->routeIs('blog') ? 'text-primary' : 'text-gray-300' }}">Blog</a>
            
            <div class="mt-6 pt-6 border-t border-white/10">
                <a href="{{ route('contact') }}" class="block w-full text-center rounded-none bg-primary text-[#0a0f1d] px-6 py-3 text-base font-bold uppercase tracking-wider hover:bg-primary-dark transition-colors">
                    Request Support
                </a>
            </div>
        </div>
    </div>
</header>
