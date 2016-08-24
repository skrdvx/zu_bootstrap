<?php

function zu_menu_tree($variables) {  
  $menu_type = str_replace('menu_tree__menu_', '', $variables['theme_hook_original']);  
  return '<ul class="nav navbar-nav ' . str_replace(array('_', ' '), '-', strtolower($menu_type)) . '-menu">' . $variables['tree'] . '</ul>';
}

function zu_preprocess_page(&$vars) {
      //add news class
      $vars['navbar_classes_array'][] = '';
      //remove class
			unset($vars['navbar_classes_array'][0]);
      unset($vars['navbar_classes_array'][1]);
			//unset($vars['navbar_classes_array'][2]);
      // you need change value 0 to value you want remove class
      // Default
      // 0  'navbar', 1 => 'container', 2 => 'navbar-default'

}