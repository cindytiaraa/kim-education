<?php
/**
 * pages/impact.php
 * Section 9  — Environmental Impact
 * Section 10 — Research Progress
 */

$impacts = [
  ["icon" => "fa-leaf",          "title" => "Mengurangi Sampah Plastik", "desc" => "Setiap totebag mengalihkan sejumlah kantong LDPE dari tempat pembuangan akhir."],
  ["icon" => "fa-coins",         "title" => "Menaikkan Nilai Produk",     "desc" => "Limbah bernilai rendah diubah menjadi produk fungsional bernilai guna tinggi."],
  ["icon" => "fa-arrows-spin",   "title" => "Mendorong Ekonomi Sirkular", "desc" => "Material bekas kembali masuk ke siklus pemakaian, bukan berakhir sebagai sampah."],
  ["icon" => "fa-seedling",      "title" => "Membangun Kebiasaan Baik",   "desc" => "Mendorong kebiasaan membawa tas belanja sendiri secara konsisten dan alami."],
];

$timeline = [
  ["title" => "Tinjauan Literatur",   "desc" => "Studi mendalam tentang jenis plastik, LDPE, dan riset serupa sebelumnya.", "status" => "Selesai", "state" => "done", "icon" => "fa-book"],
  ["title" => "Analisis Material",    "desc" => "Pengujian sifat LDPE hasil daur ulang: fleksibilitas, ketahanan air, kekuatan sambungan.", "status" => "Selesai", "state" => "done", "icon" => "fa-flask"],
  ["title" => "Prototipe",            "desc" => "Pembuatan purwarupa totebag lipat dan mekanisme keychain.", "status" => "Berjalan", "state" => "active", "icon" => "fa-drafting-compass"],
  ["title" => "Pengujian",            "desc" => "Uji ketahanan, kapasitas beban, dan kenyamanan penggunaan harian.", "status" => "Direncanakan", "state" => "todo", "icon" => "fa-vial"],
  ["title" => "Evaluasi",             "desc" => "Evaluasi menyeluruh hasil riset sebagai bahan pengembangan lanjutan.", "status" => "Direncanakan", "state" => "todo", "icon" => "fa-clipboard-check"],
];
?>

<!-- SECTION 9 — Environmental Impact -->
<section class="impact-section section-pad" id="impact">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Dampak Lingkungan</span>
      <h2 class="section-title">Perubahan Kecil yang Berdampak Berulang</h2>
      <p class="section-sub">Karena produk ini dipakai berkali-kali, dampaknya juga berlipat setiap kali digunakan.</p>
    </div>

    <div class="impact-grid">
      <?php foreach ($impacts as $i => $item): ?>
        <div class="impact-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 80; ?>">
          <div class="impact-icon"><i class="fa-solid <?php echo $item['icon']; ?>"></i></div>
          <h4><?php echo $item['title']; ?></h4>
          <p><?php echo $item['desc']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SECTION 10 — Research Progress -->
<section class="progress-section section-pad" id="progress" style="background:var(--cream-200);">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Progres Riset</span>
      <h2 class="section-title">Proyek Ini Masih Berjalan — dan Itu Bagian dari Ceritanya</h2>
      <p class="section-sub">Transparansi tahap riset penting bagi kami. Berikut posisi proyek saat ini.</p>
    </div>

    <div class="progress-timeline">
      <?php foreach ($timeline as $i => $t): ?>
        <div class="timeline-item <?php echo $t['state']; ?>" data-aos="fade-up" data-aos-delay="<?php echo $i * 80; ?>">
          <div class="tl-dot">
            <?php if ($t['state'] === 'done'): ?>
              <i class="fa-solid fa-check"></i>
            <?php else: ?>
              <i class="fa-solid <?php echo $t['icon']; ?>"></i>
            <?php endif; ?>
          </div>
          <h4><?php echo $t['title']; ?></h4>
          <p><?php echo $t['desc']; ?></p>
          <span class="tl-status"><?php echo $t['status']; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
