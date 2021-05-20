<?php
get_header();
$event_args = array(
    'post_type' => 'event',
    "posts_per_page" => 3,
    'orderby' => 'date',
    'order' => 'desc',
);

$last_events = new WP_Query($event_args);
ob_start();

?>

<div>
    <?php
    if ($last_events->have_posts()) {
        while ($last_events->have_posts()) {
            $last_events->the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class='card'>
                <div class='card-img'><img src="<?php the_field('imageUrl'); ?>" alt=""></div>
                <small class='card-category'><?php the_field('start_date') ?></small> - <small class='card-category'><?php the_field('end_date'); ?></small>
                <h3 class='card-heading'><?php the_field('name'); ?></h3>
                <p class="description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nam
                  dignissimos veniam!
                </p>
                <p class='card-category'> Statut : <?php the_field('status'); ?></p>
                <p class='card-category'> Catégorie :<?php the_field('category'); ?></p>
            </div>
            <?php
        }
    } ?>

</div>

<?php get_footer(); ?>

