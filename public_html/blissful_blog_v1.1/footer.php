<div style="clear:both;"></div>

</div> <!-- end of wrap div -->

    <div id="footer">
        
        <div class="footerleft">
            <p><?php _e("Copyright"); ?> &copy; <?php echo date('Y'); ?> &middot; <?php _e("All Rights Reserved"); ?> &middot; <?php bloginfo('name'); ?></p>
        </div>
            
        <div class="footerright">
            <p><?php wp_loginout(); ?> &middot; <a href="<?php bloginfo('atom_url'); ?>" target="_blank"><?php _e("RSS Feed"); ?></a> &middot; <a href="http://www.blissfulblog.com" target="_blank"><?php _e("The Blissful Blog"); ?></a> <?php _e("by"); ?> <a href="http://www.mukustudios.com" target="_blank"><?php _e("Muku Studios"); ?></a></p>
        </div>
		
	</div> <!-- end of footer div -->

<?php do_action('wp_footer'); ?>




</body>
</html>