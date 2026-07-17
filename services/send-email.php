<?php
/**
 * services/send-email.php
 * Controller tunggal untuk proyek ini — tidak ada database, tidak ada
 * autentikasi. Satu-satunya "proses" adalah menerima form dari
 * pages/contact.php lalu mengirimkannya sebagai email ke tim.
 *
 * Menggunakan fungsi mail() bawaan PHP. Untuk produksi, disarankan
 * mengganti bagian pengiriman dengan PHPMailer + SMTP (lihat catatan
 * di bawah) karena mail() bergantung pada konfigurasi server hosting.
 */

declare(strict_types=1);

// Hanya menerima POST — akses langsung via GET ditolak.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/contact.php');
    exit;
}

// --- Honeypot anti-spam: bila field tersembunyi ini terisi, abaikan diam-diam ---
if (!empty($_POST['website'])) {
    header('Location: ../pages/contact.php?status=success');
    exit;
}

// --- Ambil & bersihkan input ---
function clean(string $value): string {
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

// Panjang string yang aman meski ekstensi mbstring tidak aktif di hosting.
function strLength(string $value): int {
    return function_exists('mb_strlen') ? mb_strlen($value) : strlen($value);
}

$name    = isset($_POST['name'])    ? clean($_POST['name'])    : '';
$email   = isset($_POST['email'])   ? trim($_POST['email'])    : '';
$subject = isset($_POST['subject']) ? clean($_POST['subject']) : '';
$message = isset($_POST['message']) ? clean($_POST['message']) : '';

// --- Validasi dasar ---
$isValid = true;

if ($name === '' || strLength($name) > 100) {
    $isValid = false;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
}
if ($subject === '' || strLength($subject) > 150) {
    $isValid = false;
}
if ($message === '' || strLength($message) > 2000) {
    $isValid = false;
}

if (!$isValid) {
    header('Location: ../pages/contact.php?status=error');
    exit;
}

// --- Konfigurasi tujuan email ---
$recipientEmail = 'kembali.project@example.com'; // [Lorem ipsum — ganti dengan email tim yang sebenarnya]
$siteName       = 'Kembali — Foldable Totebag Keychain';

$emailSubject = "[$siteName] Pesan baru: $subject";

$emailBody  = "Pesan baru dari form kontak website.\n\n";
$emailBody .= "Nama    : $name\n";
$emailBody .= "Email   : $email\n";
$emailBody .= "Subjek  : $subject\n";
$emailBody .= "Pesan   :\n$message\n";

$headers   = [];
$headers[] = "From: $siteName <no-reply@example.com>";
$headers[] = "Reply-To: $name <$email>";
$headers[] = "Content-Type: text/plain; charset=UTF-8";
$headersString = implode("\r\n", $headers);

// --- Kirim email ---
// Catatan: mail() memerlukan server mail (sendmail/Postfix) aktif di hosting.
// Untuk hasil lebih andal, ganti blok ini dengan PHPMailer + SMTP:
//   composer require phpmailer/phpmailer
$sent = @mail($recipientEmail, $emailSubject, $emailBody, $headersString);

if ($sent) {
    header('Location: ../pages/contact.php?status=success');
} else {
    header('Location: ../pages/contact.php?status=error');
}
exit;
