<?php
function original_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails'); // 管理画面にアイキャッチ画像を有効にする
  add_image_size('page_eyecatch', 1288, 860, true); // アイキャッチ画像のサイズを指定する
}
add_action('after_setup_theme', 'original_theme_setup');