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
    
    <div id="sidebar">
        <ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
        <?php endif; ?>
        </ul>
    </div>
    
    <div id="sponsorwidget">
        <ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sponsor Widget') ) : ?>
        <?php endif; ?>
        </ul>
    </div>

</div>

<?php get_footer(); ?>