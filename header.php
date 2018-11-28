<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AssetMaster 101</title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>


    <?php wp_nav_menu(array('theme_location' => 'primary' ));?>


    <header>
        <img src="<?php header_image();?>" height="<?php get_custom_header()->height;?>"  width="<?php get_custom_header()->width;?>">
    </header>
