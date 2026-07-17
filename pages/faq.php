<?php
/**
 * pages/faq.php
 * Section 11 — Frequently Asked Questions (accordion).
 */

$faqs = [
  [
    "q" => "Mengapa memilih LDPE, bukan jenis plastik lain?",
    "a" => "LDPE dipilih karena sifatnya yang lentur dan mudah dilebur pada suhu relatif rendah lewat proses thermal fusion, serta karena kantong plastik LDPE adalah salah satu limbah rumah tangga yang paling banyak ditemukan namun paling jarang didaur ulang secara mandiri."
  ],
  [
    "q" => "Apakah totebag ini kuat membawa belanjaan berat?",
    "a" => "Totebag dirancang untuk kebutuhan belanja harian dalam jumlah wajar. Uji ketahanan beban termasuk dalam tahap Pengujian yang sedang direncanakan pada roadmap riset kami."
  ],
  [
    "q" => "Apakah bisa dicuci?",
    "a" => "Material hasil thermal fusion bersifat tahan air sehingga bisa dilap atau dibilas dengan air biasa. Panduan perawatan lebih rinci akan dirilis setelah tahap pengujian selesai."
  ],
  [
    "q" => "Kenapa tidak memakai kain biasa saja?",
    "a" => "Menggunakan kain baru berarti tidak menyelesaikan masalah limbah plastik yang sudah ada. Dengan memanfaatkan LDPE bekas, proyek ini sekaligus mengurangi sampah dan menghasilkan produk fungsional — dua tujuan tercapai dalam satu material."
  ],
  [
    "q" => "Bagaimana cara mendapatkan produk ini?",
    "a" => "Saat ini proyek masih berada pada tahap riset dan pengembangan untuk program KIM dan PKM-KC, sehingga belum tersedia secara komersial. Informasi lanjutan akan dibagikan melalui halaman Tim Riset."
  ],
];
?>
<section class="faq-section section-pad" id="faq">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">FAQ</span>
      <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
      <p class="section-sub">Jawaban singkat untuk pertanyaan yang biasanya muncul setelah membaca proyek ini.</p>
    </div>

    <div class="faq-list">
      <?php foreach ($faqs as $i => $item): ?>
        <div class="faq-item<?php echo $i === 0 ? ' active' : ''; ?>" data-aos="fade-up" data-aos-delay="<?php echo $i * 50; ?>">
          <div class="faq-question">
            <span><?php echo $item['q']; ?></span>
            <span class="faq-plus"><i class="fa-solid fa-plus"></i></span>
          </div>
          <div class="faq-answer" <?php echo $i === 0 ? 'style="max-height:220px;"' : ''; ?>>
            <div class="faq-answer-inner"><?php echo $item['a']; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
