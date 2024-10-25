<?php $feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<div class="banner text-center mt-3">
    <img src="<?php echo $feature_image[0]; ?>" alt="Featured image as the banner of <?php the_title(); ?>" class="img-fluid">
    <div>
        <!-- wp:heading -->
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <!-- /wp:heading -->
    </div>
</div>


<!-- 

Use when Inserting into Template

<?php // if (has_post_thumbnail()) : ?>
    <?php // get_template_part('parts/banner'); ?>
<?php // endif; ?> 


-->