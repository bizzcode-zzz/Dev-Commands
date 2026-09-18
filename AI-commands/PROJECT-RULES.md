# Bizzsoft Project Rules

## Project Status

- Project: Bizzsoft
- Type: WordPress Theme
- Status: Active Development
- Design Standard: Modern, professional, production-ready
- Current workflow: Section-by-section implementation

---

# 1. PROJECT OBJECTIVE

Bizzsoft is being developed as a professional, modern ecommerce-oriented
WordPress theme.

The theme must be:

- Modern
- Professional
- Customer-ready
- Responsive
- Maintainable
- Scalable
- Accessible
- Performance-conscious
- Production-ready

Do not treat the project as a beginner/demo theme.

---

# 2. DESIGN RULES

- Approved designs are locked.
- Do not redesign a locked section without explicit approval.
- New sections must follow the established Bizzsoft visual system.
- Maintain consistent typography, spacing, colors, buttons, cards, and layout.
- Avoid unnecessary visual experimentation.
- Do not add decorative effects unless they support the design.
- Customer presentation quality is required.

---

# 3. CURRENT DESIGN SYSTEM

## Brand

Brand:
Bizzsoft

Primary visual direction:

- Black
- White
- Orange accent
- Dark neutral surfaces
- Clean ecommerce presentation

## Typography

Use the established project typography system.

Global typography should be controlled centrally rather than
duplicated throughout individual sections.

## Design Tokens

Reusable values should be centralized whenever practical.

Examples:

- Colors
- Typography
- Spacing
- Border radius
- Shadows
- Container widths

---

# 4. FOLDER STRUCTURE

Current project architecture:

bizzsoft/
│
├── assets/
│   ├── css/
│   │   ├── base.css
│   │   ├── typography.css
│   │   ├── components.css
│   │   ├── layout.css
│   │   ├── header.css
│   │   ├── footer.css
│   │   ├── responsive.css
│   │   └── sections/
│   │       ├── hero.css
│   │       ├── benefits.css
│   │       ├── categories.css
│   │       ├── featured-products.css
│   │       └── newsletter.css
│   │
│   └── js/
│       ├── main.js
│       └── navigation.js
│
├── template-parts/
│   ├── components/
│   ├── content/
│   └── sections/
│       ├── hero.php
│       ├── benefits.php
│       ├── categories.php
│       ├── featured-products.php
│       └── newsletter.php
│
├── functions.php
├── front-page.php
├── header.php
├── footer.php
├── style.css
└── PROJECT-RULES.md

Do not change this structure without a clear architectural reason
and explicit approval.

---

# 5. FRONT PAGE STRUCTURE

Current front-page flow:

header
    ↓
hero
    ↓
benefits
    ↓
categories
    ↓
featured products
    ↓
newsletter
    ↓
footer

The front page should remain clean and should primarily orchestrate
template parts rather than contain large amounts of presentation markup.

---

# 6. PHP RULES

Homepage sections belong in:

template-parts/sections/

Reusable UI components belong in:

template-parts/components/

Content-oriented templates belong in:

template-parts/content/

Use:

get_template_part()

for reusable sections where appropriate.

Keep presentation markup separated from business logic.

---

# 7. CSS RULES

Section-specific styles belong in:

assets/css/sections/

Examples:

hero.css
benefits.css
categories.css
featured-products.css
newsletter.css

Global styles belong in their appropriate global stylesheet.

Do not place section-specific CSS randomly into unrelated files.

Use centralized design tokens.

Avoid unnecessary duplication.

---

# 8. RESPONSIVE RULES

Responsive behavior is part of the implementation.

Check:

- Desktop
- Tablet
- Mobile

Do not modify responsive.css unless there is an actual responsive
requirement or issue.

When fixing responsiveness:

- Preserve approved desktop design.
- Modify only the required responsive behavior.
- Avoid unnecessary global changes.

---

# 9. JAVASCRIPT RULES

Current JavaScript structure:

assets/js/
├── main.js
└── navigation.js

main.js:
- General theme interactions
- Shared UI behavior
- Small section interactions

navigation.js:
- Navigation-specific behavior
- Mobile menu behavior

Use clear section labels inside JavaScript files.

