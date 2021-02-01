<?php

function theme_support()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_support');

function load_stylesheets()
{
  wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), '4.0.0', 'all');

  wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css", array(), '5.15.2', 'all');

  wp_enqueue_style('custom-styles', get_template_directory_uri() . "/styles/style.css", array(), '1.0', 'all');

  wp_enqueue_style('hamburger', get_template_directory_uri() . "/styles/hamburgers.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_scripts()
{

  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);

  wp_enqueue_script('scrollspy', get_template_directory_uri() . "/js/scrollspy.js", array('jquery'), '1.0', true);

  wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true);

  wp_enqueue_script('counter', get_template_directory_uri() . "/js/counter.js", array(), '1.0', true);

  wp_enqueue_script('nav', get_template_directory_uri() . "/js/nav.js", array(), '1.0', true);

  wp_enqueue_script('year', get_template_directory_uri() . "/js/year.js", array(), '1.0', true);

  wp_enqueue_script('scrollspy', get_template_directory_uri() . "/js/scrollspy.js", array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Add Widgets

function new_widget_init()
{

  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar1',
  ));
}

add_action('widgets_init', 'new_widget_init');

// sidebar
if (function_exists('register_sidebar'))
  register_sidebar(
    array(
      'name' => 'Contact',
      'before_widget' => '<div class = "contact">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    )
  );
