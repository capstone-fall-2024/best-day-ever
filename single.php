<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	$author_id = get_the_author_meta('ID');
	?>

	<section>
		<?php
		if (have_posts()):
			while (have_posts()):
				the_post();
				?>
				<div class="single-banner">
					<div class="single-banner__bg-image"></div>
					<div class="single-banner-content">
						<p>Blog</p>
						<h2><?php the_title(); ?></h2>
					</div>
				</div>

				<article class="blog">
					<h3>Heading 3 - Main Blog</h3>
					<div class="profile-blogger">
						<div class="profile-img-blogger">
							<?php echo get_avatar($author_id, 96); ?>
						</div>
						<div class="info-blogger">
							<p>By: <?php echo get_the_author(); ?></p>

							<?php
							$user_background = get_field('user_background', 'user_' . $author_id);
							if (!empty($user_background)) { ?>
								<p><?php echo $user_background; ?></p>
							<?php } ?>
						</div>

						<div class="blog-category">
							<p><?php the_time('F j, Y'); ?></p>
							<?php if (has_category()): ?>
								<p><?php the_category(' - '); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="blog-content">
						<?php the_content(); ?>
					</div>
				</article>

				<section>
					<h3>Jennifer's Travel Blog</h3>

					<?php
					function display_category_posts($category, $limit = 3)
					{
						$query = new WP_Query(array(
							'posts_per_page' => $limit
						));
						if ($query->have_posts()):
							while ($query->have_posts()):
								$query->the_post(); ?>
								<div class="posts">
									<article>
										<div class="image-posts">
											<a href="<?php the_permalink(); ?>">
												<?php if (has_post_thumbnail()): ?>
													<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
												<?php endif; ?>
											</a>
										</div>
										<div class="content-posts">
											<a href="<?php the_permalink(); ?>">
												<h4><?php the_title(); ?></h4>
											</a>
										</div>
									</article>
									<div class="btn-posts">
										<a href="<?php the_permalink(); ?>">View More</a>
									</div>
								</div>
							<?php endwhile;
						else: ?>
							<p>No posts found in this category.</p>
						<?php endif;
						wp_reset_postdata();
					}
					?>
					<?php display_category_posts('3'); ?>
					<div>
						<a href="<?php echo esc_url(home_url('/blog')); ?>">Check out more</a>
					</div>
				</section>
				<section>
					<h3>Instagram</h3>
				</section>

				<?php if (is_active_sidebar('subscription-main')): ?>
					<?php dynamic_sidebar('subscription-main'); ?>
				<?php endif; ?>

			<?php endwhile; // End of the have_posts() loop ?>
		<?php endif; ?>
	</section>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
