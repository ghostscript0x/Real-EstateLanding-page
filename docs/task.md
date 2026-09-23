# TASK.md — Execution Checklist

Work top to bottom. Do not skip the design-token phase — every later page depends on it being locked first.

## Phase 0 — Foundation & Design Tokens
- [ ] `laravel new` fresh project, Tailwind via Vite, Alpine.js installed
- [ ] Set up `tailwind.config.js` with full custom palette from design.md (no default Tailwind colors left active as brand colors)
- [ ] Import/set up chosen fonts (serif heading + sans body) via Google Fonts or self-hosted
- [ ] Build the custom icon component system: `resources/svg/icons/*.svg` + `<x-icon name="" />` Blade component
- [ ] Build the first 5–6 core icons (bed, bath, size, location, whatsapp, phone) matching design.md's "Single-line Clay Icons" spec
- [ ] Build shared layout shell: `layouts/app.blade.php` with header/nav, footer, floating WhatsApp CTA component
- [ ] Confirm design tokens by building one small test component (e.g. a button + a listing card) and reviewing against design.md before continuing

## Phase 1 — Data Layer
- [ ] Create migrations/models: Listing, Agent, Testimonial, Inquiry
- [ ] Create factories with realistic Nigerian data (locations, Naira pricing, editorial-style descriptions)
- [ ] Create `RealEstateSeeder`, seed at least 12–18 listings across property types and at least 2 cities (Lagos + Abuja minimum)
- [ ] Seed 3–5 agents, 4–6 testimonials
- [ ] Run `migrate:fresh --seed`, spot-check data realism

## Phase 2 — Home Page (sets the tone — get this right before anything else)
- [ ] Hero section (full-bleed photo, serif headline, primary CTA)
- [ ] Value proposition / "why us" section
- [ ] Featured listings section (3–6 listings, using listing-card component)
- [ ] "How it works" or process section
- [ ] Testimonials section
- [ ] Final CTA + WhatsApp section
- [ ] Full responsive + scroll-motion pass
- [ ] Review against rules.md Definition of Done before moving on

## Phase 3 — Listings Page
- [ ] Filter UI (location, type, price range) — Alpine-powered, no page reload needed for basic filtering if feasible
- [ ] Listing grid (2–3 columns max, per design.md)
- [ ] Empty/no-results state (styled on-brand, not a default browser message)
- [ ] Pagination if listing count warrants it

## Phase 4 — Property Detail Page
- [ ] Image gallery (large, swipeable/Alpine-powered, not a cramped thumbnail strip)
- [ ] Title, location, price (₦ + optional $) with proper typographic treatment
- [ ] Spec row (bed/bath/size) using custom icons
- [ ] Editorial-style description block
- [ ] Agent contact card (sticky on desktop scroll) with WhatsApp + phone CTA
- [ ] Map embed for location context
- [ ] Related listings section at bottom

## Phase 5 — About & Contact Pages
- [ ] About: brand story, differentiation narrative, agent/team section
- [ ] Contact: form (wired to `Inquiry` model + validation), WhatsApp CTA, office location/map

## Phase 6 — Full Polish Pass
- [ ] Walk every page checking: no default colors/icons snuck in anywhere
- [ ] Full mobile pass on all pages (not just desktop)
- [ ] Performance check: image sizes reasonable, lazy-loading working
- [ ] Cross-check every page against design.md's "Anti-Brief" — would this be mistaken for a generic template? If yes, fix it.
- [ ] Final smoke test: `migrate:fresh --seed` → click through every page/link → zero errors

## Phase 7 — Screenshot/Handoff
- [ ] Screenshot each page at desktop (1440px) and mobile (390px) widths for portfolio/carousel use
- [ ] Log final state and any open items in memory.md
