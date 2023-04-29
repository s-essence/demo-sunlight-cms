<?php
if ($args && $args['post_type']) {
  $posts_args = $args;
} else {
  $posts_args = array(
    'post_type' => 'post',
    'paged' => get_query_var('paged')
  );
}

$posts_query = new WP_Query($posts_args);
// echo '<pre>';
// print_r($posts_query);
// echo '</pre>';

if ($posts_query->have_posts()) :
?>
<ul class="c-news-list">
  <?php while ($posts_query->have_posts()) : ?>
  <?php $posts_query->the_post(); ?>
  <li class="list__item">
    <a class="item__link" href="<?php the_permalink(); ?>">
      <div class="item__contents">
        <div class="item__header">
          <div class="item__photo">
            <?php if (has_post_thumbnail()) :  ?>
              <?php the_post_thumbnail('page_eyecatch'); ?>
            <?php else : ?>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/top/news/img_dummy.jpg" alt="サムネイル指定なしのイメージ画像">
            <?php endif; ?>
          </div>
        </div>
        <div class="item__body">
          <div class="item__head">
            <?php
            $blogs_terms = NULL;
            $categories = NULL;
            $category = NULL;
            if ($args && $args['post_type'] !== 'post') {
              $blogs_terms = get_the_terms(get_the_ID(), 'blogs-type', '', ', ');
              if (!empty($blogs_terms)) : if (!is_wp_error($blogs_terms)) :
                $category = $blogs_terms[0]->name;
              endif; endif;
            } else {
              $categories = get_the_category();
              $category = $categories[0]->name;
            }
            if ($category) : ?>
            <p class="item__category"><?php echo esc_html($category); ?></p>
            <?php endif; ?>
            <p class="item__date"><?php echo get_the_date(); ?></p>
          </div>
          <p class="item__ttl"><?php the_title(); ?></p>
          <p class="item__des"><?php echo esc_html(get_the_excerpt()); ?></p>
        </div>
      </div>
    </a>
  </li>
  <?php endwhile; ?>
</ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>