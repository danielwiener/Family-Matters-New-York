<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

</div><!-- #main -->
    <!-- <br clear="both">  --> 
<div id="before_footer"></div>
			<?php if ( is_page() || is_single() ): ?>
			   <?php get_sidebar( 'footer' ); ?>
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