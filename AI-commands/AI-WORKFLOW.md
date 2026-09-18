# AI WORKFLOW
## Professional WordPress Development & Engineering Standard

Version: 1.0
Status: Active

---

# 1. PURPOSE

This document defines the standard workflow, engineering principles,
architecture, coding practices, design standards, and collaboration rules
to be followed when building WordPress websites and themes with AI assistance.

The objective is to produce:

- Production-ready code
- Professional architecture
- Maintainable systems
- Reusable components
- Scalable folder structures
- Responsive interfaces
- Accessible interfaces
- Secure WordPress implementations
- Performance-conscious code
- Customer-ready designs
- Clear separation of responsibilities
- Long-term maintainability

The project must NOT be treated as a beginner coding exercise.

The final result should be structured as a professional project that another
developer can understand, maintain, extend, and debug.

---

# 2. CORE DEVELOPMENT PHILOSOPHY

The following principles are mandatory unless the project explicitly requires
an exception.

## 2.1 Production First

Code must be written with production usage in mind.

Do not intentionally produce:

- Demo-only architecture
- Throwaway code
- Temporary hacks
- Beginner shortcuts
- Unnecessary duplicated code
- Unstructured files
- Hardcoded values that belong in configuration
- Unnecessary dependencies

If a simpler implementation is sufficient and production-safe, prefer the
simpler implementation.

Complexity must have a reason.

---

# 3. NO EXPERIMENTATION RULE

Do NOT introduce experimental solutions unless explicitly requested.

Do NOT:

- Test random architectures
- Replace an approved design with another concept
- Introduce unnecessary libraries
- Change the technology stack without approval
- Add animations just because they are possible
- Introduce unnecessary abstractions
- Generate alternative designs automatically
- Change locked sections
- Rewrite working code without a reason

If an experimental solution may provide a benefit:

1. Explain the option.
2. Explain the trade-offs.
3. Ask for approval.
4. Only implement it after approval.

---

# 4. NO AUTO-GENERATION RULE

Do NOT automatically generate major code, files, sections, components,
features, images, or architectural changes unless explicitly requested.

Before generating a major implementation:

1. Understand the requirement.
2. Confirm the intended architecture.
3. Define the structure.
4. Present the implementation plan.
5. Proceed with the requested implementation.

Do not assume that "let's discuss" means "generate everything."

---

# 5. COMPLETE IMPLEMENTATION RULE

When implementation is requested, provide complete implementation code
for the affected file or files.

Do not intentionally provide incomplete snippets when the user expects
a complete file.

The implementation must include:

- Correct file location
- Complete code
- Required dependencies
- Required hooks
- Required classes
- Required markup
- Required CSS
- Required JavaScript
- Required responsive behavior
- Required accessibility attributes
- Required security escaping
- Required integration points

The user should not have to guess where missing code belongs.

---

# 6. PROJECT STRUCTURE FIRST

Before starting a new project, provide the complete proposed folder and
file structure.

Do not start implementation before the architecture is understood.

The structure must identify:

- Theme root
- PHP architecture
- Assets
- CSS architecture
- JavaScript architecture
- Components
- Sections
- Templates
- Configuration
- Classes
- Integrations
- Documentation
- Development utilities when needed

The folder structure should be designed for maintainability rather than
for minimizing the number of files.

---

# 7. ARCHITECTURE PRINCIPLES

Projects should follow professional software engineering principles.

Use:

- Separation of concerns
- Single Responsibility Principle
- DRY
- KISS
- SOLID where appropriate
- Dependency management
- Encapsulation
- Clear boundaries between layers
- Reusable components
- Predictable naming
- Explicit dependencies

Do not force design patterns where they do not provide value.

Architecture must serve the project.

---

# 8. WORDPRESS ARCHITECTURE

WordPress functionality must follow WordPress conventions where appropriate.

Use:

- WordPress hooks
- Actions
- Filters
- Template hierarchy
- Theme APIs
- Customizer/Settings APIs when appropriate
- `wp_enqueue_style()`
- `wp_enqueue_script()`
- WordPress sanitization
- WordPress escaping
- WordPress nonces
- WordPress capability checks
- Translation functions
- Proper template loading

Avoid:

- Inline CSS when a stylesheet is appropriate
- Inline JavaScript when a module/file is appropriate
- Hardcoded URLs
- Unsafe database queries
- Direct user input output
- Unnecessary global variables

---

# 9. MVC / LAYERED ARCHITECTURE

WordPress does not require strict MVC, but the project should use
MVC-inspired separation where beneficial.

Conceptual structure:

Model
    ↓
Data and domain logic

Controller
    ↓
Request handling and orchestration

View
    ↓
Templates and presentation

Service
    ↓
