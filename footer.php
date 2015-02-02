<?php
/**
 * The theme footer
 * 
 * @package noborders
 */
?>

			</div><!--.site-content-->
			
			<!-- Footer -->
			<footer class="footer">
			  <div class="center row full-width">

      <div class="content" data-section-content>
        <p>
          <div class="row">
            <div class="large-12 columns">
              <div class="signup-panel">
                <p class="welcome">Subscribe to our newsletter! </p>
                <form>
                  <div class="row collapse">
                    <div class="small-2 columns">
                      <span class="prefix"><i class="fi-mail"></i></span>
                    </div>
                    <div class="small-8 columns">
                      <input type="text" placeholder="Email">
                    </div>
                    <div class="small-2 columns">
					  <a href="#" class="button radius">Subscribe</a>
                    </div>					
                  </div>
                </form>
              </div>
            </div>
           </div>
           <div class="row">
			   <p>or follow us on</p>
             <div class="small-2 columns">
				 <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/facebook-icon.png" /></a>
		     </div>
             <div class="small-2 columns">
				 <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/flickr-icon.png" /></a>
		     </div>
             <div class="small-2 columns">
				 <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/instagram-icon.png" /></a>
		     </div>
             <div class="small-2 columns">
				 <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/twitter-icon.png" /></a>
		     </div>
             <div class="small-2 columns">
				 <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/youtube-icon.png" /></a>
		     </div>
             <div class="small-2 columns">
				 <a href="/feed"><img src="<?php echo get_template_directory_uri();?>/img/rss-icon.png" /></a>
		     </div>
		   </div>
	   </p>
      </div>

  </div>
<div>              
            
			  </div>
			</footer>

		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
        <script>
            jQuery(document).foundation();
        </script>
	</body>
</html>