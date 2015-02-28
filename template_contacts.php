<?php
/*
 * Template Name: Contacts
 * Description: A Page Template showing a contact form
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

      <div class="row">
     
         
        <div class="large-12 columns">
          
          <div class="section-container tabs" data-section>
            <section class="section">
              <div class="content" data-slug="panel2">
                <ul class="large-block-grid-5">
                  <li><a href="mailto:giulia.bertoluzzi@nawartpress.com"><img src="http://placehold.it/200x200&text=[person]">Giulia Bertoluzzi</a></li>
                  <li><a href="mailto:costanza.spocci@nawartpress.com"><img src="http://placehold.it/200x200&text=[person]">Costanza Spocci</a></li>
                  <li><a href="mailto:eleonora.vio@nawartpress.com"><img src="http://placehold.it/200x200&text=[person]">Eleonora Vio</a></li>
                  <li><a href="mailto:tanja.jovetic@nawartpress.com"><img src="http://placehold.it/200x200&text=[person]">Tanja Jovetic</a></li>
                </ul>
              </div>
            </section>
          </div>
        </div>
              
      </div>

<?php get_footer(); ?> 
