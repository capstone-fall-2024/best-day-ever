<?php

/**
 * The template for displaying All Inclusive and More Page
 *
 * This is the template that displays All Inclusive and More Page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

<main id="primary" class="site-main all-inclusive-page">
	<section>
		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>

		<?php the_content(); ?>

		<!-- All Inclusive Section -->
		<section class="all-inclusive-intro" id="all-inclusive">
			<div class="container">
				<h3>Our All Inclusive Trips</h3>
				<div>
					<img srcset="<?php echo get_theme_file_uri('/img/surfing-sm.webp') ?> 450w, <?php echo get_theme_file_uri('/img/surfing-lg.webp') ?> 650w" class="img-rounded" alt="Someone surfing and hitting a wave." width="650px" height="433px">
				</div>
				<div>
					<p>We don't just do Disney and Cruises! We can plan vacations all around the world! Whether you are looking for a beautiful beach vaycay, a European tour, or even something unique like Antarctica, we can help you plan the vacation you want. We excel at planning vacations specific to you, no matter where you want to travel. We are continuously learning about new and exciting destinations so you will never run out of options!</p>
					<a href="<?php echo site_url('/quote'); ?>" class="btn-primary">Get a Quote</a>
				</div>
			</div>

			<!--All Inclusive Cards -->
			<?php
				$posts_query = new WP_Query(
					array(
						'post_type' => 'all-inclusive-trip'
					)
				);
			?>
			<?php if ($posts_query->have_posts()): ?>
			<?php while ($posts_query->have_posts()): $posts_query->the_post(); ?>
				<section class="container">
					<div class="vacation-card">
						<div>
							<h4><?php echo the_title(); ?></h4> 
							<div class="dashed-line"></div>
						</div>
						<div>
							<div><img src="<?php echo esc_url(get_field('vacation_image')['url']); ?>" alt="Featured image of <?php echo the_title(); ?>" loading="lazy"></div>
							<div>
								<p><?php echo get_field('vacation_description'); ?></p>
								<div class="card-buttons">
									<a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<div class="container text-center">
					<p>We currently don't have any package options for this right now.</p>
					<p>Check back later or <a href="<?php echo site_url('/contact-jen'); ?>">Contact Me</a> if you're looking for anything specific!</p>
				</div>
			<?php endif; ?><!--End All Inclusive Cards -->
		</section><!-- End All Inclusive Section -->


		<!-- Unique Section -->
		<section class="unique-intro" id="unique-vacations">
			<div class="container">
				<h3>Theme Parks, Unique Vacations, & More</h3>
				<div>
					<img srcset="<?php echo get_theme_file_uri('/img/a-girl-playing-at-the-beach-sm.webp') ?> 450w, <?php echo get_theme_file_uri('/img/a-girl-playing-at-the-beach-lg.webp') ?> 650w" class="img-rounded" alt="A little girl playing at the beach in a duck-themed floatie." width="650px" height="432px">
				</div>
				<div>
					<a href="<?php echo site_url('/quote'); ?>" class="btn-primary">Get a Quote</a>
				</div>
			</div>

			<!-- Theme Park Cards -->
			<?php
				$posts_query = new WP_Query(
					array(
						'post_type' => array('theme-park', 'other-vacation')
					)
				);
			?>
			<?php if ($posts_query->have_posts()): ?>
			<?php while ($posts_query->have_posts()): $posts_query->the_post(); ?>
				<section class="container">
					<div class="vacation-card">
						<div>
							<h4><?php echo the_title(); ?></h4> 
							<div class="dashed-line"></div>
						</div>
						<div>
							<div><img src="<?php echo esc_url(get_field('vacation_image')['url']); ?>" alt="Featured image of <?php echo the_title(); ?>" loading="lazy"></div>
							<div>
								<p><?php echo get_field('vacation_description'); ?></p>
								<div class="card-buttons">
									<a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<div class="container text-center">
					<p>We currently don't have any package options for this right now.</p>
					<p>Check back later or <a href="<?php echo site_url('/contact-jen'); ?>">Contact Me</a> if you're looking for anything specific!</p>
				</div>
			<?php endif; ?>
		</section><!-- End Unique Section -->


		<!-- Testimonials -->
		<section class="testimonials">
			<div class="container testimonials-inner">
				<h3>What Our Travelers Are Saying</h3>
				<?php echo do_shortcode('[testimonials_slider]'); ?>
			</div>
		</section>

		<!-- Blog Query Loops -->
		<?php
		get_template_part('template-parts/display-category-posts');
		get_template_part('template-parts/count-blog-posts');

		if (is_page('disney')):
			if (count_blog_posts('disney') > 0): ?>
				<section id="disney">
					<div class="container">
						<h3>Disney Travel Blog</h3>
						<?php display_category_posts('disney', 3); ?>
						<div class="link-main-category">
							<a href="<?php echo esc_url(get_category_link(get_cat_ID('disney'))); ?>">Check out more<span><i
										class="bi bi-arrow-right"></i></span></a>
						</div>
					</div>
				</section>
			<?php endif;
		elseif (is_page('cruises')):
			if (count_blog_posts('cruise') > 0): ?>
				<section id="cruise">
					<div class="container">
						<h3>Cruise Travel Blog</h3>
						<?php display_category_posts('cruise', 3); ?>
						<div class="link-main-category">
							<a href="<?php echo esc_url(get_category_link(get_cat_ID('cruise'))); ?>">Check out more<span><i
										class="bi bi-arrow-right"></i></span></a>
						</div>
					</div>
				</section>
			<?php endif;
		elseif (is_page('honeymoon-wedding')):
			if (count_blog_posts('honeymoon-and-wedding') > 0): ?>
				<section id="honeymoon-and-wedding">
					<div class="container">
						<h3>Honeymoon &amp; Wedding Travel Blog</h3>
						<?php display_category_posts('honeymoon-and-wedding', 3); ?>
						<div class="link-main-category">
							<a href="<?php echo esc_url(get_category_link(get_cat_ID('honeymoon and wedding'))); ?>">Check out
								more<span><i class="bi bi-arrow-right"></i></span></a>
						</div>
					</div>
				</section>
			<?php endif;
		elseif (is_page('all-inclusive')):
			if (count_blog_posts('all-inclusive, miscellaneous') > 0): ?>
				<section id="all-inclusive">
					<div class="container">
						<h3>All Inclusive &amp; More Travel Blog</h3>
						<?php display_category_posts('all-inclusive, miscellaneous', 3); ?>
						<div class="link-main-category">
							<a href="<?php echo esc_url(get_category_link(get_cat_ID('all inclusive'))); ?>">Check out more<span><i
										class="bi bi-arrow-right"></i></span></a>
						</div>
					</div>
				</section>
			<?php endif;
		else: ?>
			<section>
				<div class="container">
					<h3>Jennifer's Travel Blog</h3>
					<?php display_category_posts('', 3); ?>
					<div class="link-main-category">
						<a href="<?php echo esc_url(home_url('/blog')); ?>">Check out more<span><i
									class="bi bi-arrow-right"></i></span></a>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<!-- Subscription -->
		<?php if (is_active_sidebar('subscription-main')) {
			dynamic_sidebar('subscription-main');
		}
		?>


	</section>



</main><!-- #main -->

<?php
get_sidebar();
get_footer();
