<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

		<?php if ( is_admin_bar_showing() ) { ?>

		<style type="text/css">
			header.main-nav-container{
				top:32px;
			}
			html{
				margin-top:0!important;
			}
      body{
        padding-top: 122px;
      }
			#wpadminbar{
				position: fixed;
			}
		</style>


		<?php } ?>

    <header class='main-nav-container'>
      <div class='container'>
        <div class='pull-left'>
          <a class='logo' href='<?php echo esc_url( home_url( '/' ) ); ?>'></a>
        </div>
        <div class='pull-right'>
          <?php wp_nav_menu( array( 
          'theme_location' => 'primary', 
          'container' => false, 
          'menu_class' => 'list-inline desktop-nav',
          'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
          )); ?>
          <a class='menu-toggle' href='javaScript:void(0);' id='js-menu-button-open'>
            <i class='fa fa-navicon'></i>
          </a>
        </div>
      </div>
    </header>
    <nav class='menu-drop'>
      <div class='container'>
        <a class='menu-toggle pull-right' href='javaScript:void(0);' id='js-menu-button-close'>
          <i class='fa fa-times'></i>
        </a>
        <div class='clearfix'></div>
        <?php wp_nav_menu( array( 
        'theme_location' => 'primary', 
        'container' => false, 
        'menu_class' => 'list-unstyled mobile-nav-main',
        'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
        )); ?>
      </div>
    </nav>
    <!-- end menu -->