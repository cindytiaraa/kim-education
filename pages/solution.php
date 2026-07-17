<?php
/**
 * pages/solution.php — Solusi
 * Gambar / rancangan akhir dari proyek: produk, alasan bentuk keychain,
 * dan dampak lingkungan yang diharapkan.
 */
$base      = '../';
$current   = 'solution';
$pageTitle = 'Solusi';
$pageDesc  = 'Rancangan akhir Foldable Totebag Keychain — fitur produk dan dampak lingkungan yang diharapkan.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<!-- PRODUCT SHOWCASE -->
<section class="product section-pad" id="product" style="padding-top:150px;">
  <div class="container">
    <div class="product-grid">
      <div class="product-stage" data-aos="zoom-in">
        <svg viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="60" y="70" width="180" height="180" rx="34" fill="#2C4A3B"/>
          <path d="M105 70V50a45 45 0 0 1 90 0v20" stroke="#F5F0E4" stroke-width="10" fill="none" stroke-linecap="round"/>
          <rect x="86" y="118" width="128" height="86" rx="16" fill="#F5F0E4" fill-opacity=".14"/>
          <path d="M86 150h128" stroke="#F5F0E4" stroke-width="4" opacity=".35"/>
          <path d="M100 178h100" stroke="#F5F0E4" stroke-width="4" opacity=".25"/>
          <circle cx="150" cy="42" r="12" fill="#BE7C4D"/>
          <rect x="144" y="52" width="12" height="20" rx="4" fill="#BE7C4D"/>
        </svg>
        <div class="feature-tag ft-1"><i class="fa-solid fa-droplet"></i> Waterproof</div>
        <div class="feature-tag ft-2"><i class="fa-solid fa-compress"></i> Foldable</div>
        <div class="feature-tag ft-3"><i class="fa-solid fa-key"></i> Keychain</div>
      </div>

      <div class="product-copy">
        <div class="section-head" data-aos="fade-up">
          <span class="eyebrow">Produk</span>
          <h2 class="section-title">Kenalan dengan Foldable Totebag Keychain</h2>
          <p class="section-sub"><em>[Lorem ipsum — nama produk final &amp; tagline dari tim bisa diisi di sini.]</em> Dirancang untuk selalu ada, tanpa perlu diingat-ingat.</p>
        </div>

        <div class="feature-list">
          <div class="feature-item" data-aos="fade-up" data-aos-delay="0">
            <i class="fa-solid fa-arrows-rotate"></i>
            <div><h5>Reusable</h5><p>Dipakai berulang kali, bukan sekali buang</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="60">
            <i class="fa-solid fa-droplet"></i>
            <div><h5>Waterproof</h5><p>Tahan terhadap percikan &amp; rembesan air</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="120">
            <i class="fa-solid fa-feather"></i>
            <div><h5>Lightweight</h5><p>Ringan, tidak membebani gantungan kunci</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="180">
            <i class="fa-solid fa-compress"></i>
            <div><h5>Foldable</h5><p>Dilipat sekecil dompet kunci biasa</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="240">
            <i class="fa-solid fa-hand-holding"></i>
            <div><h5>Easy to Carry</h5><p>Mudah dibawa ke mana pun tanpa terasa</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
            <i class="fa-solid fa-key"></i>
            <div><h5>Keychain-Attached</h5><p>Menempel langsung, selalu ada saat dibutuhkan</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY KEYCHAIN -->
<section class="keychain-why section-pad" id="why-keychain">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Inti Inovasi</span>
      <h2 class="section-title">Kenapa Harus Berbentuk Keychain?</h2>
      <p class="section-sub">Inovasi ini bukan sekadar "totebag baru". Kami menjawab masalah yang lebih mendasar: orang lupa membawanya.</p>
    </div>

    <div class="compare-grid">
      <div class="compare-card no" data-aos="fade-up">
        <h4><i class="fa-solid fa-bag-shopping"></i> Totebag Biasa</h4>
        <ul>
          <li><i class="fa-solid fa-circle-xmark"></i> Sering tertinggal di rumah</li>
          <li><i class="fa-solid fa-circle-xmark"></i> Perlu diingat-ingat sebelum berangkat</li>
          <li><i class="fa-solid fa-circle-xmark"></i> Cukup besar untuk dibawa setiap hari</li>
          <li><i class="fa-solid fa-circle-xmark"></i> Butuh tas tambahan untuk membawanya</li>
        </ul>
      </div>
      <div class="compare-vs" data-aos="zoom-in">VS</div>
      <div class="compare-card yes" data-aos="fade-up" data-aos-delay="120">
        <h4><i class="fa-solid fa-key"></i> Foldable Keychain Tote</h4>
        <ul>
          <li><i class="fa-solid fa-circle-check"></i> Selalu menempel di kunci Anda</li>
          <li><i class="fa-solid fa-circle-check"></i> Tidak butuh usaha ekstra untuk diingat</li>
          <li><i class="fa-solid fa-circle-check"></i> Ringkas, muat di saku atau gantungan tas</li>
          <li><i class="fa-solid fa-circle-check"></i> Terbuka begitu saja saat dibutuhkan</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ENVIRONMENTAL IMPACT -->
<section class="impact-section section-pad" id="impact">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Dampak Lingkungan</span>
      <h2 class="section-title">Perubahan Kecil yang Berdampak Berulang</h2>
    </div>
    <div class="impact-grid">
      <div class="impact-card" data-aos="fade-up" data-aos-delay="0">
        <div class="impact-icon"><i class="fa-solid fa-leaf"></i></div>
        <h4>Mengurangi Sampah Plastik</h4>
        <p>Setiap totebag mengalihkan sejumlah kantong LDPE dari tempat pembuangan akhir.</p>
      </div>
      <div class="impact-card" data-aos="fade-up" data-aos-delay="80">
        <div class="impact-icon"><i class="fa-solid fa-coins"></i></div>
        <h4>Menaikkan Nilai Produk</h4>
        <p>Limbah bernilai rendah diubah menjadi produk fungsional bernilai guna tinggi.</p>
      </div>
      <div class="impact-card" data-aos="fade-up" data-aos-delay="160">
        <div class="impact-icon"><i class="fa-solid fa-arrows-spin"></i></div>
        <h4>Mendorong Ekonomi Sirkular</h4>
        <p>Material bekas kembali masuk ke siklus pemakaian, bukan berakhir sebagai sampah.</p>
      </div>
      <div class="impact-card" data-aos="fade-up" data-aos-delay="240">
        <div class="impact-icon"><i class="fa-solid fa-seedling"></i></div>
        <h4>Membangun Kebiasaan Baik</h4>
        <p>Mendorong kebiasaan membawa tas belanja sendiri secara konsisten dan alami.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-pad" style="padding-top:0;">
  <div class="container">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Tertarik dengan produk ini?</h3>
        <p>Kenali tim di baliknya atau hubungi kami langsung.</p>
      </div>
      <div class="cta-actions">
        <a href="about.php" class="btn btn-outline" style="border-color:rgba(255,255,255,.4); color:#fff;">Tentang Kami</a>
        <a href="contact.php" class="btn btn-clay">Hubungi Kami <i class="fa-solid fa-paper-plane"></i></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
