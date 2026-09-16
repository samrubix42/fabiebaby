<footer id="contact" class="bg-[#F8F6FD] text-gray-600 pt-16 pb-12 border-t border-purple-100 text-xs relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Main 4-Column Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Col 1: Brand Info & Social Links -->
            <div class="space-y-4">
                <a href="/" class="inline-block">
                    <img src="/logo.webp" alt="Fabie Baby Logo" class="h-12 w-auto" />
                </a>
                <p class="text-gray-500 leading-relaxed text-xs">
                    Fabie Baby is committed to providing Australia's purest, ultra-gentle baby diapers, 99.9% EDI pure water wipes, and organic dermatologist-approved skincare products.
                </p>

                <!-- Social Icons -->
                <div class="flex items-center gap-2.5 pt-2">
                    <a href="#" class="w-9 h-9 rounded-full bg-white border border-gray-200 text-gray-600 hover:text-vibrant-rose hover:border-vibrant-rose hover:bg-soft-pink transition-all flex items-center justify-center text-base" title="Facebook">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white border border-gray-200 text-gray-600 hover:text-vibrant-rose hover:border-vibrant-rose hover:bg-soft-pink transition-all flex items-center justify-center text-base" title="Instagram">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white border border-gray-200 text-gray-600 hover:text-vibrant-rose hover:border-vibrant-rose hover:bg-soft-pink transition-all flex items-center justify-center text-base" title="Pinterest">
                        <i class="ri-pinterest-line"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white border border-gray-200 text-gray-600 hover:text-vibrant-rose hover:border-vibrant-rose hover:bg-soft-pink transition-all flex items-center justify-center text-base" title="YouTube">
                        <i class="ri-youtube-line"></i>
                    </a>
                </div>

                <!-- 24/7 Support Pill -->
                <div class="pt-2 flex items-center gap-2 text-xs font-bold text-soft-purple">
                    <div class="w-7 h-7 rounded-full bg-soft-purple/10 flex items-center justify-center text-vibrant-rose">
                        <i class="ri-customer-service-2-fill"></i>
                    </div>
                    <span>24/7 Dedicated Parent Support</span>
                </div>
            </div>

            <!-- Col 2: Product Range -->
            <div>
                <h4 class="text-xs font-extrabold text-[#1B2541] uppercase tracking-wider mb-5">
                    Product Range
                </h4>
                <ul class="space-y-3 font-medium text-gray-600">
                    <li><button wire:click="selectCategory('Diapers')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Diapers & Pants</button></li>
                    <li><button wire:click="selectCategory('Diapers')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Overnight Protection Pants</button></li>
                    <li><button wire:click="selectCategory('Wipes')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> 99.9% EDI Pure Water Wipes</button></li>
                    <li><button wire:click="selectCategory('Skincare')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Organic Hydrating Lotion</button></li>
                    <li><button wire:click="selectCategory('Bath')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Tear-Free Shampoo & Wash</button></li>
                    <li><button wire:click="selectCategory('Wipes')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Bamboo Eco Cleansing Wipes</button></li>
                </ul>
            </div>

            <!-- Col 3: Parent Care & Support -->
            <div>
                <h4 class="text-xs font-extrabold text-[#1B2541] uppercase tracking-wider mb-5">
                    Parent Care & Help
                </h4>
                <ul class="space-y-3 font-medium text-gray-600">
                    <li><a href="#size-calculator" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Diaper Size Calculator</a></li>
                    <li><a href="#science" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Dermatest Safety Reports</a></li>
                    <li><a href="#" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Express Delivery & Returns</a></li>
                    <li><a href="#" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Pediatrician FAQs & Advice</a></li>
                    <li><a href="#contact" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Contact Customer Support</a></li>
                </ul>
            </div>

            <!-- Col 4: Trust & Payments -->
            <div class="space-y-5">
                <h4 class="text-xs font-extrabold text-[#1B2541] uppercase tracking-wider">
                    Certified Excellence
                </h4>

                <!-- Trust Badges List -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2 p-2.5 bg-white rounded-xl border border-purple-50 shadow-xs">
                        <i class="ri-shield-check-line text-pastel-green text-lg"></i>
                        <div>
                            <p class="font-bold text-gray-800 text-[11px]">Dermatest Certified</p>
                            <p class="text-[10px] text-gray-400">5-Star Excellent Rating</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 p-2.5 bg-white rounded-xl border border-purple-50 shadow-xs">
                        <i class="ri-plant-line text-soft-purple text-lg"></i>
                        <div>
                            <p class="font-bold text-gray-800 text-[11px]">100% Organic & Non-Toxic</p>
                            <p class="text-[10px] text-gray-400">0% Chlorine, Fragrance, Parabens</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div>
                    <h5 class="text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-2">256-Bit Encrypted Payments</h5>
                    <div class="flex items-center gap-3 text-2xl text-gray-600 bg-white p-2.5 rounded-xl border border-purple-50">
                        <i class="ri-visa-line hover:text-blue-600 transition-colors"></i>
                        <i class="ri-mastercard-line hover:text-red-500 transition-colors"></i>
                        <i class="ri-paypal-line hover:text-blue-500 transition-colors"></i>
                        <i class="ri-apple-pay-fill hover:text-gray-900 transition-colors"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright Strip -->
        <div class="pt-8 mt-12 border-t border-purple-100 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500 gap-4">
            <p>© {{ date('Y') }} Fabie Baby Care Inc. All rights reserved.</p>
            <div class="flex items-center gap-6 text-gray-500 font-medium">
                <a href="#" class="hover:text-vibrant-rose transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-vibrant-rose transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-vibrant-rose transition-colors">Cookie Preferences</a>
            </div>
        </div>
    </div>
</footer>