<?php

/**
 * The template for display the Special Deals page only
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

<main id="primary" class="site-main special-deals">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    <?php the_content(); ?>

    <!-- Norwegian Deals -->
    <section class="container">
        <div class="cruise">
            <h3>Norwegian Cruise Lines</h3>
            <div class="intro">
                <img src="<?php echo get_theme_file_uri('/img/meal-on-the-cruise.webp') ?>" alt="A fancy on the cruises">
                <div class="intro-content">
                    <h4 class="deals-title">Fall into Savings for Your Next Vacation</h4>
                    <p class="deals-content">Make your Disney Cruise Line reservation with us before 09/30/2024 and receive incredible shipboard credits to spend on your cruise and exclusive gift!</p>
                </div>
                <div class="intro-content">
                    <h4 class="deals-title">Save 70% Off 2nd Guest</h4>
                    <p class="deals-content">Disney Cruise Line changes their discounts and special offers weekly, if not more, so be sure to check back each week to see what’s new!</p>
                </div>
                <a href="<?php echo site_url('/vacations/cruises'); ?>" class="btn-primary">View Our Cruise</a>
            </div>

            <!-- Each cards deal -->
            <div class="deals-cards swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide deals-card">
                        <img src="<?php echo get_theme_file_uri('/img/cheers.png') ?>" alt="Graphic icon of two glasses cheers">
                        <h4>Free Unlimited Open Bar</h4>
                        <p>Save up to $1,400 on all the spirits and cocktails, wines, draft beer, juice and soda.</p>
                    </div>
    
                    <div class="swiper-slide deals-card">
                        <img src="<?php echo get_theme_file_uri('/img/fork-knife.png') ?>" alt="Graphic icon of fork and knife">
                        <h4>Free Specialty Dining</h4>
                        <p>Save up to $180 and savor free meals at our specialty dining venues.</p>
                    </div>
    
                    <div class="swiper-slide deals-card">
                        <img src="<?php echo get_theme_file_uri('/img/island.png') ?>" alt="Graphic icon of island and coconut tree">
                        <h4>Free Shore Excursion</h4>
                        <p>Save up to $50 per shore excursion, per stateroom with shore excursion credits.</p>
                    </div>
    
                    <div class="swiper-slide deals-card">
                        <img src="<?php echo get_theme_file_uri('/img/wifi-high.png') ?>" alt="Graphic icon of wifi symbol">
                        <h4>Free Wifi</h4>
                        <p>Save up to $200 with an internet package you can use anywhere on the ship.</p>
                    </div>
    
                    <div class="swiper-slide deals-card">
                        <img src="<?php echo get_theme_file_uri('/img/users-four.png') ?>" alt="Graphic icon of four users icon head">
                        <h4>Free 3rd & 4th Guests</h4>
                        <p>Save up to $1,000 with free third and fourth guests on select dates.</p>
                    </div>
    
                    <div class="swiper-slide deals-card">
                        <img src="<?php echo get_theme_file_uri('/img/airplane-tilt.png') ?>" alt="Graphic icon of an airplane">
                        <h4>Free Airfare</h4>
                        <p>Pay airfare for one guest, and you'll automatically lock-in roundtrip flights for two.</p>
                    </div>
                </div>

                <div class="swiper-arrows">
                    <div class="swiper-button-prev"><i class="bi bi-arrow-left-circle"></i></div>
                    <div class="swiper-button-next"><i class="bi bi-arrow-right-circle"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Deals -->
    <section>
        <?php get_template_part('parts/special-deals'); ?>
    </section>

    <!-- Jennifer Section -->
    <div class="jen-contact">
        <p>Have any questions about our deals? Still unsure about which trip is right for you?</p>
        <p>Get in touch with Jen or check the FAQ!</p>
        <div class="social-media">
            <img src="<?php echo get_theme_file_uri('/img/facebook.png') ?>" alt="Facebook Icon">
            <img src="<?php echo get_theme_file_uri('/img/instagram.png') ?>" alt="Instagram Icon">
        </div>
        <img src="<?php echo get_theme_file_uri('/img/pixabay-woman-portrait.jpg') ?>" alt="Jennifer Portrait Image">
        
        <div>
            <a href="<?php echo site_url('/contact-jen'); ?>" class="btn-primary">Contact Jen</a>
            <a href="<?php echo site_url('/contact-jen#faqs'); ?>" class="button-secondary">FAQs</a>
        </div>
    </div>

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
    };
    ?>

    <!-- Imstagram -->
    <?php if (is_active_sidebar('instagram')) {
        dynamic_sidebar('instagram');
    };
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
