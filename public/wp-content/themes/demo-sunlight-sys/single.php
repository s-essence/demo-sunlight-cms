<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<?php get_template_part('inc/head', 'head'); ?>
</head>
<body id="page_user_data" class="second_page other_page news_page">
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
                <span class="mv-cp__inner">お知らせ</span>
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

<section id="section-<?php the_ID(); ?>" class="news c-section">
  <div class="c-inner">
    <div class="c-head-container --about js-anima" data-anima="h2-slideFadeIn" data-anima-init="true">
      <h2 class="c-head-vl-2">
        <span class="c-head-vl-2__ttl --en">
          <span class="c-head-vl-2__ttl-bg"></span>
          <span class="c-head-vl-2__tt-txt">NEWS</span>
        </span>
        <span class="c-head-vl-2__ttl --jp">お知らせ詳細</span>
      </h2>
    </div>
    <div class="c-contents --news">
      <div class="c-contents__inner">
        <div class="c-article-contents">
        <article class="c-article">
          <div class="article-header">
            <p class="article-date"><?php echo get_the_date(); ?></p>
            <?php
              $categories = get_the_category();
              if ($categories) : ?>
              <ul class="article-cate-list">
                <?php foreach($categories AS $category) : ?>
                <li class="article-cate"><?php echo esc_html($category->name); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          <h1 class="article-main-ttl"><?php the_title(); ?></h1>
          <?php if ( have_posts() ) : ?> 
            <?php
            while( have_posts() ) :
              the_post();
            ?>
            <div class="c-article-contents__article"><?php the_content(); ?></div>
            <?php endwhile; ?>
          <?php endif; ?>
        </article>
      </div>
      <?php get_template_part('template-parts/parts-single_pagination', 'pagination'); ?>
      <div class="c-btn-container">
        <div class="c-btn --color-01">
          <a class="c-btn-link" href="<?php echo esc_url( home_url() ); ?>/news/">
            <span class="c-btn-lbl">NEWS</span>
            <span class="c-btn-icon"></span>
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
</div>
</div>
</div>
</div>
</body>
</html>