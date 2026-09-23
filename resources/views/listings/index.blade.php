<x-layouts.app>
    <div class="bg-sand pt-12 pb-6 px-4 md:px-8 border-b border-sand-dark">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif mb-8">The Collection</h1>
            
            <!-- Filters -->
            <form action="{{ route('listings.index') }}" method="GET" class="bg-white p-4 md:p-6 rounded-2xl shadow-sm border border-sand-dark flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <label class="block text-xs font-semibold text-charcoal/70 uppercase tracking-wider mb-2">Location</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <x-icon name="location" class="h-4 w-4 text-sage" />
                        </div>
                        <input type="text" name="location" value="{{ request('location') }}" placeholder="e.g. Ikoyi, Maitama" class="block w-full pl-10 pr-3 py-2 border-b-2 border-sand-dark focus:border-terracotta bg-transparent transition-colors outline-none text-sm">
                    </div>
                </div>
                
                <div class="flex-1">
                    <label class="block text-xs font-semibold text-charcoal/70 uppercase tracking-wider mb-2">Property Type</label>
                    <select name="type" class="block w-full px-3 py-2 border-b-2 border-sand-dark focus:border-terracotta bg-transparent transition-colors outline-none text-sm">
                        <option value="">All Types</option>
                        <option value="house" {{ request('type') == 'house' ? 'selected' : '' }}>House</option>
                        <option value="apartment" {{ request('type') == 'apartment' ? 'selected' : '' }}>Apartment</option>
                        <option value="land" {{ request('type') == 'land' ? 'selected' : '' }}>Land</option>
                        <option value="commercial" {{ request('type') == 'commercial' ? 'selected' : '' }}>Commercial</option>
                    </select>
                </div>

                <div class="flex-1">
                    <label class="block text-xs font-semibold text-charcoal/70 uppercase tracking-wider mb-2">Max Price (₦)</label>
                    <select name="max_price" class="block w-full px-3 py-2 border-b-2 border-sand-dark focus:border-terracotta bg-transparent transition-colors outline-none text-sm">
                        <option value="">Any Price</option>
                        <option value="100000000" {{ request('max_price') == '100000000' ? 'selected' : '' }}>Under ₦100M</option>
                        <option value="300000000" {{ request('max_price') == '300000000' ? 'selected' : '' }}>Under ₦300M</option>
                        <option value="500000000" {{ request('max_price') == '500000000' ? 'selected' : '' }}>Under ₦500M</option>
                        <option value="1000000000" {{ request('max_price') == '1000000000' ? 'selected' : '' }}>Under ₦1B</option>
                    </select>
                </div>

                <div class="flex items-end">
                    <button type="submit" class="w-full md:w-auto bg-charcoal text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-terracotta transition-colors">
                        Filter Results
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="py-16 px-4 md:px-8 max-w-6xl mx-auto">
        @if($listings->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="mt-12 border-t border-sand-dark pt-8">
                {{ $listings->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-24 bg-sand-dark/50 rounded-3xl border border-sand-dark border-dashed">
                <x-icon name="size" class="w-16 h-16 text-sage/50 mx-auto mb-6" />
                <h3 class="font-serif text-2xl text-charcoal mb-2">No properties found</h3>
                <p class="text-charcoal/70 mb-6 max-w-md mx-auto">We couldn't find any listings matching your specific criteria. Adjust your filters or reach out directly.</p>
                <a href="{{ route('listings.index') }}" class="inline-block bg-white text-charcoal px-6 py-3 rounded-full text-sm font-medium border border-sand-dark hover:border-charcoal transition-colors">
                    Clear Filters
                </a>
            </div>
        @endif
    </div>
</x-layouts.app>
