<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts()
{
  wp_enqueue_style('style-child', get_stylesheet_directory_uri() . '/style.css', array('mcluhan-style'));
}

// 挿入するカスタム関数 これは例
function favicon_link()
{
  echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action('wp_head', 'favicon_link');
