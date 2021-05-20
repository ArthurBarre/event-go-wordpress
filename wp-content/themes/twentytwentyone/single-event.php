<?php

$event_args = array(
    'post_type'=>'event',
    "posts_per_page"=>3,
    'orderby'=>'date',
    'order'=>'desc'
);

$last_events = new WP_Query( $event_args );

ob_start(); 

?>

<div>
<?php
    if($last_events->have_posts()){
        while ($last_events->have_posts()) {
            $last_events->the_post();
            var_dump($last_events->the_post())
            ?>
            <div>
                <div> <?php the_title(); ?> </div>
            </div>
            <?php
        }
    }
?>

</div>
