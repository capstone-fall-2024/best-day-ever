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
                    <div class="testimonial-slider-inner">
                        <?php
                            $index = 0;
                            while ($testimonials_slider_query->have_posts()) : $testimonials_slider_query->the_post();
                                if (function_exists('get_field')) {
                                    $author_name = get_field('authors_name');
                                    $author_vacation = get_field('authors_vacation');
                                    $title = get_the_title();
                                    $message = get_field('message');
                                    $truncated_message = wp_trim_words($message, 20, '...');
                                    $rating = get_field('rating');
                                    $author_photo = get_field('authors_photo');
                                }
                        ?>

                            <div class="testimonial-slider-item <?php echo $index; ?>">
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
                                    <div class="message">
                                        <p class="short-message"><?php echo esc_html($truncated_message); ?></p>
                                        <p class="full-message"><?php echo esc_html($message); ?></p>
                                        <a class="toggle-message">Read More</a>
                                    </div>
                                    <div class="author-info">
                                        <?php if ($author_photo) : ?>
                                            <img src="<?php echo esc_url($author_photo['url']); ?>" alt="<?php echo esc_attr($author_photo['alt']); ?>">
                                        <?php else : ?>
                                            <img src="<?php echo get_theme_file_uri('/img/user-avatar.png') ?>" alt="<?php echo esc_html($author_name); ?>">
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
                        <button class="slider-prev testimonial-prev"><i class="bi bi-arrow-left-circle" aria-label="previous testimonial review"></i></button>
                        <button class="slider-next testimonial-next"><i class="bi bi-arrow-right-circle" aria-label="next testimonial review"></i></button>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
                return ob_get_clean();
            } else {
                return '<p>No slider items found</p>';
            }
        } ?>
        <?php
        add_shortcode('testimonials_slider', 'display_testimonial_slider_shortcode');
        ?>