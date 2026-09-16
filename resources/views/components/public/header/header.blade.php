<div x-data="{ mobileMenuOpen: false, searchOpen: false }">
    <!-- Top Announcement Bar -->
    <div class="bg-[#6B57B2] text-white text-xs sm:text-sm py-2 px-4 shadow-sm relative z-30">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-1.5 sm:gap-2 text-center">
            <div class="flex items-center gap-3 sm:gap-4">
                <span class="inline-flex items-center gap-1.5 font-semibold text-white">
                    <i class="ri-truck-line text-warm-peach text-sm sm:text-base"></i> Free Express Shipping over $35
                </span>
                <span class="hidden md:inline-flex items-center gap-1 text-white/90">
                    <i class="ri-shield-check-line text-pastel-green text-sm sm:text-base"></i> Dermatest Certified 5-Star
                </span>
            </div>
            <div class="flex items-center gap-3 sm:gap-4 text-[11px] sm:text-xs">
                <span class="inline-flex items-center gap-1 font-semibold text-warm-peach">
                    <i class="ri-heart-3-fill text-vibrant-rose"></i> Loved by 100,000+ Mothers
                </span>
                <a href="#contact" class="hover:underline flex items-center gap-1 text-white/90 hover:text-white">
                    <i class="ri-customer-service-2-line"></i> 24/7 Parent Support
                </a>
            </div>
        </div>
    </div>

    <!-- Sticky Header Navigation -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-purple-100/80 shadow-xs transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-18 sm:h-20">
                <!-- Mobile Menu Hamburger Button (Visible on < lg) -->
                <div class="flex items-center lg:hidden">
                    <button 
                        @click="mobileMenuOpen = true" 
                        class="p-2 text-gray-700 hover:text-vibrant-rose rounded-xl hover:bg-soft-pink transition-colors focus:outline-none"
                        aria-label="Open navigation menu"
                    >
                        <i class="ri-menu-2-line text-2xl"></i>
                    </button>
                </div>

                <!-- Brand Logo -->
                <a href="/" class="flex items-center gap-2 group flex-shrink-0">
                    <img src="/logo.webp" alt="Fabie Baby Logo" class="h-12 sm:h-15 w-auto transition-transform duration-300 group-hover:scale-103" />
                </a>

                <!-- Centered Desktop Menu (Hidden on Mobile/Tablet) -->
                <nav class="hidden lg:flex items-center justify-center gap-7 text-sm font-semibold text-gray-700 flex-1 px-8">
                    <button wire:click="selectCategory('All')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'All' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent text-gray-700' }}">
                        Home
                    </button>
                    <button wire:click="selectCategory('Diapers')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Diapers' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent text-gray-700' }}">
                        Diapers & Pants
                    </button>
                    <button wire:click="selectCategory('Wipes')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Wipes' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent text-gray-700' }}">
                        Baby Wipes
                    </button>
                    <button wire:click="selectCategory('Skincare')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Skincare' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent text-gray-700' }}">
                        Organic Skincare
                    </button>
                    <button wire:click="selectCategory('Bath')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Bath' ? 'border-vibrant-rose text-vibrant-rose font-bold' : 'border-transparent text-gray-700' }}">
                        Bath & Body
                    </button>
                    <a href="#about-us" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 border-transparent text-gray-700">
                        About Us
                    </a>
                    <a href="#b2b-products" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 border-transparent text-[#6B57B2] font-bold flex items-center gap-1.5">
                        <i class="ri-building-4-line text-base text-vibrant-rose"></i> B2B Wholesale
                    </a>
                </nav>

                <!-- Actions Right -->
                <div class="flex items-center gap-1.5 sm:gap-2.5 flex-shrink-0">
                    <!-- Search Button -->
                    <button 
                        @click="searchOpen = !searchOpen" 
                        class="p-2 sm:p-2.5 text-gray-600 hover:text-vibrant-rose rounded-full hover:bg-soft-pink transition-colors" 
                        title="Search Products"
                    >
                        <i class="ri-search-line text-lg sm:text-xl"></i>
                    </button>

                    <!-- Cart Drawer Trigger Button -->
                    <button 
                        wire:click="openCart" 
                        class="p-2 sm:p-2.5 text-gray-700 hover:text-vibrant-rose rounded-full hover:bg-soft-pink transition-colors relative" 
                        title="View Cart"
                    >
                        <i class="ri-shopping-bag-3-line text-lg sm:text-xl"></i>
                        @if($cartCount > 0)
                            <span class="absolute top-1 right-1 w-4 h-4 bg-vibrant-rose text-white text-[10px] font-bold rounded-full flex items-center justify-center">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </button>

                    <!-- Contact Us CTA Button (Hidden on smallest screens, icon only or full) -->
                    <a href="#contact" class="hidden sm:inline-flex px-4 sm:px-5 py-2 sm:py-2.5 bg-vibrant-rose hover:bg-pink-600 text-white text-xs font-bold rounded-full shadow-sm hover:shadow-md transition-all items-center gap-1.5 active:scale-95">
                        <i class="ri-mail-send-line text-sm"></i> Contact Us
                    </a>
                </div>
            </div>

            <!-- Search Dropdown Box (When active) -->
            <div 
                x-show="searchOpen" 
                x-cloak 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="py-3 px-2 border-t border-purple-50"
            >
                <div class="relative max-w-xl mx-auto">
                    <input 
                        type="text" 
                        placeholder="Search ultra-soft diapers, water wipes, organic lotion..." 
                        class="w-full pl-10 pr-10 py-2 text-xs sm:text-sm bg-gray-50 border border-purple-100 rounded-full focus:outline-none focus:border-vibrant-rose focus:bg-white transition-all shadow-inner"
                    />
                    <i class="ri-search-line absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-base"></i>
                    <button @click="searchOpen = false" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                        <i class="ri-close-circle-fill text-lg"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div 
            x-show="mobileMenuOpen" 
            x-cloak
            class="fixed inset-0 z-50 lg:hidden overflow-hidden" 
            role="dialog" 
            aria-modal="true"
        >
            <!-- Backdrop -->
            <div 
                x-show="mobileMenuOpen"
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="mobileMenuOpen = false" 
                class="fixed inset-0 bg-gray-900/60 backdrop-blur-xs"
            ></div>

            <div class="fixed inset-y-0 left-0 max-w-xs w-full bg-white shadow-2xl flex flex-col justify-between overflow-y-auto">
                <div>
                    <!-- Drawer Header -->
                    <div class="p-5 border-b border-purple-50 flex items-center justify-between bg-soft-pink/40">
                        <a href="/" @click="mobileMenuOpen = false">
                            <img src="/logo.webp" alt="Fabie Baby" class="h-10 w-auto" />
                        </a>
                        <button 
                            @click="mobileMenuOpen = false" 
                            class="p-2 text-gray-500 hover:text-gray-800 rounded-full hover:bg-white transition-colors"
                        >
                            <i class="ri-close-line text-2xl"></i>
                        </button>
                    </div>

                    <!-- Category Menu Items -->
                    <div class="p-4 space-y-1.5">
                        <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider px-3 mb-2">Explore Care</p>
                        
                        <button 
                            wire:click="selectCategory('All'); mobileMenuOpen = false"
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-colors {{ $activeCategory === 'All' ? 'bg-soft-pink text-vibrant-rose font-bold' : 'text-gray-700 hover:bg-gray-50' }}"
                        >
                            <span class="flex items-center gap-2.5"><i class="ri-home-5-line text-[#6B57B2]"></i> All Products</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </button>

                        <button 
                            wire:click="selectCategory('Diapers'); mobileMenuOpen = false"
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-colors {{ $activeCategory === 'Diapers' ? 'bg-soft-pink text-vibrant-rose font-bold' : 'text-gray-700 hover:bg-gray-50' }}"
                        >
                            <span class="flex items-center gap-2.5"><i class="ri-shield-star-line text-sky-blue"></i> Diapers & Pants</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </button>

                        <button 
                            wire:click="selectCategory('Wipes'); mobileMenuOpen = false"
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-colors {{ $activeCategory === 'Wipes' ? 'bg-soft-pink text-vibrant-rose font-bold' : 'text-gray-700 hover:bg-gray-50' }}"
                        >
                            <span class="flex items-center gap-2.5"><i class="ri-drop-line text-pastel-green"></i> 99.9% Water Wipes</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </button>

                        <button 
                            wire:click="selectCategory('Skincare'); mobileMenuOpen = false"
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-colors {{ $activeCategory === 'Skincare' ? 'bg-soft-pink text-vibrant-rose font-bold' : 'text-gray-700 hover:bg-gray-50' }}"
                        >
                            <span class="flex items-center gap-2.5"><i class="ri-plant-line text-[#6B57B2]"></i> Organic Skincare</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </button>

                        <button 
                            wire:click="selectCategory('Bath'); mobileMenuOpen = false"
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-colors {{ $activeCategory === 'Bath' ? 'bg-soft-pink text-vibrant-rose font-bold' : 'text-gray-700 hover:bg-gray-50' }}"
                        >
                            <span class="flex items-center gap-2.5"><i class="ri-bubble-chart-line text-warm-peach"></i> Bath & Body Care</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </button>

                        <a 
                            href="#about-us" 
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-gray-700 hover:bg-gray-50 transition-colors"
                        >
                            <span class="flex items-center gap-2.5"><i class="ri-heart-3-line text-[#6B57B2]"></i> About Fabie Baby</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </a>

                        <a 
                            href="#b2b-products" 
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-bold text-[#6B57B2] hover:bg-soft-purple/10 transition-colors"
                        >
                            <span class="flex items-center gap-2.5"><i class="ri-building-4-line text-vibrant-rose"></i> B2B & Wholesale</span>
                            <span class="text-[10px] bg-soft-pink text-vibrant-rose px-2 py-0.5 rounded-full font-bold">Trade</span>
                        </a>

                        <a 
                            href="#faq" 
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-gray-700 hover:bg-gray-50 transition-colors"
                        >
                            <span class="flex items-center gap-2.5"><i class="ri-questionnaire-line text-warm-peach"></i> FAQs</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </a>
                    </div>
                </div>

                <!-- Mobile Drawer Footer Info -->
                <div class="p-4 border-t border-purple-50 bg-cream-bg space-y-3">
                    <div class="p-3 bg-white rounded-xl border border-purple-100 flex items-center gap-3">
                        <i class="ri-shield-check-fill text-xl text-pastel-green"></i>
                        <div>
                            <p class="text-xs font-bold text-gray-800">Dubai Lab Certified</p>
                            <p class="text-[10px] text-gray-500">Safe, pH 5.5 & Non-Toxic</p>
                        </div>
                    </div>

                    <a 
                        href="#contact" 
                        @click="mobileMenuOpen = false"
                        class="w-full py-2.5 bg-vibrant-rose text-white text-xs font-bold rounded-xl text-center block shadow-sm hover:bg-pink-600 transition-colors"
                    >
                        Contact Parent Support
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>