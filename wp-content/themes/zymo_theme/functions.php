<?php

function style_enqueue(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'style_enqueue');

register_nav_menus(
    array(
        'primary' => __('Primary Menu'),
        'sidebar_menu' => __('Sidebar Menu'),
        'footer' => __('Footer Menu'),
        'mobile' => __('Mobile Menu'),
        'footer1' => __('Footer1 Menu'),
        'footer2' => __('Footer2 Menu'),
        'footer3' => __('Footer3 Menu'),
    ));


// Register Custom Post Type Product
function create_product_cpt() {

	$labels = array(
		'name' => _x( 'Products', 'Post Type General Name', 'zymo' ),
		'singular_name' => _x( 'Product', 'Post Type Singular Name', 'zymo' ),
		'menu_name' => _x( 'Products', 'Admin Menu text', 'zymo' ),
		'name_admin_bar' => _x( 'Product', 'Add New on Toolbar', 'zymo' ),
		'archives' => __( 'Product Archives', 'zymo' ),
		'attributes' => __( 'Product Attributes', 'zymo' ),
		'parent_item_colon' => __( 'Parent Product:', 'zymo' ),
		'all_items' => __( 'All Products', 'zymo' ),
		'add_new_item' => __( 'Add New Product', 'zymo' ),
		'add_new' => __( 'Add New', 'zymo' ),
		'new_item' => __( 'New Product', 'zymo' ),
		'edit_item' => __( 'Edit Product', 'zymo' ),
		'update_item' => __( 'Update Product', 'zymo' ),
		'view_item' => __( 'View Product', 'zymo' ),
		'view_items' => __( 'View Products', 'zymo' ),
		'search_items' => __( 'Search Product', 'zymo' ),
		'not_found' => __( 'Not found', 'zymo' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'zymo' ),
		'featured_image' => __( 'Featured Image', 'zymo' ),
		'set_featured_image' => __( 'Set featured image', 'zymo' ),
		'remove_featured_image' => __( 'Remove featured image', 'zymo' ),
		'use_featured_image' => __( 'Use as featured image', 'zymo' ),
		'insert_into_item' => __( 'Insert into Product', 'zymo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'zymo' ),
		'items_list' => __( 'Products list', 'zymo' ),
		'items_list_navigation' => __( 'Products list navigation', 'zymo' ),
		'filter_items_list' => __( 'Filter Products list', 'zymo' ),
	);
	$args = array(
		'label' => __( 'Product', 'zymo' ),
		'labels' => $labels,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'zymo_products', $args );
	$labels = array(
		'name' => _x( 'Jobs', 'Post Type General Name', 'zymo' ),
		'singular_name' => _x( 'Job', 'Post Type Singular Name', 'zymo' ),
		'menu_name' => _x( 'Jobs', 'Admin Menu text', 'zymo' ),
		'name_admin_bar' => _x( 'Job', 'Add New on Toolbar', 'zymo' ),
		'archives' => __( 'Job Archives', 'zymo' ),
		'attributes' => __( 'Job Attributes', 'zymo' ),
		'parent_item_colon' => __( 'Parent Job:', 'zymo' ),
		'all_items' => __( 'All Jobs', 'zymo' ),
		'add_new_item' => __( 'Add New Job', 'zymo' ),
		'add_new' => __( 'Add New', 'zymo' ),
		'new_item' => __( 'New Job', 'zymo' ),
		'edit_item' => __( 'Edit Job', 'zymo' ),
		'update_item' => __( 'Update Job', 'zymo' ),
		'view_item' => __( 'View Job', 'zymo' ),
		'view_items' => __( 'View Jobs', 'zymo' ),
		'search_items' => __( 'Search Job', 'zymo' ),
		'not_found' => __( 'Not found', 'zymo' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'zymo' ),
		'featured_image' => __( 'Featured Image', 'zymo' ),
		'set_featured_image' => __( 'Set featured image', 'zymo' ),
		'remove_featured_image' => __( 'Remove featured image', 'zymo' ),
		'use_featured_image' => __( 'Use as featured image', 'zymo' ),
		'insert_into_item' => __( 'Insert into Job', 'zymo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Job', 'zymo' ),
		'items_list' => __( 'Jobs list', 'zymo' ),
		'items_list_navigation' => __( 'Jobs list navigation', 'zymo' ),
		'filter_items_list' => __( 'Filter Jobs list', 'zymo' ),
	);
	$args = array(
		'label' => __( 'Jobs', 'zymo' ),
		'labels' => $labels,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'jobs', $args );

}
add_action( 'init', 'create_product_cpt', 0 );



// Register Taxonomy Category
function create_category_tax() {

	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'zymo' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'zymo' ),
		'search_items'      => __( 'Search Categories', 'zymo' ),
		'all_items'         => __( 'All Categories', 'zymo' ),
		'parent_item'       => __( 'Parent Category', 'zymo' ),
		'parent_item_colon' => __( 'Parent Category:', 'zymo' ),
		'edit_item'         => __( 'Edit Category', 'zymo' ),
		'update_item'       => __( 'Update Category', 'zymo' ),
		'add_new_item'      => __( 'Add New Category', 'zymo' ),
		'new_item_name'     => __( 'New Category Name', 'zymo' ),
		'menu_name'         => __( 'Category', 'zymo' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'zymo_category', 'zymo_products', $args );

}
add_action( 'init', 'create_category_tax' );
add_theme_support( 'post-thumbnails' );

