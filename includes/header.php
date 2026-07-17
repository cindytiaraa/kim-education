<?php
/**
 * includes/header.php
 * Global <head> — meta, fonts, CSS, and top of <body>.
 * No database, no session logic — pure static markup.
 */
$siteName   = "Kembali — Foldable Totebag Keychain";
$siteDesc   = "Inovasi mengubah limbah plastik LDPE menjadi Foldable Totebag Keychain. Edukasi plastik, proses daur ulang, dan dampak lingkungan dari proyek riset KIM & PKM-KC.";
$siteUrl    = "https://kembali-project.example.com";
$baseAssets = "assets";
?><!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title><?php echo $siteName; ?></title>
<meta name="description" content="<?php echo $siteDesc; ?>">
<meta name="theme-color" content="#1F3B2C">

<!-- Open Graph -->
<meta property="og:title" content="<?php echo $siteName; ?>">
<meta property="og:description" content="<?php echo $siteDesc; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $siteUrl; ?>">

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?php echo $baseAssets; ?>/img/logo/favicon.png">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Bootstrap 5 (grid/utilities only — visual design is custom) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<!-- AOS Animation -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<!-- SwiperJS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- Project styles -->
<link rel="stylesheet" href="<?php echo $baseAssets; ?>/css/style.css">
<link rel="stylesheet" href="<?php echo $baseAssets; ?>/css/animation.css">
<link rel="stylesheet" href="<?php echo $baseAssets; ?>/css/responsive.css">
</head>
<body class="preload">
