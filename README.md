# Kembali — Foldable Totebag Keychain (Landing Page Edukasi)

Landing page edukasi untuk proyek riset mahasiswa (persiapan KIM & PKM-KC) yang
mengubah limbah plastik LDPE menjadi Foldable Totebag Keychain. Diakses melalui
QR Code yang tertempel pada produk.

**Bukan aplikasi.** Tidak ada login, register, dashboard, database, atau autentikasi.
Seluruh halaman bersifat statis dan naratif (storytelling one-page).

## Tech Stack

- Native PHP (include-based, tanpa framework/Laravel)
- HTML5, CSS3, Vanilla JavaScript
- Bootstrap 5 (utility grid saja — visual sepenuhnya custom)
- AOS (Animate On Scroll)
- Font Awesome 6
- SwiperJS (tersedia untuk pengembangan galeri lebih lanjut)

## Struktur Folder

```
kim-education/
│
├── assets/
│   ├── css/
│   │   ├── style.css         # Design tokens + seluruh komponen
│   │   ├── responsive.css    # Breakpoint mobile-first
│   │   └── animation.css     # Keyframes & AOS overrides
│   ├── js/
│   │   └── script.js         # Nav, counter, accordion, observer
│   ├── img/                  # hero/ product/ gallery/ icons/ illustration/ logo/
│   └── video/
│
├── includes/
│   ├── header.php            # <head>, meta, font & CDN links
│   ├── navbar.php            # Nav mengambang + menu mobile
│   ├── footer.php            # Footer & sitemap
│   └── floating-button.php   # Tombol aksi cepat mengambang
│
├── pages/
│   ├── hero.php               # 1. Hero
│   ├── about.php               # 2. Tentang Proyek
│   ├── education.php           # 3-5. Masalah plastik + Kenali Plastik + Mengapa LDPE
│   ├── process.php             # 6. Perjalanan Plastik
│   ├── product.php             # 7-8. Showcase Produk + Mengapa Keychain
│   ├── impact.php              # 9-10. Dampak Lingkungan + Progres Riset
│   ├── faq.php                 # 11. FAQ
│   └── team.php                 # 12. Tim Riset + CTA penutup
│
├── index.php                 # Entry point tunggal — merangkai semua partial
├── .htaccess
└── README.md
```

> Catatan struktur: `pages/` di sini berfungsi sebagai *partial section* yang
> di-include langsung ke `index.php` (bukan halaman terpisah), karena project
> ini adalah landing page satu halaman (single scroll), bukan situs multi-page.

## Menjalankan Secara Lokal

1. Pastikan PHP terpasang (PHP 7.4+ direkomendasikan).
2. Dari dalam folder `kim-education/`, jalankan:
   ```
   php -S localhost:8000
   ```
3. Buka `http://localhost:8000` di browser.

Atau letakkan folder ini di dalam `htdocs` (XAMPP) / `www` (Laragon), lalu akses
`http://localhost/kim-education`.

## Palet Warna

| Nama          | Hex       | Kegunaan                                  |
|---------------|-----------|--------------------------------------------|
| Forest Green  | `#1F3B2C` | Warna utama — heading, tombol primary      |
| Olive         | `#6E7A46` | Aksen sekunder, garis proses               |
| Clay          | `#BE7C4D` | Aksen hangat — CTA, highlight, ikon kunci  |
| Cream         | `#FBF8F1` | Latar utama                                |
| Warm Sand     | `#E9DDC5` | Latar alternatif antar-section             |

## Placeholder Aset

Folder `assets/img/` disediakan kosong dengan struktur sesuai kategori
(hero, product, gallery, icons, illustration, logo). Ilustrasi pada versi ini
digambar langsung sebagai inline SVG di dalam file PHP terkait agar landing
page tetap ringan dan tidak bergantung pada foto stok — silakan ganti dengan
foto produk asli saat sudah tersedia.

## Status

Proyek riset — tahap KIM & PKM-KC. Bukan produk komersial.
"# kim-education" 
