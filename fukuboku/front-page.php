<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./inc/head');
get_template_part('./inc/header');
?>
<article class="main">
  <div class="l-mainVisual">
    <div class="l-mainVisual__inner">
      <h1 class="l-mainVisual__logo"><img src="<?= $wp_path?>/assets/img/common/logo.png" alt=""></h1>
    </div>
  </div>
  <section class="l-topAbout" id="about">
    <?php $about = get_field('about','option'); ?>
    <div class="c-inner">
      <div class="l-topAbout__box">
        <div class="l-topAbout__boxTxt">
          <h2 class="l-topAbout__ttl">ご挨拶</h2>
          <p class="l-topAbout__lead"><?= $about['lead']?></p>
          <p class="l-topAbout__txt"><?= $about['txt']?></p>
        </div>

      </div>
    </div>
  </section>
  <div class="l-topAbout__floatBg"></div>
  <section class="l-topFood" id="food">
    <div class="c-inner">
      <?php $about = get_field('food','option');
        $count = 1;
        foreach ($about as $item):
      ?>
          <div class="l-topFood__box <?php if($count % 2 == 0){echo 'is-second';}?>">
            <div class="l-topFood__box__detail">
              <h3 class="l-topFood__box__ttl"><?= $item['title']?></h3>
              <p class="l-topFood__box__txt"><?= $item['txt']?></p>
            </div>
            <div class="l-topFood__box__imgList">
              <?php if($item['img01']):?>
                <img class="l-topFood__box__img" src="<?= $item['img01']?>" alt="">
              <?php endif;?>
              <?php if($item['img02']):?>
                <img class="l-topFood__box__img" src="<?= $item['img02']?>" alt="">
              <?php endif;?>
            </div>
          </div>
      <?php
        $count++;
        endforeach;?>
    </div>
  </section>
  <section class="l-topStore" id="info">
    <div class="c-inner">
      <div class="l-topStore__box">
        <h2 class="c-title">店舗情報</h2>

        <dl class="l-topStore__dl">
          <?php $info = get_field('info','option');
          foreach ($info as $item):?>
            <dt class="l-topStore__dt"><?= $item['title']?></dt>
            <dd class="l-topStore__dd"><?= $item['detail']?></dd>
          <?php endforeach;?>
        </dl>
      </div>
    </div>
  </section>
  <div class="l-topAccess">
    <img class="l-topAccess__logo" src="<?= $wp_path;?>/assets/img/common/signboard.jpg" alt="">
    <iframe class="l-topAccess__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.660359341079!2d139.72434105144458!3d35.66073876066368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b828453ffff%3A0xb8603beeb9b150d8!2z5YWt5pys5pyo44OS44Or44K6IOajruOCv-ODr-ODvA!5e0!3m2!1sja!2sjp!4v1696291335716!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</article>
<?php
get_template_part('./inc/footer');
?>