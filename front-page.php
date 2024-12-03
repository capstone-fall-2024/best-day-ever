<?php
/**
 * The template for displaying the home page
 *
 * Used only for the home page! It won't carry over
 * to any other page on the site.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package best_day_ever_vacations
 */

get_header();

?>
<main id="primary" class="site-main home-main front-page">
<section class="actual-content">
	<!-- wp:heading -->
	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	<!-- /wp:heading -->
	
	<?php get_template_part('parts/home-banner'); ?>

	<!-- About Jen Section -->
	<section class="im-jen container">
		<div>
			<img class="img-rounded" src="<?php echo get_theme_file_uri('/img/woman-portrait.webp') ?>" alt="A photo of a woman smiling at the camera." width="427px" height="640px">
		</div>
		<div class="jen-info">
			<h3>Hi, I'm Jen!</h3>
			<p>I'm a professionally trained Travel Agent with Best Day Ever Vacations, specializing in Disney Vacations.</p>
			<p>My goal is to book the complete dream vacation for you, your friends, and your family!</p>
			<a class="btn-primary" href="<?php echo esc_url(home_url('/about-jen')); ?>" aria-label="Learn more about Jenifer">More About Me</a>
		</div>
	</section>
	
	<!-- Proud Member of Section widget -->
	<?php if (is_active_sidebar('proud-member')) {
			dynamic_sidebar('proud-member');
		};
	?>

	<!-- Jennifer's Specialties rotator -->
	<section class="container jen-specialties">
		<h3>Jennifer's Specialties</h3>
		<div>
			<?php echo do_shortcode('[specialty_slider]'); ?>
		</div>
	</section>

	<!-- SPECIAL DEALS -->
	<section class="container home-specials">
		<h3>Special Deals</h3>
			<div class="deals-content">
				<?php get_template_part('parts/special-deals-home'); ?>
			</div>

		<a href="<?php echo esc_url(home_url('/special-deals')); ?>" class="check-more">Check out more<span><i class="bi bi-arrow-right" aria-label="Check out more special deals"></i></span></a>
	</section>

	<!-- Ad -->
	<?php
		if (is_active_sidebar('home-pg-marketing-banner')) {
			dynamic_sidebar('home-pg-marketing-banner');
		};
	?>

	<!-- Testimonials -->
	<section class="testimonials">
		<div class="container testimonials-inner">
			<h3>What Our Travelers Are Saying</h3>
			<?php echo do_shortcode('[testimonials_slider]'); ?>
		</div>
	</section>

	<!-- Blog Loop -->
	<?php get_template_part('template-parts/display-category-posts'); ?>

	<section class="travel-blog">
		<div class="container">
			<h3>Jennifer's Travel Blog</h3>
			<?php display_category_posts('', 3); ?>
			<div class="link-main-category">
				<a href="<?php echo esc_url(home_url('/blog')); ?>">Check Out More<span><i class="bi bi-arrow-right" aria-label="check out more travel blog posts"></i></span></a>
			</div>
		</div>
	</section>

	<!-- Instagram -->
	<?php if (is_active_sidebar('instagram')) {
			dynamic_sidebar('instagram');
		};
	?>

	<!-- Newsletter -->
	<?php if (is_active_sidebar('subscription-main')) {
			dynamic_sidebar('subscription-main');
		}; 
	?>
</section>
</main><!-- #main -->

<?php
get_footer();


