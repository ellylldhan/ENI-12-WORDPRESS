<?php get_header() ?>
<br><br>

<div class="row text-center">
	<?php
	$args["post_type"]= "produit";
	$args["orderby"] = "menu_order";
	$args["order"] = "ASC";
	$args["tag"] = "home";

	$the_query = new WP_Query($args);
	if ($the_query->have_posts()){
		while($the_query->have_posts()){
			$the_query->the_post();
			?>


			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
					<a href="<?php the_permalink() ?>" >
            	<!--<img class="card-img-top" src="http://placehold.it/500x325" alt="">
            	-->
            	<?php 
            	if (has_post_thumbnail()){
            		the_post_thumbnail('medium',['class' => 'card-img-top']); 
            	}
            	else{
            		echo '<img class="card-img-top" src="http://placehold.it/500x325" alt="">';
            	}
            	?>
            </a>
            <div class="card-body">
            	<h4 class="card-title"><?php  the_title() ?></h4>
            	<!--<h5 class="card-title">texte</h5>-->
            	<p class="card-text"><?php  the_excerpt() ?></p>
            </div>
            <div class="card-footer">
            	<a href="<?php the_permalink() ?>" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>



        <?php

      }
    }
    ?>
  </div>
  <div class="row text-center">
	<?php
	$args["post_type"]= "service";
	$args["orderby"] = "menu_order";
	$args["order"] = "ASC";
	$args["tag"] = "home";

	$the_query = new WP_Query($args);
	if ($the_query->have_posts()){
		while($the_query->have_posts()){
			$the_query->the_post();
			?>


			<div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
					<a href="<?php the_permalink() ?>" >
            	<!--<img class="card-img-top" src="http://placehold.it/500x325" alt="">
            	-->
            	<?php 
            	if (has_post_thumbnail()){
            		the_post_thumbnail('medium',['class' => 'card-img-top']); 
            	}
            	else{
            		echo '<img class="card-img-top" src="http://placehold.it/500x325" alt="">';
            	}
            	?>
            </a>
            <div class="card-body">
            	<h4 class="card-title"><?php  the_title() ?></h4>
            	<!--<h5 class="card-title">texte</h5>-->
            	<p class="card-text"><?php  the_excerpt() ?></p>
            </div>
            <div class="card-footer">
            	<a href="<?php the_permalink() ?>" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>



        <?php

      }
    }
    ?>
  </div>
  <?php get_footer() ?>