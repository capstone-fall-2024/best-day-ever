<?php

/** * The header for our theme * * This is the template that displays all of the <head> section and everything up>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name');
	wp_title(); ?> | <?php echo the_title(); ?> </title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="./img/bdev-logo.png" type="image/png">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Young+Serif&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="site-overlay"></div>

	<h1 style="display:none">Best Day Ever Vacations by Jen</h1>
	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bdev_by_jen'); ?></a>

		<div class="search-form-box">
			<?php get_search_form(); ?>
			<div>

				<i class="bi bi-x-lg"></i>
			</div>
		</div>

		<div class="top-header">
			<div class="container">
				<div>
					<p>Travel Agent of <a href="https://bestdayevervacations.com/" target="_blank">Best Day Ever Vacations</a></p>
				</div>
				<div class="top-header-social-font">
					<a href="https://www.facebook.com/profile.php?id=61555368848155"><i class="bi bi-facebook" aria-label="Link to My Facebook"></i></a>
					<a href="https://www.instagram.com/best_day_ever_vacations_by_jen?igsh=YTFnMnFoZWVnaDdp&utm_source=qr"><i
							class="bi bi-instagram" aria-label="Link to My Instagram"></i></a>
				</div>
			</div>
		</div>

		<header id="masthead" class="site-header">

			<div>
				<div class="container">
					<div class="site-branding">
						<?php
						if (has_custom_logo()) {
							the_custom_logo(); // Display the custom logo if it exists
						} else {
							// Display the site title if no logo is uploaded
							?>
							<div class="site-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
							</div>
							<?php
						}
						?>
					</div>
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					<!-- mobile-nav -->
					<div class="hamburger">
						<span class="hamburger__span"></span>
						<span class="hamburger__span"></span>
						<span class="hamburger__span"></span>
					</div>
					<div class="site-header__util">
						<a href="<?php echo site_url('/quote'); ?>" id="quote-btn">Get a Quote</a>
						<i class="bi bi-search">
							<div class="search-hover">search</div>
						</i>
					</div>
					
					</div>
				</div>	
			</header><!-- #masthead -->
					
							<!-- Hamburger Menu Icon for Mobile -->
					
			<div class="sidebar-menu">
				<div class="sidebar-menu__closed">
					<div class="hamburger-closed">
						<span class="hamburger-closed__span"></span>
						<span class="hamburger-closed__span"></span>
						<span class="hamburger-closed__span"></span>
					</div>
				</div>
				

			<div class="sidebar-menu__container">

				<div class="search-form-mobile">
					<?php get_search_form(); ?>
					<i class="bi bi-search"></i>
				</div>
				<!-- Navigation Menu -->
				<nav class="nav-mobile">
					<ul class="nav-mobile__menu-list-mobile">
						<li>
							<a href="<?php echo site_url('/'); ?>">Home</a>
						</li>

						<li>
							<div class="vacations-drop-down-menuMobile">
								<a href="<?php echo site_url('/vacations'); ?>">Vacations</a>
								<i class="bi bi-chevron-down"></i>
							</div>

							<ul class="submenu-mobile">
								<li class="submenu-mobile__item"><a href="<?php echo site_url('/vacations/disney'); ?>">Disney</a>
									</lisu>
								<li class="submenu-mobile__item"><a href="<?php echo site_url('/vacations/cruises'); ?>">Cruise</a>
								</li>
								<li class="submenu-mobile__item"><a
										href="<?php echo site_url('/vacations/honeymoon-wedding'); ?>">Honeymoon & Wedding</a></li>
								<li class="submenu-mobile__item"><a href="<?php echo site_url('/vacations/all-inclusive'); ?>">All
										Inclusive & More</a></li>
							</ul>

						</li>

						</li>
						<li>
							<a href="<?php echo site_url('/about-jen'); ?>">About Jen</a>
						</li>
						<li>

							<a href="<?php echo site_url('/blog'); ?>">Blog</a>

						</li>
						<li>
							<a href="<?php echo site_url('/special-deals'); ?>">Special Deals</a>
						</li>
						<li>
							<a href="<?php echo site_url('/contact-jen'); ?>">Contact Jen</a>
						</li>
					</ul>
				</nav>

				<a href="<?php echo site_url('/quote') ?>" class="cta-mobile">get a quote</a> <!-- turn off on desktop -->

				<div class="paragraph">
					<p>Travel Agent of <a href="https://bestdayevervacations.com/" target="_blank">Best Day Ever Vacations</a></p>
				</div>

				<div class="social-font-mobile">
					<a href="https://www.facebook.com/profile.php?id=61555368848155"><i class="bi bi-facebook" aria-label="Link to My Facebook"></i></a>
					<a href="https://www.instagram.com/best_day_ever_vacations_by_jen?igsh=YTFnMnFoZWVnaDdp&utm_source=qr"><i
							class="bi bi-instagram" aria-label="Link to My Instagram"></i></a>
				</div>

			</div>


		</div>