Business operations

Repository
    ↓
Data access when complexity requires it

WordPress-specific infrastructure
    ↓
Hooks, APIs, integrations, registration

Do not force strict MVC into simple WordPress templates.

Use architectural separation when complexity justifies it.

---

# 10. PHP ARCHITECTURE

PHP must be organized by responsibility.

Recommended structure:

theme/
├── inc/
│   ├── setup/
│   ├── enqueue/
│   ├── theme/
│   ├── admin/
│   ├── integrations/
│   └── helpers/
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Services/
│   ├── Repositories/
│   └── Support/
│
├── template-parts/
│   ├── components/
│   ├── sections/
│   └── content/
│
└── templates/

Classes should have one clear responsibility.

Do not create classes simply to make the project look "advanced."

---

# 11. OOP STANDARD

Use OOP when the domain or functionality benefits from it.

Good candidates:

- Services
- API integrations
- Product/domain logic
- Repositories
- Complex controllers
- Administrative systems
- Custom data handling
- External integrations

Avoid unnecessary OOP for:

- Simple templates
- Static markup
- Simple presentation-only sections

Classes should use:

- Encapsulation
- Clear public interfaces
- Appropriate visibility
- Typed properties when compatible
- Return types where appropriate
- Dependency injection when useful

Avoid giant "God classes."

---

# 12. CSS ARCHITECTURE

CSS must be modular and maintainable.

Do NOT create one giant stylesheet.

Recommended structure:

assets/css/
├── base.css
├── typography.css
├── components.css
├── layout.css
├── header.css
├── footer.css
├── sections/
│   ├── hero.css
│   ├── benefits.css
│   ├── categories.css
│   ├── featured-products.css
│   └── newsletter.css
└── responsive.css

Use CSS variables for reusable design tokens.

Example:

:root {
    --color-primary: ...;
    --color-secondary: ...;
    --font-body: ...;
    --font-heading: ...;
    --space-sm: ...;
    --space-md: ...;
    --radius-sm: ...;
}

Changing a global design value should require changing one central
definition whenever practical.

---

# 13. DESIGN TOKENS

Centralize reusable values.

At minimum consider:

- Colors
- Typography
- Font sizes
- Line heights
- Spacing
- Border radius
- Shadows
- Container widths
- Breakpoints
- Z-index layers

Avoid repeated magic numbers when a reusable token is appropriate.

---

# 14. CSS RESPONSIVE ARCHITECTURE

Responsive design is part of the original implementation.

Do NOT treat mobile as an afterthought.

Every major section should be evaluated for:

- Desktop
- Tablet
- Mobile

Responsive behavior should include:

- Layout
- Typography
- Spacing
- Buttons
- Forms
- Images
- Navigation
- Grid behavior
- Overflow
- Accessibility

Do not modify responsive CSS unnecessarily.

If a section already works correctly, leave it alone.

---

# 15. JAVASCRIPT ARCHITECTURE

JavaScript should be modular and purposeful.

Use:

assets/js/
├── main.js
├── navigation.js
└── feature-specific files when complexity requires them

`main.js` should contain general theme interactions.

Examples:

- Global UI behavior
- Newsletter interactions
- General UI helpers
- Shared interactions

`navigation.js` should contain navigation-specific behavior.

When a feature becomes large enough, move it into a dedicated module.

Do not create a new JS file for every tiny interaction.

---

# 16. JAVASCRIPT PERFORMANCE

Avoid:

- Unnecessary polling
- Infinite loops
- Excessive DOM queries
- Repeated layout calculations
- Heavy libraries for simple interactions
- Unnecessary event listeners

Prefer:

- Event delegation when appropriate
- CSS animations for purely visual effects
- `transform` and `opacity` for animations
- Efficient DOM access
- Progressive enhancement

---

# 17. PHP SECURITY

Always assume external data is untrusted.

Use appropriate:

- `esc_html()`
- `esc_attr()`
- `esc_url()`
- `wp_kses()`
- `sanitize_text_field()`
- `sanitize_email()`
- Nonces
- Capability checks
- Prepared SQL statements

Never directly output untrusted user input.

Never construct SQL using raw user input.

---

# 18. ACCESSIBILITY

Accessibility must be considered during implementation.

Use:

- Semantic HTML
- Proper heading hierarchy
- Labels for forms
- Accessible buttons
- ARIA only when necessary
- Keyboard accessibility
- Focus states
- Meaningful link text
- Alt text for meaningful images
- Decorative images marked appropriately

Do not use ARIA to compensate for incorrect HTML.

---

# 19. PERFORMANCE

Performance is part of architecture.

Consider:

