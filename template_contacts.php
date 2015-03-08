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
                <ul class="large-block-grid-5 text-center">
                  <li><a href="mailto:giulia.bertoluzzi@nawartpress.com"><img style="height: 140px" src="http://www.nawartpress.com/wp-content/uploads/2015/03/IMG_5555-18.jpg"><br>Giulia Bertoluzzi</a></li>
                  <li><a href="mailto:costanza.spocci@nawartpress.com"><img style="height: 140px" src="http://www.nawartpress.com/wp-content/uploads/2015/02/costi.jpg"><br>Costanza Spocci</a></li>
                  <li><a href="mailto:eleonora.vio@nawartpress.com"><img style="height: 140px" src="http://www.nawartpress.com/wp-content/uploads/2015/02/ele.jpg"><br>Eleonora Vio</a></li>
                  <li><a href="mailto:tanja.jovetic@nawartpress.com"><img style="height: 140px" src="http://www.nawartpress.com/wp-content/uploads/2015/03/IMG-20150301-WA0001.jpg"><br>Tanja Jovetic</a></li>
                </ul>
              </div>
            </section>
          </div>
        </div>
              
      </div>

<?php get_footer(); ?> 
