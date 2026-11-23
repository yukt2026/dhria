<?php
$page_title = 'Dhuria Ayurveda — Ancient Wisdom, Modern Wellness';
require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================
     SECTION 1: FULL-WIDTH SLIDER BANNER (Reference Design)
     ========================================================= -->
<section class="home-slider-banner position-relative">
    <div id="homeHeroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Indicators / Dots -->
        <div class="carousel-indicators slider-indicators-dots">
            <button type="button" data-bs-target="#homeHeroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeHeroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Slide 1: Madhucurex (Reference Image Match) -->
            <div class="carousel-item active">
                <a href="javascript:void(0)" onclick="openQuickOrder('madhucurex-powder', 'Floramade Diabetes Pro MadHuCurex Powder', 2499, 'assets/img/ayurveda/product-madhucurex.jpg')" title="Click to Order MadhuCurex" class="d-block">
                    <picture>
                        <source media="(max-width: 767.98px)" srcset="assets/img/ayurveda/slider-banner-madhucurex-mobile.jpg">
                        <img src="assets/img/ayurveda/slider-banner-madhucurex.jpg" alt="Floramade MadhuCurex Diabetes Pro Powder - Balance your sugar naturally" class="home-slider-img">
                    </picture>
                </a>
            </div>

            <!-- Slide 2: Pilecurex Complete Kit -->
            <div class="carousel-item">
                <a href="javascript:void(0)" onclick="openQuickOrder('pilecurex-kit', 'Floramade Pilecurex 3-in-1 Complete Treatment', 2699, 'assets/img/ayurveda/product-kit.jpg')" title="Click to Order Pilecurex Kit" class="d-block">
                    <picture>
                        <source media="(max-width: 767.98px)" srcset="assets/img/ayurveda/slider-banner-pilecurex-mobile.jpg">
                        <img src="assets/img/ayurveda/slider-banner-pilecurex.jpg" alt="Floramade Pilecurex 3-in-1 Complete Treatment Kit" class="home-slider-img">
                    </picture>
                </a>
            </div>
        </div>

        <!-- Controls: Prev / Next Arrow Buttons -->
        <button class="carousel-control-prev slider-ctrl-btn position-absolute start-0 ms-2 ms-md-4" type="button" data-bs-target="#homeHeroSlider" data-bs-slide="prev" aria-label="Previous Slide">
            <i class="bi bi-chevron-left fs-5"></i>
        </button>
        <button class="carousel-control-next slider-ctrl-btn position-absolute end-0 me-2 me-md-4" type="button" data-bs-target="#homeHeroSlider" data-bs-slide="next" aria-label="Next Slide">
            <i class="bi bi-chevron-right fs-5"></i>
        </button>
    </div>
</section>

<!-- =========================================================
     TRUST STRIP (Matching Reference Image directly below banner)
     ========================================================= -->
<div class="trust-strip-bar py-3 px-2">
    <div class="container-fluid px-lg-4">
        <div class="d-flex align-items-center justify-content-between flex-nowrap overflow-x-auto gap-4 py-1 text-nowrap scrollbar-none">
            <div class="trust-item"><i class="bi bi-patch-check-fill"></i> <span>100% Ayurvedic</span></div>
            <div class="trust-item"><i class="bi bi-award-fill"></i> <span>Certified &amp; Trusted</span></div>
            <div class="trust-item"><i class="bi bi-shield-lock-fill"></i> <span>Safe Payment</span></div>
            <div class="trust-item"><i class="bi bi-headset"></i> <span>Online Support</span></div>
            <div class="trust-item"><i class="bi bi-truck"></i> <span>Free Express Shipping</span></div>
            <div class="trust-item"><i class="bi bi-droplet-half"></i> <span>Lab Tested &amp; Pure</span></div>
            <div class="trust-item"><i class="bi bi-patch-check-fill"></i> <span>100% Ayurvedic</span></div>
            <div class="trust-item"><i class="bi bi-award-fill"></i> <span>Certified &amp; Trusted</span></div>
        </div>
    </div>
</div>

<!-- =========================================================
     SECTION 2: HEALTH CONCERNS TICKER / PILLS STRIP
     ========================================================= -->
