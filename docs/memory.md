# MEMORY.md — Running Log

Purpose: persistent memory across sessions/agent runs. Update every time you finish a task, make an assumption, hit a blocker, or make a design decision not explicitly nailed down in design.md. Newest entries at top.

---

## 2026-09-23 — Phases 2-6: UI Implementation & Polish
- Status: done
- What happened / decided: Built PageController and ListingController. Built views for Home (hero, featured, testimonials), Listings (filtering, grid, empty states), Property Detail (gallery, pull quotes, sticky contact), About (narrative, team), and Contact (form, map). Ran `npm run build` to compile the CSS for the custom design tokens. Completed a polish pass ensuring responsive layouts (using `md:` and `lg:` classes) and removed any generic Bootstrap/Tailwind visual cliches.
- Assumptions made: Alpine JS is used directly in Blade for the gallery `x-data`. Filter logic uses simple `where` and query strings for `ListingsController@index`.
- Files touched: `app/Http/Controllers/*`, `routes/web.php`, `resources/views/pages/*`, `resources/views/listings/*`, `resources/views/components/listing-card.blade.php`
- Next step: Phase 7 — Screenshot/Handoff

---

## 2026-09-23 — Phase 1: Data Layer
- Status: done
- What happened / decided: Created migrations, models, and factories for Listing, Agent, Testimonial, and Inquiry. Seeded database with realistic Nigerian listings (Lagos & Abuja), naira pricing, and editorial descriptions. Configured relationships (Listing belongsTo Agent).
- Assumptions made: Used realistic place names but faker randomized addresses. Default pricing between 50M and 1.5B NGN.
- Files touched: `app/Models/*`, `database/migrations/*`, `database/factories/*`, `database/seeders/DatabaseSeeder.php`
- Next step: Phase 2 — Home Page

---

## 2026-09-23 — Phase 0: Design Token Setup
- Status: done
- What happened / decided: Created Laravel 11 project. Configured Tailwind CSS 4 variables in `app.css` mapping the terracotta/sand/charcoal palette from design.md. Used 'Fraunces' for headings and 'Inter' for body via Google Fonts. Built `x-icon` component and 6 custom SVGs with a signature dot and asymmetric touches based on Feather Icons base. Built `layouts/app.blade.php`. Updated welcome page to test layout and styles.
- Assumptions made: Used Inter instead of General Sans because it's widely available and clean. Used `currentColor` with stroke-width `2.5` for icons to make hover states easy. Tailwind 4 CSS variables approach used instead of tailwind.config.js since Laravel 11 uses v4 by default.
- Files touched: `resources/css/app.css`, `resources/js/app.js`, `resources/views/components/icon.blade.php`, `resources/svg/icons/*`, `resources/views/components/layouts/app.blade.php`, `resources/views/welcome.blade.php`
- Next step: Phase 1 — Data Layer

---

## Brand Decisions Log (running list, keep updated — this is the source of truth if design.md is ever ambiguous)
- Primary accent hex confirmed: `#B5502F`
- Heading font actually used: `Fraunces`
- Body font actually used: `Inter`
- Icon set: adapted from feather icons with custom asymmetric touches and a signature dot.
- WhatsApp business number used for placeholder CTAs: `+2348000000000`
- Cities/locations covered in seeded data: Lagos (Ikoyi, Victoria Island, Lekki Phase 1, Ikeja GRA), Abuja (Maitama, Asokoro, Wuse II, Gwarinpa)

## Blockers / Open Questions
_(none currently)_

## Page Completion Tracker
- [x] Design tokens + icon system locked
- [x] Data Layer (Phase 1)
- [x] Home page
- [x] Listings page
- [x] Property detail page
- [x] About page
- [x] Contact page
- [x] Full polish pass complete
