<?php
/**
 * includes/navbar.php
 * Expects $base ('' or '../') and $current (page key) from the caller
 * to highlight the active nav link. Real multi-page links — not anchors.
 */
if (!isset($base)) { $base = ''; }
if (!isset($current)) { $current = 'home'; }

$navItems = [
  "home"      => ["label" => "Beranda",   "href" => $base . "index.php"],
  "education" => ["label" => "Edukasi",   "href" => $base . "pages/education.php"],
  "process"   => ["label" => "Proses",    "href" => $base . "pages/process.php"],
  "solution"  => ["label" => "Solusi",    "href" => $base . "pages/solution.php"],
];
?>
<nav class="kim-nav" id="kimNav">
  <a href="<?php echo $base; ?>index.php" class="brand">
    <svg class="ring-mark" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="12" cy="12" r="8.5" stroke="#2C4A3B" stroke-width="2.4"/>
      <path d="M18.5 17L26 24.5" stroke="#BE7C4D" stroke-width="2.4" stroke-linecap="round"/>
      <rect x="23" y="22" width="6.5" height="8" rx="2" transform="rotate(8 23 22)" fill="#BE7C4D"/>
    </svg>
    <span>Ecoloop</span>
  </a>

  <ul class="nav-links" id="navLinks">
    <?php foreach ($navItems as $key => $item): ?>
      <li><a href="<?php echo $item['href']; ?>" class="<?php echo $current === $key ? 'active' : ''; ?>"><?php echo $item['label']; ?></a></li>
    <?php endforeach; ?>
  </ul>

  <div class="nav-cta">
    <a href="<?php echo $base; ?>pages/about.php" class="btn btn-outline">Tentang Kami</a>
    <a href="<?php echo $base; ?>pages/contact.php" class="btn btn-primary">Hubungi Kami</a>
    <button class="nav-toggle" id="navToggle" aria-label="Buka menu">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <button class="close-menu" id="closeMenu" aria-label="Tutup menu"><i class="fa-solid fa-xmark"></i></button>
  <?php foreach ($navItems as $key => $item): ?>
    <a href="<?php echo $item['href']; ?>" class="mm-link"><?php echo $item['label']; ?></a>
  <?php endforeach; ?>
  <a href="<?php echo $base; ?>pages/about.php" class="mm-link">Tentang Kami</a>
  <a href="<?php echo $base; ?>pages/contact.php" class="btn btn-clay mm-cta">Hubungi Kami<i class="fa-solid fa-arrow-right"></i></a>
</div>
