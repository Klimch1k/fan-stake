<?php

function fan_stake_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action('after_setup_theme', 'fan_stake_setup');

function fan_stake_register_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
    ]);
}
add_action('init', 'fan_stake_register_menus');
