<?php
/*
 * Template Name: Contacts
 * Description: A Page Template showing a contact form
 */

get_header();

?>

      <div class="row">
     
         
        <div class="large-9 columns">
     
          <h3>Get in Touch!</h3>
          <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
     
          <div class="section-container tabs" data-section>
            <section class="section">
              <h5 class="title"><a href="#panel1">Contact Our Company</a></h5>
              <div class="content" data-slug="panel1">
                <form>
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline">Your Name</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="yourName" placeholder="Jane Smith">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline"> Your Email</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="yourEmail" placeholder="jane@smithco.com">
                    </div>
                  </div>
                  <label>What's up?</label>
                  <textarea rows="4"></textarea>
                  <button type="submit" class="radius button">Submit</button>
                </form>
              </div>
            </section>
            <section class="section">
              <h5 class="title"><a href="#panel2">Specific Person</a></h5>
              <div class="content" data-slug="panel2">
                <ul class="large-block-grid-5">
                  <li><a href="/cdn-cgi/l/email-protection#b0ddd1dcf0c3d5c2d5ded9c4c99ed2d39ec2d5d2"><img src="http://placehold.it/200x200&text=[person]">Mal Reynolds</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#92e8fdf7d2e1f7e0f7fcfbe6ebbcf0f1bce0f7f0"><img src="http://placehold.it/200x200&text=[person]">Zoe Washburne</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#066c677f68634675637463686f727f28646528746364"><img src="http://placehold.it/200x200&text=[person]">Jayne Cobb</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#771318143704120512191e030e59151459051215"><img src="http://placehold.it/200x200&text=[person]">Simon Tam</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#ee8587828297819b99879a8683978387808aae9d8b9c8b80879a97c08c8dc09c8b8c"><img src="http://placehold.it/200x200&text=[person]">River Tam</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#c7aba2a6a1a8a9b3afa2b0aea9a387b4a2b5a2a9aeb3bee9a5a4e9b5a2a5"><img src="http://placehold.it/200x200&text=[person]">Hoban Washburne</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#6b090404002b180e190e05021f1245090845190e09"><img src="http://placehold.it/200x200&text=[person]">Shepherd Book</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#fd96919898bd8e988f9893948984d39f9ed38f989f"><img src="http://placehold.it/200x200&text=[person]">Kaywinnet Lee Fry</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#a1c8cfc0d3c0e1c6d4c8cdc58fc2ceccd18fc0cdcd"><img src="http://placehold.it/200x200&text=[person]">Inarra Serra</a></li>
                </ul>
              </div>
            </section>
          </div>
        </div>
     
         
     
     
         
     
     
        <div class="large-3 columns">
          <h5>Map</h5>
           
          <p>
            <a href="" data-reveal-id="mapModal"><img src="http://placehold.it/400x280"></a><br/>
            <a href="" data-reveal-id="mapModal">View Map</a>
          </p>
          <p>
            123 Awesome St.<br/>
            Barsoom, MA 95155
          </p>
        </div>
         
      </div>

<?php get_footer(); ?> 
