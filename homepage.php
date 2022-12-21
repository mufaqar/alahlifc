<?php

    /**
     * Template Name: Home Page
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
   