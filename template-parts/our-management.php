   <!-- Management section  -->
   <section class="mt-5 mb-5 management">
        <div class="container ">
            <div class="row">
            <h2><?php pll_e('Managements'); ?></h2>
            </div>
            <div class="row ">
                
            <?php query_posts(array(
                'post_type' => 'management',
                'posts_per_page' => 10,
                'order' => 'desc'
                
            )); 
            if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <?php $bg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

            <div class="p-2 col-md-4 col-12">
                <div class="card-item p-4 d-flex flex-column justify-content-end"
                    style="min-height: 22.3rem; background-position: center; background: linear-gradient(to bottom, rgba(0, 0, 0, .2), rgba(0, 0, 0, 0.9)), url('<?php echo $bg_image[0]?>'); background-size: cover;">
                    <a href="#" class="text-white">
                        <h4 class="text-white" style="font-size: 16px;"><?php the_title()?></h4>
                        <p class="text-white" style="font-size: 14px;"><?php the_field('designation'); ?></p>
                    </a>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); else : ?>
                <h6><?php _e('Nothing Found','alahlifc_domain'); ?></h6>
                <?php endif; ?>
            </div>

            
        </div>
    </section>
    