<?php /* Template Name: CustomPageT1 */ ?>
<?php get_header(); ?>

<?php /*get_template_part('parts/homepage-slides');*/ ?>
<style>
#navigation{display: none;}#text-5 {display: none;} #footer blockquote {font-size: 24px;margin: 27px 0 0 9%;padding-left: 6%;text-align: left; width: 500px;} .banner-block, .wpb_row .wpb_column .wpb_wrapper .banner-block{width: 88%;} #wp-admin-bar-top-secondary,#footer-bottom{display: none;}
</style>

<div id="page" style="overflow: inherit;">

	<div class="wrap">
		
		<?php
		
		if(have_posts()) : while(have_posts()) : the_post(); ?>
		
		<?php the_content();
		
		endwhile; endif;
		
		?>
	
	</div>

</div>

<?php get_footer(); ?>

