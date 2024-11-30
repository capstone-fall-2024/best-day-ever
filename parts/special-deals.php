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
        echo '<p>No posts found.</p>';
    }

    wp_reset_postdata();

    foreach ($categories as $category => $posts) {
        
        echo '<div class="deals-promo">';
        echo '<h3>' . esc_html($category) . '</h3>';

        foreach ($posts as $post_id) {
            $deal_title = get_the_title($post_id);
            $deal_image = get_field('deal_featured_image', $post_id);
            $deal_description = get_field('deal_description', $post_id);
            $deal_url = get_field('deal_url', $post_id);
            
            echo '<div class="deals-item">';
            if(!empty($deal_image)) {
                echo '<img src="' . esc_url($deal_image) .'" alt="'. esc_attr($deal_title) .'"/>';
            }
            echo '<div class="promo-info">';
            echo '<h4>' . $deal_title . '</h4>';
            echo '<p>' . esc_html($deal_description) . '</p>';
            echo '<div class="cta-btns">';
            echo '<a href="' . esc_url(site_url('/quote')) . '" class="btn-primary">Get a Quote</a>';
            echo '<a href="' . esc_url($deal_url) . '" class="button-secondary">Learn More</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        wp_reset_postdata();
    }
}

display_special_deals();
