<footer id="g-footer" class="g-footer">
  <div class="g-footer-bg"></div>
  <div class="c-inner">
    <div class="g-footer-blk --top">
			<div class="g-footer-logo-container">
				<p class="g-footer-logo-name">Sun Light株式会社</p>
				<p class="g-footer-logo-lead">起業家・経営者のための電気コスト削減を</p>
			</div>
			<div class="g-footer-address">
				<div class="g-footer-address-item">
					<p class="g-footer-address-txt">〒540-0036 <br class="u-show-sp">大阪市中央区交野2-2-20朱雀ビル2階</p>
					<p class="g-footer-address-txt">TEL : <a href="tel:0000000000">06-6689-1919</a></p>
				</div>
			</div>
		</div>
    <nav class="g-footer-nav">
			<ul class="g-footer-nav-list">
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
  </div>
</footer>
<?php wp_footer(); ?>