Example:

/* ========================================
   NEWSLETTER
======================================== */

Do not create a new JavaScript file for every tiny interaction.

Create a dedicated JS file only when functionality becomes large enough
to justify separation.

---

# 10. ASSET ENQUEUE RULES

Assets must be loaded through WordPress enqueue functions.

Current asset loading is managed through:

functions.php

Do not add duplicate enqueue logic.

Maintain correct dependency order.

Example:

featured-products.css
    ↓
newsletter.css
    ↓
responsive.css

When adding a new asset, integrate it into the existing dependency chain.

---

# 11. LOCKED SECTIONS

The following sections have been approved and locked:

- Header
- Hero
- Store Benefits
- Categories
- Featured Products
- Newsletter
- Footer

Locked means:

- Do not redesign.
- Do not replace the visual concept.
- Do not make unnecessary structural changes.

Allowed changes:

- Bug fixes
- Responsive fixes
- Accessibility fixes
- Security fixes
- Performance fixes

Any visual redesign requires explicit approval.

---

# 12. NEWSLETTER

Status:

LOCKED

Approved characteristics:

- Dark premium card
- Bizzsoft orange accent
- Newsletter heading
- Email input
- Subscribe button
- Decorative animation
- Responsive stacked form on mobile

Newsletter CSS:

assets/css/sections/newsletter.css

Newsletter template:

template-parts/sections/newsletter.php

Newsletter JavaScript behavior, when required:

assets/js/main.js

---

# 13. FOOTER

Status:

LOCKED

Approved characteristics:

- Dark Bizzsoft footer
- Bizzsoft branding
- Shop links
- Customer Service links
- About Bizzsoft links
- Social links
- Copyright
- Secure payment indicators

Social platforms:

- Facebook
- Instagram
- X

Footer CSS:

assets/css/footer.css

Footer section:

template-parts/sections/footer.php

Root WordPress wrapper:

footer.php

---

# 14. CURRENT COMPLETED SECTIONS

Completed:

- Header
- Hero
- Store Benefits
- Categories
- Featured Products
- Newsletter
- Footer

The Front Page visual structure is currently complete.

Future work should focus on functionality, refinement, testing,
accessibility, responsive validation, and additional pages/features
rather than randomly redesigning completed sections.

---

# 15. DEVELOPMENT WORKFLOW

For every new feature:

1. Understand the requirement.
2. Check existing architecture.
3. Check this PROJECT-RULES.md.
4. Identify affected files.
5. Reuse existing components where possible.
6. Define the implementation.
7. Implement complete code.
8. Enqueue required assets.
9. Test functionality.
10. Check responsive behavior.
11. Check accessibility.
12. Review performance.
13. Get approval.
14. Lock when approved.
15. Update PROJECT-RULES.md if the project architecture or locked
    decisions changed.

---

# 16. CHANGE RULE

Do not modify unrelated files.

When changing an existing feature:

- Identify the exact file.
- Identify the exact section.
- Preserve unrelated code.
- Avoid unnecessary rewrites.

If a complete file replacement is required, clearly state that
the entire file should be replaced.

---

# 17. NO EXPERIMENT RULE

Do not introduce experimental solutions into Bizzsoft unless explicitly
requested.

Do not:

- Randomly redesign sections.
- Add unnecessary libraries.
- Change architecture without approval.
- Add unnecessary animations.
- Change locked designs.
- Replace working code without a reason.

---

# 18. PRODUCTION STANDARD

All new Bizzsoft code must follow the project's AI-WORKFLOW.md.

Code should be:

- Production-ready
- Secure
- Maintainable
- Accessible
- Responsive
- Reusable
- Performance-conscious

Avoid beginner-style implementations.

---

# 19. CURRENT PRIORITY

The Front Page core sections are complete.

Next development should proceed according to the approved project roadmap.

Before starting a new major feature:

- Review this file.
- Confirm current architecture.
- Define affected files.
- Complete the feature before moving to another unrelated feature.

---

# 20. PROJECT MEMORY

This file is the project-specific source of truth.

When a major architectural decision, locked design, folder structure,
or project-specific rule changes, update this document.

Do not rely solely on conversation history for important project decisions.