<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Nisarg
 */

?>
<!DOCTYPE html>

<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<header id="masthead"  role="banner">
  

    <nav class="navbar navbar-default navbar-fixed-top navbar-left" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display --> 
      <div class="container" id="navigation_menu">
        <div class="navbar-header"> 
          <?php if ( has_nav_menu( 'primary' ) ) { ?>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
          </button> 
          <?php } ?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url('/'));?>" style="padding-top: 10px;"><img src="http://drsanti.fr/wp-content/uploads/2016/04/cropped-super-santi-01.png"  style="width: 30px;"/></a>
        </div> 
        

          <?php if ( has_nav_menu( 'primary' ) ) {
              nisarg_header_menu(); // main navigation 
            }
          ?>
        
      </div><!--#container-->
    </nav>
 

  <div id="cc_spacer"></div><!-- used to clear fixed navigation by the themes js --> 
  
        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <div class="site-header">
      <div class="site-branding">   
  <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
          <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

      </div><!--.site-branding-->        
  </div><!--.site-header--> </a>
</header>    

<div id="content" class="site-content">
    
    
    