<?php
/**
 * pages/education.php
 * Section 3 — Plastic Waste Problem (stats)
 * Section 4 — Know Your Plastic
 * Section 5 — Why LDPE
 */

$plasticTypes = [
  ["code" => "1", "name" => "PET",  "desc" => "Botol minuman, mudah didaur ulang", "highlight" => false],
  ["code" => "2", "name" => "HDPE", "desc" => "Botol sabun, kaku dan kuat", "highlight" => false],
  ["code" => "3", "name" => "PVC",  "desc" => "Pipa, sulit didaur ulang", "highlight" => false],
  ["code" => "4", "name" => "LDPE", "desc" => "Kantong plastik, lentur & bisa dilebur", "highlight" => true],
  ["code" => "5", "name" => "PP",   "desc" => "Wadah makanan, tahan panas", "highlight" => false],
  ["code" => "6", "name" => "PS",   "desc" => "Styrofoam, sangat sulit terurai", "highlight" => false],
];

$properties = [
  ["label" => "Fleksibilitas", "value" => 92],
  ["label" => "Kemudahan Dilebur (Thermal Fusion)", "value" => 88],
  ["label" => "Ketahanan Terhadap Air", "value" => 80],
  ["label" => "Ketersediaan sebagai Limbah", "value" => 95],
];
?>

<!-- SECTION 3 — Plastic Waste Problem -->
<section class="problem section-pad" id="problem">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Masalah</span>
      <h2 class="section-title">Sampah Plastik Sekali Pakai Tidak Pernah Benar-Benar "Hilang"</h2>
      <p class="section-sub">Sebelum bicara solusi, penting untuk memahami skala masalah yang sedang coba kami jawab lewat proyek ini.</p>
    </div>

    <div class="stats-grid">
      <div class="stat-card" data-aos="fade-up" data-aos-delay="0">
        <div class="stat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
        <div class="stat-number" data-count="700" data-suffix="M+">0</div>
        <div class="stat-label">Kantong plastik diperkirakan digunakan setiap tahun di tingkat nasional</div>
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

<!-- SECTION 4 & 5 — Know Your Plastic + Why LDPE -->
<section class="plastic-education section-pad" id="plastic">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Kenali Plastik</span>
      <h2 class="section-title">Tidak Semua Plastik Diciptakan Setara</h2>
      <p class="section-sub">Setiap jenis plastik punya kode daur ulang dan sifat material yang berbeda. Memahami ini adalah langkah pertama sebelum memilih material yang tepat.</p>
    </div>

    <div class="plastic-grid">
      <?php foreach ($plasticTypes as $i => $p): ?>
        <div class="plastic-card<?php echo $p['highlight'] ? ' highlight' : ''; ?>" data-aos="fade-up" data-aos-delay="<?php echo $i * 60; ?>">
          <div class="code-badge"><?php echo $p['code']; ?></div>
          <h4><?php echo $p['name']; ?></h4>
          <p><?php echo $p['desc']; ?></p>
          <?php if ($p['highlight']): ?>
            <span class="tag">Dipilih</span>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="why-ldpe" data-aos="fade-up">
      <div>
        <span class="eyebrow" style="margin-bottom:14px;">Mengapa LDPE?</span>
        <h3>Lentur, Mudah Dilebur, dan Paling Banyak Dibuang</h3>
        <p>
          LDPE dipilih karena tiga alasan utama: sifatnya yang lentur membuatnya mudah dibentuk ulang,
          titik lelehnya relatif rendah sehingga proses thermal fusion tidak memerlukan energi berlebih,
          dan sebagai kantong belanja, jenis plastik ini adalah salah satu limbah rumah tangga yang paling
          mudah ditemukan namun paling jarang didaur ulang secara mandiri.
        </p>
      </div>
      <div class="property-list">
        <?php foreach ($properties as $prop): ?>
          <div class="property-row">
            <div class="property-top">
              <span><?php echo $prop['label']; ?></span>
              <span><?php echo $prop['value']; ?>%</span>
            </div>
            <div class="property-track">
              <div class="property-fill" style="--fill:<?php echo $prop['value']; ?>%;"></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
