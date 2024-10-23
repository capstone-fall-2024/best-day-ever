<?php $feature_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<div class="banner text-center mt-3">
    <img src="<?php echo $feature_image[0]; ?>" alt="Featured image as the banner of current page" class="img-fluid">
</div>