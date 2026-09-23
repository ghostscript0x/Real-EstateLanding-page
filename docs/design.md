# DESIGN.md — Original Visual Direction

## 0. The Anti-Brief (what to avoid, explicitly)
Nigerian real estate sites today converge on: navy/white corporate palette, generic geometric sans (Poppins/Montserrat everywhere), cramped 3–4 column listing grids with small thumbnails, Font Awesome house/key/location-pin icons, stock photos of clearly non-Nigerian suburban homes, a hero with a search bar slapped over a dim photo. **This brand must read as the opposite of all of that.**

## 1. Concept: "Terracotta Modernism"
The core visual idea: blend warm, earthy, distinctly West-African-coded materials and tones (terracotta, clay, adobe, sun-baked sand) with a confident, minimal, modern editorial layout system (like an architecture magazine, not a listings portal). The result should feel premium, warm, local, and modern all at once — not cold/corporate, not kitsch/generic-African-pattern either.

## 2. Color Palette
- **Base/background:** Warm off-white / sand (`#F7F2EA`) — never pure white, never cold gray
- **Primary brand accent:** Deep terracotta/burnt clay (`#B5502F`) — used for CTAs, key headings, active states. This replaces the "generic blue/green" every competitor uses.
- **Secondary accent:** Deep charcoal-brown (`#241C16`) — used for body headings/text instead of pure black (softer, warmer)
- **Supporting tone:** Muted olive/sage (`#7A8B6F`) — small accents, tags, subtle dividers (not a dominant color)
- **Highlight/luxury touch:** A thin brushed-gold line/accent (`#C9A24B`) used SPARINGLY — a divider, a small icon stroke, a "featured" badge — never a large fill (keeps it premium, not gaudy)

## 3. Typography
- **Headings:** A confident, slightly high-contrast serif with real personality — e.g. `Fraunces` or `Canela`-style (editorial, warm, a little architectural) — NOT a generic geometric sans. This is the single biggest differentiator vs. competitors.
- **Body/UI text:** A clean modern sans for readability — `General Sans` or `Inter` — small, restrained, lets the serif headlines do the talking.
- **Numbers/pricing:** Slightly bolder weight of the body sans, tabular figures, generous letter-spacing on the ₦ symbol area so prices feel intentional, not cramped.

## 4. Icon Language — "Single-line Clay Icons"
Custom icon set built on ONE consistent rule set so it never looks like a generic library:
- Rounded-end single-stroke line icons (not filled, not two-tone)
- Stroke width slightly heavier than typical (2.25–2.5px at 24px size) — gives a warm, hand-drawn-but-precise feel
- Every icon has one subtle signature detail: a small offset dot or a slightly asymmetric corner — a tiny consistent quirk that makes the whole set recognizable as custom, not stock
- Icon color: charcoal-brown by default, terracotta on hover/active states
- Needed icons: bed, bath, size/area, location pin (custom-drawn, not the generic teardrop everyone uses — consider a more abstract "place mark" shape), WhatsApp, phone, verified/checkmark, land/plot, house types (duplex, flat, terrace — simple abstracted building silhouettes, each subtly different), filter/sort, search, arrow (for carousels/CTAs)

## 5. Layout Principles
- **Hero:** Full-bleed high-quality architectural photo (modern Nigerian home/skyline, warm-toned grade) with a large serif headline overlaid using a soft gradient scrim (not a flat dark overlay) — headline should feel like a magazine cover line, not a search-bar-stuffed hero.
- **Listings grid:** 2–3 columns MAX on desktop (never 4+ cramped columns) — large image, generous card padding, price and location given real typographic weight, not tiny gray text.
- **Property detail page:** Magazine-style layout — large image gallery (not a cramped thumbnail strip), pull-quote-style description text, spec details laid out with icon + label pairs with breathing room, sticky WhatsApp/agent contact card on scroll (desktop).
- **Section rhythm:** Alternate background tones (sand ↔ slightly darker sand ↔ white) between sections to create visual rhythm down the page without needing hard dividing lines.
- **Buttons:** Pill-shaped or softly-rounded-rectangle, terracotta fill for primary, charcoal outline for secondary — never a generic blue button.

## 6. Photography Direction
- Warm, golden-hour or soft-daylight color grading (avoid cold blue-gray corporate photo grading).
- Real Nigerian architectural context where possible (modern Lagos/Abuja builds, not Western suburban stock).
- Human elements (agents, happy clients) shot candidly, not stiff corporate headshot style.

## 7. Motion
- Sections fade/slide up gently on scroll (short duration, no bounce/elastic easing — should feel calm and premium).
- Listing card images subtly scale on hover (1.0 → 1.03, slow ease).
- WhatsApp floating button has a very subtle, slow pulse (not aggressive/blinking) to draw the eye without feeling spammy.

## 8. What "Always Best" Actually Means Here
The brief says this should "always be the best" — practically, that means: the token system (colors/type/icons) is strict and consistent enough that even as pages/features get added later, nothing can accidentally regress into looking generic, because there's no default-Tailwind-blue or default-icon-library fallback left anywhere in the system to fall back to.
