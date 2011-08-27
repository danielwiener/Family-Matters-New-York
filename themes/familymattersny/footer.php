<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage FamilyMattersNY
 * @since FamilyMattersNY 1.0
 */
?>

</div><!-- #main -->
    <!-- <br clear="both">  --> 
<div id="before_footer"></div>
			<?php if ( is_page() || is_single() ): ?>
				<?php if ( !is_page('how-to-contact-us') ): ?>									
			    	<?php get_sidebar( 'footer' ); ?> 
				<?php endif ?> 
			<?php endif ?>             
     </div><!-- #page --> 
	<footer id="colophon" role="contentinfo">
      <div id="footer_bg">			
			</div> 
			</div> 
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>