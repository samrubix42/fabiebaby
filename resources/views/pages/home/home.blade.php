<div class="relative">

    <!-- Full-Screen Edge-to-Edge Hero Slider Banner (With Auto-Sliding & Hover-Pause) -->
    <section
        x-data="{ timer: null }"
        x-init="timer = setInterval(() => $wire.nextSlide(), 5000)"
        @mouseenter="clearInterval(timer)"
        @mouseleave="timer = setInterval(() => $wire.nextSlide(), 5000)"
        class="relative w-full overflow-hidden">
        <div class="relative w-full h-[55vh] sm:h-[70vh] md:h-[80vh] overflow-hidden bg-gray-100 group">
            <!-- Background Image Container -->
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-700 transform scale-100 group-hover:scale-102" style="background-image: url('{{ $activeSlide['bgImage'] }}');"></div>

            <!-- Gradient Overlay for High Contrast Text Legibility -->
            <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/80 to-transparent w-full md:w-3/5 lg:w-1/2"></div>

            <!-- Left Content Overlay -->
            <div class="absolute inset-0 px-[5%] flex items-center">
                <div class="max-w-xl px-6 sm:px-12 lg:px-16 space-y-3 sm:space-y-5">


                    <div class="space-y-1">
                        <span class="block text-xs sm:text-sm font-bold tracking-wider text-vibrant-rose uppercase">{{ $activeSlide['subtitle'] }}</span>
                        <h1 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-heading text-gray-900 leading-tight">
                            {{ $activeSlide['title'] }}
                        </h1>
                    </div>

                    <p class="text-xs sm:text-base text-gray-600 leading-relaxed line-clamp-2 sm:line-clamp-3">
                        {{ $activeSlide['description'] }}
                    </p>

                    <div class="pt-2">
                        <button wire:click="setCategory('{{ $activeSlide['category'] }}')" class="px-5 py-2.5 font-bold text-xs sm:text-sm rounded-full shadow-lg transition-all transform hover:-translate-y-0.5 active:scale-95 flex items-center gap-2.5 {{ $activeSlide['buttonClass'] }}">
                            <span>{{ $activeSlide['buttonText'] }}</span>
                            <i class="ri-arrow-right-line text-lg"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Simple Small Dot Pagination (No Background, Pink Active, Equal Width) -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-2.5 z-20">
                @foreach($slides as $index => $slide)
                <button wire:click="setSlide({{ $index }})" class="w-2.5 h-2.5 rounded-full transition-all duration-300 {{ $currentSlide === $index ? 'bg-vibrant-rose shadow-sm scale-110' : 'bg-gray-400/60 hover:bg-gray-600' }}" title="Go to slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
        </div>
        <!-- Trust & Safety Highlights Bar (Responsive, Symmetrical & High Trust) -->
        <section class="bg-white py-6 sm:py-8 border-b border-purple-100/70 shadow-2xs relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6 items-center">
                    <!-- Item 1: Safe & Gentle -->
                    <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-soft-green/30 transition-colors reveal-on-scroll reveal-delay-1">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-soft-green flex items-center justify-center text-pastel-green shrink-0">
                            <i class="ri-plant-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Safe & Gentle</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">0% Harsh Chemicals</p>
                        </div>
                    </div>

                    <!-- Item 2: Dermatologically Tested -->
                    <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-soft-blue/40 transition-colors reveal-on-scroll reveal-delay-2">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-soft-blue flex items-center justify-center text-sky-blue shrink-0">
                            <i class="ri-drop-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Dermatologist Tested</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">5-Star Sensitive Rating</p>
                        </div>
                    </div>

                    <!-- Item 3: Pediatrician Recommended -->
                    <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-purple-50 transition-colors reveal-on-scroll reveal-delay-3">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-[#6B57B2]/10 flex items-center justify-center text-[#6B57B2] shrink-0">
                            <i class="ri-user-smile-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Pediatrician Approved</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">Trusted by Doctors</p>
                        </div>
                    </div>

                    <!-- Item 4: Dubai Lab Certified -->
                    <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-soft-pink/40 transition-colors reveal-on-scroll reveal-delay-4">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-soft-pink flex items-center justify-center text-vibrant-rose shrink-0">
                            <i class="ri-shield-check-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Dubai Lab Tested</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">Dubai Municipality Approved</p>
                        </div>
                    </div>

                    <!-- Item 5: pH 5.5 Balanced -->
                    <div class="col-span-2 md:col-span-1 flex items-center justify-center sm:justify-start gap-3 p-3 rounded-2xl hover:bg-soft-orange/40 transition-colors reveal-on-scroll reveal-delay-5">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-soft-orange flex items-center justify-center text-warm-peach shrink-0">
                            <i class="ri-heart-3-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">pH 5.5 Balanced</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">Protects Acid Mantle</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

           <section class="bg-gradient-to-b from-[#F8F6FD] via-white to-[#F8F6FD] py-16 sm:py-20 text-center relative overflow-hidden border-b border-purple-100/70">
            <!-- Subtle Ambient Brand Tint -->
            <div class="absolute -left-16 top-1/2 -translate-y-1/2 w-64 h-64 bg-soft-pink/40 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -right-16 top-1/2 -translate-y-1/2 w-64 h-64 bg-[#6B57B2]/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5 relative z-10 reveal-on-scroll-scale">
                <!-- Brand Badge -->
                <div class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold text-vibrant-rose bg-soft-pink tracking-wider uppercase">
                    <i class="ri-heart-3-fill text-vibrant-rose"></i>
                    <span>Our Brand Spirit</span>
                </div>

                <!-- Headline -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#1B2541] tracking-tight">
                    Cheer For Dreams
                </h2>

                <!-- Editorial Copy -->
                <div class="space-y-2 text-sm sm:text-base text-gray-600 leading-relaxed max-w-2xl mx-auto font-medium">
                    <p>
                        Draw strength from our "I will be" spirit, Fabie Baby is dedicated to safeguarding life's every possibility.
                    </p>
                    <p>
                        Through professional care and heartfelt support, we turn every baby's aspiration into a real, achievable dream.
                    </p>
                    <p class="font-bold text-[#6B57B2] pt-1">
                        With Fabie Baby, with colorful dreams.
                    </p>
                </div>

                <!-- Brand Colored CTA Button -->
                <div class="pt-3">
                    <a
                        href="#brand-promises"
                        class="inline-flex items-center gap-2 px-8 py-3.5 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold rounded-full shadow-sm hover:shadow-md transition-all active:scale-95">
                        <span>Learn More</span>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Interactive Category Explorer Section -->
        <section id="products" class="py-14 sm:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-14 reveal-on-scroll">
                    <span class="text-xs font-bold uppercase tracking-wider text-vibrant-rose bg-soft-pink px-4 py-1.5 rounded-full inline-block">
                        Curated Product Range
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-heading text-[#1B2541] mt-3">
                        Designed for Every Stage of Joy
                    </h2>
                    <p class="text-gray-500 text-xs sm:text-sm mt-2">
                        Ultra-gentle formulations designed to support your baby’s delicate skin from day one.
                    </p>

                  
                </div>

                <!-- Category Visual Bento Grid (Flawlessly Responsive on Mobile & Desktop) -->
                <div class="grid grid-cols-2 md:grid-cols-12 gap-3 sm:gap-4 lg:gap-5">
                    
                    <!-- 1. DIAPERS & PANTS (Top Left - Wide Span 6 on Desktop, Full Banner on Mobile) -->
                    <div
                        wire:click="setCategory('Diapers')"
                        class="col-span-2 md:col-span-6 order-1 h-44 sm:h-56 md:h-72 lg:h-80 rounded-2xl sm:rounded-3xl overflow-hidden group cursor-pointer relative shadow-xs hover:shadow-lg transition-all duration-300 reveal-on-scroll-scale reveal-delay-1">
                        <img 
                            src="/images/cat_diapers.jpg" 
                            alt="Diapers & Pants" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" 
                        />
                        <div class="absolute inset-0 bg-black/25 group-hover:bg-black/35 transition-colors duration-300 flex items-center justify-center p-4">
                            <h3 class="text-base sm:text-xl lg:text-2xl font-black text-white uppercase tracking-wider sm:tracking-widest drop-shadow-md text-center">
                                Diapers & Pants
                            </h3>
                        </div>
                    </div>

                    <!-- 2. BODYCARE (Top Middle - Span 3 on Desktop, Half Card on Mobile) -->
                    <div
                        wire:click="setCategory('Skincare')"
                        class="col-span-1 md:col-span-3 order-2 h-36 sm:h-48 md:h-72 lg:h-80 rounded-2xl sm:rounded-3xl overflow-hidden group cursor-pointer relative shadow-xs hover:shadow-lg transition-all duration-300 reveal-on-scroll-scale reveal-delay-2">
                        <img 
                            src="/images/cat_bodycare.jpg" 
                            alt="Bodycare" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" 
                        />
                        <div class="absolute inset-0 bg-black/25 group-hover:bg-black/35 transition-colors duration-300 flex items-center justify-center p-3 sm:p-4">
                            <h3 class="text-xs sm:text-base lg:text-2xl font-black text-white uppercase tracking-wider sm:tracking-widest drop-shadow-md text-center">
                                Bodycare
                            </h3>
                        </div>
                    </div>

                    <!-- 3. CLEANING (Top Right - Span 3 on Desktop, Half Card on Mobile) -->
                    <div
                        wire:click="setCategory('Bath')"
                        class="col-span-1 md:col-span-3 order-3 h-36 sm:h-48 md:h-72 lg:h-80 rounded-2xl sm:rounded-3xl overflow-hidden group cursor-pointer relative shadow-xs hover:shadow-lg transition-all duration-300 reveal-on-scroll-scale reveal-delay-3">
                        <img 
                            src="/images/cat_cleaning.jpg" 
                            alt="Cleaning" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" 
                        />
                        <div class="absolute inset-0 bg-black/25 group-hover:bg-black/35 transition-colors duration-300 flex items-center justify-center p-3 sm:p-4">
                            <h3 class="text-xs sm:text-base lg:text-2xl font-black text-white uppercase tracking-wider sm:tracking-widest drop-shadow-md text-center">
                                Cleaning
                            </h3>
                        </div>
                    </div>

                    <!-- 4. ACCESSORIES (Bottom Left - Span 3 on Desktop, Half Card on Mobile) -->
                    <div
                        wire:click="setCategory('All')"
                        class="col-span-1 md:col-span-3 order-5 md:order-4 h-36 sm:h-48 md:h-64 lg:h-72 rounded-2xl sm:rounded-3xl overflow-hidden group cursor-pointer relative shadow-xs hover:shadow-lg transition-all duration-300 reveal-on-scroll-scale reveal-delay-4">
                        <img 
                            src="/images/cat_accessories.jpg" 
                            alt="Accessories" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" 
                        />
                        <div class="absolute inset-0 bg-black/25 group-hover:bg-black/35 transition-colors duration-300 flex items-center justify-center p-3 sm:p-4">
                            <h3 class="text-xs sm:text-base lg:text-2xl font-black text-white uppercase tracking-wider sm:tracking-widest drop-shadow-md text-center">
                                Accessories
                            </h3>
                        </div>
                    </div>

                    <!-- 5. WET WIPES (Bottom Middle - Wide Span 6 on Desktop, Full Banner on Mobile) -->
                    <div
                        wire:click="setCategory('Wipes')"
                        class="col-span-2 md:col-span-6 order-4 md:order-5 h-44 sm:h-56 md:h-64 lg:h-72 rounded-2xl sm:rounded-3xl overflow-hidden group cursor-pointer relative shadow-xs hover:shadow-lg transition-all duration-300 reveal-on-scroll-scale reveal-delay-5">
                        <img 
                            src="/images/cat_wipes.jpg" 
                            alt="Wet Wipes" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" 
                        />
                        <div class="absolute inset-0 bg-black/25 group-hover:bg-black/35 transition-colors duration-300 flex items-center justify-center p-4">
                            <h3 class="text-base sm:text-xl lg:text-2xl font-black text-white uppercase tracking-wider sm:tracking-widest drop-shadow-md text-center">
                                Wet Wipes
                            </h3>
                        </div>
                    </div>

                    <!-- 6. FEEDING (Bottom Right - Span 3 on Desktop, Half Card on Mobile) -->
                    <div
                        wire:click="setCategory('All')"
                        class="col-span-1 md:col-span-3 order-6 h-36 sm:h-48 md:h-64 lg:h-72 rounded-2xl sm:rounded-3xl overflow-hidden group cursor-pointer relative shadow-xs hover:shadow-lg transition-all duration-300 reveal-on-scroll-scale reveal-delay-6">
                        <img 
                            src="/images/cat_feeding.jpg" 
                            alt="Feeding" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" 
                        />
                        <div class="absolute inset-0 bg-black/25 group-hover:bg-black/35 transition-colors duration-300 flex items-center justify-center p-3 sm:p-4">
                            <h3 class="text-xs sm:text-base lg:text-2xl font-black text-white uppercase tracking-wider sm:tracking-widest drop-shadow-md text-center">
                                Feeding
                            </h3>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!-- Featured Collection Grid Section (Clean, Modern & Responsive) -->
        <section class="py-16 sm:py-20 bg-[#F4F7FC] border-t border-purple-100/60 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 sm:mb-12 gap-4 reveal-on-scroll">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#6B57B2] bg-white px-3.5 py-1 rounded-full border border-purple-100 inline-block mb-2">
                            @if($activeCategory === 'All') Recommended For You @else Category: {{ $activeCategory }} @endif
                        </span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-heading text-[#1B2541] tracking-tight">
                            Featured Baby Essentials
                        </h2>
                        <p class="text-gray-500 text-xs sm:text-sm mt-1">
                            Dermatologist-tested gentle formulas for daily soothing, protection & joy.
                        </p>
                    </div>
                    @if($activeCategory !== 'All')
                    <button wire:click="setCategory('All')" class="text-xs font-bold text-vibrant-rose hover:underline self-start sm:self-auto flex items-center gap-1">
                        <i class="ri-filter-off-line"></i> Show All Products
                    </button>
                    @endif
                </div>

                <!-- Product Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @forelse($filteredProducts as $product)
                    <div 
                        class="bg-white rounded-3xl p-5 sm:p-6 soft-card-shadow card-hover-effect border border-purple-100/70 flex flex-col justify-between group relative overflow-hidden reveal-on-scroll"
                        style="transition-delay: {{ ($loop->index % 4) * 120 }}ms"
                    >
                        <div>
                            <!-- Category Tag Header (Clean & Minimal) -->
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-[11px] font-extrabold text-[#6B57B2] tracking-wider uppercase bg-purple-50 px-2.5 py-1 rounded-lg">
                                    {{ $product['category'] }}
                                </span>
                                <span class="text-[11px] font-semibold text-gray-400 flex items-center gap-1">
                                    <i class="ri-shield-check-line text-pastel-green"></i> Certified
                                </span>
                            </div>

                            <!-- Product Image Container (Object Cover, No Padding) -->
                            <div wire:click="openQuickView({{ $product['id'] }})" class="w-full h-56 sm:h-64 rounded-2xl overflow-hidden bg-gray-100 border border-purple-50/80 mb-4 cursor-pointer relative group/img">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" />
                            </div>

                            <!-- Title & Subtitle -->
                            <div class="mb-3">
                                <h3 wire:click="openQuickView({{ $product['id'] }})" class="font-bold text-[#1B2541] text-sm sm:text-base group-hover:text-vibrant-rose transition-colors leading-snug line-clamp-1 cursor-pointer">
                                    {{ $product['name'] }}
                                </h3>
                                <p class="text-[11px] text-gray-500 line-clamp-1 mt-1">
                                    {{ $product['subtitle'] ?? 'Dermatologist tested • Ultra gentle' }}
                                </p>
                            </div>

                            <!-- Formula Safety Tag -->
                            <div class="mb-4 inline-flex items-center gap-1.5 text-[11px] font-semibold text-[#6B57B2] bg-purple-50/70 px-2.5 py-1 rounded-lg w-full">
                                <i class="ri-shield-check-fill text-pastel-green"></i>
                                <span class="truncate">Dermatest Tested • pH 5.5 Balanced</span>
                            </div>
                        </div>

                        <!-- View Details Action Button (Full Width, Clean, No Price, No Add to Cart) -->
                        <div class="pt-3 border-t border-purple-50">
                            <button
                                wire:click="openQuickView({{ $product['id'] }})"
                                class="w-full py-2.5 sm:py-3 px-4 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold tracking-wide rounded-xl sm:rounded-2xl transition-all duration-300 shadow-sm hover:shadow-md active:scale-98 flex items-center justify-center gap-2 group/btn">
                                <span>View Details</span>
                                <i class="ri-arrow-right-line text-sm transition-transform duration-300 group-hover/btn:translate-x-1"></i>
                            </button>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-12 bg-white rounded-3xl p-8 border border-purple-100">
                        <i class="ri-inbox-line text-4xl text-gray-300"></i>
                        <p class="text-sm text-gray-600 mt-2 font-medium">No products found in this category.</p>
                        <button wire:click="setCategory('All')" class="mt-4 px-5 py-2 bg-[#6B57B2] text-white text-xs font-bold rounded-full">
                            View All Products
                        </button>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>
             <!-- A Baby's Voice Section (Clean Stitch Design as per Brand Theme) -->
        <section class="py-16 sm:py-20 lg:py-24 bg-white relative overflow-hidden">
            <!-- Subtle Ambient Brand Glows -->
            <div class="absolute -left-16 top-1/4 w-80 h-80 bg-soft-pink/30 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -right-16 bottom-1/4 w-80 h-80 bg-[#6B57B2]/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 lg:gap-16 items-center">

                    <!-- Left Side: Mascot Character Illustration -->
                    <div class="lg:col-span-5 flex items-center justify-center relative reveal-on-scroll-left">
                        <!-- Soft Ambient Glow behind Mascot -->
                        <div class="absolute w-72 h-72 sm:w-88 sm:h-88 bg-gradient-to-tr from-soft-pink/50 via-purple-100/40 to-soft-blue/40 rounded-full blur-2xl pointer-events-none -z-10"></div>

                        <img
                            src="/images/fabie_baby_character.png"
                            alt="I am a Fabie Baby"
                            class="w-full max-w-[320px] sm:max-w-[400px] lg:max-w-[460px] h-auto object-contain drop-shadow-sm hover:scale-102 transition-transform duration-500 ease-out" />
                    </div>

                    <!-- Right Side: Clean Stitch Story Card -->
                    <div class="lg:col-span-7 reveal-on-scroll-right">
                        <div class=" relative overflow-hidden space-y-6">

                            <!-- Card Header: Pill Badge + Decorative Quote -->
                            <div class="flex items-center justify-between">
                                <div class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold text-vibrant-rose bg-soft-pink tracking-wider uppercase">
                                    <i class="ri-heart-3-fill text-vibrant-rose"></i>
                                    <span>A Baby's Voice</span>
                                </div>
                                <i class="ri-double-quotes-r text-3xl text-purple-200/80"></i>
                            </div>

                            <!-- Main Headline -->
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#1B2541] tracking-tight leading-snug">
                                Pure Care for Delicate Skin
                            </h2>

                            <!-- Three Monologue Sentences in Clean Harmony -->
                            <div class="space-y-3.5 text-sm sm:text-base text-gray-600 leading-relaxed font-normal">
                                <p class="text-gray-800 text-base sm:text-lg font-medium leading-relaxed">
                                    “I still can’t tell you how I feel, but I can laugh, coo and cuddle when I am happy and cry when something is not right.”
                                </p>
                                <p class="leading-relaxed">
                                    My skin is delicate, <span class="font-bold text-[#1B2541]">five times thinner than yours</span>, and I need gentle care to feel safe and comfortable and warm.
                                </p>
                                <p class="text-[#6B57B2] font-semibold text-base leading-relaxed">
                                    This is why I want to feel Fabie, and feel satisfied and happy when I am bathed, cleaned and scented, when my skin is nourished, and when I do not have a rash.
                                </p>
                            </div>

                            <!-- Stitch Pill Badges -->
                            <div class="pt-3 border-t border-purple-50 flex flex-wrap items-center gap-2 sm:gap-3">
                                <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-full text-xs font-semibold text-gray-700 bg-[#F8F6FD] border border-purple-100/70 shadow-2xs">
                                    <i class="ri-shield-check-fill text-vibrant-rose text-sm"></i>
                                    <span>5x Thinner Skin Care</span>
                                </span>
                                <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-full text-xs font-semibold text-gray-700 bg-[#F8F6FD] border border-purple-100/70 shadow-2xs">
                                    <i class="ri-drop-fill text-[#6B57B2] text-sm"></i>
                                    <span>pH 5.5 Balanced</span>
                                </span>
                                <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-full text-xs font-semibold text-gray-700 bg-[#F8F6FD] border border-purple-100/70 shadow-2xs">
                                    <i class="ri-leaf-fill text-emerald-500 text-sm"></i>
                                    <span>0% Harsh Chemicals</span>
                                </span>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                                <a
                                    href="#products"
                                    class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold rounded-full shadow-sm hover:shadow-md transition-all active:scale-95 text-center">
                                    <span>Explore Gentle Essentials</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                                <a
                                    href="#about-us"
                                    class="inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-white hover:bg-purple-50 text-[#1B2541] border border-purple-200/80 text-xs sm:text-sm font-bold rounded-full shadow-2xs hover:shadow-xs transition-all active:scale-95 text-center">
                                    <span>Our Dubai Story</span>
                                    <i class="ri-heart-3-line text-[#6B57B2]"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- B2B & Wholesale Distribution Section -->
        <section id="b2b-products" class="py-16 sm:py-24 bg-gradient-to-b from-[#F8F6FD] via-white to-[#F8F6FD] relative overflow-hidden border-t border-purple-50">
            <!-- Ambient Brand Glows -->
            <div class="absolute -left-20 top-1/3 w-96 h-96 bg-purple-200/25 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -right-20 bottom-1/4 w-96 h-96 bg-pink-200/25 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 reveal-on-scroll">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold text-vibrant-rose bg-soft-pink tracking-wider uppercase shadow-2xs mb-3">
                        <i class="ri-building-4-fill text-vibrant-rose"></i>
                        <span>B2B & Global Distribution</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#1B2541] tracking-tight">
                        Wholesale & Institutional Baby Care
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base mt-3 leading-relaxed">
                        Partner with Fabie Baby for bulk supply, regional distribution rights, hospital maternity kits, and pharmacy retail networks worldwide.
                    </p>
                </div>

                <!-- 4 Core B2B Pillars -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    
                    <!-- Pillar 1: Retail & Supermarket Distribution -->
                    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-purple-100/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group reveal-on-scroll reveal-delay-1">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-[#6B57B2] group-hover:bg-[#6B57B2] group-hover:text-white transition-colors">
                                <i class="ri-store-3-line text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold font-heading text-[#1B2541]">
                                Retail & Supermarkets
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Barcoded, retail-ready shelf packaging with high consumer appeal, verified barcodes, and healthy distributor margins.
                            </p>
                        </div>
                        <div class="pt-5 mt-4 border-t border-purple-50">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#6B57B2]">
                                <i class="ri-checkbox-circle-fill text-pastel-green"></i> Tiered Volume Pricing
                            </span>
                        </div>
                    </div>

                    <!-- Pillar 2: Hospitals & Maternity Centers -->
                    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-purple-100/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group reveal-on-scroll reveal-delay-2">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center text-vibrant-rose group-hover:bg-vibrant-rose group-hover:text-white transition-colors">
                                <i class="ri-hospital-line text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold font-heading text-[#1B2541]">
                                Hospitals & Birthing Kits
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Pediatrician-approved newborn diapers, umbilical notch cuts, and 99.9% pure water wipes for neonatal care.
                            </p>
                        </div>
                        <div class="pt-5 mt-4 border-t border-purple-50">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-vibrant-rose">
                                <i class="ri-checkbox-circle-fill text-pastel-green"></i> Clinical-Grade Supply
                            </span>
                        </div>
                    </div>

                    <!-- Pillar 3: International Export & GCC Supply -->
                    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-purple-100/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group reveal-on-scroll reveal-delay-3">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-sky-500 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                                <i class="ri-global-line text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold font-heading text-[#1B2541]">
                                Global Export Network
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Dubai Municipality approved & GCC compliant with full certificate of analysis (COA) for rapid customs release.
                            </p>
                        </div>
                        <div class="pt-5 mt-4 border-t border-purple-50">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-sky-600">
                                <i class="ri-checkbox-circle-fill text-pastel-green"></i> Full Export Compliance
                            </span>
                        </div>
                    </div>

                    <!-- Pillar 4: Institutional & OEM Custom Bundling -->
                    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-purple-100/80 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group reveal-on-scroll reveal-delay-4">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-amber-50 flex items-center justify-center text-warm-peach group-hover:bg-warm-peach group-hover:text-white transition-colors">
                                <i class="ri-gift-2-line text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold font-heading text-[#1B2541]">
                                Custom Packs & Kits
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Corporate newborn gift packages, day-care bulk replenishment, and co-branded promotional baby care packs.
                            </p>
                        </div>
                        <div class="pt-5 mt-4 border-t border-purple-50">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-warm-peach">
                                <i class="ri-checkbox-circle-fill text-pastel-green"></i> Flexible MOQ Orders
                            </span>
                        </div>
                    </div>

                </div>

          

            </div>
        </section>

        <!-- About Us: Clean Brand Story Section -->
        <section id="about-us" class="py-16 sm:py-24 bg-white relative overflow-hidden border-t border-purple-50">
            <!-- Subtle Ambient Brand Glows -->
            <div class="absolute -right-16 top-1/4 w-80 h-80 bg-soft-pink/30 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -left-16 bottom-1/4 w-80 h-80 bg-[#6B57B2]/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
                    
                    <!-- Left Side: Lifestyle Mother & Baby Image -->
                    <div class="lg:col-span-6 relative reveal-on-scroll-left">
                        <div class="relative mx-auto max-w-md lg:max-w-none">
                            <!-- Soft Ambient Aura -->
                            <div class="absolute -inset-3 bg-gradient-to-tr from-soft-pink/50 via-purple-100/40 to-soft-blue/40 rounded-3xl blur-xl opacity-80 -z-10"></div>
                            
                            <!-- Main High-Res Image -->
                            <div class="rounded-3xl overflow-hidden shadow-md border-4 border-white">
                                <img 
                                    src="/images/slider2.jpg" 
                                    alt="Complete Baby Care Crafted in Dubai" 
                                    class="w-full h-[320px] sm:h-[400px] lg:h-[440px] object-cover hover:scale-103 transition-transform duration-700 ease-out"
                                />
                            </div>

                            <!-- Clean Floating Trust Tag -->
                            <div class="absolute -bottom-4 right-4 sm:right-6 bg-white/95 backdrop-blur-md px-4 py-2.5 rounded-2xl border border-purple-100 shadow-sm flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center text-[#6B57B2] font-bold text-sm">
                                    <i class="ri-shield-check-fill"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-[#1B2541]">Dubai Central Labs</p>
                                    <p class="text-[10px] text-gray-500">Tested & Certified Safe</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Clean Title, Concise Description & Two Buttons -->
                    <div class="lg:col-span-6 space-y-6 text-left reveal-on-scroll-right">
                        <!-- Eyebrow Tag -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold text-vibrant-rose bg-soft-pink tracking-wider uppercase shadow-2xs">
                            <i class="ri-heart-3-fill text-vibrant-rose"></i>
                            <span>About Fabie Baby</span>
                        </div>

                        <!-- Main Headline -->
                        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#1B2541] tracking-tight leading-tight">
                            Complete Baby Care, Crafted in Dubai with a Mother's Love
                        </h2>

                        <!-- Clean Description -->
                        <p class="text-gray-600 text-sm sm:text-base lg:text-lg leading-relaxed font-normal">
                            Researched and designed in Dubai under the guidance of seasoned pediatric experts, Fabie Baby is created with natural, safe ingredients that nourish, soothe, and protect. Our holistic approach provides the love, warmth, and peace of mind that babies and doting mothers deserve every single day.
                        </p>

                        <!-- Two Action Buttons -->
                        <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                            <a 
                                href="#products" 
                                class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold rounded-full shadow-sm hover:shadow-md transition-all active:scale-95"
                            >
                                <span>Explore Essentials</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                            <a 
                                href="#b2b-products" 
                                class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-white hover:bg-purple-50 text-[#1B2541] border border-purple-200/80 text-xs sm:text-sm font-bold rounded-full shadow-2xs hover:shadow-xs transition-all active:scale-95"
                            >
                                <span>Wholesale & B2B</span>
                                <i class="ri-building-4-line text-[#6B57B2]"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Brand Promises & Certified Quality Section -->
        <section id="brand-promises" class="py-16 sm:py-20 bg-white relative overflow-hidden border-t border-purple-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 reveal-on-scroll">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#6B57B2] bg-[#6B57B2]/10 px-4 py-1.5 rounded-full inline-block mb-2">
                        Our Quality Commitment
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-heading text-[#1B2541] mt-1">
                        The 6 Fabie Baby Brand Promises
                    </h2>
                    <p class="text-gray-500 text-xs sm:text-sm mt-2">
                        Formulated with natural, pure ingredients to soothe, nurture, and protect your baby's delicate skin at every stage.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- 1. Safe Ingredients -->
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group reveal-on-scroll reveal-delay-1">
                        <div>
                            <div class="w-16 h-16 sm:w-20 sm:h-20 mb-5 flex items-center justify-center group-hover:scale-105 transition-transform bg-white rounded-2xl p-2 border border-purple-100 shadow-2xs">
                                <img src="{{ asset('brand_promises/Safe Ingredients.jpg') }}" alt="Safe Ingredients" class="w-full h-full object-contain rounded-xl" />
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-2">
                                Safe Ingredients
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Time-tested organic botanical ingredients. Free from over 200 synthetic toxins, harsh parabens, and endocrine disruptors.
                            </p>
                        </div>
                    </div>

                    <!-- 2. Product Testing -->
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group reveal-on-scroll reveal-delay-2">
                        <div>
                            <div class="w-16 h-16 sm:w-20 sm:h-20 mb-5 flex items-center justify-center group-hover:scale-105 transition-transform bg-white rounded-2xl p-2 border border-purple-100 shadow-2xs">
                                <img src="{{ asset('brand_promises/Product Testing.png') }}" alt="Product Testing" class="w-full h-full object-contain rounded-xl" />
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-2">
                                Dubai Central Lab Tested
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Every batch is rigorously tested at the acclaimed Dubai Central Laboratory and approved by the Dubai Municipality for certified safety.
                            </p>
                        </div>
                    </div>

                    <!-- 3. pH 5.5 Neutral Balance -->
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group reveal-on-scroll reveal-delay-3">
                        <div>
                            <div class="w-16 h-16 sm:w-20 sm:h-20 mb-5 flex items-center justify-center group-hover:scale-105 transition-transform bg-white rounded-2xl p-2 border border-purple-100 shadow-2xs">
                                <img src="{{ asset('brand_promises/pH 5.5.jpg') }}" alt="pH 5.5" class="w-full h-full object-contain rounded-xl" />
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-2">
                                pH 5.5 Skin Balance
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Engineered precisely to pH 5.5 to shield baby's micro-acid mantle, preventing moisture loss and protecting against environmental redness.
                            </p>
                        </div>
                    </div>

                    <!-- 4. Hypoallergenic -->
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group reveal-on-scroll reveal-delay-4">
                        <div>
                            <div class="w-16 h-16 sm:w-20 sm:h-20 mb-5 flex items-center justify-center group-hover:scale-105 transition-transform bg-white rounded-2xl p-2 border border-purple-100 shadow-2xs">
                                <img src="{{ asset('brand_promises/Hypoallergenic.jpg') }}" alt="Hypoallergenic" class="w-full h-full object-contain rounded-xl" />
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-2">
                                Hypoallergenic Care
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Skin-compatible raw materials that gently soothe tender skin. Strict adherence to international pediatric standards at each stage.
                            </p>
                        </div>
                    </div>

                    <!-- 5. Eco-Friendly Packaging -->
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group reveal-on-scroll reveal-delay-5">
                        <div>
                            <div class="w-16 h-16 sm:w-20 sm:h-20 mb-5 flex items-center justify-center group-hover:scale-105 transition-transform bg-white rounded-2xl p-2 border border-purple-100 shadow-2xs">
                                <img src="{{ asset('brand_promises/Eco-Friendly.png') }}" alt="Eco-Friendly" class="w-full h-full object-contain rounded-xl" />
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-2">
                                Eco-Friendly & Gentle
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Committed to sustainable biodegradable materials and recyclable packaging. Cruelty-free with absolutely zero animal testing.
                            </p>
                        </div>
                    </div>

                    <!-- 6. Dedicated Parent Service -->
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group reveal-on-scroll reveal-delay-6">
                        <div>
                            <div class="w-16 h-16 sm:w-20 sm:h-20 mb-5 flex items-center justify-center group-hover:scale-105 transition-transform bg-white rounded-2xl p-2 border border-purple-100 shadow-2xs">
                                <img src="{{ asset('brand_promises/Service.png') }}" alt="Service" class="w-full h-full object-contain rounded-xl" />
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-2">
                                Dedicated Parent Care
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                Always here for parents. From sizing advice to fast replacements, we provide attentive guidance so you feel supported every day.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parent Reviews & Real Testimonials (3 Cards Visible at a Time Auto-Slider) -->
        <section
            x-data="{ 
            currentIndex: 0, 
            total: 6,
            timer: null, 
            perView: 3,
            updatePerView() {
                if (window.innerWidth < 768) {
                    this.perView = 1;
                } else if (window.innerWidth < 1024) {
                    this.perView = 2;
                } else {
                    this.perView = 3;
                }
            },
            init() {
                this.updatePerView();
                window.addEventListener('resize', () => this.updatePerView());
                this.start();
            },
            start() {
                this.timer = setInterval(() => this.next(), 4000);
            },
            stop() {
                clearInterval(this.timer);
            },
            next() {
                const maxIndex = this.total - this.perView;
                this.currentIndex = this.currentIndex >= maxIndex ? 0 : this.currentIndex + 1;
            },
            prev() {
                const maxIndex = this.total - this.perView;
                this.currentIndex = this.currentIndex <= 0 ? maxIndex : this.currentIndex - 1;
            },
            goTo(index) {
                const maxIndex = this.total - this.perView;
                this.currentIndex = Math.min(index, maxIndex);
            }
        }"
            x-init="init()"
            @mouseenter="stop()"
            @mouseleave="start()"
            class="py-16 sm:py-24 bg-gradient-to-b from-[#F4F7FC] via-white to-[#F4F7FC] relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-14 reveal-on-scroll">
                    <span class="text-xs font-bold uppercase tracking-wider text-vibrant-rose bg-soft-pink px-4 py-1.5 rounded-full inline-block mb-2">
                        Parent Stories
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-heading text-[#1B2541]">
                        Loved by 100,000+ Mothers
                    </h2>
                    <p class="text-gray-500 text-xs sm:text-sm mt-1">
                        Real, verified feedback from parents who trust Fabie Baby for gentle skin care.
                    </p>
                </div>

                <!-- 3-at-a-time Slider Track Container -->
                <div class="relative px-2 sm:px-4 reveal-on-scroll-scale">
                    <!-- Carousel Viewport -->
                    <div class="overflow-hidden py-4 -my-4">
                        <div
                            class="flex transition-transform duration-500 ease-out"
                            :style="`transform: translateX(-${currentIndex * (100 / perView)}%)`">
                            <!-- Card 1: Diapers -->
                            <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                                <div class="bg-white rounded-3xl p-6 sm:p-7 soft-card-shadow border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-lg transition-all duration-300">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="w-10 h-10 rounded-xl bg-soft-pink/70 text-vibrant-rose flex items-center justify-center text-lg">
                                                <i class="ri-double-quotes-l"></i>
                                            </div>
                                            <div class="flex text-amber-400 text-xs">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed italic">
                                            "We had non-stop diaper rash with other big brands. After switching to Fabie Baby pants, my 7-month-old hasn't had a single red spot. The 12-hour overnight absorption is incredible!"
                                        </p>
                                    </div>
                                    <div class="pt-4 mt-5 border-t border-purple-50 flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-soft-pink text-vibrant-rose font-bold flex items-center justify-center text-xs shrink-0">
                                            SL
                                        </div>
                                        <div class="text-left min-w-0">
                                            <h4 class="text-xs font-bold text-gray-900 flex items-center gap-1.5 truncate">
                                                <span>Sarah L.</span>
                                                <i class="ri-verified-badge-fill text-pastel-green text-xs" title="Verified Mother"></i>
                                            </h4>
                                            <p class="text-[11px] text-gray-400 truncate">Mother of 7-Month Baby • Diaper Pants</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Pure Water Wipes -->
                            <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                                <div class="bg-white rounded-3xl p-6 sm:p-7 soft-card-shadow border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-lg transition-all duration-300">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="w-10 h-10 rounded-xl bg-soft-blue/70 text-sky-blue flex items-center justify-center text-lg">
                                                <i class="ri-double-quotes-l"></i>
                                            </div>
                                            <div class="flex text-amber-400 text-xs">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed italic">
                                            "The 99.9% pure water wipes are truly fragrance-free, extra thick, and leave no sticky chemical film. I use them for face, hands, and diaper changes with complete peace of mind."
                                        </p>
                                    </div>
                                    <div class="pt-4 mt-5 border-t border-purple-50 flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-soft-blue text-sky-blue font-bold flex items-center justify-center text-xs shrink-0">
                                            MK
                                        </div>
                                        <div class="text-left min-w-0">
                                            <h4 class="text-xs font-bold text-gray-900 flex items-center gap-1.5 truncate">
                                                <span>Mariam K.</span>
                                                <i class="ri-verified-badge-fill text-pastel-green text-xs" title="Verified Mother"></i>
                                            </h4>
                                            <p class="text-[11px] text-gray-400 truncate">Mother of Twins • Water Wipes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3: Organic Lotion -->
                            <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                                <div class="bg-white rounded-3xl p-6 sm:p-7 soft-card-shadow border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-lg transition-all duration-300">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="w-10 h-10 rounded-xl bg-[#6B57B2]/15 text-[#6B57B2] flex items-center justify-center text-lg">
                                                <i class="ri-double-quotes-l"></i>
                                            </div>
                                            <div class="flex text-amber-400 text-xs">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed italic">
                                            "The organic hydrating lotion calmed my baby's dry patches within two days! It absorbs quickly without any greasiness. Knowing it's pH 5.5 tested makes all the difference."
                                        </p>
                                    </div>
                                    <div class="pt-4 mt-5 border-t border-purple-50 flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#6B57B2]/10 text-[#6B57B2] font-bold flex items-center justify-center text-xs shrink-0">
                                            PR
                                        </div>
                                        <div class="text-left min-w-0">
                                            <h4 class="text-xs font-bold text-gray-900 flex items-center gap-1.5 truncate">
                                                <span>Pooja R.</span>
                                                <i class="ri-verified-badge-fill text-pastel-green text-xs" title="Verified Mother"></i>
                                            </h4>
                                            <p class="text-[11px] text-gray-400 truncate">Mother of 18-Month Toddler • Lotion</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4: Pediatrician Specialist -->
                            <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                                <div class="bg-white rounded-3xl p-6 sm:p-7 soft-card-shadow border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-lg transition-all duration-300">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="w-10 h-10 rounded-xl bg-soft-green/70 text-pastel-green flex items-center justify-center text-lg">
                                                <i class="ri-double-quotes-l"></i>
                                            </div>
                                            <div class="flex text-amber-400 text-xs">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed italic">
                                            "As a pediatrician and mother, I carefully scrutinize baby skin ingredients. Fabie Baby's zero-chemical guarantee and Dubai lab certification make them my top recommendation."
                                        </p>
                                    </div>
                                    <div class="pt-4 mt-5 border-t border-purple-50 flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-soft-green text-pastel-green font-bold flex items-center justify-center text-xs shrink-0">
                                            DR
                                        </div>
                                        <div class="text-left min-w-0">
                                            <h4 class="text-xs font-bold text-gray-900 flex items-center gap-1.5 truncate">
                                                <span>Dr. Emily C.</span>
                                                <i class="ri-verified-badge-fill text-pastel-green text-xs" title="Pediatric Specialist"></i>
                                            </h4>
                                            <p class="text-[11px] text-gray-400 truncate">Pediatric Skin Specialist & Mother</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5: Baby Wash -->
                            <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                                <div class="bg-white rounded-3xl p-6 sm:p-7 soft-card-shadow border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-lg transition-all duration-300">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="w-10 h-10 rounded-xl bg-warm-peach/20 text-warm-peach flex items-center justify-center text-lg">
                                                <i class="ri-double-quotes-l"></i>
                                            </div>
                                            <div class="flex text-amber-400 text-xs">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed italic">
                                            "Bath time used to be tears every evening. Fabie Baby's shampoo & wash is completely tear-free, lathers softly, and leaves baby's fine hair silky without drying tender skin."
                                        </p>
                                    </div>
                                    <div class="pt-4 mt-5 border-t border-purple-50 flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-soft-orange text-warm-peach font-bold flex items-center justify-center text-xs shrink-0">
                                            JT
                                        </div>
                                        <div class="text-left min-w-0">
                                            <h4 class="text-xs font-bold text-gray-900 flex items-center gap-1.5 truncate">
                                                <span>Jessica T.</span>
                                                <i class="ri-verified-badge-fill text-pastel-green text-xs" title="Verified Mother"></i>
                                            </h4>
                                            <p class="text-[11px] text-gray-400 truncate">Mother of 4-Month Baby • Gentle Wash</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 6: Overnight Dryness -->
                            <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                                <div class="bg-white rounded-3xl p-6 sm:p-7 soft-card-shadow border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-lg transition-all duration-300">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="w-10 h-10 rounded-xl bg-soft-pink/70 text-vibrant-rose flex items-center justify-center text-lg">
                                                <i class="ri-double-quotes-l"></i>
                                            </div>
                                            <div class="flex text-amber-400 text-xs">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed italic">
                                            "No midnight wakeups for diaper leaks anymore! The 360° stretchy waistband fits snugly without leaving any red elastic marks on baby's tummy. Best diaper pants on the market!"
                                        </p>
                                    </div>
                                    <div class="pt-4 mt-5 border-t border-purple-50 flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-soft-pink text-vibrant-rose font-bold flex items-center justify-center text-xs shrink-0">
                                            AS
                                        </div>
                                        <div class="text-left min-w-0">
                                            <h4 class="text-xs font-bold text-gray-900 flex items-center gap-1.5 truncate">
                                                <span>Ananya S.</span>
                                                <i class="ri-verified-badge-fill text-pastel-green text-xs" title="Verified Mother"></i>
                                            </h4>
                                            <p class="text-[11px] text-gray-400 truncate">Mother of 1-Year Old • Overnight Pants</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Arrow Buttons (Hidden on mobile screens to prevent card overlap) -->
                    <button
                        @click="prev()"
                        class="hidden sm:flex absolute -left-2 sm:-left-4 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white shadow-md border border-purple-100 text-gray-700 hover:text-white hover:bg-vibrant-rose items-center justify-center transition-all z-20 focus:outline-none cursor-pointer"
                        aria-label="Previous testimonials">
                        <i class="ri-arrow-left-s-line text-xl"></i>
                    </button>
                    <button
                        @click="next()"
                        class="hidden sm:flex absolute -right-2 sm:-right-4 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white shadow-md border border-purple-100 text-gray-700 hover:text-white hover:bg-vibrant-rose items-center justify-center transition-all z-20 focus:outline-none cursor-pointer"
                        aria-label="Next testimonials">
                        <i class="ri-arrow-right-s-line text-xl"></i>
                    </button>
                </div>

                <!-- Auto-Slider Progress Dots -->
                <div class="flex items-center justify-center gap-2 mt-8">
                    <template x-for="i in (total - perView + 1)" :key="i">
                        <button
                            @click="goTo(i - 1)"
                            :class="currentIndex === (i - 1) ? 'w-8 bg-vibrant-rose' : 'w-2.5 bg-gray-300 hover:bg-gray-400'"
                            class="h-2.5 rounded-full transition-all duration-300 focus:outline-none cursor-pointer"
                            :title="'Slide ' + i"></button>
                    </template>
                </div>
            </div>
        </section>

        <!-- Clean & Attractive FAQ Section (At Last Before Footer) -->
        <section id="faq" class="py-16 sm:py-24 bg-[#F8F6FD]/60 relative overflow-hidden border-t border-purple-100/70">
            <!-- Subtle Ambient Background Glows -->
            <div class="absolute -left-20 top-1/4 w-80 h-80 bg-soft-pink/30 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -right-20 bottom-1/4 w-80 h-80 bg-purple-100/40 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 reveal-on-scroll">
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#6B57B2] bg-white px-4 py-1.5 rounded-full border border-purple-100 shadow-2xs uppercase tracking-wider mb-3">
                        <i class="ri-questionnaire-line text-vibrant-rose"></i>
                        <span>Got Questions? We Have Answers</span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#1B2541] tracking-tight">
                        Frequently Asked Questions
                    </h2>
                    <p class="text-gray-500 text-xs sm:text-sm md:text-base mt-3 leading-relaxed">
                        Learn more about our pediatric skin safety, Dubai-formulated baby essentials, and wholesale supply.
                    </p>
                </div>

                <!-- Interactive Accordion Container (Alpine.js) -->
                <div x-data="{ activeAccordion: 1 }" class="space-y-4">
                    
                    <!-- Item 1: Newborn Safety -->
                    <div 
                        class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden reveal-on-scroll reveal-delay-1"
                        :class="activeAccordion === 1 ? 'border-purple-300 shadow-md ring-1 ring-purple-100' : 'border-purple-100/80 hover:border-purple-200 shadow-2xs'"
                    >
                        <button 
                            @click="activeAccordion = (activeAccordion === 1 ? null : 1)"
                            type="button"
                            class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                        >
                            <div class="flex items-center gap-3.5 sm:gap-4">
                                <div class="w-10 h-10 rounded-2xl flex items-center justify-center shrink-0 transition-colors"
                                    :class="activeAccordion === 1 ? 'bg-soft-pink text-vibrant-rose' : 'bg-purple-50 text-[#6B57B2]'">
                                    <i class="ri-shield-heart-line text-lg"></i>
                                </div>
                                <h3 class="text-sm sm:text-base lg:text-lg font-bold text-[#1B2541]">
                                    Are Fabie Baby products safe for newborn and sensitive skin?
                                </h3>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300"
                                :class="activeAccordion === 1 ? 'rotate-180 bg-purple-50 text-[#6B57B2]' : 'text-gray-400 bg-gray-50'">
                                <i class="ri-arrow-down-s-line text-xl"></i>
                            </div>
                        </button>
                        <div 
                            x-show="activeAccordion === 1"
                            x-transition:enter="transition ease-out duration-250"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-cloak
                            class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50/80"
                        >
                            <p>
                                Yes, absolutely. Every Fabie Baby formulation is pediatrician-guided, hypoallergenic, and dermatologically tested to maintain a natural pH of 5.5. We strictly omit parabens, sulphates, artificial dyes, phthalates, and harsh chemicals, making our products safe from day one.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2: Dubai Heritage & Testing -->
                    <div 
                        class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden reveal-on-scroll reveal-delay-2"
                        :class="activeAccordion === 2 ? 'border-purple-300 shadow-md ring-1 ring-purple-100' : 'border-purple-100/80 hover:border-purple-200 shadow-2xs'"
                    >
                        <button 
                            @click="activeAccordion = (activeAccordion === 2 ? null : 2)"
                            type="button"
                            class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                        >
                            <div class="flex items-center gap-3.5 sm:gap-4">
                                <div class="w-10 h-10 rounded-2xl flex items-center justify-center shrink-0 transition-colors"
                                    :class="activeAccordion === 2 ? 'bg-soft-pink text-vibrant-rose' : 'bg-purple-50 text-[#6B57B2]'">
                                    <i class="ri-map-pin-2-line text-lg"></i>
                                </div>
                                <h3 class="text-sm sm:text-base lg:text-lg font-bold text-[#1B2541]">
                                    Where are Fabie Baby products formulated and certified?
                                </h3>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300"
                                :class="activeAccordion === 2 ? 'rotate-180 bg-purple-50 text-[#6B57B2]' : 'text-gray-400 bg-gray-50'">
                                <i class="ri-arrow-down-s-line text-xl"></i>
                            </div>
                        </button>
                        <div 
                            x-show="activeAccordion === 2"
                            x-transition:enter="transition ease-out duration-250"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-cloak
                            class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50/80"
                        >
                            <p>
                                Fabie Baby is proudly researched and designed in Dubai under the guidance of seasoned pediatric experts and cosmetic scientists. Our range complies with Dubai Central Laboratory standards, UAE municipality regulations, and international export criteria, ensuring unmatched safety benchmarks.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3: Diapers Dryness & Leak Protection -->
                    <div 
                        class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden reveal-on-scroll reveal-delay-3"
                        :class="activeAccordion === 3 ? 'border-purple-300 shadow-md ring-1 ring-purple-100' : 'border-purple-100/80 hover:border-purple-200 shadow-2xs'"
                    >
                        <button 
                            @click="activeAccordion = (activeAccordion === 3 ? null : 3)"
                            type="button"
                            class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                        >
                            <div class="flex items-center gap-3.5 sm:gap-4">
                                <div class="w-10 h-10 rounded-2xl flex items-center justify-center shrink-0 transition-colors"
                                    :class="activeAccordion === 3 ? 'bg-soft-pink text-vibrant-rose' : 'bg-purple-50 text-[#6B57B2]'">
                                    <i class="ri-water-flash-line text-lg"></i>
                                </div>
                                <h3 class="text-sm sm:text-base lg:text-lg font-bold text-[#1B2541]">
                                    What makes Fabie Baby diapers rash-free and leak-proof?
                                </h3>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300"
                                :class="activeAccordion === 3 ? 'rotate-180 bg-purple-50 text-[#6B57B2]' : 'text-gray-400 bg-gray-50'">
                                <i class="ri-arrow-down-s-line text-xl"></i>
                            </div>
                        </button>
                        <div 
                            x-show="activeAccordion === 3"
                            x-transition:enter="transition ease-out duration-250"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-cloak
                            class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50/80"
                        >
                            <p>
                                Our diapers feature a premium Japanese SAP absorbent core offering up to 12 hours of overnight dryness. With microscopic breathable air channels, dual leak guards, and a soft 360° cloud waistband, they eliminate friction and prevent skin rashes before they start.
                            </p>
                        </div>
                    </div>

                    <!-- Item 4: Wet Wipes Formula -->
                    <div 
                        class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden reveal-on-scroll reveal-delay-4"
                        :class="activeAccordion === 4 ? 'border-purple-300 shadow-md ring-1 ring-purple-100' : 'border-purple-100/80 hover:border-purple-200 shadow-2xs'"
                    >
                        <button 
                            @click="activeAccordion = (activeAccordion === 4 ? null : 4)"
                            type="button"
                            class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                        >
                            <div class="flex items-center gap-3.5 sm:gap-4">
                                <div class="w-10 h-10 rounded-2xl flex items-center justify-center shrink-0 transition-colors"
                                    :class="activeAccordion === 4 ? 'bg-soft-pink text-vibrant-rose' : 'bg-purple-50 text-[#6B57B2]'">
                                    <i class="ri-sparkling-line text-lg"></i>
                                </div>
                                <h3 class="text-sm sm:text-base lg:text-lg font-bold text-[#1B2541]">
                                    What are the ingredients in Fabie Baby wet wipes?
                                </h3>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300"
                                :class="activeAccordion === 4 ? 'rotate-180 bg-purple-50 text-[#6B57B2]' : 'text-gray-400 bg-gray-50'">
                                <i class="ri-arrow-down-s-line text-xl"></i>
                            </div>
                        </button>
                        <div 
                            x-show="activeAccordion === 4"
                            x-transition:enter="transition ease-out duration-250"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-cloak
                            class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50/80"
                        >
                            <p>
                                Fabie Baby wipes are soaked in 99.9% EDI ultra-pure pharmaceutical water, enriched with organic aloe vera and soothing vitamin E. They are 100% alcohol-free, fragrance-free, and crafted on extra-thick, pearl-embossed fabric for an effortless, tear-free clean.
                            </p>
                        </div>
                    </div>

                    <!-- Item 5: Wholesale & B2B Inquiries -->
                    <div 
                        class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden reveal-on-scroll reveal-delay-5"
                        :class="activeAccordion === 5 ? 'border-purple-300 shadow-md ring-1 ring-purple-100' : 'border-purple-100/80 hover:border-purple-200 shadow-2xs'"
                    >
                        <button 
                            @click="activeAccordion = (activeAccordion === 5 ? null : 5)"
                            type="button"
                            class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                        >
                            <div class="flex items-center gap-3.5 sm:gap-4">
                                <div class="w-10 h-10 rounded-2xl flex items-center justify-center shrink-0 transition-colors"
                                    :class="activeAccordion === 5 ? 'bg-soft-pink text-vibrant-rose' : 'bg-purple-50 text-[#6B57B2]'">
                                    <i class="ri-building-4-line text-lg"></i>
                                </div>
                                <h3 class="text-sm sm:text-base lg:text-lg font-bold text-[#1B2541]">
                                    Do you support B2B wholesale, hospital supply, and global export?
                                </h3>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300"
                                :class="activeAccordion === 5 ? 'rotate-180 bg-purple-50 text-[#6B57B2]' : 'text-gray-400 bg-gray-50'">
                                <i class="ri-arrow-down-s-line text-xl"></i>
                            </div>
                        </button>
                        <div 
                            x-show="activeAccordion === 5"
                            x-transition:enter="transition ease-out duration-250"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-cloak
                            class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50/80"
                        >
                            <p>
                                Yes, we partner with retail supermarket chains, pharmacy distributors, hospitals, and maternity centers worldwide. We offer flexible tiered volume pricing, full export compliance documentation (COA), and customized baby bundle kits. Contact our trade desk via the B2B Wholesale section above.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Still Have Questions Clean Banner -->
                <div class="mt-12 sm:mt-16 bg-white rounded-3xl p-6 sm:p-8 border border-purple-100 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left reveal-on-scroll">
                    <div class="flex flex-col sm:flex-row items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-soft-pink text-vibrant-rose flex items-center justify-center text-2xl shrink-0">
                            <i class="ri-customer-service-2-line"></i>
                        </div>
                        <div>
                            <h4 class="text-base sm:text-lg font-bold text-[#1B2541]">Still have questions?</h4>
                            <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Our mother & baby care team is here to assist you anytime.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 shrink-0">
                        <a 
                            href="#contact" 
                            class="inline-flex items-center gap-2 px-6 py-3 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold rounded-full shadow-2xs hover:shadow-sm transition-all"
                        >
                            <i class="ri-mail-send-line"></i>
                            <span>Contact Us</span>
                        </a>
                        <a 
                            href="#b2b-products" 
                            class="inline-flex items-center gap-2 px-5 py-3 bg-purple-50 hover:bg-purple-100 text-[#6B57B2] text-xs sm:text-sm font-bold rounded-full transition-all"
                        >
                            <span>B2B Inquiries</span>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Quick View Modal Popup -->
        @if($selectedProduct)
        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div wire:click="closeQuickView" class="fixed inset-0 bg-gray-900/60 backdrop-blur-xs transition-opacity"></div>

                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full border border-purple-100">
                    <div class="p-6 relative">
                        <button wire:click="closeQuickView" class="absolute top-4 right-4 p-2 text-gray-400 hover:text-gray-700 rounded-full hover:bg-gray-100">
                            <i class="ri-close-line text-xl"></i>
                        </button>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                            <div class="rounded-2xl overflow-hidden flex items-center justify-center h-52 sm:h-64 bg-gray-100">
                                <img src="{{ $selectedProduct['image'] }}" alt="{{ $selectedProduct['name'] }}" class="w-full h-full object-cover" />
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold {{ $selectedProduct['badgeColor'] ?? 'bg-soft-pink text-vibrant-rose' }}">
                                        {{ $selectedProduct['badge'] ?? 'Gentle Care' }}
                                    </span>
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">
                                        {{ $selectedProduct['category'] ?? '' }}
                                    </span>
                                </div>
                                <h3 class="text-base sm:text-lg font-bold text-gray-900 leading-snug">{{ $selectedProduct['name'] }}</h3>

                                <div class="flex items-center gap-1.5 text-amber-400 text-xs">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <span class="text-gray-500 font-semibold text-[11px] ml-1">{{ $selectedProduct['rating'] ?? '4.9' }} ({{ $selectedProduct['reviewsCount'] ?? '85' }} reviews)</span>
                                </div>

                                <p class="text-xs text-gray-600 leading-relaxed">{{ $selectedProduct['description'] }}</p>

                                <!-- Formula & Safety Badges -->
                                <div class="grid grid-cols-2 gap-2 pt-1">
                                    <div class="p-2 rounded-xl bg-purple-50/60 border border-purple-100 flex items-center gap-2">
                                        <i class="ri-shield-check-fill text-pastel-green text-sm"></i>
                                        <span class="text-[10px] font-bold text-gray-700">pH 5.5 Balanced</span>
                                    </div>
                                    <div class="p-2 rounded-xl bg-purple-50/60 border border-purple-100 flex items-center gap-2">
                                        <i class="ri-plant-fill text-soft-purple text-sm"></i>
                                        <span class="text-[10px] font-bold text-gray-700">0% Harsh Chemicals</span>
                                    </div>
                                </div>

                                @if(!empty($selectedProduct['sizes']))
                                <div class="pt-1">
                                    <span class="text-[11px] font-bold text-gray-700 block mb-1">Available Sizes / Options:</span>
                                    <div class="flex flex-wrap gap-1.5">
                                        @foreach($selectedProduct['sizes'] as $size)
                                        <span class="px-2.5 py-1 rounded-lg text-[10px] font-semibold bg-gray-100 text-gray-700 border border-purple-50">
                                            {{ $size }}
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                                @endif

                                <div class="pt-2 flex flex-col sm:flex-row gap-2">
                                    <a
                                        href="#contact"
                                        wire:click="closeQuickView"
                                        class="flex-1 py-2.5 px-4 bg-vibrant-rose hover:bg-pink-600 text-white text-xs font-bold rounded-full shadow-sm hover:shadow-md transition-all flex items-center justify-center gap-2 text-center">
                                        <i class="ri-customer-service-2-line"></i> Inquire / Contact Us
                                    </a>
                                    <button
                                        wire:click="closeQuickView"
                                        class="py-2.5 px-4 border border-purple-200 text-gray-600 hover:bg-gray-50 text-xs font-bold rounded-full transition-colors">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
</div>