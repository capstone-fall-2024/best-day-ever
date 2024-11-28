<?php

/**
 * The template for displaying the Cruises Page
 *
 * This is the template that displays the Cruises Page
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

<main id="primary" class="site-main cruises-page">
	<section>
		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>

		<?php the_content(); ?>

		<!-- Cruises Intro -->
		<section>
			<div class="container">
				<h3>Cruise the Seas</h3>
				<div>
					<img src="<?php echo get_theme_file_uri('/img/slider-activity.webp') ?>" class="img-rounded" alt="Slider activity of an obstacle course on a cruise.">
				</div>
				<div>
					<p>We have cruises for ocean, river and expedition vacations with something for everyone! You can travel from 2 days to over 200 days in length and everything in between! Cruising is the fastest growing form of vacation options. We have cruise options that can take you to every corner of the globe. There really is something for everyone!</p>
					<a href="<?php echo site_url('/quote'); ?>" class="btn-primary">Get a Quote</a>
				</div>
			</div>
		</section><!-- End Cruise Intro -->


		<!-- Norwegian Cruise Line -->
		<section class="container">
			<div class="norwegian-bg">
				<div class="backdrop img-rounded">
					<h3>Norwegian Cruises</h3>
					<p>Sit back, relax and enjoy more on your vacation with Norwegian's More At Sea™, the new one-of-a-kind cruising package included for more value at the best quality. Norwegian wants you to have more experiences that lead to more memories! So, you can enjoy more of the finer things.</p>
					<a href="https://inspires.to/experiences/cruise-with-norwegian-jzk2e" target="_blank" class="btn-primary">More Info</a>
				</div>
			</div>

			<!-- Norwegian Cruise Options -->
			<div class="vacation-card-group">

			<!-- Europe -->
            <section class="vacation-card">
                    <div>
                        <h4>Europe Cruises</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/coastal-ocean.webp') ?>" alt="Windmills and white buildings along the coastline"></div>
                        <div>
                            <p>Europe's Leading Cruise Line for 17 years in a row. Unpack once and wake up to a new, iconic city nearly every day. With the most port-rich itineraries and overnight stays, you'll have plenty of time to explore. Discover Northern Europe's picturesque towns or the sun-drenched Mediterranean. Or fall in love with Santorini's iconic blue domes. Visit a wide variety of ports when you choose from any 4- to 19-day cruises. Cruisetour and hotel packages available.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Alaska -->
            <section class="vacation-card">
                    <div>
                        <h4>Alaska Cruise</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/whale.webp') ?>" alt="A whale jumping out of the water with a snowy mountain in the background."></div>
                        <div>
                            <p>When you cruise with Norwegian, the awe of Alaska stays with you throughout your cruise. From hiking up snow-capped mountains and witnessing majestic whales splash in the Pacific to coming back on board and savoring a superb meal at a specialty restaurant, catching an amazing show followed by a starlit stroll on the top deck. Choose from a wide variety of sailings expanding from 7- to 16-day itineraries. Cruisetour and hotel packages available.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Caribbean -->
            <section class="vacation-card">
                    <div>
                        <h4>Caribbean Cruises</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/couple-and-lighthouse.webp') ?>" alt="A couple posing in front of a lighthouse surrounded by palm trees."></div>
                        <div>
                            <p>Once you've seen one island, you have to see them all. From Eastern to Western to Southern, Norwegian has been named Caribbean's Leading Cruise Line for 11 years in a row - World Travel Awards. Paradise awaits with 7 convenient departure ports, so you can explore dozens of itineraries from 3 to 15 days long. Whichever beautiful destination you choose, there's always a reason to come back to The Caribbean with Norwegian Cruise Line.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Hawaii -->
            <section class="vacation-card">
                    <div>
                        <h4>Hawai'i Cruises</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/palm-trees.webp') ?>" alt="Many palm trees along a sandy beach path and a green mountain view."></div>
                        <div>
                            <p>Only Norwegian visits four uniquely different islands in seven days - with overnight stays in Maui and Kaua'i. Hike along a majestic waterfall, step back in time during a visit to Pearl Harbor and then take in the dazzling show at an authentic lu'au. Or dive deeper into paradise on an unique Hawai'i & French Polynesia cruise. Choose from 6- to 18-day cruises from cities including Honolulu, Papeete (Tahiti) and Vancouver. Cruisetour and hotel packages available.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- All Cruises -->
            <section class="vacation-card">
                    <div>
                        <h4>All Cruises</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/princess-cruise.webp') ?>" alt="Large cruise ship view in open water."></div>
                        <div>
                            <p>Sail from over 400+ ports across the globe. Explore Asia, Australia & New Zealand, Bermuda, the Mexican Riviera or an Extraordinary Journey, Norwegian's uniquely designed itineraries that allow you a more immersive experience. Whether you're island-hoping or crossing oceans to destinations far and away, sail aboard Norwegian Cruise Line for a vacation you'll never forget. Variety of Cruisetour and hotel packages available for multiple destinations.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>
        </div>
		</section>


		<!-- Disney Cruise Line -->
		<div class="bubble-bg">
		<section class="container">
			<div class="disney-cruise-bg">
				<div class="backdrop img-rounded">
					<h3>Disney Cruise Line</h3>
					<p>Magical themed restaurants, sweet treats, parties, recreational activities, spa, water theme park, and more! Fun for not only the kids, but adults as well. Offering cruises in the Greek Isles, Norwegian Fjords, The Bahamas, and the Caribbean, pick a location that suits you!</p>
					<a href="https://www.disneytravelcenter.com/MIN-000000000095428/sites++disney-cruise-line++disney-cruise-line/" target="_blank" class="btn-primary">More Info</a>
				</div>
			</div>

			<!-- Disney Cruise Options -->
			<div class="vacation-card-group">

			<!-- Dream -->
            <section class="vacation-card">
                    <div>
                        <h4>Disney Dream</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/disney-dream-cruise.webp') ?>" alt="A close-up view of the Disney Dream name across the side of the cruise ship."></div>
                        <div>
                            <p>A Dream Come True. Let your imagination set sail. Be front-and-center at original Broadway-caliber live shows, dine on artfully prepared meals in wondrously themed restaurants and make a splash on the AquaDuck. Combining classic beauty and modern luxury with legendary Disney storytelling, the award-winning Disney Dream invites you to embark on an unforgettable voyage where dreams really do come true.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Destiny -->
            <section class="vacation-card">
                    <div>
                        <h4>Disney Destiny</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/disney-mouses-on-the-air-balloon.webp') ?>" alt="Mickey and Minnie standing together on a golden, gated, and adorned hot air balloon."></div>
                        <div>
                            <p>Magic happens when iconic Disney, Pixar and Marvel heroes and villains spring to life on board the Disney Destiny, the newest ship in the Disney Cruise Line fleet. The Maiden Voyage sets sail on November 20, 2025, kicking off an inaugural season of 4- and 5-night cruises from Fort Lauderdale to The Bahamas and Western Caribbean.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Fantasy -->
            <section class="vacation-card">
                    <div>
                        <h4>Disney Fantasy</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/disney-fantasy.webp') ?>" alt="Upward angle view of Disney characters standing in front of a castle's towers."></div>
                        <div>
							<p>Fantasy Becomes Reality.</p>
                            <p>Chart a course for adventure and wonder aboard the Disney Fantasy—where elegance and sophistication mingle with storytelling and whimsy.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Wonder -->
            <section class="vacation-card">
                    <div>
                        <h4>Disney Wonder</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/disney-magic.webp') ?>" alt="A group of Disney themed balloons."></div>
                        <div>
							<p>Magic at Sea</p>
                            <p>Created with your entire family in mind, the Disney Magic combines classic nostalgia and modern amenities with Disney's world-famous service.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Treasure -->
            <section class="vacation-card">
                    <div>
                        <h4>Disney Treasure</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/disney-treasure.webp') ?>" alt="A full outer view of the Disney Treasure cruise ship."></div>
                        <div>
                            <p>Set your compass toward the Disney Treasure, the newest ship in the Disney Cruise Line fleet, where the spirit of adventure meets the daring tales of classic Disney films and Disney park attractions—sailing 7-night Eastern and Western Caribbean itineraries beginning December 2024.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Wish -->
			<section class="vacation-card">
                    <div>
                        <h4>Disney Wish</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/mickey-minnie-next-to-disney-cruise.webp') ?>" alt="Mickey and Minnie mouse posing together in a captain's hat with a Disney cruise ship behind them in the distance."></div>
                        <div>
							<p>A Wish Come True</p>
                            <p>Experience enchantment on board the Disney Wish, where fantastical worlds and beloved stories from Disney, Marvel, Star Wars and Pixar are brought to life like never before.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>

			<!-- Wonder -->
			<section class="vacation-card">
                    <div>
                        <h4>Disney Wonder</h4>
                        <div class="dashed-line"></div>
                    </div>
                    <div>
                        <div><img src="<?php echo get_theme_file_uri('/img/jessie-toy-story.webp') ?>" alt="A statue of Jessie from Toy Story holding up one end of a string of lights."></div>
                        <div>
							<p>Where Wonders Never Cease</p>
                            <p>Embark on a journey aboard the Disney Wonder—featuring modern amenities and can't-miss entertainment, surrounded by lavish art nouveau details inspired by the grand era of early 20th-century cruising.</p>
                            <div class="card-buttons"><a href="<?php echo site_url('/quote'); ?>" class="button-yellow">Get a Quote</a></div>
                        </div>
                    </div>
            </section>
        </div>
		</section>
		</div>

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
