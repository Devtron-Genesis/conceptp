<?php

/* Template Name: Category */

get_header(); ?>

<div id="orange-area">

	<div class="wrap">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<?php the_secondary_content( 'Orange Area' ); ?>

		<?php endwhile; endif; ?>

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