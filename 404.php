<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="">
				<div><img src="" alt="Two lost people peaking around a corner."></div>
				<div>
					<h1 class="page-title"><?php esc_html_e( 'Error 404', 'bdev_by_jen' ); ?></h1>
					<div class="page-content">
						<p><?php esc_html_e( 'Hm, it looks like there isn\'t anything in here.', 'bdev_by_jen' ); ?></p>
						<p><?php esc_html_e( 'You should probably head back until it gets fixed.', 'bdev_by_jen' ); ?></p>
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
						<!-- wp:button -->
						<button value="Back Home" class="wp-block-button" style="font-style:normal;font-weight:500"><a class="wp-block-button__link wp-element-button" href=""></a></button>
						<!-- /wp:button --></div>
						<!-- /wp:buttons --></div>
					</div><!-- .page-content -->
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
