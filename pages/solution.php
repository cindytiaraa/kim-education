<?php
/**
 * pages/product.php
 * Section 7 — Product Showcase
 * Section 8 — Why Keychain (behavioral comparison)
 */

$features = [
  ["icon" => "fa-arrows-rotate", "title" => "Reusable",        "desc" => "Dipakai berulang kali, bukan sekali buang"],
  ["icon" => "fa-droplet",       "title" => "Waterproof",      "desc" => "Tahan terhadap percikan & rembesan air"],
  ["icon" => "fa-feather",       "title" => "Lightweight",     "desc" => "Ringan, tidak membebani gantungan kunci"],
  ["icon" => "fa-compress",      "title" => "Foldable",        "desc" => "Dilipat sekecil dompet kunci biasa"],
  ["icon" => "fa-hand-holding",  "title" => "Easy to Carry",   "desc" => "Mudah dibawa ke mana pun tanpa terasa"],
  ["icon" => "fa-key",           "title" => "Keychain-Attached","desc" => "Menempel langsung, selalu ada saat dibutuhkan"],
];
?>

<!-- SECTION 7 — Product Showcase -->
<section class="product section-pad" id="product">
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
          <p class="section-sub">Dirancang untuk hilang dari perhatian Anda — dalam artian yang baik. Selalu ada, tanpa perlu diingat-ingat.</p>
        </div>

        <div class="feature-list">
          <?php foreach ($features as $i => $f): ?>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="<?php echo $i * 60; ?>">
              <i class="fa-solid <?php echo $f['icon']; ?>"></i>
              <div>
                <h5><?php echo $f['title']; ?></h5>
                <p><?php echo $f['desc']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <a href="#journey" class="btn btn-primary">Lihat Proses Pembuatannya <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 8 — Why Keychain -->
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
