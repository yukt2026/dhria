# Flora of Madagascar (DHURIA) — Corporate Website Redesign

A complete, high-fidelity corporate website redesign inspired by **Flora of Madagascar (floramad.com)**, featuring the brand identity and official logo of **Dhuria**.

## Live Local Server
- **URL**: `http://localhost/dhria/`
- **Root Directory**: `C:\xampp\htdocs\dhria\`

## Included Pages & Architecture
- **`index.php`** — Full homepage featuring:
  - Hero Panoramic Banner ("Specific essential oils from Madagascar") with blooming Ylang-Ylang imagery.
  - Section "PRODUCING NATURAL INGREDIENTS, IT'S OUR JOB!" with distillation facility visuals, story, and CTA buttons.
  - Signature 3-Column Split Block: Dark Slate box ("ONLY PURE AND NATURAL ESSENTIAL OILS..."), Warm Ochre navigation box with arrow, and Laboratory Quality Control photo.
  - "DISCOVER OUR ESSENTIAL OILS" olive-green bar with responsive 8-botanical product showcase.
  - "TOWARDS RESPONSIBLE APPROACH" section highlighting smallholder farmer partnerships and community empowerment.
  - "NEWS" showcase with 3 white corporate cards and pagination indicators.
  - "OUR PARTNERS & CERTIFICATIONS" section with Ecocert, USDA Organic, EU Organic, and ISO 9001 badges.
  - "Feel free to contact us" full-width botanical callout banner with centered glass card.
- **`about.php`** — "WHO WE ARE ?" page featuring:
  - Hero landscape banner: `"Ny zavamanirin'i Madagasikara"`.
  - "BORN OUT OF AN ENTREPRENEURIAL PASSION..." with agricultural nursery visual.
  - "In a few numbers ..." statistical grid (Our Sites, Our Essential Oils, Our Sales, Human Resources, Our Farmings, 4 Segments Served).
  - "OUR VISION" & "OUR MISSION" cards with high-res photography.
  - "OUR AREAS OF COMMITMENT TO CSR" dark olive-green section with 4 numbered white outline boxes.
- **`activities.php`** — "OUR ACTIVITIES" page featuring:
  - 1. PLANTING — Sustainable cultivation, native cultivars, smallholder partnerships.
  - 2. PROCESSING — Steam distillation alembics, temperature control, pure extraction.
  - 3. CONDITIONNING — UN-approved 20kg HDPE European drums, nitrogen headspace, climate-controlled warehouse.
  - 4. EXPORT — Worldwide air and sea freight logistics, full documentation (CoA, GC-MS, MSDS).
  - Interactive "More pictures" modal photo lightboxes for each step.
- **`products.php`** — "OUR PRODUCTS" catalog featuring:
  - Live category filters: *All Products*, *Our essential oils*, *Our vegetable oils*.
  - 20 detailed botanical product cards with high-resolution photography on white backgrounds, botanical names, scientific Latin names, and certification badges (USDA, EU, Ecocert).
  - "OUR QUALITY MANAGEMENT" green button linking directly to distillation and quality standards.
  - Spec & quote inquiry trigger links connecting to the contact form.
- **`news.php`** — "NEWS" page with central vertical timeline matching Floramad's layout:
  - Alternating left/right cards with date circle badges.
  - Real international trade events (Romania Francophonie mission, BIOFACH Nuremberg, CSR Forum, SIAL Canada).
- **`news-detail.php`** — Dedicated article view with green headline strip, high-res featured image, comprehensive story, 3-photo event gallery with lightbox, and "Recent posts" sidebar.
- **`contact.php`** — "CONTACT US" page:
  - Two-column layout matching reference image: Full form (Name, Email, Company, Country, Phone, Subject, Message) and address/contact panel.
  - AJAX submission with anti-spam honeypot and CSRF protection.
- **`contact-handler.php`** — Secure PHP backend logging inquiries to `inquiries.log`.

## Brand & Design Tokens
- **Primary Olive Green**: `#4A6B36`
- **Warm Honey Gold / Ochre**: `#B88B4A`
- **Dark Slate / Charcoal**: `#1B2421`
- **Soft Light Backgrounds**: `#F4F6F2` / `#ECEEEA`
- **Typography**: `Cormorant Garamond` (Luxury botanical serif) & `Montserrat` / `Open Sans` (Modern geometric sans).
- **Official Brand Logo**: `assets/img/logo.jpg` ("dhuria" with globe identity).
