@extends('layouts.app')

@section('title', 'Insights & Blog - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-sm font-bold text-gold uppercase tracking-widest mb-3">Blog</h2>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
            Insights from inside Africa&apos;s speaker and conference landscape.
        </h1>
        <p class="text-lg text-gray-300 font-light max-w-2xl mx-auto">
            We write for event producers who want to think more carefully about their programmes, and for African voices who are ready to own their stage.
        </p>
    </div>
</section>

<!-- Blog Categories -->
<section class="bg-white py-6 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-2">
            <a href="#" class="px-5 py-2 bg-slate-900 text-white text-sm font-medium rounded-full transition-colors">All Articles</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">Speaker Spotlight</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">Event Production</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">African Stages</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">Speaker Readiness</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">Industry Insight</a>
        </div>
    </div>
</section>

<!-- Featured Article -->
<section class="py-12 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative bg-white border border-slate-200 overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="h-64 lg:h-auto relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Featured Post" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-gold text-dark text-xs font-bold px-3 py-1 uppercase tracking-wider">Featured</div>
                </div>
                <div class="p-10 lg:p-16 flex flex-col justify-center">
                    <span class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-4">Thought Leadership</span>
                    <h2 class="text-3xl font-heading font-bold text-slate-900 mb-6 group-hover:text-gold transition-colors">Why Africa&apos;s Speaker Economy Is the Most Underserved Opportunity in Global Events</h2>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        A foundational piece establishing Heard In Africa&apos;s point of view on why speaker management infrastructure matters for the continent.
                    </p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Author" class="w-10 h-10 rounded-full object-cover">
                            <span class="text-sm font-bold text-slate-900">Chimfumnanya Nwandu</span>
                        </div>
                        <span class="text-sm font-bold text-gold uppercase tracking-wider">Read Article &rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Grid -->
<section class="py-12 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Article 1 -->
            <div class="bg-white border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Post" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">Event Production</span>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3 group-hover:text-gold transition-colors line-clamp-2">How to Brief a Speaker Properly: The 7 Things Most Event Producers Forget</h3>
                    <p class="text-slate-600 text-sm mb-6 line-clamp-3">A practical, shareable guide for event producers and programme designers who want smoother, stronger sessions.</p>
                    <span class="text-xs font-bold text-gold uppercase tracking-wider border-b border-gold pb-1 group-hover:text-dark">Read Article</span>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1475721025871-8848135cb17c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Post" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">Speaker Spotlight</span>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3 group-hover:text-gold transition-colors line-clamp-2">What Makes a Conference Programme Great? The Difference Between a Schedule and a Conversation</h3>
                    <p class="text-slate-600 text-sm mb-6 line-clamp-3">A programme design piece for organisers who want every session to move the room toward a clear outcome.</p>
                    <span class="text-xs font-bold text-gold uppercase tracking-wider border-b border-gold pb-1 group-hover:text-dark">Read Article</span>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-white border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Post" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">Industry Insight</span>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3 group-hover:text-gold transition-colors line-clamp-2">Why Africa&apos;s Speaker Economy Is the Most Underserved Opportunity in Global Events</h3>
                    <p class="text-slate-600 text-sm mb-6 line-clamp-3">A thought leadership piece establishing Heard In Africa&apos;s authority and point of view.</p>
                    <span class="text-xs font-bold text-gold uppercase tracking-wider border-b border-gold pb-1 group-hover:text-dark">Read Article</span>
                </div>
            </div>

        </div>

        <div class="mt-12 text-center">
            <button class="inline-flex justify-center items-center border border-slate-300 bg-white text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-slate-50 transition-colors">
                Load More Articles
            </button>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-24 bg-gold text-center">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-4">Stay Ahead of Africa&apos;s Conversation</h2>
        <p class="text-lg text-dark/80 mb-8">
            Join thousands of event professionals, speakers, and organisations who receive our insights on African voices, conference trends, and speaker opportunities — directly to their inbox.
        </p>
        <form class="flex flex-col sm:flex-row gap-2 max-w-xl mx-auto">
            <input type="email" placeholder="Enter your email address" class="flex-1 bg-white border border-transparent px-4 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-dark">
            <button type="submit" class="bg-dark text-white px-8 py-3 font-bold uppercase tracking-wider hover:bg-white hover:text-dark transition-colors">
                Subscribe
            </button>
        </form>
    </div>
</section>
@endsection
