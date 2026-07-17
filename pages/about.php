<?php
/**
 * pages/about.php — Tentang Kami
 * Anggota tim, visi & misi proyek.
 */
$base      = '../';
$current   = 'about';
$pageTitle = 'Tentang Kami';
$pageDesc  = 'Kenali tim riset di balik proyek Foldable Totebag Keychain, beserta visi dan misinya.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<section class="section-pad" style="padding-top:150px;">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Tentang Kami</span>
      <h2 class="section-title">Orang-Orang di Balik Proyek Ini</h2>
      <p class="section-sub">Tim mahasiswa lintas peran yang menjalankan proyek ini dari riset literatur hingga purwarupa.</p>
    </div>
  </div>
</section>

<!-- VISI MISI -->
<section class="section-pad" style="padding-top:0;">
  <div class="container">
    <div class="why-ldpe" data-aos="fade-up" style="grid-template-columns:1fr 1fr;">
      <div>
        <span class="eyebrow" style="margin-bottom:14px;"><i class="fa-solid fa-eye"></i> Visi</span>
        <p style="color:var(--ink-600); line-height:1.8; font-size:15.5px;">
          <em>[Lorem ipsum — pernyataan visi proyek akan diisi oleh tim di sini.]</em>
        </p>
      </div>
      <div>
        <span class="eyebrow" style="margin-bottom:14px;"><i class="fa-solid fa-bullseye"></i> Misi</span>
        <p style="color:var(--ink-600); line-height:1.8; font-size:15.5px;">
          <em>[Lorem ipsum — poin-poin misi proyek akan diisi oleh tim di sini.]</em>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section class="team-section section-pad" id="team" style="padding-top:0;">
  <div class="container">
    <div class="team-grid">
      <div class="team-card" data-aos="fade-up" data-aos-delay="0">
        <div class="team-avatar">A1</div>
        <h4>[Nama Anggota 1]</h4>
        <div class="role">Ketua Peneliti</div>
        <div class="socials">
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="70">
        <div class="team-avatar">A2</div>
        <h4>[Nama Anggota 2]</h4>
        <div class="role">Riset Material</div>
        <div class="socials">
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="140">
        <div class="team-avatar">A3</div>
        <h4>[Nama Anggota 3]</h4>
        <div class="role">Desain Produk</div>
        <div class="socials">
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="210">
        <div class="team-avatar">A4</div>
        <h4>[Nama Anggota 4]</h4>
        <div class="role">Dokumentasi &amp; Media</div>
        <div class="socials">
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="280">
        <div class="team-avatar">A5</div>
        <h4>[Nama Anggota 5]</h4>
        <div class="role">Dokumentasi &amp; Media</div>
        <div class="socials">
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:80px;">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Ingin berdiskusi dengan tim kami?</h3>
        <p>Kirimkan pesan Anda lewat halaman Kontak — kami akan membalas melalui email.</p>
      </div>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-clay">Hubungi Kami <i class="fa-solid fa-paper-plane"></i></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
