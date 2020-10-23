<?php 
	get_header(); 
	$terms = get_the_terms(  get_the_ID(), 'genre' );
	$nom= $terms[0]->name;
?>

<h1><?=$nom ?></h1>
<?php
	

//var_dump(get_query_var('id'));
while (have_posts()){
	the_post();
	
?>
	<a href="<?=the_permalink() ?>"><?php the_title(); ?></a><br>


	<?php	
}
?>


<?php get_footer() ?>