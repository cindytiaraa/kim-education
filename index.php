<?php
/**
 * index.php
 * KIM Education — Foldable Totebag Keychain
 *
 * Single-scroll storytelling landing page assembled from modular
 * includes/ and pages/ partials. No database, no auth, no routing —
 * this file is the only entry point and is accessed via QR code.
 */
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

require_once __DIR__ . '/pages/hero.php';
require_once __DIR__ . '/pages/about.php';
require_once __DIR__ . '/pages/education.php';   // problem stats + plastic types + why LDPE
require_once __DIR__ . '/pages/process.php';     // plastic journey infographic
require_once __DIR__ . '/pages/product.php';     // product showcase + why keychain
require_once __DIR__ . '/pages/impact.php';      // environmental impact + research progress
require_once __DIR__ . '/pages/faq.php';
require_once __DIR__ . '/pages/team.php';

require_once __DIR__ . '/includes/footer.php';
require_once __DIR__ . '/includes/floating-button.php';
?>

<!-- Bootstrap 5 bundle (utilities only) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<!-- SwiperJS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Project script -->
<script src="assets/js/script.js"></script>
</body>
</html>
