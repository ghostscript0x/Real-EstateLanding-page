<x-layouts.app>
    <div class="bg-sand pt-24 pb-12 px-4 md:px-8 border-b border-sand-dark">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="font-serif text-5xl md:text-6xl mb-6">Let's Talk.</h1>
            <p class="text-xl text-charcoal/70 font-light">Whether you are acquiring, divesting, or simply exploring the market, we offer discrete and expert advisory.</p>
        </div>
    </div>

    <section class="py-24 px-4 md:px-8 max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 lg:gap-24">
            
            <!-- Contact Details -->
            <div>
                <h2 class="font-serif text-3xl mb-10">Direct Contact</h2>
                
                <div class="space-y-8 mb-12">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-sand-dark flex items-center justify-center shrink-0 text-terracotta">
                            <x-icon name="whatsapp" class="w-6 h-6" />
                        </div>
                        <div>
                            <h4 class="font-bold uppercase tracking-wider text-xs text-sage mb-1">WhatsApp</h4>
                            <p class="text-lg">+234 800 000 0000</p>
                            <a href="https://wa.me/2348000000000" class="text-sm text-terracotta hover:underline mt-1 inline-block">Message us directly</a>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-sand-dark flex items-center justify-center shrink-0 text-terracotta">
                            <x-icon name="phone" class="w-6 h-6" />
                        </div>
                        <div>
                            <h4 class="font-bold uppercase tracking-wider text-xs text-sage mb-1">Office Line</h4>
                            <p class="text-lg">+234 800 000 0001</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-sand-dark flex items-center justify-center shrink-0 text-terracotta">
                            <x-icon name="location" class="w-6 h-6" />
                        </div>
                        <div>
                            <h4 class="font-bold uppercase tracking-wider text-xs text-sage mb-1">Lagos Office</h4>
                            <p class="text-lg leading-snug">The Terracotta Building<br/>14 Osborne Road<br/>Ikoyi, Lagos</p>
                        </div>
                    </div>
                </div>

                <!-- Abstract map visual to avoid Google API keys for now -->
                <div class="w-full aspect-[16/9] bg-charcoal rounded-2xl overflow-hidden relative group">
                    <div class="absolute inset-0 opacity-40 mix-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&w=800&q=80'); background-size: cover; background-position: center;"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-white/10 backdrop-blur-md px-6 py-3 rounded-full border border-white/20 text-white flex items-center gap-2">
                            <x-icon name="location" class="w-5 h-5 text-terracotta" /> View on Maps
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inquiry Form -->
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-sand-dark">
                <h3 class="font-serif text-2xl mb-8">Send an Inquiry</h3>

                @if(session('success'))
                    <div class="bg-sage/10 border border-sage/20 text-sage p-4 rounded-xl mb-8">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-xs font-semibold text-charcoal/70 uppercase tracking-wider mb-2">Full Name</label>
                        <input type="text" name="name" required value="{{ old('name') }}" class="w-full bg-sand/30 border border-sand-dark rounded-xl px-4 py-3 focus:outline-none focus:border-terracotta transition-colors @error('name') border-red-500 @enderror">
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-charcoal/70 uppercase tracking-wider mb-2">Email</label>
                            <input type="email" name="email" required value="{{ old('email') }}" class="w-full bg-sand/30 border border-sand-dark rounded-xl px-4 py-3 focus:outline-none focus:border-terracotta transition-colors @error('email') border-red-500 @enderror">
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-charcoal/70 uppercase tracking-wider mb-2">Phone</label>
                            <input type="text" name="phone" required value="{{ old('phone') }}" class="w-full bg-sand/30 border border-sand-dark rounded-xl px-4 py-3 focus:outline-none focus:border-terracotta transition-colors @error('phone') border-red-500 @enderror">
                            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-charcoal/70 uppercase tracking-wider mb-2">How can we help?</label>
                        <textarea name="message" rows="5" required class="w-full bg-sand/30 border border-sand-dark rounded-xl px-4 py-3 focus:outline-none focus:border-terracotta transition-colors resize-none @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="w-full bg-charcoal text-white px-8 py-4 rounded-full font-medium hover:bg-terracotta transition-colors duration-300">
                        Submit Inquiry
                    </button>
                    <p class="text-center text-xs text-charcoal/50 mt-4">We aim to respond to all inquiries within 2 hours during business operations.</p>
                </form>
            </div>

        </div>
    </section>
</x-layouts.app>
