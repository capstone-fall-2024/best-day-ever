<?php

function display_special_deals()
{
    $args = array(
        'post_type' => 'special-deal',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $query = new WP_Query($args);

    $categories = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $category = get_field('category');

            if ($category) {
                $categories[$category][] = get_the_ID();
            }
        }
    } else {
        echo '<p>No posts found in the initial query.</p>';
    }

    wp_reset_postdata();

    foreach ($categories as $category => $posts) {
        $random_image = $posts[array_rand($posts)];
        $featured_image = get_field('deal_featured_image', $random_image);
        echo '<div class="deals-promo">';
        echo '<h3>' . esc_html($category) . '</h3>';
        if (!empty($featured_image)) {
            echo '<img src="'.$featured_image.'" alt="' . esc_attr(get_the_title()) . '"/>';
        }

        $args = array(
            'post_type' => 'special-deal', // Correct post type
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC',
            'post__in' => $posts,
            'post_status' => 'publish',
        );

        $category_query = new WP_Query($args);

        echo '<div class="promo-content">';
        if ($category_query->have_posts()) {
            while ($category_query->have_posts()) {
                $category_query->the_post();

                $deals_description = get_field('deal_description');
                echo '<div class="promo-info">';
                echo '<h4>' . get_the_title() . '</h4>';
                echo '<p>' . esc_html($deals_description) . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p>No posts found for this category.</p>';
        }
        
        echo '<a href="' . esc_url(site_url('/quote')) . '" class="btn-primary">Get a Quote</a>';
        echo '</div>';
        echo '</div>';
        wp_reset_postdata();
    }
}

display_special_deals();
