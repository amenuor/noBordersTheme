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
						<p class="welcome"><?php _e("Subscribe to our newsletter!", "noborders"); ?> </p>
						<form>
							<div class="row collapse show-for-medium-up">
								<div class="small-2 columns">
									<span class="prefix"><i class="fi-mail"></i></span>
								</div>
								<div class="small-8 columns">
									<input type="text" placeholder="Email">
								</div>
								<div class="small-2 columns">
									<a href="#" class="button radius"><?php _e("Subscribe", "noborders"); ?></a>
								</div>					
							</div>
							<div class="row collapse show-for-small-only">
								<div class="small-2 columns">
									<span class="prefix"><i class="fi-mail"></i></span>
								</div>
								<div class="small-10 columns">
									<input type="text" placeholder="Email">
								</div>
							</div>
							<div class="row collapse show-for-small-only">
								<div class="small-12 columns text-centered lower">
									<a href="#" class="button radius lower"><?php _e("Subscribe", "noborders"); ?></a>
								</div>					
							</div>
						</form>
					</div>
				</div>
			</div>

			<p><?php _e("or follow us on", "noborders"); ?></p>
			<div class="medium-12 columns">
				<a href="#"><img width='60px' src="<?php echo get_template_directory_uri();?>/img/facebook-icon.png" /></a>
				<a href="#"><img width='60px' src="<?php echo get_template_directory_uri();?>/img/flickr-icon.png" /></a>
				<a href="#"><img width='60px' src="<?php echo get_template_directory_uri();?>/img/instagram-icon.png" /></a>
				<a href="#"><img width='60px' src="<?php echo get_template_directory_uri();?>/img/twitter-icon.png" /></a>
				<a href="#"><img width='60px' src="<?php echo get_template_directory_uri();?>/img/youtube-icon.png" /></a>
				<a href="#"><img width='60px' src="<?php echo get_template_directory_uri();?>/img/soundcloud-icon.png" /></a>
				<a href="/feed"><img width='60px' src="<?php echo get_template_directory_uri();?>/img/rss-icon.png" /></a>
			</div>
			<div class="row show-for-medium-up">
		   	
				<div id="legend" style="visibility: hidden;">
					<p class="text-center" style="color: orange"><?php _e("Legend", "noborders"); ?></p>
					<p><img src="<?php echo get_template_directory_uri();?>/img/photo.png" width="24px"/> <?php _e("Photo", "noborders"); ?></p>
					<p><img src="<?php echo get_template_directory_uri();?>/img/people.png" width="24px" /> <?php _e("People", "noborders"); ?></p>
					<p><img src="<?php echo get_template_directory_uri();?>/img/blog.png" width="24px" /> <?php _e("Blog", "noborders"); ?></p>
					<p><img src="<?php echo get_template_directory_uri();?>/img/music.png" width="24px" /> <?php _e("Music", "noborders"); ?></p>
					<p><img src="<?php echo get_template_directory_uri();?>/img/articles.png" width="24px" /> <?php _e("Article", "noborders"); ?></p>
					<p><img src="<?php echo get_template_directory_uri();?>/img/video.png" width="24px" /> <?php _e("Video", "noborders"); ?></p>
				</div>
			</div>
			   
		</div>
	</p>
</div>
            
<div class="credits row">
	<div class="small-12 columns text-right">
		Powered by <a href="https://www.yanchware.com" target="_blank">YanchWare</a>
	</div>
			   
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