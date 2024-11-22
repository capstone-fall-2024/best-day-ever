<?php

/**
 * The template for display the Contact Jen page only
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
        <!-- Form Container -->
        <div class="quote-page">
            <div class="quote-form container">
                <div class="steps-container">
                    <div class="steps-step active">
                        <p class="step-number">1</p>
                        <p class="step-info">Client Information</p>
                    </div>
    
                    <div class="steps-step">
                        <p class="step-number">2</p>
                        <p class="step-info">Trip Information</p>
                    </div>
    
                    <div class="steps-step">
                        <p class="step-number">3</p>
                        <p class="step-info">Confirmation</p>
                    </div>
                </div>
    
                <!-- Quote Form shortcode -->
                <div class="form-container">
                    <?php echo do_shortcode('[contact-form-7 id="e96a514" title="quote-form"]'); ?>
                </div>
                <!-- Form Steps -->
            </div>
            
        </div>
    </section>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
