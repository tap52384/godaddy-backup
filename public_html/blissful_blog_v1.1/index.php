<?php get_header(); ?>

<br /> <!-- puts a space between the navbar and the content -->

<div id="container">

<div id="slideshow_container">
<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<a href="http://juliaandpatrick.com/howwemet" title="How We Met" ><img src="http://juliaandpatrick.com/wp-content/themes/blissful_blog_v1.1/images/slide1a.jpg" alt="The Proposal"></a>
						<div class="caption" style="bottom:0">
							<p>How We Met: Read to see how it all began!</p>
						</div>
					</div>
					
					<div class="slide">
						<a href="http://juliaandpatrick.com/theceremony" title="The Ceremony"><img src="http://juliaandpatrick.com/wp-content/themes/blissful_blog_v1.1/images/slide3a.jpg"  alt="how we met"></a>
						<div class="caption">
							<p>The Ceremony: When is it? Where is it? Find out here.</p>
						</div>
					</div>
					<div class="slide">
						<a href="http://juliaandpatrick.com/give" title="Give" ><img src="http://juliaandpatrick.com//wp-content/themes/blissful_blog_v1.1/images/slide2a.jpg"  alt="rsvp"></a>
						<div class="caption">
							<p>Give: Click to see how you can help.</p>
						</div>
					</div>
				</div> <!-- end of slides container -->
				<a href="#" class="prev"><img src="http://juliaandpatrick.com/wp-content/uploads/2012/04/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="http://juliaandpatrick.com/wp-content/uploads/2012/04/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
			<img src="http://juliaandpatrick.com/wp-content/uploads/2012/04/example-frame.png" alt="Example Frame" id="frame" />
		</div> <!-- end of slides div -->
		</div> <!-- end of slideshow_container div -->

<!-- end slideshow HTML -->
        
    <div class="postarea">
        
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php global $more; $more = 0; ?>
        
        <?php if ( in_category('gallery') && !is_single() ) continue; ?>
        
        <div <?php post_class(); ?>>
            
        <div class="posttitle">
            
            <div class="postdate">
            	<div class="day"><?php the_time('d') ?></div>
                <div class="month"><?php the_time('M') ?></div>
            </div>
                
            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <h5 class="cattitle"><?php the_category(' , '); ?></h5>
            
        </div>
                    
		<?php the_content('Read More'); ?>

		<div class="postmeta">
        	<div class="postmeta_left">
				<p><a href="<?php the_permalink() ?>"><?php _e("Link To Full Post"); ?></a></p>
            </div>
            <div class="postmeta_right">
            	<div class="twitter_link">
                    <a target="_blank" title="Share this article with your Twitter followers" href="http://twitter.com/home?status=Reading%3A+<?php the_title(); ?> - <?php  
                     $turl = getTinyUrl(get_permalink($post->ID));
                     echo $turl;
                     ?>" rel="nofollow" class="social-bookmark">Tweet Article</a>
                     <img alt="Tweet Article" src="<?php bloginfo('template_directory'); ?>/images/twitter.png"/>
                </div>
            	<div class="comment_link">
					<p><a href="<?php the_permalink(); ?>#respond"><?php _e("Leave A Comment"); ?></a></p>
                </div>
            </div>
		</div>
        
        </div>

        <?php endwhile; else: ?>
		<p><?php 
// _e("Sorry, no posts matched your criteria."); 

?></p>
		<?php endif; ?>
		
        <div id="pagenav">
			<div class="prev"><p><?php previous_posts_link(); ?></p></div>
			<div class="next"><p><?php next_posts_link(); ?></p></div>
        </div>

    </div>
    
    <div id="footerwidgets">
        
        <div class="footerwidgetleft">
            <ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?>
            <?php endif; ?>
            </ul>
        </div>
            
        <div class="footerwidgetmid">
            <ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid') ) : ?>
            <?php endif; ?>
            </ul>
        </div>
            
        <div class="footerwidgetright">
            <ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ) : ?>
            <?php endif; ?>
            </ul>
        </div>
            
    </div>
    
    <div id="sponsorwidget">
        <ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sponsor Widget') ) : ?>
        <?php endif; ?>
        </ul>
    </div>

</div>

<?php get_footer(); ?>