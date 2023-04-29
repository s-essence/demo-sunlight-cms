<?php
function add_my_ajaxurl() {
?>
  <script>
    var ajaxurl = '<?php echo admin_url( 'admin-ajax.php'); ?>';
  </script>
  <?php
}

add_action( 'wp_head', 'add_my_ajaxurl', 1 );

require get_template_directory() . '/apis/index.php';
//ログインしているユーザー向け関数
add_action( 'wp_ajax_form_send', 'form_send' );
//非ログインユーザー用関数
add_action( 'wp_ajax_nopriv_form_send', 'form_send' );
?>