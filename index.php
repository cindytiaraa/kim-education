<?php
/**
 * index.php — Beranda
 * Halaman utama, penuh interaksi (hero + ringkasan tiap section),
 * mengarahkan pengunjung ke halaman-halaman detail lainnya.
 */

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

require_once __DIR__ . '/pages/home.php';
require_once __DIR__ . '/pages/education.php';
require_once __DIR__ . '/pages/process.php';
require_once __DIR__ . '/pages/solution.php';
require_once __DIR__ . '/pages/about.php';
require_once __DIR__ . '/pages/contact.php';

require_once __DIR__ . '/includes/footer.php';
?>
