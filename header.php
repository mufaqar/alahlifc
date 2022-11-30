<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11"> 
    <title>
			<?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page, $paged, $post;
			
				wp_title( '|', true, 'right' );
			
				// Add the blog name.
				bloginfo( 'name' );
			
				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";
			
				// Add a page number if necessary:
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'wpv' ), max( $paged, $page ) );
            ?>
	</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"  />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />	
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php 

$slider_title = get_field('title', 'option');
$slider_sub_title = get_field('slider_sub_title', 'option');
$slider_image = get_field('slider_image', 'option');
$image_1 = get_field('image_1', 'option');
$image_2 = get_field('image_2', 'option');
$image_3 = get_field('image_3', 'option');

$day = get_field('day', 'option');
$hours = get_field('hours', 'option');
$minutes = get_field('minutes', 'option');






?>

<header style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $slider_image?>);">
        <nav>
          

            <div class="main_nav">
                <div class="container mx-auto d-flex align-items-center justify-content-between">
                    <div class="w-100 position-relative d-flex justify-content-between align-items-center">
                        <div class="logo "><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/resources/img/logo.png" alt="Logo"></a></div>
                        <div class="menu w-100 d-flex flex-column flex-md-row justify-content-between align-items-center">                        
                            <?php 
                                wp_nav_menu( array(  
                                    'menu'              => "",                             
                                    'menu_class'        => "d-flex flex-column flex-md-row align-items-center",                       
                                    'container'         => false, 
                                    'theme_location'    => "primary"
                                ) );
                            ?>
                            <div class="search_side d-flex align-items-center">                             
                              

                                <?php
                                    $currentlang = get_bloginfo('language');
                                    

                                    if($currentlang=="en-US"):
                                ?>
                                  <a href="<?php echo home_url('/ar'); ?>" class="btn whitebtn"> Arabic </a>

                                <?php elseif($currentlang=="ar"): ?>
                                    <a href="https://ewb.gpm.mybluehost.me" class="btn whitebtn"> English </a>

                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="hamburgur">
                            <i class="fa-solid fa-bars opennav" onclick="openMobileMenu()"></i>
                            <i class="fa-solid fa-xmark closenav" onclick="closeMobileMenu()"></i>
                        </div>
                    </div>
                    
                </div>
            </div>
        </nav>

        

        <?php 

        if ( is_front_page() ) :
            ?><main>
            <div class="container">
                <div class="row">
                    <div class="content col-md-6">
                        <h1> <?php pll_e($slider_title); ?></h1>
                        <h6> <?php pll_e($slider_sub_title); ?></h6>
                      

                        </div>
                    </div>
 
                </div>

            </div>
        </main> <?php
        else :
            ?><main>
            <div class="container">
                <div class="row">
                    <div class="content col-md-6">
                        <h1><?php the_title()?></h1>                      
                        
                    </div>
                    
                </div>

            </div>
        </main>  <?php   endif;    ?>

    </header>