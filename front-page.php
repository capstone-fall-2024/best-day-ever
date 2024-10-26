<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package best_day_ever_vacations
 */

get_header();
?>
<main id="primary" class="site-main">
	<!-- wp:heading -->
	<?php the_title( '<h1 class="entry-title d-none">', '</h1>' ); ?>
	<!-- /wp:heading -->
	<div class="actual-content">
		<?php the_content(); ?>
	
		<section>
			<!-- wp:heading -->
			<h2 class="wp-block-heading has-dark-green-color has-text-color has-link-color" style="font-size:48px;">Jennifer's Travel Blog</h2>
			<!-- /wp:heading -->
			<div class="col-12 d-flex flex-wrap justify-content-center justify-content-lg-start">
				<?php
					$posts_query = new WP_Query(
						array(
							'post_type' => 'post',
							"posts_per_page" => 3
				)); ?>
				<?php if ($posts_query->have_posts()): ?>
					<?php while ($posts_query->have_posts()): ?>
						<div class="col-sm-6 col-lg-3">
							<?php $posts_query->the_post(); ?>
							<div class="py-5 px-2">
								<div class="p-4">
									<?php
										$cat = get_the_category();
										$url = get_category_link( $cat[0]->term_id );
										$name = $cat[0]->name;
									?>
									<div class="text-center">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata();
				endif; ?>
			</div>
		</section>
	</div>
</main><!-- #main -->

<?php
get_footer();
