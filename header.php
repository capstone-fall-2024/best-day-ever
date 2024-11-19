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
			wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- addtitle10-22 -->

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

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
			<div>
				<p>Travel Agent of Best Day Ever Vacations</p>
			</div>
			<div class="top-header-social-font">
				<i class="bi bi-facebook"></i>
				<i class="bi bi-instagram"></i>
			</div>
		</div>

		<header id="masthead" class="site-header">

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
				<button class="cta">get a quote</button>
				<i class="bi bi-search"></i>
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
					<p>Travel Agent of Best Day Ever Vacations</p>
				</div>

				<div class="social-font-mobile">
					<a href="https://www.facebook.com/profile.php?id=61555368848155"><i class="bi bi-facebook"></i></a>
					<a href="https://www.instagram.com/best_day_ever_vacations_by_jen?igsh=YTFnMnFoZWVnaDdp&utm_source=qr"><i
							class="bi bi-instagram"></i></a>
				</div>

			</div>


		</div>