<?php

# Create the Main Menu for Exordium Core
function exordium_avatar_setup_submenu () {
  global $menu;
  $function   = 'exordium_core_avatars';

  add_submenu_page( $menu['menu_slug'], 'Avatar Management', 'Avatar Management',
    $menu['capability'], 'exordium-avatars', $function);
}
add_action('admin_menu', 'exordium_avatar_setup_submenu');

function exordium_core_avatars() {
  echo '<h1>Avatars</h1>';
}

?>
