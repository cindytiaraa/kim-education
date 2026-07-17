#  Foldable Totebag Keychain (Web Page Edukasi)

Landing page edukasi untuk proyek riset mahasiswa (persiapan KIM & PKM-KC) yang
mengubah limbah plastik LDPE menjadi Foldable Totebag Keychain. Diakses melalui
QR Code yang tertempel pada produk.

**Bukan aplikasi.** Tidak ada login, register, dashboard, database, atau autentikasi.
**Hanya send email process saja**

## Tech Stack

- Native PHP (include-based, tanpa framework/Laravel)
- HTML5, CSS3, Vanilla JavaScript
- Bootstrap 5 (utility grid saja — visual sepenuhnya custom)
- Tailwind CSS
- AOS (Animate On Scroll)
- Font Awesome 6
- SwiperJS (tersedia untuk pengembangan galeri lebih lanjut)

## Struktur Folder

```
KIM-EDUCATION/
├── assets/
│   ├── css/
│   │   ├── animation.css
│   │   ├── responsive.css
│   │   └── style.css
│   ├── img/
│   │   ├── gallery/
│   │   ├── hero/
│   │   ├── icons/
│   │   ├── illustration/
│   │   ├── logo/
│   │   └── product/
│   ├── js/
│   │   └── script.js
│   └── video/
├── includes/
│   ├── footer.php
│   ├── header.php
│   └── navbar.php
├── node_modules/
├── pages/
│   ├── about.php
│   ├── contact.php
│   ├── education.php
│   ├── home.php
│   ├── process.php
│   └── solution.php
├── services/
├── .htaccess
├── index.php
├── package-lock.json
├── package.json
└── README.md
```

> Catatan struktur: `pages/` di sini berfungsi sebagai *partial section* yang
> di-include langsung ke `index.php` (bukan halaman terpisah), karena project
> ini adalah landing page satu halaman (single scroll), bukan situs multi-page.

## Penjelasan Tentang Pages

- /home : landing page dengan css dan js yang interaktif
- /education : penjelasan tentang latar belakang masalah, jenis jenis sampah plastik, dan tujuan
- /process : berisi tentang process bagaimana sampah berubah menjadi totebag yang bisa menjadi keychain
- /solution : berisi tentang gambar atau rancangan akhir dari proyek

(Pembeda about us dan contact us seperti tombol register dan login)

- /about us : berisi tentang anggota kita dan visi misi
- /contact us : berisi tentang form tentang nama subjek dan email yg nantinya bisa masuk ke email kita, yg nanti di prosess controller nya di services send email

## Menjalankan Secara Lokal

1. Pastikan PHP terpasang (PHP 7.4+ direkomendasikan) dan Node.js terpasang (untuk Tailwind CSS).
2. Install dependency Tailwind:
   ```
   npm install
   ```
3. Build CSS Tailwind (sekali jalan):
   ```
   npm run build
   ```
   atau mode watch saat development:
   ```
   npm run dev
   ```
4. Dari dalam folder `kim-education/`, jalankan server PHP:
   ```
   php -S localhost:8000
   ```
5. Buka `http://localhost:8000` di browser.

Atau letakkan folder ini di dalam `htdocs` (XAMPP) / `www` (Laragon), lalu akses
`http://localhost/kim-education`.

### Mengonfigurasi Pengiriman Email

Form kontak (`pages/contact.php`) mengirim data ke `services/send-email.php`,
yang saat ini menggunakan fungsi `mail()` bawaan PHP. Fungsi ini bergantung
pada konfigurasi mail server di hosting Anda. Untuk hasil lebih andal di
produksi, ganti bagian pengiriman di `services/send-email.php` dengan
PHPMailer + SMTP:

```
composer require phpmailer/phpmailer
```

Ganti juga alamat `$recipientEmail` di file tersebut dengan email tim yang
sebenarnya.

## Palet Warna

| Nama          | Hex       | Kegunaan                                  |
|---------------|-----------|--------------------------------------------|
| Forest Green  | `#1F3B2C` | Warna utama — heading, tombol primary      |
| Olive         | `#6E7A46` | Aksen sekunder, garis proses               |
| Clay          | `#BE7C4D` | Aksen hangat — CTA, highlight, ikon kunci  |
| Cream         | `#FBF8F1` | Latar utama                                |
| Warm Sand     | `#E9DDC5` | Latar alternatif antar-section             |

## Placeholder Content

Beberapa deskripsi mungkin seperti produk, nama produk, visi misi, tujuan dll yang berbentuk deskripsi atau informasi dari tim dikosongkan terlebih dahulu dengan tulisan lorem ipsum seperti data dummy. Ditandai dengan `[teks di dalam kurung siku]` di dalam file halaman terkait — cari dan ganti langsung.

## Placeholder Aset

Folder `assets/img/` disediakan kosong dengan struktur sesuai kategori
(hero, product, gallery, icons, illustration, logo). Ilustrasi pada versi ini
digambar langsung sebagai inline SVG di dalam file PHP terkait agar landing
page tetap ringan dan tidak bergantung pada foto stok — silakan ganti dengan
foto produk asli saat sudah tersedia.

## Status

Proyek riset — tahap KIM & PKM-KC. Bukan produk komersial.
