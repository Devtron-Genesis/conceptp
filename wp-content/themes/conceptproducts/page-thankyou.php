<?php
/*
Template name: Thankyou
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/homepage-slides'); ?>

<div id="page">

	<div class="wrap">
		
		<?php
		
		if(have_posts()) : while(have_posts()) : the_post(); ?>
	
		<h2><?php the_title(); ?></h2>
		
		<?php the_content();
		
		endwhile; endif;
		
		?>
	
	</div>

</div>

<!-- Google Code for Enquiry Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1002762650;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "Wxy3CL7a3QMQmuOT3gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1002762650/?value=0&amp;label=Wxy3CL7a3QMQmuOT3gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php get_footer(); ?>