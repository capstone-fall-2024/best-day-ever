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
    <?php the_title('<h1 class="entry-title-about-jen">', '</h1>'); ?>
    <section class="about-jen-container">
      <div class="about-jen">
        <div class="about-jen__text">
          <h2>About Jen</h2>
          <h3>Your Personal Travel Agent</h3>
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
            <img src="<?php echo get_theme_file_uri('/img/pixabay-woman-portrait.jpg') ?>" alt="A photo of a woman smiling.">
          </figure>
        </div>
      </div>
    </section>

    <div class="values-container">
      <div class="values-container__img-container">
        <figure>
          <img src="<?php echo get_theme_file_uri('/img/lake.jpg') ?>" alt="First person view of sitting on a wooden boat on a lake, surrounded by the mountains." class="img-rounded">
        </figure>
      </div>
      <div class="values-container__text">
        <h3>Our Mission is...</h3>
        <p>To be the leading travel agency in the design of exclusive and personalized
          experiences, making our clients live memorable moments and fulfill their dreams
          through unique trips that they will remember for the rest of their lives.
          We do this with excellent customer and vendor relationships, professionalism, flexibility,
          and customer service.
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