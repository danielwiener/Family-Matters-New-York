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
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>  

                <?php the_content(); ?>
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
						$picture_book_categories = get_categories('include=3');  //picture book category
						$total_in_picture_book = '';
						foreach($picture_book_categories as $picture_book_category) {
						 $total_in_picture_book += $picture_book_category->count;
						}
						 
									while ( have_posts() ) : the_post(); ?>
                                    <?php if ($total_in_picture_book == 3): ?>
                                    	<?php the_post_thumbnail( 'thumbnail', array('class' => 'alignleft') ); ?><h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1><?php the_excerpt(); ?>        
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