<section class="health-ticker-section bg-navy py-3 border-top border-bottom border-secondary border-opacity-25">
    <div class="container-xl">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
            <span class="text-gold fw-bold small text-uppercase letter-spacing-1 d-none d-md-inline-block">
                <i class="bi bi-heart-pulse-fill me-1"></i> HEALTH CONCERNS:
            </span>
            <div class="ticker-pills-wrap d-flex flex-wrap gap-2 flex-grow-1 justify-content-center justify-content-md-end">
                <?php foreach ($ayurveda_categories as $cat): ?>
                <a href="#featured-products" class="ticker-pill text-decoration-none text-white small px-3 py-1 rounded-pill">
                    <i class="bi <?= htmlspecialchars($cat['icon']); ?> text-gold me-1"></i> <?= htmlspecialchars($cat['name']); ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 3: FEATURED BEST PRODUCTS (Improved Cards Design)
     ========================================================= -->
<section id="featured-products" class="featured-products-section py-5 bg-white">
    <div class="container-xl">
        <div class="section-heading text-center mb-4">
            <h2 class="fw-bold text-dark mb-1" style="font-size: clamp(1.8rem, 3vw, 2.3rem);">Featured Best Products</h2>
            <p class="text-muted small mb-0">Browse complete range of 100% organic &amp; approved products.</p>
        </div>

        <div class="row row-cols-2 row-cols-lg-4 g-2 g-sm-3 g-lg-4 pt-3">
            <?php foreach ($ayurveda_products as $prod): ?>
            <div class="col">
                <div class="floramade-product-card card h-100 shadow-sm d-flex flex-column">
                    <!-- Top Colored Visual Box -->
                    <div class="floramade-prod-top" style="background-color: <?= htmlspecialchars($prod['card_bg']); ?>;">
                        <?php if (!empty($prod['is_kit'])): ?>
                        <span class="kit-badge-pill">Kit</span>
                        <?php endif; ?>
                        
                        <!-- Wishlist Heart Button -->
                        <button type="button" class="wishlist-btn" onclick="toggleWishlist(this)" title="Save to Wishlist" aria-label="Save to Wishlist">
                            <i class="bi bi-heart"></i>
                        </button>

                        <!-- Product Image -->
                        <img src="<?= htmlspecialchars($prod['image']); ?>" alt="<?= htmlspecialchars($prod['name']); ?>" class="floramade-prod-img img-fluid">
                    </div>

                    <!-- Bottom Content Block -->
                    <div class="floramade-prod-info d-flex flex-column flex-grow-1">
                        <h5 class="floramade-prod-name">
                            <?= htmlspecialchars($prod['name']); ?>
                        </h5>

                        <!-- Star Rating -->
                        <div class="floramade-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span class="text-dark fw-bold small ms-1"><?= $prod['rating']; ?></span>
                            <span class="text-muted small">(<?= $prod['rating_count']; ?>)</span>
                        </div>

                        <!-- Price -->
                        <div class="floramade-price-wrap mt-auto">
                            <span class="floramade-current-price">₹<?= number_format($prod['price']); ?></span>
                            <span class="floramade-old-price">₹<?= number_format($prod['original_price']); ?></span>
                        </div>

                        <!-- Add to Bag Gold Button -->
                        <button type="button" onclick="openQuickOrder('<?= htmlspecialchars($prod['id']); ?>', '<?= htmlspecialchars(addslashes($prod['brand_title'])); ?>', <?= $prod['price']; ?>, '<?= htmlspecialchars($prod['image']); ?>')" class="btn btn-gold-bag">
                            <i class="bi bi-bag me-2"></i>ADD TO BAG
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Centered View Complete Collection Button -->
        <div class="text-center mt-5">
            <a href="products.php" class="btn btn-outline-dark rounded-pill px-4 py-2 border-2">
                <span class="small fw-bold">View Complete Collection</span> <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 4: "ENRICHED WITH GOODNESS OF NATURE" RIBBON
     ========================================================= -->
