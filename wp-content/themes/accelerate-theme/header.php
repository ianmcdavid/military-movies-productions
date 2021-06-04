<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Military Movies is a production company dedicated to creating authentic content.">
	<meta property='og:title' content='Military Movies'/>
	<meta property="og:image" content="wp-content/themes/accelerate-theme-child/img/mmp_hero.jpg"/>
	<meta property='og:description' content='Military Movies is a production company dedicated to creating authentic content.'/>
	<meta property='og:url' content='https://militarymoviesproductions.com'/>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="container">
		<div class="page-header clearfix">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span>
			</a>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header>

	<div id="main" class="site-main clearfix">
