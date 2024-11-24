<?php

/**
 * The template for display the Quote Form Confirmation Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    <section>
        <?php the_content(); ?>

        <!-- Confirmation -->
        <div class="confirmation-container">
            <div class="confirmation container">
                <div class="steps-container">
                    <div class="steps-step">
                        <p class="step-number">1</p>
                        <p class="step-info">Client Information</p>
                    </div>

                    <div class="steps-step">
                        <p class="step-number">2</p>
                        <p class="step-info">Trip Information</p>
                    </div>

                    <div class="steps-step confirmed">
                        <p class="step-number">3</p>
                        <p class="step-info">Confirmation</p>
                    </div>
                </div>

                <div class="confirmation-content">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/check-mark.png" alt="A checkmark inside the round circle">
                    <h3>Thank You!</h3>
                    <p>I’m excited to assist you with your travel plans! I’m reviewing your details and will prepare a customized quote for you as soon as possible.</p>
                    <p>In the meantime, feel free to explore our <a href="<?php echo site_url('/contact-jen') ?>">FAQ</a> or <a href="<?php echo site_url('/blog') ?>">learn more</a> about my travel blogs.</p>
    
                    <div class="btns">
                        <a href="<?php echo site_url('/contact-jen') ?>">Visit FAQs</a>
                        <a href="<?php echo site_url() ?>">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
