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

	<section class="container">
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
						<h3 class="hide-heading">Blog Content</h3>
						<?php
						if (function_exists('yoast_breadcrumb')) {
							yoast_breadcrumb('<p class="breadcrumbs" id="breadcrumbs">', '</p>');
						}
						?>
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
								};
								?>
							</div>
						</div>
						<div class="blog-content">
							<div class="d-flex flex-wrap">
								<div class="col-12 col-md-10">
									<?php the_content(); ?></div>
								<div class="col-12 col-md-2">
									<!-- Ad -->
									<?php
										if (is_active_sidebar('banner-sidebar')) {
											dynamic_sidebar('banner-sidebar');
										};
									?>
								</div>
								
							</div>
							<div class="social-icon-share-block">
								<p><strong>Share the Posts&#33;</strong></p>
								<ul class="social-icon-share-list">
									<li>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(get_the_ID()); ?>"
											target="_blank">
											<img src="<?php echo get_theme_file_uri('/img/facebook-copy.png'); ?>" alt="Share on Facebook">
										</a>
									</li>
									<li>
										<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>&text=<?php echo urlencode(get_the_title()); ?>"
											target="_blank">
											<img src="<?php echo get_theme_file_uri('/img/twitter.png'); ?>" alt="Share on X">
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<img src="<?php echo get_theme_file_uri('/img/instagram-copy.png'); ?>" alt="Share on Instagram">
										</a>
									</li>
									<li><a
											href="https://mail.google.com/mail/?view=cm&fs=1&to=&su=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink(get_the_ID())); ?>"
											target="_blank">
											<img src="<?php echo get_theme_file_uri('/img/google.png'); ?>" alt="Share via Gmail">
										</a></li>
									<li>
										<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>&text=<?php echo urlencode(get_the_title()); ?>"
											target="_blank">
											<img src="<?php echo get_theme_file_uri('/img/twitter-1.png'); ?>" alt="Share on X">
										</a>
									</li>
									<li>
										<a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>&media=<?php echo urlencode(get_theme_file_uri('/img/pinterest.png')); ?>&description=<?php echo urlencode(get_the_title()); ?>"
											target="_blank">
											<img src="<?php echo get_theme_file_uri('/img/pinterest.png'); ?>" alt="Share on Pinterest">
										</a>
									</li>
									<li>
										<a href="https://t.me/share/url?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>&text=<?php echo urlencode(get_the_title()); ?>"
											target="_blank">
											<img src="<?php echo get_theme_file_uri('/img/send.png'); ?>" alt="Share on Telegram">
										</a>
									</li>
									<li>
										<a href="">
											<img src="<?php echo get_theme_file_uri('/img/share.png'); ?>" alt="Share">
										</a>
									</li>
								</ul>
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
								<a href="<?php echo site_url('./vacations') ?>" class="button-primary__vacation-link">All About
									Vacations</a>
							</div>
						</div>
						<!-- <div class="horizontal_line"></div> -->
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

				<!-- Ad -->
				<?php
					if (is_active_sidebar('marketing-banner-main')) {
						dynamic_sidebar('marketing-banner-main');
					};
				?>

				<!-- template-part -->
				<?php get_template_part('template-parts/display-category-posts'); ?>

				<section>
					<div class="container">
						<h3>Jennifer's Travel Blog</h3>
						<?php display_category_posts('', 3); ?>
						<div class="link-main-category">
							<a href="<?php echo esc_url(home_url('/blog')); ?>">Check out more<span><i
										class="bi bi-arrow-right" aria-label="check out more travel blog"></i></span></a>
						</div>
					</div>
				</section>

				<?php if (is_active_sidebar('instagram')) {
					dynamic_sidebar('instagram');
				}
				?>

				<?php if (is_active_sidebar('subscription-main')): ?>
					<?php dynamic_sidebar('subscription-main'); ?>
				<?php endif; ?>

			<?php endwhile; // End of the have_posts() loop 
			?>
		<?php endif; ?>
	</section>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
