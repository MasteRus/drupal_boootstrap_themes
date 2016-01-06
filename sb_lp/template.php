<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
 
 
function sb_lp_menu_tree(&$variables) {
  return '<ul class="menu">' . $variables['tree'] . '</ul>';
}
