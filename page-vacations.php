<?php

/**
 * The template for displaying the Vacations page
 *
 * This is the template that displays on the Vacations Page by default.
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

<main id="primary" class="site-main vacations-page">
	<section>
		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>

		<?php get_template_part('parts/banner'); ?>

		<section class="container">
			<h3>Find a Trip for You</h3>
			<div class="vacation-buttons">
				<a href="<?php echo site_url('/vacations/disney'); ?>">
					<div>
						<img src="<?php echo get_theme_file_uri('/img/ferris-wheel-icon-sm.png') ?>" alt="A ferris wheel graphic to symbolize the ferris wheel found at Disney theme park.">
						<p>Disney</p>
					</div>
				</a>
				<a href="<?php echo site_url('/vacations/cruises'); ?>">
					<div>
						<img src="<?php echo get_theme_file_uri('/img/cruise-ship-icon.png') ?>" alt="Graphic icon of a cruise ship.">
						<p>Cruises</p>
					</div>
				</a>
				<a href="<?php echo site_url('/vacations/honeymoon-wedding'); ?>">
					<div>
						<img src="<?php echo get_theme_file_uri('/img/wedding-bells-icon.png') ?>" alt="Graphic icon of wedding bells tied to a ribbon.">
						<p>Honeymoon & Wedding</p>
					</div>
				</a>
				<a href="<?php echo site_url('/vacations/all-inclusive'); ?>">
					<div>
						<img src="<?php echo get_theme_file_uri('/img/all-inclusive-icon.png') ?>" alt="Graphic of a dish and drink under an umbrella, palm tree and a sun to symbolize All Inclusive vacations.">
						<p>All Inclusive & More</p>
					</div>
				</a>
			</div>
		</section>

		<?php the_content(); ?>
		
		<!-- SPECIAL DEALS -->
		<section class="container home-specials">
		<h3>Special Deals</h3>
			<div class="deals-content">
				<?php get_template_part('parts/special-deals-home'); ?>
			</div>

		<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/special-deals/" class="check-more">Check out more<span><i class="bi bi-arrow-right"></i></span></a>
	</section>

		<!-- Testimonials -->
		<section class="testimonials">
			<div class="container testimonials-inner">
				<h3>What Our Travelers Are Saying</h3>
				<?php echo do_shortcode('[testimonials_slider]'); ?>
			</div>
		</section>

		<!-- Blog Query Loop -->
		<?php get_template_part('template-parts/display-category-posts'); ?>

		<section class="travel-blog">
			<div class="container">
				<h3>Jennifer's Travel Blog</h3>
				<?php display_category_posts('', 3); ?>
				<div class="link-main-category">
					<a href="<?php echo esc_url(home_url('/blog')); ?>">Check Out More<span><i class="bi bi-arrow-right"></i></span></a>
				</div>
			</div>
		</section>

		<!-- Instagram -->
		<div class="container">
			<?php if (is_active_sidebar('instagram')) {
					dynamic_sidebar('instagram');
				};
			?>
		</div>

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
