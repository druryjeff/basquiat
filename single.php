<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package microsite
 */

get_header();

?>

	<?php
	
		while ( have_posts() ) :
			the_post();

	?>

	<main>

	  <div class="wrapper">
	    <div class="content">
	      <h2><?php the_title(); ?></h2>
	      <?php the_content(); ?>
	      <div class="meta">
	        <ul>
	          <li><h3>Date</h3><p><?php the_field('date'); ?></p></li>
	          <li><h3>Media</h3><p><?php the_field('media'); ?></p></li>
	          <li><h3>Size</h3><p><?php the_field('size'); ?></p></li>
	        </ul>
	      </div>
	    </div>
	    <figure>
	      <?php the_post_thumbnail(); ?>
	      <figcaption>
	        <p>&copy; <?php the_field('copyright'); ?></p>
	      </figcaption>
	    </figure>
	  </div>
	</main>

	<aside class="post-nav">
	  <ul>
	    <?php next_post_link('<li>%link</li>'); ?>
	    <?php previous_post_link('<li>%link</li>'); ?>
	  </ul>
	</aside>

	<?php

		endwhile;

	?>

	<?php get_template_part( 'template-parts/main-menu' ); ?>

<?php

get_footer();
