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

					<?php while (have_posts()):
						the_post(); ?>
						<div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-5"> <!-- Responsive columns -->
							<article class="blog-card">

								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()): ?>
										<img class="blog-card__card-img" src="<?php echo get_the_post_thumbnail_url(); ?>"
											alt="<?php the_title(); ?>" loading="lazy">
									<?php else: ?>
										<div class="blog-card__card-img"></div> <!-- Placeholder for missing image -->
									<?php endif; ?>
								</a>

								<div class="content-post">
									<a class="content-post__title-post" href="<?php the_permalink(); ?>">
										<h4><?php the_title(); ?></h4>
									</a>

									<div class="content-post__btn-post">
										<a href="<?php the_permalink(); ?>" class="button-blog-card">View More</a>
									</div>
								</div>

							</article>
						</div>
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