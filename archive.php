<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

get_header();
?>

<main id="primary" class="site-main">
	<section>
		<div class="single-banner">
			<div class="single-banner__bg-image"></div>
			<div class="single-banner-content">
				<p>Blog</p>
				<h2>
					<?php
					if (is_category()) {
						single_cat_title();
						echo ' Travel';
					}

					if (is_author()) {
						echo 'Posts by ';
						the_author();
					}
					?>
				</h2>
				<div>
					<p><?php the_archive_description(); ?></p>
				</div>
			</div>
		</div>
		<section>
			<h3>Heading 3</h3>
			<?php while (have_posts()) {
				the_post(); ?>
				<div class="posts">
					<article>
						<div class="image-post">
							<a href='<?php the_permalink(); ?>'>
								<?php if (has_post_thumbnail()): ?>
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								<?php endif; ?>

							</a>
						</div>
						<div class="content-post">
							<a href="<?php the_permalink(); ?>">
								<h4><?php the_title(); ?></h4>
							</a>
						</div>
					</article>
					<div class="btn-post">
						<a href="<?php the_permalink(); ?>">View More</a>
					</div>
				</div>
			<?php }
			echo paginate_links();
			?>
		</section>
		<!-- Subscription-main -->
		<?php if (is_active_sidebar('subscription-main')): ?>

			<?php dynamic_sidebar('subscription-main'); ?>

		<?php endif; ?>

	</section>







</main>

<?php
get_sidebar();
get_footer();
