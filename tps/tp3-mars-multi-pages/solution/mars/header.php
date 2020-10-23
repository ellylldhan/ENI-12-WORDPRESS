<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php 
		wp_title( '|', true, 'right' );  
		bloginfo( 'name' ); 
	?>
</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?=THEMEROOT?>/style.css">
  <?php wp_head() ?>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
      	<?php bloginfo( 'name' );  ?>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <!--
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    -->
    <?php 
	// afficher le menu
	wp_nav_menu(
          [
            'theme_location' => 'menu1',
            'menu_class' => 'nav navbar-nav',
	    			'container' => false
          ]
        );
        ?>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <?php
       if (is_active_sidebar('left-colonne')){
            dynamic_sidebar('left-colonne'); 	
          }
        ?>
    </div>
    <div class="col-sm-8 text-left central">

	
