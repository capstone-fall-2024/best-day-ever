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
	<?php the_title( '<h2 class="entry-title d-none">', '</h2>' ); ?>
	<!-- /wp:heading -->

	<?php get_template_part('parts/home-banner'); ?>

	<!-- About Jen Section -->
	<section class="im-jen container">
		<div>
			<img class="img-rounded" src="https://placehold.co/400x600" alt="Photo of Jen smiling">
		</div>
		<div>
			<h3>Hi, I'm Jen!</h3>
			<p>I'm a professionally trained Travel Agent with Best Day Ever Vacations, specializing in Disney Vacations.</p>
			<p>My goal is to book the complete dream vacation for you, your friends, and your family!</p>
			<a class="button-primary" href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/about-jen/">More About Me</a>
		</div>
	</section>
	
	<!-- Proud Member of Section widget -->
	<?php if (is_active_sidebar('proud-member')) {
			dynamic_sidebar('proud-member');
		};
	?>

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
	<!-- wp:cover {"url":"https://best-day-ever.web.dmitcapstone.ca/wordpress2/wp-content/uploads/2024/10/testimonial-bg.webp","id":225,"dimRatio":0,"overlayColor":"light-grey","isUserOverlayColor":true,"focalPoint":{"x":0.72,"y":0.19},"isDark":false,"tagName":"section","metadata":{"name":"Testimonials"},"style":{"spacing":{"padding":{"top":"64px","bottom":"64px","left":"64px","right":"64px"},"margin":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
	<section class="wp-block-cover is-light" style="margin-top:64px;margin-bottom:64px;padding-top:64px;padding-right:64px;padding-bottom:64px;padding-left:64px"><span aria-hidden="true" class="wp-block-cover__background has-light-grey-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-225" alt="Cream background with palm leaf graphics on the top right and bottom left corners to give a tropical feel" src="https://best-day-ever.web.dmitcapstone.ca/wordpress2/wp-content/uploads/2024/10/testimonial-bg.webp" style="object-position:72% 19%" data-object-fit="cover" data-object-position="72% 19%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Inner Content"},"style":{"spacing":{"blockGap":"0px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3,"align":"wide","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","letterSpacing":"0px","lineHeight":"1"},"spacing":{"padding":{"left":"0px"},"margin":{"bottom":"16px"}}}} -->
	<h3 class="wp-block-heading alignwide has-text-align-left" style="margin-bottom:16px;padding-left:0px;font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1;text-transform:capitalize">What Our Travelers are Saying</h3>
	<!-- /wp:heading -->

	<!-- wp:shortcode -->
	<?php echo do_shortcode('[testimonials_slider]'); ?>
	<!-- /wp:shortcode --></div>
	<!-- /wp:group --></div></section>
	<!-- /wp:cover -->

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


