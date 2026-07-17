<?php
/**
 * includes/header.php
 * Global <head>. Expects the including file to define $base
 * ('' when included from project root, '../' when included from pages/)
 * and optionally $pageTitle / $pageDesc for per-page SEO.
 */
if (!isset($base)) { $base = ''; }
$siteName = "Kembali — Foldable Totebag Keychain";
$title    = isset($pageTitle) ? $pageTitle . " | Kembali" : $siteName;
$desc     = isset($pageDesc) ? $pageDesc : "Inovasi mengubah limbah plastik LDPE menjadi Foldable Totebag Keychain. Proyek riset KIM & PKM-KC.";
?><!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $desc; ?>">
<meta name="theme-color" content="#1F3B2C">

<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $desc; ?>">
<meta property="og:type" content="website">

<link rel="icon" type="image/png" href="<?php echo $base; ?>assets/img/logo/favicon.png">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Bootstrap 5 (utility grid only) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<!-- AOS Animation -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<!-- SwiperJS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- Tailwind CSS (compiled — see package.json "build" script) -->
<link rel="stylesheet" href="<?php echo $base; ?>assets/css/tailwind.css">

<!-- Project design-token styles -->
<link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo $base; ?>assets/css/animation.css">
<link rel="stylesheet" href="<?php echo $base; ?>assets/css/responsive.css">
</head>
<body class="preload">
