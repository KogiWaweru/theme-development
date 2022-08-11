<?php
function myThemeScripts() {
  wp_enqueue_style('themeScripts', get_theme_file_uri('build/index.js'),array('jquery'),'1.0',true);
  wp_enqueue_style('themeStylesheet', get_theme_file_uri('css/style.css'));
  wp_enqueue_style('themeExtraStylesheet', get_theme_file_uri('css/blog.css'));
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','myThemeScripts');

function theme_features() {
  add_theme_support('title-tag');
  register_nav_menu('headerMenuLocation','Header Menu Location');
}
add_action('after_setup_theme','theme_features');

function theme_adjust_query($query) {
  if (!is_admin() AND is_post_type_archive('project') AND is_main_query()) {
    $query->set('posts_per_page','1');
  }
}
add_action('pre_get_posts','theme_adjust_query');


function theme_post_types() {
  register_post_type('project',array(
    'show_in_rest' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'projects'),
    'supports' => array('title','editor','excerpt','custom-fields'),
    'public' => true,
    'labels' => array(
      'name' => 'Projects',
      'add_new_item' => 'Add new Project',
      'edit_item' => 'Edit Project',
      'all_items' => 'All Projects',
      'singular_name' => 'Project'
    ),
    'menu_icon' => 'dashicons-pressthis'
  ));
}
add_action('init','theme_post_types');
