<div x-data="{ mobileMenuOpen: false, searchOpen: false }">
    <!-- Top Announcement Bar (Clean Swiss Pediatric Banner) -->
    <aside class="bg-[#F4F4F6] border-b border-[#EEEEEE] py-2 px-4 text-center">
        <div class="max-w-7xl mx-auto flex items-center justify-between text-xs tracking-wide text-gray-600">
            <div class="hidden md:flex items-center gap-2 text-[#3E3465] font-semibold text-[11px] uppercase tracking-wider">
                <span class="inline-block w-2 h-2 rounded-full bg-[#D9487D]"></span>
                Pediatric Safety Standard
            </div>
            <div class="mx-auto md:mx-0 text-center text-[#3E3465] text-xs font-medium tracking-tight">
                Crafted with Pure Botanical Ingredients &amp; Zero Synthetic Fragrance
            </div>
            <div class="hidden md:flex items-center gap-4 text-xs">
                <a href="#swiss-standards" class="hover:text-[#3E3465] transition-colors">Safety Standards</a>
                <span class="text-gray-300">|</span>
                <a href="#b2b-products" class="hover:text-[#3E3465] transition-colors font-medium text-[#3E3465]">Wholesale &amp; Export</a>
            </div>
        </div>
    </aside>

    <!-- ========================================================================= -->
    <!-- 1. DESKTOP HEADER (Visible only on lg screens and up)                     -->
    <!-- ========================================================================= -->
    <header class="hidden lg:block sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-[#EEEEEE] transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Left: Brand Logo -->
                <a href="/" class="flex items-center gap-2 group flex-shrink-0">
                    <img src="/logo.webp" alt="Fabie Baby Logo" class="h-12 w-auto transition-transform duration-300 group-hover:scale-102" />
                </a>

                <!-- Center: Desktop Navigation Menu -->
                <nav class="flex items-center justify-center gap-7 xl:gap-8 text-sm text-gray-600 flex-1 px-8 font-medium">
                    <button wire:click="selectCategory('All')" class="hover:text-[#3E3465] transition-colors py-2 border-b-2 {{ $activeCategory === 'All' ? 'border-[#3E3465] text-[#3E3465] font-semibold' : 'border-transparent' }}">
                        All Care
                    </button>
                    <button wire:click="selectCategory('Diapers')" class="hover:text-[#3E3465] transition-colors py-2 border-b-2 {{ $activeCategory === 'Diapers' ? 'border-[#3E3465] text-[#3E3465] font-semibold' : 'border-transparent' }}">
                        Diapers &amp; Pants
                    </button>
                    <button wire:click="selectCategory('Wipes')" class="hover:text-[#3E3465] transition-colors py-2 border-b-2 {{ $activeCategory === 'Wipes' ? 'border-[#3E3465] text-[#3E3465] font-semibold' : 'border-transparent' }}">
                        Baby Wipes
                    </button>
                    <button wire:click="selectCategory('Skincare')" class="hover:text-[#3E3465] transition-colors py-2 border-b-2 {{ $activeCategory === 'Skincare' ? 'border-[#3E3465] text-[#3E3465] font-semibold' : 'border-transparent' }}">
                        Organic Skincare
                    </button>
                    <button wire:click="selectCategory('Bath')" class="hover:text-[#3E3465] transition-colors py-2 border-b-2 {{ $activeCategory === 'Bath' ? 'border-[#3E3465] text-[#3E3465] font-semibold' : 'border-transparent' }}">
                        Bath &amp; Body
                    </button>
                    <a href="#about-us" class="hover:text-[#3E3465] transition-colors py-2 border-b-2 border-transparent">
                        About Us
                    </a>
                    <a href="#b2b-products" class="hover:text-[#3E3465] transition-colors py-2 border-b-2 border-transparent text-[#3E3465] font-semibold flex items-center gap-1.5">
                        <i class="ri-building-4-line text-sm"></i> Wholesale
                    </a>
                </nav>

                <!-- Right: Search & Contact Action -->
                <div class="flex items-center gap-3 flex-shrink-0">
                    <button 
                        @click="searchOpen = !searchOpen" 
                        class="p-2 text-gray-500 hover:text-[#3E3465] rounded-full hover:bg-gray-100 transition-colors" 
                        title="Search Products"
                    >
                        <i class="ri-search-line text-lg"></i>
                    </button>
                    <a href="#contact" class="px-5 py-2 bg-[#3E3465] hover:bg-[#2D254C] text-white text-xs font-semibold rounded-full transition-all inline-flex items-center gap-1.5 active:scale-95 shadow-xs">
                        <span>Contact Us</span>
                        <i class="ri-arrow-right-line text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Desktop Search Dropdown -->
            <div 
                x-show="searchOpen" 
                x-cloak 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="py-3 px-2 border-t border-gray-100"
            >
                <div class="relative max-w-xl mx-auto">
                    <input 
                        type="text" 
                        placeholder="Search baby diapers, pure water wipes, gentle lotion..." 
                        class="w-full pl-10 pr-10 py-2.5 text-sm bg-gray-50 border border-gray-200 rounded-full focus:outline-none focus:border-[#3E3465] focus:bg-white transition-all"
                    />
                    <i class="ri-search-line absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-base"></i>
                    <button @click="searchOpen = false" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                        <i class="ri-close-circle-fill text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- ========================================================================= -->
    <!-- 2. PHONE / MOBILE HEADER (Visible on < lg screens)                        -->
    <!-- ========================================================================= -->
    <header class="block lg:hidden sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-[#EEEEEE]">
        <div class="px-4 sm:px-6">
            <div class="flex items-center justify-between h-16">
                <!-- Left: Brand Logo -->
                <a href="/" class="flex items-center flex-shrink-0">
                    <img src="/logo.webp" alt="Fabie Baby" class="h-10 w-auto object-contain" />
                </a>

                <!-- Right: Mobile Menu Icon -->
                <button 
                    @click="mobileMenuOpen = true" 
                    class="w-10 h-10 flex items-center justify-center text-gray-800 hover:text-[#3E3465] rounded-xl hover:bg-gray-100 transition-colors focus:outline-none cursor-pointer"
                    aria-label="Open Navigation Menu"
                >
                    <i class="ri-menu-3-line text-2xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- ========================================================================= -->
    <!-- 3. MOBILE NAVIGATION DRAWER                                               -->
    <!-- ========================================================================= -->
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
            class="fixed inset-0 bg-gray-900/50 backdrop-blur-xs"
        ></div>

        <div 
            x-show="mobileMenuOpen"
            x-transition:enter="transform transition ease-in-out duration-300"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed inset-y-0 right-0 max-w-xs w-full bg-white shadow-xl flex flex-col justify-between overflow-y-auto"
        >
            <div>
                <!-- Drawer Header -->
                <div class="p-4 sm:p-5 border-b border-gray-100 flex items-center justify-between">
                    <a href="/" @click="mobileMenuOpen = false">
                        <img src="/logo.webp" alt="Fabie Baby" class="h-9 w-auto" />
                    </a>
                    <button 
                        @click="mobileMenuOpen = false" 
                        class="w-8 h-8 rounded-full flex items-center justify-center text-gray-500 hover:text-gray-800 hover:bg-gray-100 transition-colors"
                        aria-label="Close Menu"
                    >
                        <i class="ri-close-line text-xl"></i>
                    </button>
                </div>

                <!-- Category Menu Items -->
                <div class="p-4 space-y-1">
                    <p class="text-[11px] font-semibold text-gray-400 uppercase tracking-widest px-3 mb-2">Care Collections</p>
                    
                    <button 
                        wire:click="selectCategory('All'); mobileMenuOpen = false"
                        @click="mobileMenuOpen = false"
                        class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm transition-colors {{ $activeCategory === 'All' ? 'bg-[#FAFAF9] text-[#3E3465] font-semibold' : 'text-gray-600 hover:bg-gray-50' }}"
                    >
                        <span>All Products</span>
                        <i class="ri-arrow-right-s-line text-gray-400"></i>
                    </button>

                    <button 
                        wire:click="selectCategory('Diapers'); mobileMenuOpen = false"
                        @click="mobileMenuOpen = false"
                        class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm transition-colors {{ $activeCategory === 'Diapers' ? 'bg-[#FAFAF9] text-[#3E3465] font-semibold' : 'text-gray-600 hover:bg-gray-50' }}"
                    >
                        <span>Diapers &amp; Pants</span>
                        <i class="ri-arrow-right-s-line text-gray-400"></i>
                    </button>

                    <button 
                        wire:click="selectCategory('Wipes'); mobileMenuOpen = false"
                        @click="mobileMenuOpen = false"
                        class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm transition-colors {{ $activeCategory === 'Wipes' ? 'bg-[#FAFAF9] text-[#3E3465] font-semibold' : 'text-gray-600 hover:bg-gray-50' }}"
                    >
                        <span>Baby Wipes</span>
                        <i class="ri-arrow-right-s-line text-gray-400"></i>
                    </button>

                    <button 
                        wire:click="selectCategory('Skincare'); mobileMenuOpen = false"
                        @click="mobileMenuOpen = false"
                        class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm transition-colors {{ $activeCategory === 'Skincare' ? 'bg-[#FAFAF9] text-[#3E3465] font-semibold' : 'text-gray-600 hover:bg-gray-50' }}"
                    >
                        <span>Organic Skincare</span>
                        <i class="ri-arrow-right-s-line text-gray-400"></i>
                    </button>

                    <button 
                        wire:click="selectCategory('Bath'); mobileMenuOpen = false"
                        @click="mobileMenuOpen = false"
                        class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm transition-colors {{ $activeCategory === 'Bath' ? 'bg-[#FAFAF9] text-[#3E3465] font-semibold' : 'text-gray-600 hover:bg-gray-50' }}"
                    >
                        <span>Bath &amp; Body</span>
                        <i class="ri-arrow-right-s-line text-gray-400"></i>
                    </button>

                    <div class="pt-2 border-t border-gray-100 mt-2">
                        <a 
                            href="#about-us" 
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors"
                        >
                            <span>About Us</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </a>

                        <a 
                            href="#b2b-products" 
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm font-semibold text-[#3E3465] hover:bg-gray-50 transition-colors"
                        >
                            <span class="flex items-center gap-2"><i class="ri-building-4-line"></i> B2B Wholesale</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </a>

                        <a 
                            href="#faq" 
                            @click="mobileMenuOpen = false"
                            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors"
                        >
                            <span>FAQs</span>
                            <i class="ri-arrow-right-s-line text-gray-400"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Drawer Footer Info -->
            <div class="p-4 border-t border-gray-100 bg-[#FAFAF9] space-y-3">
                <a 
                    href="#contact" 
                    @click="mobileMenuOpen = false"
                    class="w-full py-3 bg-[#3E3465] text-white text-xs font-semibold rounded-lg text-center block transition-colors"
                >
                    Contact Support
                </a>
            </div>
        </div>
    </div>
</div>