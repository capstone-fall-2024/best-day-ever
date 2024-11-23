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
    <section class="about-jen-container">
      <div class="about-jen">
        <div class="about-jen__text">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
          <h4>Your Personal Travel Agent</h4>
          <p>I love helping my clients see the world. Whether it is a small weekend trip, a cruise, theme park visit,
            all-inclusive, or a completely personal itinerary touring everywhere you could want to see – The world is
            your
            oyster. I can help you find just the right vacation for you.</p>
          <p>I love travel! Whether travelling for vacation, education, work, or family– I love it. Travel allows us to
            reconnect with our loved ones, celebrate, meet new people, see new things, and connect with our beautiful
            planet.</p>
          <p>All of my services are 100% free and can include special client gifts and caring attention to detail. I
            make
            sure that all of my clients have the best price that I can find, and if promotions come out that drop the
            price—I get them the lower price.</p>
          <p>As an Independent Agent Travel agent with Best Day Ever Vacations and a certified Disney Travel Planner, I
            have firsthand knowledge and experience with Disney Resorts and theme parks, setting sail aboard Disney
            Cruise
            ships, and exploring all the adventures Disney has to offer.</p>
          <p>I am always expanding my knowledge, certifications and learning about new destinations and how it can help
            my
            clients plan their Best Vacation Ever!!</p>
          <div class="paper-background"></div>
        </div>
        <div class="about-jen__img-container">
          <figure>
            <img src="<?php echo get_theme_file_uri('/img/pixabay-woman-portrait.jpg') ?>" alt="">
          </figure>
        </div>
      </div>
    </section>

    <div class="values-container">
      <div class="values-container__img-container">
        <figure>
          <img src="<?php echo get_theme_file_uri('/img/lake.jpg') ?>" alt="">
        </figure>
      </div>
      <div class="values-container__text">
        <h4>My Value</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </p>
      </div>
    </div>

    <div class="certifications">
      <div>
        <h3>My Certifications</h3>
        <p>I know Disney is a big draw for many families, but don’t worry, I am fully certified with all of the major
          cruise lines and so many travel locations around the world!</p>
      </div>
      <?php echo do_shortcode('[certificate_slider]'); ?>
    </div>


    <?php if (is_active_sidebar('instagram')) {
      dynamic_sidebar('instagram');
    }
    ;
    ?>

    <?php if (is_active_sidebar('subscription-main')) {
      dynamic_sidebar('subscription-main');
    }
    ;
    ?>
  </section>
</main>

<?php
get_sidebar();
get_footer();