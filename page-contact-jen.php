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
    <?php the_content(); ?>
    
    <section class="container" id="faqs">
        <?php if (is_active_sidebar('accordion-faqs')) {
            dynamic_sidebar('accordion-faqs');
        }
        ;
        ?>
    </section>
    
        <?php if (is_active_sidebar('subscription-main')) {
            dynamic_sidebar('subscription-main');
        }
        ;
        ?>

        <?php if (is_active_sidebar('instagram')) {
            dynamic_sidebar('instagram');
        }
        ;
        ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
