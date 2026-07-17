<?php
/**
 * includes/floating-button.php
 * Bottom-right floating action button — quick jump menu.
 * Pure UI, no backend action (mailto/anchor links only).
 */
?>
<div class="floating-actions" id="floatingActions">
  <div class="fab-menu" id="fabMenu">
    <a href="#hero"><i class="fa-solid fa-arrow-up"></i> Kembali ke Atas</a>
    <a href="#faq"><i class="fa-solid fa-circle-question"></i> Ada Pertanyaan?</a>
    <a href="mailto:kembali.project@example.com"><i class="fa-solid fa-envelope"></i> Hubungi Tim</a>
  </div>
  <button class="fab-main" id="fabMain" aria-label="Menu cepat">
    <i class="fa-solid fa-plus"></i>
  </button>
</div>
