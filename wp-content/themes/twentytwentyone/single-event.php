<?php get_header(); ?>

<div>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
          <article class="single-element">
            <h1><?= get_field('name') ?></h1>
            <hr>
            <section>
              <div class="flex-row">
               <img src="<?= get_field('imageUrl'); ?>" style='width: 49%;' alt='image'>
                <div class="single-element__description">
                  <div><?= get_field('description') ?></div>
                  <div class="single-element__about">
                    <p>Du <?= get_field('start_date') ?> au <?= get_field('end_date') ?></p>
                    <p>Statut de l'évènement : <?= get_field('status') ?></p>
                    <p>Categorie de l'évènement : <?= get_field('category') ?></p>
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

