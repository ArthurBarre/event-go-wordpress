<?php get_header(); ?>

  <div>
      <?php
      if (have_posts()) {
          while (have_posts()) {
              the_post(); ?>
            <article class='single-element'>
              <h1><?= get_field('name') ?></h1>
              <hr>
              <section>
                <div class="flex-row">
                  <img src="<?= get_field('imageUrl'); ?>" alt='image' width="500px">
                  <div class="single-element__description">
                    <div><?= get_field('description') ?></div>
                    <div class="single-element__about">
                      <p>Référence de la zone : <?= get_field('zone') ?></p>
                    </div>
                  </div>
                </div>
              </section>
            </article>
              <?php
          }
      } ?>
  </div>

<?php get_footer(); ?>