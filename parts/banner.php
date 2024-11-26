<?php $feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<div class="vacation-banner">
    <?php if ($feature_image) {
        echo '<img src="' . $feature_image[0] . '" alt="Featured image as the banner of ' . get_the_title() . ' page.">';
    } else {
        echo '<img src="'. get_theme_file_uri('/img/people-on-the-beach-daytime.webp') .'" alt="Default banner image of people on the beach.">';
    }?>
        <!-- wp:heading -->
        <div>
            <?php echo the_title( '<p>', '</p>' ); ?>
        </div>
        <!-- /wp:heading -->
</div>
