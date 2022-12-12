<?php

/**
 * Template Name: Matches 
 */
get_header();

?>
    <!-- Matches  -->
    <section class=" mb-5">
        <div class="container mt-5">


                                            



                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>- Any -</option>
                                    <option value="1">Premier League</option>
                                </select>
                                <label for="floatingSelect">Competition</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>- Any -</option>
                                    <option selected>- Home -</option>
                                    <option selected>- Away -</option>
                                  

                                     
                                </select>
                                <label for="floatingSelect">Location</label>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>

    <section class=" mb-5">
        <div class="container">
            <div class="mt-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php query_posts(array(
            'post_type' => 'matches',
            'posts_per_page' => -1,
			'order' => 'desc'
			
        )); 
		if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              <?php the_title()?>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="card_header row d-flex justify-content-between align-items-center">
                                <div class="col-md-9 col-7 event_info d-flex align-items-center">
                                    <a href="#">
                                        <p><?php the_field('match_date'); ?> <span> | </span> Emirates Stadium                                    
                                    
                                    </p>
                                    </a>
                                </div>
                                <div class="col-md-3 col-5 League_icon d-flex justify-content-end">
                                    <figure>
                                        <img src="http://demo.mufaqar.com//dev2/wp-content/themes/alahlifc-theme/resources/img/comp.png"/>
                                    </figure>
                                </div>
                                <hr/>
                            </div>
                            <a href="#">
                                <div class="card_body row mb-3">
                                    <div class="row">
                                        <div class="col-5 d-flex flex-md-row flex-column justify-content-between align-items-center">
                                            <figure>
                                                <img src="<?php the_field('team_image_one'); ?>"/>
                                            </figure>
                                            <figcaption><?php the_field('team_title_one'); ?></figcaption>
                                        </div>
                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                            <p>V</p>
                                        </div>
                                        <div class="col-5 d-flex flex-md-row-reverse flex-column justify-content-between align-items-center">
                                            <figure>
                                                <img src="<?php the_field('team_image_two'); ?>"/>
                                            </figure>
                                            <figcaption><?php the_field('team_title_two'); ?></figcaption>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card_footer row d-flex justify-content-between align-items-center">
                                <hr/>
                                <div class="col-md-7 col-12 event_info">
                                    <span >News & Video 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </span>
                                    <span >Ticket Info
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col-md-5 col-12">
                                    <span >
                                        <div class="broadcaster d-flex justify-content-md-end align-items-center">
                                            <p><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-volume-down" viewBox="0 0 16 16">
                                                <path d="M9 4a.5.5 0 0 0-.812-.39L5.825 5.5H3.5A.5.5 0 0 0 3 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 9 12V4zM6.312 6.39 8 5.04v5.92L6.312 9.61A.5.5 0 0 0 6 9.5H4v-3h2a.5.5 0 0 0 .312-.11zM12.025 8a4.486 4.486 0 0 1-1.318 3.182L10 10.475A3.489 3.489 0 0 0 11.025 8 3.49 3.49 0 0 0 10 5.525l.707-.707A4.486 4.486 0 0 1 12.025 8z"/>
                                                </svg> Audio available on Arsenal.com</p>
                                           
                                        </div>
                                    </span>
                                </div>
                            </div>                      
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
    
    <?php get_footer()?>