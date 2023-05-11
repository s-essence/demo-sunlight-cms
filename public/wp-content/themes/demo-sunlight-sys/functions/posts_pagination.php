<?php
function custom_the_posts_pagination($template) {
	$template = '
  <div class="c-posts-pagination-container" >
    <nav class="c-posts-pagination %1$s" role="navigation">
      %3$s
    </nav>
  </div>';
	return $template;
}
add_filter('navigation_markup_template', 'custom_the_posts_pagination');