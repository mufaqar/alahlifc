<?php 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 140, 140, true );
	add_image_size( 'single-post-thumbnail', 300, 9999 );

	// Add RSS links to <head> section
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
		// Declare sidebar widget zone
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
    }

function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

if (function_exists('register_nav_menus')) {
register_nav_menus( array(
		'top' => __( 'Top Menu', '' ),
        'primary' => __( 'Primary Menu', '' ),
		'footer' => __( 'Footer1 Menu', '' ),
		'footer1' => __( 'Footer2 Menu', '' ),
		'footer2' => __( 'Footer3 Menu', '' ),
	) );
}

function fallbackmenu1(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }

function fallbackmenu2(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }

function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 $buttons[] = 'lineheight';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");

function add_first_and_last($items) {
    $items[1]->classes[] = 'first-menu-item';
    $items[count($items)]->classes[] = 'last-menu-item';
    return $items;
}
 
add_filter('wp_nav_menu_objects', 'add_first_and_last');

// Theme Options
//include_once('admin/index.php');
//Metabox
//include_once('metaboxes.php');

include_once('inc/cpts.php');




/* TRANSLATIONS  */

add_action('init', function() {
	pll_register_string('alahlifc_domain', 'contact us');
    pll_register_string('alahlifc_domain', 'View All');
    pll_register_string('alahlifc_domain', 'Alahlifc News');
    pll_register_string('alahlifc_domain', 'Matches');
    pll_register_string('alahlifc_domain', 'Alahlifc Sports Football Club');
    pll_register_string('alahlifc_domain', 'Worrldwide realese');
    pll_register_string('alahlifc_domain', 'view all result');
    pll_register_string('alahlifc_domain', 'Next Matches');
    pll_register_string('alahlifc_domain', 'Tranning');
    pll_register_string('alahlifc_domain', 'First Team');
    pll_register_string('alahlifc_domain', 'Our Partners');
    pll_register_string('alahlifc_domain', 'JOIN AS A Alahlifc Sports AND GET ALL THE BENEFITS!');
    pll_register_string('alahlifc_domain', 'Enter Your Email Address');
    pll_register_string('alahlifc_domain', 'Subscribe our newsletter');
    pll_register_string('alahlifc_domain', 'Site Links');
    pll_register_string('alahlifc_domain', 'Sports');
    pll_register_string('alahlifc_domain', 'Day');
    pll_register_string('alahlifc_domain', 'Hours');
    pll_register_string('alahlifc_domain', 'Mins');
    pll_register_string('alahlifc_domain', 'By');
    pll_register_string('alahlifc_domain', 'Next Match');
    pll_register_string('alahlifc_domain', 'Match center');
	pll_register_string('alahlifc_domain', 'Managements');

});


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_add_options_page') ) {
	
	
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function cptui_register_my_cpts_matchresult() {

	/**
	 * Post Type: Match results.
	 */

	$labels = [
		"name" => __( "Match results", "Hello-Elementor-child" ),
		"singular_name" => __( "Match result", "Hello-Elementor-child" ),
	];

	$args = [
		"label" => __( "Match results", "Hello-Elementor-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "matchresult", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "matchresult", $args );
}

add_action( 'init', 'cptui_register_my_cpts_matchresult' );



function cptui_register_my_cpts_management() {

	/**
	 * Post Type: Managements.
	 */

	$labels = [
		"name" => __( "Managements", "Hello-Elementor-child" ),
		"singular_name" => __( "Management", "Hello-Elementor-child" ),
	];

	$args = [
		"label" => __( "Managements", "Hello-Elementor-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "management", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "management", $args );
}

add_action( 'init', 'cptui_register_my_cpts_management' );
