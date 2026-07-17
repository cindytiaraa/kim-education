<?php
/**
 * pages/education.php — Edukasi
 * Latar belakang masalah, jenis-jenis sampah plastik, dan tujuan proyek.
 */
$base      = '../';
$current   = 'education';
$pageTitle = 'Edukasi';
$pageDesc  = 'Latar belakang masalah plastik, jenis-jenis sampah plastik, dan tujuan dari proyek Foldable Totebag Keychain.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<!-- PAGE HEADER -->
<section class="section-pad" style="padding-bottom:0;">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Edukasi</span>
      <h2 class="section-title">Memahami Masalah Sebelum Bicara Solusi</h2>
      <p class="section-sub">Sebelum mengenal produknya, penting untuk memahami skala masalah plastik dan mengapa LDPE menjadi jawaban yang kami pilih.</p>
    </div>
  </div>
</section>

<!-- LATAR BELAKANG -->
<section class="section-pad" style="padding-top:40px;">
  <div class="container">
    <div class="about-grid">
      <div class="about-visual" data-aos="fade-up">
        <svg width="260" height="260" viewBox="0 0 260 260" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="130" cy="130" r="120" stroke="#8A9459" stroke-width="1.5" stroke-dasharray="3 8" opacity=".5"/>
          <path d="M70 150c0-44 30-80 60-80s60 36 60 80-30 60-60 60-60-16-60-60Z" fill="#F5F0E4" fill-opacity=".08"/>
          <rect x="88" y="118" width="84" height="78" rx="18" fill="#F5F0E4" fill-opacity=".14"/>
          <path d="M88 150h84" stroke="#F5F0E4" stroke-width="4" opacity=".4"/>
          <circle cx="180" cy="90" r="10" fill="#BE7C4D"/>
        </svg>
      </div>
      <div class="about-copy">
        <h3 style="font-family:var(--font-display); font-size:24px; color:var(--forest-800); margin:0 0 16px;">Latar Belakang</h3>
        <p data-aos="fade-up">
          <em>[Lorem ipsum — deskripsi latar belakang lengkap dari tim akan diisi di sini.]</em>
          Setiap hari, jutaan kantong plastik LDPE dipakai sekali lalu dibuang. Di sisi lain, banyak
          orang sebenarnya sudah punya totebag di rumah — hanya saja sering tertinggal saat paling
          dibutuhkan.
        </p>
        <p data-aos="fade-up" data-aos-delay="80">
          Proyek ini bertujuan untuk <em>[lorem ipsum tujuan spesifik proyek]</em> — mengurangi limbah
          plastik LDPE sekaligus membangun kebiasaan membawa tas belanja sendiri secara lebih konsisten.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- STATISTIK MASALAH -->
<section class="problem section-pad" id="problem">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Skala Masalah</span>
      <h2 class="section-title">Sampah Plastik Sekali Pakai Tidak Pernah Benar-Benar "Hilang"</h2>
    </div>
    <div class="stats-grid">
      <div class="stat-card" data-aos="fade-up" data-aos-delay="0">
        <div class="stat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
        <div class="stat-number" data-count="700" data-suffix="M+">0</div>
        <div class="stat-label">Kantong plastik diperkirakan digunakan setiap tahun <em>[lorem ipsum sumber data]</em></div>
      </div>
      <div class="stat-card" data-aos="fade-up" data-aos-delay="80">
        <div class="stat-icon"><i class="fa-solid fa-hourglass-half"></i></div>
        <div class="stat-number" data-count="20" data-suffix="+ th">0</div>
        <div class="stat-label">Waktu yang dibutuhkan kantong LDPE untuk mulai terurai di lingkungan</div>
      </div>
      <div class="stat-card" data-aos="fade-up" data-aos-delay="160">
        <div class="stat-icon"><i class="fa-solid fa-house"></i></div>
        <div class="stat-number" data-count="60" data-suffix="%">0</div>
        <div class="stat-label">Rumah tangga yang mengaku memiliki totebag tapi jarang membawanya</div>
      </div>
      <div class="stat-card" data-aos="fade-up" data-aos-delay="240">
        <div class="stat-icon"><i class="fa-solid fa-arrow-rotate-left"></i></div>
        <div class="stat-number" data-count="1" data-suffix="x">0</div>
        <div class="stat-label">Rata-rata pemakaian kantong plastik sebelum dibuang</div>
      </div>
    </div>
  </div>
</section>

<!-- JENIS PLASTIK -->
<section class="plastic-education section-pad" id="plastic">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Kenali Plastik</span>
      <h2 class="section-title">Tidak Semua Plastik Diciptakan Setara</h2>
      <p class="section-sub">Setiap jenis plastik punya kode daur ulang dan sifat material yang berbeda.</p>
    </div>

    <div class="plastic-grid">
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="0">
        <div class="code-badge">1</div><h4>PET</h4><p>Botol minuman, mudah didaur ulang</p>
      </div>
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="60">
        <div class="code-badge">2</div><h4>HDPE</h4><p>Botol sabun, kaku dan kuat</p>
      </div>
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="120">
        <div class="code-badge">3</div><h4>PVC</h4><p>Pipa, sulit didaur ulang</p>
      </div>
      <div class="plastic-card highlight" data-aos="fade-up" data-aos-delay="180">
        <div class="code-badge">4</div><h4>LDPE</h4><p>Kantong plastik, lentur &amp; bisa dilebur</p>
        <span class="tag">Dipilih</span>
      </div>
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="240">
        <div class="code-badge">5</div><h4>PP</h4><p>Wadah makanan, tahan panas</p>
      </div>
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="300">
        <div class="code-badge">6</div><h4>PS</h4><p>Styrofoam, sangat sulit terurai</p>
      </div>
    </div>

    <div class="why-ldpe" data-aos="fade-up">
      <div>
        <span class="eyebrow" style="margin-bottom:14px;">Mengapa LDPE?</span>
        <h3>Lentur, Mudah Dilebur, dan Paling Banyak Dibuang</h3>
        <p>LDPE dipilih karena sifatnya yang lentur, titik lelehnya relatif rendah untuk proses thermal fusion, dan merupakan limbah rumah tangga yang paling mudah ditemukan namun paling jarang didaur ulang secara mandiri.</p>
      </div>
      <div class="property-list">
        <div class="property-row">
          <div class="property-top"><span>Fleksibilitas</span><span>92%</span></div>
          <div class="property-track"><div class="property-fill" style="--fill:92%;"></div></div>
        </div>
        <div class="property-row">
          <div class="property-top"><span>Kemudahan Dilebur (Thermal Fusion)</span><span>88%</span></div>
          <div class="property-track"><div class="property-fill" style="--fill:88%;"></div></div>
        </div>
        <div class="property-row">
          <div class="property-top"><span>Ketahanan Terhadap Air</span><span>80%</span></div>
          <div class="property-track"><div class="property-fill" style="--fill:80%;"></div></div>
        </div>
        <div class="property-row">
          <div class="property-top"><span>Ketersediaan sebagai Limbah</span><span>95%</span></div>
          <div class="property-track"><div class="property-fill" style="--fill:95%;"></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad" style="padding-top:0;">
  <div class="container">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Sudah paham masalahnya?</h3>
        <p>Lanjut lihat bagaimana kami mengubah limbah ini jadi produk nyata.</p>
      </div>
      <div class="cta-actions">
        <a href="process.php" class="btn btn-clay">Lihat Prosesnya <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
