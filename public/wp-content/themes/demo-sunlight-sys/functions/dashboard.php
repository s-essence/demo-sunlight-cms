<?php
/* ダッシュボード非表示 */
function remove_dashboard_widget() {
  if (!current_user_can('administrator')) {
	remove_action( 'welcome_panel','wp_welcome_panel' ); // ようこそ
    remove_meta_box('dashboard_right_now','dashboard','normal'); // 概要
    // remove_meta_box('dashboard_activity','dashboard','normal'); // アクティビティ
    remove_meta_box('dashboard_quick_press','dashboard','side'); // クイックドラフト
    remove_meta_box('dashboard_primary','dashboard','side'); // WordPressニュース
  }
} 
add_action('wp_dashboard_setup','remove_dashboard_widget');