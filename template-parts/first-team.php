<!-- First Team Slider  -->
<section class="team_slider" id="team">
        <div class="container">
            <h2><?php pll_e('First Team'); ?></h2>
            <div class="slider_wrapper">
                <div class="center-slider">

                     <?php query_posts(array(
                            'post_type' => 'team',
                            'posts_per_page' => -1,
                            'order' => 'desc'
			
                     )); 
		             if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <div>
                        <div class="player_info">
                             <?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('full');
								} else { ?>
							<img src="<?php bloginfo('template_directory'); ?>/resources/img/player1.png" alt="Featured Thumbnail" />
							<?php } ?>

                            <div class="player_data">
                                <h4 class="number"><?php the_field('player_num'); ?></h4>
                                <h3 class="player_position"><?php the_field('player_position'); ?></h3>
								<h6 class="player_name"><?php the_title();?></h6>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query(); else : ?>
                        <h6><?php _e('Nothing Found','alahlifc_domain'); ?></h6>
                        <?php endif; ?> 
                    
                </div>
            </div>
            <div class="nav">
                <div class="next_btn next_team">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div class="previous_btn previous_team">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
            </div>
        </div>
        <div class="_overlay"></div>
    </section>