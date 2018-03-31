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

        <div class="container">

          <div class="row">

            <div class="col-xs-12">
              <?php wp_nav_menu(array('theme_location'=>'primary')) ?>
            </div>
          </div>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
