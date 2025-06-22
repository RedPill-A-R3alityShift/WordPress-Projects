<?php
/*
 	Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		

			

			

			<div>
				<?php the_content(); ?>
			</div>

			

		

	<?php endwhile; ?>

	

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	
