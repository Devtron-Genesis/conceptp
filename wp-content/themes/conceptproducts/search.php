<?php
/*
Template name: Blog
*/
?>

<?php get_header(); ?>

<div id="page">

	<div class="wrap">
		
		<?php
		
		if(have_posts()) : while(have_posts()) : the_post(); ?>
		
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
		<p>
		<?php the_excerpt();?>
		</p>
		
		<?php 
		
		endwhile; 
		else :
		?>
		<p> Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
		<?php 
		endif;
		
		?>
		
		<div class="clr"></div>
	
	</div>

</div>

<?php get_footer(); ?>