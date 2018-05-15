<?php
	
/* Template Name: Doors & Doorway Solutions */
	
get_header(); ?>

<div id="orange-area">

	<div class="wrap">

		<?php query_posts('page_id=1267'); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php

        $attachments = get_posts( array(
            'post_type' => 'attachment',
            'posts_per_page' => -1,
            'post_parent' => $post->ID,
            'posts_per_page' => 100,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ));

        ?>

        <?php if ($attachments) : ?>
        <div id="slider">
            <?php foreach ($attachments as $attachment) : ?>
                <?php $full = wp_get_attachment_image_src( $attachment->ID, 'full', true ); ?>
                <img src="<?php echo $full[0]; ?>" alt="Slider">
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

		<?php endwhile; endif; ?>

		<?php wp_reset_query(); ?>
		
		<div class="row">
			
			<div class="four columns" style="padding-right: 20px">

				<a href="<?php echo get_permalink(1246); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/btn3.png" alt=""></a>
				
			</div>
			
			<div class="four columns" style="padding: 0 20px;">

				<a href="<?php echo get_permalink(1248); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/btn4.png" alt=""></a>
				
			</div>
			
			<div class="four columns" style="padding-left: 20px;">

				<a href="<?php echo get_permalink(1250); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/btn5.png" alt=""></a>
				
			</div>
			
			<div class="clear"></div>
			
		</div>
	
	</div>

</div>

<div id="page">

	<div class="wrap">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		<?php the_content(); ?>
		
		<?php endwhile; endif; ?>
		
		<div class="clear"></div>
	
	</div>

</div>

<?php get_footer(); ?>