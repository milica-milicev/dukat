<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NM_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<!-- <p class="site-footer__copyright">&copy; <?php echo date('Y'); ?> All Rights Reserved.</p> -->
			 <div class="site-footer__container">
				<div class="site-footer__left">
					<div class="site-footer__left-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-lgoo.svg" alt="">
					</a>
					</div>
				</div>
				<div class="site-footer__right">
					<div class="site-footer__right-container">
						<div class="site-footer__right-item">
							<span>Stranice</span>
							<ul>
								<li><a href="javascript:;">Početna</a></li>
								<li><a href="javascript:;">Blog</a></li>
								<li><a href="javascript:;">O nama</a></li>
								<li><a href="javascript:;">Aktuelnosti</a></li>
								<li><a href="javascript:;">Kontakt</a></li>
							</ul>
						</div>
						<div class="site-footer__right-item">
							<span>Kategorije</span>
							<ul>
								<li><a href="javascript:;">Hladno Ceđena ulja</a></li>
								<li><a href="javascript:;">Prirodna Kozmetika</a></li>
								<li><a href="javascript:;">Ostali proizvodi</a></li>
							</ul>
						</div>
						<div class="site-footer__right-item">
							<span>Korisne informacije</span>
							<ul>
								<li><a href="javascript:;">Isporuka</a></li>
								<li><a href="javascript:;">Povrat</a></li>
								<li><a href="javascript:;">Garancija</a></li>
								<li><a href="javascript:;">Skladištenje</a></li>
							</ul>
						</div>
						<div class="site-footer__right-item">
							<span>Stranice</span>
							<ul>
								<li><a href="javascript:;">Početna</a></li>
								<li><a href="javascript:;">Blog</a></li>
								<li><a href="javascript:;">O nama</a></li>
								<li><a href="javascript:;">Aktuelnosti</a></li>
								<li><a href="javascript:;">Kontakt</a></li>
							</ul>
						</div>
					</div>
				</div>
			 </div>
			 <p class="site-footer__copyright">&copy; <?php echo date('Y'); ?> All Rights Reserved.</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
