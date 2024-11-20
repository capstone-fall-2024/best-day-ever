<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Nothing Found', 'bdev_by_jen'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')):

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bdev_by_jen'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);

		elseif (is_search()):
			?>

			<p>
				<?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bdev_by_jen'); ?>
			</p>

			<a href="<?php echo site_url('/') ?>">Back Home</a>

			<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->