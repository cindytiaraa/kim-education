<?php
/**
 * pages/contact.php — Kontak
 * Form nama, subjek, email, dan pesan. Dikirim ke services/send-email.php
 * yang memproses lalu mengirim email ke tim (fungsi satu-satunya di balik
 * "aplikasi" ini — tidak ada login/database).
 */
$base      = '../';
$current   = 'contact';
$pageTitle = 'Kontak';
$pageDesc  = 'Hubungi tim riset Project melalui form kontak.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';

$status = isset($_GET['status']) ? $_GET['status'] : null;
?>

<section class="section-pad" style="padding-top:150px;">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Kontak</span>
      <h2 class="section-title">Ada Pertanyaan atau Ingin Berkolaborasi?</h2>
      <p class="section-sub">Isi form di bawah ini — pesan Anda akan langsung masuk ke email tim riset kami.</p>
    </div>

    <?php if ($status === 'success'): ?>
      <div class="max-w-xl mx-auto mb-8 rounded-xl2 border border-olive-300 bg-cream-200 px-6 py-4 text-sm text-forest-800 flex items-start gap-3" data-aos="fade-up">
        <i class="fa-solid fa-circle-check mt-0.5 text-olive-600"></i>
        <span>Pesan Anda berhasil terkirim. Tim kami akan membalas melalui email secepatnya.</span>
      </div>
    <?php elseif ($status === 'error'): ?>
      <div class="max-w-xl mx-auto mb-8 rounded-xl2 border border-clay-100 bg-clay-100/40 px-6 py-4 text-sm text-clay-600 flex items-start gap-3" data-aos="fade-up">
        <i class="fa-solid fa-circle-exclamation mt-0.5"></i>
        <span>Maaf, pesan gagal terkirim. Pastikan semua kolom terisi dengan benar lalu coba lagi.</span>
      </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 max-w-5xl mx-auto">
      <!-- Form -->
      <form action="../services/send-email.php" method="POST" class="lg:col-span-3 bg-white border border-sand-300 rounded-xl3 p-8 md:p-10 shadow-[0_20px_45px_rgba(31,59,44,0.08)]" data-aos="fade-up">
        <div class="mb-5">
          <label for="name" class="tw-label">Nama</label>
          <input type="text" id="name" name="name" class="tw-input" placeholder="Nama lengkap Anda" required maxlength="100">
        </div>

        <div class="mb-5">
          <label for="email" class="tw-label">Email</label>
          <input type="email" id="email" name="email" class="tw-input" placeholder="nama@email.com" required maxlength="150">
        </div>

        <div class="mb-5">
          <label for="subject" class="tw-label">Subjek</label>
          <input type="text" id="subject" name="subject" class="tw-input" placeholder="Topik pesan Anda" required maxlength="150">
        </div>

        <div class="mb-6">
          <label for="message" class="tw-label">Pesan</label>
          <textarea id="message" name="message" rows="5" class="tw-input resize-none" placeholder="Tulis pesan Anda di sini..." required maxlength="2000"></textarea>
        </div>

        <!-- Honeypot anti-spam (tersembunyi dari pengguna asli) -->
        <div class="hidden" aria-hidden="true">
          <label for="website">Website</label>
          <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary w-full justify-center">
          Kirim Pesan <i class="fa-solid fa-paper-plane"></i>
        </button>
      </form>

      <!-- Info sampingan -->
      <div class="lg:col-span-2 flex flex-col gap-5" data-aos="fade-up" data-aos-delay="100">
        <div class="bg-forest-800 text-cream-100 rounded-xl3 p-8">
          <h4 class="font-display text-lg mb-3">Kontak Langsung</h4>
          <p class="text-sm text-white/70 leading-relaxed mb-5"><em>[Lorem ipsum — info kontak tambahan dari tim bisa diisi di sini.]</em></p>
          <div class="flex items-center gap-3 text-sm mb-3">
            <i class="fa-solid fa-envelope text-clay-500"></i>
            <span>kembali.project@example.com</span>
          </div>
          <div class="flex items-center gap-3 text-sm">
            <i class="fa-solid fa-location-dot text-clay-500"></i>
            <span>[Nama Universitas — Program KIM &amp; PKM-KC]</span>
          </div>
        </div>

        <div class="bg-cream-200 border border-sand-300 rounded-xl3 p-8">
          <h4 class="font-display text-lg mb-3 text-forest-800">Waktu Respons</h4>
          <p class="text-sm text-ink-600 leading-relaxed">Tim kami biasanya membalas dalam <em>[lorem ipsum estimasi waktu]</em> pada hari kerja.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
