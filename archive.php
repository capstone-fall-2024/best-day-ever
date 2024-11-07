<?php get_header(); ?>
<main id="primary" class="site-main">
	<section class="main-section">
		<h2>Blog</h2>
		<section class="banner-for-section">
			<h3>Banner</h3>
			<div class="banner">
				<div class="banner_container">
					<div class="banner-section">
						<?php
						$banner_category = new WP_Query(array(
							'category_name' => 'Featured Post',
							'posts_per_page' => 1
						));

						if ($banner_category->have_posts()):
							while ($banner_category->have_posts()):
								$banner_category->the_post();
								?>
								<div><span class="span1">Blog</span><span class="span2">Featured Post</span></div>
								<h4><?php the_title(); ?></h4>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>">View Post</a>
							</div>
							<div class="image-banner-section">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()): ?>
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
									<?php endif; ?>
								</a>
							</div>
						<?php endwhile;
						else: ?>
						<p>No posts found in this category.</p>
					<?php endif;
						// Reset Post Data
						wp_reset_postdata(); ?>
				</div>
			</div>
		</section>

		<section class="latest-articles">
			<div class="container">
				<h3>
					<?php
					if (is_category()) {
						single_cat_title();
						echo ' Travel';
					}

					if (is_author()) {
						echo 'Posts by';
						the_author();
					}
					?>

				</h3>
				<div class="row">
					<?php while (have_posts()):
						the_post(); ?>
						<div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-5"> <!-- Responsive columns -->
							<article class="post-item">
								<div class="image-post">
									<a href="<?php the_permalink(); ?>">
										<?php if (has_post_thumbnail()): ?>
											<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
												alt="<?php the_title(); ?>" loading="lazy">
										<?php endif; ?>
									</a>
								</div>
								<div class="content-post">
									<a href="<?php the_permalink(); ?>">
										<h4><?php the_title(); ?></h4>
									</a>
								</div>
								<div class="btn-post">
									<a href="<?php the_permalink(); ?>" class="btn btn-primary">View More</a>
								</div>
							</article>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="pagination">
					<?php echo paginate_links(); ?>
				</div>
			</div>
		</section>
		<!-- Function to display category with limit 3 post (disney/cruise/all-inclusive,etc) -->

		<!-- Subscription-main -->
		<?php if (is_active_sidebar('subscription-main')): ?>

			<?php dynamic_sidebar('subscription-main'); ?>

		<?php endif; ?>


	</section>
</main>
<?php get_footer(); ?>