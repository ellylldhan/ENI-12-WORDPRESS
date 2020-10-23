<?php get_header() ?>




<?php
			$args["post_type"]= "post";
			//$args["orderby"] = "menu_order";
			//$args["order"] = "ASC";
			$args["posts_per_page"] = 3;
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()){
				while($the_query->have_posts()){
					$the_query->the_post();
					?>

					<a href="<?php  the_permalink() ?>"><?php  the_title() ?></a><br>
					
					<?php
					
				}
			}
			?>
			<br><br><br><br><br><br><br><br><br><br><br><br>

<?php get_footer() ?>