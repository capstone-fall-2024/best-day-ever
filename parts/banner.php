<?php function get_the_post_thumbnail( $post = null, $size = 'post-thumbnail', $attr = '' ) {
	$post = get_post( $post );

	if ( ! $post ) {
		return '';
	}

	$post_thumbnail_id = get_post_thumbnail_id( $post );

	/**
	 * Filters the post thumbnail size.
	 *
	 * @since 2.9.0
	 * @since 4.9.0 Added the `$post_id` parameter.
	 *
	 * @param string|int[] $size    Requested image size. Can be any registered image size name, or
	 *                              an array of width and height values in pixels (in that order).
	 * @param int          $post_id The post ID.
	 */

	$size = apply_filters( 'post_thumbnail_size', $size, $post->ID );

	if ( $post_thumbnail_id ) {

		/**
		 * Fires before fetching the post thumbnail HTML.
		 *
		 * Provides "just in time" filtering of all filters in wp_get_attachment_image().
		 *
		 * @since 2.9.0
		 *
		 * @param int          $post_id           The post ID.
		 * @param int          $post_thumbnail_id The post thumbnail ID.
		 * @param string|int[] $size              Requested image size. Can be any registered image size name, or
		 *                                        an array of width and height values in pixels (in that order).
		 */
		do_action( 'begin_fetch_post_thumbnail_html', $post->ID, $post_thumbnail_id, $size );

		if ( in_the_loop() ) {
			update_post_thumbnail_cache();
		}

		$html = wp_get_attachment_image( $post_thumbnail_id, $size, false, $attr );

		/**
		 * Fires after fetching the post thumbnail HTML.
		 *
		 * @since 2.9.0
		 *
		 * @param int          $post_id           The post ID.
		 * @param int          $post_thumbnail_id The post thumbnail ID.
		 * @param string|int[] $size              Requested image size. Can be any registered image size name, or
		 *                                        an array of width and height values in pixels (in that order).
		 */
		do_action( 'end_fetch_post_thumbnail_html', $post->ID, $post_thumbnail_id, $size );

	} else {
		$html = '';
	}

	/**
	 * Filters the post thumbnail HTML.
	 *
	 * @since 2.9.0
	 *
	 * @param string       $html              The post thumbnail HTML.
	 * @param int          $post_id           The post ID.
	 * @param int          $post_thumbnail_id The post thumbnail ID, or 0 if there isn't one.
	 * @param string|int[] $size              Requested image size. Can be any registered image size name, or
	 *                                        an array of width and height values in pixels (in that order).
	 * @param string|array $attr              Query string or array of attributes.
	 */
	return apply_filters( 'post_thumbnail_html', $html, $post->ID, $post_thumbnail_id, $size, $attr );
}
?>


<?php $feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<div class="banner">
    <?php if ($feature_image) {
        echo '<img src="' . $feature_image[0] . '" alt="Featured image as the banner of ' . get_the_title() . ' page." class="img-fluid">';
    } else {
        echo '<img src="'. get_theme_file_uri('/img/people-on-the-beach-daytime.webp') .'" alt="Default banner image of people on the beach." class="img-fluid">';
    }?>
        <!-- wp:heading -->
        <?php echo the_title( '<p class="h1">', '</p>' ); ?>
        <!-- /wp:heading -->
    </div>
</div>


<!-- 

Use when Inserting into Template

<?php // if (has_post_thumbnail()) : ?>
    <?php // get_template_part('parts/banner'); ?>
<?php // endif; ?> 


-->