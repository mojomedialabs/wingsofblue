<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_enqueue_script("jquery");


	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<ul class="top-links">
			    <li>
			        <a href="<?php echo get_permalink(24); ?>">Contact Us</a>
			    </li>
			</ul>
			<a href="<?php echo get_permalink(6); ?>" class="logo">
			    <img src="<?php bloginfo('template_directory'); ?>/images/headers/logo.png" width="190px" height="100px" style="width: 190px !important;" alt="" />
			</a>
			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main" class="cf">
		<?php
        if (is_page() and ($notfound != '1') and ! is_front_page() ) {
          $breadcrumbs = array(); 
					$postb = $post->ID;
					$current_page = $post->ID;

					while($current_page) {
						$page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
            array_unshift($breadcrumbs, $page_query);
						$current_page = $page_query->post_parent;
					}
					$parent_id = $page_query->ID;

          ?>
            <ul class="breadcrumbs">
                <li><a href="<?php echo get_permalink(5); ?>">Home</a></li>
                <?php foreach($breadcrumbs as $entry ) { ?>
                <li><a href="<?php echo get_permalink($entry->ID); ?>"><?php echo $entry->post_title; ?></a></li>
                <?php } ?>
            </ul>
          <?php  
        
        if ($postb !== (int)$page_query->ID) {
					?><h1 class="rotate-header"><?php echo $page_query->post_title; ?></h1><?php
				}
       } elseif ( $post->post_type == "wpsc-product" ){
				  ?><h1 class="rotate-header">W.O.B. Store</h1><?php
       } elseif ( ! is_page() ){
				  ?><h1 class="rotate-header">Blog</h1><?php
          //echo "ASDASDASD";*/
			}
		?>
