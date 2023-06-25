<header id="g-header" class="g-header">
  <p class="g-header-logo">
		<a class="g-header-logo__link" href="<?php echo esc_url( home_url() ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="<?php bloginfo('name'); ?>のロゴ">
		</a>
	</p>
  <div class="c-hamburger-menu js-open-hamburger-menu">
		<p class="c-hamburger-menu__ttl"></p>
		<div class="c-hamburger-menu__line --line-1"></div>
    <div class="c-hamburger-menu__line --line-2"></div>
    <div class="c-hamburger-menu__line --line-3"></div>
	</div>
  <div class="g-header-sns">
		<ul class="g-header-sns-list">
			<li class="list__item">
				<a class="item__link" href="#" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/sns/instagram.svg" alt="Instagramのアイコン">
				</a>
			</li>
      <li class="list__item">
        <a class="item__link" href="#" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/sns/facebook.svg" alt="FaceBookアイコン">
        </a>
      </li>
		</ul>
	</div>
  <nav class="g-nav">
		<ul class="g-nav-list">
			<li class="list__item">
				<a class="item__link" href="<?php echo esc_url( home_url() ); ?>">
					<span class="item__lbl">TOP</span>
				</a>
			</li>
			<li class="list__item">
				<a class="item__link" href="<?php echo esc_url( home_url() ); ?>/concept/">
					<span class="item__lbl">CONCEPT</span>
				</a>
			</li>
			<li class="list__item">
				<a class="item__link" href="<?php echo esc_url( home_url() ); ?>/work/">
					<span class="item__lbl">WORK</span>
				</a>
			</li>
      <li class="list__item">
        <a class="item__link" href="<?php echo esc_url( home_url() ); ?>/news/">
          <span class="item__lbl">NEWS</span>
        </a>
      </li>
      <?php if (is_page('concept')) : ?>
      <li class="list__item">
        <a class="item__link js-scroll" href="#about">
          <span class="item__lbl">ABOUT</span>
        </a>
      </li>
      <?php else : ?>
			<li class="list__item">
				<a class="item__link" href="<?php echo esc_url( home_url() ); ?>/concept/#about">
					<span class="item__lbl">ABOUT</span>
				</a>
			</li>
      <?php endif; ?>
      <li class="list__item">
        <a class="item__link" href="<?php echo esc_url( home_url() ); ?>/blogs/">
          <span class="item__lbl">BLOG</span>
        </a>
      </li>
      <?php if ( is_front_page() ) : ?>
      <li class="list__item">
        <a class="item__link <?php if ( is_front_page() ) : ?>js-scroll<?php endif; ?>" href="#g-contact">
          <span class="item__lbl">CONTACT</span>
        </a>
      </li>
      <?php else : ?>
      <li class="list__item">
        <a class="item__link" href="<?php echo esc_url( home_url() ); ?>/#g-contact">
          <span class="item__lbl">CONTACT</span>
        </a>
      </li>
      <?php endif; ?>
		</ul>
	</nav>
</header>