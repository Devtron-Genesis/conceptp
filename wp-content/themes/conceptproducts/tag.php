<?php get_header(); ?>


<div id="page">
	<div class="wrap">
<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', '' ), single_tag_title( '', false ) ); ?></h1>

                <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                    endif;
                ?>
            </header><!-- .archive-header -->

            <?php
                $counter = 1; //Starts counter for post column lay out

                // Start the Loop.
                while ( have_posts() ) : the_post();

        ?>
                <div class="entry-column<?php echo ( $counter%2  ? ' left' : ' right' ); ?>">

                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part( 'content', get_post_format() ); ?>
			
					 <?php the_content(); ?>

                </div>  

        <?php   

            $counter++; //Update the counter

            endwhile;

       

        else :
                    // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

                endif;
            ?>
	 </div> 
</div>

<?php get_footer(); ?>