<?php get_header(); ?>
<main id="primary" class="site-main">
    <section>
        <div class="posts-banner">
            <div class="posts-banner__bg-image"></div>
            <div class="post-banner">
                <?php
                $banner_category = new WP_Query(array(
                    'category_name' => 'Best Article',
                    'posts_per_page' => 1
                ));
                if ($banner_category->have_posts()):
                    while ($banner_category->have_posts()):
                        $banner_category->the_post(); ?>
                        <article class="banner-category-content">
                            <p><span>Blog</span><span>feature post</span></p>
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>">View More</a>
                        </article>

                        <div class="banner-category-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
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
            <ul>
                <li><a href="#disney">Disney Travel</a></li>
                <li><a href="#cruise">Cruise Travel</a></li>
                <li><a href="#honeymoon-wedding">Honeymoon & Wedding</a></li>
                <li><a href="#all-inclusive">All Inclusive Travel</a></li>
            </ul>
        </nav>
    </section>
    <section class="latest-articles">
        <h2>Recent Posts</h2>
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="posts">
                <article>
                    <div class="image-post">
                        <a href='<?php the_permalink(); ?>'>
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>

                        </a>
                    </div>
                    <div class="content-post">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </div>
                </article>
                <div class="btn-post">
                    <a href="<?php the_permalink(); ?>">View More</a>
                </div>
            </div>

        <?php }
        echo paginate_links();
        ?>
    </section>

    <!-- Function to display category with limit 3 post (disney/cruise/all-inclusive,etc) -->

    <?php
    function display_category_posts($categories, $limit = 3)
    {
        // Join multiple categories with commas for the WP Query
        $category_query = is_array($categories) ? implode(',', array_map('trim', $categories)) : trim($categories);

        $query = new WP_Query(array(
            'category_name' => $category_query,
            'posts_per_page' => $limit
        ));
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post(); ?>
                <div class="post">
                    <article>
                        <div class="image-post">
                            <a href='<?php the_permalink(); ?>'>
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="content-post">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </div>
                    </article>
                    <div class="btn-post">
                        <a href="<?php the_permalink(); ?>">View More</a>
                    </div>
                </div>
            <?php endwhile;
        else: ?>
            <p>No posts found in this category.</p>
        <?php endif;
        wp_reset_postdata();
    }

    // End Function
    
    ?>
    <!-- Subscription-main -->
    <?php if (is_active_sidebar('subscription-main')): ?>

        <?php dynamic_sidebar('subscription-main'); ?>

    <?php endif; ?>

    <section id="cruise">
        <h2>Cruise Travel Blog</h2>
        <?php display_category_posts('Cruise') ?>
        <a href="<?php echo esc_url(get_category_link(get_cat_ID('Cruise'))); ?>">Check our more</a>

    </section>

    <section id="disney">
        <h2>Disney Travel Blog</h2>
        <?php display_category_posts('Disney') ?>
        <a href="<?php echo esc_url(get_category_link(get_cat_ID('Disney'))); ?>">Check our more</a>
    </section>

    <section id="honeymoon-wedding">
        <h2>Honeymoon and Wedding Travel Blog</h2>
        <?php display_category_posts(array('Honeymoon and Wedding')) ?>
        <a href="<?php echo esc_url(get_category_link(get_cat_ID('Honeymoon and Wedding'))); ?>">Check our more</a>
    </section>

    <section id="all-inclusive">
        <h2>All Inclusive Travel Blog</h2>
        <?php display_category_posts('All Inclusive') ?>
        <a href="<?php echo esc_url(get_category_link(get_cat_ID('All Inclusive'))); ?>">Check our more</a>
    </section>
</main>
<?php get_footer(); ?>