<?php
global $wp_path;
global $site_url;
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default ">
  <?php
  get_template_part ('./inc/seo');
  ?>

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">

  <!-- canonical -->
  <link rel="canonical" href="<?= $site_url?>">
  <!-- favicon -->
  <link rel="shortcut icon" href="<?= $wp_path?>/assets/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="<?= $wp_path?>/assets/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" href="<?= $wp_path?>/assets/favicon/icon-192x192.png">

  <!-- CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">  <link rel="stylesheet" href="https://use.typekit.net/pbx5uho.css">
  <link href="<?= $wp_path?>/assets/css/app.css?ver=1.8" rel="stylesheet">
  <!-- JS Library -->
  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5KPPDKBJ');</script>
  <!-- End Google Tag Manager -->
  <?php wp_head()?>

</head>

<body id="pageTop">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KPPDKBJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrap">
