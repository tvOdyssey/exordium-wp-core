<?php

# Create the Main Menu for Exordium Core
function exordium_forms_setup_submenu () {
  global $menu;
  $function   = 'exordium_core_forms';

  add_submenu_page( $menu['menu_slug'], 'Forms', 'Forms',
    $menu['capability'], 'exordium-forms', $function);
}
add_action('admin_menu', 'exordium_forms_setup_submenu');

function exordium_core_forms() {
  echo '<h1>Forms</h1>';
}

?>
