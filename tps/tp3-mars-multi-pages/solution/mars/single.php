<?php get_header() ?>
template news

<?php
while (have_posts()){
	the_post();
?>
	<h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>

	<?php	
}
?>


<?php get_footer() ?>