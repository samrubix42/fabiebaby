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
    <body class="bg-cream-bg text-gray-800 font-sans antialiased selection:bg-soft-pink selection:text-vibrant-rose min-h-screen flex flex-col justify-between">
        <livewire:public.header />

        <main class="flex-grow">
            {{ $slot }}
        </main>

        <livewire:public.footer />

        @livewireScripts
    </body>
</html>
