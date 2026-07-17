<?php
/**
 * includes/footer.php
 * Site footer — attribution, sitemap links, QR note.
 */
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
          <span>Kembali</span>
        </div>
        <p>Proyek riset mahasiswa yang mengubah limbah kantong plastik LDPE menjadi totebag lipat yang menempel di gantungan kunci — supaya kebiasaan bawa tas belanja sendiri jadi lebih mudah dijalani.</p>
      </div>

      <div class="footer-col">
        <h5>Jelajahi</h5>
        <ul>
          <li><a href="#about">Tentang Proyek</a></li>
          <li><a href="#plastic">Kenali Plastik</a></li>
          <li><a href="#journey">Perjalanan Plastik</a></li>
          <li><a href="#product">Produk</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Informasi</h5>
        <ul>
          <li><a href="#impact">Dampak Lingkungan</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#team">Tim Riset</a></li>
          <li><a href="pages/about.php">Dokumentasi Lengkap</a></li>
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
        <a href="mailto:kembali.project@example.com" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
      </div>
    </div>
  </div>
</footer>
