@props(['listing'])

<a href="{{ route('listings.show', $listing->slug) }}" class="block max-w-sm w-full bg-white rounded-2xl overflow-hidden shadow-sm border border-sand-dark group cursor-pointer transition-all hover:shadow-md">
    <div class="aspect-[4/3] bg-sand-dark overflow-hidden relative">
        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-semibold text-terracotta z-10">
            For {{ ucfirst($listing->status === 'available' ? 'Sale' : $listing->status) }}
        </div>
        <img src="{{ $listing->primary_image_url }}" alt="{{ $listing->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" loading="lazy">
    </div>
    <div class="p-6">
        <h3 class="font-serif text-xl mb-1 group-hover:text-terracotta transition-colors truncate">{{ $listing->title }}</h3>
        <p class="text-sm text-charcoal/70 mb-4 flex items-center gap-1">
            <x-icon name="location" class="w-4 h-4 text-sage shrink-0" />
            <span class="truncate">{{ $listing->location }}</span>
        </p>
        <div class="text-xl font-medium tracking-wide mb-6">
            ₦{{ number_format($listing->price) }}
        </div>
        <div class="flex justify-between items-center text-sm pt-4 border-t border-sand-dark text-charcoal/80">
            @if($listing->bedrooms)
            <div class="flex items-center gap-1.5" title="Bedrooms"><x-icon name="bed" class="w-4 h-4" /> {{ $listing->bedrooms }}</div>
            @endif
            @if($listing->bathrooms)
            <div class="flex items-center gap-1.5" title="Bathrooms"><x-icon name="bath" class="w-4 h-4" /> {{ $listing->bathrooms }}</div>
            @endif
            @if($listing->size_sqm)
            <div class="flex items-center gap-1.5" title="Size (sqm)"><x-icon name="size" class="w-4 h-4" /> {{ $listing->size_sqm }}m²</div>
            @endif
        </div>
    </div>
</a>
