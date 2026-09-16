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
                    <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-soft-green/30 transition-colors">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-soft-green flex items-center justify-center text-pastel-green shrink-0">
                            <i class="ri-plant-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Safe & Gentle</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">0% Harsh Chemicals</p>
                        </div>
                    </div>

                    <!-- Item 2: Dermatologically Tested -->
                    <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-soft-blue/40 transition-colors">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-soft-blue flex items-center justify-center text-sky-blue shrink-0">
                            <i class="ri-drop-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Dermatologist Tested</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">5-Star Sensitive Rating</p>
                        </div>
                    </div>

                    <!-- Item 3: Pediatrician Recommended -->
                    <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-purple-50 transition-colors">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-[#6B57B2]/10 flex items-center justify-center text-[#6B57B2] shrink-0">
                            <i class="ri-user-smile-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Pediatrician Approved</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">Trusted by Doctors</p>
                        </div>
                    </div>

                    <!-- Item 4: Dubai Lab Certified -->
                    <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-soft-pink/40 transition-colors">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-soft-pink flex items-center justify-center text-vibrant-rose shrink-0">
                            <i class="ri-shield-check-line text-xl sm:text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Dubai Lab Tested</h4>
                            <p class="text-[11px] text-gray-500 mt-0.5">Dubai Municipality Approved</p>
                        </div>
                    </div>

                    <!-- Item 5: pH 5.5 Balanced -->
                    <div class="col-span-2 md:col-span-1 flex items-center justify-center sm:justify-start gap-3 p-3 rounded-2xl hover:bg-soft-orange/40 transition-colors">
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


        <!-- Brand Manifesto Section ("Cheer For Dreams" - Brand Color Themed) -->


        <!-- A Baby's Voice Section (Clean Stitch Design as per Brand Theme) -->
        <section class="py-16 sm:py-20 lg:py-24 bg-white relative overflow-hidden">
            <!-- Subtle Ambient Brand Glows -->
            <div class="absolute -left-16 top-1/4 w-80 h-80 bg-soft-pink/30 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -right-16 bottom-1/4 w-80 h-80 bg-[#6B57B2]/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 lg:gap-16 items-center">

                    <!-- Left Side: Mascot Character Illustration -->
                    <div class="lg:col-span-5 flex items-center justify-center relative">
                        <!-- Soft Ambient Glow behind Mascot -->
                        <div class="absolute w-72 h-72 sm:w-88 sm:h-88 bg-gradient-to-tr from-soft-pink/50 via-purple-100/40 to-soft-blue/40 rounded-full blur-2xl pointer-events-none -z-10"></div>

                        <img
                            src="/images/fabie_baby_character.png"
                            alt="I am a Fabie Baby"
                            class="w-full max-w-[320px] sm:max-w-[400px] lg:max-w-[460px] h-auto object-contain drop-shadow-sm hover:scale-102 transition-transform duration-500 ease-out" />
                    </div>

                    <!-- Right Side: Clean Stitch Story Card -->
                    <div class="lg:col-span-7">
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
                            <div class="pt-2 flex flex-wrap items-center gap-3">
                                <a
                                    href="#products"
                                    class="inline-flex items-center gap-2 px-7 py-3.5 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold rounded-full shadow-sm hover:shadow-md transition-all active:scale-95">
                                    <span>Explore Gentle Essentials</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                                <a
                                    href="#size-calculator"
                                    class="inline-flex items-center gap-2 px-6 py-3.5 bg-white hover:bg-purple-50 text-[#1B2541] border border-purple-200/80 text-xs sm:text-sm font-bold rounded-full shadow-2xs hover:shadow-xs transition-all active:scale-95">
                                    <span>Diaper Size Calculator</span>
                                    <i class="ri-calculator-line text-gray-400"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

           <section class="bg-gradient-to-b from-[#F8F6FD] via-white to-[#F8F6FD] py-16 sm:py-20 text-center relative overflow-hidden border-b border-purple-100/70">
            <!-- Subtle Ambient Brand Tint -->
            <div class="absolute -left-16 top-1/2 -translate-y-1/2 w-64 h-64 bg-soft-pink/40 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -right-16 top-1/2 -translate-y-1/2 w-64 h-64 bg-[#6B57B2]/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5 relative z-10">
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
                <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-14">
                    <span class="text-xs font-bold uppercase tracking-wider text-vibrant-rose bg-soft-pink px-4 py-1.5 rounded-full inline-block">
                        Curated Product Range
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-heading text-[#1B2541] mt-3">
                        Designed for Every Stage of Joy
                    </h2>
                    <p class="text-gray-500 text-xs sm:text-sm mt-2">
                        Ultra-gentle formulations designed to support your baby’s delicate skin from day one.
                    </p>

                    <!-- Category Interactive Filter Pills -->
                    <div class="flex flex-wrap items-center justify-center gap-2 mt-6">
                        <button
                            wire:click="setCategory('All')"
                            class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ $activeCategory === 'All' ? 'bg-[#6B57B2] text-white shadow-md' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            All Essentials
                        </button>
                        <button
                            wire:click="setCategory('Diapers')"
                            class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ $activeCategory === 'Diapers' ? 'bg-[#6B57B2] text-white shadow-md' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            Diapers & Pants
                        </button>
                        <button
                            wire:click="setCategory('Wipes')"
                            class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ $activeCategory === 'Wipes' ? 'bg-[#6B57B2] text-white shadow-md' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            Baby Wipes
                        </button>
                        <button
                            wire:click="setCategory('Skincare')"
                            class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ $activeCategory === 'Skincare' ? 'bg-[#6B57B2] text-white shadow-md' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            Organic Skincare
                        </button>
                        <button
                            wire:click="setCategory('Bath')"
                            class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ $activeCategory === 'Bath' ? 'bg-[#6B57B2] text-white shadow-md' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            Bath & Body
                        </button>
                    </div>
                </div>

                <!-- Responsive Category Visual Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
                    <!-- Card 1: Diapers & Pants -->
                    <div
                        wire:click="setCategory('Diapers')"
                        class="relative h-64 sm:h-72 rounded-3xl overflow-hidden group cursor-pointer shadow-xs hover:shadow-xl transition-all duration-300 border border-purple-100/50">
                        <img src="/images/cat_diapers.jpg" alt="Diapers & Pants" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-transparent flex flex-col justify-end p-6">
                            <span class="text-[11px] font-bold text-warm-peach uppercase tracking-widest">12H Leak-Proof Dryness</span>
                            <h3 class="text-xl sm:text-2xl font-black text-white uppercase tracking-wider mt-1 drop-shadow-sm">
                                Diapers & Pants
                            </h3>
                            <div class="flex items-center gap-1 text-white/90 text-xs font-semibold mt-2 group-hover:text-vibrant-rose transition-colors">
                                <span>Explore collection</span>
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Pure Water Wipes -->
                    <div
                        wire:click="setCategory('Wipes')"
                        class="relative h-64 sm:h-72 rounded-3xl overflow-hidden group cursor-pointer shadow-xs hover:shadow-xl transition-all duration-300 border border-purple-100/50">
                        <img src="/images/cat_wipes.jpg" alt="Wet Wipes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-transparent flex flex-col justify-end p-6">
                            <span class="text-[11px] font-bold text-sky-blue uppercase tracking-widest">99.9% EDI Pure Water</span>
                            <h3 class="text-xl sm:text-2xl font-black text-white uppercase tracking-wider mt-1 drop-shadow-sm">
                                Gentle Water Wipes
                            </h3>
                            <div class="flex items-center gap-1 text-white/90 text-xs font-semibold mt-2 group-hover:text-vibrant-rose transition-colors">
                                <span>Explore collection</span>
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Body & Bath Care -->
                    <div
                        wire:click="setCategory('Bath')"
                        class="relative h-64 sm:h-72 rounded-3xl overflow-hidden group cursor-pointer shadow-xs hover:shadow-xl transition-all duration-300 border border-purple-100/50">
                        <img src="/images/cat_bodycare.jpg" alt="Body Care" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-transparent flex flex-col justify-end p-6">
                            <span class="text-[11px] font-bold text-pastel-green uppercase tracking-widest">Tear-Free & Nourishing</span>
                            <h3 class="text-xl sm:text-2xl font-black text-white uppercase tracking-wider mt-1 drop-shadow-sm">
                                Bath & Body Care
                            </h3>
                            <div class="flex items-center gap-1 text-white/90 text-xs font-semibold mt-2 group-hover:text-vibrant-rose transition-colors">
                                <span>Explore collection</span>
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Organic Skincare -->
                    <div
                        wire:click="setCategory('Skincare')"
                        class="relative h-60 sm:h-64 rounded-3xl overflow-hidden group cursor-pointer shadow-xs hover:shadow-xl transition-all duration-300 border border-purple-100/50">
                        <img src="/images/lotion.jpg" alt="Skincare" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-transparent flex flex-col justify-end p-6">
                            <span class="text-[11px] font-bold text-soft-pink uppercase tracking-widest">Chamomile & Oat</span>
                            <h3 class="text-lg sm:text-xl font-black text-white uppercase tracking-wider mt-1 drop-shadow-sm">
                                Organic Skincare
                            </h3>
                            <div class="flex items-center gap-1 text-white/90 text-xs font-semibold mt-2 group-hover:text-vibrant-rose transition-colors">
                                <span>Explore collection</span>
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Safe Cleaning -->
                    <div
                        wire:click="setCategory('Bath')"
                        class="relative h-60 sm:h-64 rounded-3xl overflow-hidden group cursor-pointer shadow-xs hover:shadow-xl transition-all duration-300 border border-purple-100/50">
                        <img src="/images/cat_cleaning.jpg" alt="Cleaning" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-transparent flex flex-col justify-end p-6">
                            <span class="text-[11px] font-bold text-sky-blue uppercase tracking-widest">Plant-Based Hygiene</span>
                            <h3 class="text-lg sm:text-xl font-black text-white uppercase tracking-wider mt-1 drop-shadow-sm">
                                Baby Safe Cleaning
                            </h3>
                            <div class="flex items-center gap-1 text-white/90 text-xs font-semibold mt-2 group-hover:text-vibrant-rose transition-colors">
                                <span>Explore collection</span>
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: Feeding & Accessories -->
                    <div
                        wire:click="setCategory('Skincare')"
                        class="relative h-60 sm:h-64 rounded-3xl overflow-hidden group cursor-pointer shadow-xs hover:shadow-xl transition-all duration-300 border border-purple-100/50">
                        <img src="/images/cat_feeding.jpg" alt="Feeding" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-transparent flex flex-col justify-end p-6">
                            <span class="text-[11px] font-bold text-warm-peach uppercase tracking-widest">BPA-Free Essentials</span>
                            <h3 class="text-lg sm:text-xl font-black text-white uppercase tracking-wider mt-1 drop-shadow-sm">
                                Feeding & Accessories
                            </h3>
                            <div class="flex items-center gap-1 text-white/90 text-xs font-semibold mt-2 group-hover:text-vibrant-rose transition-colors">
                                <span>Explore collection</span>
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Featured Collection Grid Section (Clean, Modern & Responsive) -->
        <section class="py-16 sm:py-20 bg-[#F4F7FC] border-t border-purple-100/60 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 sm:mb-12 gap-4">
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
                    <div class="bg-white rounded-3xl p-5 sm:p-6 soft-card-shadow card-hover-effect border border-purple-100/70 flex flex-col justify-between group relative overflow-hidden">
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

                            <!-- Product Image Container -->
                            <div wire:click="openQuickView({{ $product['id'] }})" class="w-full h-52 sm:h-56 rounded-2xl overflow-hidden bg-gradient-to-b from-[#F8F6FD]/60 to-white border border-purple-50 flex items-center justify-center mb-4 cursor-pointer p-4">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-contain group-hover:scale-108 transition-transform duration-500 ease-out" />
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

        <!-- Interactive Diaper Size & Care Calculator Widget -->
        <section id="size-calculator" class="py-16 sm:py-20 bg-white relative overflow-hidden">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gradient-to-br from-[#F8F6FD] via-white to-soft-pink/30 rounded-3xl p-6 sm:p-12 border border-purple-100/90 shadow-sm relative">
                    <div class="text-center max-w-xl mx-auto mb-8 sm:mb-10">
                        <span class="text-xs font-bold uppercase tracking-wider text-vibrant-rose bg-soft-pink px-4 py-1.5 rounded-full inline-block mb-2">
                            Parent Helper Tool
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-bold font-heading text-[#1B2541]">
                            Diaper Size & Fit Guide
                        </h2>
                        <p class="text-gray-500 text-xs sm:text-sm mt-1">
                            Select your baby's weight to instantly calculate their ideal leak-free diaper size.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                        <!-- Left: Interactive Weight Selector -->
                        <div class="md:col-span-6 space-y-6">
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <label class="text-xs font-bold text-gray-700 uppercase tracking-wide">Baby's Current Weight:</label>
                                    <span class="text-lg font-bold text-vibrant-rose">{{ $babyWeight }} kg</span>
                                </div>
                                <!-- Weight Range Slider -->
                                <input
                                    type="range"
                                    min="2.5"
                                    max="18"
                                    step="0.5"
                                    wire:model.live="babyWeight"
                                    class="w-full h-2.5 bg-purple-100 rounded-lg appearance-none cursor-pointer accent-vibrant-rose" />
                                <div class="flex justify-between text-[11px] text-gray-400 mt-1">
                                    <span>2.5 kg (Newborn)</span>
                                    <span>10 kg</span>
                                    <span>18+ kg (Toddler)</span>
                                </div>
                            </div>

                            <!-- Quick Weight Select Buttons -->
                            <div>
                                <p class="text-xs text-gray-500 mb-2 font-medium">Or select quickly:</p>
                                <div class="flex flex-wrap gap-2">
                                    <button wire:click="$set('babyWeight', 3.5)" class="px-3 py-1.5 rounded-xl text-xs font-semibold border transition-all {{ $babyWeight == 3.5 ? 'bg-vibrant-rose text-white border-vibrant-rose' : 'bg-white text-gray-600 border-purple-100 hover:border-purple-300' }}">3.5 kg</button>
                                    <button wire:click="$set('babyWeight', 6.5)" class="px-3 py-1.5 rounded-xl text-xs font-semibold border transition-all {{ $babyWeight == 6.5 ? 'bg-vibrant-rose text-white border-vibrant-rose' : 'bg-white text-gray-600 border-purple-100 hover:border-purple-300' }}">6.5 kg</button>
                                    <button wire:click="$set('babyWeight', 9.5)" class="px-3 py-1.5 rounded-xl text-xs font-semibold border transition-all {{ $babyWeight == 9.5 ? 'bg-vibrant-rose text-white border-vibrant-rose' : 'bg-white text-gray-600 border-purple-100 hover:border-purple-300' }}">9.5 kg</button>
                                    <button wire:click="$set('babyWeight', 13.0)" class="px-3 py-1.5 rounded-xl text-xs font-semibold border transition-all {{ $babyWeight == 13.0 ? 'bg-vibrant-rose text-white border-vibrant-rose' : 'bg-white text-gray-600 border-purple-100 hover:border-purple-300' }}">13.0 kg</button>
                                    <button wire:click="$set('babyWeight', 16.0)" class="px-3 py-1.5 rounded-xl text-xs font-semibold border transition-all {{ $babyWeight == 16.0 ? 'bg-vibrant-rose text-white border-vibrant-rose' : 'bg-white text-gray-600 border-purple-100 hover:border-purple-300' }}">16+ kg</button>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Recommendation Result Card -->
                        <div class="md:col-span-6 bg-white p-6 sm:p-7 rounded-2xl border border-purple-100 shadow-sm text-center md:text-left space-y-4">
                            <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-soft-green text-pastel-green rounded-full text-xs font-bold">
                                <i class="ri-checkbox-circle-fill"></i> Perfect Fit Match
                            </div>

                            <div>
                                <h3 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#1B2541]">
                                    {{ $recommendedSize['size'] }}
                                </h3>
                                <p class="text-xs font-bold text-[#6B57B2] mt-0.5">Recommended Weight: {{ $recommendedSize['range'] }}</p>
                            </div>

                            <p class="text-xs text-gray-600 leading-relaxed">
                                {{ $recommendedSize['desc'] }}
                            </p>

                            <div class="pt-2 flex flex-col sm:flex-row items-center gap-3">
                                <button
                                    wire:click="setCategory('Diapers')"
                                    class="w-full sm:w-auto px-6 py-2.5 bg-vibrant-rose hover:bg-pink-600 text-white text-xs font-bold rounded-full shadow-sm transition-all flex items-center justify-center gap-2">
                                    <span>Shop {{ $recommendedSize['size'] }} Diapers</span>
                                    <i class="ri-arrow-right-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Promises & Certified Quality Section -->
        <section id="brand-promises" class="py-16 sm:py-20 bg-white relative overflow-hidden border-t border-purple-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
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
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group">
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
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group">
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
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group">
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
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group">
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
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group">
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
                    <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 soft-card-shadow card-hover-effect flex flex-col justify-between group">
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
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-14">
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
                <div class="relative px-2 sm:px-4">
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

                    <!-- Navigation Arrow Buttons -->
                    <button
                        @click="prev()"
                        class="absolute -left-2 sm:-left-4 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white shadow-md border border-purple-100 text-gray-700 hover:text-white hover:bg-vibrant-rose flex items-center justify-center transition-all z-20 focus:outline-none cursor-pointer"
                        aria-label="Previous testimonials">
                        <i class="ri-arrow-left-s-line text-xl"></i>
                    </button>
                    <button
                        @click="next()"
                        class="absolute -right-2 sm:-right-4 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white shadow-md border border-purple-100 text-gray-700 hover:text-white hover:bg-vibrant-rose flex items-center justify-center transition-all z-20 focus:outline-none cursor-pointer"
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

        <!-- Slide-Over Cart Drawer -->
        @if($cartOpen)
        <div class="fixed inset-0 z-50 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <div wire:click="toggleCart" class="fixed inset-0 bg-gray-900/50 backdrop-blur-xs transition-opacity"></div>

            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-6 sm:pl-10">
                <div class="pointer-events-auto w-screen max-w-md bg-white shadow-2xl flex flex-col justify-between">
                    <!-- Drawer Header -->
                    <div class="p-5 sm:p-6 bg-soft-pink/50 border-b border-pink-100 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <i class="ri-shopping-bag-3-fill text-vibrant-rose text-xl"></i>
                            <h2 class="text-base sm:text-lg font-bold font-heading text-gray-900">Your Baby Care Cart ({{ $cartCount }})</h2>
                        </div>
                        <button wire:click="toggleCart" class="p-2 text-gray-400 hover:text-gray-700 rounded-full hover:bg-white transition-colors">
                            <i class="ri-close-line text-xl"></i>
                        </button>
                    </div>

                    <!-- Items List -->
                    <div class="flex-1 overflow-y-auto p-5 sm:p-6 space-y-4">
                        @forelse($cart as $index => $item)
                        <div class="flex items-center gap-3 sm:gap-4 p-3 rounded-2xl bg-cream-bg border border-purple-100">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-14 h-14 sm:w-16 sm:h-16 object-contain rounded-xl bg-white p-1 shrink-0" />
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs font-bold text-gray-900 truncate">{{ $item['name'] }}</h4>
                                <div class="text-[10px] text-gray-500">{{ $item['variant'] }}</div>
                                <div class="text-xs sm:text-sm font-bold text-vibrant-rose mt-1">${{ number_format($item['price'], 2) }}</div>
                            </div>
                            <div class="flex items-center border border-gray-200 bg-white rounded-lg shrink-0">
                                <button wire:click="updateQuantity({{ $index }}, -1)" class="px-2 py-1 text-gray-500 hover:text-gray-900 text-xs font-bold">-</button>
                                <span class="px-2 text-xs font-bold">{{ $item['quantity'] }}</span>
                                <button wire:click="updateQuantity({{ $index }}, 1)" class="px-2 py-1 text-gray-500 hover:text-gray-900 text-xs font-bold">+</button>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-12">
                            <i class="ri-shopping-bag-line text-4xl text-gray-300"></i>
                            <p class="text-xs text-gray-500 mt-2 font-medium">Your cart is empty.</p>
                        </div>
                        @endforelse
                    </div>

                    <!-- Footer Checkout -->
                    <div class="p-5 sm:p-6 bg-gray-50 border-t border-gray-100 space-y-3">
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>Subtotal:</span>
                            <span class="font-bold text-gray-900">${{ number_format($cartSubtotal, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>Estimated Express Shipping:</span>
                            <span class="font-bold text-pastel-green">FREE</span>
                        </div>
                        <div class="flex justify-between text-sm font-bold border-t border-gray-200 pt-2">
                            <span>Total:</span>
                            <span class="text-vibrant-rose font-heading text-base">${{ number_format($cartSubtotal, 2) }}</span>
                        </div>
                        <button onclick="alert('Proceeding to checkout!')" class="w-full py-3 sm:py-3.5 bg-vibrant-rose hover:bg-pink-600 text-white font-bold text-xs rounded-full shadow-lg transition-all flex items-center justify-center gap-2">
                            <i class="ri-lock-line"></i> Secure Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endif

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
                            <div class="bg-cream-bg p-4 rounded-2xl flex items-center justify-center">
                                <img src="{{ $selectedProduct['image'] }}" alt="{{ $selectedProduct['name'] }}" class="w-full h-48 object-contain" />
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