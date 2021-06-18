<?php

var_dump($_POST);
function post_un_truc()
{
    if (!empty($_POST && wp_verify_nonce($_POST['securite_nonce'], 'what-who_which'))) {

        $post_args = array(
            'post_type' => 'events',
            'post_title' => $_POST['title'],
            'post_description' => $_POST['description']
        );

        // Maintenant on poste le truc
        wp_insert_post($post_args);

        // Et à faire une redirection
        wp_redirect($_POST['_wp_http_referer'].'?status=sent');
        exit;
    } else {
        wp_nonce_ays('what-who_which');
    }
}
add_action('admin_post_post_un_truc', 'post_un_truc');
