<?php

/**
 * The template for displaying Honeymoon & Wedding Page
 *
 * This is the template that displays Honeymoon & Wedding Page.
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

<main id="primary" class="site-main hw-page">
	<section>
		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>

		<?php the_content(); ?>

		<!-- Wedding Section -->
		<section class="wedding-intro" id="wedding">
			<div class="container">
				<h3>Wedding Packages</h3>
				<div>
					<img srcset="<?php echo get_theme_file_uri('/img/wedding-packages-sm.webp') ?> 450w, <?php echo get_theme_file_uri('/img/wedding-packages-lg.webp') ?> 650w" class="img-rounded" alt="A bride and groom linking arms as they are getting married." width="650px" height="433px">
				</div>
				<div>
					<p>Honeymoons and Destination weddings are as unique as the couples themselves. We help you find the destinations of your dreams. Whether you would like to be married on a cruise ship, Las Vegas, Tropical or something completely unique we will make your special day perfect! We work with you and our vendor's wedding specialists so that you don't ever have to worry. </p>
					<a href="<?php echo site_url('/quote'); ?>" class="btn-primary">Get a Quote</a>
				</div>
			</div>

			<!--Wedding Cards -->
			<?php
				$posts_query = new WP_Query(
					array(
						'post_type' => 'wedding-trip'
					)
				);
			?>
			<?php if ($posts_query->have_posts()): ?>
			<?php while ($posts_query->have_posts()): $posts_query->the_post(); ?>
				<section class="container flower-decor">
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
					<img src="<?php echo get_theme_file_uri('/img/flower.png') ?>" alt="A black and white floral border decoration.">
				</section>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<div class="container text-center">
					<p>We currently don't have any package options for this right now.</p>
					<p>Check back later or <a href="<?php echo site_url('/contact-jen'); ?>">Contact Me</a> if you're looking for anything specific!</p>
				</div>
			<?php endif; ?><!--End Wedding Cards -->
		</section><!-- End Wedding Section -->


		<!-- Honeymoon Section -->
		<section class="honeymoon-intro" id="honeymoon">
			<div class="container">
				<h3>Honeymoon Packages</h3>
				<div>
					<img srcset="<?php echo get_theme_file_uri('/img/couple-kissing-sm.webp') ?> 450w, <?php echo get_theme_file_uri('/img/couple-kissing-lg.webp') ?> 650w" class="img-rounded" alt="A couple kissing while sitting at the beach." width="650px" height="433px">
				</div>
				<div>
					<p>Looking for an amazing honeymoon? Look no further! No matter your style or your dream we can make your dreams come true! We work with you to create a honeymoon that you will remember for years to come.</p>
					<a href="<?php echo site_url('/quote'); ?>" class="btn-primary">Get a Quote</a>
				</div>
			</div>

			<!--Honeymoon Cards -->
			<?php
				$posts_query = new WP_Query(
					array(
						'post_type' => 'honeymoon-trip'
					)
				);
			?>
			<?php if ($posts_query->have_posts()): ?>
			<?php while ($posts_query->have_posts()): $posts_query->the_post(); ?>
				<section class="container flower-decor">
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
					<img src="<?php echo get_theme_file_uri('/img/flower.png') ?>" alt="A black and white floral border decoration.">
				</section>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<div class="container text-center">
					<p>We currently don't have any package options for this right now.</p>
					<p>Check back later or <a href="<?php echo site_url('/contact-jen'); ?>">Contact Me</a> if you're looking for anything specific!</p>
				</div>
			<?php endif; ?>
		
		</section><!-- End Wedding Section -->


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
