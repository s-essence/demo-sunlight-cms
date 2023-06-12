<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<?php get_template_part('inc/head', 'head'); ?>
</head>
<body id="page_user_data" class="second_page other_page">
<?php get_template_part('inc/body_action'); ?>
<div <?php body_class() ?>>
<div id="g-container" class="g-container">
<div id="g-container__inner" class="g-container__inner">
<div class="g-container__bg"></div>
<?php get_header(); ?>

<div class="c-contents-container">
  <section id="mv" class="mv c-section">
    <div class="c-outer">
      <div class="c-contents">
        <div class="c-main-img"></div>
      </div>
      <div class="c-slide-cp-container">
        <h1 class="c-slide-cp">
          <span class="c-slide-cp__inner"><?php the_title(); ?></span>
        </h1>
      </div>
    </div>
  </section>

  <section id="section-<?php the_ID(); ?>" class="c-section">
    <div class="c-contents-container">
      <div class="c-outer">
        <div class="c-inner">
          <div class="c-contents --concept">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( have_posts() ) : ?> 
              <?php
              while( have_posts() ) :
                the_post();
              ?>
                <h1 class="c-lead-ttl"><?php the_content(); ?></h1>
              <?php endwhile; ?>
            <?php endif; ?>
            </article>          
          </div>
          <div class="c-utility-btn-outer --white">
            <div class="c-utility-btn-container --prev">
              <a class="c-utility-btn" href="/">
                <span class="c-utility-btn__lbl">TOP</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
</div>
</div>
</div>
</div>
</body>
</html>