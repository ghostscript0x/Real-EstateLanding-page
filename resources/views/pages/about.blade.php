<x-layouts.app>
    <!-- Hero -->
    <section class="relative py-32 px-4 md:px-8 bg-charcoal text-white overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2000&q=80" alt="Architecture" class="w-full h-full object-cover">
        </div>
        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <h1 class="font-serif text-5xl md:text-7xl mb-8">Not Just Space.<br/><span class="text-terracotta">Intent.</span></h1>
            <p class="text-xl md:text-2xl font-light text-sand/90 max-w-2xl mx-auto leading-relaxed">
                We believe Nigerian real estate deserves better representation. We move beyond generic listings to offer curated, design-led property advisory.
            </p>
        </div>
    </section>

    <!-- Narrative -->
    <section class="py-24 px-4 md:px-8 bg-sand border-b border-sand-dark">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="aspect-[4/5] bg-white rounded-2xl overflow-hidden shadow-lg p-2">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover rounded-xl" alt="Interior">
                </div>
                <div>
                    <h2 class="font-serif text-3xl mb-6">The Terracotta Difference</h2>
                    <div class="space-y-6 text-charcoal/80 font-light leading-relaxed">
                        <p>
                            The current landscape of real estate in Nigeria is cluttered. Endless portals with poor photography, hidden pricing, and misaligned incentives. We started Terracotta to build the antidote.
                        </p>
                        <p>
                            We view properties through an editorial lens. If a home doesn't possess architectural merit or strategic value, we don't list it. Our curated approach means you spend less time filtering out noise and more time considering spaces that actually matter.
                        </p>
                        <p>
                            Warmth, transparency, and deep local market intelligence form the foundation of every client interaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="font-serif text-4xl text-center mb-16">The Advisory Team</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($agents as $agent)
                <div class="group text-center">
                    <div class="aspect-square bg-sand rounded-full overflow-hidden mb-6 mx-auto w-48 shadow-sm border border-sand-dark">
                        <img src="{{ $agent->photo_url }}" alt="{{ $agent->name }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <h3 class="font-serif text-xl mb-1">{{ $agent->name }}</h3>
                    <p class="text-sm text-sage mb-4">{{ $agent->title }}</p>
                    <div class="flex justify-center gap-4">
                        <a href="https://wa.me/{{ ltrim($agent->whatsapp, '+') }}" class="w-8 h-8 rounded-full bg-sand flex items-center justify-center text-charcoal hover:bg-terracotta hover:text-white transition-colors">
                            <x-icon name="whatsapp" class="w-4 h-4" />
                        </a>
                        <a href="mailto:{{ $agent->email }}" class="w-8 h-8 rounded-full bg-sand flex items-center justify-center text-charcoal hover:bg-charcoal hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
