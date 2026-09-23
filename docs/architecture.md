# ARCHITECTURE.md

## 1. Stack
- **Framework:** Laravel (latest stable) — used here mainly as a clean way to serve Blade views + manage listing data, not for complex business logic in v1.
- **Templating:** Blade
- **CSS:** Tailwind CSS via Vite, with a fully custom design-token config (see design.md) — no default Tailwind color palette left in place.
- **JS/Interactivity:** Alpine.js for filters, galleries, mobile nav, accordions. GSAP (or CSS-only) for tasteful scroll/entrance animations — subtle, not gimmicky.
- **Icons:** Custom SVG icon set (hand-built or generated to match brand — see design.md "Icon Language"). No Font Awesome / Heroicons defaults used visibly in the UI.
- **DB:** SQLite (simple, no real prod scaling concerns for a landing/lead-gen site) or MySQL if the agent prefers.
- **Images:** Use high-quality architectural/interior stock photography (or AI-generated placeholders) that matches Nigerian real estate context — avoid generic Western suburban stock photos.
- **Maps:** Simple embedded map (Google Maps embed or a static styled map image) on property detail pages.

## 2. Structure
```
app/
  Models/
    Listing.php
    Agent.php
    Testimonial.php
    Inquiry.php          <- contact form submissions
  Http/
    Controllers/
      HomeController.php
      ListingController.php     <- index (filters) + show (detail)
      AboutController.php
      ContactController.php     <- handles form submit + stores Inquiry

database/
  factories/
    ListingFactory.php
    AgentFactory.php
    TestimonialFactory.php
  seeders/
    RealEstateSeeder.php

resources/
  views/
    layouts/
      app.blade.php          <- shared shell: header/nav, footer, WhatsApp floating CTA
    home.blade.php
    listings/
      index.blade.php
      show.blade.php
    about.blade.php
    contact.blade.php
    components/
      listing-card.blade.php
      testimonial-card.blade.php
      cta-whatsapp.blade.php
      site-header.blade.php
      site-footer.blade.php
  css/
    app.css                  <- custom design tokens (see design.md) compiled here
  svg/
    icons/                   <- custom icon set, one file per icon, inlined via Blade component

routes/
  web.php
```

## 3. Design Token Approach
Unlike the dashboard-carousel project (where themes were deliberately isolated), this is ONE brand — so:
- All colors, fonts, spacing, and icon styles live in a single `tailwind.config.js` theme extension + CSS variables in `app.css`.
- Every component (buttons, cards, badges) pulls from these tokens — no one-off hex codes scattered through Blade files.
- Icon set is a component: `<x-icon name="whatsapp" />`, `<x-icon name="bed" />`, etc., rendering inline SVG so they inherit `currentColor` and can be recolored via CSS.

## 4. Data Model (minimum viable)
```
Listing: id, title, slug, type (enum: land/duplex/terrace/detached/flat/commercial/shortlet),
         location (string, e.g. "Lekki Phase 1, Lagos"), price_naira, price_usd_equivalent (nullable),
         bedrooms (nullable), bathrooms (nullable), size_sqm (nullable), description (text, editorial tone),
         is_featured (bool), status (enum: for-sale/for-rent/sold), images (json array of paths), agent_id

Agent: id, name, phone, whatsapp_number, photo, title/role

Testimonial: id, client_name, quote, location, photo (nullable)

Inquiry: id, name, phone/email, message, listing_id (nullable, if inquiry came from a specific listing), created_at
```

## 5. Routing
```php
Route::get('/', HomeController::class)->name('home');
Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');
Route::get('/listings/{listing:slug}', [ListingController::class, 'show'])->name('listings.show');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
```

## 6. WhatsApp Integration (no API needed for v1)
Every "Contact Agent" / "Enquire" button links to:
`https://wa.me/234XXXXXXXXXX?text=Hi%2C%20I%27m%20interested%20in%20{listing_title}`
— pre-filled message, opens WhatsApp directly. This is the dominant real-world contact pattern in Nigerian real estate and must be present on hero, listing cards, and property detail pages.

## 7. Performance Notes
- Lazy-load images below the fold.
- Compress/serve responsive image sizes (Laravel's built-in asset handling or a simple `srcset` approach — no need for a heavy image pipeline in v1).
- Keep JS bundle light — Alpine + minimal GSAP, no heavy component frameworks needed.

## 8. Build/Run
```bash
composer install
npm install
php artisan migrate:fresh --seed
npm run dev
php artisan serve
```
