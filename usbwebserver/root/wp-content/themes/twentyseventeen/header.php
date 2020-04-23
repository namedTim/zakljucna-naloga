<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * 						         ;I;              
    					         +It.             
             					+II+             
             					+III;            
             					+IIII;           
             					iIIIII;          
             					titIIII;         
             					I;.iIIII;        
            					.I;  =IIII;       
            					.I;   ;IIII:      
            					.I;    :tIIt      
            					.I;     .tII=     
            					.I;      :III     
            					:I;       +II;    
            					:I;       .II=    
            					:I:        iIi    
            					:I.        ;Ii    
            					;I.        =I;    
            					;I.        tt     
            					+I        ;I;     
            					+I       ;I;      
            					tI      ;I;       
     					:;itIIIII     +t:        
   					  ;tIIIIIIIII   :t;          
 				     .tIIIIIIIIIIi  ;i.           
                    .tIIIIIIIIIII;.;:             
                    ;IIIIIIIIIII;                 
                    ;IIIIIIIIIt;                  
                     ;tIIIIt+;                    
   
   
 */
function so16165211_mobile_home_redirect(){
    if( wp_is_mobile() && is_front_page() ){
        $redirect_url = 'http://194.249.2.8/index.php/mobile-home/';
        header('Location: ' . $redirect_url ); // Redirect the user
        exit;
    }
}
so16165211_mobile_home_redirect();

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
