<div class="relative bg-[#FAF9FC] text-[#1B2541]">

    <!-- ========================================================================= -->
    <!-- 1. FULL-SCREEN EDGE-TO-EDGE HERO SLIDER (Previous Butter-Smooth Slider)   -->
    <!-- ========================================================================= -->
    <section
        x-data="{
            currentSlide: 0,
            totalSlides: {{ count($slides) }},
            timer: null,
            init() {
                this.startTimer();
            },
            startTimer() {
                this.stopTimer();
                this.timer = setInterval(() => this.next(), 5000);
            },
            stopTimer() {
                if (this.timer) clearInterval(this.timer);
            },
            next() {
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
            },
            goTo(index) {
                this.currentSlide = index;
                this.startTimer();
            }
        }"
        @mouseenter="stopTimer()"
        @mouseleave="startTimer()"
        class="relative w-full overflow-hidden"
    >
        <div class="relative w-full h-[55vh] sm:h-[70vh] md:h-[80vh] overflow-hidden bg-gray-100 group">
            @foreach($slides as $index => $slide)
            <div
                x-show="currentSlide === {{ $index }}"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 scale-102"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-500 absolute inset-0"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-98"
                class="absolute inset-0"
                x-cloak
            >
                <!-- Background Image Container -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 transform scale-100 group-hover:scale-102" style="background-image: url('{{ $slide['bgImage'] }}');"></div>

                <!-- Gradient Overlay for High Contrast Text Legibility -->
                <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/80 to-transparent w-full md:w-3/5 lg:w-1/2"></div>

                <!-- Left Content Overlay -->
                <div class="absolute inset-0 px-[5%] flex items-center">
                    <div class="max-w-xl px-6 sm:px-12 lg:px-16 space-y-3 sm:space-y-5">
                        <div class="space-y-1">
                            <span class="block text-xs sm:text-sm font-bold tracking-wider text-vibrant-rose uppercase">{{ $slide['subtitle'] }}</span>
                            <h1 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-heading text-gray-900 leading-tight">
                                {{ $slide['title'] }}
                            </h1>
                        </div>

                        <p class="text-xs sm:text-base text-gray-600 leading-relaxed line-clamp-2 sm:line-clamp-3">
                            {{ $slide['description'] }}
                        </p>

                        <div class="pt-2">
                            <button wire:click="setCategory('{{ $slide['category'] }}')" class="px-6 py-3 font-bold text-xs sm:text-sm rounded-full shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5 active:scale-95 flex items-center gap-2.5 cursor-pointer {{ $slide['buttonClass'] }}">
                                <span>{{ $slide['buttonText'] }}</span>
                                <i class="ri-arrow-right-line text-base"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Simple Small Dot Pagination -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-2.5 z-20">
                @foreach($slides as $index => $slide)
                <button
                    @click="goTo({{ $index }})"
                    :class="currentSlide === {{ $index }} ? 'bg-vibrant-rose shadow-sm scale-110' : 'bg-gray-400/60 hover:bg-gray-600'"
                    class="w-2.5 h-2.5 rounded-full transition-all duration-300 cursor-pointer"
                    title="Slide {{ $index + 1 }}"
                ></button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. BRAND CREDIBILITY & TRUST STRIP (Dashed Dividers, Exact User Design)  -->
    <!-- ========================================================================= -->
    <section class="bg-white py-8 sm:py-10 border-b border-purple-100/70 shadow-2xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-8 gap-x-4 lg:gap-0 items-center">
                
                <!-- 1. Pin Codes Reached (Pink Theme) -->
                <div class="flex flex-col items-center text-center px-3 sm:px-5 lg:border-r lg:border-dashed lg:border-gray-200/90 group">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 rounded-full bg-[#FDF0F5] border border-[#FADCE8] flex items-center justify-center mb-3 sm:mb-4 group-hover:scale-108 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-9 sm:h-9 text-[#E63980]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div class="text-2xl sm:text-3xl font-extrabold font-heading text-[#E63980] tracking-tight">
                        12,000+
                    </div>
                    <p class="text-xs sm:text-[13px] font-bold text-[#1B2541] mt-1 tracking-tight">
                        Pin codes reached
                    </p>
                </div>

                <!-- 2. Happy Customers (Green Theme) -->
                <div class="flex flex-col items-center text-center px-3 sm:px-5 lg:border-r lg:border-dashed lg:border-gray-200/90 group">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 rounded-full bg-[#F0F8EC] border border-[#DCF1D2] flex items-center justify-center mb-3 sm:mb-4 group-hover:scale-108 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-9 sm:h-9 text-[#74B528]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="13" r="8"></circle>
                            <path d="M9 13.5h.01"></path>
                            <path d="M15 13.5h.01"></path>
                            <path d="M10 16.5c.6.7 1.3 1 2 1s1.4-.3 2-1"></path>
                            <path d="M12 5c-.5-1.5-1.8-2.5-3-2.5"></path>
                            <path d="M12 5c.5-1.5 1.8-2.5 3-2.5"></path>
                        </svg>
                    </div>
                    <div class="text-2xl sm:text-3xl font-extrabold font-heading text-[#74B528] tracking-tight">
                        120,000+
                    </div>
                    <p class="text-xs sm:text-[13px] font-bold text-[#1B2541] mt-1 tracking-tight">
                        Happy Customers
                    </p>
                </div>

                <!-- 3. 5 Star Reviews (Amber Theme) -->
                <div class="flex flex-col items-center text-center px-3 sm:px-5 lg:border-r lg:border-dashed lg:border-gray-200/90 group">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 rounded-full bg-[#FEF5E7] border border-[#FDE8CA] flex items-center justify-center mb-3 sm:mb-4 group-hover:scale-108 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-9 sm:h-9 text-[#F59E0B]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                    </div>
                    <div class="text-2xl sm:text-3xl font-extrabold font-heading text-[#F59E0B] tracking-tight">
                        50,000+
                    </div>
                    <p class="text-xs sm:text-[13px] font-bold text-[#1B2541] mt-1 tracking-tight">
                        5 Star Reviews
                    </p>
                </div>

                <!-- 4. Verified Safe. Tested. Trusted. (Blue Theme) -->
                <div class="flex flex-col items-center text-center px-3 sm:px-5 lg:border-r lg:border-dashed lg:border-gray-200/90 group">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 rounded-full bg-[#EBF7FC] border border-[#D0EEF9] flex items-center justify-center mb-3 sm:mb-4 group-hover:scale-108 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-9 sm:h-9 text-[#2CB3DB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 11 14 15 10"></polyline>
                        </svg>
                    </div>
                    <div class="text-2xl sm:text-3xl font-extrabold font-heading text-[#2CB3DB] tracking-tight">
                        Verified
                    </div>
                    <p class="text-xs sm:text-[13px] font-bold text-[#1B2541] mt-1 tracking-tight">
                        Safe. Tested. Trusted.
                    </p>
                </div>

                <!-- 5. Ayurveda Inspired Natural Goodness (Purple Theme) -->
                <div class="flex flex-col items-center text-center px-3 sm:px-5 group col-span-2 md:col-span-1">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 rounded-full bg-[#F4F1FA] border border-[#E4DCF5] flex items-center justify-center mb-3 sm:mb-4 group-hover:scale-108 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-9 sm:h-9 text-[#6B57B2]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22V12"></path>
                            <path d="M12 12C9.5 12 7 10 7 7c0-2.5 3-5 5-5s5 2.5 5 5c0 3-2.5 5-5 5z"></path>
                            <path d="M12 16c2.5 0 5-1.5 5-4"></path>
                            <path d="M12 18c-2.5 0-5-1.5-5-4"></path>
                        </svg>
                    </div>
                    <div class="text-xl sm:text-2xl font-extrabold font-heading text-[#6B57B2] tracking-tight leading-tight">
                        Ayurveda Inspired
                    </div>
                    <p class="text-xs sm:text-[13px] font-bold text-[#1B2541] mt-1 tracking-tight">
                        Natural goodness
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. KNOW US BETTER (Precision Engineered from User's Reference Layout)     -->
    <!-- ========================================================================= -->
    <section id="about-us" class="py-16 sm:py-24 bg-white border-b border-purple-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-stretch">
                
                <!-- Left Column: Pure Editorial Image Showcase (Full Height Matching Content, Zero Badges) -->
                <div class="lg:col-span-6 flex flex-col">
                    <div class="relative w-full h-full min-h-[420px] sm:min-h-[480px] lg:min-h-full rounded-3xl overflow-hidden shadow-lg border border-purple-100/70 bg-gradient-to-tr from-purple-50 via-white to-pink-50/40 group">
                        <!-- High Resolution Brand Visual (Mother's Love) -->
                        <img 
                            src="/images/mother_baby_care.jpg" 
                            alt="Fabie Baby Mother and Child Care Philosophy" 
                            class="w-full h-full object-cover object-center group-hover:scale-102 transition-transform duration-700 ease-out"
                        />
                    </div>
                </div>

                <!-- Right Column: Clean Editorial Content (Strictly Matching Screenshot Hierarchy) -->
                <div class="lg:col-span-6 space-y-5 text-left flex flex-col justify-center">
                    <!-- Clean Kicker (Icon + Letterspaced Text, Zero Badges) -->
                    <div class="flex items-center gap-2 text-xs sm:text-sm font-bold tracking-widest text-[#6B57B2] uppercase">
                        <i class="ri-home-5-line text-base"></i>
                        <span>KNOW US BETTER</span>
                    </div>

                    <!-- Two-Tone Impactful Headline (Dark Navy Line 1 + Pink Line 2) -->
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-[40px] font-extrabold font-heading uppercase tracking-tight leading-[1.15]">
                        <span class="text-[#1B2541] block">COMPLETE BABY CARE &amp;</span>
                        <span class="text-[#E63980] block mt-1">CRAFTED WITH A MOTHER'S LOVE</span>
                    </h2>

                    <!-- Clean Body Description with Precision Bold Highlights -->
                    <div class="space-y-4 text-gray-600 text-sm sm:text-base leading-relaxed font-normal">
                        <p>
                            Fabie Baby is a premier pediatric-guided personal care brand providing high-performance, toxin-free infant wellness across India and the UAE. Formulated under the clinical mentorship of <strong>senior neonatal specialists and dermatologists in Dubai (UAE)</strong>, we are actively engaged in researching, formulating, and crafting an extensive range of <strong>Ultra-Soft Diapers &amp; Pants</strong>, <strong>Pure Water Wipes</strong>, <strong>Organic Skincare Lotions</strong>, <strong>Tear-Free Hair &amp; Body Washes</strong>, and <strong>Daily Calming Massage Oils</strong>.
                        </p>

                        <p>
                            Sourced strictly from certified natural botanical vendors in compliance with international quality and safety benchmarks, our gentle formulations deliver complete microbiome protection, 0% parabens, hypoallergenic kindness, and uncompromising peace of mind for every mother.
                        </p>
                    </div>

                    <!-- Minimal Understated Action Links -->
                    <div class="pt-2 flex flex-wrap items-center gap-4">
                        <a 
                            href="#products" 
                            class="inline-flex items-center gap-2 px-6 py-3 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold rounded-full shadow-sm hover:shadow-md transition-all active:scale-95"
                        >
                            <span>Explore Products</span>
                            <i class="ri-arrow-right-line text-xs"></i>
                        </a>
                        <a 
                            href="#b2b-products" 
                            class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold text-[#6B57B2] hover:text-vibrant-rose transition-colors py-2 px-3 group"
                        >
                            <span>Wholesale &amp; Institutional Inquiry</span>
                            <i class="ri-arrow-right-line text-xs group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. CATEGORY & STAGE EXPLORER (Clean Photographic Cards)                   -->
    <!-- ========================================================================= -->
    <section id="products" class="py-18 sm:py-24 bg-[#FAF9FC] border-b border-purple-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 sm:mb-16 gap-6">
                <div class="max-w-xl">
                    <div class="text-xs font-bold tracking-widest text-vibrant-rose uppercase mb-2">
                        <span>CARE COLLECTIONS</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold font-heading text-[#1B2541] tracking-tight">
                        Care Tailored to Every Stage
                    </h2>
                    <p class="text-sm sm:text-base text-gray-500 mt-2">
                        Thoughtfully developed essentials for newborn development, skin barrier comfort, and calm daily routines.
                    </p>
                </div>
                <button 
                    wire:click="setCategory('All')" 
                    class="inline-flex items-center gap-1.5 text-xs font-bold text-[#6B57B2] hover:text-vibrant-rose transition-colors pb-1 border-b border-purple-200 hover:border-vibrant-rose self-start md:self-end cursor-pointer"
                >
                    <span>View All Products</span>
                    <i class="ri-arrow-right-line text-xs"></i>
                </button>
            </div>

            <!-- 4 Aesthetic Color-Themed Category Cards (Inspired by Reference Design) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-7">
                
                <!-- Category 1: Baby Essentials (Green Theme) -->
                <div 
                    wire:click="setCategory('Diapers')"
                    class="group relative flex flex-col justify-between rounded-[28px] p-6 sm:p-7 bg-gradient-to-b from-[#F2F8ED] via-[#ECF5E6] to-[#E3F2DA] border border-[#74B528]/25 hover:border-[#74B528]/50 hover:shadow-xl hover:-translate-y-2 transition-all duration-500 ease-out cursor-pointer overflow-hidden select-none"
                >
                    <div class="relative z-10">
                        <h3 class="text-2xl sm:text-[26px] font-extrabold font-heading text-[#2F7523] leading-tight mb-2 group-hover:text-[#24611B] transition-colors">
                            Baby<br/>Essentials
                        </h3>
                        <p class="text-xs sm:text-[13px] text-gray-600 font-medium leading-relaxed max-w-[210px] mb-4">
                            Everyday care for happy, healthy babies.
                        </p>
                    </div>

                    <!-- Visual Hero Image Container -->
                    <div class="relative z-10 w-full aspect-square rounded-2xl overflow-hidden mb-6 group/img bg-white/40 shadow-xs border border-white/60">
                        <img 
                            src="/images/cat_baby_essentials.jpg" 
                            alt="Baby Essentials" 
                            class="w-full h-full object-cover group-hover/img:scale-106 transition-transform duration-700 ease-out" 
                        />
                    </div>

                    <!-- Bottom Action Pill Button -->
                    <div class="relative z-10 pt-1">
                        <span class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-[#53972A] group-hover:bg-[#437C20] text-white text-xs sm:text-sm font-bold shadow-xs group-hover:shadow-md transition-all duration-300">
                            <span>Explore</span>
                            <i class="ri-arrow-right-line text-xs group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </div>
                </div>

                <!-- Category 2: Baby Health (Sky Blue Theme) -->
                <div 
                    wire:click="setCategory('Wipes')"
                    class="group relative flex flex-col justify-between rounded-[28px] p-6 sm:p-7 bg-gradient-to-b from-[#EEF7FC] via-[#E4F2FA] to-[#D9EEF8] border border-[#2CB3DB]/30 hover:border-[#2CB3DB]/60 hover:shadow-xl hover:-translate-y-2 transition-all duration-500 ease-out cursor-pointer overflow-hidden select-none"
                >
                    <div class="relative z-10">
                        <h3 class="text-2xl sm:text-[26px] font-extrabold font-heading text-[#0D6AB7] leading-tight mb-2 group-hover:text-[#095594] transition-colors">
                            Baby<br/>Health
                        </h3>
                        <p class="text-xs sm:text-[13px] text-gray-600 font-medium leading-relaxed max-w-[210px] mb-4">
                            Targeted care for common concerns and comfort.
                        </p>
                    </div>

                    <!-- Visual Hero Image Container -->
                    <div class="relative z-10 w-full aspect-square rounded-2xl overflow-hidden mb-6 group/img bg-white/40 shadow-xs border border-white/60">
                        <img 
                            src="/images/cat_baby_health.jpg" 
                            alt="Baby Health" 
                            class="w-full h-full object-cover group-hover/img:scale-106 transition-transform duration-700 ease-out" 
                        />
                    </div>

                    <!-- Bottom Action Pill Button -->
                    <div class="relative z-10 pt-1">
                        <span class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-[#0D6AB7] group-hover:bg-[#095594] text-white text-xs sm:text-sm font-bold shadow-xs group-hover:shadow-md transition-all duration-300">
                            <span>Explore</span>
                            <i class="ri-arrow-right-line text-xs group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </div>
                </div>

                <!-- Category 3: My Mamma (Pink / Vibrant Rose Theme) -->
                <div 
                    wire:click="setCategory('Skincare')"
                    class="group relative flex flex-col justify-between rounded-[28px] p-6 sm:p-7 bg-gradient-to-b from-[#FDF2F6] via-[#FCE7F1] to-[#FBDCE9] border border-[#E63980]/25 hover:border-[#E63980]/50 hover:shadow-xl hover:-translate-y-2 transition-all duration-500 ease-out cursor-pointer overflow-hidden select-none"
                >
                    <div class="relative z-10">
                        <h3 class="text-2xl sm:text-[26px] font-extrabold font-heading text-[#E63980] leading-tight mb-2 group-hover:text-[#D0236B] transition-colors">
                            My<br/>Mamma
                        </h3>
                        <p class="text-xs sm:text-[13px] text-gray-600 font-medium leading-relaxed max-w-[210px] mb-4">
                            Care that understands moms best.
                        </p>
                    </div>

                    <!-- Visual Hero Image Container -->
                    <div class="relative z-10 w-full aspect-square rounded-2xl overflow-hidden mb-6 group/img bg-white/40 shadow-xs border border-white/60">
                        <img 
                            src="/images/cat_my_mamma.jpg" 
                            alt="My Mamma Care" 
                            class="w-full h-full object-cover group-hover/img:scale-106 transition-transform duration-700 ease-out" 
                        />
                    </div>

                    <!-- Bottom Action Pill Button -->
                    <div class="relative z-10 pt-1">
                        <span class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-[#E63980] group-hover:bg-[#D0236B] text-white text-xs sm:text-sm font-bold shadow-xs group-hover:shadow-md transition-all duration-300">
                            <span>Explore</span>
                            <i class="ri-arrow-right-line text-xs group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </div>
                </div>

                <!-- Category 4: Gifts & Kits (Brand Purple Theme) -->
                <div 
                    wire:click="setCategory('Bath')"
                    class="group relative flex flex-col justify-between rounded-[28px] p-6 sm:p-7 bg-gradient-to-b from-[#F5F1FA] via-[#EEE6F7] to-[#E5DAF3] border border-[#6B57B2]/25 hover:border-[#6B57B2]/50 hover:shadow-xl hover:-translate-y-2 transition-all duration-500 ease-out cursor-pointer overflow-hidden select-none"
                >
                    <div class="relative z-10">
                        <h3 class="text-2xl sm:text-[26px] font-extrabold font-heading text-[#5E35B1] leading-tight mb-2 group-hover:text-[#4A2699] transition-colors">
                            Gifts &amp;<br/>Kits
                        </h3>
                        <p class="text-xs sm:text-[13px] text-gray-600 font-medium leading-relaxed max-w-[210px] mb-4">
                            Thoughtful gifting for every little celebration.
                        </p>
                    </div>

                    <!-- Visual Hero Image Container -->
                    <div class="relative z-10 w-full aspect-square rounded-2xl overflow-hidden mb-6 group/img bg-white/40 shadow-xs border border-white/60">
                        <img 
                            src="/images/cat_gifts_kits.jpg" 
                            alt="Gifts & Kits" 
                            class="w-full h-full object-cover group-hover/img:scale-106 transition-transform duration-700 ease-out" 
                        />
                    </div>

                    <!-- Bottom Action Pill Button -->
                    <div class="relative z-10 pt-1">
                        <span class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-[#6B57B2] group-hover:bg-[#5725bb] text-white text-xs sm:text-sm font-bold shadow-xs group-hover:shadow-md transition-all duration-300">
                            <span>Explore</span>
                            <i class="ri-arrow-right-line text-xs group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. FEATURED PRODUCT SHOWCASE (Clean Cards, Zero Badge Overlays)           -->
    <!-- ========================================================================= -->
    <!-- ========================================================================= -->
    <!-- 5. FEATURED PRODUCT SHOWCASE (Ultra-Modern Auto-Slider, Zero Arrows)      -->
    <!-- ========================================================================= -->
    <section class="py-18 sm:py-24 bg-white border-b border-purple-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header with Category Tabs -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 sm:mb-14 gap-6">
                <div>
                    <div class="flex items-center gap-2 text-xs font-bold tracking-widest text-[#6B57B2] uppercase mb-2">
                        <i class="ri-sparkling-2-line"></i>
                        <span>FEATURED ESSENTIALS</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold font-heading text-[#1B2541] tracking-tight">
                        @if($activeCategory === 'All') Recommended Care Essentials @else Category: {{ $activeCategory }} @endif
                    </h2>
                    <p class="text-sm text-gray-500 mt-1.5">
                        Dermatologist-tested formulas developed for newborn skin comfort and daily protection.
                    </p>
                </div>

         
            </div>

            <!-- Modern Auto-Slider (Zero Arrow Buttons, Smooth Interval, Pause on Hover) -->
            <div 
                wire:key="category-slider-{{ $activeCategory }}-{{ count($filteredProducts) }}"
                x-data="{
                    currentIndex: 0,
                    totalItems: {{ count($filteredProducts) }},
                    itemsPerPage: 4,
                    timer: null,
                    touchStartX: 0,
                    init() {
                        this.setItemsPerPage();
                        window.addEventListener('resize', () => this.setItemsPerPage());
                        this.startTimer();
                    },
                    setItemsPerPage() {
                        if (window.innerWidth < 640) {
                            this.itemsPerPage = 1;
                        } else if (window.innerWidth < 1024) {
                            this.itemsPerPage = 2;
                        } else {
                            this.itemsPerPage = 4;
                        }
                    },
                    maxIndex() {
                        return Math.max(0, this.totalItems - this.itemsPerPage);
                    },
                    startTimer() {
                        this.stopTimer();
                        if (this.maxIndex() > 0) {
                            this.timer = setInterval(() => this.next(), 3500);
                        }
                    },
                    stopTimer() {
                        if (this.timer) clearInterval(this.timer);
                    },
                    next() {
                        if (this.currentIndex >= this.maxIndex()) {
                            this.currentIndex = 0;
                        } else {
                            this.currentIndex++;
                        }
                    },
                    prev() {
                        if (this.currentIndex <= 0) {
                            this.currentIndex = this.maxIndex();
                        } else {
                            this.currentIndex--;
                        }
                    },
                    goTo(idx) {
                        this.currentIndex = Math.min(idx, this.maxIndex());
                        this.startTimer();
                    }
                }"
                @mouseenter="stopTimer()"
                @mouseleave="startTimer()"
                class="relative"
            >
                @if(count($filteredProducts) > 0)
                <!-- Overflow Carousel Track -->
                <div 
                    class="overflow-hidden -mx-3 py-3"
                    @touchstart="touchStartX = $event.changedTouches[0].screenX"
                    @touchend="if ($event.changedTouches[0].screenX < touchStartX - 50) { next(); startTimer(); } else if ($event.changedTouches[0].screenX > touchStartX + 50) { prev(); startTimer(); }"
                >
                    <div 
                        class="flex transition-transform duration-700 ease-in-out"
                        :style="`transform: translateX(-${currentIndex * (100 / itemsPerPage)}%)`"
                    >
                        @foreach($filteredProducts as $product)
                        <div class="w-full sm:w-1/2 lg:w-1/4 flex-shrink-0 px-3">
                            <!-- Ultra-Modern Clean Product Card -->
                            <div class="h-full bg-white rounded-3xl p-4 sm:p-5 border border-purple-100/70 hover:border-purple-300/80 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-500 ease-out flex flex-col justify-between group relative">
                                
                                <div>
                                    <!-- Top Meta Line: Category with Color Dot + Trust Cue -->
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="inline-flex items-center gap-1.5 text-[11px] font-bold text-[#6B57B2] uppercase tracking-wider">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#6B57B2]"></span>
                                            <span>{{ $product['category'] }}</span>
                                        </div>
                                        <span class="text-[11px] font-medium text-gray-400 flex items-center gap-1">
                                            <i class="ri-shield-check-line text-emerald-500 text-xs"></i>
                                            <span>Pediatric Safe</span>
                                        </span>
                                    </div>

                                    <!-- Soft Luminous Product Stage Container (Enlarged Image Stage) -->
                                    <div 
                                        wire:click="openQuickView({{ $product['id'] }})"
                                        class="w-full h-64 sm:h-72 lg:h-80 rounded-2xl bg-gradient-to-b from-[#FAF9FE] to-[#F4F2F9] border border-purple-50/80 flex items-center justify-center  mb-5 cursor-pointer overflow-hidden group/img relative"
                                    >
                                        <img 
                                            src="{{ $product['image'] }}" 
                                            alt="{{ $product['name'] }}" 
                                            class="w-full h-full object-cover group-hover/img:scale-106 transition-transform duration-500 ease-out drop-shadow-sm" 
                                        />
                                    </div>

                                    <!-- Title & Subtitle (Clean & Minimalist) -->
                                    <div class="space-y-1.5 mb-2">
                                        <h3 
                                            wire:click="openQuickView({{ $product['id'] }})"
                                            class="font-bold text-[#1B2541] text-lg group-hover:text-[#E63980] transition-colors leading-snug line-clamp-1 cursor-pointer font-heading"
                                        >
                                            {{ $product['name'] }}
                                        </h3>
                                        <p class="text-xs sm:text-[13px] text-gray-500 line-clamp-2 font-normal leading-relaxed">
                                            {{ $product['subtitle'] ?? 'Hypoallergenic • Dermatologist tested' }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Clean Minimalist Action Bar (No Price, No Review) -->
                                <div class="pt-4 border-t border-purple-50/80">
                                    <button
                                        wire:click="openQuickView({{ $product['id'] }})"
                                        class="w-full py-2.5 px-4 bg-[#6B57B2] hover:bg-[#5725bb] text-white border border-[#6B57B2] hover:border-[#5725bb] text-xs font-bold rounded-full transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow-md active:scale-98 group/btn"
                                    >
                                        <span>View Product Details</span>
                                        <i class="ri-arrow-right-line text-xs group-hover/btn:translate-x-1 transition-transform"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Modern Expanding Indicator Dots (Zero Arrow Buttons) -->
                <div class="flex items-center justify-center gap-2 mt-8" x-show="maxIndex() > 0">
                    <template x-for="i in (maxIndex() + 1)" :key="i">
                        <button 
                            @click="goTo(i - 1)"
                            :class="currentIndex === (i - 1) ? 'w-8 bg-[#6B57B2]' : 'w-2.5 bg-purple-200/70 hover:bg-purple-300'"
                            class="h-2 rounded-full transition-all duration-300 cursor-pointer"
                            :title="'Slide ' + i"
                        ></button>
                    </template>
                </div>
                @else
                <div class="text-center py-16 bg-[#FAF9FC] rounded-3xl p-8 border border-purple-100">
                    <i class="ri-inbox-line text-4xl text-gray-300"></i>
                    <p class="text-sm text-gray-600 mt-2 font-medium">No products found in this category.</p>
                    <button wire:click="setCategory('All')" class="mt-4 px-5 py-2 bg-[#6B57B2] text-white text-xs font-bold rounded-full cursor-pointer">
                        View All Products
                    </button>
                </div>
                @endif
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. A BABY'S VOICE (Clean Editorial Story, Framed Mascot Showcase)         -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-white border-b border-purple-100/70 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

                <!-- Left: Framed Mascot Card Container (Clean & Luminous) -->
                <div class="lg:col-span-5 flex items-center justify-center">
                    <div class="relative w-full max-w-md aspect-[4/5] rounded-3xl bg-gradient-to-b from-[#FAF9FE] via-[#F6F3FC] to-[#FDF2F7] p-8 sm:p-10 border border-purple-100/80 shadow-md flex flex-col items-center justify-between overflow-hidden group">
                        <!-- Soft Ambient Glow -->
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 rounded-full bg-white/80 blur-2xl pointer-events-none"></div>

                        <!-- Top Minimalist Tag -->
                        <div class="relative z-10 self-start">
                            <span class="text-[11px] font-bold tracking-widest text-[#6B57B2] uppercase bg-white/90 backdrop-blur-xs px-3.5 py-1.5 rounded-full border border-purple-100/80 shadow-2xs">
                                Pediatric Story
                            </span>
                        </div>

                        <!-- Mascot Character -->
                        <div class=" z-10 my-auto py-2">
                            <img
                                src="/images/fabie_baby_character.png"
                                alt="I am a Fabie Baby"
                                class="w-full max-w-[220px] sm:max-w-[260px] h-auto group-hover:scale-105 transition-transform duration-500 ease-out" 
                            />
                        </div>

                        <!-- Bottom Micro-Caption -->
                        <div class="relative z-10 text-center w-full pt-2">
                            <span class="text-xs font-semibold text-gray-500 tracking-wide">
                                "Gentle Care for Brighter Tomorrows"
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right: Editorial Monologue Story & Clean Hallmarks -->
                <div class="lg:col-span-7 space-y-7 text-left">
                    <!-- Clean Kicker (Zero Badges) -->
                    <div class="text-xs sm:text-sm font-bold tracking-widest text-[#E63980] uppercase">
                        <span>A BABY'S VOICE</span>
                    </div>

                    <!-- Two-Tone Impactful Headline -->
                    <h2 class="text-3xl sm:text-4xl lg:text-[44px] font-extrabold font-heading text-[#1B2541] tracking-tight leading-[1.15]">
                        <span>Pure Care for</span><br/>
                        <span class="text-[#6B57B2]">Delicate Newborn Skin</span>
                    </h2>

                 

                    <!-- Clean Narrative Description -->
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed font-normal">
                         “I still can't tell you how I feel, but I can laugh, coo, and cuddle when I am happy and cry when something is not right.”
                        A newborn's skin is exceptionally fragile. <strong class="text-[#1B2541] font-semibold">five times thinner than an adult's</strong>. Without fully formed acid-mantle defenses, infants lose hydration rapidly and are prone to sensitivity. Every Fabie Baby wash, lotion, and diaper is thoughtfully engineered to restore natural pH balance and ensure peaceful, rash-free days.
                    </p>

                    <!-- Clean Typographic Hallmarks (Replaces Tacky Badge Pills) -->
                    <div class="grid grid-cols-3 gap-4 border-y border-purple-100/80 py-5">
                        <div class="space-y-1">
                            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-[#E63980]">5x</div>
                            <div class="text-xs text-gray-500 font-medium">Thinner Skin Care</div>
                        </div>
                        <div class="space-y-1 border-l border-purple-100/80 pl-4 sm:pl-6">
                            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-[#6B57B2]">pH 5.5</div>
                            <div class="text-xs text-gray-500 font-medium">Acid Mantle Shield</div>
                        </div>
                        <div class="space-y-1 border-l border-purple-100/80 pl-4 sm:pl-6">
                            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-[#74B528]">0%</div>
                            <div class="text-xs text-gray-500 font-medium">Parabens &amp; Toxins</div>
                        </div>
                    </div>

                    <!-- Clean Action Button -->
                    <div class="pt-1 flex items-center gap-4">
                        <a
                            href="#products"
                            class="inline-flex items-center gap-2 px-7 py-3.5 bg-[#6B57B2] hover:bg-[#E63980] text-white text-xs sm:text-sm font-bold rounded-full shadow-sm hover:shadow-md transition-all active:scale-95"
                        >
                            <span>Explore Gentle Care</span>
                            <i class="ri-arrow-right-line text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. QUALITY & PEDIATRIC INNOVATION (Babina-Inspired Centerpiece Showcase)  -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 bg-gradient-to-b from-[#6B57B2] via-[#5221b0] to-[#431a96] text-white relative overflow-hidden">
        
        <!-- Subtle Glowing Backdrop Accent Light -->
        <div class="absolute inset-0 pointer-events-none flex items-center justify-center">
            <div class="w-[600px] h-[600px] rounded-full bg-white/5 blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Centered Header -->
            <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-20 space-y-3">
                <span class="text-xs sm:text-sm font-bold tracking-widest text-pink-300 uppercase">
                    Quality
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading tracking-tight leading-tight">
                    Crafting Premium Protection for Your Baby
                </h2>
                <p class="text-sm sm:text-base text-purple-100/90 leading-relaxed font-normal max-w-2xl mx-auto">
                    At Fabie Baby, we prioritize quality and gentle skin defense at every step. Our products are crafted with the finest certified natural materials to ensure optimal comfort and pure care.
                </p>
            </div>

            <!-- Main Layout: 2 Pillars Left + Centerpiece Diaper Showcase + 2 Pillars Right -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-6 items-center mb-14 sm:mb-20">
                
                <!-- Left 2 Pillars -->
                <div class="lg:col-span-4 space-y-10 sm:space-y-14 text-center lg:text-right">
                    <!-- Pillar 1: Sourcing the Best -->
                    <div class="space-y-3 group">
                        <div class="flex justify-center lg:justify-end text-3xl text-pink-300 group-hover:scale-110 transition-transform">
                            <i class="ri-heart-3-line"></i>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold font-heading text-white">
                            Sourcing the Best
                        </h3>
                        <p class="text-xs sm:text-sm text-purple-100/80 leading-relaxed max-w-sm mx-auto lg:ml-auto lg:mr-0">
                            We source organic bamboo and ultra-soft cotton fibers from certified ethical vendors, ensuring cloud-like tenderness in every touch.
                        </p>
                    </div>

                    <!-- Pillar 2: Quality Assurance -->
                    <div class="space-y-3 group">
                        <div class="flex justify-center lg:justify-end text-3xl text-pink-300 group-hover:scale-110 transition-transform">
                            <i class="ri-medal-line"></i>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold font-heading text-white">
                            Quality Assurance
                        </h3>
                        <p class="text-xs sm:text-sm text-purple-100/80 leading-relaxed max-w-sm mx-auto lg:ml-auto lg:mr-0">
                            Our rigorous pediatric checks ensure that every diaper meets the highest dermatological safety, 0% chlorine, and hypoallergenic standards.
                        </p>
                    </div>
                </div>

                <!-- Centerpiece: Circular Diaper Spotlight Container -->
                <div class="lg:col-span-4 flex items-center justify-center my-6 lg:my-0">
                    <div class="relative w-64 h-64 sm:w-80 sm:h-80 lg:w-96 lg:h-96 rounded-full bg-white/95 backdrop-blur-md shadow-2xl p-6 sm:p-8 flex items-center justify-center border-4 border-white/25 group hover:scale-104 transition-all duration-700">
                        <!-- Soft Ambient Glow Ring -->
                        <div class="absolute -inset-2 rounded-full border border-white/20 pointer-events-none animate-pulse"></div>
                        <img 
                            src="/images/diaper.png" 
                            alt="Fabie Baby Diaper Premium Quality" 
                            class="w-full h-full object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-500" 
                        />
                    </div>
                </div>

                <!-- Right 2 Pillars -->
                <div class="lg:col-span-4 space-y-10 sm:space-y-14 text-center lg:text-left">
                    <!-- Pillar 3: Expert Formulation -->
                    <div class="space-y-3 group">
                        <div class="flex justify-center lg:justify-start text-3xl text-pink-300 group-hover:scale-110 transition-transform">
                            <i class="ri-drop-line"></i>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold font-heading text-white">
                            Expert Formulation
                        </h3>
                        <p class="text-xs sm:text-sm text-purple-100/80 leading-relaxed max-w-sm mx-auto lg:mr-auto lg:ml-0">
                            Our team of pediatric experts formulates products tailored to the delicate skin barrier needs of newborns and active rolling babies.
                        </p>
                    </div>

                    <!-- Pillar 4: Nurturing Your Baby -->
                    <div class="space-y-3 group">
                        <div class="flex justify-center lg:justify-start text-3xl text-pink-300 group-hover:scale-110 transition-transform">
                            <i class="ri-user-smile-line"></i>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold font-heading text-white">
                            Nurturing Your Baby
                        </h3>
                        <p class="text-xs sm:text-sm text-purple-100/80 leading-relaxed max-w-sm mx-auto lg:mr-auto lg:ml-0">
                            We believe in nurturing your baby's growth with breathable 12-hour leak-proof dryness that supports restful sleep and happy exploration.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Bottom Dual Pill Actions Matching Babina -->
            <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                <a 
                    href="#products" 
                    class="px-8 py-3 bg-white hover:bg-gray-100 text-[#5725bb] text-xs sm:text-sm font-bold rounded-full shadow-md hover:shadow-lg transition-all active:scale-95"
                >
                    Our Products
                </a>
                <a 
                    href="#about-us" 
                    class="px-8 py-3 bg-transparent hover:bg-white/10 text-white border border-white/70 hover:border-white text-xs sm:text-sm font-bold rounded-full transition-all active:scale-95 inline-flex items-center gap-2 group"
                >
                    <span>Quality</span>
                    <i class="ri-arrow-right-s-line text-sm group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. B2B & GLOBAL DISTRIBUTION SECTION                                      -->
    <!-- ========================================================================= -->
    <section id="b2b-products" class="py-18 sm:py-24 bg-[#FAF9FC] border-b border-purple-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-18">
                <div class="flex items-center justify-center gap-2 text-xs font-bold tracking-widest text-[#6B57B2] uppercase mb-2">
                    <i class="ri-building-4-line"></i>
                    <span>GLOBAL B2B DISTRIBUTION</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#1B2541] tracking-tight">
                    Wholesale &amp; Institutional Baby Care
                </h2>
                <p class="text-gray-600 text-sm sm:text-base mt-3 leading-relaxed">
                    Partner with Fabie Baby for regional distribution rights, supermarket shelf retail, hospital maternity kits, and pharmacy networks worldwide.
                </p>
            </div>

            <!-- 4 B2B Pillars -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Pillar 1: Retail -->
                <div class="bg-white rounded-3xl p-7 border border-purple-100/80 hover:border-[#6B57B2]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-[#6B57B2] group-hover:bg-[#6B57B2] group-hover:text-white transition-colors">
                            <i class="ri-store-3-line text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold font-heading text-[#1B2541]">
                            Retail &amp; Supermarkets
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Barcoded, retail-ready shelf packaging with high consumer appeal and attractive distributor margins.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-purple-50">
                        <span class="text-xs font-bold text-[#6B57B2]">Tiered Volume Pricing</span>
                    </div>
                </div>

                <!-- Pillar 2: Hospitals -->
                <div class="bg-white rounded-3xl p-7 border border-purple-100/80 hover:border-vibrant-rose/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center text-vibrant-rose group-hover:bg-vibrant-rose group-hover:text-white transition-colors">
                            <i class="ri-hospital-line text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold font-heading text-[#1B2541]">
                            Hospitals &amp; Birthing Kits
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Pediatrician-approved newborn diapers with umbilical notch cuts and 99.9% pure water wipes.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-purple-50">
                        <span class="text-xs font-bold text-vibrant-rose">Clinical-Grade Supply</span>
                    </div>
                </div>

                <!-- Pillar 3: Export -->
                <div class="bg-white rounded-3xl p-7 border border-purple-100/80 hover:border-sky-blue/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-sky-blue group-hover:bg-sky-blue group-hover:text-white transition-colors">
                            <i class="ri-global-line text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold font-heading text-[#1B2541]">
                            Global Export Network
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Dubai Municipality approved &amp; GCC compliant with full certificate of analysis (COA) for rapid clearance.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-purple-50">
                        <span class="text-xs font-bold text-sky-blue">Full Export Compliance</span>
                    </div>
                </div>

                <!-- Pillar 4: Kits -->
                <div class="bg-white rounded-3xl p-7 border border-purple-100/80 hover:border-warm-peach/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="w-12 h-12 rounded-2xl bg-orange-50 flex items-center justify-center text-warm-peach group-hover:bg-warm-peach group-hover:text-white transition-colors">
                            <i class="ri-gift-2-line text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold font-heading text-[#1B2541]">
                            Custom Bundles &amp; Kits
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Corporate newborn gift packages, day-care bulk replenishment, and co-branded baby care packs.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-purple-50">
                        <span class="text-xs font-bold text-warm-peach">Flexible MOQ Orders</span>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a 
                    href="#contact" 
                    class="inline-flex items-center gap-2 px-8 py-3.5 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold rounded-full shadow-sm hover:shadow-md transition-all"
                >
                    <span>Inquire About B2B Wholesale</span>
                    <i class="ri-arrow-right-line text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 9. PARENT REVIEWS & TESTIMONIALS (3-at-a-time Slider)                     -->
    <!-- ========================================================================= -->
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
        class="py-18 sm:py-24 bg-white border-b border-purple-100/70"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
                <div class="flex items-center justify-center gap-2 text-xs font-bold tracking-widest text-vibrant-rose uppercase mb-2">
                    <i class="ri-heart-3-fill"></i>
                    <span>PARENT STORIES</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold font-heading text-[#1B2541] tracking-tight">
                    Loved by 100,000+ Mothers
                </h2>
                <p class="text-sm text-gray-500 mt-2">
                    Real, verified feedback from parents who trust Fabie Baby for gentle newborn skin care.
                </p>
            </div>

            <!-- Slider Track -->
            <div class="relative px-2 sm:px-4">
                <div class="overflow-hidden py-2">
                    <div
                        class="flex transition-transform duration-500 ease-out"
                        :style="`transform: translateX(-${currentIndex * (100 / perView)}%)`"
                    >
                        <!-- Review 1 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                            <div class="bg-[#FAF9FC] rounded-3xl p-7 border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-md transition-all duration-300">
                                <div>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="text-amber-400 text-xs flex gap-0.5">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-700 leading-relaxed font-medium italic">
                                        "We had non-stop diaper rash with other big brands. After switching to Fabie Baby pants, my 7-month-old hasn't had a single red spot. The 12-hour overnight absorption is incredible!"
                                    </p>
                                </div>
                                <div class="pt-4 mt-5 border-t border-purple-100/60 text-left">
                                    <h4 class="text-xs font-bold text-gray-900">Sarah L.</h4>
                                    <p class="text-[11px] text-gray-400">Mother of 7-Month Baby • Diaper Pants</p>
                                </div>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                            <div class="bg-[#FAF9FC] rounded-3xl p-7 border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-md transition-all duration-300">
                                <div>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="text-amber-400 text-xs flex gap-0.5">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-700 leading-relaxed font-medium italic">
                                        "The 99.9% pure water wipes are truly fragrance-free, extra thick, and leave no sticky chemical film. I use them for face and diaper changes with complete peace of mind."
                                    </p>
                                </div>
                                <div class="pt-4 mt-5 border-t border-purple-100/60 text-left">
                                    <h4 class="text-xs font-bold text-gray-900">Mariam K.</h4>
                                    <p class="text-[11px] text-gray-400">Mother of Twins • Water Wipes</p>
                                </div>
                            </div>
                        </div>

                        <!-- Review 3 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                            <div class="bg-[#FAF9FC] rounded-3xl p-7 border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-md transition-all duration-300">
                                <div>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="text-amber-400 text-xs flex gap-0.5">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-700 leading-relaxed font-medium italic">
                                        "The organic hydrating lotion calmed my baby's dry patches within two days! It absorbs quickly without greasiness. Knowing it's pH 5.5 tested makes all the difference."
                                    </p>
                                </div>
                                <div class="pt-4 mt-5 border-t border-purple-100/60 text-left">
                                    <h4 class="text-xs font-bold text-gray-900">Pooja R.</h4>
                                    <p class="text-[11px] text-gray-400">Mother of 18-Month Toddler • Lotion</p>
                                </div>
                            </div>
                        </div>

                        <!-- Review 4 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 shrink-0 px-3">
                            <div class="bg-[#FAF9FC] rounded-3xl p-7 border border-purple-100/80 h-full flex flex-col justify-between hover:shadow-md transition-all duration-300">
                                <div>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="text-amber-400 text-xs flex gap-0.5">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-700 leading-relaxed font-medium italic">
                                        "As a pediatrician and mother, I carefully scrutinize ingredients. Fabie Baby's non-toxic guarantee and lab certification make them my top recommendation."
                                    </p>
                                </div>
                                <div class="pt-4 mt-5 border-t border-purple-100/60 text-left">
                                    <h4 class="text-xs font-bold text-gray-900">Dr. Emily C.</h4>
                                    <p class="text-[11px] text-gray-400">Pediatric Specialist &amp; Mother</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button
                    @click="prev()"
                    class="hidden sm:flex absolute -left-2 sm:-left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white shadow-md border border-purple-100 text-gray-700 hover:text-white hover:bg-vibrant-rose items-center justify-center transition-all z-20 cursor-pointer"
                    aria-label="Previous review"
                >
                    <i class="ri-arrow-left-s-line text-xl"></i>
                </button>
                <button
                    @click="next()"
                    class="hidden sm:flex absolute -right-2 sm:-right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white shadow-md border border-purple-100 text-gray-700 hover:text-white hover:bg-vibrant-rose items-center justify-center transition-all z-20 cursor-pointer"
                    aria-label="Next review"
                >
                    <i class="ri-arrow-right-s-line text-xl"></i>
                </button>
            </div>

            <!-- Dots -->
            <div class="flex items-center justify-center gap-2 mt-8">
                <template x-for="i in (total - perView + 1)" :key="i">
                    <button
                        @click="goTo(i - 1)"
                        :class="currentIndex === (i - 1) ? 'w-8 bg-vibrant-rose' : 'w-2.5 bg-gray-300 hover:bg-gray-400'"
                        class="h-2.5 rounded-full transition-all duration-300 cursor-pointer"
                        :title="'Slide ' + i"
                    ></button>
                </template>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 10. FAQ ACCORDION SECTION (Clean & Architectural)                         -->
    <!-- ========================================================================= -->
    <section id="faq" class="py-18 sm:py-24 bg-[#FAF9FC] border-b border-purple-100/70">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
                <div class="flex items-center justify-center gap-2 text-xs font-bold tracking-widest text-[#6B57B2] uppercase mb-2">
                    <i class="ri-questionnaire-line"></i>
                    <span>FREQUENTLY ASKED QUESTIONS</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold font-heading text-[#1B2541] tracking-tight">
                    Got Questions? We Have Answers
                </h2>
                <p class="text-sm text-gray-500 mt-2">
                    Learn more about our pediatric skin safety, Dubai formulations, and wholesale distribution.
                </p>
            </div>

            <!-- Accordion -->
            <div x-data="{ activeAccordion: 1 }" class="space-y-4">
                
                <!-- FAQ 1 -->
                <div 
                    class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden"
                    :class="activeAccordion === 1 ? 'border-purple-300 shadow-sm ring-1 ring-purple-100' : 'border-purple-100/80'"
                >
                    <button 
                        @click="activeAccordion = (activeAccordion === 1 ? null : 1)"
                        type="button"
                        class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                    >
                        <h3 class="text-sm sm:text-base font-bold text-[#1B2541]">
                            Are Fabie Baby products safe for newborn and sensitive skin?
                        </h3>
                        <i 
                            class="ri-arrow-down-s-line text-xl text-gray-400 transition-transform duration-300"
                            :class="activeAccordion === 1 ? 'rotate-180 text-[#6B57B2]' : ''"
                        ></i>
                    </button>
                    <div 
                        x-show="activeAccordion === 1"
                        x-transition:enter="transition ease-out duration-250"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-cloak
                        class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50"
                    >
                        <p>
                            Yes, absolutely. Every Fabie Baby formulation is pediatrician-guided, hypoallergenic, and dermatologically tested to maintain a natural pH of 5.5. We strictly omit parabens, sulphates, artificial dyes, phthalates, and harsh chemicals, making our products safe from day one.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div 
                    class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden"
                    :class="activeAccordion === 2 ? 'border-purple-300 shadow-sm ring-1 ring-purple-100' : 'border-purple-100/80'"
                >
                    <button 
                        @click="activeAccordion = (activeAccordion === 2 ? null : 2)"
                        type="button"
                        class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                    >
                        <h3 class="text-sm sm:text-base font-bold text-[#1B2541]">
                            Where are Fabie Baby products formulated and certified?
                        </h3>
                        <i 
                            class="ri-arrow-down-s-line text-xl text-gray-400 transition-transform duration-300"
                            :class="activeAccordion === 2 ? 'rotate-180 text-[#6B57B2]' : ''"
                        ></i>
                    </button>
                    <div 
                        x-show="activeAccordion === 2"
                        x-transition:enter="transition ease-out duration-250"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-cloak
                        class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50"
                    >
                        <p>
                            Fabie Baby is researched and designed in Dubai under the guidance of seasoned pediatric experts and cosmetic scientists. Our range complies with Dubai Central Laboratory standards, UAE municipality regulations, and international export criteria.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div 
                    class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden"
                    :class="activeAccordion === 3 ? 'border-purple-300 shadow-sm ring-1 ring-purple-100' : 'border-purple-100/80'"
                >
                    <button 
                        @click="activeAccordion = (activeAccordion === 3 ? null : 3)"
                        type="button"
                        class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                    >
                        <h3 class="text-sm sm:text-base font-bold text-[#1B2541]">
                            What makes Fabie Baby diapers rash-free and leak-proof?
                        </h3>
                        <i 
                            class="ri-arrow-down-s-line text-xl text-gray-400 transition-transform duration-300"
                            :class="activeAccordion === 3 ? 'rotate-180 text-[#6B57B2]' : ''"
                        ></i>
                    </button>
                    <div 
                        x-show="activeAccordion === 3"
                        x-transition:enter="transition ease-out duration-250"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-cloak
                        class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50"
                    >
                        <p>
                            Our diapers feature a premium SAP absorbent core offering up to 12 hours of overnight dryness. With microscopic breathable air channels, dual leak guards, and a soft 360° cloud waistband, they eliminate friction and prevent skin rashes before they start.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div 
                    class="bg-white rounded-2xl sm:rounded-3xl border transition-all duration-300 overflow-hidden"
                    :class="activeAccordion === 4 ? 'border-purple-300 shadow-sm ring-1 ring-purple-100' : 'border-purple-100/80'"
                >
                    <button 
                        @click="activeAccordion = (activeAccordion === 4 ? null : 4)"
                        type="button"
                        class="w-full px-6 sm:px-8 py-5 sm:py-6 flex items-center justify-between text-left gap-4 cursor-pointer focus:outline-none"
                    >
                        <h3 class="text-sm sm:text-base font-bold text-[#1B2541]">
                            Do you support wholesale supply, hospitals, and global export?
                        </h3>
                        <i 
                            class="ri-arrow-down-s-line text-xl text-gray-400 transition-transform duration-300"
                            :class="activeAccordion === 4 ? 'rotate-180 text-[#6B57B2]' : ''"
                        ></i>
                    </button>
                    <div 
                        x-show="activeAccordion === 4"
                        x-transition:enter="transition ease-out duration-250"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-cloak
                        class="px-6 sm:px-8 pb-6 pt-1 text-xs sm:text-sm text-gray-600 leading-relaxed border-t border-purple-50"
                    >
                        <p>
                            Yes, we partner with retail supermarket chains, pharmacy distributors, hospitals, and maternity centers worldwide. We offer flexible tiered volume pricing, full export compliance documentation (COA), and customized baby bundle kits.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Still Have Questions Clean Banner -->
            <div class="mt-12 sm:mt-16 bg-white rounded-3xl p-6 sm:p-8 border border-purple-100 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left">
                <div>
                    <h4 class="text-base sm:text-lg font-bold text-[#1B2541]">Still have questions?</h4>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1">Our mother &amp; baby care team is here to assist you anytime.</p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <a 
                        href="#contact" 
                        class="inline-flex items-center gap-2 px-6 py-3 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs sm:text-sm font-bold rounded-full shadow-2xs hover:shadow-sm transition-all"
                    >
                        <i class="ri-mail-send-line"></i>
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 11. QUICK VIEW MODAL POPUP (Clean & Professional)                        -->
    <!-- ========================================================================= -->
    @if($selectedProduct)
    <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div wire:click="closeQuickView" class="fixed inset-0 bg-gray-900/50 backdrop-blur-xs transition-opacity"></div>

            <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full border border-purple-100">
                <div class="p-6 sm:p-8 relative">
                    <button wire:click="closeQuickView" class="absolute top-4 right-4 p-2 text-gray-400 hover:text-gray-700 rounded-full hover:bg-gray-100 cursor-pointer">
                        <i class="ri-close-line text-xl"></i>
                    </button>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                        <div class="rounded-2xl overflow-hidden flex items-center justify-center h-52 sm:h-64 bg-gray-50 border border-purple-50 p-4">
                            <img src="{{ $selectedProduct['image'] }}" alt="{{ $selectedProduct['name'] }}" class="w-full h-full object-contain" />
                        </div>
                        <div class="space-y-3">
                            <span class="text-[11px] font-bold text-[#6B57B2] uppercase tracking-wider block">
                                {{ $selectedProduct['category'] ?? '' }}
                            </span>
                            <h3 class="text-base sm:text-lg font-bold text-[#1B2541] leading-snug">
                                {{ $selectedProduct['name'] }}
                            </h3>

                            <p class="text-xs text-gray-600 leading-relaxed">
                                {{ $selectedProduct['description'] }}
                            </p>

                            <!-- Specifications -->
                            <div class="pt-2 pb-1 space-y-1.5 text-xs text-gray-600">
                                <p class="flex items-center gap-1.5"><i class="ri-check-line text-pastel-green font-bold"></i> pH 5.5 Balanced formulation</p>
                                <p class="flex items-center gap-1.5"><i class="ri-check-line text-pastel-green font-bold"></i> 0% Harsh synthetic chemicals</p>
                                <p class="flex items-center gap-1.5"><i class="ri-check-line text-pastel-green font-bold"></i> Dermatologist tested for newborn care</p>
                            </div>

                            @if(!empty($selectedProduct['sizes']))
                            <div class="pt-2">
                                <span class="text-[11px] font-bold text-gray-700 block mb-1.5">Available Sizes / Options:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach($selectedProduct['sizes'] as $size)
                                    <span class="px-2.5 py-1 rounded-lg text-[10px] font-semibold bg-gray-50 text-gray-700 border border-purple-100">
                                        {{ $size }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            <div class="pt-3 flex gap-2.5">
                                <a
                                    href="#contact"
                                    wire:click="closeQuickView"
                                    class="flex-1 py-2.5 px-4 bg-vibrant-rose hover:bg-pink-600 text-white text-xs font-bold rounded-full transition-all text-center shadow-xs"
                                >
                                    Inquire About Product
                                </a>
                                <button
                                    wire:click="closeQuickView"
                                    class="py-2.5 px-4 border border-purple-200 text-gray-600 hover:bg-gray-50 text-xs font-bold rounded-full transition-colors cursor-pointer"
                                >
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