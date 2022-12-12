
 <!-- blogs  -->

 <section class="container mb-5" id="woman_sports">
        <div class="news d-flex justify-content-between flex-column flex-md-row align-items-center">
            <h2><?php pll_e('Women Sports'); ?></h2>
           
        </div>
        <div class="blogwrapper row">
            <div class="col d-flex flex flex-column">                
                <div class="subfeature row mt-4 p-md-0 p-3">
                <?php query_posts(array(
                    'post_type' => 'woman_sports',
                    'posts_per_page' => -1,
                    'order' => 'desc'
                    
                )); 
		if (have_posts()) :  while (have_posts()) : the_post(); ?>

                     <div class="d-flex flex-row mb-3 shadow p-0">
                        <div class="col-4">                        
                        <a href="<?php the_permalink() ; ?>">
                            <?php if ( has_post_thumbnail() ) {								
                                    the_post_thumbnail( 'full', array( 'class'  => 'img-fluid' ) );
								} else { ?>
							<img src="<?php bloginfo('template_directory'); ?>/resources/img/feature.jpg" alt="" class="img-fluid" >
							<?php } ?> </a>
                        </div>
                        <div class="col-8 p-3 ">
                             <p class="date mt-3 mb-2"><?php the_time(get_option('date_format')); ?> </p>
                            <h4 class="mb-3"><a href="<?php the_permalink() ; ?>"><?php the_title()?></a></h4>
                            <div class="d-flex justify-content-between auth-info">
                                <p><?php the_time( 'g:i a' )?></p>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_query(); else : ?>
			<h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
	        <?php endif; ?> 
                    
                </div>
            </div>
            
        </div>
    </section>