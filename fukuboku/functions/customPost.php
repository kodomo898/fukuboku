<?php
/**************************************************/
/* カスタム投稿タイプ追加 */
/**************************************************/

function create_post_type() {
  // Post
  /*---------------------------------------------*/
/*  register_post_type(
    'news',
    array(
      'label' => 'NEWS',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'show_in_rest' => true,
      'supports' => array(
        'title',
        'editor'
      ),
    )
  );
  register_post_type(
    'product',
    array(
      'label' => '商品紹介',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'show_in_rest' => true,
      'supports' => array(
        'title',
        'thumbnail'
      ),
    )
  );
  register_post_type(
    'credit',
    array(
      'label' => 'キャスト',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'show_in_rest' => true,
      'supports' => array(
        'title',
        'thumbnail'
      ),
    )
  );*/
}
add_action( 'init', 'create_post_type' );
?>