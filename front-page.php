<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package microsite
 */

get_header();

?>

	<?php

		while ( have_posts() ) :
			the_post();

	?>

	<main id="primary">
	  <div class="wrapper">
	    <div class="content">
	      <h2><?php the_title(); ?></h2>
	      <?php the_content(); ?>
	      <?php
			// get the link to the most recent post 
			$homelink_query = new WP_Query('post_type=post&posts_per_page=1');
			while ($homelink_query->have_posts()) : 
				$homelink_query->the_post();
			?>
			
			<a class="button" href="<?php the_permalink() ?>">Start Here</a>
		
			<?php
				endwhile;
				wp_reset_postdata();
			?>
	    </div>
	    <figure>
	      <?php the_post_thumbnail(); ?>
	      <figcaption>
	        <p>&copy; Jean-Michel Basquiat (Fair Use)</p>
	      </figcaption>
	    </figure>
	  </div>
	</main>

	<?php

		endwhile;

	?>

	<?php get_template_part( 'template-parts/main-menu' ); ?>

<?php

get_footer();
