<?php
$page_title = 'Our Activities — Flora of Madagascar';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero Banner matching Reference Image 3 -->
<section class="page-hero-banner" style="background-image: url('assets/img/banners/banner-activities.jpg');">
    <div class="page-hero-overlay">
        <div class="container text-center px-4">
            <h1 class="hero-banner-title">Our activities</h1>
        </div>
    </div>
</section>

<!-- Activities Step-by-Step Sections (Mobile Optimized) -->
<div class="container py-4 py-lg-5">
    
    <!-- 1. PLANTING -->
    <section class="activity-section" id="planting">
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-lg-6 col-12 order-1">
                <div class="activity-img-wrapper position-relative">
                    <img src="assets/img/activities/activity-planting.jpg" alt="Aromatic and Medicinal Plants Cultivation" class="img-fluid w-100">
                    <button type="button" class="activity-more-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="assets/img/activities/activity-planting.jpg" data-caption="Planting & Nursery Operations in Madagascar">
                        More pictures
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-12 order-2">
                <h2 class="activity-title">PLANTING</h2>
                <p class="activity-lead">Aromatic and Medicinal Plants (AMP) development is at the heart of our activities.</p>
                <p class="activity-desc">
                    Owning some cultivation and picking sites, as well as working closely with farmers and local producers, Flora-of-Madagascar ensures the planting of aromatic raw materials that we will use for essential oils extraction.
                </p>
                <div class="activity-meta-pills d-flex flex-wrap gap-2 mt-3">
                    <span class="badge bg-light text-dark border"><i class="bi bi-geo-alt text-gold me-1"></i>180 ha Plantation</span>
                    <span class="badge bg-light text-dark border"><i class="bi bi-flower1 text-gold me-1"></i>Native AMP Cultivars</span>
                    <span class="badge bg-light text-dark border"><i class="bi bi-people text-gold me-1"></i>40+ Smallholder Cooperatives</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. PROCESSING (Image on top on mobile order-1, on right on desktop order-lg-2) -->
    <section class="activity-section" id="processing">
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-lg-6 col-12 order-1 order-lg-2">
                <div class="activity-img-wrapper position-relative">
                    <img src="assets/img/activities/activity-processing.jpg" alt="Steam Distillation Alembics and Facility" class="img-fluid w-100">
                    <button type="button" class="activity-more-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="assets/img/activities/activity-processing.jpg" data-caption="Water Steam Distillation Stainless Steel Alembics">
                        More pictures
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-12 order-2 order-lg-1">
                <h2 class="activity-title">PROCESSING</h2>
                <p class="activity-lead">Raw materials (flowers, leaves, rhizomes, barks, etc.), from planting sites or collected from small producers, undergo a water steam distillation operation in order to extract the essences they contain.</p>
                <p class="activity-desc">
                    The essential oils collected are fully pure, without technological additives or preservatives. Slow distillation under calibrated low vapor pressure guarantees preservation of delicate volatile fragrance compounds and complete therapeutic profiles.
                </p>
                <div class="activity-meta-pills d-flex flex-wrap gap-2 mt-3">
                    <span class="badge bg-light text-dark border"><i class="bi bi-droplet-half text-gold me-1"></i>Steam Distillation</span>
                    <span class="badge bg-light text-dark border"><i class="bi bi-shield-check text-gold me-1"></i>100% Pure &amp; Natural</span>
                    <span class="badge bg-light text-dark border"><i class="bi bi-clipboard2-check text-gold me-1"></i>GC-MS Lab Tested</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONDITIONNING -->
    <section class="activity-section" id="conditioning">
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-lg-6 col-12 order-1">
                <div class="activity-img-wrapper position-relative">
                    <img src="assets/img/activities/activity-conditioning.jpg" alt="Blue HDPE Export Drums in Clean Storage" class="img-fluid w-100">
                    <button type="button" class="activity-more-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="assets/img/activities/activity-conditioning.jpg" data-caption="UN-Approved European Standard HDPE Export Drums (20kg / 200kg)">
                        More pictures
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-12 order-2">
                <h2 class="activity-title">CONDITIONNING</h2>
                <p class="activity-lead">To guarantee a proper conservation of their properties, our essential oils are packaged in HDPE EU drums (20kg).</p>
                <p class="activity-desc">
                    They are stored in a well-ventilated and dark place, away from direct sunlight and heat sources. Clean nitrogen blanketing is systematically applied to the headspace of drums to prevent oxidation during storage and long-distance sea/air transit.
                </p>
                <div class="activity-meta-pills d-flex flex-wrap gap-2 mt-3">
                    <span class="badge bg-light text-dark border"><i class="bi bi-box-seam text-gold me-1"></i>HDPE EU Drums (20kg &amp; 200kg)</span>
                    <span class="badge bg-light text-dark border"><i class="bi bi-thermometer-half text-gold me-1"></i>Dark Climate Storage</span>
                    <span class="badge bg-light text-dark border"><i class="bi bi-qr-code text-gold me-1"></i>Full Batch Traceability</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. EXPORT (Image on top on mobile order-1, on right on desktop order-lg-2) -->
    <section class="activity-section" id="export">
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-lg-6 col-12 order-1 order-lg-2">
                <div class="activity-img-wrapper p-3 bg-light border text-center">
                    <img src="assets/img/activities/activity-export.svg" alt="Global Export Shipping Map from Madagascar" class="img-fluid" style="height: auto; max-height: 380px;">
                </div>
            </div>
            <div class="col-lg-6 col-12 order-2 order-lg-1">
                <h2 class="activity-title">EXPORT</h2>
                <p class="activity-lead">Depending on the customers requests and their order quantities, our essential oils are shipped by air or by sea.</p>
                <p class="activity-desc">
                    Containers and packaging are labelled according to current international legislation (IATA, IMDG, ADR). Every batch leaves with its complete documentation bundle: Certificate of Analysis (CoA), Safety Data Sheet (MSDS), IFRA Statement, and Organic Certificates.
                </p>
                <div class="activity-meta-pills d-flex flex-wrap gap-2 mt-3">
                    <span class="badge bg-light text-dark border"><i class="bi bi-airplane text-gold me-1"></i>Air Freight Logistics</span>
                    <span class="badge bg-light text-dark border"><i class="bi bi-water text-gold me-1"></i>Maritime Shipping</span>
                    <span class="badge bg-light text-dark border"><i class="bi bi-file-earmark-check text-gold me-1"></i>IATA / IMDG Compliant</span>
                </div>
            </div>
        </div>
    </section>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
