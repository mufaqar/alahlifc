  <!-- Our Partners section  -->
  <section class="tranning mt-5 mb-5" id="partners">
        <div class="container">
            <h2><?php pll_e('Our Partners'); ?></h2>
         
        </div>
        <div class="container ">


             <div class="row row-cols-md-3 row-cols-auto justify-content-center ">
                    <div class="col partner ">                        
                         <img src="<?php bloginfo('template_directory'); ?>/images/jaddah.png" alt="Featured Thumbnail" />
                                       
              </div>
                    
            </div>
           
			
            <div class="row row-cols-md-4 row-cols-auto justify-content-center ">

                        <?php query_posts(array(
                        'post_type' => 'partners',
                        'posts_per_page' => -1,
                        'order' => 'desc',
                    )); 
                    if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <div class="partern_wrap">
                    <div class="col partner ">
                        <?php if ( has_post_thumbnail() ) {
                                                the_post_thumbnail('full');
                                            } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Featured Thumbnail" />
                                        <?php } ?>

                       </div>
                       </div>
                
                
                
                
                    <?php endwhile; wp_reset_query(); else : ?>
                        <h6><?php _e('Nothing Found','alahlifc_domain'); ?></h6>
                        <?php endif; ?> 
	
                
                        
                </div>
            </div>
        </section>