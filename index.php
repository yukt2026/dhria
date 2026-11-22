<?php
$page_title = 'Flora of Madagascar — Specific Essential Oils from Madagascar';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero Panoramic Banner matching Reference Image 1 -->
<section class="page-hero-banner home-hero-banner" style="background-image: url('assets/img/hero-banner.jpg');">
    <div class="page-hero-overlay">
        <div class="container text-center px-4">
            <h1 class="hero-banner-title">Specific essential oils from Madagascar</h1>
        </div>
    </div>
</section>

<!-- 2. Producing Natural Ingredients, It's Our Job! -->
<section class="home-intro-section">
    <div class="container py-lg-3">
        <div class="row g-4 g-lg-5 align-items-center">
            <!-- Left Photo: Distillation facility -->
            <div class="col-lg-6 col-12">
                <div class="img-zoom-wrapper">
                    <img src="assets/img/home-distillation.jpg" alt="Essential Oil Distillation Alembics" class="img-fluid home-intro-img">
                </div>
            </div>
            <!-- Right Narrative & Buttons -->
            <div class="col-lg-6 col-12">
                <h2 class="section-gold-heading">PRODUCING NATURAL INGREDIENTS,<br class="d-none d-md-block">IT'S OUR JOB!</h2>
                <p class="text-muted mb-3" style="line-height: 1.8;">
                    <strong>Flora-of-Madagascar (DHURIA)</strong> aims to contribute to improve the lives of Madagascar's rural population through the sustainable production of natural ingredients. With our passionate team and direct smallholder farmer networks, all of our oils, plant extracts, and organic certs are traced with utmost care.
                </p>
                <p class="text-muted mb-4" style="line-height: 1.8;">
                    Thanks to its multi-disciplinary skills combining agronomic techniques, distillation know-how, and strict quality control, we produce premium quality essential oils with amazing properties.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="about.php" class="btn btn-floramad-gold">Learn more</a>
                    <button type="button" class="btn btn-floramad-dark" data-bs-toggle="modal" data-bs-target="#flyerModal">
                        Download our flyer
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Signature 3-Column Split Block (Exact Floramad layout) -->
<section class="feature-split-block">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">
            <!-- Left: Dark Slate Info Box -->
            <div class="col-lg-5 col-md-12">
                <div class="split-dark-box">
                    <h3 class="split-dark-title">ONLY PURE AND NATURAL ESSENTIAL OILS ...</h3>
                    <p class="split-dark-text">
                        All quality or pure quality our essential oils are fully pure and natural with conformity with international pharmacopeia and cosmetic standards.
                    </p>
                    <p class="split-dark-text">
                        We want a side-by-side approach from farmers to clients in order to offer the best native essential oils from nature to common seeds.
                    </p>
                    <p class="split-dark-text mb-0">
                        Check out all our essential oils in organic certified by <strong>ECOCERT / USDA / EU ORGANIC</strong>.
                    </p>
                </div>
            </div>

            <!-- Middle: Warm Ochre Box with Arrow Button -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="split-gold-box">
                    <p class="split-gold-text">Learn more about our quality management</p>
                    <a href="activities.php#processing" class="split-arrow-box" aria-label="Learn more about our quality management">
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>

            <!-- Right: Quality Control Lab Photo -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="split-photo-box">
                    <img src="assets/img/home-lab.jpg" alt="Essential Oil Quality Control Laboratory" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Discover Our Essential Oils Showcase (Clean White Botanical Cutouts) -->
<div class="floramad-green-bar">
    DISCOVER OUR ESSENTIAL OILS
</div>

<section class="botanical-showcase-section bg-white py-5">
    <div class="container">
        <!-- 2 rows of 4 botanical cards on tablet/desktop, 2 cols on mobile -->
        <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center text-center">
            <?php
            $homepage_botanicals = array_slice($products, 0, 8);
            foreach ($homepage_botanicals as $item):
            ?>
            <div class="col">
                <a href="products.php#<?= htmlspecialchars($item['id']); ?>" class="botanical-cutout-link d-block text-decoration-none">
                    <div class="botanical-cutout-img-box mb-2">
                        <img src="<?= htmlspecialchars($item['image']); ?>" alt="<?= htmlspecialchars($item['title']); ?>" class="img-fluid" loading="lazy">
                    </div>
                    <span class="botanical-cutout-title d-block"><?= htmlspecialchars($item['title']); ?></span>
                    <span class="botanical-cutout-latin d-block text-muted small fst-italic"><?= htmlspecialchars($item['botanical_name']); ?></span>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Towards Responsible Approach (CSR / Farmers) -->
<section class="responsible-approach-section py-5">
    <div class="container py-lg-3">
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-lg-6 col-12">
                <h2 class="section-gold-heading">TOWARDS RESPONSIBLE APPROACH</h2>
                <p class="text-muted mb-3" style="line-height: 1.8;">
                    Flora-of-Madagascar is a company who are environment &amp; farmers at heart. With our field experts, we are committed to support this approach so as to make our rural economy grow, while paying fair prices and respecting the local ecology and becoming a leading responsible partner in the Indian Ocean.
                </p>
                <p class="text-muted mb-4" style="line-height: 1.8;">
                    By partnering directly with over 40 smallholder farming families, providing fair wages, organic cultivation training, and community infrastructure, DHURIA bridges rural Malagasy agriculture directly with international conscious cosmetic brands.
                </p>
                <a href="news.php" class="btn btn-floramad-gold">Read all news</a>
            </div>
            <div class="col-lg-6 col-12">
                <div class="img-zoom-wrapper">
                    <img src="assets/img/home-farming-csr.jpg" alt="Farmers working in Madagascar aromatic fields" class="img-fluid responsible-approach-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. News Showcase (Matching Reference Image 1) -->
<section class="py-5 bg-white">
    <div class="container py-lg-3">
        <h2 class="news-section-title">NEWS</h2>
        <div class="row g-4 justify-content-center">
            <?php
            $home_news = array_slice($news, 0, 3);
            foreach ($home_news as $post):
            ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="home-news-card">
                    <div class="home-news-img-box">
                        <img src="<?= htmlspecialchars($post['image']); ?>" alt="<?= htmlspecialchars($post['title']); ?>" loading="lazy">
                    </div>
                    <div class="home-news-body">
                        <div class="home-news-date"><?= htmlspecialchars($post['date']); ?></div>
                        <h3 class="home-news-title"><?= htmlspecialchars($post['title']); ?></h3>
                        <p class="home-news-excerpt"><?= htmlspecialchars($post['excerpt']); ?></p>
                        <div class="mt-auto">
                            <a href="news-detail.php?id=<?= htmlspecialchars($post['id']); ?>" class="btn btn-floramad-gold btn-sm px-3 py-1">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Pagination Dots Indicator matching Floramad -->
        <div class="d-flex justify-content-center align-items-center gap-2 mt-4 pt-2">
            <span class="news-dot active"></span>
            <span class="news-dot"></span>
            <span class="news-dot"></span>
        </div>
    </div>
</section>

<!-- 7. Our Partners & Certifications -->
<section class="partners-section">
    <div class="container text-center">
        <h4 class="partners-section-title">OUR PARTNERS</h4>
        <div class="row row-cols-3 g-4 align-items-center justify-content-center">
            <?php foreach ($certifications as $cert): ?>
            <div class="col">
                <div class="partner-logo-item">
                    <img src="<?= htmlspecialchars($cert['logo']); ?>" alt="<?= htmlspecialchars($cert['name']); ?>" title="<?= htmlspecialchars($cert['label']); ?>">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
