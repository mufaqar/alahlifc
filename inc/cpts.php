<?php
function cptui_register_my_cpts_trainings() {

	/**
	 * Post Type: Trainings.
	 */

	$labels = [
		"name" => __( "Trainings", "hello-elementor" ),
		"singular_name" => __( "Training", "hello-elementor" ),
	];

	$args = [
		"label" => __( "Trainings", "hello-elementor" ),
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
		"rewrite" => [ "slug" => "trainings", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "trainings", $args );
}

add_action( 'init', 'cptui_register_my_cpts_trainings' );


function cptui_register_my_cpts_team() {

	/**
	 * Post Type: Team.
	 */

	$labels = [
		"name" => __( "Team", "hello-elementor" ),
		"singular_name" => __( "Team", "hello-elementor" ),
	];

	$args = [
		"label" => __( "Team", "hello-elementor" ),
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
		"rewrite" => [ "slug" => "team", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team", $args );
}

add_action( 'init', 'cptui_register_my_cpts_team' );



function cptui_register_my_cpts_matches() {

	/**
	 * Post Type: Matches.
	 */

	$labels = [
		"name" => __( "Matches", "hello-elementor" ),
		"singular_name" => __( "Match", "hello-elementor" ),
	];

	$args = [
		"label" => __( "Matches", "hello-elementor" ),
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
		"rewrite" => [ "slug" => "matches", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "matches", $args );
}

add_action( 'init', 'cptui_register_my_cpts_matches' );



function cptui_register_my_cpts_partners() {

	/**
	 * Post Type: Partners.
	 */

	$labels = [
		"name" => __( "Partners", "twentytwentytwo" ),
		"singular_name" => __( "Partner", "twentytwentytwo" ),
	];

	$args = [
		"label" => __( "Partners", "twentytwentytwo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "partners", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "partners", $args );
}

add_action( 'init', 'cptui_register_my_cpts_partners' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Competition.
	 */

	$labels = [
		"name" => __( "Competition", "alahlifc-theme" ),
		"singular_name" => __( "Competition", "alahlifc-theme" ),
	];

	
	$args = [
		"label" => __( "Competition", "alahlifc-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'competition', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "competition",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "competition", [ "matches" ], $args );

	/**
	 * Taxonomy: Location.
	 */

	$labels = [
		"name" => __( "Location", "alahlifc-theme" ),
		"singular_name" => __( "Location", "alahlifc-theme" ),
	];

	
	$args = [
		"label" => __( "Location", "alahlifc-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'locations', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "locations",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "locations", [ "matches" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


function cptui_register_my_cpts_womain_news() {


$labels = [
	"name" => __( "Woman News", "hello-elementor" ),
	"singular_name" => __( "Training", "hello-elementor" ),
];

$args = [
	"label" => __( "Woman News", "hello-elementor" ),
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
	"rewrite" => [ "slug" => "womain_news", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "womain_news", $args );
}

add_action( 'init', 'cptui_register_my_cpts_womain_news' );


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



