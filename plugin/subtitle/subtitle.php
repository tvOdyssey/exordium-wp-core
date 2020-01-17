<?php

# Create the Main Menu for Exordium Core
function exordium_subtitle_setup_submenu () {
  global $menu;
  $function   = 'exordium_core_subtitle';

  add_submenu_page( $menu['menu_slug'], 'Subtitle', 'Subtitle',
    $menu['capability'], 'exordium-subtitle', $function);
}
add_action('admin_menu', 'exordium_subtitle_setup_submenu');

function exordium_core_subtitle() {
  echo '<h1>Subtitles</h1>';
}

?>
