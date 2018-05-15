

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta name="google-site-verification" content="3yuZd6Eq2S1ECfwry0RcqTZX3uabtb5EduG96AHEWWk" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="utf-8">
<title><?php
// Display the page title based on what is being displayed.
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
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.jpg">
<meta name="author" content="Tim Martin">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- bxSlider CSS file -->

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<link rel="publisher" href="https://plus.google.com/+ConceptproductsAu">

<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "WebSite",
  "name": "Concept Products",
  "alternateName": "Doorway Control Solutions",
  "url": "http://conceptproducts.com.au/"
}
 </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112240366-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112240366-1');
</script>
<meta name="google-site-verification" content="Tk-LCp7uRlK-IQ3w1HalBGtsu2KsW3UMckfGWVyGMrk" />
</head>

<body <?php body_class($class); ?>>

<div id="header">

	<div class="wrap">

		<?php query_posts('page_id=1259'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="tagline floatr"><?php echo get_the_content(); ?>
<ul class="contacts">
	<li><a href="tel:089455 1234"><i class="fa fa-phone" aria-hidden="true"></i>089455 1234</a></li>
	<li><a href="mailto:info@conceptproducts.com.au"><i class="fa fa-envelope" aria-hidden="true"></i>info@conceptproducts.com.au</a></li>
</ul>

<form method="get" action="/" id="search-videos">
<input type="text" placeholder="Search..." name="s" id="search-value" value="<?php echo $_GET['s']; ?>"/>
<button type="submit">
<i class="fa fa-search"></i>
</button>
</form>
		</div>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/07/logo.jpg" alt="Concept Products" /></a>

		<div class="clr"></div>

	</div>
</div>
<div id="navigation">
	<div class="wrap">
		<ul>
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li><a href="<?php echo get_permalink(1246); ?>">Products</a></li>
			<li><a href="<?php echo get_permalink(2332); ?>">Solutions</a></li>
			<li><a href="<?php echo get_permalink(8); ?>">About</a></li>
			<li><a href="<?php echo get_permalink(2316); ?>">Testimonials</a></li>
			<li><a href="<?php echo get_permalink(1850); ?>">Gallery</a></li>
			<li><a href="<?php echo get_permalink(2319); ?>">Blog</a></li>
			<li class="last"><a href="<?php echo get_permalink(18); ?>">Contact</a></li>
		</ul>
	</div>
</div>

<?php if(is_page( 2625 ) || is_page( 18 )){ ?>
<div class="wrap">
<ul class="bxslider">
<?php
$args1 = array('category_name'=>'homeslider', 'order' => 'ASC', 'post_type' => 'post','posts_per_page' => -1);
$the_query = new WP_Query( $args1 );

if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) :
		$the_query->the_post();
 ?>
	<li><?php the_post_thumbnail(); ?></li> 
 
 <?php 
 
 endwhile;
endif;
?>
 
</ul>
</div>

<?php } ?>
