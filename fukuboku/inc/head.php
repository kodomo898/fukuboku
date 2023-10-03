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
  <?php wp_head()?>

</head>

<body id="pageTop">
<div class="wrap">
