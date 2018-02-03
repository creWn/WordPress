<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta http-equiv="Content-Type" content="text/html" charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php bloginfo('template_directory');?>/img/favicon/favicon.png" rel="icon" type="image/x-icon">
    <link href="<?php bloginfo('template_directory');?>/libs/bootstrap-grid.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/media.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/fonts.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory');?>/libs/jquery-3.0.0.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/common.js"></script>
  
    <?php wp_head();?>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-4">
            <div id="hamburger">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="logo">
              <h1>steel <span>knife</span></h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="dark_layout"></div>