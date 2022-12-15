<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CT_Custom
 */

get_header();
?>

 <!-- blogs  -->
 <section class="container mb-5" id="news">
        
        <div class="blogwrapper row">
            <div class="col d-flex flex flex-column">
                
                <div class="subfeature row mt-4 p-md-0 p-3">


	

		<?php if ( have_posts() ) : ?>

			<div class="team-banner">
				<div class="banner-content">
					<?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</div>
   			 </div>



		<div class="page-sections pt-5 pb-5">
           <div class="container">           
                <div class="row">

								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									?>

									<div class="d-flex flex-row mb-3 shadow p-0">
                        <div class="col-4">                        

                            <?php if ( has_post_thumbnail() ) {
								 the_post_thumbnail( 'full', array( 'class'  => 'img-fluid' ) );
								} else { ?>
							 <img src="<?php bloginfo('template_directory'); ?>/resources/img/feature.jpg" alt="" class="img-fluid" >
							<?php } ?>
                        </div>
                        <div class="col-8 p-3 ">
                             <p class="date mt-3 mb-2"><?php the_time(get_option('date_format')); ?> </p>
                            <h4 class="mb-3"><a href="<?php the_permalink() ; ?>"><?php the_title()?></a></h4>
                            <div class="d-flex justify-content-between auth-info">                              
                                <p><?php the_time( 'g:i a' )?></p>
                            </div>
                        </div>
                    </div>

					<?php
								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>

</div>
            </div>
            
        </div>
    </section>

	<?php


get_footer();
