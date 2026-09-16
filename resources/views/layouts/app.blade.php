<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Fabie Baby - Premium Baby Care Products' }}</title>
        <meta name="description" content="Discover Fabie Baby's ultra-gentle, organic baby care products. Premium diapers, gentle wipes, natural skincare, and bath care crafted for pure comfort.">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Remix Icon CDN -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-cream-bg text-gray-800 font-sans antialiased selection:bg-soft-pink selection:text-vibrant-rose min-h-screen flex flex-col justify-between relative">
        <livewire:public.header />

        <main class="flex-grow">
            {{ $slot }}
        </main>

        <livewire:public.footer />

        <!-- Fixed Pure Circular WhatsApp Button (Clean, No Progress Ring, Smooth Scroll Reveal) -->
        <div 
            x-data="{ shown: false }"
            @scroll.window="shown = (window.pageYOffset > 100)"
            x-cloak
            x-show="shown"
            x-transition:enter="transition cubic-bezier(0.34, 1.56, 0.64, 1) duration-400 transform"
            x-transition:enter-start="opacity-0 translate-y-12 scale-50"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-250 transform"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-12 scale-50"
            class="fixed bottom-5 right-5 sm:bottom-6 sm:right-6 z-50 flex items-center justify-center"
        >
            <a 
                href="https://wa.me/?text=Hello%20Fabie%20Baby,%20I%20would%20like%20to%20inquire%20about%20your%20baby%20care%20products." 
                target="_blank" 
                rel="noopener noreferrer"
                class="w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center bg-[#25D366] hover:bg-[#20ba5a] text-white rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-110 active:scale-95 group focus:outline-none focus:ring-4 focus:ring-[#25D366]/40 relative"
                aria-label="Chat on WhatsApp"
                title="Chat with us on WhatsApp"
            >
                <!-- Animated Online Indicator Dot -->
                <span class="absolute top-0 right-0 flex h-3.5 w-3.5 -mt-0.5 -mr-0.5 z-10">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-emerald-400 border-2 border-white"></span>
                </span>
                <i class="ri-whatsapp-fill text-2xl sm:text-3xl leading-none transition-transform duration-300 group-hover:rotate-12"></i>
            </a>
        </div>

        <!-- Scroll-Based Reveal Animation Engine (Alpine / IntersectionObserver) -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const initScrollReveals = () => {
                    const targets = document.querySelectorAll('.reveal-on-scroll:not(.is-revealed), .reveal-on-scroll-left:not(.is-revealed), .reveal-on-scroll-right:not(.is-revealed), .reveal-on-scroll-scale:not(.is-revealed)');
                    if (!targets.length) return;

                    const observer = new IntersectionObserver((entries, obs) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('is-revealed');
                                obs.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.05,
                        rootMargin: '0px 0px -20px 0px'
                    });

                    targets.forEach(el => {
                        // If element is already in viewport, reveal immediately
                        const rect = el.getBoundingClientRect();
                        if (rect.top < window.innerHeight && rect.bottom > 0) {
                            el.classList.add('is-revealed');
                        } else {
                            observer.observe(el);
                        }
                    });
                };

                initScrollReveals();
                document.addEventListener('livewire:navigated', initScrollReveals);
                
                // Keep scroll animations active if Livewire morphs components
                document.addEventListener('livewire:init', () => {
                    if (window.Livewire) {
                        Livewire.hook('morph.updated', () => {
                            initScrollReveals();
                        });
                    }
                });
            });
        </script>

        @livewireScripts
    </body>
</html>
