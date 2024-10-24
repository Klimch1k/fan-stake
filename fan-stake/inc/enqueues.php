<?php

function fan_stake_enqueue_scripts()
{
    wp_enqueue_style('fan-stake-style', get_template_directory_uri() . '/css/style.bundle.css', array(), '1.0', 'all');

    wp_enqueue_script('fan-stake-script', get_template_directory_uri() . '/js/bundle.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'fan_stake_enqueue_scripts');
