<meta charset="<?php bloginfo('charset'); ?>">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<?php /* <title><?php bloginfo('name'); ?></title> */ ?>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<?php if ( is_front_page() ) : ?>
<meta property="og:type" content="website">
<?php else : ?>
<meta property="og:type" content="article">
<?php endif; ?>
<meta property="og:url" content="<?php echo esc_url( get_template_directory_uri() ); ?>/">
<meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/ogp.jpg">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="<?php echo esc_url( get_template_directory_uri() ); ?>/">
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/reset.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/setting.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/utility.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/parts.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/common.css">
<?php if ( is_front_page() ) : ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/top.css">
<?php else : ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
<?php endif; ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/contact.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/animation.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/customize.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/android-touch-icon.png" sizes="192x192">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin="anonymous"></script>
<?php if ( is_front_page() ) : ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<?php endif; ?>
<?php if ( is_front_page() ) : ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/form.js"></script>
<?php endif; ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/common.js"></script>
<?php if ( is_front_page() ) : ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/top.js"></script>
<?php endif; ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/animation.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/customize.js"></script>
<?php wp_head(); ?>