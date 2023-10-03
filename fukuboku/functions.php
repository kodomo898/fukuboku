<?php
$version = '0.1.1';
$site_url = get_bloginfo('url');
$site_name = get_bloginfo('name');
$site_description = get_bloginfo('description');
$wp_path = get_bloginfo('template_url');
$site_title = get_bloginfo('title');

add_theme_support('post-thumbnails');

function remove_menus()
{
    global $menu;
    remove_menu_page('edit.php'); // 投稿を非表示
    remove_menu_page('edit-comments.php'); // コメントを非表示
}
add_action('admin_menu', 'remove_menus');


// カスタムポスト
require_once locate_template('functions/customPost.php', true);

//オプションページ有効化
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(
    [
      'page_title' => 'フロント設定', 'menu_title' => 'フロント設定', 'menu_slug' => 'theme-options',
      'capability' => 'edit_posts', 'parent_slug' => '', 'position' => false, 'redirect' => false,
    ]
  );
}


// 固定ページ子階層の設定
// ex) page-{親slug}__{子slug}
function page_templates_slug($templates)
{
    global $wp_query;

    $template = get_page_template_slug();
    $pagename = $wp_query->query['pagename'];

    if ($pagename && !$template) {
        $pagename = str_replace('/', '__', $pagename);
        $decoded = urldecode($pagename);

        if ($decoded == $pagename) {
            array_unshift($templates, "page-{$pagename}.php");
        }
    }

    return $templates;
}

add_filter('page_template_hierarchy', 'page_templates_slug');

function my_acf_toolbars($toolbars) {
  // ツールバーの種類に「Simple」という項目を追加
  $toolbars['Simple' ] = array();
  $toolbars['Simple' ][1] = array('formatselect','blockquote','numlist','bullist','bold', 'italic', 'underline','alignleft','aligncenter','alignright','link','unlink','forecolor'); // 「Simple」の中に表示したいボタンを選択

  return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars' , 'my_acf_toolbars');

function my_remove_post_editor_support()
{
    remove_post_type_support('page', 'editor');//固定ページエディタ非表示
}

//add_action('init', 'my_remove_post_editor_support');


function get_loop_number()
{
    global $wp_query;
    $count = sprintf("%02d", $wp_query->current_post + 1);
    return $count;
}

function removeBom($str)
{
    return preg_replace('/^\xEF\xBB\xBF/', '', $str);
}

function is_parent_slug()
{
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

//　slug日本語禁止
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
  if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
    $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
  }
  return $slug;
}

add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );


