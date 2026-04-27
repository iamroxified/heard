@extends('layouts.app')

@section('title', 'Events & Programmes - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-[#0a0f1d] pt-32 pb-16 lg:pt-48 lg:pb-24 border-b border-white/10 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')] bg-cover bg-center opacity-10 mix-blend-overlay"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-sm font-bold text-primary uppercase tracking-widest mb-3">Program Library</h2>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6 max-w-3xl">
            A Library of Bookable Keynotes, Workshops, and Executive Sessions
        </h1>
        <p class="text-lg text-gray-300 font-light max-w-2xl mb-10">
            Browse ready-to-book sessions with defined outcomes, time dedications, and clear formats. Select from this core roster or request help building your agenda.
        </p>

        <!-- Search Bar -->
        <div class="max-w-2xl bg-white/5 border border-white/10 p-2 flex items-center mb-6">
            <svg class="h-5 w-5 text-gray-400 ml-3 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search our library of programs..." class="bg-transparent border-none text-white w-full focus:ring-0 focus:outline-none placeholder-gray-500 text-sm">
            <button class="bg-white/10 text-white px-4 py-2 text-sm font-medium hover:bg-white/20 transition-colors">
                Search
            </button>
        </div>
    </div>
</section>

<!-- Filter Tags Section -->
<section class="bg-white py-6 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-2">
            <span class="text-sm font-medium text-slate-500 mr-2 py-1">Filter by Area of Expertise:</span>
            <a href="#" class="px-4 py-1.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-primary/10 hover:text-primary transition-colors">Executive Performance</a>
            <a href="#" class="px-4 py-1.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-primary/10 hover:text-primary transition-colors">Culture & Leadership</a>
            <a href="#" class="px-4 py-1.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-primary/10 hover:text-primary transition-colors">Inclusion & Trust</a>
            <a href="#" class="px-4 py-1.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-primary/10 hover:text-primary transition-colors">Brand Growth</a>
            <a href="#" class="px-4 py-1.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-primary/10 hover:text-primary transition-colors">Venture & Innovation</a>
            <a href="#" class="px-4 py-1.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-primary/10 hover:text-primary transition-colors">Communication & Influence</a>
        </div>
    </div>
</section>

<!-- Programme List -->
<section class="py-16 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="space-y-6 max-w-5xl mx-auto">
            
            <!-- Program Item 1 -->
            <div class="bg-white border border-slate-200 p-8 hover:shadow-lg transition-shadow flex flex-col md:flex-row gap-8 items-start md:items-center justify-between">
                <div class="flex-1">
                    <span class="inline-block bg-primary text-[#0a0f1d] text-xs font-bold px-2 py-1 uppercase tracking-wider mb-4">Workshop</span>
                    <h3 class="text-2xl font-heading font-bold text-slate-900 mb-2">Leadership Alignment Workshop for Executive Teams</h3>
                    <div class="flex gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded">Executive</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded">Strategy</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded">Leadership</span>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4 max-w-2xl">
                        A high-stakes session designed to unify leadership around core strategic pillars and eliminate operational silos. Outcomes focus on streamlined decision making, aligned cross-functional teams, and higher execution velocity.
                    </p>
                    <div class="text-sm font-medium text-slate-500">
                        Ideal audience: Executive teams, Senior Management, C-Suite
                    </div>
                </div>
                <div class="md:text-right shrink-0">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilitators</p>
                    <div class="flex items-center md:justify-end gap-[-10px] mb-4">
                        <img src="https://i.pravatar.cc/100?img=1" alt="Facilitator" class="w-10 h-10 rounded-full border-2 border-white relative z-30">
                        <img src="https://i.pravatar.cc/100?img=5" alt="Facilitator" class="w-10 h-10 rounded-full border-2 border-white relative z-20 -ml-3">
                        <img src="https://i.pravatar.cc/100?img=9" alt="Facilitator" class="w-10 h-10 rounded-full border-2 border-white relative z-10 -ml-3">
                    </div>
                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-full border border-primary text-primary hover:bg-primary hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Program Item 2 -->
            <div class="bg-white border border-slate-200 p-8 hover:shadow-lg transition-shadow flex flex-col md:flex-row gap-8 items-start md:items-center justify-between">
                <div class="flex-1">
                    <span class="inline-block bg-primary text-[#0a0f1d] text-xs font-bold px-2 py-1 uppercase tracking-wider mb-4">Keynote</span>
                    <h3 class="text-2xl font-heading font-bold text-slate-900 mb-2">Self-Mastery Under Pressure</h3>
                    <div class="flex gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded">Performance</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded">Mindset</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded">Well-being</span>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4 max-w-2xl">
                        Equip your teams with the mental frameworks to perform at their highest capacity in high-stress, rapidly changing environments. Focuses on resilience, emotional regulation, and sustained focus.
                    </p>
                    <div class="text-sm font-medium text-slate-500">
                        Ideal audience: All levels, Sales teams, High-pressure environments
                    </div>
                </div>
                <div class="md:text-right shrink-0">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilitators</p>
                    <div class="flex items-center md:justify-end gap-[-10px] mb-4">
                        <img src="https://i.pravatar.cc/100?img=11" alt="Facilitator" class="w-10 h-10 rounded-full border-2 border-white relative z-30">
                        <img src="https://i.pravatar.cc/100?img=15" alt="Facilitator" class="w-10 h-10 rounded-full border-2 border-white relative z-20 -ml-3">
                    </div>
                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-full border border-primary text-primary hover:bg-primary hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </a>
                </div>
            </div>
            
            <!-- Program Item 3 -->
            <div class="bg-white border border-slate-200 p-8 hover:shadow-lg transition-shadow flex flex-col md:flex-row gap-8 items-start md:items-center justify-between">
                <div class="flex-1">
                    <span class="inline-block bg-primary text-[#0a0f1d] text-xs font-bold px-2 py-1 uppercase tracking-wider mb-4">Masterclass</span>
                    <h3 class="text-2xl font-heading font-bold text-slate-900 mb-2">Expanding Your Influence Across the Organization</h3>
                    <div class="flex gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded">Influence</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded">Communication</span>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4 max-w-2xl">
                        A tactical approach to managing conflict, giving robust feedback, and maintaining psychological safety within teams. Learn how to communicate effectively up, down, and across the organizational chart.
                    </p>
                    <div class="text-sm font-medium text-slate-500">
                        Ideal audience: Middle Management, Emerging Leaders, Project Managers
                    </div>
                </div>
                <div class="md:text-right shrink-0">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilitators</p>
                    <div class="flex items-center md:justify-end gap-[-10px] mb-4">
                        <img src="https://i.pravatar.cc/100?img=21" alt="Facilitator" class="w-10 h-10 rounded-full border-2 border-white relative z-30">
                    </div>
                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-full border border-primary text-primary hover:bg-primary hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </a>
                </div>
            </div>

            <div class="pt-8 text-center">
                <button class="text-sm font-bold uppercase tracking-wider text-primary hover:text-primary-dark transition-colors border-b border-primary pb-1">Load More Programs</button>
            </div>

        </div>
    </div>
</section>

@endsection
