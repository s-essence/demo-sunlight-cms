<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<?php get_template_part('inc/head', 'head'); ?>
</head>
<body id="page_user_data" class="second_page other_page notFound_page">
<?php get_template_part('inc/body_action'); ?>
<div <?php body_class() ?>>
<div id="g-container" class="g-container">
<div id="g-container__inner" class="g-container__inner">
<div class="g-container__bg"></div>
<?php get_header(); ?>

<div class="c-contents-container">
  <section id="mv" class="mv c-section">
    <div>
      <ul class="mv-list">
        <li class="list__item --01">
          <div class="item__contents">
            <div class="item__photo">
              <div class="item__photo-bg"></div>
            </div>
            <div class="mv-cp-container">
              <h1 class="mv-cp">
                <span class="mv-cp__inner --01">404</span>
              </h1>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section id="section-404" class="c-section article">
    <div class="c-inner">
      <div class="c-contents">
        <article>
          <div class="c-404-container">
            <div class="c-404-contents">
              <h1 class="c-404-ttl">お探しのページが<br class="u-show-sp">見つかりません。</h1>
              <p class="c-404-des">一時的にアクセスできない状況にあるか、<br class="u-show-sp">移転もしくは削除された可能性があります。</p>
            </div>
          </div>
        </article>
        <div class="c-accent-btn-container">
          <a class="c-accent-btn" href="<?php echo esc_url( home_url() ); ?>/">
            <span class="c-accent-btn__lbl">トップへ</span>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
</div>
</div>
</div>
</body>
</html>