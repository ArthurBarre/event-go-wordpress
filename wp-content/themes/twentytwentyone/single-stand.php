<?php get_header(); ?>

  <div>
      <?php
      if (have_posts()) {
          while (have_posts()) {
              the_post(); ?>
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