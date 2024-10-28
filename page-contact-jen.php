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
    <section>
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <?php the_content(); ?>

        <?php if (is_active_sidebar('accordion-faqs')) {
            dynamic_sidebar('accordion-faqs');
        }
        ;
        ?>

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
    </section>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
