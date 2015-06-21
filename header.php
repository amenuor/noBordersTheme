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
		<link rel="icon" type="image/jpg" href="<?php echo get_template_directory_uri() . '/img/nawart_favicon.jpg'; ?>">
	  		
		<!--wordpress head-->
		<?php wp_head(); ?>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-60489897-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<script type="text/javascript">
			window.templateURL = '<?php echo get_template_directory_uri();?>';
			
			//Initialize the icons
			var icons = initIcons();
			
			//Initialize global variables
			window.railwayDiariesCoordinates = [];
			window.markers = [];
			
			<?php
			$args = array(
			'posts_per_page' => 200,
			'cat' => 8
			);
			
			//The Loop
			$latest = new WP_Query( $args );
			while( $latest->have_posts() ) {
				$latest->the_post(); 
				$mediaType = get_post_meta($post->ID, 'MediaType', true); //Get MediaType Custom Field value
				if($mediaType == '')
				{
					$mediaType = 'BLOG';
				}
				$mediaType = strtoupper($mediaType);
				
				$latLng = get_post_meta($post->ID, 'LatLng', true);  //Get LatLng Custom Field value
				if($latLng == '')
				{
					continue;
				}
				list($lat, $lng) = split(',', $latLng);
				
				echo 'window.railwayDiariesCoordinates.push(new google.maps.LatLng('.$lat.', '.$lng.'));';
				echo 'markers.push({latLng: new google.maps.LatLng('.$lat.', '.$lng.'),title: \''. get_the_title() .'\',icon: icons[\''.$mediaType.'_KEY\'],popupContent: \'<h3>'.get_the_title().'</h3>'.get_the_excerpt().'\'});';
				

			}
					?>
						
			function initIcons()
			{
				var icons = {};
				icons['PHOTO_KEY'] = {
			        url: window.templateURL + '/img/photo.png', //url
				    size: new google.maps.Size(71, 71),
				    origin: new google.maps.Point(0, 0),
					anchor: new google.maps.Point(17, 17),
				    scaledSize: new google.maps.Size(35, 35)
				};

			   	icons['PEOPLE_KEY'] = {
					url: window.templateURL + '/img/people.png', //url
				    size: new google.maps.Size(71, 71),
				    origin: new google.maps.Point(0, 0),
					anchor: new google.maps.Point(17, 17),
				    scaledSize: new google.maps.Size(35, 35)
				};

			  	icons['BLOG_KEY'] = {
			        url: window.templateURL + '/img/blog.png', //url
				    size: new google.maps.Size(71, 71),
				    origin: new google.maps.Point(0, 0),
					anchor: new google.maps.Point(17, 17),
				    scaledSize: new google.maps.Size(35, 35)
				};

			 	icons['AUDIO_KEY'] = {
					url: window.templateURL + '/img/audio.png', //url
				    size: new google.maps.Size(71, 71),
				    origin: new google.maps.Point(0, 0),
					anchor: new google.maps.Point(17, 17),
				    scaledSize: new google.maps.Size(35, 35)
				};

				icons['ARTICLE_KEY'] = {
					url: window.templateURL + '/img/articles.png', //url
				    size: new google.maps.Size(71, 71),
				    origin: new google.maps.Point(0, 0),
					anchor: new google.maps.Point(17, 17),
				    scaledSize: new google.maps.Size(35, 35)
				};

				icons['VIDEO_KEY'] = {
					url: window.templateURL + '/img/video.png', //url
				    size: new google.maps.Size(71, 71),
				    origin: new google.maps.Point(0, 0),
					anchor: new google.maps.Point(17, 17),
				    scaledSize: new google.maps.Size(35, 35)
				};
				
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
					<div class="large-12 columns text-centernawart-06_YELLOW_small.jpg">
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/img/nawart-06_YELLOW.jpg'; ?>"></a>
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