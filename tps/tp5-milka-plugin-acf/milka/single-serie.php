<?php get_header() ?>


<?php
while (have_posts()){
	the_post();
	$terms = get_the_terms( $post->ID, 'genre' );
	$url_taxo =get_term_link($terms[0]->term_id,	'genre' );

?>
 <a href="<?=$url_taxo ?>"><?=$terms[0]->name ?></a>
	<h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>

	<?php	
}
?>


<?php get_footer() ?>