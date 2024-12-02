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
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

<main id="primary" class="site-main">
	<section>
		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>

		<?php the_content(); ?>

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
										class="bi bi-arrow-right" aria-label="check out more disney blog"></i></span></a>
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
										class="bi bi-arrow-right" aria-label="check out more cruise blog"></i></span></a>
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
								more<span><i class="bi bi-arrow-right" aria-label="check out more honeymoon and wedding blog"></i></span></a>
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
										class="bi bi-arrow-right" aria-label="check out more all inclusive blog"></i></span></a>
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
									class="bi bi-arrow-right" aria-label="check out more blog posts"></i></span></a>
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
