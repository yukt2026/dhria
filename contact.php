<?php
$page_title = 'Contact Us — Flora of Madagascar';
require_once __DIR__ . '/includes/header.php';

$prefill_subject = isset($_GET['subject']) ? trim($_GET['subject']) : '';
?>

<!-- 1. Hero Banner matching Reference Image 10 -->
<section class="page-hero-banner" style="background-image: url('assets/img/banners/banner-contact.jpg');">
    <div class="page-hero-overlay">
        <div class="container text-center px-4">
            <h1 class="hero-banner-title">Contact us</h1>
        </div>
    </div>
</section>

<!-- 2. Contact Information & Form -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-start mb-4 mb-lg-5">
            <h2 class="section-gold-heading mb-2">CONTACT US FOR MORE INFORMATION !</h2>
            <p class="text-muted" style="line-height: 1.7;">
                If you need more information about our products and services, do not hesitate to contact us.<br class="d-none d-md-block">
                We will respond as soon as possible.
            </p>
        </div>

        <div class="row g-4 g-lg-5">
            <!-- Left: Form matching Floramad Image 10 -->
            <div class="col-lg-7 col-12">
                <div class="contact-form-card">
                    <!-- Alert message container -->
                    <div id="contactAlert" class="alert d-none mb-4" role="alert"></div>

                    <form id="floramadContactForm" action="contact-handler.php" method="POST" novalidate>
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']); ?>">
                        <!-- Honeypot -->
                        <div class="d-none">
                            <input type="text" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6 col-12">
                                <label for="fullName" class="contact-form-label">Full name</label>
                                <input type="text" class="form-control contact-form-control" id="fullName" name="name" required placeholder="Your full name">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="emailAddr" class="contact-form-label">Email address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control contact-form-control" id="emailAddr" name="email" required placeholder="name@company.com">
                            </div>

                            <div class="col-md-4 col-12">
                                <label for="companyName" class="contact-form-label">Company</label>
                                <input type="text" class="form-control contact-form-control" id="companyName" name="company" placeholder="Company / Brand">
                            </div>
                            <div class="col-md-4 col-12">
                                <label for="countryName" class="contact-form-label">Country</label>
                                <input type="text" class="form-control contact-form-control" id="countryName" name="country" placeholder="e.g. France, Germany, USA">
                            </div>
                            <div class="col-md-4 col-12">
                                <label for="phoneNum" class="contact-form-label">Phone number</label>
                                <input type="tel" class="form-control contact-form-control" id="phoneNum" name="phone" placeholder="+1 234 567 8900">
                            </div>

                            <div class="col-12">
                                <label for="subjectField" class="contact-form-label">Subject</label>
                                <input type="text" class="form-control contact-form-control" id="subjectField" name="subject" value="<?= htmlspecialchars($prefill_subject); ?>" placeholder="e.g. Essential Oils Wholesale Pricing & CoA Request">
                            </div>

                            <div class="col-12">
                                <label for="msgField" class="contact-form-label">Message</label>
                                <textarea class="form-control contact-form-control" id="msgField" name="message" rows="5" required placeholder="Specify your desired essential oils, quantities, or specific questions..."></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" id="submitBtn" class="btn btn-secondary px-5 py-2" style="background-color: #ECEEEA; color: #444; border: 1px solid #D2D8CF; font-weight: 600;">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right: Direct Address & Contact Details matching Floramad Image 10 -->
            <div class="col-lg-5 col-12">
                <div class="contact-info-panel ps-lg-4">
                    <div class="mb-4">
                        <h4 class="contact-info-title">Address</h4>
                        <p class="contact-info-text">
                            Lot V V 118 J Bis Manakambahiny 101 Tananarive<br>
                            – Madagascar
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="contact-info-title">Phone number</h4>
                        <p class="contact-info-text mb-1">
                            <a href="tel:+919318445297" class="text-decoration-none fw-bold" style="color: var(--floramad-green); font-size: 1.15rem;">
                                <i class="bi bi-telephone-fill me-2"></i>+91 9318445297
                            </a>
                        </p>
                        <p class="contact-info-text mb-1">
                            <a href="https://wa.me/919318445297" target="_blank" rel="noopener" class="text-decoration-none text-success">
                                <i class="bi bi-whatsapp me-2"></i>WhatsApp: +91 9318445297
                            </a>
                        </p>
                        <p class="contact-info-text">
                            <a href="tel:+261340417910" class="text-decoration-none text-muted small">
                                Madagascar Direct: +261 34 04 179 10
                            </a>
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="contact-info-title">E-mail address</h4>
                        <p class="contact-info-text">
                            <a href="mailto:contact@floramad.com" class="text-decoration-none text-muted">
                                contact@floramad.com
                            </a><br>
                            <a href="mailto:contact@dhuriagroup.com" class="text-decoration-none text-muted">
                                contact@dhuriagroup.com
                            </a>
                        </p>
                    </div>

                    <div class="p-4 bg-light rounded border mt-4">
                        <h5 class="small font-sans fw-bold text-uppercase text-dark mb-2">Export Operations &amp; Sampling</h5>
                        <p class="small text-muted mb-0">
                            Pre-shipment batch samples, GC-MS certificates of analysis, IFRA documentation, and Organic inspection certificates are provided upon request.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
