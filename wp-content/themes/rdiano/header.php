<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- Typekit y Google Fonts -->
	<script type="text/javascript" src="//use.typekit.net/yra5tny.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>    
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'> -->
    
    <?php wp_head(); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body <?php body_class(); ?>>
  
<div class="container-fluid verdeoscuro">

<div class="row page-header hidden-xs">
<div class="col-sm-3"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" class="img-responsive" /></div>
<div class="col-sm-2 col-sm-offset-5"><?php get_search_form(); ?></div>
<div class="col-sm-1" align="right"><img src="<?php bloginfo('template_directory'); ?>/img/redes_fb.svg" class="img-responsive img-redes" /></div>
<div class="col-sm-1" align="left"><img src="<?php bloginfo('template_directory'); ?>/img/redes_tw.svg" class="img-responsive img-redes" /></div>

</div>

<div class="row">
<nav class="navbar navbar-inverse navbar-rd verdeoscuro" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Mostrar o ocultar navigación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" width="230" height="25" />
            </a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
</nav>


</div>
</div>
