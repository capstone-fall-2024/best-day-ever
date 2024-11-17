<?php /** * The header for our theme * * This is the template that displays all of the <head> section and everything up>
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

			<div class="sidebar-menu">
				<div class="sidebar-menu__haha"></div>
				<div class="sidebar-menu__container">
					<div class="search-form-box">
						<?php get_search_form(); ?>
						<div>
							<i class="bi bi-x-lg"></i>
						</div>
					</div>
					<!-- Navigation Menu -->
					<nav class="nav-mobile">
						<ul class="menu-list-mobile">
							<li>
								<a href="<?php echo site_url('/home'); ?>">Home</a>
							</li>
							<li>
								<a href="<?php echo site_url('/vacations'); ?>">Vacations<span>&darr;</span></a>
							</li>
							<ul class="submenu-mobile">
								<li><a href="<?php echo site_url('/disney'); ?>">Disney</a></li>
								<li><a href="#">Cruise</a></li>
								<li><a href="#">HoneyMoon and Wedding</a></li>
								<li><a href="#">All Inclusive</a></li>
							</ul>
							</li>
							<li>
								<a href="https://github.com/capstone-fall-2024/best-day-ever">About Jen</a>
							</li>
							<li>
								<a href="<?php echo site_url('/blog'); ?>">Blog</a>
							</li>
							<li>
								<a href="#">Special Deals</a>
							</li>
							<li>
								<a href="#">Contact Jen</a>
							</li>
						</ul>
					</nav>

					<button class="cta-mobile">get a quote</button> <!-- turn off on desktop -->

					<div>
						<p>Travel Agent of Best Day Ever Vacations</p>
					</div>
					<div class="social-font-mobile">
						<i class="bi bi-facebook"></i>
						<i class="bi bi-instagram"></i>
					</div>

				</div>

			</div>

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