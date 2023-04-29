<div class="c-pager-list-container">
  <ol class="c-pager-list">
    <?php $nextpost = get_adjacent_post(false, '', false);?>
    <?php
      // echo '<pre>';
      // print_r($nextpost);
      // echo '</pre>';
    ?>
    <?php if ($nextpost) :  ?>
    <li class="list__item --next">
      <div class="item__contents">
        <a href="<?php echo get_permalink($nextpost->ID); ?>">
          <span class="item__img"><?php echo get_the_post_thumbnail($nextpost->ID); ?></span>
          <span class="item__txt">«<?php echo esc_attr($nextpost->post_title); ?></span>
        </a>
      </div>
    </li>
    <?php endif; ?>
    <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
    <li class="list__item --prev">
      <div class="item__contents">
        <a href="<?php echo get_permalink($prevpost->ID); ?>">
          <span class="item__img"><?php echo get_the_post_thumbnail($prevpost->ID); ?></span>
          <span class="item__txt"><?php echo esc_attr($prevpost->post_title); ?>»</span>
        </a>
      </div>
    </li>
    <?php endif; ?>
  </ol>
</div>