<?php
/**
 * pages/process.php — Proses
 * Bagaimana sampah plastik LDPE berubah menjadi totebag lipat berbentuk keychain.
 */
$base      = '../';
$current   = 'process';
$pageTitle = 'Proses';
$pageDesc  = 'Tujuh tahap proses mengubah limbah plastik LDPE menjadi Foldable Totebag Keychain.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<section class="journey section-pad" id="journey" style="padding-top:150px;">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Perjalanan Plastik</span>
      <h2 class="section-title">Dari Tempat Sampah Rumah, Menjadi Benda yang Menempel di Kunci Anda</h2>
      <p class="section-sub">Tujuh tahap sederhana mengubah limbah menjadi produk fungsional sehari-hari.</p>
    </div>

    <div class="journey-track" id="journeyTrack">
      <div class="journey-line" id="journeyLine">
        <svg class="ring-runner" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="12" cy="12" r="9" stroke="#BE7C4D" stroke-width="3"/>
        </svg>
      </div>

      <div class="journey-node" data-aos="fade-up" data-aos-delay="0">
        <div class="node-circle"><i class="fa-solid fa-house"></i></div>
        <span class="node-step">Tahap 1</span><h5>Rumah Tangga</h5>
        <p>Kantong LDPE terkumpul dari pemakaian harian</p>
      </div>
      <div class="journey-node" data-aos="fade-up" data-aos-delay="90">
        <div class="node-circle"><i class="fa-solid fa-filter"></i></div>
        <span class="node-step">Tahap 2</span><h5>Pemilahan</h5>
        <p>Dipisahkan dari jenis plastik lain</p>
      </div>
      <div class="journey-node" data-aos="fade-up" data-aos-delay="180">
        <div class="node-circle"><i class="fa-solid fa-droplet"></i></div>
        <span class="node-step">Tahap 3</span><h5>Pembersihan</h5>
        <p>Dicuci dari sisa kotoran &amp; label</p>
      </div>
      <div class="journey-node" data-aos="fade-up" data-aos-delay="270">
        <div class="node-circle"><i class="fa-solid fa-fire"></i></div>
        <span class="node-step">Tahap 4</span><h5>Thermal Fusion</h5>
        <p>Dilebur &amp; dipadatkan dengan panas terkontrol</p>
      </div>
      <div class="journey-node" data-aos="fade-up" data-aos-delay="360">
        <div class="node-circle"><i class="fa-solid fa-layer-group"></i></div>
        <span class="node-step">Tahap 5</span><h5>Lembar Material</h5>
        <p>Terbentuk lembaran baru yang kuat &amp; fleksibel</p>
      </div>
      <div class="journey-node" data-aos="fade-up" data-aos-delay="450">
        <div class="node-circle"><i class="fa-solid fa-bag-shopping"></i></div>
        <span class="node-step">Tahap 6</span><h5>Totebag Lipat</h5>
        <p>Dijahit &amp; dibentuk menjadi tas lipat</p>
      </div>
      <div class="journey-node final" data-aos="fade-up" data-aos-delay="540">
        <div class="node-circle"><i class="fa-solid fa-key"></i></div>
        <span class="node-step">Tahap 7</span><h5>Keychain</h5>
        <p>Dikemas ringkas, siap menempel di kunci</p>
      </div>
    </div>
  </div>
</section>

<!-- PROGRES RISET -->
<section class="progress-section section-pad" id="progress" style="background:var(--cream-200);">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Progres Riset</span>
      <h2 class="section-title">Proyek Ini Masih Berjalan — dan Itu Bagian dari Ceritanya</h2>
      <p class="section-sub"><em>[Lorem ipsum — catatan tambahan progres dari tim riset]</em></p>
    </div>

    <div class="progress-timeline">
      <div class="timeline-item done" data-aos="fade-up" data-aos-delay="0">
        <div class="tl-dot"><i class="fa-solid fa-check"></i></div>
        <h4>Tinjauan Literatur</h4>
        <p>Studi mendalam tentang jenis plastik, LDPE, dan riset serupa sebelumnya.</p>
        <span class="tl-status">Selesai</span>
      </div>
      <div class="timeline-item done" data-aos="fade-up" data-aos-delay="80">
        <div class="tl-dot"><i class="fa-solid fa-check"></i></div>
        <h4>Analisis Material</h4>
        <p>Pengujian sifat LDPE hasil daur ulang: fleksibilitas, ketahanan air, kekuatan sambungan.</p>
        <span class="tl-status">Selesai</span>
      </div>
      <div class="timeline-item active" data-aos="fade-up" data-aos-delay="160">
        <div class="tl-dot"><i class="fa-solid fa-drafting-compass"></i></div>
        <h4>Prototipe</h4>
        <p>Pembuatan purwarupa totebag lipat dan mekanisme keychain.</p>
        <span class="tl-status">Berjalan</span>
      </div>
      <div class="timeline-item todo" data-aos="fade-up" data-aos-delay="240">
        <div class="tl-dot"><i class="fa-solid fa-vial"></i></div>
        <h4>Pengujian</h4>
        <p>Uji ketahanan, kapasitas beban, dan kenyamanan penggunaan harian.</p>
        <span class="tl-status">Direncanakan</span>
      </div>
      <div class="timeline-item todo" data-aos="fade-up" data-aos-delay="320">
        <div class="tl-dot"><i class="fa-solid fa-clipboard-check"></i></div>
        <h4>Evaluasi</h4>
        <p>Evaluasi menyeluruh hasil riset sebagai bahan pengembangan lanjutan.</p>
        <span class="tl-status">Direncanakan</span>
      </div>
    </div>
  </div>
</section>

<section class="section-pad" style="padding-top:0;">
  <div class="container">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Penasaran hasil akhirnya?</h3>
        <p>Lihat rancangan produk lengkap di halaman Solusi.</p>
      </div>
      <div class="cta-actions">
        <a href="solution.php" class="btn btn-clay">Lihat Solusi <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
