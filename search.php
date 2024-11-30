<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()): ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'bdev_by_jen'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->

		<section class="latest-articles">
			<div class="container">
				<div class="row">

					<?php
					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<p class="breadcrumbs" id="breadcrumbs">', '</p>');
					}
					?>

					<?php while (have_posts()):
						the_post(); ?>

						<ol class="search-result">
							<li>
								<a class="content-post__title-post" href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
								<p>
									<?php
									$meta_description = get_post_meta(get_the_ID(), 'meta_description', true);
									if (!$meta_description) {
										$meta_description = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); // Yoast SEO
									}

									if (!$meta_description) {
										$meta_description = get_post_meta(get_the_ID(), '_rank_math_description', true); // Rank Math
									}

									if (!$meta_description) {
										$meta_description = get_the_excerpt();
									}

									if (strlen($meta_description) > 150) {
										$meta_description = wp_trim_words($meta_description, 30, '...');
									}
									?>
									<?php echo esc_html($meta_description) ?>
								</p>
							</li>
						</ol>


					<?php endwhile;
	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>
			</div>
			<div class="pagination">
				<?php echo paginate_links(); ?>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php

get_sidebar();
get_footer();

?>