# PRD.md — [CompanyName] Real Estate Website (Nigeria)

## 1. What This Is
A real estate company website/landing page for the Nigerian market — built to look and feel unlike any real estate site currently online in Nigeria. Most Nigerian real estate sites (Private Property NG, PropertyPro, local agency sites) look dated: stock photo heroes, cramped listing grids, generic blue/green corporate colors, cluttered layouts. This project's entire premise is: **be the one that doesn't look like that.**

This is a marketing/lead-gen site first — the goal is to make visitors trust the brand instantly and either browse listings or contact the company, not necessarily a full property-management backend (that can come later).

## 2. Goals
- A landing page + supporting pages (Listings, Property Detail, About, Contact) with a completely original visual identity — not a reskinned Bootstrap/WordPress real estate theme.
- Fast-loading, mobile-first (majority of Nigerian property buyers browse on phone).
- Strong local trust signals: Naira pricing, Nigerian locations (Lekki, Ikoyi, Abuja, PH, etc.), verified/agent badges, WhatsApp contact (dominant contact channel in Nigeria).
- Custom icon set and color system — no default Bootstrap icons, no default Tailwind UI blue.
- Feels premium/aspirational (like the site itself signals "this company has taste and money"), without feeling foreign/disconnected from Nigeria.

## 3. Non-Goals (v1)
- No full property management backend (owner portals, tenant management, payment processing) — that's a phase 2 if it comes.
- No real MLS/data integration — use realistic seeded/sample listings.
- No user accounts/auth required for v1 (unless "save favorites" is explicitly wanted later).
- Not translating to multiple languages — English (Nigerian business English) only for v1.

## 4. Target Pages
1. **Home / Landing** — hero, value prop, featured listings, "how it works," trust section, testimonials, CTA
2. **Listings page** — filterable grid (location, price range, type: land/apartment/duplex/commercial)
3. **Property detail page** — gallery, price, specs, location map, agent contact, WhatsApp CTA
4. **About page** — company story, why they're different, team/agents
5. **Contact page** — form + WhatsApp + office location(s)

## 5. Target Audience
- Middle-to-upper income Nigerians (and diaspora Nigerians) looking to buy/rent property or land, primarily in Lagos, Abuja, Port Harcourt.
- Diaspora buyers specifically need extra trust signals (video walkthroughs, verified documentation badges, clear pricing in both Naira and USD equivalent) since they can't inspect in person easily.

## 6. Differentiation Strategy (the actual ask)
This is the core of the brief — the site must NOT look like:
- A generic real estate WordPress theme
- Existing Nigerian competitors (avoid: navy blue + white + Times-New-Roman-ish serif combo; avoid: cramped 4-column listing grids with tiny thumbnails; avoid: default Font Awesome house/key icons)

Instead it should feel like a boutique design studio built it — see design.md for the full original visual direction (palette, type, custom icon language, layout ideas).

## 7. Success Criteria
- [ ] Nobody looking at this site would mistake it for an existing Nigerian real estate site or a generic theme.
- [ ] Custom icon set (not stock icon library defaults) used throughout.
- [ ] Fully responsive, loads fast, WhatsApp CTA present on every key screen.
- [ ] Listings and property detail pages feel editorial/premium, not like a spreadsheet dumped into cards.
- [ ] Color system and type system are distinctive enough to be recognizable as "the brand" even without a logo present.

## 8. Content/Data Notes
- Use realistic Nigerian listing data: locations (Lekki Phase 1, Ikoyi, Banana Island, Ikeja GRA, Abuja Maitama/Asokoro, Port Harcourt GRA), realistic Naira pricing (e.g., ₦85,000,000 for a 4-bed duplex in Lekki — keep ranges believable), property types (Land, Duplex, Terrace, Detached House, Flat/Apartment, Commercial/Office Space, Short-let).
- Every listing needs: title, location, price (₦, with optional $ equivalent), bedrooms/bathrooms (where applicable), size (sqm or plots), a short editorial-style description (not just spec-dump), 3–5 images, and an agent/contact.
