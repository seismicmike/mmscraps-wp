<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simplus Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> style="background: url(https://thecutestblogontheblock.com/wp-content/uploads/2018/09/lace-and-lights.jpg) center top fixed no-repeat !important;"> <a target="_blank" style="position: absolute; left: 0px; top: 30px; z-index: 99999; width: 150px; height: 45px;" href="http://www.thecutestblogontheblock.com"><img border="0" src="http://www.thecutestblogontheblock.com/images/tag.png"></a>

    <?php
    if ( function_exists( 'wp_body_open' ) ) {
      wp_body_open();
    }
    ?>

    <div id="page" class="site">

      <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to content', 'simplus-blog' ); ?>
      </a>

      <header id="masthead" class="site-header">
        <nav id="site-navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button><!-- .navbar-toggle -->

              <div class="navbar-brand">

                <?php the_custom_logo(); ?>

                <?php
                printf( '<h1 class="site-title"><a href="%s" rel="home">%s</a></h1>', esc_url( home_url( '/' ) ), get_bloginfo( 'name', 'display' ) );
                $simplus_blog_description = get_bloginfo( 'description', 'display' );
                if ( $simplus_blog_description || is_customize_preview() ) {
                  printf( '<p class="site-description">%s</p>', $simplus_blog_description );
                }
                ?>

              </div><!-- .navbar-brand -->
            </div><!-- .navbar-header -->

            <div id="primary-menu" class="collapse navbar-collapse">
              <div class="navbar-right">

                <?php
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container'    => 'ul',
                  'menu_id'    => 'primary-menu-2',
                  'menu_class'   => 'nav navbar-nav',
                ) );
                ?>

                <!-- #primary-menu-search-form -->
                <ul class="nav navbar-nav navbar-right search-bar">
                                <li class="">
                                  <a href="#toggle-search" class="animate"><i class="fa fa-search"></i> <i class="fa fa-times"></i></a>
                                </li>                
                </ul>
              </div><!-- .navbar-right -->
            </div><!-- #primary-menu -->
          </div><!-- .container -->
          <div class="bootsnipp-search animate">
                  <div class="container">
              <?php get_search_form(); ?>
                  </div>
              </div>
        </nav><!-- #site-navigation -->
      </header><!-- #masthead -->

      <div id="content" <?php simplus_blog_content_section_class(); ?>>
        <div class="row">
