<?php
require_once __DIR__ . '/data.php';
$page_title = isset($page_title) ? $page_title . ' — ' . $brand['name'] : $brand['name'] . ' — ' . $brand['tagline'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?= htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?= htmlspecialchars($brand['description']); ?>">
    <meta name="theme-color" content="#B88B4A">

    <!-- Google Fonts: Elegant botanical luxury & clean modern sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom Floramad Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?= htmlspecialchars(str_replace('.php', '-page', $current_page)); ?>">

<!-- Top Announcement Bar matching Luxury Ayurvedic Standard -->
<div class="top-announcement-bar py-1 px-3">
    <div class="container-xl d-flex justify-content-between align-items-center flex-wrap gap-2">
        <div class="top-bar-item small text-white">
            <i class="bi bi-telephone-fill text-gold me-1"></i> Helpline: <a href="tel:+919318445297" class="text-white text-decoration-none fw-bold">+91 9318445297</a>
            <span class="mx-2 text-white-50">|</span>
            <i class="bi bi-truck text-gold me-1"></i> <span class="d-none d-sm-inline">Free Express Shipping Above ₹499</span><span class="d-inline d-sm-none">Free Shipping</span>
        </div>
        <div class="top-bar-item small text-white-50 d-none d-md-flex align-items-center gap-3">
            <span class="text-white"><i class="bi bi-cash-coin text-gold me-1"></i> Cash On Delivery Available</span>
            <span>|</span>
            <span class="text-white"><i class="bi bi-shield-check text-gold me-1"></i> 100% Ayurvedic Natural Herbs</span>
        </div>
    </div>
</div>

<!-- Clean, Centered Luxury Header matching Floramad.com & Ayurveda Dhuria -->
<header id="siteHeader" class="site-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-navy py-2 py-lg-3">
        <div class="container-xl">
            <!-- Brand Logo & Clean Subtitle -->
            <a class="navbar-brand d-inline-flex flex-column align-items-start py-0 me-3 me-xl-4 text-decoration-none" href="index.php">
                <span class="brand-ayur-title text-gold fw-bold">DHURIA AYURVEDA</span>
                <span class="brand-tagline-sub text-white-50">ANCIENT WISDOM, MODERN WELLNESS</span>
            </a>

            <!-- Mobile Hamburger Toggle -->
            <button class="navbar-toggler border-0 p-2 shadow-none rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#floramadNav" aria-controls="floramadNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links: Clean, Spaced, Vertically Centered -->
            <div class="collapse navbar-collapse" id="floramadNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page === 'index.php' ? 'active' : ''; ?>" href="index.php">
                            <span class="nav-text">HOME</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page === 'about.php' ? 'active' : ''; ?>" href="about.php">
                            <span class="nav-text">WHO WE ARE ?</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($current_page === 'products.php' || $current_page === 'vegetable-oils.php') ? 'active' : ''; ?>" href="products.php" id="productsNavDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <span class="nav-text">OUR PRODUCTS</span>
                        </a>
                        <ul class="dropdown-menu border-0 shadow mt-2 rounded-2 py-2" aria-labelledby="productsNavDropdown">
                            <li><a class="dropdown-item py-2 px-3" href="index.php#featured-products"><i class="bi bi-stars me-2 text-gold"></i>Featured Ayurvedic Products</a></li>
                            <li><a class="dropdown-item py-2 px-3" href="index.php#spotlight-chooran"><i class="bi bi-capsule me-2 text-gold"></i>Chooran &amp; Multivitamin</a></li>
                            <li><a class="dropdown-item py-2 px-3" href="index.php#spotlight-kit"><i class="bi bi-box2-heart me-2 text-gold"></i>Pilecurex 3-in-1 Kit</a></li>
                            <li><hr class="dropdown-divider my-1"></li>
                            <li><a class="dropdown-item py-2 px-3" href="products.php"><i class="bi bi-flower1 me-2 text-gold"></i>All Essential Oils</a></li>
                            <li><a class="dropdown-item py-2 px-3" href="products.php?category=vegetable"><i class="bi bi-droplet me-2 text-gold"></i>Vegetable Oils</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page === 'activities.php' ? 'active' : ''; ?>" href="activities.php">
                            <span class="nav-text">OUR ACTIVITIES</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page === 'news.php' || $current_page === 'news-detail.php') ? 'active' : ''; ?>" href="news.php">
                            <span class="nav-text">NEWS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page === 'contact.php' ? 'active' : ''; ?>" href="contact.php">
                            <span class="nav-text">CONTACT US</span>
                        </a>
                    </li>
                    
                    <!-- Quick CTA: Call Doctor & WhatsApp -->
                    <li class="nav-item d-none d-xl-flex align-items-center ms-2 gap-2">
                        <a href="tel:+919318445297" class="btn btn-sm btn-outline-gold px-2 py-1 text-nowrap" title="Call Doctor Helpline">
                            <i class="bi bi-telephone-fill me-1"></i> 9318445297
                        </a>
                        <a href="https://wa.me/919318445297" target="_blank" rel="noopener" class="btn btn-sm btn-gold px-2 py-1 text-nowrap" title="Chat on WhatsApp">
                            <i class="bi bi-whatsapp me-1"></i> WhatsApp
                        </a>
                    </li>

                    <!-- Language Flags & Switcher -->
                    <li class="nav-item lang-flags-container ms-lg-2">
                        <div class="lang-flags">
                            <span class="d-lg-none small text-white-50 fw-bold me-1">Language:</span>
                            <a href="?lang=fr" class="lang-flag" title="Français" aria-label="Version Française">
                                <img src="assets/img/flags/fr.svg" alt="Français" width="22" height="15">
                            </a>
                            <a href="?lang=en" class="lang-flag active" title="English" aria-label="English Version">
                                <img src="assets/img/flags/gb.svg" alt="English" width="22" height="15">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
