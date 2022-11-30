<?php

/**
 * Template Name: Home 
 */
get_header();

?>
    <!-- blogs  -->
    <section class="container mb-5" id="news">
        <div class="news d-flex justify-content-between flex-column flex-md-row align-items-center">
            <h2><?php pll_e('Alahlifc News'); ?></h2>
            <div class="d-flex align-items-center flex-column flex-md-row">
                <ul class="d-flex flex-wrap p-0">
                <?php                                
                                     $category_tax = get_terms( array('taxonomy' => 'category','hide_empty' => false ) ); 
                                          foreach( $category_tax as $cate ) 
                                                    { ?>
                                                    <li><a href="<?php echo get_term_link( $cate ); ?>"><?php echo $cate->name ?> <?php
                                                     }
                                             
                                           ?>
                </ul>
                <a href="<?php echo home_url('/news'); ?>" class="btn bluebtn view mt-3 mt-md-0"><?php pll_e('View All'); ?></a>
            </div>
        </div>
        <div class="blogwrapper row">
            <div class="col d-flex flex flex-column">
                
                <div class="subfeature row mt-4 p-md-0 p-3">

                <?php query_posts(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
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

   <!-- matches record -->
   <section class="mtch-reslt mb-5" id="matches" >
        <div class="record-wrapper container p-4 d-flex flex-column align-items-center justify-content-center">
            <h2 class="mtch-title"><?php pll_e('Matches'); ?></h2>
            <div class="row w-100 outer">

            <?php query_posts(array(
            'post_type' => 'matchresult',
            'posts_per_page' => 1,
			'order' => 'desc'
			
        )); 
		if (have_posts()) :  while (have_posts()) : the_post(); ?>

                    <div class="col-md-5">
                        <div class="last-match-result-one last-match-result">
                            <div class="col-md-12">  
                                <div class="result-details">
                                    <h3 class="result-details-left">
                                        <a href="#"><?php the_field('team_title_one'); ?> </a>
                                    </h3>
                                    <?php if( have_rows('team_members_team1') ): ?>
                                            <ul class="p-0">
                                            <?php while( have_rows('team_members_team1') ): the_row(); 
                                                $name = get_sub_field('name');
                                                $score = get_sub_field('score');
                                                ?>                                               
                                                <li><p><?php echo $name ?></p><span>(<?php echo $score ?>)</span></li>
                                            <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    <div class="last-match-logo">
                                        <a href="#"><img src="<?php the_field('team_image_one'); ?>" alt="Team Logo"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-2">
                        
                    </div>
                    <div class="col-md-5">
                        <div class="last-match-result-two last-match-result">
                            <div class="col-md-12">
                                <div class="result-details">
                                    <div class="last-match-logo-right">
                                         <a href="#"><img src="<?php the_field('team_image_two'); ?>" alt="Team Logo"></a>
                                    </div>
                                    <h3 class="result-details-right">
                                        <a href="#">
                                        <?php the_field('team_title_two'); ?>
                                        </a>
                                    </h3>
                               
                                        <?php if( have_rows('team_members_team2') ): ?>
                                            <ul class="p-0">
                                            <?php while( have_rows('team_members_team2') ): the_row(); 
                                                $name = get_sub_field('name');
                                                $score = get_sub_field('score');
                                                ?>                                               
                                                <li><p><?php echo $name ?></p><span>(<?php echo $score ?>)</span></li>
                                            <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                 
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_query(); else : ?>
			<h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
	        <?php endif; ?> 




            </div>
            
        </div>
    </section>

   <!-- Next Matches section  -->
   <section class="tranning mt-5 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <h2><?php pll_e('Next Matches'); ?></h2>
        </div>
        <div class="nextmatch_slider container">
            <div id="match_slider" class="multiple-items mt-4">
                    <?php query_posts(array(
                    'post_type' => 'matches',
                    'posts_per_page' => -1,
                    'order' => 'desc'			
                         )); 
                    if (have_posts()) :  while (have_posts()) : the_post(); ?>
                            <div class="record m-2">
                                <div class="record-wrapper">
                                    <div class="p-4">
                                        
                                        <h6><?php the_field('match_date'); ?></h6>
                                        <div class="score_wrapper">
                                            <div class="score d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php the_field('team_image_one'); ?>" alt="Team Logo">
                                                    <p><?php the_field('team_title_one'); ?></p>
                                                </div>
                                                <h6><?php the_field('score_team_one'); ?></h6>
                                            </div>
                                            <!-- 2nd -->
                                            <div class="score d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php the_field('team_image_two'); ?>" alt="Team Logo">
                                                    <p><?php the_field('team_title_two'); ?></p>
                                                </div>
                                                <h6><?php the_field('score_team_two'); ?></h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php endwhile; wp_reset_query(); else : ?>
                        <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                        <?php endif; ?> 


            </div>
            <div class="nav">
                <div class="next_btn next_match">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div class="previous_btn previous_match">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
            </div>
        </div>
   </section>

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
			<h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
	        <?php endif; ?>
        </div>

        
    </div>
</section>


    <!-- Team Slider  -->
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
                        <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
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

     


    
     <!-- Our Partners section  -->
     <section class="tranning mt-5 mb-5">
        <div class="container mx-auto">
            <h2><?php pll_e('Our Partners'); ?></h2>
         
        </div>
        <div class="container mx-auto">
			<div class="d-flex justify-content-center">

            <img width="500" height="300" src="https://i0.wp.com/ewb.gpm.mybluehost.me/wp-content/uploads/2022/11/شركة-وسط-جدة-للتطوير.png?fit=300%2C200&amp;ssl=1" class="attachment-full size-full wp-post-image" alt="" decoding="async" loading="lazy">
            </div>
            <div class="row row-cols-md-4 row-cols-auto ">

            <?php query_posts(array(
            'post_type' => 'partners',
            'posts_per_page' => -1,
			'order' => 'desc',
        )); 
		if (have_posts()) :  while (have_posts()) : the_post(); ?>
         <div class="d-flex justify-content-center">

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


    <?php get_footer()?>