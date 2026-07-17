<?php
/**
 * pages/team.php
 * Section 12 — Meet Our Team
 */

$team = [
  ["name" => "Nama Anggota 1", "role" => "Ketua Peneliti", "initial" => "A1"],
  ["name" => "Nama Anggota 2", "role" => "Riset Material",  "initial" => "A2"],
  ["name" => "Nama Anggota 3", "role" => "Desain Produk",   "initial" => "A3"],
  ["name" => "Nama Anggota 4", "role" => "Dokumentasi & Media", "initial" => "A4"],
];
?>
<section class="team-section section-pad" id="team">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Tim Riset</span>
      <h2 class="section-title">Orang-Orang di Balik Proyek Ini</h2>
      <p class="section-sub">Tim mahasiswa lintas peran yang menjalankan proyek ini dari riset literatur hingga purwarupa.</p>
    </div>

    <div class="team-grid">
      <?php foreach ($team as $i => $member): ?>
        <div class="team-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 70; ?>">
          <div class="team-avatar"><?php echo $member['initial']; ?></div>
          <h4><?php echo $member['name']; ?></h4>
          <div class="role"><?php echo $member['role']; ?></div>
          <div class="socials">
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container" style="margin-top:80px;">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Tertarik mendukung atau berkolaborasi?</h3>
        <p>Hubungi tim riset kami untuk diskusi lebih lanjut seputar proyek ini.</p>
      </div>
      <div class="cta-actions">
        <a href="mailto:kembali.project@example.com" class="btn btn-clay">Hubungi Kami <i class="fa-solid fa-paper-plane"></i></a>
        <a href="#hero" class="btn btn-outline" style="border-color:rgba(255,255,255,.4); color:#fff;">Kembali ke Atas</a>
      </div>
    </div>
  </div>
</section>
