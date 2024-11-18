<?php
    function display_specialties_slider_shortcode() {
        $args = array(
            'post_type' => 'specialty',
            'posts_per_page' => -1, 
        );

        $specialty_slider_query = new WP_Query($args);
        if($specialty_slider_query->have_posts()) {
            ob_start();
        ?>
        <div class="slider">
            <div class="specialties-slider-inner">
                <?php
                    $index = 0;
                    while($specialty_slider_query->have_posts()) : $specialty_slider_query->the_post();
                    if(function_exists('get_field')) {
                        $specialty_name = get_field('specialty_name');
                        $specialty_description = get_field('specialty_description');
                        $specialty_url = get_field('link_to_specialty');
                    };
                ?>
                <div class="specialties-slider-item <?php echo $index; ?>">
                    <div class="specialty">
                        <h4><?php echo esc_html($specialty_name); ?></h4>
                        <p><?php echo esc_html($specialty_description); ?></p>
                        <a href="<?php echo esc_url($specialty_url); ?>">View More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <?php 
                    $index++;
                    endwhile;
                ?>
            </div>  

            <!-- Carousel Slider Arrow -->
            <div class="slider-control">
                <button class="slider-prev specialties-prev"><i class="bi bi-arrow-left-circle"></i></button>
                <button class="slider-next specialties-next"><i class="bi bi-arrow-right-circle"></i></button>
            </div>
        </div>
        <?php 
            wp_reset_postdata();
            return ob_get_clean();
        } else {
            return "<p>No slider items found.</p>";
        }
    }
    add_shortcode('specialty_slider', 'display_specialties_slider_shortcode');
?>