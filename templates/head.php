<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <?php 
  	// LESS.js for Dev
  	echo '<link rel="stylesheet/less" type="text/css" href="' . THEME_URL . '/assets/less/app.less" />';
    echo '<script type="text/javascript">less = { env: "development" };</script>';
  	echo '<script src="' . THEME_URL . '/assets/js/vendor/less-1.4.1.min.js" type="text/javascript"></script>';
  ?>

  <!-- REMOVE THIS AFTER DEV - Stops LESS.js from caching O.o -->
  <script> /* Provisory for dev environment: */ localStorage.clear(); </script>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
