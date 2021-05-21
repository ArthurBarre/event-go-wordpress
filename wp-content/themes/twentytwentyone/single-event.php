<?php get_header(); ?>

<div>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
          <div class='card'>
            <div class='card-img'><img src="<?= get_field('imageUrl'); ?>" alt=''></div>
            <small class='card-category'><?= get_field('start_date') ?></small> - <small class='card-category'><?= get_field('end_date'); ?></small>
            <h3 class='card-heading'><?= get_field('name'); ?></h3>
            <p class='card-category'> Statut : <?= get_field('status'); ?></p>
            <p class='card-category'> Catégorie :<?= get_field('category'); ?></p>
          </div>
            <?php
        }
    } ?>

</div>

<?php get_footer(); ?>

