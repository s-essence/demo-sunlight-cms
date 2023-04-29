<div class="c-archive">
  <p class="c-archive-ttl">アーカイブ</p>
    <div class="c-archive-blk-wrap">

    <?php
    // アーカイブ用に投稿一覧を取得し、アーカイブ用にデータを調整
    $archive_args = array(
      'post_type' => 'blogs', // 任意のポストタイプを指定
      'posts_per_page' => -1, // 全件取得
    );
    $archive_query = new WP_Query($archive_args);
    $months = array(); // 初期設定用の配列（月別の連想配列を入れる）
    
    if ($archive_query->have_posts()): // 投稿があれば表示
      while ($archive_query->have_posts()) :
        $archive_query->the_post();
        $date = get_post_time('Y.n'); // この値が月の表示
        // 既に年月用の配列はあるので、該当する月の配列に入れていく
        $months[$date][get_the_ID()] = array(
          'time' => get_post_time('m.d'), // 記事の時間
          'url' => esc_url( apply_filters('the_permalink',get_permalink())), // 記事のURL
          'title' => esc_html( get_the_title()), // 記事のタイトル
        );
      endwhile;
    ?>

    <?php foreach ($months AS $title => $monthly_post): //月別記事一覧を表示 ?>
      <?php if (!empty($monthly_post)): ?>
      <div class="c-archive-blk">
        <p class="c-archive-date"><?php echo $title; ?></p>
        <ul class="c-archive-list">
          <?php foreach ($monthly_post AS $item) : ?>
          <li class="list__item">
            <a class="item__link" href="<?php echo $item['url']; ?>">
              <span class="item__icon"></span>
              <div class="item__contents">
                <span class="item__date"><?php echo $item['time']; ?></span>
                <span class="item__ttl"><?php echo $item['title']; ?></span>
              </div>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>