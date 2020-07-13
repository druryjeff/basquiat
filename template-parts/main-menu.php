	<nav class="main-menu">
	  <div class="wrapper">
	  	<ul>

		<?php

			// Get a reference to all of the posts
			$menu_args = array (
				'post_type' => 'post',
				'posts_per_page' => -1
			);

			$query_menu = new WP_Query( $menu_args );

			if ( $query_menu->have_posts() ) :
				while ( $query_menu->have_posts() ) :
					$query_menu->the_post();

		?>

		<?php

			/* Everything in this area will get printed in the menu */

			/* This example assumes that your navigation is built on an unordered list, 
			   so there is a <ul> tag on line 2, the closing </ul> tag is on line 58 and 
			   your <li> is in the dynamic/loop area (below) */

			/* Anything else needed for the menu display (headings, sections)
			   should be placed before the php tags on line 2 or after the
			   closing </ul> tag on line 58 */
		
			/* Example: The following code will output an <li> tag containing 
			   an <h4> heading and a link to a post. The link to the post comes 
			   from the WordPress/PHP function, the_permalink(). The title 
			   for the post comes from the WordPress/PHP function, the_title(). 
			   Each post in the menu will use this same format. */

			/* If you want to display the feature image for your post in this menu,
			   add the WordPress/PHP function, the_post_thumbnail(), in the list item below. 
			   This will print the <img> tag needed to display your feature image. */

			?>

			<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>

		<?php
		
			endwhile;
			wp_reset_postdata();
			endif;

		?>

			</ul>
		</div>
	</nav>
