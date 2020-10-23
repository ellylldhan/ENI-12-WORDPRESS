<?php get_header() ?>

<h3>Recherche : <?= get_search_query() ?></h1>
<?php
while (have_posts()){
	the_post();
?>
 <a href="<?=the_permalink() ?>"><?php the_title(); ?></a><br>


	<?php	
}
?>


<?php get_footer() ?>