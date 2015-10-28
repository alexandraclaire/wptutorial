<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8">
  <title><?php wp_title() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Le styles -->
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

  
  <?php wp_head(); ?> 

</head>

<body>
<!--THIS CONTROLS THE MENU:so your theme and menu are linked, and how you style your 
nav will apply to what is entered in pages and menus on WP Dashboard-->
  <header>

  <?php 
  $main_menu = array (
    'theme_location' => 'main-menu',
    'container' => '',
    'items_wrap' => '<ul>%3$s</ul>'
    );
    ?>

<nav class="navbar navbar-default" role="navigation" id="navigation"> 
<!-- Brand and toggle get grouped for better mobile display --> 
  <div class="navbar-header"> 
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
      <span class="sr-only">Toggle navigation</span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
    </button> 
    <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a> 
  </div> 
  <!-- Collect the nav links, forms, and other content for toggling --> 
  <div class="collapse navbar-collapse navbar-ex1-collapse"> 
    <ul class="nav navbar-nav">  
        <ul class="nav nav-pills"> 
         <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
        </ul> 
      </li> 
    </ul>
  </div>
  <div class="container">

  </header> 