<section class="botanical-ribbon-section position-relative py-5 text-center text-white" style="background-image: url('assets/img/ayurveda/botanicals-ribbon-bg.jpg');">
    <div class="ribbon-overlay position-absolute top-0 start-0 w-100 h-100 bg-navy bg-opacity-75"></div>
    <div class="container-xl position-relative z-1 py-4">
        <span class="text-gold text-uppercase fw-bold letter-spacing-2 small d-block mb-2">100% PURE &amp; ETHICALLY SOURCED</span>
        <h2 class="display-5 font-serif fw-bold text-white mb-2 fst-italic">
            Enriched With Goodness Of Nature
        </h2>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 680px;">
            Harnessing classical Vedic botanical wisdom with modern standardization to deliver authentic, non-toxic healing for your entire family.
        </p>
    </div>
</section>

<!-- =========================================================
     SECTION 5: BRAND STORY & HERITAGE
     ========================================================= -->
<section class="brand-story-section py-5 bg-white">
    <div class="container-xl py-lg-4">
        <div class="row g-4 g-lg-5 align-items-center">
            <!-- Left: Authentic Craft Visual -->
            <div class="col-lg-5 col-12">
                <div class="position-relative">
                    <img src="assets/img/ayurveda/proc-craft.jpg" alt="Traditional Ayurvedic Herb Grinding and Preparation" class="img-fluid rounded-4 shadow-sm w-100">
                    <div class="position-absolute top-0 start-0 m-3 p-2 px-3 bg-navy text-gold rounded-pill small fw-bold">
                        <i class="bi bi-patch-check me-1"></i> Shastric Purity
                    </div>
                </div>
            </div>

            <!-- Right: Heritage Narrative -->
            <div class="col-lg-7 col-12">
                <span class="text-gold text-uppercase fw-bold small letter-spacing-1 d-block mb-2">OUR TIMELESS MISSION</span>
                <h2 class="font-serif fw-bold text-navy mb-3">
                    DHURIA AYURVEDA : NURTURING WELLNESS NATURALLY
                </h2>
                <p class="text-muted mb-3" style="line-height: 1.8;">
                    At <strong>Dhuria Ayurveda</strong>, we believe authentic health begins in nature. Rooted in ancient Vedic pharmacopeia and elevated with modern pharmaceutical precision, our formulations are crafted from hand-harvested herbs, cold-pressed plant extracts, and standardized bio-compounds.
                </p>
                <p class="text-muted mb-4" style="line-height: 1.8;">
                    Every single batch is tested for heavy metals, pesticides, and active phytochemical strength. We never use artificial binders, synthetic flavors, or habit-forming chemicals — ensuring that each drop, powder, and capsule is purely restorative.
                </p>

                <!-- 4 Trust Badges -->
                <div class="row row-cols-2 row-cols-md-4 g-3 mb-4">
                    <div class="col">
                        <div class="p-2 border rounded-3 text-center bg-cream">
                            <i class="bi bi-flower1 text-gold fs-4 d-block mb-1"></i>
                            <span class="small fw-bold text-navy d-block">100% Herbal</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-2 border rounded-3 text-center bg-cream">
                            <i class="bi bi-shield-check text-gold fs-4 d-block mb-1"></i>
                            <span class="small fw-bold text-navy d-block">GMP Certified</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-2 border rounded-3 text-center bg-cream">
                            <i class="bi bi-droplet-half text-gold fs-4 d-block mb-1"></i>
                            <span class="small fw-bold text-navy d-block">Zero Chemicals</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-2 border rounded-3 text-center bg-cream">
                            <i class="bi bi-clipboard2-check text-gold fs-4 d-block mb-1"></i>
                            <span class="small fw-bold text-navy d-block">Lab Tested</span>
                        </div>
                    </div>
                </div>

                <a href="about.php" class="btn btn-navy px-4 py-2 fw-semibold">
                    Explore Our Story <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 6: DOCTOR TRUST BANNER
     ========================================================= -->
