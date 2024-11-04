<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

?>

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
				<?php
				if (is_active_sidebar("footer-widget2")) {
					dynamic_sidebar("footer-widget2");
				}
				?>
				<!--		<p>Additional Info</p>
				<a href="#">Disney Vacations</a>
				<a href="#">Norwegian Cruises</a> -->
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