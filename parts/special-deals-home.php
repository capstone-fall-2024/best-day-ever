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
    $displayed_categories = array_slice($categories, 0, 2);

    foreach ($displayed_categories as $category => $post) {
        $post_id = $post[0];
        $featured_image = get_field('deal_featured_image', $post_id);
        
        if (!empty($featured_image)) {
            echo '<div class="special-deal-card">';
            echo '<img src="'.$featured_image.'" alt="' . esc_attr(get_the_title()) . '"/>';
        }

        $args = array(
            'post_type' => 'special-deal', 
            'posts_per_page' => 1,
            'post__in' => array($post_id),
            'post_status' => 'publish',
        );

        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post();

                $deals_description = get_field('deal_description');
                $deals_url = get_field('deal_url');

                echo '<div class="info">';
                echo '<h4>' . get_the_title() . '</h4>';
                echo '<p>' . esc_html($deals_description) . '</p>';
                echo '<a href="' . esc_url($deals_url) . '" class="btn-primary">Learn More</a>';
                echo '</div>';
            }
        } else {
            echo '<p>No posts found for this category.</p>';
        }
        
        echo '</div>';

        wp_reset_postdata();
    }
}

display_special_deals();
