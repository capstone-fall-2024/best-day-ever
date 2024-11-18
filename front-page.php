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

get_template_part('parts/home-banner');

?>
<main id="primary" class="site-main home-main">
<section class="actual-content">
	<!-- wp:heading -->
	<?php the_title( '<h2 class="entry-title d-none">', '</h2>' ); ?>
	<!-- /wp:heading -->

	<!-- About Jen Section -->
	<!-- wp:group {"tagName":"section","metadata":{"name":"Meet Jen"},"style":{"spacing":{"margin":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
	<section class="wp-block-group" style="margin-top:64px;margin-bottom:64px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","style":{"border":{"radius":"10px"}}} -->
	<figure class="wp-block-image aligncenter size-large has-custom-border"><img src="https://placehold.co/400x600" alt="Photo of Jen" style="border-radius:10px"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-red"}}}},"textColor":"dark-red"} -->
	<h3 class="wp-block-heading has-dark-red-color has-text-color has-link-color" style="font-size:48px">Hi, I'm Jen!</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|off-black"}}}},"textColor":"off-black"} -->
	<p class="has-off-black-color has-text-color has-link-color">I'm a professionally trained Travel Agent with Best Day Ever Vacations, specializing in Disney Vacations.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|off-black"}}}},"textColor":"off-black"} -->
	<p class="has-off-black-color has-text-color has-link-color">My goal is to book the complete dream vacation for you, your friends, and your family!</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<a class="button-primary" href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/about-jen/">More About Me</a>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></section>
	<!-- /wp:group -->

	<!-- Proud Member of Section widget -->
	<div class="abstract-bg">
		<?php if (is_active_sidebar('proud-member')) {
				dynamic_sidebar('proud-member');
			};
		?>
	</div>

	<!-- Jennifer's Specialties rotator -->
	<section class="container">
		<h3>Jennifer's Specialties</h3>
		<div>
			<?php echo do_shortcode('[specialty_slider]'); ?>
		</div>
	</section>

	<!-- SPECIAL DEALS -->
	<section class="container home-specials">
		<h3>Special Deals</h3>
		<div>
			<?php
			$posts_query = new WP_Query(
				array(
					'post_type' => 'special-deal',
					'posts_per_page' => 2
				)
			);
			?>

			<?php if ($posts_query->have_posts()): ?>
				<?php $counter = 1; ?>
				<?php while ($posts_query->have_posts()): $posts_query->the_post(); ?>
					<?php
						$layout = ($counter % 2 == 0) ? 'layout-reversed' : 'layout-default';
					?>
					<section class="<?php echo $layout; ?>">

						<div>
							<img class="img-rounded" src="<?php echo esc_url(get_field('deal_featured_image')['url']); ?>"
								alt="Featured image of <?php the_title(); ?>" loading="lazy">
						</div>

						<div>
							<h4><?php the_title(); ?></h4>
							<p><?php the_field('deal_description'); ?></p>
							<a href="<?php the_field('deal_url'); ?>" class="button-primary">Learn More</a>
						</div>

					</section>
					<?php $counter++; ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>

		<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/special-deals/">Check out more<span><i class="bi bi-arrow-right"></i></span></a>
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

	<section>
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

	<!-- Newsletter -->
	<?php if (is_active_sidebar('subscription-main')) {
			dynamic_sidebar('subscription-main');
		}; 
	?>
</section>
</main><!-- #main -->

<?php
get_footer();


