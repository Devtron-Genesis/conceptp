<?php
/*
Template name: Composite Materials
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/homepage-slides'); ?>

<div id="page">

	<div class="wrap">
	
		<div id="submenu">
	
			<h2>Sub-Menu</h2>
			
			<ul>
			
				<li><a href="<?php bloginfo('url'); ?>/millboard-decking">Millboard Decking</a></li>
				<li><a href="<?php bloginfo('url'); ?>/foundry-vinyl-siding">Foundry Vinyl Siding</a></li>
			
			</ul>
		
		</div>
		
		<div id="submenu_content">
		
			<?php
		
			if(have_posts()) : while(have_posts()) : the_post(); ?>
	
			<h2><?php the_title(); ?></h2>
		
			<?php the_content();
		
			endwhile; endif;
		
			?>
		
		</div>
		
		<div class="clr"></div>
	
	</div>

</div>

<?php get_footer(); ?>