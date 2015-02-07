<?php
/**
 * The theme header
 * 
 * @package noborders
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
		
		<script type="text/javascript">
			window.templateURL = '<?php echo get_template_directory_uri();?>';
			
			initMarkers();
			initPath();
			
			function initPath()
			{
				window.flightPlanCoordinates = [
				    new google.maps.LatLng(37.772323, -122.214897),
				    new google.maps.LatLng(21.291982, -157.821856),
				    new google.maps.LatLng(-18.142599, 178.431),
				    new google.maps.LatLng(-27.46758, 153.027892),
					new google.maps.LatLng(32.6700, 53.9400)
				  ];
				
			}
			
			function initMarkers()
			{				
				window.markers = [];
				icons = initIcons();
	
				markers.push({
					latLng: new google.maps.LatLng(32.6700, 53.9400),
					title: 'This is a cool picture!',
					icon: icons['PHOTO_KEY'],
					popupContent: 'yei!'
				});				
			}
			
			function initIcons()
			{
				icons = {};
				icons['PHOTO_KEY'] = new google.maps.MarkerImage(
			        window.templateURL + '/img/photo.png', //url
				    new google.maps.Size(71, 71),
				    new google.maps.Point(0, 0),
					new google.maps.Point(17, 34),
				    new google.maps.Size(35, 35)
			   );

			   	icons['PEOPLE_KEY'] = new google.maps.MarkerImage(
					window.templateURL + '/img/people.png', //url
			   	    new google.maps.Size(71, 71),
				    new google.maps.Point(0, 0),
				    new google.maps.Point(17, 34),
				    new google.maps.Size(35, 35)
			   );

			  	icons['BLOG_KEY'] = new google.maps.MarkerImage(
			        window.templateURL + '/img/blog.png', //url
				    new google.maps.Size(71, 71),
				    new google.maps.Point(0, 0),
				    new google.maps.Point(17, 34),
				    new google.maps.Size(35, 35)
			   );

			 	icons['MUSIC_KEY'] = new google.maps.MarkerImage(
					window.templateURL + '/img/music.png', //url
					new google.maps.Size(71, 71),
			    	new google.maps.Point(0, 0),
			    	new google.maps.Point(17, 34),
			    	new google.maps.Size(35, 35)
			  );

				icons['ARTICLE_KEY'] = new google.maps.MarkerImage(
					window.templateURL + '/img/articles.png', //url
					new google.maps.Size(71, 71),
				  	new google.maps.Point(0, 0),
				  	new google.maps.Point(17, 34),
				  	new google.maps.Size(35, 35)
				);

				icons['VIDEO_KEY'] = new google.maps.MarkerImage(
					window.templateURL + '/img/video.png', //url
					new google.maps.Size(71, 71),
				  	new google.maps.Point(0, 0),
				  	new google.maps.Point(17, 34),
				  	new google.maps.Size(35, 35)
				);
				
				return icons;
			}
			
			
		</script>
		
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		<div class="container page-container">
			<?php do_action('before'); ?> 
			<header role="banner">
				<div class="row row-with-vspace site-branding">
					<div class="col-md-6 site-title">
						<h1 class="site-title-heading">
							<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
						<div class="site-description">
							<small>
								<?php bloginfo('description'); ?> 
							</small>
						</div>
					</div>
				</div><!--.site-branding-->
				
				<div class="row">
					<div class="small-12 medium-9 large-10 columns text-center" style="margin-bottom: 20px">

<nav id="menu" class="top-bar" data-topbar>
	<ul class="title-area">
		<li class="name"></li>
	    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
	</ul>
<?php
		$items_wrap = '<section class="top-bar-section"><ul class="left">%3$s</ul></section>'; 
		wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap' => $items_wrap, 'walker' => new NoBordersWalkerNavMenu ) ); ?>

</nav>

					</div>
					<div class="medium-3 large-2 columns text-center show-for-medium-up">
						<?php if (function_exists('dynamic_sidebar')): 
							dynamic_sidebar('Extra Widget After Navbar');
						endif; ?>
					</div>
				</div>
				<div class="row show-for-small-only">
					<div class="small-12 columns text-center">
						<?php if (function_exists('dynamic_sidebar')): 
							dynamic_sidebar('Extra Widget After Navbar');
						endif; ?>
					</div>
				</div>
				
				
			</header>
			
			
			<div id="content" class="row row-with-vspace site-content">