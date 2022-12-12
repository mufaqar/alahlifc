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
                                        <a href="<?php echo get_the_permalink(pll_get_post(121));  ?>"><?php the_field('team_title_one'); ?> </a>
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
                                        <a href="<?php echo get_the_permalink(pll_get_post(121));  ?>"><img src="<?php the_field('team_image_one'); ?>" alt="Team Logo"></a>
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
                                         <a href="<?php echo get_the_permalink(pll_get_post(121));  ?>"><img src="<?php the_field('team_image_two'); ?>" alt="Team Logo"></a>
                                    </div>
                                    <h3 class="result-details-right">
                                        <a href="<?php echo get_the_permalink(pll_get_post(121));  ?>">
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
