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
 * @package best_day_ever_vacations
 */

get_template_part('parts/home-banner');

?>
<main id="primary" class="site-main">
	<section class="actual-content">
		<!-- wp:heading -->
		<?php the_title( '<h2 class="entry-title d-none">', '</h2>' ); ?>
		<!-- /wp:heading -->
		<section class="container-fluid">
			<div class="flex justify-content-center g-5">
				<div><img src="https://placehold.co/400x600" alt="Photograph of Jennifer"></div>
				<div>
					<h3>Hi, I'm Jen!</h3>
					<p>I'm a professionally trained Travel Agent with Best Day Ever Vacations, specializing in Disney Vacations.</p>
					<p>My goal is to book the complete dream vacation for you, your friends, and your family!</p>
					<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/about-jen/"><button class="wp-block-button">More About Me</button></a>
				</div>
			</div>
		</section>

		<!-- Proud Member of Section widget -->
		<section class="abstract-bg">
		<div class="container-fluid">
			<h3>Proud Member of</h3>
			<p>Content placeholder</p>
		</div>
		</section>

		<!-- Jennifer's Specialties rotator -->
		<section class="container-fluid">
		<h3>Jennifer's Specialties</h3>
		<p>Rotator placeholder</p>
		</section>

		<!-- Special Deals -->
		<section class="container-fluid">
		<h3>Special Deals</h3>
		<div>
			<?php
				$posts_query = new WP_Query(
					array(
						'post_type' => 'special-deal',
						"posts_per_page" => 2
				)); 
			?>
			<?php if ($posts_query->have_posts()): ?>
				<?php while ($posts_query->have_posts()): ?>
					<section class="d-flex justify-content-between align-items-center">
						<div class="col-12 col-md-6">
							<img class="card-img-top" src="<?php get_field('deal_featured_image'); ?>"
								alt="<?php get_field('deal_title'); ?>" loading="lazy">
						</div>
						<div class="col-12 col-md-6">
							<h4><?php get_field('deal_title'); ?></h4>
							<p><?php get_field('deal_description'); ?></p>
							<a href="<?php the_permalink(); ?>" class="wp-block-button">Learn More</a>
						</div>
					</section>
				<?php endwhile;
				wp_reset_postdata();
			endif; ?>

			<section class="d-flex justify-content-between align-items-center">
				<div><img src="" alt=""></div>
				<div>
					<h4>Special Deal 1</h4>
					<p>Placeholder for ACF Content</p>
					<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/special-deals/"><button class="wp-block-button">Learn More</button></a>
				</div>
			</section>
			<section class="d-flex justify-content-between align-items-center">
				<div>
					<h4>Special Deal 2</h4>
					<p>Placeholder for ACF Content</p>
					<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/special-deals/"><button class="wp-block-button">Learn More</button></a>
				</div>
				<div><img src="" alt=""></div>
			</section>
			<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/special-deals/"><p class="me-3">Check Out More</p> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ce5927" viewBox="0 0 256 256"><path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path><title>Arrow pointing right</title></svg></a>
		</div>
		</section>

		<!-- Ad -->
		<aside><h3>Disney Ad placeholder</h3></aside>

		<!-- Testimonials -->
		<!-- wp:cover {"url":"https://best-day-ever.web.dmitcapstone.ca/wordpress2/wp-content/uploads/2024/10/testimonial-bg.webp","id":225,"dimRatio":0,"overlayColor":"light-grey","isUserOverlayColor":true,"focalPoint":{"x":0.72,"y":0.19},"isDark":false,"tagName":"section","metadata":{"name":"Testimonials"},"style":{"spacing":{"padding":{"top":"64px","bottom":"64px","left":"64px","right":"64px"},"margin":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
		<section class="wp-block-cover is-light" style="margin-top:64px;margin-bottom:64px;padding-top:64px;padding-right:64px;padding-bottom:64px;padding-left:64px"><span aria-hidden="true" class="wp-block-cover__background has-light-grey-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-225" alt="" src="https://best-day-ever.web.dmitcapstone.ca/wordpress2/wp-content/uploads/2024/10/testimonial-bg.webp" style="object-position:72% 19%" data-object-fit="cover" data-object-position="72% 19%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Inner Content"},"style":{"spacing":{"blockGap":"0px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3,"align":"wide","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","letterSpacing":"0px","lineHeight":"1"},"spacing":{"padding":{"left":"0px"},"margin":{"bottom":"16px"}}}} -->
		<h3 class="wp-block-heading alignwide has-text-align-left" style="margin-bottom:16px;padding-left:0px;font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1;text-transform:capitalize">What Our Travelers are Saying</h3>
		<!-- /wp:heading -->

		<!-- wp:shortcode -->
		[testimonials_carousel]
		<!-- /wp:shortcode --></div>
		<!-- /wp:group --></div></section>
		<!-- /wp:cover -->


		<?php the_content(); ?>
	
		<section class="container">
			<!-- wp:heading -->
			<h3 class="wp-block-heading has-dark-green-color has-text-color has-link-color" style="font-size:48px;">Jennifer's Travel Blog</h3>
			<!-- /wp:heading -->
			<div class="row">
				<?php
					$posts_query = new WP_Query(
						array(
							'post_type' => 'post',
							"posts_per_page" => 3
					)); 
				?>
				<?php if ($posts_query->have_posts()): ?>
					<?php while ($posts_query->have_posts()): ?>
						<div class="col-12 col-sm-6 col-md-4 mt-5">
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
					<?php endwhile;
					wp_reset_postdata();
				endif; ?>
			</div>
		</section>

		<div class="container-fluid">
			<?php if (is_active_sidebar('instagram')) {
					dynamic_sidebar('instagram');
				};
			?>
		</div>

		<?php if (is_active_sidebar('subscription-main')) {
				dynamic_sidebar('subscription-main');
			}; 
		?>
	</section>
</main><!-- #main -->

<?php
get_footer();


