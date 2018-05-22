<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>L'Officina Food n' Music</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css" rel="stylesheet">

    <!-- animate css -->
    <link href="<?php echo get_template_directory_uri() ?>/css/animate.css" rel="stylesheet">
    <!-- fontawesome -->
    <!--<link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/slick/slick-theme.css"/>
    <!-- style -->
    <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/la_storia.css" rel="stylesheet">
    <!-- media query -->
    <link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--&#91;if lt IE 9&#93;>
    <script>
    document.createElement('video');
    </script>
    <!&#91;endif&#93;-->
    <?php wp_head() ?>
  </head>
   <body <?php body_class() ?>>
<div id="load">
    <div class="load-wrap">
        <i class="fas fa-utensils"></i>
    </div>
</div>
<div id="load-panel">
    <div class="panel black"></div>
    <div class="panel grey"></div>
    <div class="panel gold"></div>
    <div class="panel red"></div>
</div>


<header id="header" style="height:100px;">



  <!-- The overlay nav -->
  <?php  get_template_part('template-parts/nav-overlay2'); ?>
  <!-- top nav -->
  <?php  get_template_part('template-parts/navigation'); ?>



</header><!--header-->
