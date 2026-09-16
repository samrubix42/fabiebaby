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

        <!-- Fixed Pure Circular WhatsApp Button (Responsive) -->
        <a 
            href="https://wa.me/?text=Hello%20Fabie%20Baby,%20I%20would%20like%20to%20inquire%20about%20your%20baby%20care%20products." 
            target="_blank" 
            rel="noopener noreferrer"
            class="fixed bottom-5 right-5 sm:bottom-6 sm:right-6 z-50 w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center bg-[#25D366] hover:bg-[#20ba5a] text-white rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-110 active:scale-95 group focus:outline-none focus:ring-4 focus:ring-[#25D366]/40"
            aria-label="Chat on WhatsApp"
            title="Chat with us on WhatsApp"
        >
            <!-- Animated Online Indicator Dot -->
            <span class="absolute top-0 right-0 flex h-3.5 w-3.5 -mt-0.5 -mr-0.5">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-emerald-400 border-2 border-white"></span>
            </span>
            <i class="ri-whatsapp-fill text-2xl sm:text-3xl leading-none"></i>
        </a>

        @livewireScripts
    </body>
</html>
