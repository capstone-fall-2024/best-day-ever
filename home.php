<?php get_header(); ?>
<main>
    <div class="hero">
        <div>
            <div class="">
                <h1>Blog</h1>
                <p>Featured Post</p>
            </div>
            <div>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            </div>
        </div>
        <div>
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="my-posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <article class="article-loop">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                </article>
            </a>
        <?php endwhile; else : ?>
            <article>
                <p>Sorry, no posts were found!</p>
            </article>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>