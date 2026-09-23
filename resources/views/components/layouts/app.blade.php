<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Terracotta') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-sand text-charcoal font-sans antialiased selection:bg-terracotta selection:text-white relative min-h-screen flex flex-col">
        <!-- Header -->
        <header class="py-6 px-4 md:px-8 flex justify-between items-center border-b border-sand-dark shrink-0">
            <a href="/" class="text-2xl font-serif font-bold text-terracotta tracking-tight">
                TERRACOTTA
            </a>
            <nav class="hidden md:flex gap-8 text-sm font-medium">
                <a href="/listings" class="hover:text-terracotta transition-colors">Listings</a>
                <a href="/about" class="hover:text-terracotta transition-colors">About</a>
                <a href="/contact" class="hover:text-terracotta transition-colors">Contact</a>
            </nav>
            <a href="https://wa.me/2348000000000" class="flex items-center gap-2 bg-charcoal text-white px-5 py-2.5 rounded-full text-sm font-medium hover:bg-terracotta transition-colors">
                <x-icon name="whatsapp" class="w-4 h-4" />
                Chat with us
            </a>
        </header>

        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-charcoal text-sand py-16 px-4 md:px-8 mt-20 shrink-0">
            <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-12">
                <div>
                    <h3 class="font-serif text-2xl text-terracotta mb-4">TERRACOTTA</h3>
                    <p class="text-sm opacity-80 max-w-xs leading-relaxed">Premium real estate experiences in Nigeria. Curated spaces for modern living.</p>
                </div>
                <div>
                    <h4 class="font-serif text-lg mb-4 text-gold">Explore</h4>
                    <ul class="space-y-3 text-sm opacity-80">
                        <li><a href="/listings" class="hover:text-white transition-colors">Listings</a></li>
                        <li><a href="/about" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="/contact" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-serif text-lg mb-4 text-gold">Contact</h4>
                    <ul class="space-y-3 text-sm opacity-80">
                        <li class="flex items-center gap-3"><x-icon name="phone" class="w-5 h-5 text-terracotta" /> +234 800 000 0000</li>
                        <li class="flex items-center gap-3"><x-icon name="location" class="w-5 h-5 text-terracotta" /> Lagos & Abuja, Nigeria</li>
                    </ul>
                </div>
            </div>
            <div class="max-w-6xl mx-auto mt-16 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-xs opacity-60">
                <div>
                    &copy; {{ date('Y') }} Terracotta Real Estate. All rights reserved.
                </div>
                <a href="https://www.inda.name.ng/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:opacity-100 hover:text-white transition-all group">
                    <span>Made by Inda.dev</span>
                    <img src="{{ asset('images/inda-dev-logo.png') }}" alt="Inda.dev Logo" class="h-5 w-auto object-contain group-hover:scale-110 transition-transform">
                </a>
            </div>
        </footer>

        <!-- Floating WhatsApp CTA -->
        <a href="https://wa.me/2348000000000" class="fixed bottom-6 right-6 bg-terracotta text-white p-4 rounded-full shadow-xl hover:-translate-y-1 transition-transform animate-[pulse_4s_ease-in-out_infinite] z-50">
            <x-icon name="whatsapp" class="w-6 h-6" />
        </a>
    </body>
</html>
