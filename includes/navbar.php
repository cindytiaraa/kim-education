<?php
/**
 * includes/navbar.php
 * Floating frosted-glass navigation + mobile overlay menu.
 * Active section state handled client-side in script.js
 */
$navItems = [
  "about"    => "Tentang",
  "problem"  => "Masalah",
  "plastic"  => "Kenali Plastik",
  "journey"  => "Perjalanan",
  "product"  => "Produk",
  "impact"   => "Dampak",
  "faq"      => "FAQ",
];
?>
<nav class="kim-nav" id="kimNav">
  <a href="#hero" class="brand">
    <svg class="ring-mark" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="12" cy="12" r="8.5" stroke="#2C4A3B" stroke-width="2.4"/>
      <path d="M18.5 17L26 24.5" stroke="#BE7C4D" stroke-width="2.4" stroke-linecap="round"/>
      <rect x="23" y="22" width="6.5" height="8" rx="2" transform="rotate(8 23 22)" fill="#BE7C4D"/>
    </svg>
    <span>Kembali</span>
  </a>

  <ul class="nav-links" id="navLinks">
    <?php foreach ($navItems as $anchor => $label): ?>
      <li><a href="#<?php echo $anchor; ?>" data-nav="<?php echo $anchor; ?>"><?php echo $label; ?></a></li>
    <?php endforeach; ?>
  </ul>

  <div class="nav-cta">
    <a href="#team" class="btn btn-outline">Tim Riset</a>
    <a href="#journey" class="btn btn-primary">Lihat Prosesnya</a>
    <button class="nav-toggle" id="navToggle" aria-label="Buka menu">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <button class="close-menu" id="closeMenu" aria-label="Tutup menu"><i class="fa-solid fa-xmark"></i></button>
  <?php foreach ($navItems as $anchor => $label): ?>
    <a href="#<?php echo $anchor; ?>" class="mm-link"><?php echo $label; ?></a>
  <?php endforeach; ?>
  <a href="#journey" class="btn btn-clay mm-cta">Lihat Prosesnya <i class="fa-solid fa-arrow-right"></i></a>
</div>
