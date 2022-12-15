     <!-- cta  -->
    <!-- player section  -->
    <section class="newsection" id="membership">       
        <div class="container">
            <div  class="row">               
          
                    <div class="col ">
                    <a rel="example_group" href="<?php bloginfo('template_directory'); ?>/images/ar1.jpeg" title="">   <img src="<?php bloginfo('template_directory'); ?>/images/ar1.jpeg" class="img-fluid"  /></a>
                      
                        
                    </div>
               
          
                    <div class="col ">
                    <a rel="example_group" href="<?php bloginfo('template_directory'); ?>/images/ar1.jpeg" title="">     <img src="<?php bloginfo('template_directory'); ?>/images/ar2.jpeg" class="img-fluid"  /></a>
                        
                    </div>
               
          
                    <div class="col ">
                    <a rel="example_group" href="<?php bloginfo('template_directory'); ?>/images/ar1.jpeg" title="">    <img src="<?php bloginfo('template_directory'); ?>/images/ar3.jpeg" class="img-fluid"  /></a>
                        
                    </div>
             

                   

            </div>
            
        </div>
     </section>

    <!-- footer  -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php bloginfo('template_directory'); ?>/resources/img/logo.png" alt="">
                </div>
                <div class="col-md-2">
                    <h6 class="menu-title"><?php pll_e('Sports'); ?></h6>
                    <?php 
                                wp_nav_menu( array(  
                                    'menu'              => "",                             
                                    'menu_class'        => "",                       
                                    'container'         => false, 
                                    'theme_location'    => "footer"
                                ) );
                            ?>
                </div>

                <div class="col-md-2">
                    <h6 class="menu-title"><?php pll_e('Site Links'); ?></h6>
                    <?php 
                                wp_nav_menu( array(  
                                    'menu'              => "",                             
                                    'menu_class'        => "",                       
                                    'container'         => false, 
                                    'theme_location'    => "footer1"
                                ) );
                            ?>
                </div>

                <div class="col-md-2">
                    <h6 class="menu-title"><?php pll_e('Site Links'); ?></h6>
                    
                        <?php 
                                wp_nav_menu( array(  
                                    'menu'              => "",                             
                                    'menu_class'        => "",                       
                                    'container'         => false, 
                                    'theme_location'    => "footer2"
                                ) );
                            ?>
                </div>

                <div class="col-md-3">
                    
                    <div class="social mt-4">
                        <ul class="d-flex align-items-center">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitch"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>


  

<?php wp_footer(); ?>

<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>

 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/resources/js/slick-slider.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/resources/js/script.js" type="text/javascript"></script>

  


</body>
</html>