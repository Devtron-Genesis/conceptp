<?php get_header(); ?>

<?php //get_template_part('parts/homepage-slides'); ?>

<div id="page">

	<div class="wrap">
		
		<?php
		
		if(have_posts()) : while(have_posts()) : the_post(); ?>
	

		<!--<h2><?php // the_title(); ?></h2>-->
		
		<?php the_content();
		
		endwhile; endif;
		
		?>
	
	</div>

</div>

<?php get_footer(); ?>