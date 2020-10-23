<?php get_header() ?>
<br><br>
<div class="carousel slide" id="carousel-674042">
    <ol class="carousel-indicators">
        <li data-slide-to="0" data-target="#carousel-674042" class="active">
        </li>
        <li data-slide-to="1" data-target="#carousel-674042">
        </li>
        <li data-slide-to="2" data-target="#carousel-674042">
        </li>
    </ol>
    <div class="carousel-inner">
    <?php
    $args2["post_type"]= "serie";
    $args2["orderby"] = "menu_order";
    $args2["order"] = "ASC";
    
    $active = "active";
    $the_query2 = new WP_Query($args2);
    if ($the_query2->have_posts()):
        while($the_query2->have_posts()):
            $the_query2->the_post();
            $image = get_field('slider');
            $img = $image['url']; 
            ?>
        <div class="carousel-item <?=$active?>">
            <img class="d-block w-100" alt="Carousel Bootstrap First" src="<?=$img ?>" />
            <div class="carousel-caption">
                <h4>
                    <?php the_title() ?>
                </h4>
                <p>
                    <?php the_field('sous_titre_1'); ?>
                </p>
            </div>
        </div>
        <?php
        if ($active == 'active')
            $active ="";
    endwhile;
endif;
?>
        


    </div> <a class="carousel-control-prev" href="#carousel-674042" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-674042" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
</div>
<br><br>
<div class="row text-center">
	<?php
	$args["post_type"]= "serie";
	$args["orderby"] = "menu_order";
	$args["order"] = "ASC";
	

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
            	<h5 class="card-title"><?php the_field('sous_titre_1'); ?></h5>
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