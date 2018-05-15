<?php
/*
Template name: Contact
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/homepage-slides'); ?>

<div id="page">

	<div class="wrap">
		
		<?php
		
		if(have_posts()) : while(have_posts()) : the_post(); ?>
	
		<h2><?php the_title(); ?></h2>
	
		<div id="wide-enquiry">

			<h2>Enquiry Form</h2>
		
			<?php echo do_shortcode('[contact-form-7 id="457" title="Quick Enquiry"]'); ?>
		
		</div>
		
		<?php the_content();
		
		endwhile; endif;
		
		?>
		
		<div class="clr"></div>
	
	</div>

</div>

<?php get_footer(); ?>