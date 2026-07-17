<?php
/**
 * includes/footer.php
 * Expects $base ('' or '../') from the caller.
 */
if (!isset($base)) { $base = ''; }
$year = date("Y");
?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-about">
        <div class="footer-brand">
          <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="8.5" stroke="#F5F0E4" stroke-width="2.4"/>
            <path d="M18.5 17L26 24.5" stroke="#BE7C4D" stroke-width="2.4" stroke-linecap="round"/>
            <rect x="23" y="22" width="6.5" height="8" rx="2" transform="rotate(8 23 22)" fill="#BE7C4D"/>
          </svg>
          <span>Rekey</span>
        </div>
        <p>Proyek riset mahasiswa yang mengubah limbah kantong plastik LDPE menjadi totebag lipat yang menempel di gantungan kunci — supaya kebiasaan bawa tas belanja sendiri jadi lebih mudah dijalani.</p>
      </div>

      <div class="footer-col">
        <h5>Jelajahi</h5>
        <ul>
          <li><a href="<?php echo $base; ?>index.php">Beranda</a></li>
          <li><a href="<?php echo $base; ?>pages/education.php">Edukasi</a></li>
          <li><a href="<?php echo $base; ?>pages/process.php">Proses</a></li>
          <li><a href="<?php echo $base; ?>pages/solution.php">Solusi</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Informasi</h5>
        <ul>
          <li><a href="<?php echo $base; ?>pages/about.php">Tentang Kami</a></li>
          <li><a href="<?php echo $base; ?>pages/contact.php">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Akses Halaman Ini</h5>
        <div class="footer-qr">
          <div class="qr-box"><i class="fa-solid fa-qrcode"></i></div>
          <p>Anda membuka halaman ini lewat QR Code pada produk. Bagikan tautan ini untuk menyebarkan idenya.</p>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; <?php echo $year; ?> Kembali Project — Program KIM &amp; PKM-KC. Tahap riset, bukan produk komersial.</span>
      <div class="footer-socials">
        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        <a href="<?php echo $base; ?>pages/contact.php" aria-label="Kontak"><i class="fa-solid fa-envelope"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap 5 bundle (utilities only) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<!-- SwiperJS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Project script -->
<script src="<?php echo $base; ?>assets/js/script.js"></script>
</body>
</html>
