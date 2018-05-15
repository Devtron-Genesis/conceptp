<?php
/*
Template name: Include Sub Menu
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/homepage-slides'); ?>

<div id="page">

	<div class="wrap">
	
		<div id="submenu">
	
			<h2>Sub-Menu</h2>
			
			<ul>
			
				<?php
				if($post->post_parent)
				$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				else
				$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				if ($children) { ?>
				<?php echo $children; ?>
				<?php } ?>
			
			</ul>
			
			<div id="quick-enquiry">
			
				<h2>Quick Enquiry</h2>
			
				<?php echo do_shortcode('[contact-form-7 id="457" title="Quick Enquiry"]'); ?>
			
			</div>
		
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