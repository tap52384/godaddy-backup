<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en" />
<meta name="verify-v1" content="7XvBEj6Tw9dyXjHST/9sgRGxGymxFdHIZsM6Ob/xo5E=" />

<meta name="viewport" content="width=device-width" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Google Web Font: Great Vibes -->
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>







<!--[if lt IE 9]>


<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/menu/hoverIntent.js"></script>
<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/menu/dropdown.js"></script>  -->

<!-- slideshow javascript -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slides.min.jquery.js"></script>

<script type="text/javascript">

function isNullOrEmpty(variable) {

    return variable === null || variable === '' || variable === undefined;

} // end of function

	var $j = jQuery.noConflict();
	$j(document).ready(function() {

		/* hides the address bar upon loading a page on the iPhone */

function hide_address_bar() {
    window.scrollTo(0, 1);
    setTimeout(function() {
        window.scrollTo(0, 0);
    }, 0);
} // end of hide_address_bar function




// scroll to the top when changing orientation
window.onorientationchange = function() {
    hide_address_bar();
};
		
		$j("ul.menu li:first").addClass("first");


		// code that handles loading fonts appropriately...
		WebFontConfig = {
        google: { families: [ 'Great Vibes' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();

	// slideshow javascript
	 $j('#slides').slides({
				preload: true,
				preloadImage: 'http://juliaandpatrick.com/wp-content/uploads/2012/04/loading.gif',
				play: 5000,
				pause: 3500,
				hoverPause: true,
				crossfade: true,
				effect: 'fade',
				animationStart: function(current){
					$j('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						// console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$j('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						// console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$j('.caption').animate({
						bottom:0
					},200);
				}
			}); 


			


    // hide the address bar after 500 ms
    setTimeout(hide_address_bar, 500);


	}); // end of ready function
</script>

</head>

<body>



<div id="wrap">

    <header>

<div id="title" alt="Our Wedding!" onclick="location.href = '<?php echo get_option('home'); ?>'"><img alt="Our Wedding!" src="http://juliaandpatrick.com/wp-content/themes/blissful_blog_v1.1/images/logo.png" /></div>

    </header>
    
    <div id="navbar">
        <?php wp_nav_menu('title_li=&depth=2&menu_class=menu'); ?> 
    </div> <!-- end of navbar -->
    
    <div style="clear:both;"></div>