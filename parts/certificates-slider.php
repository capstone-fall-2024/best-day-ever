<?php
    function display_certificate_slider_shortcode() {
        $args = array(
            'post_type' => 'certification',
            'posts_per_page' => -1,
        );

        $certificate_slider_query = new WP_Query($args);
        if($certificate_slider_query->have_posts()) {
            ob_start();
        ?>
        <div class="slider">
            <div class="certificate-slider-inner">
                <?php
                    $index = 0;
                    while($certificate_slider_query->have_posts()) : $certificate_slider_query->the_post();
                    if(function_exists('get_field')) {
                        $certificate_url = get_field('certificate_image');
                    }
                ?>
                <div class="certificate-slider-item <?php echo ($index < 2) ? 'active' : '' ?>">
                    <div class="certificate">
                        <img src="<?php echo esc_url($certificate_url['url']); ?>" alt="<?php echo esc_attr($certificate_url['alt']); ?>">
                    </div>
                </div>
                <?php
                    $index++;
                    endwhile;
                ?>
            </div>
            <!-- Carousel Slider Arrow -->
            <div class="slider-control">
                <button class="slider-prev certificate-prev"><i class="bi bi-arrow-left-circle"></i></button>
                <button class="slider-next certificate-next"><i class="bi bi-arrow-right-circle"></i></button>
            </div>
        </div>
        <?php
            wp_reset_postdata();
            return ob_get_clean();
        } else {
            return "<p>No certificates found.</p>";
        }
    }
    add_shortcode('certificate_slider', 'display_certificate_slider_shortcode');
?>