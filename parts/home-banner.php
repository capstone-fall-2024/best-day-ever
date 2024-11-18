<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name');
	wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Banner start -->
<div class="home-banner" aria-label="Best Day Ever Vacations background image of a beach">
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
				<p>Travel Agent of <a href="https://bestdayevervacations.com/" target="_blank">Best Day Ever Vacations</a></p>
			</div>
			<div class="top-header-social-font">
				<a href="https://www.facebook.com/profile.php?id=61555368848155" target="_blank"><i class="bi bi-facebook"></i></a>
				<a href="https://www.instagram.com/best_day_ever_vacations_by_jen/" target="_blank"><i class="bi bi-instagram"></i></a>
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

			<!-- Hamburger Menu Icon for Mobile -->
			<div class="hamburger">
				<i class="bi bi-list"></i>
			</div>



			<div class="site-header__util">
				<button class="cta" href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/quote/">get a quote</button>
				<i class="bi bi-search"></i>
			</div>

		</header><!-- #masthead -->

		<div class="mobile-menu-container">

			<div class="search-container">
				<input type="text" placeholder="Search">
				<i class="bi bi-search"></i>
			</div>
			<!-- Navigation Menu -->
			<nav class="nav-mobile">
				<ul class="menu-list-mobile">
					<li>
						<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/">Home</a>
					</li>
					<li>
						<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/vacations/">Vacations<span>&darr;</span></a>
						<ul class="submenu-mobile">
							<li><a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/vacations/disney/">Disney</a></li>
							<li><a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/vacations/cruises/">Cruise</a></li>
							<li><a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/vacations/honeymoon-wedding/">HoneyMoon and Wedding</a></li>
							<li><a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/vacations/all-inclusive/">All Inclusive & More</a></li>
						</ul>
					</li>
					<li>
						<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/about-jen/">About Jen</a>
					</li>
					<li>
						<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/blog/">Blog</a>
					</li>
					<li>
						<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/special-deals/">Special Deals</a>
					</li>
					<li>
						<a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/contact-jen/">Contact Jen</a>
					</li>
				</ul>
			</nav>

			<button class="cta-mobile" href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/quote/">get a quote</button>

			<div>
				<p>Travel Agent of <a href="https://bestdayevervacations.com/">Best Day Ever Vacations</a></p>
			</div>
			<div class="social-font-mobile">
				<a href="https://www.facebook.com/profile.php?id=61555368848155" target="_blank"><i class="bi bi-facebook"></i></a>
				<a href="https://www.instagram.com/best_day_ever_vacations_by_jen/" target="_blank"><i class="bi bi-instagram"></i></a>
			</div>
		</div> <!-- end header -->
    
    <!-- Banner Content -->
    <div class="home-banner-content container">
        <div class="home-banner-title">
           <p>A Vacation Catered <span>To You, By Jennifer</span></p>
        </div>

        <div class="stacked-images">
            <img src="<?php echo get_theme_file_uri('/img/momdaughter-disney.webp') ?>" alt="Mom and daughter with Mickey Mouse ears at Disney">
            <img src="<?php echo get_theme_file_uri('/img/women-beach.webp') ?>" alt="Friends giving a piggyback ride at a tropical beach">
        </div>

        <div class="home-banner-backdrop">
            <ul>
                <li class="d-flex gap-1 no-wrap">
                    <svg width="25" height="25" fill="#ce5927" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="m173.66 98.34a8 8 0 0 1 0 11.32l-56 56a8 8 0 0 1-11.32 0l-24-24a8 8 0 0 1 11.32-11.32l18.34 18.35 50.34-50.35a8 8 0 0 1 11.32 0zm58.34 29.66a104 104 0 1 1-104-104 104.11 104.11 0 0 1 104 104zm-16 0a88 88 0 1 0-88 88 88.1 88.1 0 0 0 88-88z"/>
                        <title>Checkmark inside a circle</title>
                    </svg>
                    <p>Booking Done for You</p>
                </li>
                <li class="d-flex gap-1 no-wrap">
                    <svg width="25" height="25" fill="#ce5927" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="m173.66 98.34a8 8 0 0 1 0 11.32l-56 56a8 8 0 0 1-11.32 0l-24-24a8 8 0 0 1 11.32-11.32l18.34 18.35 50.34-50.35a8 8 0 0 1 11.32 0zm58.34 29.66a104 104 0 1 1-104-104 104.11 104.11 0 0 1 104 104zm-16 0a88 88 0 1 0-88 88 88.1 88.1 0 0 0 88-88z"/>
                        <title>Checkmark inside a circle</title>
                    </svg>
                    <p>Offering You Exclusive Deals</p>
                </li>
                <li class="d-flex gap-1 no-wrap">
                    <svg width="25" height="25" fill="#ce5927" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="m173.66 98.34a8 8 0 0 1 0 11.32l-56 56a8 8 0 0 1-11.32 0l-24-24a8 8 0 0 1 11.32-11.32l18.34 18.35 50.34-50.35a8 8 0 0 1 11.32 0zm58.34 29.66a104 104 0 1 1-104-104 104.11 104.11 0 0 1 104 104zm-16 0a88 88 0 1 0-88 88 88.1 88.1 0 0 0 88-88z"/>
                        <title>Checkmark inside a circle</title>
                    </svg>
                    <p>No Hidden Fees, No Extra Costs, Less Stress</p>
                </li>
            </ul>

            <div>
                <a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/quote/" class="button-primary">Get A Quote</a>
                <a href="https://best-day-ever.web.dmitcapstone.ca/wordpress2/contact-jen/" class="button-cream">Contact Jennifer</a>
            </div>
        </div>
    </div>
</div>