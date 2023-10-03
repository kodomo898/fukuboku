<?php
global $wp_path;
global $site_url;
?>
<header class="l-header">
  <div class="l-header__toggle"><span></span><span></span><span></span></div>
  <nav class="l-header__nav">
    <a class="l-header__navList" href="#">トップ</a>
    <a class="l-header__navList" href="#about">ご挨拶</a>
    <a class="l-header__navList" href="#food">料理</a>
    <a class="l-header__navList" href="#info">店舗情報</a>
    <a class="l-header__navList" href="#contact">ご予約</a>
  </nav>
</header>

<a class="l-header__floating" href="#contact"><img class="l-header__floating__bnr" src="<?= $wp_path;?>/assets/img/common/floating_bnr.jpg" alt=""></a>
<!-- SP Nav -->