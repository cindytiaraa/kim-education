<?php
/**
 * pages/process.php
 * Section 6 — Plastic Journey (household -> keychain), infographic flow.
 */

$journeySteps = [
  ["icon" => "fa-house",            "label" => "Rumah Tangga",      "desc" => "Kantong LDPE terkumpul dari pemakaian harian"],
  ["icon" => "fa-filter",           "label" => "Pemilahan",         "desc" => "Dipisahkan dari jenis plastik lain"],
  ["icon" => "fa-droplet",          "label" => "Pembersihan",       "desc" => "Dicuci dari sisa kotoran & label"],
  ["icon" => "fa-fire",             "label" => "Thermal Fusion",    "desc" => "Dilebur & dipadatkan dengan panas terkontrol"],
  ["icon" => "fa-layer-group",      "label" => "Lembar Material",   "desc" => "Terbentuk lembaran baru yang kuat & fleksibel"],
  ["icon" => "fa-bag-shopping",     "label" => "Totebag Lipat",     "desc" => "Dijahit & dibentuk menjadi tas lipat"],
  ["icon" => "fa-key",              "label" => "Keychain",          "desc" => "Dikemas ringkas, siap menempel di kunci", "final" => true],
];
?>
<section class="journey section-pad" id="journey">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Perjalanan Plastik</span>
      <h2 class="section-title">Dari Tempat Sampah Rumah, Menjadi Benda yang Menempel di Kunci Anda</h2>
      <p class="section-sub">Tujuh tahap sederhana mengubah limbah menjadi produk fungsional sehari-hari.</p>
    </div>

    <div class="journey-track" id="journeyTrack">
      <div class="journey-line" id="journeyLine">
        <svg class="ring-runner" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="12" cy="12" r="9" stroke="#BE7C4D" stroke-width="3"/>
        </svg>
      </div>

      <?php foreach ($journeySteps as $i => $step): ?>
        <div class="journey-node<?php echo !empty($step['final']) ? ' final' : ''; ?>" data-aos="fade-up" data-aos-delay="<?php echo $i * 90; ?>">
          <div class="node-circle"><i class="fa-solid <?php echo $step['icon']; ?>"></i></div>
          <span class="node-step">Tahap <?php echo $i + 1; ?></span>
          <h5><?php echo $step['label']; ?></h5>
          <p><?php echo $step['desc']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
