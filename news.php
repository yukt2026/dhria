<?php
$page_title = 'News — Flora of Madagascar';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero Banner matching Reference Image 6 -->
<section class="page-hero-banner" style="background-image: url('assets/img/banners/banner-news.jpg');">
    <div class="page-hero-overlay">
        <div class="container text-center px-4">
            <h1 class="hero-banner-title">News</h1>
        </div>
    </div>
</section>

<!-- 2. Vertical Timeline Section Matching Floramad Reference Image 6 -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="news-timeline-container">
            <?php 
            foreach ($news as $index => $item): 
                $is_even = ($index % 2 === 0);
            ?>
            <div class="timeline-row align-items-center">
                <!-- Center / Node Badge for Date -->
                <div class="timeline-badge-center">
                    <span><?= htmlspecialchars(substr($item['date'], 0, 5)); ?></span>
                </div>

                <div class="row g-4 w-100 m-0">
                    <?php if ($is_even): ?>
                    <!-- Left Side Card -->
                    <div class="col-lg-6 col-12 pe-lg-5 ps-lg-0 timeline-col-left">
                        <div class="timeline-card">
                            <img src="<?= htmlspecialchars($item['image']); ?>" alt="<?= htmlspecialchars($item['title']); ?>" class="img-fluid" loading="lazy">
                            <div class="home-news-date text-muted mb-2"><?= htmlspecialchars($item['date']); ?></div>
                            <h3 class="home-news-title font-serif" style="font-size: 1.25rem;">
                                <a href="news-detail.php?id=<?= htmlspecialchars($item['id']); ?>" class="text-dark">
                                    <?= htmlspecialchars($item['title']); ?>
                                </a>
                            </h3>
                            <p class="home-news-excerpt"><?= htmlspecialchars($item['excerpt']); ?></p>
                            <a href="news-detail.php?id=<?= htmlspecialchars($item['id']); ?>" class="btn btn-floramad-green btn-sm px-3 py-1">
                                Read more
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block"></div>

                    <?php else: ?>
                    <!-- Right Side Card -->
                    <div class="col-lg-6 d-none d-lg-block"></div>
                    <div class="col-lg-6 col-12 ps-lg-5 pe-lg-0 timeline-col-right">
                        <div class="timeline-card">
                            <img src="<?= htmlspecialchars($item['image']); ?>" alt="<?= htmlspecialchars($item['title']); ?>" class="img-fluid" loading="lazy">
                            <div class="home-news-date text-muted mb-2"><?= htmlspecialchars($item['date']); ?></div>
                            <h3 class="home-news-title font-serif" style="font-size: 1.25rem;">
                                <a href="news-detail.php?id=<?= htmlspecialchars($item['id']); ?>" class="text-dark">
                                    <?= htmlspecialchars($item['title']); ?>
                                </a>
                            </h3>
                            <p class="home-news-excerpt"><?= htmlspecialchars($item['excerpt']); ?></p>
                            <a href="news-detail.php?id=<?= htmlspecialchars($item['id']); ?>" class="btn btn-floramad-green btn-sm px-3 py-1">
                                Read more
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
