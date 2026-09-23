# RULES.md — Ground Rules for the Coding Agent

## Hard Rules — Differentiation (the whole point of this project)
1. **Never use a default Tailwind/Bootstrap color** (no `blue-500`, no `indigo-600`, no default `gray` scale left untouched as primary brand color). All colors must come from the custom palette in design.md.
2. **Never use a stock icon library visibly.** No raw Font Awesome, no raw Heroicons/Lucide defaults in the final UI. Build/adapt a custom icon set per design.md's icon language (even if starting from an open icon base, restyle stroke width, corner radius, and add the brand's signature detail consistently across all icons).
3. **Never use a generic real estate template layout.** No: navy header + white body + 4-column cramped listing grid + Times-New-Roman-adjacent serif for headings. If you catch yourself building that, stop and redesign.
4. **Every listing card and hero image must feel editorial**, like a design magazine feature, not a spec-sheet. Large imagery, confident typography, generous whitespace — not cramped info-dense boxes.
5. **WhatsApp CTA is mandatory** on: hero section, every listing card, every property detail page, contact page, footer. This is the #1 real trust/conversion pattern for Nigerian real estate — do not substitute with just an email form.
6. **Naira-first pricing**, formatted properly (₦85,000,000, not 85000000 or $-only). USD equivalent shown as secondary/smaller text where relevant for diaspora buyers.
7. **No fake trust theater** — don't fabricate specific review counts, fake certifications, or fake awards. Testimonials/seeded content should read as plausible, not as obviously fake marketing copy ("5000+ happy clients!!!" energy is banned).

## Design Execution Rules
- Pick ONE distinctive heading typeface with real character (not a generic geometric sans everyone uses) — see design.md for direction — and use it consistently.
- Pick ONE accent color that becomes "the brand color" — should NOT be blue or green (see design.md reasoning) — used sparingly and confidently, not everywhere.
- Maintain a strict spacing/grid system — generous margins, consistent card proportions, no visual clutter.
- Motion should be minimal and tasteful: soft fade/slide-in on scroll, smooth hover states. No spinning icons, no bouncing CTAs, nothing that reads as "template demo."

## Workflow Rules
- Build page-by-page in this order: Home → Listings → Property Detail → About → Contact (matches task.md).
- Get the design token system (colors, type, icon component) fully locked in Phase 0 before building any page — every later page depends on this being right.
- Do not hardcode one-off colors/fonts in individual Blade files — always reference the shared token system.
- Log every deviation, assumption, or creative decision not explicitly specified in design.md into memory.md before moving to the next task.
- Do not proceed to Listings/Detail pages until Home page is fully reviewed and confirmed on-brand — Home sets the visual tone for everything else.

## Definition of Done (per page)
- [ ] No default framework colors/icons present anywhere on the page
- [ ] WhatsApp CTA present and functional (correct `wa.me` link format)
- [ ] Fully responsive (mobile-first check, not just desktop)
- [ ] Naira pricing correctly formatted
- [ ] Page feels distinct from every existing Nigerian real estate site the agent can recall/reference
- [ ] Logged as complete in memory.md
