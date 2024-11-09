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
				<div class="single-blog-banner">
					<div class="img-background">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						<?php endif; ?>
						<div class="overlay"></div>
						<div class="single-banner-content">
							<p>Blog</p>
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
				</div>

				<article class="single-blog">
					<div class="main-content">
						<h3 class="hide-heading">Heading 3 - Main Blog</h3>
						<div class="blogger-banner">
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
							</div>

							<div class="blog-tag">
								<p><?php the_time('F j, Y'); ?></p>
								<?php
								$tags = get_the_tags();

								if ($tags) {
									$formatted_tags = [];

									foreach ($tags as $tag) {
										$formatted_tag = ucfirst(str_replace(' ', '-', $tag->name));
										$formatted_tags[] = '<i>' . $formatted_tag . '</i>';
									}

									echo implode('-', $formatted_tags);
								}
								;
								?>
							</div>
						</div>
						<div class="blog-content">
							<div>
								<?php the_content(); ?>
								<?php if (is_active_sidebar('social-media-share-icon')): ?>
									<?php dynamic_sidebar('social-media-share-icon'); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</article>

				<div class="inspired-section">
					<h3 class="inspired-heading">Inspired? Check Out More!</h3>
					<div class="inspired-content">
						<div class="vacation-option">
							<p>Explore our vacation options and get a quote.</p>
							<div>
								<a href="<?php echo site_url('./vacations') ?>" class="button-primary__vacation-link">All about
									Vacations</a>
							</div>
						</div>
						<div class="horizontal_line"></div>
						<div class="vertical_line"></div>
						<div class="travel-advice">
							<p>Get expert travel advice from Jen.</p>
							<div>
								<a href="<?php echo site_url('./contact-jen') ?>" class="button-primary__advice-link">Travel Advice</a>
							</div>
						</div>
					</div>
				</div>

				<?php if (is_active_sidebar('meet-jen')): ?>
					<?php dynamic_sidebar('meet-jen'); ?>
				<?php endif; ?>

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
