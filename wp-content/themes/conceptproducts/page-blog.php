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
	
		<h2><?php the_title(); ?></h2>
	
		
		
		<?php the_content();
		
		endwhile; endif;
		
		?>
		
		<div class="clr"></div>
	
	</div>

</div>

<?php get_footer(); ?>