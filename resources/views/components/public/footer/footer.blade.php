<footer id="contact" class="bg-white text-gray-600 pt-14 sm:pt-18 pb-10 border-t border-purple-100 text-xs relative overflow-hidden">
    <!-- Subtle Background Ambient Glow -->
    <div class="absolute -left-20 top-0 w-72 h-72 bg-soft-pink/40 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -right-20 bottom-0 w-72 h-72 bg-soft-blue/30 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      

        <!-- Main 4-Column Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10">
            <!-- Col 1: Brand Info & Social Links -->
            <div class="space-y-4">
                <a href="/" class="inline-block">
                    <img src="/logo.webp" alt="Fabie Baby Logo" class="h-12 w-auto" />
                </a>
                <p class="text-gray-500 leading-relaxed text-xs">
                    Fabie Baby is thoughtfully crafted with natural ingredients, pH 5.5 balance, and 0% harmful chemicals to keep your baby's delicate skin pure, soothed, and protected.
                </p>

                <!-- Social Icons -->
                <div class="flex items-center gap-2 pt-1">
                    <a href="#" class="w-8 h-8 rounded-full bg-white border border-purple-100 text-gray-600 hover:text-vibrant-rose hover:border-vibrant-rose hover:bg-soft-pink transition-all flex items-center justify-center text-sm" title="Facebook">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white border border-purple-100 text-gray-600 hover:text-vibrant-rose hover:border-vibrant-rose hover:bg-soft-pink transition-all flex items-center justify-center text-sm" title="Instagram">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white border border-purple-100 text-gray-600 hover:text-vibrant-rose hover:border-vibrant-rose hover:bg-soft-pink transition-all flex items-center justify-center text-sm" title="Pinterest">
                        <i class="ri-pinterest-line"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white border border-purple-100 text-gray-600 hover:text-vibrant-rose hover:border-vibrant-rose hover:bg-soft-pink transition-all flex items-center justify-center text-sm" title="YouTube">
                        <i class="ri-youtube-line"></i>
                    </a>
                </div>

                <!-- 24/7 Support Pill -->
                <div class="pt-2 flex items-center gap-2 text-xs font-bold text-[#6B57B2]">
                    <div class="w-7 h-7 rounded-full bg-[#6B57B2]/10 flex items-center justify-center text-vibrant-rose">
                        <i class="ri-customer-service-2-fill"></i>
                    </div>
                    <span>24/7 Dedicated Parent Support</span>
                </div>
            </div>

            <!-- Col 2: Product Range -->
            <div>
                <h4 class="text-xs font-extrabold text-[#1B2541] uppercase tracking-wider mb-4">
                    Product Range
                </h4>
                <ul class="space-y-2.5 font-medium text-gray-600">
                    <li><button wire:click="selectCategory('Diapers')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5 text-left"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Ultra Soft Diapers & Pants</button></li>
                    <li><button wire:click="selectCategory('Diapers')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5 text-left"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Overnight Dryness Pants</button></li>
                    <li><button wire:click="selectCategory('Wipes')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5 text-left"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> 99.9% EDI Pure Water Wipes</button></li>
                    <li><button wire:click="selectCategory('Skincare')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5 text-left"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Organic Hydrating Lotion</button></li>
                    <li><button wire:click="selectCategory('Bath')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5 text-left"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Tear-Free Shampoo & Wash</button></li>
                    <li><button wire:click="selectCategory('Wipes')" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5 text-left"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Biodegradable Bamboo Wipes</button></li>
                </ul>
            </div>

            <!-- Col 3: Parent Care & Help -->
            <div>
                <h4 class="text-xs font-extrabold text-[#1B2541] uppercase tracking-wider mb-4">
                    Parent Care & Guide
                </h4>
                <ul class="space-y-2.5 font-medium text-gray-600">
                    <li><a href="#faq" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> FAQs & Safety Answers</a></li>
                    <li><a href="#about-us" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Dubai Heritage & Story</a></li>
                    <li><a href="#b2b-products" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Wholesale & B2B Supply</a></li>
                    <li><a href="#brand-promises" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> 6 Quality Brand Promises</a></li>
                    <li><a href="#contact" class="hover:text-vibrant-rose hover:translate-x-1 transition-all inline-flex items-center gap-1.5"><i class="ri-arrow-right-s-line text-vibrant-rose text-xs"></i> Contact Customer Care</a></li>
                </ul>
            </div>

            <!-- Col 4: Trust & Payments -->
            <div class="space-y-4">
                <h4 class="text-xs font-extrabold text-[#1B2541] uppercase tracking-wider">
                    Safety & Certifications
                </h4>

                <!-- Trust Badges -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5 p-2.5 bg-white rounded-2xl border border-purple-100 shadow-2xs">
                        <i class="ri-shield-check-line text-pastel-green text-xl shrink-0"></i>
                        <div>
                            <p class="font-bold text-gray-800 text-[11px]">Dubai Lab Tested</p>
                            <p class="text-[10px] text-gray-400">Dubai Municipality Approved</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2.5 p-2.5 bg-white rounded-2xl border border-purple-100 shadow-2xs">
                        <i class="ri-plant-line text-[#6B57B2] text-xl shrink-0"></i>
                        <div>
                            <p class="font-bold text-gray-800 text-[11px]">100% Non-Toxic & Safe</p>
                            <p class="text-[10px] text-gray-400">0% Chlorine, Parabens & Phthalates</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div class="pt-1">
                    <h5 class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-2">256-Bit Encrypted Payments</h5>
                    <div class="flex items-center gap-3 text-2xl text-gray-600 bg-white p-2.5 rounded-2xl border border-purple-100">
                        <i class="ri-visa-line hover:text-blue-600 transition-colors"></i>
                        <i class="ri-mastercard-line hover:text-red-500 transition-colors"></i>
                        <i class="ri-paypal-line hover:text-blue-500 transition-colors"></i>
                        <i class="ri-apple-pay-fill hover:text-gray-900 transition-colors"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright Strip -->
        <div class="pt-8 mt-12 border-t border-purple-100 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500 gap-3 text-center sm:text-left">
            <p>© {{ date('Y') }} Fabie Baby Care. All rights reserved. Gentle as a mother's touch.</p>
            <div class="flex items-center gap-5 text-gray-500 font-medium text-xs">
                <a href="#" class="hover:text-vibrant-rose transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-vibrant-rose transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-vibrant-rose transition-colors">Shipping Info</a>
            </div>
        </div>
    </div>
</footer>