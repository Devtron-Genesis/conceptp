<?php

/* Template Name: Product */

get_header(); ?>

<div id="orange-area">

	<div class="wrap">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_secondary_content( 'Orange Area' ); ?>

		<?php endwhile; endif; ?>

	</div>

</div>

<div id="page">

	<div class="wrap">

		<div class="row">

			<div class="eight columns">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<?php endwhile; endif; ?>

			</div>

			<div class="four columns">

				<div id="quick-enquiry">

					<h2>Quick Enquiry</h2>

					<?php echo do_shortcode('[contact-form-7 id="457" title="Quick Enquiry"]'); ?>

				</div>

			</div>

			<div class="clear"></div>

		</div>

	</div>

</div>

<?php get_footer(); ?>