<?php

# Create the Main Menu for Exordium Core
function exordium_category_setup_submenu () {
  global $menu;
  $function   = 'exordium_core_category';

  add_submenu_page( $menu['menu_slug'], 'Category', 'Category',
    $menu['capability'], 'exordium-category', $function);
}
add_action('admin_menu', 'exordium_category_setup_submenu');

function exordium_core_category() {
  echo '<h1>Category</h1>';
}

?>
