<div class="relative min-h-screen">
    <!-- Top Announcement Bar -->
    <div class="bg-soft-purple text-white text-xs sm:text-sm py-2 px-4 shadow-sm">
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
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 group">
                    <img src="/logo.webp" alt="Fabie Baby Logo" class="h-12 w-auto transition-transform group-hover:scale-105" />
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-gray-700">
                    <button wire:click="setCategory('All')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'All' ? 'border-vibrant-rose text-vibrant-rose' : 'border-transparent' }}">
                        Home
                    </button>
                    <button wire:click="setCategory('Diapers')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Diapers' ? 'border-vibrant-rose text-vibrant-rose' : 'border-transparent' }}">
                        Diapers & Pants
                    </button>
                    <button wire:click="setCategory('Wipes')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Wipes' ? 'border-vibrant-rose text-vibrant-rose' : 'border-transparent' }}">
                        Baby Wipes
                    </button>
                    <button wire:click="setCategory('Skincare')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Skincare' ? 'border-vibrant-rose text-vibrant-rose' : 'border-transparent' }}">
                        Organic Skincare
                    </button>
                    <button wire:click="setCategory('Bath')" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 {{ $activeCategory === 'Bath' ? 'border-vibrant-rose text-vibrant-rose' : 'border-transparent' }}">
                        Bath & Body
                    </button>
                    <a href="#size-calculator" class="hover:text-vibrant-rose transition-colors py-2 border-b-2 border-transparent text-soft-purple font-bold">
                        <i class="ri-scales-3-line"></i> Size Guide
                    </a>
                </nav>

                <!-- Actions Right -->
                <div class="flex items-center gap-3">
                    <div class="relative hidden sm:block">
                        <input type="text" placeholder="Search baby products..." class="w-48 xl:w-64 bg-cream-bg text-xs rounded-full py-2.5 pl-9 pr-4 border border-purple-100 focus:outline-none focus:border-soft-purple focus:ring-2 focus:ring-purple-100 transition-all" />
                        <i class="ri-search-line absolute left-3 top-2.5 text-gray-400"></i>
                    </div>

                    <button class="p-2.5 text-gray-600 hover:text-vibrant-rose rounded-full hover:bg-soft-pink transition-colors relative" title="Wishlist">
                        <i class="ri-heart-line text-xl"></i>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-vibrant-rose rounded-full"></span>
                    </button>

                    <!-- Reactive Cart Drawer Button -->
                    <button wire:click="toggleCart" class="relative p-2.5 bg-soft-pink text-vibrant-rose font-semibold rounded-full hover:bg-vibrant-rose hover:text-white transition-all flex items-center gap-2 px-4 shadow-sm group">
                        <i class="ri-shopping-bag-3-line text-xl group-hover:animate-bounce"></i>
                        <span class="text-xs font-bold">{{ $cartCount }}</span>
                        <span class="hidden md:inline text-xs font-medium border-l border-pink-200 pl-2 text-gray-700 group-hover:text-white">${{ number_format($cartSubtotal, 2) }}</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Toast Notification -->
    @if($toastMessage)
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3500)" x-show="show" x-transition class="fixed bottom-6 right-6 z-50 bg-gray-900 text-white px-5 py-3.5 rounded-2xl shadow-2xl flex items-center gap-3 border border-purple-400/30">
            <div class="w-8 h-8 bg-pastel-green rounded-full flex items-center justify-center text-white font-bold">
                <i class="ri-check-line text-lg"></i>
            </div>
            <span class="text-sm font-medium">{{ $toastMessage }}</span>
        </div>
    @endif

    <!-- Hero Showcase Section -->
    <section class="relative overflow-hidden bg-gradient-to-b from-soft-pink via-cream-bg to-white py-12 lg:py-20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-soft-purple/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 -left-24 w-80 h-80 bg-sky-blue/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Content -->
                <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-purple-100 shadow-sm text-xs font-bold text-soft-purple">
                        <span class="w-2.5 h-2.5 rounded-full bg-vibrant-rose animate-ping"></span>
                        Next-Generation Baby Care Technology
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold font-heading text-gray-900 leading-tight">
                        Gentle as a <span class="text-vibrant-rose underline decoration-wavy decoration-soft-purple/30">Mother's Touch</span>, Pure as Nature
                    </h1>

                    <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-xl mx-auto lg:mx-0">
                        Crafted with 100% organic cotton, 12-hour instant absorbency core, and 0% harmful chemicals. Inspired by Australia's purest baby care standards.
                    </p>

                    <!-- Feature Pills -->
                    <div class="flex flex-wrap justify-center lg:justify-start gap-3 pt-2">
                        <span class="inline-flex items-center gap-1.5 bg-soft-green text-pastel-green px-3.5 py-1.5 rounded-full text-xs font-bold">
                            <i class="ri-leaf-line text-base"></i> 100% Organic Bamboo
                        </span>
                        <span class="inline-flex items-center gap-1.5 bg-soft-blue text-sky-blue px-3.5 py-1.5 rounded-full text-xs font-bold">
                            <i class="ri-drop-line text-base"></i> 12H Ultra Lock Core
                        </span>
                        <span class="inline-flex items-center gap-1.5 bg-soft-orange text-warm-peach px-3.5 py-1.5 rounded-full text-xs font-bold">
                            <i class="ri-shield-star-line text-base"></i> 0% Paraben & Chlorine
                        </span>
                    </div>

                    <!-- Call To Action -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <button wire:click="setCategory('Diapers')" class="w-full sm:w-auto px-8 py-4 bg-vibrant-rose text-white font-bold text-sm rounded-full shadow-lg shadow-vibrant-rose/30 hover:bg-pink-600 hover:shadow-xl hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2">
                            <span>Shop Premium Care</span>
                            <i class="ri-arrow-right-line text-lg"></i>
                        </button>

                        <a href="#science" class="w-full sm:w-auto px-8 py-4 bg-white text-gray-700 font-bold text-sm rounded-full border border-gray-200 hover:border-soft-purple hover:text-soft-purple shadow-sm transition-all flex items-center justify-center gap-2">
                            <i class="ri-play-circle-line text-lg text-vibrant-rose"></i>
                            <span>See Gentle Science</span>
                        </a>
                    </div>

                    <!-- Trust Stats Bar -->
                    <div class="grid grid-cols-3 gap-4 pt-8 border-t border-purple-100 max-w-lg mx-auto lg:mx-0">
                        <div>
                            <div class="text-2xl font-bold font-heading text-gray-900">99.9%</div>
                            <div class="text-xs text-gray-500 font-medium">EDI Pure Water</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold font-heading text-gray-900">0%</div>
                            <div class="text-xs text-gray-500 font-medium">Harmful Chemicals</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold font-heading text-gray-900">12 Hrs</div>
                            <div class="text-xs text-gray-500 font-medium">Dryness Lock</div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Hero Image Showcase -->
                <div class="lg:col-span-6 relative flex justify-center">
                    <div class="relative w-full max-w-md lg:max-w-lg">
                        <!-- Decorative Pastel Backdrop Glow -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-soft-purple via-vibrant-rose to-sky-blue rounded-3xl rotate-3 scale-95 opacity-20 blur-xl"></div>
                        
                        <div class="relative bg-white/90 backdrop-blur-md p-6 rounded-3xl shadow-2xl border border-white">
                            <img src="/images/diapers.jpg" alt="Fabie Baby Diapers Pack" class="w-full h-auto object-cover rounded-2xl shadow-md transition-transform duration-500 hover:scale-102" />

                            <!-- Floating Card Badge 1 -->
                            <div class="absolute -top-4 -left-4 bg-white p-3 rounded-2xl shadow-xl border border-purple-100 flex items-center gap-3">
                                <div class="w-10 h-10 bg-soft-pink rounded-xl flex items-center justify-center text-vibrant-rose font-bold">
                                    <i class="ri-heart-pulse-fill text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-gray-900">Dermatest Rated</div>
                                    <div class="text-[10px] text-gray-500">5-Star Excellent Care</div>
                                </div>
                            </div>

                            <!-- Floating Card Badge 2 -->
                            <div class="absolute -bottom-4 -right-4 bg-white p-3.5 rounded-2xl shadow-xl border border-purple-100 flex items-center gap-3">
                                <div class="w-10 h-10 bg-soft-green rounded-xl flex items-center justify-center text-pastel-green font-bold">
                                    <i class="ri-checkbox-circle-fill text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-gray-900">3D Air Breathable</div>
                                    <div class="text-[10px] text-gray-500">Zero Rash Guarantee</div>
                                </div>
                            </div>
                        </div>
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

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <button wire:click="setCategory('Diapers')" class="group p-6 rounded-3xl bg-soft-purple/30 border border-purple-100 hover:border-soft-purple hover:shadow-xl transition-all text-left relative overflow-hidden">
                    <div class="w-14 h-14 bg-soft-purple text-white rounded-2xl flex items-center justify-center text-2xl shadow-md group-hover:scale-110 transition-transform">
                        <i class="ri-file-cloud-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mt-6 group-hover:text-soft-purple transition-colors">Diapers & Pants</h3>
                    <p class="text-xs text-gray-500 mt-1">12H Leak-Lock & 360° Fit</p>
                    <div class="mt-4 flex items-center text-xs font-bold text-soft-purple">
                        <span>Explore Range</span>
                        <i class="ri-arrow-right-s-line text-base transition-transform group-hover:translate-x-1"></i>
                    </div>
                </button>

                <!-- Card 2 -->
                <button wire:click="setCategory('Wipes')" class="group p-6 rounded-3xl bg-soft-blue/40 border border-blue-100 hover:border-sky-blue hover:shadow-xl transition-all text-left relative overflow-hidden">
                    <div class="w-14 h-14 bg-sky-blue text-white rounded-2xl flex items-center justify-center text-2xl shadow-md group-hover:scale-110 transition-transform">
                        <i class="ri-sparkles-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mt-6 group-hover:text-sky-blue transition-colors">Pure Water Wipes</h3>
                    <p class="text-xs text-gray-500 mt-1">99% EDI Pure & Thick</p>
                    <div class="mt-4 flex items-center text-xs font-bold text-sky-blue">
                        <span>Explore Wipes</span>
                        <i class="ri-arrow-right-s-line text-base transition-transform group-hover:translate-x-1"></i>
                    </div>
                </button>

                <!-- Card 3 -->
                <button wire:click="setCategory('Skincare')" class="group p-6 rounded-3xl bg-soft-pink/60 border border-pink-100 hover:border-vibrant-rose hover:shadow-xl transition-all text-left relative overflow-hidden">
                    <div class="w-14 h-14 bg-vibrant-rose text-white rounded-2xl flex items-center justify-center text-2xl shadow-md group-hover:scale-110 transition-transform">
                        <i class="ri-plant-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mt-6 group-hover:text-vibrant-rose transition-colors">Organic Skincare</h3>
                    <p class="text-xs text-gray-500 mt-1">Nourishing Chamomile & Oat</p>
                    <div class="mt-4 flex items-center text-xs font-bold text-vibrant-rose">
                        <span>Explore Skincare</span>
                        <i class="ri-arrow-right-s-line text-base transition-transform group-hover:translate-x-1"></i>
                    </div>
                </button>

                <!-- Card 4 -->
                <button wire:click="setCategory('Bath')" class="group p-6 rounded-3xl bg-soft-green/60 border border-green-100 hover:border-pastel-green hover:shadow-xl transition-all text-left relative overflow-hidden">
                    <div class="w-14 h-14 bg-pastel-green text-white rounded-2xl flex items-center justify-center text-2xl shadow-md group-hover:scale-110 transition-transform">
                        <i class="ri-bubble-chart-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mt-6 group-hover:text-pastel-green transition-colors">Tear-Free Bath</h3>
                    <p class="text-xs text-gray-500 mt-1">Gentle Shampoo & Body Wash</p>
                    <div class="mt-4 flex items-center text-xs font-bold text-pastel-green">
                        <span>Explore Bath Care</span>
                        <i class="ri-arrow-right-s-line text-base transition-transform group-hover:translate-x-1"></i>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- Filterable Best Sellers Product Cards Grid -->
    <section class="py-16 bg-cream-bg border-t border-purple-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-10">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-soft-purple bg-soft-purple/10 px-3.5 py-1 rounded-full">Best Sellers & New Arrivals</span>
                    <h2 class="text-3xl font-bold font-heading text-gray-900 mt-2">Loved by Mothers Worldwide</h2>
                </div>

                <!-- Category Tabs Filter -->
                <div class="flex flex-wrap items-center gap-2 bg-white p-1.5 rounded-full border border-gray-200 shadow-sm">
                    @foreach(['All', 'Diapers', 'Wipes', 'Skincare', 'Bath'] as $cat)
                        <button wire:click="setCategory('{{ $cat }}')" class="px-5 py-2 rounded-full text-xs font-bold transition-all {{ $activeCategory === $cat ? 'bg-vibrant-rose text-white shadow-md' : 'text-gray-600 hover:text-gray-900' }}">
                            {{ $cat }}
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Product Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($filteredProducts as $product)
                    <div class="bg-white rounded-3xl border border-gray-100 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between overflow-hidden group">
                        <div class="p-5 relative">
                            <!-- Discount / Badge -->
                            <span class="absolute top-7 left-7 px-3 py-1 rounded-full text-[11px] font-bold shadow-sm z-10 {{ $product['badgeColor'] }}">
                                {{ $product['badge'] }}
                            </span>

                            <button wire:click="openQuickView({{ $product['id'] }})" class="absolute top-7 right-7 w-9 h-9 bg-white/90 backdrop-blur-md rounded-full shadow border border-gray-100 flex items-center justify-center text-gray-600 hover:text-vibrant-rose hover:scale-110 transition-all z-10" title="Quick View">
                                <i class="ri-eye-line text-base"></i>
                            </button>

                            <!-- Product Image -->
                            <div class="w-full h-64 bg-cream-bg rounded-2xl overflow-hidden flex items-center justify-center p-4 relative group">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-108" />
                            </div>

                            <!-- Rating -->
                            <div class="flex items-center gap-1.5 mt-4">
                                <div class="flex text-amber-400 text-sm">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <span class="text-xs font-bold text-gray-800">{{ $product['rating'] }}</span>
                                <span class="text-xs text-gray-400">({{ $product['reviewsCount'] }} reviews)</span>
                            </div>

                            <!-- Title & Subtitle -->
                            <h3 class="text-lg font-bold text-gray-900 mt-1.5 group-hover:text-vibrant-rose transition-colors line-clamp-1">
                                {{ $product['name'] }}
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-1">{{ $product['subtitle'] }}</p>

                            <!-- Size Selector Pills -->
                            <div class="flex flex-wrap gap-1.5 mt-4">
                                @foreach(array_slice($product['sizes'], 0, 3) as $size)
                                    <span class="px-2.5 py-1 bg-gray-50 border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold">
                                        {{ $size }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Card Footer Price & Add To Cart -->
                        <div class="px-5 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between gap-4">
                            <div>
                                <span class="text-xl font-bold font-heading text-gray-900">${{ number_format($product['price'], 2) }}</span>
                                <span class="text-xs text-gray-400 line-through ml-1.5">${{ number_format($product['oldPrice'], 2) }}</span>
                            </div>

                            <button wire:click="addToCart({{ $product['id'] }}, '{{ $product['sizes'][0] ?? 'Standard Pack' }}')" class="px-4 py-2.5 bg-vibrant-rose text-white text-xs font-bold rounded-full shadow-md hover:bg-pink-600 transition-all flex items-center gap-1.5 active:scale-95">
                                <i class="ri-shopping-cart-2-line text-sm"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Aiwibi-Style Gentle Science Showcase ("Why Choose Fabie Baby") -->
    <section id="science" class="py-20 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-pastel-green bg-soft-green px-4 py-1.5 rounded-full">Engineering Meets Pure Love</span>
                <h2 class="text-3xl sm:text-4xl font-bold font-heading text-gray-900 mt-3">Why Mothers Trust Fabie Baby Every Day</h2>
                <p class="text-gray-500 text-sm mt-2">Designed with medical precision to prevent diaper rash and keep skin silky smooth.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-8 rounded-3xl bg-soft-pink/40 border border-pink-100 text-center relative group hover:shadow-xl transition-all">
                    <div class="w-16 h-16 mx-auto bg-vibrant-rose text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-vibrant-rose/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-windy-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">3D Air Topsheet</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mt-3">
                        Micro-embossed 3D surface channels air freely under your baby’s bottom, reducing skin friction by up to 60%.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="p-8 rounded-3xl bg-soft-purple/40 border border-purple-100 text-center relative group hover:shadow-xl transition-all">
                    <div class="w-16 h-16 mx-auto bg-soft-purple text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-soft-purple/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-water-flash-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">12H Instant Core</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mt-3">
                        Japanese Sumitomo SAP technology locks up to 1000ml of liquid within 5 seconds, staying dry through the whole night.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="p-8 rounded-3xl bg-soft-green/40 border border-green-100 text-center relative group hover:shadow-xl transition-all">
                    <div class="w-16 h-16 mx-auto bg-pastel-green text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-pastel-green/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-shield-cross-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">0% Harmful Additives</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mt-3">
                        Free from elemental chlorine, artificial perfumes, parabens, and latex to ensure zero irritation on newborn skin.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Diaper Size & Weight Calculator -->
    <section id="size-calculator" class="py-16 bg-gradient-to-r from-soft-purple to-deep-purple text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-4">
                    <span class="inline-flex items-center gap-1.5 bg-white/20 backdrop-blur-md px-3.5 py-1 rounded-full text-xs font-bold text-warm-peach">
                        <i class="ri-ruler-2-line"></i> Smart Size Assistant
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold font-heading">Find Your Baby's Perfect Fit</h2>
                    <p class="text-purple-100 text-sm leading-relaxed">
                        A proper diaper fit prevents leaks and guarantees 360-degree mobility. Select your baby's weight to calculate the recommended size.
                    </p>

                    <!-- Interactive Slider Input -->
                    <div class="pt-4 space-y-3">
                        <div class="flex justify-between items-center text-sm font-bold">
                            <span>Baby Weight:</span>
                            <span class="text-xl font-heading text-warm-peach">{{ number_format($babyWeight, 1) }} kg ({{ number_format($babyWeight * 2.20462, 1) }} lbs)</span>
                        </div>
                        <input type="range" min="2" max="18" step="0.5" wire:model.live="babyWeight" class="w-full h-3 bg-purple-900/60 rounded-lg appearance-none cursor-pointer accent-vibrant-rose" />
                        <div class="flex justify-between text-[11px] text-purple-200">
                            <span>2 kg (Newborn)</span>
                            <span>8 kg (Infant)</span>
                            <span>18 kg (Toddler)</span>
                        </div>
                    </div>
                </div>

                <!-- Result Card -->
                <div class="lg:col-span-6">
                    <div class="bg-white text-gray-900 p-8 rounded-3xl shadow-2xl border border-purple-200 space-y-4">
                        <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                            <div>
                                <div class="text-xs text-gray-400 font-bold uppercase tracking-wider">Recommended Size</div>
                                <div class="text-3xl font-bold font-heading text-vibrant-rose mt-1">{{ $recommendedSize['size'] }}</div>
                            </div>
                            <span class="px-4 py-2 bg-soft-pink text-vibrant-rose rounded-full text-xs font-bold">
                                {{ $recommendedSize['range'] }}
                            </span>
                        </div>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            {{ $recommendedSize['desc'] }}
                        </p>
                        <div class="pt-2">
                            <button wire:click="setCategory('Diapers')" class="w-full py-3.5 bg-soft-purple text-white text-xs font-bold rounded-full hover:bg-deep-purple transition-all shadow-md flex items-center justify-center gap-2">
                                <span>Shop {{ $recommendedSize['size'] }} Diapers</span>
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Safety Certifications Banner -->
    <section class="py-12 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-warm-peach">Global Quality Certifications</span>
                <h3 class="text-xl font-bold font-heading text-white mt-1">Verified Safety Without Compromise</h3>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
                <div class="p-4 rounded-2xl bg-gray-800/60 border border-gray-700/50 flex flex-col items-center">
                    <i class="ri-award-line text-3xl text-warm-peach mb-2"></i>
                    <span class="text-xs font-bold text-gray-200">Dermatest 5-Star</span>
                    <span class="text-[10px] text-gray-400 mt-0.5">Germany Certified</span>
                </div>
                <div class="p-4 rounded-2xl bg-gray-800/60 border border-gray-700/50 flex flex-col items-center">
                    <i class="ri-shield-star-line text-3xl text-sky-blue mb-2"></i>
                    <span class="text-xs font-bold text-gray-200">OEKO-TEX 100</span>
                    <span class="text-[10px] text-gray-400 mt-0.5">Standard Cleared</span>
                </div>
                <div class="p-4 rounded-2xl bg-gray-800/60 border border-gray-700/50 flex flex-col items-center">
                    <i class="ri-plant-line text-3xl text-pastel-green mb-2"></i>
                    <span class="text-xs font-bold text-gray-200">FSC Wood Pulp</span>
                    <span class="text-[10px] text-gray-400 mt-0.5">Sustainably Sourced</span>
                </div>
                <div class="p-4 rounded-2xl bg-gray-800/60 border border-gray-700/50 flex flex-col items-center">
                    <i class="ri-heart-line text-3xl text-vibrant-rose mb-2"></i>
                    <span class="text-xs font-bold text-gray-200">Cruelty Free</span>
                    <span class="text-[10px] text-gray-400 mt-0.5">100% Vegan Care</span>
                </div>
                <div class="p-4 rounded-2xl bg-gray-800/60 border border-gray-700/50 flex flex-col items-center">
                    <i class="ri-checkbox-circle-line text-3xl text-soft-purple mb-2"></i>
                    <span class="text-xs font-bold text-gray-200">FDA Compliant</span>
                    <span class="text-[10px] text-gray-400 mt-0.5">Strict ISO 9001</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Real Parent Reviews & Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-vibrant-rose bg-soft-pink px-4 py-1.5 rounded-full">Real Mother Feedback</span>
                <h2 class="text-3xl sm:text-4xl font-bold font-heading text-gray-900 mt-3">What Parents Say About Us</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl bg-cream-bg border border-purple-100 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm mb-4">
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                        </div>
                        <p class="text-xs text-gray-700 leading-relaxed italic">
                            "Fabie Baby diapers completely changed our nights! No leakages at all, and my 4-month-old hasn’t had a single diaper rash since we switched."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-6 border-t border-purple-100 mt-6">
                        <div class="w-10 h-10 bg-soft-purple text-white rounded-full font-bold flex items-center justify-center text-sm">
                            SK
                        </div>
                        <div>
                            <div class="text-xs font-bold text-gray-900">Sarah Jenkins</div>
                            <div class="text-[10px] text-gray-500">Verified Parent • Mother of 2</div>
                        </div>
                    </div>
                </div>

                <div class="p-8 rounded-3xl bg-cream-bg border border-purple-100 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm mb-4">
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                        </div>
                        <p class="text-xs text-gray-700 leading-relaxed italic">
                            "The 99% pure water wipes are extra thick and durable. I feel so confident using them on my newborn's sensitive face and hands!"
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-6 border-t border-purple-100 mt-6">
                        <div class="w-10 h-10 bg-vibrant-rose text-white rounded-full font-bold flex items-center justify-center text-sm">
                            EM
                        </div>
                        <div>
                            <div class="text-xs font-bold text-gray-900">Emily Miller</div>
                            <div class="text-[10px] text-gray-500">Verified Buyer • Sydney</div>
                        </div>
                    </div>
                </div>

                <div class="p-8 rounded-3xl bg-cream-bg border border-purple-100 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm mb-4">
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                        </div>
                        <p class="text-xs text-gray-700 leading-relaxed italic">
                            "The organic lotion has a subtle natural chamomile scent that calms my baby right before bedtime. Super fast delivery too!"
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-6 border-t border-purple-100 mt-6">
                        <div class="w-10 h-10 bg-pastel-green text-white rounded-full font-bold flex items-center justify-center text-sm">
                            JR
                        </div>
                        <div>
                            <div class="text-xs font-bold text-gray-900">Jessica Reed</div>
                            <div class="text-[10px] text-gray-500">Verified Parent • Melbourne</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter & 10% Off Club Banner -->
    <section class="py-16 bg-soft-pink border-t border-pink-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="w-14 h-14 bg-vibrant-rose text-white rounded-2xl mx-auto flex items-center justify-center text-2xl shadow-lg mb-4">
                <i class="ri-mail-open-line"></i>
            </div>
            <h2 class="text-3xl font-bold font-heading text-gray-900">Join the Fabie Baby Mother's Club</h2>
            <p class="text-xs text-gray-600 mt-2">Subscribe to receive exclusive parenting tips, product launches, and <strong>10% OFF</strong> your first order.</p>

            <form x-data="{ email: '' }" @submit.prevent="alert('Thank you for subscribing! Your 10% off code is FABIE10'); email=''" class="mt-6 flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                <input x-model="email" type="email" required placeholder="Enter your email address..." class="flex-1 bg-white text-xs px-5 py-3.5 rounded-full border border-pink-200 focus:outline-none focus:border-vibrant-rose shadow-sm" />
                <button type="submit" class="px-7 py-3.5 bg-vibrant-rose text-white text-xs font-bold rounded-full hover:bg-pink-600 shadow-md transition-all">
                    Get 10% Off
                </button>
            </form>
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

    <!-- Rich Footer -->
    <footer id="contact" class="bg-gray-900 text-gray-400 py-16 border-t border-gray-800 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-10">
            <!-- Col 1 -->
            <div class="space-y-4">
                <img src="/logo.webp" alt="Fabie Baby Logo" class="h-10 w-auto filter brightness-110" />
                <p class="text-gray-400 leading-relaxed">
                    Fabie Baby is committed to providing Australia's purest, ultra-gentle baby diapers, wipes, and skincare products.
                </p>
                <div class="flex items-center gap-3 text-lg text-gray-300">
                    <a href="#" class="hover:text-vibrant-rose"><i class="ri-facebook-fill"></i></a>
                    <a href="#" class="hover:text-vibrant-rose"><i class="ri-instagram-line"></i></a>
                    <a href="#" class="hover:text-vibrant-rose"><i class="ri-twitter-x-line"></i></a>
                    <a href="#" class="hover:text-vibrant-rose"><i class="ri-youtube-line"></i></a>
                </div>
            </div>

            <!-- Col 2 -->
            <div>
                <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Product Range</h4>
                <ul class="space-y-2.5">
                    <li><button wire:click="setCategory('Diapers')" class="hover:text-white">Ultra Soft Pants</button></li>
                    <li><button wire:click="setCategory('Diapers')" class="hover:text-white">Overnight Protection Diapers</button></li>
                    <li><button wire:click="setCategory('Wipes')" class="hover:text-white">99% Pure Water Wipes</button></li>
                    <li><button wire:click="setCategory('Skincare')" class="hover:text-white">Organic Hydrating Lotion</button></li>
                    <li><button wire:click="setCategory('Bath')" class="hover:text-white">Tear-Free Shampoo & Body Wash</button></li>
                </ul>
            </div>

            <!-- Col 3 -->
            <div>
                <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Customer Care</h4>
                <ul class="space-y-2.5">
                    <li><a href="#size-calculator" class="hover:text-white">Diaper Size Guide</a></li>
                    <li><a href="#science" class="hover:text-white">Dermatest Safety Reports</a></li>
                    <li><a href="#" class="hover:text-white">Shipping & Returns</a></li>
                    <li><a href="#" class="hover:text-white">FAQs & Parent Advice</a></li>
                    <li><a href="#" class="hover:text-white">Contact Our Team</a></li>
                </ul>
            </div>

            <!-- Col 4 -->
            <div>
                <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Payment Methods</h4>
                <p class="text-gray-400 mb-4">We support 256-bit encrypted secure checkout.</p>
                <div class="flex items-center gap-3 text-2xl text-gray-300">
                    <i class="ri-visa-line"></i>
                    <i class="ri-mastercard-line"></i>
                    <i class="ri-paypal-line"></i>
                    <i class="ri-apple-pay-fill"></i>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 mt-10 border-t border-gray-800 text-center text-gray-500">
            © {{ date('Y') }} Fabie Baby Care Inc. All rights reserved. Built with Livewire & Remix Icon.
        </div>
    </footer>
</div>
