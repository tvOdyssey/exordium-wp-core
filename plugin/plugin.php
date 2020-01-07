<?php

/**
 * Exordium Wordpress Core
 * Odyssey - 2020
 * Version 0.1
 */

# Create the Main Menu for Exordium Core
function exordium_core_setup_menu () {
  $page_title = 'Exordium Core';
  $menu_title = 'Exordium Core';
  $capability = 'manage_options';
  $menu_slug  = 'exordium-core';
  $function   = 'exordium_core_page';
  $icon_url   = 'dashicons-media-code';
  $position   = 99;

  add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}
add_action('admin_menu', 'exordium_core_setup_menu');

# Welcome to the Plugin, choose which functions to enable for plugin
function exordium_core_page() {
  echo '<h1>Exordium Core</h1>';
}

# include subtitle

# include avatars

# include forms

# include activitylog

# include realtimestat

# include dashwidgets

?>
