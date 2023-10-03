<?php
global $wp_path;
global $site_url;

?>

<!-- footer -->




<footer class="l-topContact" id="contact">
  <div class="c-inner">
    <?php $contact = get_field('contact','option'); ?>

    <h3 class="l-topContact__ttl">ご予約</h3>
    <p class="l-topContact__lead">  <?= $contact['lead']?></p>
    <p class="l-topContact__txt">
      <?= $contact['txt']?>
    </p>

    <div class="l-topContact__box">
      <div class="l-topContact__boxItem">
        <img class="l-topContact__boxItem__icon" src="<?= $wp_path;?>/assets/img/common/tel.svg" alt="">
        <p class="l-topContact__boxItem__iconTtl">お電話でのご予約</p>
        <p class="l-topContact__boxItem__tel"><?= $contact['tel']?></p>
      </div>
      <div class="l-topContact__boxItem">
        <img class="l-topContact__boxItem__icon" src="<?= $wp_path;?>/assets/img/common/sp.svg" alt="">
        <p class="l-topContact__boxItem__iconTtl">オンライン予約</p>
        <a class="l-topContact__boxItem__btn" href="<?= $contact['url']?>" target="_blank"><img src="<?= $wp_path;?>/assets/img/common/btn.jpg" alt=""></a>
      </div>
    </div>
  </div>

  <p class="l-footer">&copy; 2023 澄まし処 お料理 ふくぼく</p>
</footer>
</div>

<!-- JS -->
<script src="<?= $wp_path ?>/assets/js/common.js"></script>
<!--<script src="--><?//= $wp_path ?><!--/assets/js/action.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>