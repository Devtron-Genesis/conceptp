<?php get_header(); ?>

<?php //get_template_part('parts/homepage-slides'); ?>

<div id="page">

	<div class="wrap">
		
		<?php query_posts('page_id=2'); ?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<h2><?php the_title(); ?></h2>
			
		<?php the_content(); ?>
		
		<?php endwhile; endif; ?>
		
		<?php wp_reset_query(); ?>
		
		<div class="row">
			
			<div class="eight columns">
				
				<?php query_posts('page_id=110'); ?>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<h2><?php the_title(); ?></h2>
					
				<?php the_content(); ?>
				
				<?php endwhile; endif; ?>
				
				<?php wp_reset_query(); ?>
				
			</div>
			
			<div class="four columns">
	
				<h2>Contact</h2>
				
				<div class="padbox">
				
					<?php
			
					$id = 114;
					$p = get_page($id);
					echo apply_filters('the_content', $p->post_content);
					
					?>
				
				</div>
			
			</div>
			
			<div class="clear"></div>
			
		</div>
	
	</div>

</div>

<?php get_footer(); ?>