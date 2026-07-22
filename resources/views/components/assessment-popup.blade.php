{{--
    Speaker Readiness Assessment Popup Component
    Shows once per session UNTIL the user explicitly dismisses it (controlled via localStorage key "assessment_dismissed").
    Usage: <x-assessment-popup />
--}}

{{-- Outer wrapper: x-data lives here, x-cloak hides until Alpine is ready --}}
<div
    x-data="{
        open: false,
        init() {
            if (!localStorage.getItem('assessment_dismissed')) {
                setTimeout(() => {
                    this.open = true;
                }, 8000);
            }
        },
        dismiss() {
            this.open = false;
            localStorage.setItem('assessment_dismissed', 'true');
        }
    }"
    x-cloak
>
    {{-- Inner show/transition wrapper --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-y-8"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-8"
        class="fixed bottom-0 sm:bottom-6 right-0 sm:right-6 z-[60] w-full sm:max-w-md"
        role="dialog"
        aria-modal="true"
        aria-labelledby="assessment-popup-heading"
    >
    {{-- Backdrop for mobile full-screen feel --}}
    <div class="bg-dark border border-gold/20 shadow-2xl shadow-black/60 relative overflow-hidden">

        {{-- Gold top accent bar --}}
        <div class="h-1 bg-gradient-to-r from-gold via-yellow-300 to-gold"></div>

        {{-- Close button --}}
        <button
            @click="dismiss()"
            class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors z-10"
            aria-label="Close popup"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="p-6 sm:p-8">

            {{-- Eyebrow --}}
            <p class="text-gold text-[10px] font-bold uppercase tracking-[0.2em] mb-3">Speaker Readiness Assessment</p>

            {{-- Headline --}}
            <h2 id="assessment-popup-heading" class="font-heading font-bold text-white text-lg sm:text-xl leading-snug mb-3">
                Conference producers are searching for African speakers right now. Do they know you exist?
            </h2>

            {{-- Sub-headline --}}
            <p class="text-gold/80 text-sm font-medium mb-4">
                Find out in 2 minutes how you would be seen — and whether they would stop scrolling.
            </p>

            {{-- Divider --}}
            <div class="border-t border-white/10 mb-4"></div>

            {{-- Body --}}
            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                Every day, event organisers in London, Dubai, New York, and Singapore are building their speaker programmes. They are searching LinkedIn, reading articles, reviewing profiles — and making decisions about who gets the stage.
                <br><br>
                The question is not whether you are good enough. The question is whether they can <span class="text-white font-medium">find you, trust you, and book you</span>.
            </p>

            {{-- CTA Button --}}
            <a
                href="https://speaker-readiness-assessment.lovable.app"
                target="_blank"
                rel="noopener noreferrer"
                class="w-full inline-flex items-center justify-center gap-2 bg-gold text-dark px-6 py-3.5 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors duration-300 mb-3"
            >
                Show me how producers see me
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>

            {{-- Sub-note --}}
            <p class="text-center text-slate-500 text-[11px] mb-4">Free. Takes 2 minutes. No sign-up required.</p>

            {{-- Dismiss link --}}
            <div class="text-center">
                <button
                    @click="dismiss()"
                    class="text-slate-600 hover:text-slate-400 text-xs underline underline-offset-2 transition-colors"
                >
                    I am not ready to know yet
                </button>
            </div>

        </div>
    </div>
    </div>{{-- end x-show wrapper --}}
</div>{{-- end x-data wrapper --}}
