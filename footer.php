     <!-- cta  -->
   <div class="cta">
        <div class="container">
            <div class="_content">
                <h2><?php pll_e('JOIN AS A Alahlifc Sports AND GET ALL THE BENEFITS!'); ?></h2>
                <div class="cta-form mt-3">
                    <form action="mailto:msc@alahlifc.sa" class="d-flex" method="POST" enctype=”text/plain”>
                        <input type="text" placeholder="<?php pll_e('Enter Your Email Address'); ?>">
                        <button>
                            <i class="fa-solid fa-arrow-right"></i>
	
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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