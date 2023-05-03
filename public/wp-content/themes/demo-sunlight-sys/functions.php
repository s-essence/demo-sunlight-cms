<?php

function original_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails'); // 管理画面にアイキャッチ画像を有効にする
  add_image_size('page_eyecatch', 1288, 860, true); // アイキャッチ画像のサイズを指定する
}
add_action('after_setup_theme', 'original_theme_setup');

// function orangina_enqueue_scripts() {
//   wp_enqueue_script('jquery');
// }
// add_action('wp_enqueue_scripts', 'orangina_enqueue_scripts');

function custom_the_posts_pagination($template) {
	$template = '
  <div class="c-posts-pagination-container" >
    <nav class="c-posts-pagination %1$s" role="navigation">
      %3$s
    </nav>
  </div>';
	return $template;
}
add_filter('navigation_markup_template', 'custom_the_posts_pagination');


function my_plugin_allowed_block_types_all( $allowed_block_types, $block_editor_context ) {
	// 許可するブロックタイプ
	$allowed_block_types = array(
		'core/paragraph',
		// 'core/heading',
		'core/image',
	);
	return $allowed_block_types;
}
add_filter( 'allowed_block_types_all', 'my_plugin_allowed_block_types_all', 10, 2 );


require get_template_directory() . '/functions/form.php'; // TOPページのフォーム読み込み
require get_template_directory() . '/functions/dashboard.php'; // ダッシュボード非表示読み込み
require get_template_directory() . '/functions/admin-side-bar.php'; // 管理画面サイドバー非表示読み込み
require get_template_directory() . '/functions/editer.php'; // 管理画面エディター非表示読み込み
