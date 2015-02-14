<?php
/*
 * Template Name: About
 * Description: A Page Template showing an about page
 */

get_header();

?>
 <div class="row">
 
    <div class="large-12 columns">
		<?php 
		while (have_posts()) {
			the_post();

			get_template_part('content', 'page');

		} //endwhile;
		?> 
    </div>
  </div>
  
  <?php
  	$eleDesc = 'Eleonora Vio llentesque non risus neque. Aliquam a fermentum ipsum, id malesuada diam. Morbi tincidunt at dui a placerat. Sed elit libero, tincidunt at posuere ac, congue et nisi. Praesent efficitur lobortis leo, ut lobortis mi semper quis. Suspendisse quis ante id quam aliquam volutpat. Vestibulum vulputate viverra arcu. Etiam mollis metus dolor, quis bibendum nunc tincidunt sed. Vivamus nec odio in diam tempus euismod varius a nunc. Pellentesque in volutpat purus. Praesent ullamcorper, nulla sit amet gravida ullamcorper, magna massa tempor nibh, a volutpat tellus nunc sed libero. In id felis sit amet ligula tincidunt consequat et ac dolor. Sed eros lacus, dapibus';
  	$eleDesc = 'Eleonora Vio llentesque non risus neque. Aliquam a fermentum ipsum, id malesuada diam. Morbi tincidunt at dui a placerat. Sed elit libero, tincidunt at posuere ac, congue et nisi. Praesent efficitur lobortis leo, ut lobortis mi semper quis. Suspendisse quis ante id quam aliquam volutpat. Vestibulum vulputate viverra arcu. Etiam mollis metus dolor, quis bibendum nunc tincidunt sed. Vivamus nec odio in diam tempus euismod varius a nunc. Pellentesque in volutpat purus. Praesent ullamcorper, nulla sit amet gravida ullamcorper, magna massa tempor nibh, a volutpat tellus nunc sed libero. In id felis sit amet ligula tincidunt consequat et ac dolor. Sed eros lacus, dapibus';
  	$costanzaDesc = 'Costanza Spocci llentesque non risus neque. Aliquam a fermentum ipsum, id malesuada diam. Morbi tincidunt at dui a placerat. Sed elit libero, tincidunt at posuere ac, congue et nisi. Praesent efficitur lobortis leo, ut lobortis mi semper quis. Suspendisse quis ante id quam aliquam volutpat. Vestibulum vulputate viverra arcu. Etiam mollis metus dolor, quis bibendum nunc tincidunt sed. Vivamus nec odio in diam tempus euismod varius a nunc. Pellentesque in volutpat purus. Praesent ullamcorper, nulla sit amet gravida ullamcorper, magna massa tempor nibh, a volutpat tellus nunc sed libero. In id felis sit amet ligula tincidunt consequat et ac dolor. Sed eros lacus, dapibus';
  	$giuDesc = 'Giulia Bertoluzzi llentesque non risus neque. Aliquam a fermentum ipsum, id malesuada diam. Morbi tincidunt at dui a placerat. Sed elit libero, tincidunt at posuere ac, congue et nisi. Praesent efficitur lobortis leo, ut lobortis mi semper quis. Suspendisse quis ante id quam aliquam volutpat. Vestibulum vulputate viverra arcu. Etiam mollis metus dolor, quis bibendum nunc tincidunt sed. Vivamus nec odio in diam tempus euismod varius a nunc. Pellentesque in volutpat purus. Praesent ullamcorper, nulla sit amet gravida ullamcorper, magna massa tempor nibh, a volutpat tellus nunc sed libero. In id felis sit amet ligula tincidunt consequat et ac dolor. Sed eros lacus, dapibus';
  	$tanDesc = 'Tanja Jovetic llentesque non risus neque. Aliquam a fermentum ipsum, id malesuada diam. Morbi tincidunt at dui a placerat. Sed elit libero, tincidunt at posuere ac, congue et nisi. Praesent efficitur lobortis leo, ut lobortis mi semper quis. Suspendisse quis ante id quam aliquam volutpat. Vestibulum vulputate viverra arcu. Etiam mollis metus dolor, quis bibendum nunc tincidunt sed. Vivamus nec odio in diam tempus euismod varius a nunc. Pellentesque in volutpat purus. Praesent ullamcorper, nulla sit amet gravida ullamcorper, magna massa tempor nibh, a volutpat tellus nunc sed libero. In id felis sit amet ligula tincidunt consequat et ac dolor. Sed eros lacus, dapibus';
  ?>

  <div class="row show-for-small-only">
	  <div class="medium-3 columns">
		  <div class="panel text-center">
		  	Eleonora Vio<br/>
		  	<img src="http://placehold.it/100x75">
		    <p class="text-justify"><?php _e($eleDesc, 'noborders')?></p>
		  </div>
	  </div>
	  <div class="medium-3 columns">
		  <div class="panel text-center">
		  	Costanza Spocci<br/>
		  	<img src="http://placehold.it/100x75">
		    <p class="text-justify"><?php _e($costanzaDesc, 'noborders')?></p>
		  </div>
	  </div>
	  <div class="medium-3 columns">
		  <div class="panel text-center">
		  	Giulia Bertoluzzi<br/>
		  	<img src="http://placehold.it/100x75">
		    <p class="text-justify"><?php _e($giuDesc, 'noborders')?></p>
		  </div>
	  </div>
	  <div class="medium-3 columns">
		  <div class="panel text-center">
		  	Tanja Jovetic<br/>
		  	<img src="http://placehold.it/100x75">
		    <p class="text-justify"><?php _e($tanDesc, 'noborders')?></p>
		  </div>
	  </div>	  
  </div>

  <div class="row show-for-medium-up">
	  <div class="large-12 columns">
			<ul class="tabs" data-tab>
			  <li class="tab-title active"><a href="#panel1">		  
			  <div class="panel text-center">
			  	Eleonora Vio<br/>
			  	<img src="http://placehold.it/100x75">
			  </div>
		  	  </a></li>
			  <li class="tab-title"><a href="#panel2">
			  <div class="panel text-center">
			  	Costanza Spocci<br/>
			  	<img src="http://placehold.it/100x75">
			  </div>
			  </a></li>
			  <li class="tab-title"><a href="#panel3">
			  <div class="panel text-center">
			  	Giulia Bertoluzzi<br/>
			  	<img src="http://placehold.it/100x75">
			  </div>
			  </a></li>
			  <li class="tab-title"><a href="#panel4">
			  <div class="panel text-center">
			  	Tanja Jovetic<br/>
			  	<img src="http://placehold.it/100x75">
			  </div>
			  </a></li>
			</ul>
			<div class="tabs-content">
			  <div class="content active" id="panel1">
			    <p><?php _e($eleDesc, 'noborders')?></p>
			  </div>
			  <div class="content" id="panel2">
			    <p><?php _e($costanzaDesc, 'noborders')?></p>
			  </div>
			  <div class="content" id="panel3">
			    <p><?php _e($giuDesc, 'noborders')?></p>
			  </div>
			  <div class="content" id="panel4">
			    <p><?php _e($tanDesc, 'noborders')?></p>
			  </div>
			</div>
	  </div>
  </div>
 
  </div>
 
 <?php
echo "\n\n";

// If comments are open or we have at least one comment, load up the comment template
if (comments_open() || '0' != get_comments_number()) {
	comments_template();
}

echo "\n\n";
 	
 ?>
 
  <!-- End Grid Section -->
  <?php get_footer(); ?> 
  