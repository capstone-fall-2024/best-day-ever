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

<main id="primary" class="site-main disney-page">
	<section>
		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>

		<?php the_content(); ?>

		<section>
		<!-- Disney Intro -->
		<div class="container">
			<h3>Disney: Your Dream Vacation</h3>
			<div>
				<img src="<?php echo get_theme_file_uri('/img/disney-vacation.webp') ?>" class="img-rounded" alt="Mickey Mouse with a family at disney with a castle in the background">
			</div>
			<div>
				<p>We help you create unforgettable memories with our customized Disney Vacations! From enchanting park experiences, character meet-and-greets, cruising around the world, or a tropical get-away, we help you so you can just focus on the magic. </p>
				<a href="<?php echo site_url('/vacations/quote'); ?>" class="btn-primary">Get a Quote</a>
			</div>
		</div><!-- End Disney Intro -->


		<!-- Disney Background -->
		<div class="disney-bg">
		
			<!-- Disney World -->
			<section class="container">
				<div class="vacation-card">
					<div>
						<h4>Walt Disney World Resort</h4>
						<div class="dashed-line"></div>
					</div>
					<div>
						<div><img src="<?php echo get_theme_file_uri('/img/cinderella-castle.webp') ?>" alt="Cinderella's Castle at Walt Disney World Resort in Florida"></div>
						<div>
							<p>Vacation at Disney World Resort in Orlando, Florida! Enjoy attractions themed after Ratatouille, Snow White, Star Wars, and more! Meet your favorite characters and explore the enchanted world of Disney. Tickets, hotel, and anything you need, we will help you get.</p>

							<div class="card-buttons">
								<a href="https://www.disneytravelcenter.com/MIN-000000000095428/sites++walt-disney-world++walt-disney-world/" target="_blank" class="btn-primary">Learn More</a>
								<a href="<?php echo site_url('/vacations/quote'); ?>" class="button-secondary">Get a Quote</a>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- End Disney World -->

			<!-- Disneyland -->
			<section class="container">
				<div class="vacation-card">
					<div>
						<h4>Walt Disneyland Resort</h4>
						<div class="dashed-line"></div>
					</div>
					<div>
						<div><img src="<?php echo get_theme_file_uri('/img/sleeping-beauty-castle.webp') ?>" alt="Sleeping Beauty's Castle at Walt Disneyland Resort in California"></div>
						<div>
							<p>Vacation at Disneyland Resort in Anaheim, California! Enjoy rides themed after Pirates of the Caribbean, Indiana Jones, Finding Nemo, and more! Meet your favorite characters and explore the enchanted world of Disney. Tickets, hotel, and anything you need, we will help you get.</p>

							<div class="card-buttons">
								<a href="https://www.disneytravelcenter.com/MIN-000000000095428/sites++disneyland++disneyland/" target="_blank" class="btn-primary">Learn More</a>
								<a href="<?php echo site_url('/vacations/quote'); ?>" class="button-secondary">Get a Quote</a>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- End Disneyland -->

			<!-- Disney Cruise Line -->
			<section class="container">
				<div class="vacation-card">
					<div>
						<h4>Disney Cruise Line</h4>
						<div class="dashed-line"></div>
					</div>
					<div>
						<div><img src="<?php echo get_theme_file_uri('/img/disney-cruise.webp') ?>" alt="Two Disney cruise ships in open water"></div>
						<div>
							<p>Explore the seas with a relaxing and fantastical Disney cruise. Learn more about all the different cruises Disney has to offer. Pick what suits you best, or we can help!</p>

							<div class="card-buttons">
								<a href="https://www.disneytravelcenter.com/MIN-000000000095428/sites++disney-cruise-line++disney-cruise-line/" target="_blank" class="btn-primary">Learn More</a>
								<a href="<?php echo site_url('/vacations/quote'); ?>" class="button-secondary">Get a Quote</a>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- End Disney Cruise line  -->

			<!-- Aulani Resort -->
			<section class="container">
				<div class="vacation-card">
					<div>
						<h4>Aulani Resort</h4>
						<div class="dashed-line"></div>
					</div>
					<div>
						<div><img src="<?php echo get_theme_file_uri('/img/aulani-resort.webp') ?>" alt="A view of Aulani resort from the pool"></div>
						<div>
							<p>Discover a family paradise with a touch of magic at Aulani, A Disney Resort & Spa in Ko Olina, Hawai'i. There's something for everyone to enjoy at this award-winning Resort, and so much is included with your stay and more!</p>

							<div class="card-buttons">
								<a href="https://www.disneytravelcenter.com/MIN-000000000095428/sites++aulani++aulani/" target="_blank" class="btn-primary">Learn More</a>
								<a href="<?php echo site_url('/vacations/quote'); ?>" class="button-secondary">Get a Quote</a>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- End Aulani Resort -->

			<!-- Adventures by Disney -->
			<section class="container">
				<div class="vacation-card">
					<div>
						<h4>Adventures by Disney</h4>
						<div class="dashed-line"></div>
					</div>
					<div>
						<div><img src="<?php echo get_theme_file_uri('/img/old-castle.webp') ?>" alt="A scenic, hilly view with an old castle across a bridge."></div>
						<div>
							<p>Delight in a dream Disney family vacation and gain a lifetime of memories with Adventures by Disney—a leader in guided group travel. Let us be your storyteller as we show you the way, taking you to the exciting destinations you want to visit.</p>

							<div class="card-buttons">
								<a href="https://www.disneytravelcenter.com/MIN-000000000095428/sites++adventures-by-disney++adventures-by-disney/" target="_blank" class="btn-primary">Learn More</a>
								<a href="<?php echo site_url('/vacations/quote'); ?>" class="button-secondary">Get a Quote</a>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- End Adv. by Disney -->

			<!-- National Geographic -->
			<section class="container">
				<div class="vacation-card">
					<div>
						<h4>National Geographic Expeditions</h4>
						<div class="dashed-line"></div>
					</div>
					<div>
						<div><img src="<?php echo get_theme_file_uri('/img/natgeo-truck.webp') ?>" alt="A National Geographic truck overlooking a herd of animals."></div>
						<div>
							<p>When you travel with National Geographic on an expedition, you'll enjoy boundless opportunities to be surrounded by natural wonders and exotic wildlife, to explore celebrated archaeological sites, to learn about different cultures and share in local traditions. A National Geographic Expert or expert team accompanies most expeditions, sharing their knowledge and passion for a region and making each experience enriching and unforgettable.</p>

							<div class="card-buttons">
								<a href="https://www.disneytravelcenter.com/MIN-000000000095428/sites++national-geographic-expeditions++national-geographic-expeditions/" target="_blank" class="btn-primary">Learn More</a>
								<a href="<?php echo site_url('/vacations/quote'); ?>" class="button-secondary">Get a Quote</a>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- End National Geographic -->

		</div> <!-- End Disney Background -->

		</section>

		

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
