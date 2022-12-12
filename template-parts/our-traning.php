 <!-- player section  -->
 <section class="tranning player" id="tranning">
        <div class="container  d-flex justify-content-between align-items-center">
            <h2><?php pll_e('Tranning'); ?></h2>

        </div>
        <div class="container">
            <div id="traning_slider" class=" multiple-items _playerwrapper mt-4">

                <?php      
                                        
                    query_posts(array(
                        'post_type' => 'trainings',
                        'posts_per_page' => 8,                        
                        'order' => 'desc'
                        
                    ));
                    if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                                    <?php $bg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                                <div class="p-2">
                                                    <div class="card-item p-4 d-flex flex-column justify-content-end"
                                                        style="background: linear-gradient(to bottom, rgba(0, 0, 0, .2), rgba(0, 0, 0, 0.9)), url('<?php echo $bg_image[0]?>'); background-size: cover;">
                                                        <a href="<?php the_permalink()?>">
                                                        <h4><?php the_title()?></h4>
                                                            <p> <?php the_field('sub_title'); ?></p>
                                                        </a>
                                                    </div>
                                                </div>

                    <?php endwhile; wp_reset_query(); else : ?>
                                                        <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                                            <?php endif;   ?>    

            </div>
            <div class="nav">
                <div class="next_btn next_training">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div class="previous_btn previous_training">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
            </div>
        </div>
    </section>
