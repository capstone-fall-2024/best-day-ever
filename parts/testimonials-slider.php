    <?php
        function display_testimonial_slider_shortcode() {
            $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => -1, // Show all testimonials
            );

            $testimonials_slider_query = new WP_Query($args);

            if ($testimonials_slider_query->have_posts()) {
                ob_start();
                ?>  
                <div class="slider">
                    <div class="slider-inner">
                        <?php
                            $index = 0;
                            while ($testimonials_slider_query->have_posts()) : $testimonials_slider_query->the_post();
                                if (function_exists('get_field')) {
                                    $author_name = get_field('authors_name');
                                    $author_vacation = get_field('authors_vacation');
                                    $title = get_field('title');
                                    $message = get_field('message');
                                    $rating = get_field('rating');
                                    $author_photo = get_field('authors_photo');
                                }
                        ?>
                            <!-- Make only the first item active, the rest will be visible but not active -->
                            <div class="slider-item <?php echo ($index < 2) ? 'active' : ''; ?>">
                                <div class="testimonial">
                                    <div class="rating">
                                    <?php
                                        $fullStars = intval($rating);
                                        for ($i = 1; $i <= 5; $i++) {
                                            echo ($i <= $fullStars) ? '<span class="star filled">&#9733;</span>' : '<span class="star">&#9734;</span>';
                                        }
                                    ?>
                                    </div>
                                    <h4><?php echo esc_html($title); ?></h4>
                                    <p><?php echo esc_html($message); ?></p>
                                    <div class="author-info">
                                        <?php if ($author_photo) : ?>
                                            <img src="<?php echo esc_url($author_photo['url']); ?>" alt="<?php echo esc_attr($author_photo['alt']); ?>">
                                        <?php endif; ?>
                                        <div class="author-details">
                                            <p><?php echo esc_html($author_name); ?></p>
                                            <p><?php echo esc_html($author_vacation); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            $index++;
                            endwhile;
                        ?>
                    </div>

                    <!-- Carousel Slider Arrow -->
                    <div class="slider-control">
                        <button class="slider-prev"><i class="bi bi-arrow-left-circle"></i></button>
                        <button class="slider-next"><i class="bi bi-arrow-right-circle"></i></button>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
                return ob_get_clean();
            } else {
                return '<p>No slider items found</p>';
            }
        }
        add_shortcode('testimonials_carousel', 'display_testimonial_slider_shortcode');
        ?>