<?php
require_once __DIR__ . '/data.php';
?>

<!-- Global Floramad "Feel free to contact us" Callout Banner -->
<section class="feel-free-contact-section" style="background-image: url('assets/img/feel-free-contact.jpg');">
    <div class="feel-free-overlay">
        <div class="container text-center">
            <div class="contact-callout-card mx-auto">
                <h2 class="contact-callout-title">Feel free to contact us</h2>
                <p class="contact-callout-subtitle">We will reply as soon as possible</p>
                <a href="contact.php" class="btn btn-outline-light contact-callout-btn">Contact form</a>
            </div>
        </div>
    </div>
</section>

<!-- Floramad Signature Light Gray Footer -->
<footer class="site-footer">
    <div class="container py-5">
        <div class="row g-4 align-items-start">
            <!-- Column 1: Brand Info -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-3">
                    <img src="assets/img/logo-dhuria.png" alt="Dhuria" class="footer-logo mb-2">
                </div>
                <p class="footer-desc text-muted mb-0">
                    Flora-of-Madagascar (DHURIA), a company which produces and exports essential oils from Madagascar.
                </p>
            </div>

            <!-- Column 2: Contact Information -->
            <div class="col-lg-4 col-md-6">
                <ul class="footer-contact-list list-unstyled mb-0">
                    <li class="d-flex align-items-start mb-2">
                        <i class="bi bi-building me-3 footer-icon"></i>
                        <span>Flora-of-Madagascar (DHURIA)</span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="bi bi-geo-alt me-3 footer-icon"></i>
                        <span>LOT V V 118 J BIS Manakambahiny<br>101 Antananarivo-Madagascar</span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="bi bi-telephone me-3 footer-icon"></i>
                        <div>
                            <a href="tel:+919318445297" class="text-decoration-none text-muted fw-bold d-block">+91 9318445297</a>
                            <a href="tel:+261340417910" class="text-decoration-none text-muted small">+261 34 04 179 10</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="bi bi-envelope me-3 footer-icon"></i>
                        <a href="mailto:contact@dhuriagroup.com" class="text-decoration-none text-muted">contact@floramad.com</a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Download Our Flyers -->
            <div class="col-lg-4 col-md-12">
                <h6 class="footer-widget-title mb-3">Download our flyers</h6>
                <div class="flyer-preview-card">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#flyerModal" class="d-inline-block flyer-thumb-link">
                        <img src="assets/img/flyer-preview.jpg" alt="Download Dhuria Flyers" class="img-fluid flyer-thumb shadow-sm">
                        <span class="d-block mt-2 small text-muted"><i class="bi bi-download me-1"></i>Click to view &amp; download catalogue</span>
                    </a>
                </div>
            </div>
        </div>

        <hr class="footer-divider my-4">

        <!-- Bottom Bar: Copyright & Social Buttons -->
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="copyright-text mb-0 small text-muted">
                    &copy;copyright FLORAMAD <?= date('Y'); ?> &bull; Dhuria Botanical Group
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="footer-social-squares d-inline-flex gap-2">
                    <a href="https://www.facebook.com/profile.php?id=61594745097448" target="_blank" rel="noopener" class="social-sq social-fb" title="Facebook" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/ayurvedadhuria/" target="_blank" rel="noopener" class="social-sq social-ig" title="Instagram" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://wa.me/919318445297" target="_blank" rel="noopener" class="social-sq social-wa" title="WhatsApp" aria-label="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="social-sq social-in" title="LinkedIn" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Flyer Download Modal -->
<div class="modal fade" id="flyerModal" tabindex="-1" aria-labelledby="flyerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title font-serif" id="flyerModalLabel">Dhuria / Flora-of-Madagascar Product Catalog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-4">
                <img src="assets/img/flyer-preview.jpg" alt="Dhuria Product Flyer" class="img-fluid rounded mb-3 shadow-sm" style="max-height: 480px;">
                <p class="text-muted">Our complete technical specifications, GC-MS profiles, and organic certification credentials for international export.</p>
                <div class="d-flex justify-content-center gap-3 mt-3">
                    <a href="assets/img/flyer-preview.jpg" download="Dhuria-Floramad-Catalogue.jpg" class="btn btn-floramad-green px-4 py-2">
                        <i class="bi bi-download me-2"></i>Download PDF / Flyer
                    </a>
                    <a href="contact.php?subject=Request+Price+List" class="btn btn-floramad-gold px-4 py-2">
                        <i class="bi bi-envelope me-2"></i>Request Wholesale Pricing
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Lightbox Modal for "More Pictures" -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 position-relative text-center">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="galleryModalImage" src="" alt="Gallery Image" class="img-fluid rounded shadow-lg">
                <p id="galleryModalCaption" class="text-white mt-2 mb-0 small bg-dark bg-opacity-75 py-2 px-3 rounded d-inline-block"></p>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
