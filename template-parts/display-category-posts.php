<?php
function display_category_posts($category = '', $limit = 3)
{
  $args = array(
    'posts_per_page' => $limit
  );

  if (!empty($category)) {
    $args['category_name'] = $category; // or 'cat' => $category if using ID
  }

  $query = new WP_Query($args);
  if ($query->have_posts()): ?>
    <div class="row">
      <?php while ($query->have_posts()):
        $query->the_post(); ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-5"> <!-- Responsive columns -->
          <article class="post-item">
            <div class="image-post">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                    loading="lazy">
                <?php endif; ?>
              </a>
            </div>
            <div class="content-post">
              <a href="<?php the_permalink(); ?>">
                <h4><?php the_title(); ?></h4>
              </a>
            </div>
            <div class="btn-post">
              <a href="<?php the_permalink(); ?>" class="button-blog-card">View More</a>
            </div>
          </article>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <p>No posts found.</p>
  <?php endif;
  wp_reset_postdata();
}
?>