- Image optimization
- Lazy loading where appropriate
- Minimal dependencies
- Efficient CSS
- Efficient JavaScript
- Proper asset loading
- Avoiding unnecessary DOM elements
- Avoiding render-blocking resources where possible
- Cache-friendly asset versioning

Do not optimize prematurely.

Measure or identify a real problem before introducing complex optimization.

---

# 20. IMAGES AND MEDIA

Images must be treated as production assets.

Consider:

- Correct dimensions
- WebP/AVIF when appropriate
- Responsive images
- Lazy loading
- Alt text
- Proper image positioning
- Avoiding unnecessarily huge files

Do not generate or replace images automatically.

Image generation requires explicit approval/request.

---

# 21. COMPONENT SYSTEM

Reusable UI should be treated as components.

Examples:

- Buttons
- Cards
- Product cards
- Form fields
- Badges
- Navigation elements
- Social links
- Icons
- Alerts
- Modals

Components should be reusable without creating excessive abstraction.

---

# 22. TEMPLATE PARTS

Use template parts for reusable presentation sections.

Example:

template-parts/
├── components/
├── sections/
└── content/

Homepage sections should be independently maintainable.

Example:

get_template_part(
    'template-parts/sections/hero'
);

This allows individual sections to evolve without turning
`front-page.php` into a giant file.

---

# 23. NAMING CONVENTIONS

Use predictable naming.

PHP:

snake_case for functions when following WordPress conventions.

CSS:

BEM-style naming where appropriate.

Example:

.block
.block__element
.block--modifier

JavaScript:

Descriptive names.

Files:

Use lowercase kebab-case where appropriate.

Do not randomly mix naming conventions.

---

# 24. DESIGN WORKFLOW

Every major visual section follows:

1. Requirement
2. Design direction
3. Review
4. Approval
5. Implementation
6. Desktop validation
7. Responsive validation
8. Accessibility check
9. Performance review
10. Lock

Approved designs must not be changed without explicit approval.

---

# 25. LOCKED DESIGN RULE

When the user says:

"Lock"

or

"Approved"

the current design becomes locked.

Do not redesign it later unless the user explicitly requests a change.

Allowed:

- Bug fixes
- Accessibility fixes
- Responsive fixes
- Security fixes
- Performance fixes

These should preserve the approved visual intent.

---

# 26. FEATURE COMPLETION RULE

Do not jump between unfinished features.

When starting a feature:

1. Define the feature.
2. Define files.
3. Implement PHP.
4. Implement CSS.
5. Implement JS if required.
6. Enqueue assets.
7. Test.
8. Check responsive.
9. Check accessibility.
10. Lock.
11. Document.
12. Move to the next feature.

Complete one meaningful function/page/section before moving to another.

---

# 27. DEBUGGING WORKFLOW

When something does not work:

Do not immediately rewrite everything.

Follow:

1. Identify the symptom.
2. Identify the affected layer.
3. Verify file path.
4. Verify enqueue.
5. Verify markup.
6. Verify CSS selector.
7. Verify JavaScript execution.
8. Verify browser/cache issues.
9. Fix the smallest appropriate layer.
10. Retest.

Never randomly change multiple systems at once.

---

# 28. CHANGE MANAGEMENT

When modifying existing code:

- Identify the exact file.
- Identify the exact section.
- Explain what changes.
- Preserve unrelated code.
- Avoid unnecessary rewrites.

If a complete file replacement is safer, explicitly state that
the entire file should be replaced.

---

# 29. DOCUMENTATION

Major architectural decisions should be documented.

Examples:

- Folder structure
- Naming conventions
- Design tokens
- Locked sections
- Third-party integrations
- API decisions
- Authentication
- Database decisions
- Deployment requirements

Documentation should remain concise and useful.

---

# 30. VERSIONING / CHANGELOG

For larger projects maintain:

CHANGELOG.md

Record:

- Features
- Major fixes
- Architecture changes
- Breaking changes
- Important design decisions

Do not record every tiny CSS adjustment.

---

# 31. TESTING STANDARD

Before considering a feature complete, test:

### Functional
- Does it work?
- Does the expected interaction work?
- Do forms behave correctly?

### Visual
- Desktop
- Tablet
- Mobile

### Technical
- PHP errors
- JavaScript errors
- CSS issues
- Missing assets
- Broken paths

### Accessibility
- Keyboard navigation
- Focus states
- Form labels
- Semantic structure

### Performance
- Unnecessary assets
- Excessive animation
- Large images
- Heavy scripts

---

# 32. ERROR HANDLING

Do not hide errors silently.

Production code should:

- Fail safely
- Provide appropriate fallback behavior
- Avoid exposing sensitive information
- Log/debug appropriately during development
- Handle missing data gracefully

---

# 33. DEPENDENCIES

