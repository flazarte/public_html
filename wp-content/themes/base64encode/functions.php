<?php

// register css and js scripts
include( 'configure/js-css.php' );

// conversion script
include( 'configure/conversion.php' );

//set up security header
// if (!empty($_SERVER['HTTPS'])) {
// 	function add_hsts_header($headers) {
// 	  $headers['strict-transport-security'] = 'max-age=31536000; includeSubDomains';
// 	  return $headers;
// 	}
  
//   add_filter('wp_headers', 'add_hsts_header');
//   }

//Nav Bar
function wp_get_menu_array($current_menu) {

  $array_menu = wp_get_nav_menu_items($current_menu);

  foreach ($array_menu as $m) {
      if (empty($m->menu_item_parent)) {
    echo '<a class="p-2 link-secondary" href="';
    echo $m->url;
    echo '">';
        echo  $m->title;
        echo '</a>';

      }
  }

  return $menu;
}

//Tools
function wp_get_tools_array($current_menu) {

  $array_menu = wp_get_nav_menu_items($current_menu);

  foreach ($array_menu as $m) {
      if (empty($m->menu_item_parent)) {
    echo '<a href="';
    echo $m->url;
    echo '" class="list-group-item">';
        echo  $m->title;
        echo '</a>';

      }
  }

  return $menu;
}

