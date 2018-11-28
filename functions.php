<?php
//wp_enqueue_scripts('js/main.js');



function assetmaster_script_enqueue() {
  $sVersion = '1.0';
  $sMedia = 'all';
  wp_enqueue_script('assetMasterMainJs', get_template_directory_uri() . '/js/assetMaster.js' , array() , $sVersion , true);
  wp_enqueue_style('assetMasterDefaultCss' , get_template_directory_uri() . '/css/styles.css' , array() , $sVersion, $sMedia);
  wp_enqueue_style('googleFonts' , 'https://fonts.googleapis.com/css?family=Kanit|Prompt' , array() , $sVersion, $sMedia);
}



function assetmaster_theme_setup() {

  add_theme_support('menus');
  // $location =  SLug (lower case single name) use to identify
  $location = 'primary';
  // description: just some text in the wp-admin
  $description = $location . ' - whatever, where this text will be shown?';
  register_nav_menu($location , $description);

  $location = 'secondary';
  $description = $location . ' - this is the extra, as the footer navigation';
  register_nav_menu($location , $description);


  $location = 'tertiary';
  $description = $location . ' - 3rd? is this even necessary?';
  register_nav_menu($location , $description);




  /*
  $location = 'forth';
  $description = $location . ' - even forth? this is ridiculous?';
  register_nav_menu($location , $description);
  */
}



//  wp_enqueue_scripts = when the scripts are enqueued any place?
add_action('wp_enqueue_scripts' , 'assetmaster_script_enqueue');
// after_setup_theme ==> tell WP to execute  after theme_setup is done
// can use init, if we're going to do something else more ?
add_action('init' , 'assetmaster_theme_setup');


add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
