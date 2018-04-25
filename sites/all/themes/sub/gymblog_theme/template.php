<?php

/**
 * @file
 * The primary PHP file for this theme.
 */

 /**
  * Implements theme_preprocess_page().
  */
 function gymblog_theme_preprocess_page(&$vars) {
   $alias = drupal_get_path_alias();
   // krumo($vars);
   // Defining tpl file for login page.
   $alias = drupal_get_path_alias();
   $user_pages = array('user', 'user/password');
   if (in_array($alias, $user_pages) && user_is_anonymous()) {
     drupal_add_css(drupal_get_path('theme', 'gymblog_theme') . '/css/user.css');

   // if ($alias == 'user') {
     $vars['login_form'] = drupal_get_form("user_login");
     $vars['register_form'] = drupal_get_form("user_register_form");
     // $vars['pass_reset_form'] = drupal_get_form("user_pass_reset");

     $vars['theme_hook_suggestions'][] = 'page__user__all';
   }
 }
