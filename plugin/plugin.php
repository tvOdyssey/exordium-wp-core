<?php

/**
 * Exordium Wordpress Core
 * Odyssey - 2020
 * Version 0.1
 */

# Version and Plugin Name Information
$info = array();
$info['name'] = "Exordium Core";
$info['version'] = "0.1.0";

# Global Menu Information
$menu = array();
$menu['menu_title'] = 'Exordium Core';
$menu['menu_slug'] = 'exordium-core';
$menu['capability'] = 'manage_options';
$menu['icon_url'] = 'dashicons-admin-tools';
$menu['position'] = 99;

# Create the Main Menu for Exordium Core
function exordium_core_setup_menu () {
  global $menu;
  $function = 'exordium_core_page';

  add_menu_page($menu['menu_title'], $menu['menu_title'], $menu['capability'], $menu['menu_slug'], $function, $menu['icon_url'], $menu['position']);
  add_submenu_page($menu['menu_slug'], 'Core', 'Core', $menu['capability'], $menu['menu_slug']);

}
add_action('admin_menu', 'exordium_core_setup_menu');

# Welcome to the Plugin, choose which functions to enable for plugin
function exordium_core_page() {
  global $info;
  include('index/index.php');
}

# include subtitle

# include avatars
require_once('avatars/avatars.php');

# include forms

# include category featured images

# include activitylog

# include realtimestat

# include dashwidgets

?>
