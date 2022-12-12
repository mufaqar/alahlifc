  <!-- Our Partners section  -->
  <section class="tranning mt-5 mb-5">
        <div class="container">
            <h2><?php pll_e('Our Partners'); ?></h2>
         
        </div>
        <div class="container ">
			
            <div class="row row-cols-md-4 row-cols-auto">

                        <?php query_posts(array(
                        'post_type' => 'partners',
                        'posts_per_page' => -1,
                        'order' => 'desc',
                    )); 
                    if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <div class="col partner ">

                        <?php if ( has_post_thumbnail() ) {
                                                the_post_thumbnail('full');
                                            } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Featured Thumbnail" />
                                        <?php } ?>

                       </div>
                
                
                
                
                    <?php endwhile; wp_reset_query(); else : ?>
                        <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                        <?php endif; ?> 
	
                
                        
                </div>
            </div>
        </section>