<section class="doctor-trust-section py-4 bg-cream">
    <div class="container-xl">
        <div class="doctor-trust-card bg-navy text-white p-4 p-lg-5 rounded-4 shadow-lg position-relative overflow-hidden">
            <div class="row g-4 align-items-center">
                <!-- Circular Doctor Portrait -->
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="doctor-avatar-wrap mx-auto position-relative" style="width: 200px; height: 200px;">
                        <img src="assets/img/ayurveda/doctor-portrait.jpg" alt="Senior Ayurvedic Physician" class="img-fluid rounded-circle w-100 h-100 shadow border border-3 border-warning" style="object-fit: cover;">
                        <div class="badge bg-gold text-dark position-absolute bottom-0 start-50 translate-middle-x px-3 py-1 rounded-pill small fw-bold text-nowrap shadow">
                            CARE &amp; TRUST
                        </div>
                    </div>
                </div>

                <!-- Doctor Trust Narrative -->
                <div class="col-lg-8 col-md-7">
                    <span class="badge bg-white bg-opacity-15 text-gold px-3 py-1 rounded-pill small fw-bold text-uppercase letter-spacing-1 mb-2 d-inline-block">
                        RECOMMENDED BY HEALTH PROFESSIONALS
                    </span>
                    <h2 class="font-serif fw-bold text-white mb-2">
                        WE ARE AN HONEST AYURVEDA BRAND 🍃
                    </h2>
                    <p class="text-white-50 mb-4" style="line-height: 1.7;">
                        Every product in the Dhuria catalogue is conceptualized and verified under the clinical guidance of experienced Ayurvedic Vaidyas. We address root imbalances rather than merely masking acute symptoms. Have a question about chronic constipation, piles, vitality, or dosage? Speak directly with our clinical experts for free.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="tel:+919318445297" class="btn btn-gold px-4 py-2 fw-bold text-uppercase letter-spacing-1">
                            <i class="bi bi-telephone-outbound-fill me-2"></i> Consult Doctor Free (+91 9318445297)
                        </a>
                        <a href="https://wa.me/919318445297?text=Hello%20Doctor%2C%20I%20need%20ayurvedic%20consultation%20regarding%20my%20health." target="_blank" rel="noopener" class="btn btn-outline-light px-4 py-2">
                            <i class="bi bi-whatsapp me-2 text-success"></i> WhatsApp Doctor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 7: BENEFITS 4-BOX GRID
     ========================================================= -->
<section class="benefits-grid-section py-5 bg-white">
    <div class="container-xl">
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
            <div class="col">
                <div class="benefit-box p-4 rounded-4 border bg-cream h-100 text-center text-sm-start d-flex flex-column align-items-center align-items-sm-start">
                    <div class="benefit-icon-circle mb-3 bg-white text-gold shadow-sm">
                        <i class="bi bi-flower2 fs-3"></i>
                    </div>
                    <h6 class="fw-bold text-navy mb-1 font-serif">100% Ayurvedic</h6>
                    <p class="text-muted small mb-0">Pure botanical extracts prepared according to classical Shastric Vedic formulations.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-box p-4 rounded-4 border bg-cream h-100 text-center text-sm-start d-flex flex-column align-items-center align-items-sm-start">
                    <div class="benefit-icon-circle mb-3 bg-white text-gold shadow-sm">
                        <i class="bi bi-heart-pulse fs-3"></i>
                    </div>
                    <h6 class="fw-bold text-navy mb-1 font-serif">Free Doctor Consultation</h6>
                    <p class="text-muted small mb-0">Direct phone and WhatsApp guidance with our certified clinical Ayurvedic practitioners.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-box p-4 rounded-4 border bg-cream h-100 text-center text-sm-start d-flex flex-column align-items-center align-items-sm-start">
                    <div class="benefit-icon-circle mb-3 bg-white text-gold shadow-sm">
                        <i class="bi bi-truck fs-3"></i>
                    </div>
                    <h6 class="fw-bold text-navy mb-1 font-serif">Pan-India Express Delivery</h6>
                    <p class="text-muted small mb-0">Dispatched within 24 hours in discreet, tamper-proof and shock-resistant packaging.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-box p-4 rounded-4 border bg-cream h-100 text-center text-sm-start d-flex flex-column align-items-center align-items-sm-start">
                    <div class="benefit-icon-circle mb-3 bg-white text-gold shadow-sm">
                        <i class="bi bi-cash-coin fs-3"></i>
                    </div>
                    <h6 class="fw-bold text-navy mb-1 font-serif">Cash On Delivery Available</h6>
                    <p class="text-muted small mb-0">Order with total peace of mind and pay conveniently at your doorstep upon arrival.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 8: WHY CHOOSE DHURIA AYURVEDA? (6-Card Grid)
     ========================================================= -->
