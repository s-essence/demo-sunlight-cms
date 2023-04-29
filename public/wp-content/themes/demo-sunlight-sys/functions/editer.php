<?php
//デフォルトブロックのパターン削除
function remove_admin_editer() {
  if (!current_user_can('administrator')) {
    remove_theme_support('core-block-patterns');
  }
} 
add_action('init','remove_admin_editer');