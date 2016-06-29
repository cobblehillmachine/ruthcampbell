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
	<script type="text/javascript" src="//use.typekit.net/arp3nha.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-41850906-1', 'ruthcampbelldesigns.com');
	  ga('send', 'pageview');

	</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<meta name="format-detection" content="telephone=no">
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
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" />
<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mytheme.js"></script>
<script src="https://use.fontawesome.com/83ea9d1ad0.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?> id="<?php echo  strtolower(str_replace(' ','-',get_the_title())); ?>">

		<div id="header">
			<div class="mid-cont">
        <div class="mobile-toggle">&#x2261;</div>
				<div id="logo">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
        </div>
				<div id="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div>
			</div>
		</div>

		<div id="main-wrap">
			<div class="mid-cont">
				<div id="container">
          <?php if(is_front_page()) { ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div id="banner-title"><?php the_content(); ?></div>
            <?php endwhile; ?>
          <?php } ?>
				<?php if(is_front_page() || is_page(array('About', 'Services', 'Contact'))) { ?>
					<div id="banner-img">
						<?php the_post_thumbnail('full'); ?>
					</div>
				<?php } ?>
				<?php if(is_page(array('About', 'Services', 'Contact'))) { ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="headline"><?php echo get_post_meta($post->ID, 'Headline', true); ?></div>
					<?php endwhile; ?>
				<?php } ?>