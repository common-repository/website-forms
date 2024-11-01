<?php
  /*
    Plugin Name: Website Forms
    Plugin URI:  https://wordpress.org/plugins/forms/
    Description: Create amazing Forms from your wordpress site and host them anywhere. Run A/B tests, monitor analytics, improve conversion rates and much more.
    Version:     2.1
    Author:      Wishpond
    Author URI:  https://www.wishpond.com/website-forms/
    License:     GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain: website-forms
    Domain Path: /lang

    Website Forms is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.

    Website Forms is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Website Forms. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
  */

  load_plugin_textdomain('website-forms', false, dirname(plugin_basename(__FILE__)) . '/lang/');

  $WP_PLUGIN_FILES = array(
    'constants.php',
    'class-wishpond-campaign.php',
    'class-wishpond-plugin.php',
    'class-wishpond-shortcode.php',
    'class-wishpond-utilities.php'
  );

  foreach($WP_PLUGIN_FILES as $file) {
    include_once(plugin_dir_path(__FILE__) . $file);
  }

  new WishpondPlugin(
    array(
      'version' => '2.1',
      'name' => 'website_forms',
      'slug' => 'website-forms',
      'menu' => array(
        'main'      => __('Forms', 'website-forms'),
        'dashboard' => __('Dashboard', 'website-forms'),
        'editor'    => __('New Form', 'website-forms'),
        'settings'  => __('Settings', 'website-forms'),
      )
    )
  );
?>
