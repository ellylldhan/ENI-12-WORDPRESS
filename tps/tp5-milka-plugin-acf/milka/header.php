<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php 
    wp_title( '|', true, 'right' );  
    bloginfo( 'name' ); 
  ?></title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="<?=THEMEROOT ?>/style.css">
  <?php wp_head() ?>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name')?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">


        <!--
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=get_home_url()?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php the_permalink(7)?>">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=get_permalink(9)?>">Contact</a>
          </li>
        </ul>
        -->
        <?php 
  // afficher le menu
  wp_nav_menu(
          [
            'theme_location' => 'menu1',
            'menu_class' => 'navbar-nav ml-auto',
            'container' => false
          ]
        );
        ?>
        
        <form class="form-inline my-2 my-lg-0" method="get" action="<?php echo home_url(); ?>">
          <input  name="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-2"> 


      </div> 
      <div class="col-8">