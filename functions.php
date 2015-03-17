<?php

# This theme supports gettext 
function theme_init(){
	load_theme_textdomain('WebDesa', get_template_directory() . '/languages');
}
add_action ('init', 'theme_init');

# Define Theme Content Wrapper Width
$GLOBALS['content_width'] = 500;

# Define Includes Path */
$gab_includes = TEMPLATEPATH . '/includes/';

#this theme support post thumbnails
add_theme_support('post-thumbnails');

#This theme supports custom navigation
if ( function_exists('wp_nav_menu') ) { 
	add_theme_support( 'nav-menus' );
}

# Load theme Javascripts into the wp_head
require_once ($gab_includes . 'theme-js.php');

# Register widget zones
require_once ($gab_includes . 'register-widget-zones.php');

# Theme Functions
require_once ($gab_includes . 'theme-functions.php');

# Theme Plugins
require_once ($gab_includes . 'theme-plugins.php');

# Theme Control Panel
require_once ($gab_includes . 'theme-control-panel.php');

# Load customized comments template
require_once ($gab_includes . 'theme-comments.php');

# Load theme thumbnails
require_once ($gab_includes . 'theme-thumbnails.php');

# Load theme variables
require_once ($gab_includes . 'theme-variables.php');

?>
<?php remove_action('wp_head', 'wp_generator'); ?>