<div class="relative">


    <!-- Full-Screen Edge-to-Edge Hero Slider Banner (With Auto-Sliding & Hover-Pause) -->
    <section 
        x-data="{ timer: null }"
        x-init="timer = setInterval(() => $wire.nextSlide(), 5000)"
        @mouseenter="clearInterval(timer)"
        @mouseleave="timer = setInterval(() => $wire.nextSlide(), 5000)"
        class="relative w-full overflow-hidden"
    >
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
    </section>

    <!-- Trust & Safety Highlights Bar (Symmetrical & Perfectly Ordered) -->
    <section class="bg-white py-8 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 lg:gap-0 lg:divide-x divide-gray-100 items-center">
                <!-- Item 1: Safe & Gentle -->
                <div class="flex items-center gap-3.5 lg:px-4">
                    <i class="ri-plant-line text-3xl sm:text-4xl text-pastel-green flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Safe & Gentle</h4>
                        <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Thoughtfully formulated</p>
                    </div>
                </div>

                <!-- Item 2: Dermatologically Tested -->
                <div class="flex items-center gap-3.5 lg:px-4">
                    <i class="ri-drop-line text-3xl sm:text-4xl text-sky-blue flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Dermatologically Tested</h4>
                        <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Kind on delicate skin</p>
                    </div>
                </div>

                <!-- Item 3: Pediatrician Recommended -->
                <div class="flex items-center gap-3.5 lg:px-4">
                    <i class="ri-user-smile-line text-3xl sm:text-4xl text-soft-purple flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Pediatrician Recommended</h4>
                        <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Trusted by experts</p>
                    </div>
                </div>

                <!-- Item 4: Inspired by Ayurveda -->
                <div class="flex items-center gap-3.5 lg:px-4">
                    <i class="ri-heart-3-line text-3xl sm:text-4xl text-vibrant-rose flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Inspired by Ayurveda</h4>
                        <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Goodness of nature in every drop</p>
                    </div>
                </div>

                <!-- Item 5: Made for Babies -->
                <div class="flex items-center gap-3.5 lg:px-4">
                    <i class="ri-shield-user-line text-3xl sm:text-4xl text-deep-purple flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-[#1B2541] text-xs sm:text-sm leading-tight">Made for Babies</h4>
                        <p class="text-[11px] sm:text-xs text-gray-500 mt-0.5">Care for every stage of childhood</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Explorer Grid Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-vibrant-rose bg-soft-pink px-4 py-1.5 rounded-full">Curated Product Range</span>
                <h2 class="text-3xl sm:text-4xl font-bold font-heading text-gray-900 mt-3">Designed for Every Stage of Joy</h2>
                <p class="text-gray-500 text-sm mt-2">Ultra-gentle formulations designed to support your baby’s delicate skin from day one.</p>
            </div>

            <!-- Clean Lifestyle Image Masonry Grid (Inspired by AIWIBI) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-6">
                <!-- Column 1 -->
                <div class="flex flex-col gap-5 lg:gap-6">
                    <!-- Top Card: DIAPERS & PANTS -->
                    <div wire:click="setCategory('Diapers')" class="relative h-64 sm:h-72 lg:h-80 rounded-2xl lg:rounded-3xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-300">
                        <img src="/images/cat_diapers.jpg" alt="Diapers & Pants" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-black/10 group-hover:bg-black/40 transition-colors flex items-center justify-center p-6 text-center">
                            <h3 class="text-xl sm:text-2xl font-black text-white tracking-widest uppercase drop-shadow-md group-hover:scale-110 transition-transform">
                                DIAPERS & PANTS
                            </h3>
                        </div>
                    </div>
                    <!-- Bottom Card: ACCESSORIES -->
                    <div wire:click="setCategory('Skincare')" class="relative h-48 sm:h-56 lg:h-60 rounded-2xl lg:rounded-3xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-300">
                        <img src="/images/cat_accessories.jpg" alt="Accessories" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-black/10 group-hover:bg-black/40 transition-colors flex items-center justify-center p-6 text-center">
                            <h3 class="text-lg sm:text-xl font-black text-white tracking-widest uppercase drop-shadow-md group-hover:scale-110 transition-transform">
                                ACCESSORIES
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="flex flex-col gap-5 lg:gap-6">
                    <!-- Top Card: BODY CARE -->
                    <div wire:click="setCategory('Bath')" class="relative h-72 sm:h-80 lg:h-96 rounded-2xl lg:rounded-3xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-300">
                        <img src="/images/cat_bodycare.jpg" alt="Body Care" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-black/10 group-hover:bg-black/40 transition-colors flex items-center justify-center p-6 text-center">
                            <h3 class="text-xl sm:text-2xl font-black text-white tracking-widest uppercase drop-shadow-md group-hover:scale-110 transition-transform">
                                BODY CARE
                            </h3>
                        </div>
                    </div>
                    <!-- Bottom Card: WET WIPES -->
                    <div wire:click="setCategory('Wipes')" class="relative h-40 sm:h-48 lg:h-[11rem] rounded-2xl lg:rounded-3xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-300">
                        <img src="/images/cat_wipes.jpg" alt="Wet Wipes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-black/10 group-hover:bg-black/40 transition-colors flex items-center justify-center p-6 text-center">
                            <h3 class="text-lg sm:text-xl font-black text-white tracking-widest uppercase drop-shadow-md group-hover:scale-110 transition-transform">
                                WET WIPES
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="flex flex-col gap-5 lg:gap-6">
                    <!-- Top Card: CLEANING -->
                    <div wire:click="setCategory('Bath')" class="relative h-44 sm:h-48 lg:h-52 rounded-2xl lg:rounded-3xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-300">
                        <img src="/images/cat_cleaning.jpg" alt="Cleaning" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-black/10 group-hover:bg-black/40 transition-colors flex items-center justify-center p-6 text-center">
                            <h3 class="text-lg sm:text-xl font-black text-white tracking-widest uppercase drop-shadow-md group-hover:scale-110 transition-transform">
                                CLEANING
                            </h3>
                        </div>
                    </div>
                    <!-- Bottom Card: FEEDING -->
                    <div wire:click="setCategory('Skincare')" class="relative h-68 sm:h-80 lg:h-[21.5rem] rounded-2xl lg:rounded-3xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-300">
                        <img src="/images/cat_feeding.jpg" alt="Feeding" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-black/10 group-hover:bg-black/40 transition-colors flex items-center justify-center p-6 text-center">
                            <h3 class="text-xl sm:text-2xl font-black text-white tracking-widest uppercase drop-shadow-md group-hover:scale-110 transition-transform">
                                FEEDING
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Featured Collection Grid Section -->
    <section class="py-16 bg-[#F4F7FC] border-t border-purple-50/60 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Centered Header Title -->
            <div class="text-center max-w-xl mx-auto mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold font-heading text-[#1B2541] tracking-tight">
                    Featured Collection
                </h2>
                <p class="text-gray-500 text-xs sm:text-sm mt-2 font-medium">
                    Handpicked dermatologist-approved essentials for your baby’s delicate daily care.
                </p>
            </div>

            <!-- 4-Column Featured Collection Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-7">
                @foreach(array_slice($products, 0, 4) as $product)
                    <div class="bg-white rounded-3xl p-5 sm:p-6 shadow-sm border border-purple-50 hover:shadow-xl transition-all duration-300 flex flex-col justify-between items-center text-center group relative overflow-hidden">
                        <!-- Full Size Image with Border -->
                        <div wire:click="openQuickView({{ $product['id'] }})" class="w-full h-56 sm:h-60  rounded-2xl overflow-hidden bg-white flex items-center justify-center mb-4 cursor-pointer relative  transition-colors">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105" />
                        </div>

                        <!-- Product Title -->
                        <h3 wire:click="openQuickView({{ $product['id'] }})" class="font-bold text-gray-800 text-sm sm:text-base group-hover:text-vibrant-rose transition-colors leading-snug line-clamp-2 h-11 flex items-center justify-center text-center cursor-pointer mb-5 px-1">
                            {{ $product['name'] }}
                        </h3>

                        <!-- CTA VIEW MORE Button with Website Brand Color & Reduced Py/Px -->
                        <button wire:click="openQuickView({{ $product['id'] }})" class="w-full py-2.5 px-5 bg-[#6B57B2] hover:bg-vibrant-rose text-white text-xs font-black tracking-wider uppercase rounded-xl transition-all duration-300 shadow-sm active:scale-95 flex items-center justify-center gap-1.5 group-hover:shadow-md">
                            <span>VIEW MORE</span>
                            <i class="ri-arrow-right-line text-sm transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Brand Standards & Certified Quality Section (Brand Promises) -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold font-heading text-[#1B2541] mt-3">Brand Promises</h2>
                <p class="text-gray-500 text-sm mt-2">Because they deserve the best — formulated with natural, safe ingredients to soothe, nurture, and protect your baby's delicate skin.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 1. Safe Ingredients -->
                <div class="p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-20 h-20 mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                            <img src="{{ asset('brand_promises/Safe Ingredients.jpg') }}" alt="Safe Ingredients" class="w-full h-full object-contain rounded-2xl" />
                        </div>
                        <h3 class="text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-3">
                            Safe Ingredients
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Time Tested ingredients are used. We make sure product remain high Quality. Free from over 200 Synthetic and Harsh Chemicals.
                        </p>
                    </div>
                </div>

                <!-- 2. Product Testing -->
                <div class="p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-20 h-20 mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                            <img src="{{ asset('brand_promises/Product Testing.png') }}" alt="Product Testing" class="w-full h-full object-contain rounded-2xl" />
                        </div>
                        <h3 class="text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-3">
                            Product Testing
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Each product is Tested at Dubai Central Laboratory, which is highly acclaimed laboratory. Products are also approved by Dubai Municipality, UAE to produce and Sale in UAE Market.
                        </p>
                    </div>
                </div>

                <!-- 3. pH 5.5 -->
                <div class="p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-20 h-20 mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                            <img src="{{ asset('brand_promises/pH 5.5.jpg') }}" alt="pH 5.5" class="w-full h-full object-contain rounded-2xl" />
                        </div>
                        <h3 class="text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-3">
                            pH 5.5
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Each product has pH- 5.5, which is a neutral so that your baby’s skin is balanced and in good health, and therefore better protected against irritants in the environment.
                        </p>
                    </div>
                </div>

                <!-- 4. Hypoallergenic -->
                <div class="p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-20 h-20 mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                            <img src="{{ asset('brand_promises/Hypoallergenic.jpg') }}" alt="Hypoallergenic" class="w-full h-full object-contain rounded-2xl" />
                        </div>
                        <h3 class="text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-3">
                            Hypoallergenic
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Skin-compatible raw materials, which gently soothe, nurture and protect the skin. Strict adherence to international standards at each stage of the production.
                        </p>
                    </div>
                </div>

                <!-- 5. Eco-Friendly -->
                <div class="p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-20 h-20 mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                            <img src="{{ asset('brand_promises/Eco-Friendly.png') }}" alt="Eco-Friendly" class="w-full h-full object-contain rounded-2xl" />
                        </div>
                        <h3 class="text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-3">
                            Eco-Friendly
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Committed to environment-friendly packaging. Recyclable packaging material used. No animal testing.
                        </p>
                    </div>
                </div>

                <!-- 6. Service -->
                <div class="p-8 rounded-3xl bg-[#F8F6FD] border border-purple-100/70 hover:border-purple-300 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-20 h-20 mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                            <img src="{{ asset('brand_promises/Service.png') }}" alt="Service" class="w-full h-full object-contain rounded-2xl" />
                        </div>
                        <h3 class="text-xl font-bold font-heading text-[#1B2541] group-hover:text-vibrant-rose transition-colors mb-3">
                            Service
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            High-quality products and services. It is our responsibility to fulfill all our business partners’ demands at any time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




   

    <!-- Slide-Over Cart Drawer -->
    @if($cartOpen)
        <div class="fixed inset-0 z-50 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <div wire:click="toggleCart" class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm transition-opacity"></div>

            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <div class="pointer-events-auto w-screen max-w-md bg-white shadow-2xl flex flex-col justify-between">
                    <!-- Drawer Header -->
                    <div class="p-6 bg-soft-pink border-b border-pink-100 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <i class="ri-shopping-bag-3-fill text-vibrant-rose text-xl"></i>
                            <h2 class="text-lg font-bold font-heading text-gray-900">Your Baby Care Cart ({{ $cartCount }})</h2>
                        </div>
                        <button wire:click="toggleCart" class="p-2 text-gray-400 hover:text-gray-700 rounded-full hover:bg-white transition-colors">
                            <i class="ri-close-line text-xl"></i>
                        </button>
                    </div>

                    <!-- Items List -->
                    <div class="flex-1 overflow-y-auto p-6 space-y-4">
                        @forelse($cart as $index => $item)
                            <div class="flex items-center gap-4 p-3 rounded-2xl bg-cream-bg border border-purple-100">
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-contain rounded-xl bg-white p-1" />
                                <div class="flex-1">
                                    <h4 class="text-xs font-bold text-gray-900 line-clamp-1">{{ $item['name'] }}</h4>
                                    <div class="text-[10px] text-gray-500">{{ $item['variant'] }}</div>
                                    <div class="text-sm font-bold text-vibrant-rose mt-1">${{ number_format($item['price'], 2) }}</div>
                                </div>
                                <div class="flex items-center border border-gray-200 bg-white rounded-lg">
                                    <button wire:click="updateQuantity({{ $index }}, -1)" class="px-2 py-1 text-gray-500 hover:text-gray-900">-</button>
                                    <span class="px-2 text-xs font-bold">{{ $item['quantity'] }}</span>
                                    <button wire:click="updateQuantity({{ $index }}, 1)" class="px-2 py-1 text-gray-500 hover:text-gray-900">+</button>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-12">
                                <i class="ri-shopping-bag-line text-4xl text-gray-300"></i>
                                <p class="text-xs text-gray-500 mt-2">Your cart is empty.</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Footer Checkout -->
                    <div class="p-6 bg-gray-50 border-t border-gray-100 space-y-3">
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>Subtotal:</span>
                            <span class="font-bold text-gray-900">${{ number_format($cartSubtotal, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>Estimated Shipping:</span>
                            <span class="font-bold text-pastel-green">FREE</span>
                        </div>
                        <div class="flex justify-between text-sm font-bold border-t border-gray-200 pt-2">
                            <span>Total:</span>
                            <span class="text-vibrant-rose font-heading">${{ number_format($cartSubtotal, 2) }}</span>
                        </div>
                        <button onclick="alert('Proceeding to checkout!')" class="w-full py-3.5 bg-vibrant-rose text-white font-bold text-xs rounded-full shadow-lg hover:bg-pink-600 transition-all flex items-center justify-center gap-2">
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
                <div wire:click="closeQuickView" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity"></div>

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
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold {{ $selectedProduct['badgeColor'] }}">
                                    {{ $selectedProduct['badge'] }}
                                </span>
                                <h3 class="text-lg font-bold text-gray-900">{{ $selectedProduct['name'] }}</h3>
                                <div class="text-lg font-bold font-heading text-vibrant-rose">${{ number_format($selectedProduct['price'], 2) }}</div>
                                <p class="text-xs text-gray-600 leading-relaxed">{{ $selectedProduct['description'] }}</p>

                                <button wire:click="addToCart({{ $selectedProduct['id'] }}); closeQuickView();" class="w-full py-3 bg-vibrant-rose text-white text-xs font-bold rounded-full shadow-md hover:bg-pink-600 transition-all flex items-center justify-center gap-2">
                                    <i class="ri-shopping-cart-2-line"></i> Add to Cart Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>