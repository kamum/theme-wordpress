<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="Site do Músico Pedro Moreira Magalhães">
    <meta name="keywords" content="Música, Violinista, Recital, Orquestra">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Jonathan Magalhães">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>"/>
    <link href="<?php bloginfo('template_url'); ?>/bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/mobile-style.css">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/icon.png">
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>  
    <header>
      <div id="menu-mobile-mask"></div>
      
      <div id="menu-mobile">
          <img id="violino" src="<?php bloginfo('template_url'); ?>/images/violino.png">
          <ul class="list-unstyled">
            
            <?php wp_list_pages('title_li='); ?>
          </ul>
          <div class="bar-close">
            <button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
          </div>
      </div>
      <!-- FIM DE MENU-MOBILE-->
      <div class="container container-logo">
        <img id="logotipo" class="img-responsive" src="<?php echo get_theme_mod( 'm1_logo' ); ?>">
      </div> 
      <!-- FIM DE CONTAINER CONTAINER-LOGO-->
      <button id="btn-bars" type="button"><i class=" fa fa-bars"></i></button>

      <div class="container">
        <div class="row">
          <nav id="menu" class="pull-right">
            <ul>
              
              <?php wp_list_pages('title_li='); ?>
            </ul>
          </nav>
        </div>
        <!-- FIM DE ROW-->
      </div>
      <!-- FIM DE CONTAINER-->
    </header> 