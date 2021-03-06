<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('title'); ?></title>
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
   <body data-spy="scroll" data-target="#list" <?php body_class() ?>>
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


<header id="header">
  <?php
  $bg_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
  $bg_url = $bg_url[0];
  ?>
<div class="cover" style="background-image:url('<?php echo $bg_url; ?>');background-repeat:no-repeat;background-size:cover;">
    <span class="bg-over"></span>
    <div class="intro">
        <div class="intro-text">
          <h1 class="special-title"><?php the_title() ?></h1>

        </div>
    </div>
</div>

<!-- The overlay nav -->
<?php  get_template_part('template-parts/nav-overlay2'); ?>
<!-- top nav -->
<?php  get_template_part('template-parts/navigation'); ?>



</header><!--header-->