function create_sizes_tax() {

	$labels = array(
		'name'              => _x( 'Sizes', 'taxonomy general name', 'zymo' ),
		'singular_name'     => _x( 'sizes', 'taxonomy singular name', 'zymo' ),
		'search_items'      => __( 'Search Sizes', 'zymo' ),
		'all_items'         => __( 'All Sizes', 'zymo' ),
		'parent_item'       => __( 'Parent sizes', 'zymo' ),
		'parent_item_colon' => __( 'Parent sizes:', 'zymo' ),
		'edit_item'         => __( 'Edit sizes', 'zymo' ),
		'update_item'       => __( 'Update sizes', 'zymo' ),
		'add_new_item'      => __( 'Add New sizes', 'zymo' ),
		'new_item_name'     => __( 'New sizes Name', 'zymo' ),
		'menu_name'         => __( 'Sizes', 'zymo' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'zymo_sizes', 'zymo_products', $args );

}
add_action( 'init', 'create_sizes_tax' );


function create_brand_tax() {

	$labels = array(
		'name'              => _x( 'Brands', 'taxonomy general name', 'zymo' ),
		'singular_name'     => _x( 'Brand', 'taxonomy singular name', 'zymo' ),
		'search_items'      => __( 'Search Brands', 'zymo' ),
		'all_items'         => __( 'All Brands', 'zymo' ),
		'parent_item'       => __( 'Parent Brand', 'zymo' ),
		'parent_item_colon' => __( 'Parent Brand:', 'zymo' ),
		'edit_item'         => __( 'Edit Brand', 'zymo' ),
		'update_item'       => __( 'Update Brand', 'zymo' ),
		'add_new_item'      => __( 'Add New Brand', 'zymo' ),
		'new_item_name'     => __( 'New Brand Name', 'zymo' ),
		'menu_name'         => __( 'Brand', 'zymo' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'zymo_brands', 'zymo_products', $args );	

}
add_action( 'init', 'create_brand_tax' );


add_action("wp_enqueue_scripts","zymo_scripts");

function zymo_scripts(){
	// Styles
	wp_enqueue_style("normalize",get_template_directory_uri()."/css/normalize.css");
	wp_enqueue_style("webflow",get_template_directory_uri()."/css/webflow.css");
	wp_enqueue_style("swiper","https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css");
	wp_enqueue_style("main",get_template_directory_uri()."/css/main.css");

	// Scripts

	wp_enqueue_script( "jquery-cdn", "https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=636de5fe61df29651190674f",[],"1",true);
	wp_enqueue_script( "webflow", get_template_directory_uri()."/js/webflow.js",["jquery-cdn"],"1",true);

	wp_enqueue_script( "barba", "https://cdn.jsdelivr.net/npm/@barba/core", [], 1, true );
	wp_enqueue_script( "gsap-min", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js",[],"1",true);
	wp_enqueue_script( "scrollTrigger", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js",["jquery-cdn"],"1",true);
	wp_enqueue_script( "swiper","https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js",["jquery-cdn"],"1",true);
	wp_enqueue_script( "locomotive", "https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js",["jquery-cdn"],"1",true );
	wp_enqueue_script( "splittext", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js",["jquery-cdn"],"1",true );
	wp_enqueue_script( "gsap", get_template_directory_uri()."/js/SplitText.js",["jquery-cdn"],"1",true );
	wp_enqueue_script( "lazy-load","https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.6.1/dist/lazyload.min.js",[],"1",true);
	wp_enqueue_script("filterizr","https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js",["jquery-cdn"],"1",false);
	wp_enqueue_script("cfr-reload","https://www.google.com/recaptcha/api.js?onload=cf7srLoadCallback&amp;render=explicit",["jquery-cdn"],"1",true);
	wp_enqueue_script( "lottie", "https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js", [], "1.0",true);
	wp_enqueue_script( "main", get_template_directory_uri()."/js/main.js",["gsap-min","jquery-cdn","scrollTrigger","barba","swiper","gsap","splittext"],"1",true);
	
	wp_localize_script( 'main', 'js_config', array(
		'ajax_url'	=> admin_url( 'admin-ajax.php' ),
		'ajax_nonce'	=> wp_create_nonce( 'noncy_nonce' ),
		'theme_path'	=> get_template_directory_uri(),
		
	));
}

add_theme_support( 'custom-logo' );

add_action("init","theme_functions");
function theme_functions(){
	function get_custom_logo_url()
		{
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			return $image[0];
		}
}
function ordinal_suffix($num){
    $num = $num % 100; // protect against large numbers
    if($num < 11 || $num > 13){
         switch($num % 10){
            case 1: return 'st';
            case 2: return 'nd';
            case 3: return 'rd';
        }
    }
    return 'th';
}

add_filter( 'show_admin_bar', '__return_false' );

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

if ( function_exists('register_sidebar') ) {
	$sidebar1 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',        
		'name'=>__( 'My sidebar 1', 'textdomain' ),	
	);	
	$sidebar2 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',        
		'name'=>__( 'My sidebar 2', 'textdomain' ),	
	);
    $sidebar3 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',        
		'name'=>__( 'My sidebar 3', 'textdomain' ),	
	);
    $sidebar4 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',        
		'name'=>__( 'My sidebar 4', 'textdomain' ),	
	);
	
	register_sidebar($sidebar1);
	register_sidebar($sidebar2);
    register_sidebar($sidebar3);
    register_sidebar($sidebar4);
}

add_filter( 'wpcf7_form_elements', 'imp_wpcf7_form_elements' );
function imp_wpcf7_form_elements( $content ) {
    $str_pos = strpos( $content, 'type="file" name="Resume"' );
    if ( $str_pos !== false ) {
        $content = substr_replace( $content, ' data-title="Drag and drop a file"', $str_pos, 0 );
    }
    return $content;
}


function jnz_tnp_ajax_subscribe() {
	
check_ajax_referer( 'noncy_nonce', 'nonce' );
$data = urldecode( $_POST['data'] );
if ( !empty( $data ) ) :
	$data_array = explode( "&", $data );
	$fields = [];
	foreach ( $data_array as $array ) :
		$array = explode( "=", $array );
		$fields[ $array[0] ] = $array[1];
	endforeach;
endif;

if ( !empty( $fields ) ) :
	if(is_email($fields['ne'])):
	global $wpdb;
	$output = array(
		'status'    => 'success',
		'msg'       => __( 'Thank you for your Email. Please check your inbox to confirm your Subscription.', 'zymo' )
	);
else:
	$output = array(
		'status'    => 'error',
		'msg'       => __( 'Please enter valid Email address', 'zymo' )
	);
endif;
else :
	$output = array(
		'status'    => 'error',
		'msg'       => __( 'An Error occurred. Please try again later.', 'zymo' )
	);
endif;
wp_send_json( $output );
}
add_action( 'wp_ajax_nopriv_jnz_tnp_ajax_subscribe', 'jnz_tnp_ajax_subscribe' );
add_action( 'wp_ajax_jnz_tnp_ajax_subscribe', 'jnz_tnp_ajax_subscribe' );

// add_filter( 'script_loader_tag', function ( $tag, $handle ) {

//     return str_replace( 'src', 'defer="defer" src', $tag );
// }, 10, 2 );

// add_filter( 'style_loader_tag', function ( $tag, $handle ) {

// 	if($handle == "style")
// 	return $tag;

//     $tag = str_replace( 'stylesheet', 'preload', $tag );
// 	$tag = str_replace(">",'as="style" onload="this.onload=null;this.rel=\'stylesheet\'" >',$tag);
// 	return $tag;
// }, 10, 2 );

add_action("wp_ajax_get_child_cates","get_child_cates");
add_action("wp_ajax_nopriv_get_child_cates","get_child_cates");
function get_child_cates(){
	if($_POST)
	{
		$term_id = $_POST["term_id"];
		$data = get_terms( array( 'taxonomy' => 'zymo_category', 'parent' => $term_id,"hide_empty"=>false ) );
		$message = "";
		if($data){
			foreach ($data as $cat) {
				$message.="<li><a href='#' data-filter='".$cat->term_id."'>".$cat->name."</a></li>";
			}
			$output = array(
				'status'    => 'success',
				'data'       => $message
			);
		}
		else{
			$output = array(
				'status'    => 'error',
				'data'       => ""
			);
		}
		
		wp_send_json( $output );
	}
}

