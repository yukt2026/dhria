<?php
$page_title = 'Who We Are ? — Flora of Madagascar';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero Banner matching Reference Image 2 -->
<section class="page-hero-banner" style="background-image: url('assets/img/banners/banner-about.jpg');">
    <div class="page-hero-overlay">
        <div class="container text-center px-4">
            <h1 class="hero-banner-title">Flora of Madagascar : "Ny zavamanirin'i Madagasikara"</h1>
        </div>
    </div>
</section>

<!-- 2. Born Out of an Entrepreneurial Passion -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row g-5 align-items-center">
            <!-- Left: Tree nursery photo -->
            <div class="col-lg-6 col-12">
                <div class="img-zoom-wrapper">
                    <img src="assets/img/about/nursery.jpg" alt="Botanical Seedlings and Plant Nursery" class="img-fluid rounded shadow-sm w-100" style="min-height: 320px; max-height: 420px; object-fit: cover;">
                </div>
            </div>
            <!-- Right: Story text with gold heading -->
            <div class="col-lg-6 col-12">
                <h2 class="section-gold-heading mb-4">BORN OUT OF AN ENTREPRENEURIAL PASSION...</h2>
                <p class="text-muted mb-3" style="line-height: 1.8;">
                    Flora of Madagascar was established with a deep conviction: that Madagascar's endemic biodiversity holds exceptional aromatic and therapeutic power that can transform rural communities when harvested with conscience and rigorous scientific precision.
                </p>
                <p class="text-muted mb-3" style="line-height: 1.8;">
                    From our dedicated agricultural nursery sites to our closed-circuit distillation units, we supervise every link in the value chain. More than 100 direct employees and 500 smallholder farming partners benefit from fair economic contracts, educational sponsorship, and continuous organic training.
                </p>
                <p class="text-muted mb-0" style="line-height: 1.8;">
                    Today, DHURIA exports 100% pure, unadulterated essential oils and virgin cold-pressed vegetable oils worldwide, proudly serving discerning formulation laboratories in the aromatherapy, cosmetics, flavor, and fine fragrance sectors.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3. In a few numbers ... (Exact Floramad Line-Art 6-Box Grid) -->
<section class="stats-floramad-section py-5 bg-white border-top">
    <div class="container">
        <h3 class="section-gold-heading mb-4 text-start font-serif" style="font-size: 1.8rem;">In a few numbers ...</h3>
        <div class="row g-4 g-lg-5">
            <?php foreach ($stats as $st): ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="stat-card-floramad d-flex gap-3 align-items-start">
                    <div class="stat-icon-wrapper flex-shrink-0">
                        <img src="<?= htmlspecialchars($st['icon']); ?>" alt="<?= htmlspecialchars($st['title']); ?>" width="52" height="52">
                    </div>
                    <div>
                        <h4 class="stat-card-title"><?= htmlspecialchars($st['title']); ?></h4>
                        <ul class="stat-card-list list-unstyled mb-0">
                            <?php foreach ($st['items'] as $item): ?>
                            <li>&bull; <?= htmlspecialchars($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. Vision & Mission (Matching Reference Image 2 layout) -->
<section class="py-5 bg-white border-top">
    <div class="container py-lg-3">
        <div class="row g-5">
            <!-- Our Vision -->
            <div class="col-lg-6 col-12 text-center">
                <div class="img-zoom-wrapper mb-4">
                    <img src="assets/img/about/vision.jpg" alt="Our Vision" class="img-fluid rounded shadow-sm w-100" style="height: 280px; object-fit: cover;">
                </div>
                <h3 class="section-gold-heading font-serif mb-2" style="font-size: 1.45rem;">OUR VISION</h3>
                <p class="text-muted px-lg-4 mb-0" style="line-height: 1.7;">
                    Flora-of-Madagascar aims to become a major player of economic, social and environmental development in Madagascar through agri-food activities.
                </p>
            </div>
            <!-- Our Mission -->
            <div class="col-lg-6 col-12 text-center">
                <div class="img-zoom-wrapper mb-4">
                    <img src="assets/img/about/mission.jpg" alt="Our Mission" class="img-fluid rounded shadow-sm w-100" style="height: 280px; object-fit: cover;">
                </div>
                <h3 class="section-gold-heading font-serif mb-2" style="font-size: 1.45rem;">OUR MISSION</h3>
                <p class="text-muted px-lg-4 mb-0" style="line-height: 1.7;">
                    To sustainably produce and sell products based on aromatic and medicinal plants from Madagascar.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 5. Areas of Commitment to CSR (Deep Slate Block with Gold Accents & 4 Numbered Outline Boxes) -->
<section class="csr-commitments-block">
    <div class="container">
        <h3 class="csr-commitments-title">OUR AREAS OF COMMITMENT TO CSR</h3>
        <div class="row g-4">
            <?php foreach ($csr_commitments as $csr): ?>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="csr-number-box">
                    <div class="csr-num"><?= htmlspecialchars($csr['number']); ?></div>
                    <p class="csr-box-text"><?= htmlspecialchars($csr['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