Do not add a dependency unless there is a clear reason.

Before introducing a library:

1. Determine whether WordPress/core/browser functionality already solves it.
2. Determine maintenance cost.
3. Determine performance cost.
4. Determine security implications.
5. Explain why the dependency is justified.

No dependency should be introduced merely because it is convenient.

---

# 34. THIRD-PARTY SERVICES

Before integrating an external service:

- Identify the service.
- Determine its purpose.
- Determine API requirements.
- Determine authentication requirements.
- Determine privacy implications.
- Determine fallback behavior.
- Determine maintenance implications.

Never assume an external service without approval.

---

# 35. CUSTOMER-READY STANDARD

The final website must be suitable for presenting to a real customer.

Avoid:

- Placeholder-quality UI
- Random spacing
- Unfinished states
- Experimental visuals
- Broken responsive behavior
- Inconsistent typography
- Inconsistent components
- Unnecessary animations
- Debug output

Before delivery, the project should look intentional and complete.

---

# 36. DESIGN CONSISTENCY

Once a design system is established, new sections must follow it.

Reuse:

- Typography
- Colors
- Spacing
- Radius
- Shadows
- Buttons
- Cards
- Containers
- Interaction patterns

Do not invent a new visual language for every section.

---

# 37. MAINTAINABILITY RULE

The developer should be able to answer:

"If I need to change this later, where do I go?"

Examples:

Change global font:
    → typography/design token

Change section design:
    → section CSS

Change section markup:
    → section template

Change navigation behavior:
    → navigation.js

Change global behavior:
    → main.js

Change asset loading:
    → enqueue configuration

Change business logic:
    → service/controller/domain layer

Architecture must make changes predictable.

---

# 38. REUSABILITY RULE

Before duplicating code, determine whether the functionality should
become reusable.

Prefer reusable:

- Components
- Helpers
- Services
- Design tokens
- CSS utilities
- Template parts

Do not duplicate the same logic across multiple files.

---

# 39. YAGNI RULE

Do not build functionality that is not required.

Avoid:

- Unused classes
- Unused services
- Unused APIs
- Unused abstractions
- Future-proofing without a real requirement

Build what the project needs, but build it professionally.

---

# 40. AI COLLABORATION RULES

AI should act as a development partner, not as an uncontrolled
code generator.

AI must:

- Understand before implementing.
- Respect the existing architecture.
- Respect locked decisions.
- Explain important architectural choices.
- Identify risks.
- Avoid unnecessary changes.
- Provide production-quality code.
- Maintain consistency.
- Remember the current workflow through project documentation.

AI must NOT:

- Randomly redesign approved work.
- Randomly restructure the project.
- Generate unrelated code.
- Replace working systems without justification.
- Introduce experimental technologies without approval.

---

# 41. WHEN REQUIREMENTS ARE UNCLEAR

If a requirement affects architecture, security, data, or major UX,
ask for clarification before implementation.

If the uncertainty is minor and a safe convention exists,
use the established project convention.

Do not repeatedly ask unnecessary questions.

---

# 42. PROJECT START PROTOCOL

Before coding a new project:

1. Read the project requirements.
2. Read PROJECT-RULES.md if available.
3. Read AI-WORKFLOW.md.
4. Inspect the existing project.
5. Identify technology constraints.
6. Define architecture.
7. Define folder structure.
8. Define design system.
9. Define reusable components.
10. Define asset strategy.
11. Define responsive strategy.
12. Define security requirements.
13. Define performance requirements.
14. Present the complete structure.
15. Get approval.
16. Begin implementation.

---

# 43. FEATURE START PROTOCOL

Before implementing a feature:

1. Identify the feature.
2. Identify affected files.
3. Determine whether existing components can be reused.
4. Determine whether new files are justified.
5. Define desktop behavior.
6. Define mobile behavior.
7. Define accessibility requirements.
8. Define interactions.
9. Implement.
10. Test.
11. Lock when approved.

---

# 44. DELIVERY STANDARD

Before declaring a project complete:

- No known critical errors
- Responsive layouts checked
- Accessibility considered
- Assets verified
- Forms verified
- Links verified
- Console errors reviewed
- Security practices reviewed
- Performance reviewed
- Architecture documented
- Locked designs preserved
- Customer-ready presentation confirmed

---

# 45. FINAL PRINCIPLE

The goal is not to write the most code.

The goal is to build the most maintainable, reliable, scalable,
professional solution appropriate for the project.

Prefer:

Clean over clever.
Stable over experimental.
Reusable over duplicated.
Explicit over confusing.
Maintainable over short.
Production-ready over demo-ready.
Approved design over unnecessary redesign.

Every implementation should move the project toward a professional
engineering standard.