<x-layouts.app>
    <div class="max-w-6xl mx-auto py-12 px-4 md:px-8">
        <h1 class="text-4xl md:text-5xl font-serif text-terracotta mb-6">Phase 0 Test</h1>
        <p class="text-lg mb-8 max-w-2xl leading-relaxed">
            This is a test of the Terracotta Modernism design system. 
            We are verifying fonts, colors, and our single-line clay icons.
        </p>

        <div class="flex flex-wrap gap-4 mb-12">
            <button class="bg-terracotta text-white px-6 py-3 rounded-full text-sm font-medium hover:bg-charcoal transition-colors">
                Primary Button
            </button>
            <button class="border border-charcoal text-charcoal px-6 py-3 rounded-full text-sm font-medium hover:bg-sand-dark transition-colors">
                Secondary Button
            </button>
        </div>

        <h2 class="text-2xl font-serif mb-6 border-b border-sand-dark pb-2">Icon System</h2>
        <div class="flex gap-8 mb-12 flex-wrap">
            <div class="flex flex-col items-center gap-2">
                <x-icon name="bed" class="w-8 h-8 text-charcoal hover:text-terracotta transition-colors" />
                <span class="text-xs uppercase tracking-wider text-sage">Bed</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <x-icon name="bath" class="w-8 h-8 text-charcoal hover:text-terracotta transition-colors" />
                <span class="text-xs uppercase tracking-wider text-sage">Bath</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <x-icon name="size" class="w-8 h-8 text-charcoal hover:text-terracotta transition-colors" />
                <span class="text-xs uppercase tracking-wider text-sage">Size</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <x-icon name="location" class="w-8 h-8 text-charcoal hover:text-terracotta transition-colors" />
                <span class="text-xs uppercase tracking-wider text-sage">Location</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <x-icon name="whatsapp" class="w-8 h-8 text-charcoal hover:text-terracotta transition-colors" />
                <span class="text-xs uppercase tracking-wider text-sage">WhatsApp</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <x-icon name="phone" class="w-8 h-8 text-charcoal hover:text-terracotta transition-colors" />
                <span class="text-xs uppercase tracking-wider text-sage">Phone</span>
            </div>
        </div>

        <h2 class="text-2xl font-serif mb-6 border-b border-sand-dark pb-2">Test Listing Card</h2>
        
        <div class="max-w-sm bg-white rounded-2xl overflow-hidden shadow-sm border border-sand-dark group cursor-pointer">
            <div class="aspect-[4/3] bg-sand-dark overflow-hidden relative">
                <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-semibold text-terracotta z-10">
                    For Sale
                </div>
                <!-- Placeholder for image, scales on hover as per rules -->
                <div class="w-full h-full bg-charcoal/10 group-hover:scale-105 transition-transform duration-700 ease-out"></div>
            </div>
            <div class="p-6">
                <h3 class="font-serif text-xl mb-1 group-hover:text-terracotta transition-colors">The Ikoyi Pavilion</h3>
                <p class="text-sm text-charcoal/70 mb-4 flex items-center gap-1">
                    <x-icon name="location" class="w-4 h-4 text-sage" />
                    Osborne Foreshore, Ikoyi
                </p>
                <div class="text-xl font-medium tracking-wide mb-6">
                    ₦85,000,000
                </div>
                <div class="flex justify-between items-center text-sm pt-4 border-t border-sand-dark text-charcoal/80">
                    <div class="flex items-center gap-1.5"><x-icon name="bed" class="w-4 h-4" /> 4</div>
                    <div class="flex items-center gap-1.5"><x-icon name="bath" class="w-4 h-4" /> 4.5</div>
                    <div class="flex items-center gap-1.5"><x-icon name="size" class="w-4 h-4" /> 450m²</div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
