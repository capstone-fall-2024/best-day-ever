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

		<section class="error-404 not-found container">
			<div>
				<div><img src="<?php echo get_theme_file_uri('/img/404-bg.png') ?>" alt="Two lost people peaking around a corner."></div>
				<div>
					<h2 class="page-title"><?php esc_html_e( 'Error 404', 'bdev_by_jen' ); ?></h2>
					<div class="page-content">
						<p><?php esc_html_e( 'Hm, it looks like there isn\'t anything in here.', 'bdev_by_jen' ); ?></p>
						<p><?php esc_html_e( 'You should probably head back until it gets fixed.', 'bdev_by_jen' ); ?></p>
						<a class="btn-primary" href="<?php echo site_url('/'); ?>">Back Home</a>
					</div><!-- .page-content -->
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
