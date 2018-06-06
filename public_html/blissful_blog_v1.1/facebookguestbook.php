<?php
    /*
    Template Name: Facebook Guestbook

    */
    ?>

<?php get_header(); ?>



<div id="container">

	<div id="content" class="left">
    
        <div class="postarea" style="text-align: center;">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="postfeaturedimage">
		<?php  

// check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} 

?>
</div>
            
            <div class="posttitle" >
            	<h2><?php the_title(); ?></h2>
            </div>
            
            <?php the_content(__('Read More'));?><div style="clear:both;"></div><?php edit_post_link('(Edit)', '', ''); ?>
            
            <?php endwhile; else: ?>
            
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
            
        </div>
		
	</div>
    

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=399252100122206";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div style="text-align: center;">
<br />
<div class="fb-comments" data-href="http://juliaandpatrick.com/guestbook/" data-num-posts="30" data-width="480"></div>

</div>

</div> <!-- end of container -->

<?php get_footer(); ?>