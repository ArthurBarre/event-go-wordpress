<?php

/**
 * Plugin Name: Affichage évenements
 * Description: Une application qui va créer un CPT livres et un shortcode [mes_livres] qui va afficher 3 livres au hasard sur une page
 * Author: Jean-François DI RIENZO
 * Version: 1.0
 * Author URI: https://totastudio.com/
 * Text Domain: jf-livre-affichage
 * License: GPL-2.0+
 */

//=================================================
// Security: Abort if this file is called directly
//=================================================
if (!defined('ABSPATH')) {  // ABSPATH = Absolute Path
    die;
}

function display_events($user_args)
{

    $event_args = array(
        'post_type' => 'event',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'desc',
    );

    // $shortcodes = shortcode_atts($event_args, $user_args);


    $last_events = new WP_Query($event_args);

    ob_start();

    ?>

      <?php

      if ($last_events->have_posts()) {
          while ($last_events->have_posts()) {
              $last_events->the_post(); ?>
            <div class='card'>
              <div class='card__header'>
                <div class='card__img'><img src="<?= get_field('imageUrl'); ?>" alt=''></div>
                <div class='card__cover'></div>
                <div class='card__name'>
                  <div class='card__name--main'><a href='<?= get_permalink(); ?>'><?= get_field('name'); ?></a></div>
                  <div class='card__date'><small class='card-category'><?= get_field('start_date') ?></small> - <small class='card-category'><?= get_field('end_date'); ?></small></div>
                </div>
              </div>
              <div class='card__content'>
                <div class='card__about'>
                  <div class='card__info'><?= get_field('description'); ?></div>
                </div>
                <div class="card__data">
                  <div class="card__data-item">
                    <div class="card__data-label">Statut</div>
                    <div class="card__data-info"><?= get_field('status'); ?></div>
                  </div>
                  <div class="card__data-item">
                    <div class="card__data-label">Catégorie</div>
                    <div class="card__data-info"><?= get_field('category'); ?></div>
                  </div>
                </div>
              </div>
            </div>
              <?php
          }
      }
      wp_reset_postdata();
      ?>
    <?php

    return ob_get_clean();
}

function display_events_init()
{
    add_shortcode('mes_events', 'display_events');
}

add_action('init', 'display_events_init');