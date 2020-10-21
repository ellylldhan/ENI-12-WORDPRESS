<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>

	</style>
	<link rel="stylesheet" 
	href="<?= get_stylesheet_directory_uri() ?>/style.css">
	<?php wp_head(); ?>
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
				<a class="navbar-brand" href="#">Logo</a>
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
    <!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    -->
  </div>
</div>
</nav>

<div class="container-fluid text-center">    
	<div class="row content">
		<div class="col-sm-2 sidenav">
			<p><a href="#">Link</a></p>
			<p><a href="#">Link</a></p>
			<p><a href="#">Link</a></p>
		</div>
		<div class="col-sm-8 text-left central"> 
			<!-- boucle wp to do -->

			<div class="jumbotron">
<?php
			$args3["post_type"]= "page";
			
			$the_query3 = new WP_Query($args3);
			if ($the_query3->have_posts()){
				while($the_query3->have_posts()){
					$the_query3->the_post();
							if (get_the_ID() == get_option( 'page_on_front' )){
					
					?>


				<h1><?php the_title() ?></h1>
				<p><?php the_content() ?></p>
				<?php
			}
		}
	}
	?>
			</div>
			<?php
	// definition des parametres
			$args["post_type"]= "page";
	//$args["posts_per_page"] = 2;
			$args["orderby"] = "menu_order";
			$args["order"] = "ASC";

			$the_query = new WP_Query($args);
	// si il y a des resultats
			if ($the_query->have_posts()){

				while($the_query->have_posts()){
					// enlever de le res. De la pile
					$the_query->the_post();
					if (get_the_ID() != get_option( 'page_on_front' )){
					
					?>

					<h1><?php  the_title() ?></h1>
					<p>
						<?php  the_content() ?>
					</p>
					<?php
					}
				}
			}
			?>
			<hr>
			<hr>
			<?php
	// definition des parametres
			$args2["post_type"]= "post";
			$args2["posts_per_page"] = 3;
	//$args2["orderby"] = "menu_order";
	//$args2["order"] = "ASC";

			$the_query2 = new WP_Query($args2);
	// si il y a des resultats
			if ($the_query2->have_posts()){

				while($the_query2->have_posts()){

			// enlever de le res. De la pile
					$the_query2->the_post();
					?>

					<h1><?php  the_title() ?></h1>
					<p>
						<?php  the_content() ?>
					</p>
					<?php
				}
			}
			?>


		</div>
		<div class="col-sm-2 sidenav">
			<div class="well">
				<p>ADS</p>
			</div>
			<div class="well">
				<p>ADS</p>
			</div>
		</div>
	</div>
</div>

<footer class="container-fluid text-center">
	<p>Footer Text</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>