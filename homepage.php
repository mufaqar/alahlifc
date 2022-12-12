<?php

    /**
     * Template Name: Home 
     */
    get_header('home');

    ?>


 

    <?php get_template_part('template-parts/our' , 'blog') ?>
    <?php get_template_part('template-parts/our' , 'matches') ?>
    <?php get_template_part('template-parts/our' , 'traning') ?>    
    <?php get_template_part('template-parts/first' , 'team') ?>
    <?php get_template_part('template-parts/woman' , 'sports') ?>
    <?php get_template_part('template-parts/our' , 'management') ?>    
    <?php get_template_part('template-parts/our' , 'parterns') ?>


     

    <?php get_footer()?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/resources/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/resources/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/resources/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});		
		});
	</script>