<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CT_Custom
 */

get_header();
?>


	<div class="page-sections pt-5 pb-5">
           <div class="container">           
                <div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<div class="entry">
					<?php if ( has_post_thumbnail() ) { ?>
							<div class="featured-image">
									<?php the_post_thumbnail( 'full' , array( 'class' => 'img-fluid' ) ); ?>
							</div>
						<?php } ?>		
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						
					</div>
				</div>
				<?php edit_post_link(__('Edit','text_domain'),'','.'); ?>
				<?php //comments_template(); ?>
			<?php endwhile; endif; ?>

				</div><!-- #row -->
			</div><!-- #container -->
	</div><!-- #section -->

<?php

get_footer();
