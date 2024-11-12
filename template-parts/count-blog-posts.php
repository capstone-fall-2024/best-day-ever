<?php
function count_blog_posts($category_slug)
{
  $args = array(
    'category_name' => $category_slug, // Use category slug
    'posts_per_page' => -1, // Get all posts in this category
  );
  // Get the posts based on the query
  $posts = get_posts($args);
  // Count the posts
  $post_count = count($posts);
  // Return the post count and use it for later
  return $post_count;
}
?>