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
				$dw_sticky = get_option( 'sticky_posts' ); 
				$args = array(
					'category_name' 		=> 'parenting_through_picture_books',
					'post_type'				=> 'post',
					'post_status'			=> 'published',
					'post__in' 				=> $dw_sticky
				);
			   
				$dw_sticky_query = New WP_Query( $args );
			   	while ( $dw_sticky_query->have_posts() ) : $dw_sticky_query->the_post(); ?>
                <?php the_title(); ?><br>
                <?php the_content(); ?><br>
				<?php endwhile; ?> 
				   <hr />
			      <?php 
						global $query_string; 
						$args_2 = array( 
							'ignore_sticky_posts' 	=> 1,
							 'category_name' 		=> 'parenting_through_picture_books',
							 'post_type'			=> 'post',
							 'post_status'			=> 'published',
							 'post__not_in' 		=> $dw_sticky
							);
						query_posts($args_2); 
									while ( have_posts() ) : the_post(); ?>

									<?php
										/* Include the Post-Format-specific template for the content.
										 * If you want to overload this in a child theme then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'content', get_post_format() );
									?>

								<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

	 

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
