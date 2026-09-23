<x-layouts.app>
    <!-- Gallery Section (Alpine powered) -->
    <section class="bg-charcoal text-white" x-data="{ activeImage: 0, images: [ '{{ $listing->primary_image_url }}', @foreach($listing->gallery_images ?? [] as $img) '{{ $img }}', @endforeach ] }">
        <div class="relative h-[60vh] min-h-[500px] w-full">
            <template x-for="(image, index) in images" :key="index">
                <img :src="image" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700"
                     :class="activeImage === index ? 'opacity-100 z-10' : 'opacity-0 z-0'"
                     alt="Property image">
            </template>
            
            <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-transparent to-transparent z-20 pointer-events-none"></div>

            <!-- Controls -->
            <div class="absolute inset-x-0 bottom-8 z-30 flex justify-center gap-4 px-4">
                <button @click="activeImage = (activeImage === 0) ? images.length - 1 : activeImage - 1" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center hover:bg-white hover:text-charcoal transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="activeImage = (activeImage === images.length - 1) ? 0 : activeImage + 1" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center hover:bg-white hover:text-charcoal transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row gap-16">
            
            <!-- Details Column -->
            <div class="lg:w-2/3">
                <div class="mb-12">
                    <div class="inline-block bg-terracotta/10 text-terracotta px-4 py-1.5 rounded-full text-sm font-semibold tracking-wide mb-6">
                        For {{ ucfirst($listing->status === 'available' ? 'Sale' : $listing->status) }}
                    </div>
                    <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl text-charcoal mb-4 leading-tight">{{ $listing->title }}</h1>
                    <p class="text-xl text-sage flex items-center gap-2 mb-8">
                        <x-icon name="location" class="w-6 h-6 shrink-0" />
                        {{ $listing->address ? $listing->address . ', ' : '' }}{{ $listing->location }}
                    </p>
                    <div class="text-4xl md:text-5xl font-medium tracking-tight mb-2">
                        ₦{{ number_format($listing->price) }}
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-8 border-y border-sand-dark mb-12">
                    <div class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-charcoal/50 uppercase tracking-widest">Type</span>
                        <span class="text-lg capitalize">{{ $listing->type }}</span>
                    </div>
                    @if($listing->bedrooms)
                    <div class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-charcoal/50 uppercase tracking-widest flex items-center gap-2"><x-icon name="bed" class="w-4 h-4"/> Beds</span>
                        <span class="text-lg">{{ $listing->bedrooms }}</span>
                    </div>
                    @endif
                    @if($listing->bathrooms)
                    <div class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-charcoal/50 uppercase tracking-widest flex items-center gap-2"><x-icon name="bath" class="w-4 h-4"/> Baths</span>
                        <span class="text-lg">{{ $listing->bathrooms }}</span>
                    </div>
                    @endif
                    @if($listing->size_sqm)
                    <div class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-charcoal/50 uppercase tracking-widest flex items-center gap-2"><x-icon name="size" class="w-4 h-4"/> Size</span>
                        <span class="text-lg">{{ number_format($listing->size_sqm) }} sqm</span>
                    </div>
                    @endif
                </div>

                <div class="prose prose-lg prose-headings:font-serif prose-p:text-charcoal/80 prose-p:font-light max-w-none mb-16">
                    <h2 class="text-3xl font-serif text-charcoal mb-6 border-b border-sand-dark pb-4">The Property</h2>
                    <div class="leading-relaxed border-l-4 border-terracotta pl-6 italic text-xl mb-8">
                        "An exceptional opportunity to acquire a residence of profound architectural merit in one of the most coveted enclaves."
                    </div>
                    {!! $listing->description !!}
                </div>
            </div>

            <!-- Sticky Contact Column -->
            <div class="lg:w-1/3">
                <div class="sticky top-8 bg-sand p-8 rounded-3xl border border-sand-dark shadow-sm">
                    <h3 class="font-serif text-2xl mb-6">Interested?</h3>
                    <p class="text-sm text-charcoal/70 mb-8">Speak directly with the agent managing this portfolio for private viewing arrangements.</p>
                    
                    @if($listing->agent)
                    <div class="flex items-center gap-4 mb-8 p-4 bg-white rounded-2xl">
                        <img src="{{ $listing->agent->photo_url }}" alt="{{ $listing->agent->name }}" class="w-16 h-16 rounded-full object-cover">
                        <div>
                            <h4 class="font-serif text-lg">{{ $listing->agent->name }}</h4>
                            <p class="text-xs text-sage">{{ $listing->agent->title }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="space-y-4">
                        <a href="https://wa.me/{{ $listing->agent ? ltrim($listing->agent->whatsapp, '+') : '2348000000000' }}" target="_blank" class="w-full flex items-center justify-center gap-3 bg-terracotta text-white px-6 py-4 rounded-full font-medium hover:bg-charcoal transition-colors shadow-lg">
                            <x-icon name="whatsapp" class="w-5 h-5" /> Chat on WhatsApp
                        </a>
                        <a href="tel:{{ $listing->agent ? $listing->agent->phone : '+2348000000000' }}" class="w-full flex items-center justify-center gap-3 bg-white text-charcoal border border-sand-dark px-6 py-4 rounded-full font-medium hover:border-charcoal transition-colors">
                            <x-icon name="phone" class="w-5 h-5" /> Call Agent
                        </a>
                        <button x-data="{ open: false }" @click="$dispatch('open-inquiry')" class="w-full flex items-center justify-center gap-3 bg-transparent text-charcoal px-6 py-4 rounded-full font-medium hover:underline transition-all">
                            Or send an email inquiry
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Related Listings -->
    @if($relatedListings->count() > 0)
    <section class="py-24 px-4 md:px-8 bg-sand border-t border-sand-dark">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-serif text-3xl mb-12">Similar Properties</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($relatedListings as $related)
                    <x-listing-card :listing="$related" />
                @endforeach
            </div>
        </div>
    </section>
    @endif
</x-layouts.app>
