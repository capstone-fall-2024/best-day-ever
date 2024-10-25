<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<section>
			<?php the_content(); ?>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
