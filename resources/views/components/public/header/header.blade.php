<div>
    <!-- Top Announcement Bar -->
    <div class="bg-[#6B57B2] text-white text-xs sm:text-sm py-2.5 px-4 shadow-sm">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-center">
            <div class="flex items-center gap-4">
                <span class="inline-flex items-center gap-1 font-medium">
                    <i class="ri-truck-line text-warm-peach text-base"></i> Free Express Shipping over $35
                </span>
                <span class="hidden md:inline-flex items-center gap-1 opacity-90">
                    <i class="ri-shield-check-line text-pastel-green text-base"></i> Dermatest Certified Excellent
                </span>
            </div>
            <div class="flex items-center gap-4 text-xs">
                <span class="inline-flex items-center gap-1 font-medium text-warm-peach">
                    <i class="ri-heart-3-fill text-vibrant-rose"></i> Trusted by 100,000+ Happy Mothers
                </span>
                <a href="#contact" class="hover:underline flex items-center gap-1">
                    <i class="ri-customer-service-2-line"></i> 24/7 Parent Support
                </a>
            </div>
        </div>
    </div>

    <!-- Sticky Header Navigation -->
    <header class="sticky top-0 z-40 bg-white/90 backdrop-blur-md border-b border-purple-100 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo Left -->
                <a href="/" class="flex items-center gap-2 group flex-shrink-0">
                    <img src="/logo.webp" alt="Fabie Baby Logo" class="h-16 w-auto transition-transform group-hover:scale-105" />
                </a>

                <!-- Centered Desktop Menu -->
                <nav class="hidden lg:flex items-center justify-center gap-8 text-sm font-semibold text-gray-700 flex-1 px-8">
                    <button wire:click="selectCategory('All')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'All' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent' }}">
                        Home
                    </button>
                    <button wire:click="selectCategory('Diapers')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Diapers' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent' }}">
                        Diapers & Pants
                    </button>
                    <button wire:click="selectCategory('Wipes')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Wipes' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent' }}">
                        Baby Wipes
                    </button>
                    <button wire:click="selectCategory('Skincare')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Skincare' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent' }}">
                        Organic Skincare
                    </button>
                    <button wire:click="selectCategory('Bath')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Bath' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent' }}">
                        Bath & Body
                    </button>
                    <a href="#size-calculator" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 border-transparent text-soft-purple font-bold">
                        <i class="ri-scales-3-line"></i> Size Guide
                    </a>
                </nav>

                <!-- Actions Right -->
                <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
                    <!-- Search Icon Button -->
                    <button class="p-2.5 text-gray-600 hover:text-vibrant-rose rounded-full hover:bg-soft-pink transition-colors" title="Search">
                        <i class="ri-search-line text-xl"></i>
                    </button>

                    <!-- Wishlist Icon Button -->
                    <button class="p-2.5 text-gray-600 hover:text-vibrant-rose rounded-full hover:bg-soft-pink transition-colors relative" title="Wishlist">
                        <i class="ri-heart-line text-xl"></i>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-vibrant-rose rounded-full"></span>
                    </button>

                    <!-- Contact Us CTA Button -->
                    <a href="#contact" class="px-5 py-2.5 bg-vibrant-rose text-white text-xs font-bold rounded-full shadow-md hover:bg-pink-600 hover:shadow-lg transition-all flex items-center gap-1.5 active:scale-95">
                        <i class="ri-mail-send-line text-sm"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>