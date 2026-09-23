<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative h-[80vh] min-h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?auto=format&fit=crop&w=2000&q=80" alt="Modern Nigerian Architecture" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-charcoal/80 via-charcoal/40 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-20">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-6 leading-tight drop-shadow-lg">
                Curated Spaces for <br/><span class="text-sand">Modern Living.</span>
            </h1>
            <p class="text-lg md:text-xl text-sand/90 mb-10 max-w-2xl mx-auto font-light">
                Discover exceptional properties in Nigeria's most coveted neighborhoods. Architecture that inspires, homes that belong.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('listings.index') }}" class="bg-terracotta text-white px-8 py-4 rounded-full font-medium hover:bg-white hover:text-terracotta transition-colors duration-300 shadow-lg">
                    Explore Collection
                </a>
                <a href="https://wa.me/2348000000000" class="bg-white/10 backdrop-blur-md text-white border border-white/20 px-8 py-4 rounded-full font-medium hover:bg-white/20 transition-colors duration-300 flex items-center justify-center gap-2">
                    <x-icon name="whatsapp" class="w-5 h-5" /> Speak with an Advisor
                </a>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="py-24 px-4 md:px-8 bg-sand">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-12">
            <div>
                <x-icon name="location" class="w-10 h-10 text-terracotta mb-6" />
                <h3 class="font-serif text-2xl mb-4">Prime Locations</h3>
                <p class="text-charcoal/80 leading-relaxed text-sm">We exclusively list properties in neighborhoods that matter. From the quiet enclaves of Ikoyi to the elevated altitudes of Maitama.</p>
            </div>
            <div>
                <x-icon name="size" class="w-10 h-10 text-terracotta mb-6" />
                <h3 class="font-serif text-2xl mb-4">Architectural Merit</h3>
                <p class="text-charcoal/80 leading-relaxed text-sm">We don't just sell square footage. We represent homes with intentional design, premium materials, and lasting value.</p>
            </div>
            <div>
                <x-icon name="whatsapp" class="w-10 h-10 text-terracotta mb-6" />
                <h3 class="font-serif text-2xl mb-4">Discrete Advisory</h3>
                <p class="text-charcoal/80 leading-relaxed text-sm">Direct, transparent communication via WhatsApp or in person. No aggressive sales tactics, just clear, professional guidance.</p>
            </div>
        </div>
    </section>

    <!-- Featured Listings -->
    <section class="py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="font-serif text-4xl text-charcoal mb-4">Featured Collection</h2>
                    <p class="text-charcoal/70 max-w-lg">A curated selection of our most exceptional current mandates across Lagos and Abuja.</p>
                </div>
                <a href="{{ route('listings.index') }}" class="hidden md:inline-block text-terracotta font-medium hover:text-charcoal transition-colors border-b border-terracotta hover:border-charcoal pb-1">
                    View All Properties
                </a>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredListings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
            
            <div class="mt-12 text-center md:hidden">
                <a href="{{ route('listings.index') }}" class="inline-block bg-charcoal text-sand px-8 py-4 rounded-full font-medium hover:bg-terracotta transition-colors">
                    View All Properties
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 px-4 md:px-8 bg-sand-dark">
        <div class="max-w-6xl mx-auto">
            <h2 class="font-serif text-4xl text-center mb-16">Client Experiences</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="bg-sand p-8 rounded-2xl relative">
                    <x-icon name="whatsapp" class="w-8 h-8 text-gold/30 absolute top-8 right-8" />
                    <p class="text-charcoal/80 italic mb-8 relative z-10 leading-relaxed text-sm">
                        "{{ $testimonial->content }}"
                    </p>
                    <div class="flex items-center gap-4">
                        <img src="{{ $testimonial->client_photo_url }}" alt="{{ $testimonial->client_name }}" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <h4 class="font-serif font-medium">{{ $testimonial->client_name }}</h4>
                            <p class="text-xs text-sage">{{ $testimonial->client_role }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 px-4 md:px-8 bg-charcoal text-sand text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-serif text-4xl md:text-5xl mb-6 text-white">Ready to find your space?</h2>
            <p class="text-lg opacity-80 mb-10">Connect directly with our advisory team to discuss your specific requirements or arrange a private viewing.</p>
            <a href="https://wa.me/2348000000000" class="inline-flex items-center gap-3 bg-terracotta text-white px-8 py-4 rounded-full font-medium hover:bg-white hover:text-terracotta transition-colors duration-300">
                <x-icon name="whatsapp" class="w-5 h-5" /> Start a Conversation on WhatsApp
            </a>
        </div>
    </section>
</x-layouts.app>
