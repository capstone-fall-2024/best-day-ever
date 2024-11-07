<footer id="colophon" class="site-footer">

	<div class="site-info">

		<div class="group">

			<div class="site-footer__col-one">

				<?php if (is_active_sidebar('footer-widget1')) {
					dynamic_sidebar('footer-widget1');
				}
				; ?>
			</div>

			<div class="site-footer__col-two">
				<?php
				wp_nav_menu(array(
					"theme_location" => "footer-1",
				));
				?>
			</div>

			<div class="site-footer__col-three">
				<?php
				wp_nav_menu(array(
					"theme_location" => "footer-2",
				));
				?>
			</div>


			<div class="site-footer__col-four">
				<p>Additional Info</p>
				<?php
				wp_nav_menu(array(
					"theme_location" => "footer-3",
				));
				?>

			</div>

			<div class="site-footer__col-five">
				<?php
				if (is_active_sidebar("footer-widget3")) {
					dynamic_sidebar("footer-widget3");
				}
				?>
			</div>
		</div>

		<div class="footer_copy_right">
			<p>&commat; 2024 Best Day Ever Vacations by Jen</p>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>

</html>