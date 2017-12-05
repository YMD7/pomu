<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <title><?php bloginfo('name'); ?></title>


  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/image/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/image/favicon.ico" type="image/vnd.microsoft.icon">

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  
  <!-- Slick | http://kenwheeler.github.io/slick/ | Thanks!!-->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>
  
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/dist/css/bootstrap.min.css">

  <!-- Fancybox | http://fancyapps.com/fancybox/ | Thanks!!-->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/fancybox/jquery.fancybox.pack.js"></script>

  <!-- Theme's Script -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.pomu.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fancybox/jquery.fancybox.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/screen.css">

  <!-- wp_head -->
  <?php wp_head(); ?>
</head>
