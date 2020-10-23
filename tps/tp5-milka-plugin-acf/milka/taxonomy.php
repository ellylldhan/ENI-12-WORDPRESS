<?php get_header() ?>

<?php query_posts('post_type=produit'); ?>
<?php
echo get_the_ID();;
//var_dump(get_query_var('id'));
while (have_posts()){
	the_post();
	
?>
	<h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>

	<?php	
}
?>


<?php get_footer() ?>