<section class="why-choose-section py-5 bg-cream">
    <div class="container-xl">
        <div class="section-heading text-center mb-5">
            <span class="text-gold text-uppercase fw-bold small letter-spacing-1 d-block mb-1">Our Rigorous Quality Pillars</span>
            <h2 class="font-serif fw-bold text-navy display-6">Why Choose Dhuria Ayurveda?</h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Combining centuries of traditional herbal wisdom with rigorous modern testing protocols.
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($ayurveda_why_choose as $idx => $feat): ?>
            <div class="col">
                <div class="why-card card h-100 border-0 rounded-4 shadow-sm p-4 bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="why-icon-box text-gold bg-cream rounded-circle p-2 px-3 fs-4">
                            <i class="bi <?= htmlspecialchars($feat['icon']); ?>"></i>
                        </div>
                        <span class="badge bg-navy text-gold small px-2 py-1"><?= htmlspecialchars($feat['tag']); ?></span>
                    </div>
                    <h5 class="font-serif fw-bold text-navy mb-2"><?= htmlspecialchars($feat['title']); ?></h5>
                    <p class="text-muted small mb-0" style="line-height: 1.7;"><?= htmlspecialchars($feat['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 9: OUR CLASSIC PRODUCTS (Best Sellers Quick Grid)
     ========================================================= -->
<section class="classic-products-section py-5 bg-white">
    <div class="container-xl">
        <div class="section-heading text-center mb-5">
            <span class="text-gold text-uppercase fw-bold small letter-spacing-1 d-block mb-1">Daily Herbal Essentials</span>
            <h2 class="font-serif fw-bold text-navy display-6">OUR CLASSIC PRODUCTS</h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Most loved daily remedies trusted by thousands of patients across India for sustainable, lasting health.
            </p>
        </div>

        <div class="row row-cols-2 row-cols-lg-4 g-2 g-sm-3 g-lg-4">
            <?php foreach ($ayurveda_products as $prod): ?>
            <div class="col">
                <div class="classic-card card h-100 border rounded-4 shadow-sm overflow-hidden d-flex flex-column bg-white">
                    <div class="classic-img-wrap p-3 text-center position-relative" style="background-color: <?= htmlspecialchars($prod['card_bg']); ?>15;">
                        <span class="badge bg-gold text-dark position-absolute top-0 start-0 m-3 small fw-bold"><?= htmlspecialchars($prod['discount']); ?></span>
                        <img src="<?= htmlspecialchars($prod['image']); ?>" alt="<?= htmlspecialchars($prod['name']); ?>" class="img-fluid rounded-3" style="max-height: 200px; object-fit: contain;">
                    </div>
                    <div class="card-body p-3 d-flex flex-column">
                        <span class="small text-muted text-uppercase letter-spacing-1"><?= htmlspecialchars($prod['weight']); ?></span>
                        <h6 class="font-serif fw-bold text-dark my-1" style="min-height: 44px;"><?= htmlspecialchars($prod['name']); ?></h6>
                        <div class="d-flex align-items-center gap-1 small text-warning mb-2">
                            <i class="bi bi-star-fill"></i>
                            <span class="text-dark fw-bold small ms-1"><?= $prod['rating']; ?></span>
                            <span class="text-muted small">(<?= $prod['rating_count']; ?>)</span>
                        </div>
                        <div class="d-flex align-items-baseline gap-2 mb-3 mt-auto">
                            <span class="fs-5 fw-bold text-navy">₹<?= number_format($prod['price']); ?></span>
                            <span class="text-muted small text-decoration-line-through">₹<?= number_format($prod['original_price']); ?></span>
                        </div>
                        <button type="button" onclick="openQuickOrder('<?= htmlspecialchars($prod['id']); ?>', '<?= htmlspecialchars(addslashes($prod['brand_title'])); ?>', <?= $prod['price']; ?>, '<?= htmlspecialchars($prod['image']); ?>')" class="btn btn-outline-navy w-100 small fw-bold py-2">
                            <i class="bi bi-bag-plus me-1"></i> Order Now
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 10: DEEP-DIVE SPOTLIGHT 1 (Chooran & Multivitamin)
     ========================================================= -->
<?php $spotlight1 = $ayurveda_products[0]; ?>
<section id="spotlight-chooran" class="spotlight-section py-5 bg-cream border-top border-bottom">
    <div class="container-xl">
        <div class="spotlight-card bg-white p-4 p-xl-5 rounded-4 shadow-sm border">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Left: Amber Background Card with Jar & Thumbs -->
                <div class="col-lg-5 col-12">
                    <div class="spotlight-visual-box rounded-4 p-4 text-center" style="background-color: <?= htmlspecialchars($spotlight1['card_bg']); ?>;">
                        <img src="<?= htmlspecialchars($spotlight1['image']); ?>" alt="<?= htmlspecialchars($spotlight1['name']); ?>" class="img-fluid rounded-3 mb-3 shadow-sm spotlight-main-img" style="max-height: 320px; object-fit: contain;">
                        <div class="spotlight-thumbs d-flex justify-content-center gap-2">
                            <?php foreach ($spotlight1['thumbnails'] as $thumb): ?>
                            <img src="<?= htmlspecialchars($thumb); ?>" alt="Thumbnail preview" class="img-thumbnail rounded-2 p-1" style="width: 55px; height: 55px; object-fit: cover;">
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Right: Detailed Product Clinical Breakdown -->
                <div class="col-lg-7 col-12">
                    <span class="badge bg-gold text-dark px-3 py-1 rounded-pill small fw-bold text-uppercase letter-spacing-1 mb-2">
                        <?= htmlspecialchars($spotlight1['category']); ?>
                    </span>
                    <h3 class="font-serif fw-bold text-navy mb-2"><?= htmlspecialchars($spotlight1['brand_title']); ?></h3>
                    <p class="text-muted small mb-3"><?= htmlspecialchars($spotlight1['tagline']); ?></p>

                    <!-- Rating & Reviews -->
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="fw-bold small text-dark">4.9 / 5.0</span>
                        <span class="text-muted small">(540+ Patient Reviews)</span>
                    </div>

                    <!-- Pricing Block -->
                    <div class="d-flex align-items-baseline gap-3 mb-3">
                        <span class="fs-2 fw-bold text-navy">₹<?= number_format($spotlight1['price']); ?></span>
                        <span class="text-muted fs-5 text-decoration-line-through">₹<?= number_format($spotlight1['original_price']); ?></span>
                        <span class="badge bg-danger text-white px-2 py-1 small"><?= htmlspecialchars($spotlight1['discount']); ?></span>
                        <span class="badge bg-success-subtle text-success small">Free Shipping</span>
                    </div>

                    <!-- Key Benefits Bullets -->
                    <h6 class="fw-bold text-navy mb-2 small text-uppercase letter-spacing-1">Therapeutic Benefits:</h6>
                    <ul class="list-unstyled small text-muted mb-4">
                        <?php foreach ($spotlight1['benefits'] as $ben): ?>
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check2-circle text-gold me-2 fs-6"></i>
                            <span><?= htmlspecialchars($ben); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="p-3 bg-cream rounded-3 mb-4 small">
                        <strong class="text-navy d-block mb-1"><i class="bi bi-info-circle me-1 text-gold"></i> Recommended Dosage:</strong>
                        <span class="text-muted"><?= htmlspecialchars($spotlight1['dosage']); ?></span>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap gap-3">
                        <button type="button" onclick="openQuickOrder('<?= htmlspecialchars($spotlight1['id']); ?>', '<?= htmlspecialchars(addslashes($spotlight1['brand_title'])); ?>', <?= $spotlight1['price']; ?>, '<?= htmlspecialchars($spotlight1['image']); ?>')" class="btn btn-navy px-4 py-3 fw-bold text-uppercase letter-spacing-1">
                            <i class="bi bi-bag-check me-2"></i> Buy Cash On Delivery
                        </button>
                        <a href="https://wa.me/919318445297?text=Hello%2C%20I%20want%20to%20order%20Dhuria%20Chooran%20Multivitamin." target="_blank" rel="noopener" class="btn btn-gold px-4 py-3 fw-bold text-uppercase letter-spacing-1">
                            <i class="bi bi-whatsapp me-2"></i> Order on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 11: PROMOTIONAL RIBBON ("Choose Pure, Choose Ayurveda")
     ========================================================= -->
<section class="promo-banner-section py-4 bg-navy text-white text-center">
    <div class="container-xl">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div class="text-center text-md-start">
                <h4 class="font-serif fw-bold text-gold mb-1 fst-italic">Choose Pure, Choose Ayurveda</h4>
                <p class="text-white-50 small mb-0">Original certified herbal wellness direct from master Vaidyas to your home.</p>
            </div>
            <div class="d-flex gap-2">
                <a href="tel:+919318445297" class="btn btn-outline-gold px-3 py-2 small">
                    <i class="bi bi-telephone-fill me-1"></i> +91 9318445297
                </a>
                <a href="#featured-products" class="btn btn-gold px-3 py-2 small fw-bold">
                    View Catalog
                </a>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 12: DEEP-DIVE SPOTLIGHT 2 (Pilecurex 3-in-1 Kit)
     ========================================================= -->
<?php $spotlight2 = $ayurveda_products[2]; ?>
<section id="spotlight-kit" class="spotlight-section py-5 bg-white border-bottom">
    <div class="container-xl">
        <div class="spotlight-card bg-white p-4 p-xl-5 rounded-4 shadow-sm border">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Left: Sky Blue Background Card with Kit & Thumbs -->
                <div class="col-lg-5 col-12">
                    <div class="spotlight-visual-box rounded-4 p-4 text-center" style="background-color: <?= htmlspecialchars($spotlight2['card_bg']); ?>;">
                        <img src="<?= htmlspecialchars($spotlight2['image']); ?>" alt="<?= htmlspecialchars($spotlight2['name']); ?>" class="img-fluid rounded-3 mb-3 shadow-sm spotlight-main-img" style="max-height: 320px; object-fit: contain;">
                        <div class="spotlight-thumbs d-flex justify-content-center gap-2">
                            <?php foreach ($spotlight2['thumbnails'] as $thumb): ?>
                            <img src="<?= htmlspecialchars($thumb); ?>" alt="Thumbnail preview" class="img-thumbnail rounded-2 p-1" style="width: 55px; height: 55px; object-fit: cover;">
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Right: Detailed Treatment Protocol -->
                <div class="col-lg-7 col-12">
                    <span class="badge bg-gold text-dark px-3 py-1 rounded-pill small fw-bold text-uppercase letter-spacing-1 mb-2">
                        <?= htmlspecialchars($spotlight2['category']); ?>
                    </span>
                    <h3 class="font-serif fw-bold text-navy mb-2"><?= htmlspecialchars($spotlight2['brand_title']); ?></h3>
                    <p class="text-muted small mb-3"><?= htmlspecialchars($spotlight2['tagline']); ?></p>

                    <!-- Rating & Reviews -->
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="fw-bold small text-dark">5.0 / 5.0</span>
                        <span class="text-muted small">(1,280+ Verified Patients)</span>
                    </div>

                    <!-- Pricing Block -->
                    <div class="d-flex align-items-baseline gap-3 mb-3">
                        <span class="fs-2 fw-bold text-navy">₹<?= number_format($spotlight2['price']); ?></span>
                        <span class="text-muted fs-5 text-decoration-line-through">₹<?= number_format($spotlight2['original_price']); ?></span>
                        <span class="badge bg-danger text-white px-2 py-1 small"><?= htmlspecialchars($spotlight2['discount']); ?></span>
                        <span class="badge bg-success-subtle text-success small">Complete 30 Days Kit</span>
                    </div>

                    <!-- Key Benefits Bullets -->
                    <h6 class="fw-bold text-navy mb-2 small text-uppercase letter-spacing-1">Complete Holistic Action:</h6>
                    <ul class="list-unstyled small text-muted mb-4">
                        <?php foreach ($spotlight2['benefits'] as $ben): ?>
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check2-circle text-gold me-2 fs-6"></i>
                            <span><?= htmlspecialchars($ben); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="p-3 bg-cream rounded-3 mb-4 small">
                        <strong class="text-navy d-block mb-1"><i class="bi bi-info-circle me-1 text-gold"></i> Kit Course &amp; Dosage:</strong>
                        <span class="text-muted"><?= htmlspecialchars($spotlight2['dosage']); ?></span>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap gap-3">
                        <button type="button" onclick="openQuickOrder('<?= htmlspecialchars($spotlight2['id']); ?>', '<?= htmlspecialchars(addslashes($spotlight2['brand_title'])); ?>', <?= $spotlight2['price']; ?>, '<?= htmlspecialchars($spotlight2['image']); ?>')" class="btn btn-navy px-4 py-3 fw-bold text-uppercase letter-spacing-1">
                            <i class="bi bi-bag-check me-2"></i> Order Pilecurex Kit
                        </button>
                        <a href="https://wa.me/919318445297?text=Hello%20Doctor%2C%20I%20want%20to%20order%20Pilecurex%203-in-1%20Kit." target="_blank" rel="noopener" class="btn btn-gold px-4 py-3 fw-bold text-uppercase letter-spacing-1">
                            <i class="bi bi-whatsapp me-2"></i> Order on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 13: CUSTOMER REVIEWS & TESTIMONIALS CAROUSEL
     ========================================================= -->
<section class="testimonials-section py-5 bg-cream">
    <div class="container-xl">
        <div class="section-heading text-center mb-5">
            <span class="text-gold text-uppercase fw-bold small letter-spacing-1 d-block mb-1">Real Stories, Real Healing</span>
            <h2 class="font-serif fw-bold text-navy display-6">CUSTOMER STORIES &amp; REVIEWS</h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Read verified reviews from real customers whose lives were transformed by Dhuria Ayurveda remedies.
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($ayurveda_testimonials as $t): ?>
            <div class="col">
                <div class="testimonial-card card h-100 border-0 rounded-4 shadow-sm p-4 bg-white d-flex flex-column">
                    <!-- Star Rating & Badge -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="badge bg-success-subtle text-success small px-2 py-1"><i class="bi bi-patch-check-fill me-1"></i> <?= htmlspecialchars($t['badge']); ?></span>
                    </div>

                    <!-- Quote Text -->
                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.8;">
                        &ldquo;<?= htmlspecialchars($t['comment']); ?>&rdquo;
                    </p>

                    <!-- Author Block -->
                    <div class="d-flex align-items-center gap-3 pt-3 border-top">
                        <div class="avatar-circle bg-navy text-gold fw-bold rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <?= htmlspecialchars($t['avatar_text']); ?>
                        </div>
                        <div>
                            <h6 class="font-serif fw-bold text-dark mb-0"><?= htmlspecialchars($t['name']); ?></h6>
                            <span class="text-muted small"><?= htmlspecialchars($t['location']); ?></span>
                            <span class="d-block text-gold small fw-semibold"><?= htmlspecialchars($t['product']); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 14: TRUST & ASSURANCE STRIP
     ========================================================= -->
<section class="trust-assurance-strip py-4 bg-white border-top border-bottom">
    <div class="container-xl">
        <div class="row row-cols-2 row-cols-md-4 g-3 text-center">
            <div class="col">
                <div class="p-2">
                    <i class="bi bi-patch-check-fill text-gold fs-3 d-block mb-1"></i>
                    <span class="d-block fw-bold text-navy small">100% Certified Ayurvedic</span>
                    <span class="text-muted" style="font-size: 11px;">Authentic Shastric Standard</span>
                </div>
            </div>
            <div class="col">
                <div class="p-2">
                    <i class="bi bi-box-seam-fill text-gold fs-3 d-block mb-1"></i>
                    <span class="d-block fw-bold text-navy small">Discreet &amp; Safe Packing</span>
                    <span class="text-muted" style="font-size: 11px;">100% Privacy Protected</span>
                </div>
            </div>
            <div class="col">
                <div class="p-2">
                    <i class="bi bi-cash-stack text-gold fs-3 d-block mb-1"></i>
                    <span class="d-block fw-bold text-navy small">Cash On Delivery</span>
                    <span class="text-muted" style="font-size: 11px;">Pay After Receiving Package</span>
                </div>
            </div>
            <div class="col">
                <div class="p-2">
                    <i class="bi bi-headset text-gold fs-3 d-block mb-1"></i>
                    <span class="d-block fw-bold text-navy small">Doctor Helpline</span>
                    <span class="text-muted" style="font-size: 11px;">Call/WhatsApp: +91 9318445297</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating WhatsApp Consultation Button for Mobile & Desktop -->
<a href="https://wa.me/919318445297?text=Hello%20Floramade%20Ayurveda%2C%20I%20have%20an%20inquiry%20regarding%20ayurvedic%20products." class="floating-wa-btn" target="_blank" rel="noopener" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
