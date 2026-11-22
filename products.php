<?php
$page_title = 'Our Products — Flora of Madagascar';
require_once __DIR__ . '/includes/header.php';

$selected_category = isset($_GET['category']) ? strtolower(trim($_GET['category'])) : 'all';
?>

<!-- 1. Hero 6-Slice Botanical Collage Banner matching Reference Image 4 -->
<section class="products-collage-banner position-relative overflow-hidden">
    <div class="banner-collage-grid">
        <div class="collage-slice" style="background-image: url('assets/img/products/ylang-ylang.jpg');"></div>
        <div class="collage-slice" style="background-image: url('assets/img/products/ravintsara.jpg');"></div>
        <div class="collage-slice" style="background-image: url('assets/img/products/niaouli.jpg');"></div>
        <div class="collage-slice" style="background-image: url('assets/img/products/lemon-eucalyptus.jpg');"></div>
        <div class="collage-slice" style="background-image: url('assets/img/products/rose-geranium.jpg');"></div>
        <div class="collage-slice" style="background-image: url('assets/img/products/calophyllum.jpg');"></div>
    </div>
    <div class="page-hero-overlay">
        <div class="container text-center px-3 px-md-4">
            <h1 class="hero-banner-title" id="pageBannerTitle">
                <?= $selected_category === 'vegetable' ? 'Our vegetable oils' : 'Our essential oils'; ?>
            </h1>
        </div>
    </div>
</section>

<!-- 2. Product Catalog Content -->
<section class="py-4 py-lg-5 bg-white" id="catalog">
    <div class="container py-lg-3">
        
        <!-- Category Filter Tabs (Swipeable on Mobile) -->
        <div class="filter-tabs-wrapper mb-4 mb-lg-5 text-center">
            <div class="d-inline-flex flex-nowrap flex-md-wrap justify-content-start justify-content-md-center gap-2 filter-tabs-scroll pb-2 pb-md-0">
                <button class="filter-btn <?= $selected_category === 'all' ? 'active' : ''; ?>" data-filter="all">All Products</button>
                <button class="filter-btn <?= ($selected_category === 'essential') ? 'active' : ''; ?>" data-filter="essential-oils">Our essential oils</button>
                <button class="filter-btn <?= $selected_category === 'vegetable' ? 'active' : ''; ?>" data-filter="vegetable-oils">Our vegetable oils</button>
            </div>
        </div>

        <!-- Product Grid: 2 cols on mobile phones, 3 cols on tablet, 4 cols on desktop -->
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 g-md-4" id="productsGrid">
            <?php foreach ($products as $prod): 
                $cat_slug = strtolower(str_replace(' ', '-', $prod['category']));
                $is_hidden = ($selected_category === 'vegetable' && $cat_slug !== 'vegetable-oils');
                $prod_json = htmlspecialchars(json_encode($prod), ENT_QUOTES, 'UTF-8');
            ?>
            <div class="col product-item <?= $is_hidden ? 'd-none' : ''; ?>" data-category="<?= htmlspecialchars($cat_slug); ?>" id="<?= htmlspecialchars($prod['id']); ?>">
                <div class="product-catalog-card h-100 product-card-trigger" data-product='<?= $prod_json; ?>' style="cursor: pointer;">
                    <div class="product-img-box mb-2 mb-md-3">
                        <img src="<?= htmlspecialchars($prod['image']); ?>" alt="<?= htmlspecialchars($prod['title']); ?>" class="img-fluid" loading="lazy">
                    </div>
                    
                    <h3 class="product-title"><?= htmlspecialchars($prod['title']); ?></h3>
                    <p class="product-botanical-name mb-2 mb-md-3"><?= htmlspecialchars($prod['botanical_name']); ?></p>
                    
                    <div class="product-card-footer mt-auto pt-2">
                        <div class="product-certifications mb-2 mb-md-3">
                            <img src="assets/img/certifications/usda-organic.svg" alt="USDA Organic" class="product-cert-badge" title="USDA Organic">
                            <img src="assets/img/certifications/eu-organic.svg" alt="EU Organic" class="product-cert-badge" title="EU Organic">
                            <img src="assets/img/certifications/ecocert.svg" alt="Ecocert" class="product-cert-badge" title="Ecocert Organic">
                        </div>
                        <button type="button" class="btn btn-outline-gold btn-sm w-100 py-1 spec-quote-btn">
                            View Spec
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Button: "OUR QUALITY MANAGEMENT" as seen in Floramad reference -->
        <div class="text-center mt-4 mt-lg-5 pt-3" id="quality">
            <a href="activities.php#processing" class="btn btn-floramad-gold px-4 px-md-5 py-2 py-md-3">
                OUR QUALITY MANAGEMENT
            </a>
        </div>

    </div>
</section>

