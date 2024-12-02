<?php get_header(); ?>
<main id="primary" class="site-main">
    <section class="main-section blog">
        <h2>Blog</h2>
        <section class="banner-for-section">
            <h3>Banner</h3>
            <div class="banner-blog">
                <div class="banner_container">
                    <div class="banner-section">
                        <?php
                        $banner_category = new WP_Query(array(
                            'category_name' => 'Featured Post',
                            'posts_per_page' => 1
                        ));

                        if ($banner_category->have_posts()):
                            while ($banner_category->have_posts()):
                                $banner_category->the_post();
                                ?>
                                <div><span class="span1">Blog</span><span class="span2">Featured Post</span></div>
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                                <a class="btn-primary custom-width" href="<?php the_permalink(); ?>">View Post</a>
                            </div>
                            <div class="image-banner-section">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endwhile;
                        else: ?>
                        <p>No posts found in this category.</p>
                    <?php endif;
                        // Reset Post Data
                        wp_reset_postdata(); ?>
                </div>
            </div>
            <nav class="nav-for-category" aria-label="Travel Category Navigation">
                <ul class="nav-for-category__non-carousel-menu">
                    <li class='nav-for-category__item'><a href="#disney">Disney Travel</a></li>
                    <li class='nav-for-category__item'><a href="#cruise">Cruise Travel</a></li>
                    <li class='nav-for-category__item'><a href="#honeymoon-and-wedding">Honeymoon & Wedding</a></li>
                    <li class='nav-for-category__item'><a href="#all-inclusive">All Inclusive & More</a></li>
                </ul>
                <ul class="nav-for-category__carousel-menu">
                    <li class='carousel-menu__item'><a href="#disney">Disney Travel</a></li>
                    <li class='carousel-menu__item'><a href="#cruise">Cruise Travel</a></li>
                    <li class='carousel-menu__item'><a href="#honeymoon-and-wedding">Honeymoon &
                            Wedding</a></li>
                    <li class='carousel-menu__item'><a href="#all-inclusive">All Inclusive & More</a>
                    </li>
                </ul>
                <!-- Next and previous buttons -->
                <a class="prev"><i class="bi bi-chevron-left" aria-label="Previous Blog Category"></i></a>
                <a class="next"><i class="bi bi-chevron-right" aria-label="Next Blog Category"></i></a>
            </nav>
        </section>

        <section class="latest-articles">
            <div class="container">
                <h3>Recent Posts</h3>
                <div class="row">
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-5"> <!-- Responsive columns -->
                            <article class="blog-card">

                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <img class="blog-card__card-img" src="<?php echo get_the_post_thumbnail_url(); ?>"
                                            alt="<?php the_title(); ?>" loading="lazy">
                                    <?php else: ?>
                                        <div class="blog-card__card-img"></div> <!-- Placeholder for missing image -->
                                    <?php endif; ?>
                                </a>

                                <div class="content-post">
                                    <a class="content-post__title-post" href="<?php the_permalink(); ?>">
                                        <h4><?php the_title(); ?></h4>
                                    </a>

                                    <div class="content-post__btn-post">
                                        <a href="<?php the_permalink(); ?>" class="button-blog-card">View More</a>
                                    </div>
                                </div>

                            </article>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="pagination">
                    <?php echo paginate_links(); ?>
                </div>
            </div>
        </section>




        <!-- Subscription-main -->
        <?php if (is_active_sidebar('subscription-main')) {
            dynamic_sidebar('subscription-main');
        }
        ;
        ?>

        <?php get_template_part('template-parts/display-category-posts'); ?>
        <?php get_template_part('template-parts/count-blog-posts'); ?>

        <?php
        if (count_blog_posts('cruise') > 0) { ?>
            <section id="cruise">
                <div class="container">
                    <h3>Cruise Travel Blog</h3>
                    <?php display_category_posts('Cruise', 3); ?>
                    <div class="link-main-category">
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('cruise'))); ?>">Check out
                            more<span><i class="bi bi-arrow-right" aria-label="Check more Cruise Blog"></i></span></a>
                    </div>
                </div>
            </section>
        <?php }
        ?>

        <?php
        if (count_blog_posts('disney') > 0) { ?>
            <section id="disney">
                <div class="container">
                    <h3>Disney Travel Blog</h3>
                    <?php display_category_posts('disney', 3); ?>
                    <div class="link-main-category">
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('disney'))); ?>">Check out
                            more<span><i class="bi bi-arrow-right" aria-label="Check more Disney Blog"></i></span></a>
                    </div>
                </div>
            </section>
        <?php }
        ?>


        <?php if (count_blog_posts('honeymoon-and-wedding') > 0) { ?>
            <section id="honeymoon-and-wedding">
                <div class="container">
                    <h3>Honeymoon and Wedding</h3>

                    <?php display_category_posts('honeymoon-and-wedding', 3) ?> <!-- Use category slug here as well -->

                    <div class="link-main-category">
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('honeymoon and wedding'))); ?>">Check out
                            more<span><i class="bi bi-arrow-right" aria-label="Check more Honeymoon and Wedding Blog"></i></span></a>
                    </div>
                </div>
            </section>
        <?php }
        ?>


        <?php
        if (count_blog_posts('all-inclusive, miscellaneous, Boutique ') > 0) { ?>
            <section id="all-inclusive">
                <div class="container">
                    <h3>All Inclusive &amp; More Travel Blog</h3>
                    <?php display_category_posts('all-inclusive, miscellaneous, Boutique', 3) ?>
                    <!-- Use category slug here as well -->

                    <div class="link-main-category">
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('all inclusive'))); ?>">Check out
                            more<span><i class="bi bi-arrow-right" aria-label="Check out more All Inclusive and Others"></i></span></a>
                    </div>
                </div>
            </section>
        <?php }
        ?>

        <?php if (is_active_sidebar('instagram')) {
            dynamic_sidebar('instagram');
        }
        ?>

    </section>
</main>
<?php get_footer(); ?>