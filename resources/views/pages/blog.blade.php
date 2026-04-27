@extends('layouts.app')

@section('title', 'Insights & Blog - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-[#0a0f1d] pt-32 pb-20 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-sm font-bold text-primary uppercase tracking-widest mb-3">Insights</h2>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
            Thoughts on Leadership, Impact, and the Stage.
        </h1>
        <p class="text-lg text-gray-300 font-light max-w-2xl mx-auto">
            Explore our latest articles, interviews with facilitators, and insights on how to design transformative event experiences.
        </p>
    </div>
</section>

<!-- Blog Categories -->
<section class="bg-white py-6 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-2">
            <a href="#" class="px-5 py-2 bg-slate-900 text-white text-sm font-medium rounded-full transition-colors">All Articles</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">Event Design</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">Speaker Spotlights</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">Leadership</a>
            <a href="#" class="px-5 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full hover:bg-slate-200 transition-colors">Industry Trends</a>
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
                    <div class="absolute top-4 left-4 bg-primary text-[#0a0f1d] text-xs font-bold px-3 py-1 uppercase tracking-wider">Featured</div>
                </div>
                <div class="p-10 lg:p-16 flex flex-col justify-center">
                    <span class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-4">Event Design • Oct 15, 2026</span>
                    <h2 class="text-3xl font-heading font-bold text-slate-900 mb-6 group-hover:text-primary transition-colors">The Death of the Motivational Speaker: Why Outcomes Matter More Than Inspiration</h2>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        In an era of deep economic complexity and organizational strain, audiences are demanding more than just a good story. They need tactical frameworks, rigorous intellectual property, and measurable shifts in behavior. Here's how we are redefining what happens on stage.
                    </p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Author" class="w-10 h-10 rounded-full object-cover">
                            <span class="text-sm font-bold text-slate-900">Elayne Christine</span>
                        </div>
                        <span class="text-sm font-bold text-primary uppercase tracking-wider group-hover:text-primary-dark transition-colors">Read Article &rarr;</span>
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
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">Leadership • Oct 02, 2026</span>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3 group-hover:text-primary transition-colors line-clamp-2">How to Build Psychological Safety During Times of Change</h3>
                    <p class="text-slate-600 text-sm mb-6 line-clamp-3">Change management fails when trust is absent. Explore the mechanisms top leaders use to foster an environment where innovation survives transition.</p>
                    <span class="text-xs font-bold text-primary uppercase tracking-wider border-b border-primary pb-1 group-hover:text-primary-dark">Read Article</span>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1475721025871-8848135cb17c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Post" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">Speaker Spotlights • Sep 24, 2026</span>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3 group-hover:text-primary transition-colors line-clamp-2">In Conversation with Dr. Jane Doe: The Neuroscience of Resilience</h3>
                    <p class="text-slate-600 text-sm mb-6 line-clamp-3">We sat down with one of our most requested facilitators to discuss how teams can rewire their brains to view stress as a performance enhancer rather than a detractor.</p>
                    <span class="text-xs font-bold text-primary uppercase tracking-wider border-b border-primary pb-1 group-hover:text-primary-dark">Read Article</span>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-white border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Post" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">Event Design • Sep 10, 2026</span>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3 group-hover:text-primary transition-colors line-clamp-2">Curation vs. Booking: Why Your Next Summit Needs a Narrative Arc</h3>
                    <p class="text-slate-600 text-sm mb-6 line-clamp-3">Stop treating your agenda like a shopping list. Here is how to sequence sessions so that attendees reach the exact conclusion you intend.</p>
                    <span class="text-xs font-bold text-primary uppercase tracking-wider border-b border-primary pb-1 group-hover:text-primary-dark">Read Article</span>
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
<section class="py-24 bg-primary text-center">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-4">Never Miss an Insight</h2>
        <p class="text-lg text-[#0a0f1d]/80 mb-8">
            Join our mailing list to receive our latest articles on event programming, speaker insights, and industry trends.
        </p>
        <form class="flex flex-col sm:flex-row gap-2 max-w-xl mx-auto">
            <input type="email" placeholder="Enter your email address" class="flex-1 bg-white border border-transparent px-4 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#0a0f1d]">
            <button type="submit" class="bg-[#0a0f1d] text-white px-8 py-3 font-bold uppercase tracking-wider hover:bg-slate-800 transition-colors">
                Subscribe
            </button>
        </form>
    </div>
</section>
@endsection
