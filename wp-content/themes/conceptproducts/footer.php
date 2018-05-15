<div id="footer">

	<div class="wrap clearfix">
		
		<?php if ( is_active_sidebar( 'footer-1' ) ){ ?>
				<div class="floatl width13">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer-2' ) ){ ?>
				<div class="floatl width13">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ){ ?>
				<div class="floatl width13">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer-4' ) ){ ?>
				<div class="floatl width13">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>
			<?php } ?>
		
		
	</div>

</div>
<div id="footer-bottom">
	<div class="wrap clearfix">
		Website &copy; <a href="<?php bloginfo('url'); ?>"><span class="white">Concept Products</span></a>
	</div>
</div>

<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

<?php wp_footer(); ?>
<script>
jQuery(document).ready(function(){  
jQuery('.bxslider').bxSlider();
jQuery('.wpb_single_image .wpb_wrapper a').each(function(){
jQuery(this).attr('rel','nofollow');
})
});
</script>
<script>
jQuery('.bxslider').bxSlider({
  auto: true,
  autoControls: true
});
</script>
</body>

</html>