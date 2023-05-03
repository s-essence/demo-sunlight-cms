<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<?php get_template_part('inc/head', 'head'); ?>
</head>
<body id="page_user_data" class="second_page other_page blogs_page">
<?php get_template_part('inc/body_action'); ?>
<div <?php body_class() ?>>
<div id="g-container" class="g-container">
<div id="g-container__inner" class="g-container__inner">
<div class="c-contents-container">
<?php get_header(); ?>
<section id="mv" class="mv c-section">
  <div class="mv__inner">
    <ul class="mv-list">
      <li class="list__item --01">
        <div class="item__contents">
          <div class="item__inner">
            <div class="mv-cp">
              <h1 class="mv-cp-ttl">
                <span class="mv-cp__inner">Sun Lightの</span>
                <span class="mv-cp__inner">BLOGS</span>
              </h1>
            </div>
          </div>
          <div class="item__photo"></div>
        </div>
      </li>
    </ul>
    <p class="mv-logo"></p>
  </div>
</section>

<section id="blogs" class="blogs c-section">
  <div class="c-inner">
    <div class="c-head-container --about js-anima" data-anima="h2-slideFadeIn" data-anima-init="true">
      <h2 class="c-head-vl-2">
        <span class="c-head-vl-2__ttl --en">
          <span class="c-head-vl-2__ttl-bg"></span>
          <span class="c-head-vl-2__tt-txt">BLOGS</span>
        </span>
        <span class="c-head-vl-2__ttl --jp">ブログ一覧</span>
      </h2>
    </div>
    <div class="c-contents --blog">
      <div class="c-contents__inner">
        <div class="c-news-container">
        <?php
        $blogs_args = array(
          'post_type' => 'blogs',
          'paged' => get_query_var('paged')
        );
        ?>
        <?php get_template_part('template-parts/loop-posts', 'blogs', $blogs_args); ?>
        </div>
        <?php get_template_part('template-parts/parts-archive_pagination', 'archive_pagination'); ?>
      </div>
      <div class="c-btn-container">
          <div class="c-btn">
            <a class="c-btn-link" href="<?php echo esc_url( home_url() ); ?>">
              <span class="c-btn-lbl">HOME</span>
              <span class="c-btn-icon"></span>
            </a>
          </div>
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
</div>
</div>
</div>
</body>
</html>