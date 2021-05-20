<?php
get_header();
$stand_args = array(
    'post_type' => 'stand',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'desc',
);

$last_stands = new WP_Query($stand_args);


?>

  <div>
      <?php
      if ($last_stands->have_posts()) {
          while ($last_stands->have_posts()) {
              $last_stands->the_post();
              //var_dump($last_stands)
              ?>


            <h1><?php the_title(); ?></h1>
            <div class='card'>
              <div class='card-img'><img src="<?php the_field('imageUrl'); ?>" alt=""></div>
              <h3 class='card-heading'><?php the_field('name'); ?></h3>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nam
                dignissimos veniam!
              </p>
              <p class='card-category'><b>Zone : <?php the_field('zone'); ?></b></p>
            </div>
              <?php
          }
      } ?>

  </div>

<?php get_footer(); ?>