<?php
require_once __DIR__ . '/includes/data.php';

$news_id = isset($_GET['id']) ? trim($_GET['id']) : '';
$article = null;

foreach ($news as $item) {
    if ($item['id'] === $news_id) {
        $article = $item;
        break;
    }
}

if (!$article) {
    // Default to first article if id not found
    $article = $news[0];
}

$page_title = $article['title'] . ' — News';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Green Header Title Strip (as seen in Floramad screenshots 7, 8, 9) -->
<section class="page-title-strip">
    <div class="container px-4">
        <h1><?= htmlspecialchars($article['title']); ?></h1>
    </div>
</section>

<!-- Main Article & Sidebar -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row g-5">
            <!-- Left Main Column -->
            <div class="col-lg-8">
                <article class="news-article-content">
                    <!-- Main Featured Image -->
                    <div class="mb-4">
                        <img src="<?= htmlspecialchars($article['image']); ?>" alt="<?= htmlspecialchars($article['title']); ?>" class="img-fluid rounded shadow-sm w-100" style="max-height: 440px; object-fit: cover;">
                    </div>

                    <!-- Meta Information -->
                    <div class="d-flex align-items-center gap-3 text-muted small mb-4 pb-3 border-bottom">
                        <span><i class="bi bi-calendar3 me-1 text-success"></i><?= htmlspecialchars($article['date']); ?></span>
                        <span><i class="bi bi-geo-alt me-1 text-success"></i><?= htmlspecialchars($article['subtitle']); ?></span>
                        <span><i class="bi bi-tag me-1 text-success"></i>International Trade &amp; Expo</span>
                    </div>

                    <!-- Article Paragraphs -->
                    <div class="article-body-text fs-6 lh-lg text-muted mb-5">
                        <?= nl2br(htmlspecialchars($article['content'])); ?>
                    </div>

                    <!-- 3-Photo Event Gallery matching Floramad Detail View -->
                    <?php if (!empty($article['gallery'])): ?>
                    <div class="article-gallery pt-4 border-top">
                        <h4 class="font-serif mb-3" style="font-size: 1.3rem;">Event Photo Gallery</h4>
                        <div class="row g-3">
                            <?php foreach ($article['gallery'] as $idx => $photo): ?>
                            <div class="col-md-4 col-sm-6">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="<?= htmlspecialchars($photo); ?>" data-caption="Event Photo <?= $idx + 1; ?>">
                                    <img src="<?= htmlspecialchars($photo); ?>" alt="Gallery Photo" class="img-fluid rounded shadow-sm w-100" style="height: 140px; object-fit: cover;">
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="mt-5">
                        <a href="news.php" class="btn btn-floramad-outline-gold">
                            <i class="bi bi-arrow-left me-1"></i> Back to all news
                        </a>
                    </div>
                </article>
            </div>

            <!-- Right Sidebar: Recent Posts -->
            <div class="col-lg-4">
                <aside class="sidebar-recent-posts p-4 bg-light rounded border">
                    <h4 class="font-serif text-dark mb-4 pb-2 border-bottom" style="font-size: 1.4rem; color: var(--floramad-gold);">Recent posts</h4>
                    <div class="d-flex flex-column gap-3">
                        <?php foreach ($news as $item): ?>
                        <div class="d-flex gap-3 align-items-start pb-3 border-bottom">
                            <a href="news-detail.php?id=<?= htmlspecialchars($item['id']); ?>" class="flex-shrink-0">
                                <img src="<?= htmlspecialchars($item['image']); ?>" alt="<?= htmlspecialchars($item['title']); ?>" class="rounded" style="width: 65px; height: 65px; object-fit: cover;">
                            </a>
                            <div>
                                <h5 class="small font-sans mb-1" style="font-size: 12.5px; line-height: 1.35; font-weight: 600;">
                                    <a href="news-detail.php?id=<?= htmlspecialchars($item['id']); ?>" class="text-dark hover-gold">
                                        <?= htmlspecialchars($item['title']); ?>
                                    </a>
                                </h5>
                                <span class="text-muted" style="font-size: 11px;"><?= htmlspecialchars($item['date']); ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Sidebar Download CTA -->
                    <div class="sidebar-flyer-box mt-4 pt-3 text-center">
                        <img src="assets/img/flyer-preview.jpg" alt="Catalogue" class="img-fluid rounded shadow-sm mb-3" style="max-height: 180px;">
                        <button type="button" class="btn btn-floramad-green btn-sm w-100" data-bs-toggle="modal" data-bs-target="#flyerModal">
                            Download Our Catalogue
                        </button>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
