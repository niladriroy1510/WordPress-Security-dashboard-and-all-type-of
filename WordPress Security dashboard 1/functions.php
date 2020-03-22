<?php

// Admin Menu Remove

function Okployremove_menus(){  
    
  remove_menu_page( 'wpcf7' ); 
  remove_menu_page( 'fw-extensions' ); 
  remove_menu_page( 'elementor' ); 
  remove_menu_page( 'tools.php' ); 
  remove_submenu_page( 'themes.php', 'theme-editor.php' );
  
}
add_action( 'admin_init', 'Okployremove_menus' );

// Add Custom internal Css on wp-admin page

function okploy_custom_code() {
   
  echo '<style>
 
    #import-users {
      display: none !important;
    }
    .tg-tabscontent {
         display: none !important;
    }
   
  </style>';
 
}
add_action('admin_head', 'okploy_custom_code');


//Remove your WordPress version number

function okploy_wp_version_remove_version() {
return '';
}
add_filter('the_generator', 'okploy_wp_version_remove_version');

//Remove the WordPress Version Number from source code

remove_action('wp_head', 'wp_generator');

// wp admin top left corner wp logo remove

add_action( 'wp_before_admin_bar_render', function() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');
}, 7 );

// wp admin bottom left version remove

function okploy_footer_shh() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}
add_action( 'admin_menu', 'okploy_footer_shh' );

// wp admin screen bottom left text change

function okploy_wp_admin_bottom_left_text( $text ) {
    return sprintf( __( '<h1>We are Okploy</h1>' ), '#' );
}
add_filter( 'admin_footer_text', 'okploy_wp_admin_bottom_left_text' );


// wp admin top tool bar menu add.

function okploy_Toolbar_link_to_mypage( $wp_admin_bar ) {
$args = array(
'id' => 'wplift',
'title' => 'Visit Website',
'href' => 'https://www.okploy.com',
'meta' => array( 'class' => 'my-wplift-page' )
);
$wp_admin_bar->add_node( $args );
}
add_action( 'admin_bar_menu', 'okploy_Toolbar_link_to_mypage', 999 );
