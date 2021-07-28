<?php
# Employees of cpt_
define('NEWS_POST_TYPE', 'news');
define('NEWS_POST_SLUG', 'news');

function news_register_post_type() {
  $args = array (
    'labels' => [
      'name'          => 'News',
      'all_items'     => 'All News',
      'singular_name' => 'News',
      'add_new'       => 'Add New News',
      'edit_item'     => 'Edit News',
    ],
    //'register_meta_box_cb' => 'testimonial_meta_box_cb',
    'show_in_nav_menus'   => true,
    'menu_icon'          => get_template_directory_uri() . '/assets/images/newspaper.png',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => ['slug' => NEWS_POST_SLUG, 'with_front' => false,],
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 4, // null
    'supports'           => ['title', 'editor', 'excerpt', 'page-attributes', 'thumbnail'], //, 'editor'
    //  'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', and 'post-formats'
  );
  register_post_type(NEWS_POST_TYPE , $args);
}

add_action('init', 'news_register_post_type');