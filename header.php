<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chung Win's Apollo 1</title>
    <?php wp_head(); ?>
  </head>

    <?php

    if( is_front_page() ):
      $apollo1_classes = array('class-one', 'class-two');
    else:
      $apollo1_classes = array('class-three');
    endif;

    ?>

  <body <?php body_class($apollo1_classes); ?>>

    <?php wp_nav_menu(array('theme_location'=>'primary')) ?>
