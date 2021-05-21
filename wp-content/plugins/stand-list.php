<?php

/**
 * Plugin Name: Affichage stands
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

function display_stands($user_args)
{

    $stand_args = array(
        'post_type' => 'stand',
        'posts_per_page' => 10,
        'orderby' => 'date',
        'order' => 'desc',
    );

    // $shortcodes = shortcode_atts($stand_args, $user_args);


    $last_stands = new WP_Query($stand_args);

    ob_start();

    ?>
    <?php

    if ($last_stands->have_posts()) {
        while ($last_stands->have_posts()) {
            $last_stands->the_post(); ?>
          <div class='card'>
            <div class='card__header'>
              <div class='card__img'><img src="<?php the_field('imageUrl'); ?>" alt='image'></div>
              <div class='card__cover'></div>
              <div class='card__name'>
                <div class='card__name--main'><a href='<?= get_permalink(); ?>'><?= get_field('name'); ?></a></div>
              </div>
            </div>
            <div class='card__content'>
              <div class='card__about'>
                <div class='card__info'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nam dignissimos veniam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dicta doloremque eligendi error fugit incidunt labore magnam, minima minus nam, necessitatibus nemo provident quae reiciendis repellendus sunt voluptate voluptatibus? Eveniet!
                </div>
              </div>
              <div class="card__data">
                <div class="card__data-item">
                  <div class="card__data-label">Zone</div>
                  <div class="card__data-info"><?php the_field('zone'); ?></div>
                </div>
              </div>
            </div>
          </div>
            <?php
        }
    }
    wp_reset_postdata();  ?>
    <?php

    return ob_get_clean();
}

function display_stands_init()
{
    add_shortcode('mes_stands', 'display_stands');
}

add_action('init', 'display_stands_init');