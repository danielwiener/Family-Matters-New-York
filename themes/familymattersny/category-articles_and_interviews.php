<?php
/**
 * The template for displaying Articles and Interviews pages.
 *
 * @package WordPress
 * @subpackage FamilyMattersNY 
 * @since FamilyMattersNY 1.0
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
                                    	<?php the_post_thumbnail( 'thumbnail', array('class' => 'alignleft') ); ?> <span class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span> <?php the_excerpt(); ?> 
<hr />       
								<?php endwhile; ?>
				<?php twentyeleven_content_nav( 'nav-below' ); ?>
			</div><!-- #content -->
		</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