<!-- 3. Technical Product Detail Modal Sheet (Exact layout of Reference Images 1 & 2) -->
<div class="modal fade" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-product-dialog">
        <div class="modal-content modal-product-content">
            <!-- Green Title Strip -->
            <div class="modal-header modal-product-header d-flex justify-content-between align-items-center">
                <h2 class="modal-product-title" id="mProductTitle">GERANIUM ESSENTIAL OIL</h2>
                <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!-- Modal Body: 2 Columns Matching Reference Images 1 & 2 -->
            <div class="modal-body modal-product-body">
                <div class="row g-4">
                    <!-- Left: Specification Table -->
                    <div class="col-lg-7 col-12 order-2 order-lg-1">
                        <div class="product-spec-table">
                            <div class="spec-row">
                                <span class="spec-label">Botical name</span>
                                <span class="spec-colon">:</span>
                                <span class="spec-value italic" id="mBotanicalName">Pelargonium Graveolens</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">INCI name</span>
                                <span class="spec-colon">:</span>
                                <span class="spec-value" id="mInciName">PELARGONIUM GRAVEOLENS OIL</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Aromatic description</span>
                                <span class="spec-colon">:</span>
                                <span class="spec-value" id="mAromaticDesc">Floral, soft, and slightly fruity</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Used part</span>
                                <span class="spec-colon">:</span>
                                <span class="spec-value" id="mUsedPart">Leaves</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Collection method</span>
                                <span class="spec-colon">:</span>
                                <span class="spec-value" id="mCollection">Culture</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Production process</span>
                                <span class="spec-colon">:</span>
                                <span class="spec-value" id="mProcess">Steam distillation</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Utilisation</span>
                                <span class="spec-colon">:</span>
                                <span class="spec-value" id="mUtilisation">Fragrance, Cosmetic, Aromatherapy</span>
                            </div>
                            <div class="spec-row align-items-center">
                                <span class="spec-label">Harvest time</span>
                                <span class="spec-colon">:</span>
                                <div class="spec-value">
                                    <div class="harvest-calendar-strip" id="mHarvestCalendar">
                                        <span class="harvest-month" data-month="1">J</span>
                                        <span class="harvest-month" data-month="2">F</span>
                                        <span class="harvest-month" data-month="3">M</span>
                                        <span class="harvest-month active" data-month="4">A</span>
                                        <span class="harvest-month active" data-month="5">M</span>
                                        <span class="harvest-month active" data-month="6">J</span>
                                        <span class="harvest-month active" data-month="7">J</span>
                                        <span class="harvest-month active" data-month="8">A</span>
                                        <span class="harvest-month active" data-month="9">S</span>
                                        <span class="harvest-month active" data-month="10">O</span>
                                        <span class="harvest-month" data-month="11">N</span>
                                        <span class="harvest-month" data-month="12">D</span>
                                    </div>
                                </div>
                            </div>
                            <div class="spec-row flex-column mt-3">
                                <span class="spec-label mb-1">Uses and functions :</span>
                                <ul class="uses-functions-list" id="mUsesList">
                                    <li>Antiseptic, antifungal, and anti-inflammatory</li>
                                    <li>Astringent, hemostatic, and regenerative</li>
                                    <li>Relaxing and anti-stress</li>
                                    <li>Skin and hair tonic</li>
                                    <li>Perfume ingredient</li>
                                    <li>Insect repellent</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <a href="#" id="mInquiryBtn" class="btn btn-floramad-gold w-100 py-2">
                                <i class="bi bi-envelope me-2"></i>Inquire About This Product
                            </a>
                        </div>
                    </div>

                    <!-- Right: Visual Card + Certifications + Gold Madagascar Map & QR Code -->
                    <div class="col-lg-5 col-12 order-1 order-lg-2">
                        <div class="modal-visual-panel">
                            <!-- White Botanical Cutout & Amber Bottle Box with Logo -->
                            <div class="modal-product-botanical-card text-center">
                                <div class="d-flex justify-content-end mb-1">
                                    <img src="assets/img/logo-dhuria.png" alt="Dhuria Logo" style="height: 22px;">
                                </div>
                                <div class="modal-botanical-composite">
                                    <img src="assets/img/products/rose-geranium.jpg" id="mPlantImg" alt="Botanical Plant" class="modal-plant-img">
                                    <img src="assets/img/amber-bottle.svg" alt="Amber Essential Oil Dropper Bottle" class="modal-amber-bottle">
                                </div>
                            </div>

                            <!-- Certifications Row (USDA + EU Organic) -->
                            <div class="modal-cert-row">
                                <img src="assets/img/certifications/usda-organic.svg" alt="USDA Organic" title="USDA Organic Certified">
                                <div class="text-start">
                                    <img src="assets/img/certifications/eu-organic.svg" alt="EU Organic" title="EU Organic Certified">
                                    <div class="modal-cert-organic-label mt-1">
                                        Non-EU Agriculture<br>Certified by ECOCERT
                                    </div>
                                </div>
                            </div>

                            <!-- Gold Card with White Madagascar Island Map & QR Code -->
                            <div class="modal-terroir-gold-box">
                                <img src="assets/img/mada-map.svg" alt="Madagascar Harvest Zone" class="modal-mada-map">
                                <div class="text-end">
                                    <div class="modal-qr-box d-inline-block">
                                        <img src="assets/img/qr-code.svg" alt="Batch Verification QR Code">
                                    </div>
                                    <div class="small text-white opacity-75 mt-1" style="font-size: 10px;">
                                        Scan for GC-MS &amp; CoA
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
