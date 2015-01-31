<?php
/*
 * Template Name: Portfolio
 * Description: A Page Template showing a portfolio
 */

get_header();

?>

<div class="row">
  <div class="large-12 columns">
    <div id="masonryContainer">
      <div class="masonry-brick">
        <img src="http://placehold.it/500x300&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x600&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x700&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x400&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x200&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x300&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x600&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x700&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x400&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x200&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x200&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x300&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x600&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x700&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x400&text=Item">
      </div>
      <div class="masonry-brick">
        <img src="http://placehold.it/500x200&text=Item">
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
jQuery(window).load(function(){
  jQuery('#masonryContainer').masonry({  
    itemSelector: '.masonry-brick',
    columnWidth: 240
  });  
});    
</script>

<?php get_footer(); ?> 
