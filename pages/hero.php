<?php
/**
 * pages/hero.php
 * Section 1 — Hero. First impression for a QR-scan visitor.
 */
?>
<section class="hero" id="hero">
  <div class="container">
    <div class="hero-copy" data-aos="fade-up">
      <div class="hero-eyebrow">
        <span class="dot"><i class="fa-solid fa-recycle"></i></span>
        Proyek Riset KIM &amp; PKM-KC
      </div>

      <h1>Setiap Plastik<br>Berhak Punya <em>Kehidupan Kedua.</em></h1>

      <p class="hero-sub">
        Kami mengubah limbah kantong plastik LDPE menjadi totebag lipat yang menempel langsung
        di gantungan kunci — supaya membawa tas belanja sendiri bukan lagi soal ingat atau lupa.
      </p>

      <div class="hero-actions">
        <a href="#about" class="btn btn-primary">Pelajari Lebih Lanjut <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#journey" class="btn btn-outline">Jelajahi Prosesnya <i class="fa-solid fa-diagram-project"></i></a>
      </div>

      <div class="hero-stats">
        <div class="stat">
          <b data-count="7">0</b>
          <span>Jenis Plastik Dipelajari</span>
        </div>
        <div class="stat">
          <b data-count="5">0</b>
          <span>Tahap Proses Daur Ulang</span>
        </div>
        <div class="stat">
          <b data-count="1">0</b>
          <span>Kebiasaan Baru Dibangun</span>
        </div>
      </div>
    </div>

    <div class="hero-visual" data-aos="zoom-in" data-aos-delay="150">
      <div class="blob"></div>

      <svg class="keyring-illustration" viewBox="0 0 420 420" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Keyring -->
        <circle cx="150" cy="120" r="52" stroke="#2C4A3B" stroke-width="10"/>
        <circle cx="150" cy="120" r="52" stroke="#8A9459" stroke-width="2" stroke-dasharray="4 6" opacity=".5"/>
        <!-- Chain link connecting ring to bag -->
        <path d="M188 158 L232 206" stroke="#BE7C4D" stroke-width="8" stroke-linecap="round"/>
        <rect x="214" y="196" width="26" height="34" rx="8" transform="rotate(8 214 196)" fill="#BE7C4D"/>
        <!-- Folded totebag pouch -->
        <rect x="150" y="210" width="150" height="150" rx="28" fill="#2C4A3B"/>
        <rect x="150" y="210" width="150" height="150" rx="28" fill="url(#heroGrad)" fill-opacity=".35"/>
        <path d="M195 210 V186a30 30 0 0 1 60 0v24" stroke="#F5F0E4" stroke-width="9" stroke-linecap="round" fill="none"/>
        <rect x="176" y="252" width="98" height="66" rx="14" fill="#F5F0E4" opacity=".14"/>
        <path d="M176 285 h98" stroke="#F5F0E4" stroke-width="4" stroke-linecap="round" opacity=".35"/>
        <path d="M188 305 h74" stroke="#F5F0E4" stroke-width="4" stroke-linecap="round" opacity=".25"/>
        <!-- small leaf accent -->
        <path d="M300 300c18-4 30 8 26 26-18 4-30-8-26-26Z" fill="#8A9459"/>
        <defs>
          <linearGradient id="heroGrad" x1="150" y1="210" x2="300" y2="360" gradientUnits="userSpaceOnUse">
            <stop stop-color="#8A9459"/>
            <stop offset="1" stop-color="#BE7C4D"/>
          </linearGradient>
        </defs>
      </svg>

      <div class="float-chip chip-1"><i class="fa-solid fa-droplet"></i> Tahan Air</div>
      <div class="float-chip chip-2"><i class="fa-solid fa-key"></i> Selalu Terbawa</div>
    </div>
  </div>

  <div class="scroll-cue">
    Scroll
    <span class="chevron"></span>
  </div>
</section>
