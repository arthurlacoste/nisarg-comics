<?php
/**
 * The template for displaying all single posts.
 *
 * @package Nisarg
 */

get_header(); ?>

	<div class="container">
        <div class="row">
        <?php if ( 'image' == get_post_format() ) : ?>
			<div id="primary" class="col-md-12 content-area">        
        	<?php else: ?>
			<div id="primary" class="col-md-9 content-area">	
			<?php endif; ?>
				<main id="main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
 
					<?php get_template_part( 'template-parts/content',get_post_format()); ?>
				</main><!-- #main -->				

				<div class="post-navigation">				
					<?php nisarg_post_navigation(); ?>
				</div>



			<?php if ( 'image' == get_post_format() ) : ?>
			</div>
			<div id="primary" class="col-md-9 content-area">
				<div class="post-comments">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						if(!comments_open())
							_e('Comments are closed.','nisarg');

					?>
				</div>
			</div>	
			
			<?php get_sidebar('sidebar-1'); ?>  
			
			<?php else: ?>
				<div class="post-comments">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						if(!comments_open())
							_e('Comments are closed.','nisarg');

					?>
				</div>	
			<?php endif; ?>		
				

				<?php endwhile; // End of the loop. ?>

				
			</div><!-- #primary -->

			<?php if ( 'image' != get_post_format() ) : ?>
				<?php get_sidebar('sidebar-1'); ?>    
			<?php endif; ?>
			
		</div> <!--.row-->            
    </div><!--.container-->
    <?php get_footer(); ?>
