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
    <meta name="theme-color" content="#4A6B36">

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

<!-- Clean, Centered Luxury Header matching Floramad.com -->
<header id="siteHeader" class="site-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-2 py-lg-3">
        <div class="container-xl">
            <!-- Brand Logo & Clean Subtitle -->
            <a class="navbar-brand d-inline-flex flex-column align-items-start py-0 me-3 me-xl-5" href="index.php">
                <img src="assets/img/logo.jpg" alt="Dhuria" class="brand-logo-img">
                <span class="brand-tagline-sub">Aromatic Plants and Spices from Madagascar</span>
            </a>

            <!-- Mobile Hamburger Toggle -->
            <button class="navbar-toggler border-0 p-2 shadow-none rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#floramadNav" aria-controls="floramadNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links: Clean, Spaced, Vertically Centered -->
            <div class="collapse navbar-collapse" id="floramadNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page === 'about.php' ? 'active' : ''; ?>" href="about.php">
                            <span>WHO WE ARE ?</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page === 'activities.php' ? 'active' : ''; ?>" href="activities.php">
                            <span>OUR ACTIVITIES</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($current_page === 'products.php' || $current_page === 'vegetable-oils.php') ? 'active' : ''; ?>" href="products.php" id="productsNavDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>OUR PRODUCTS</span>
                        </a>
                        <ul class="dropdown-menu border-0 shadow mt-2 rounded-2 py-2" aria-labelledby="productsNavDropdown">
                            <li><a class="dropdown-item py-2 px-3" href="products.php"><i class="bi bi-flower1 me-2 text-success"></i>Our essential oils</a></li>
                            <li><a class="dropdown-item py-2 px-3" href="products.php?category=vegetable"><i class="bi bi-droplet me-2 text-success"></i>Our vegetable oils</a></li>
                            <li><hr class="dropdown-divider my-1"></li>
                            <li><a class="dropdown-item py-2 px-3" href="products.php#quality"><i class="bi bi-shield-check me-2 text-success"></i>Quality Management</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page === 'news.php' || $current_page === 'news-detail.php') ? 'active' : ''; ?>" href="news.php">
                            <span>NEWS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $current_page === 'contact.php' ? 'active' : ''; ?>" href="contact.php">
                            <span>CONTACT US</span>
                        </a>
                    </li>
                    
                    <!-- Language Flags & Switcher -->
                    <li class="nav-item lang-flags-container">
                        <div class="lang-flags">
                            <span class="d-lg-none small text-muted fw-bold me-1">Language:</span>
                            <a href="?lang=fr" class="lang-flag" title="Français" aria-label="Version Française">
                                <svg viewBox="0 0 3 2">
                                    <rect width="1" height="2" fill="#002395"/>
                                    <rect width="1" height="2" x="1" fill="#FFFFFF"/>
                                    <rect width="1" height="2" x="2" fill="#ED2939"/>
                                </svg>
                            </a>
                            <a href="?lang=en" class="lang-flag active" title="English" aria-label="English Version">
                                <svg viewBox="0 0 60 30">
                                    <clipPath id="s"><path d="M0,0 v30 h60 v-30 z"/></clipPath>
                                    <clipPath id="t"><path d="M30,15 h30 v15 z v15 h-30 z h-30 v-15 z v-15 h30 z"/></clipPath>
                                    <g clip-path="url(#s)">
                                        <path d="M0,0 v30 h60 v-30 z" fill="#012169"/>
                                        <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
                                        <path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#t)" stroke="#C8102E" stroke-width="4"/>
                                        <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                                        <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
