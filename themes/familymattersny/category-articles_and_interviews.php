<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">
				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __( '%s', 'twentyeleven' ),  single_cat_title( '', false )  );
					?></h1>
				</header>

			  
						            <?php
									while ( have_posts() ) : the_post(); ?>
                                    <?php if ( 1 == 1 ): ?>  <!-- change to === to 3 for testing -->
                                    	<?php the_post_thumbnail( 'thumbnail', array('class' => 'alignleft') ); ?> <span class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span> <?php the_excerpt(); ?> 
<hr />       
                                     <?php else: ?>
									<?php
										/* Include the Post-Format-specific template for the content.
										 * If you want to overload this in a child theme then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'content', get_post_format() );
									?>
                                  <?php endif; ?>
								<?php endwhile; ?>
                                  
				<?php twentyeleven_content_nav( 'nav-below' ); ?>

	 

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
