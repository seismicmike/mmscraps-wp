<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package Cryout Creations
 * @subpackage Parabola
 * @since Parabola 1.0
 */

get_header(); ?>

		<section id="container" class="<?php echo parabola_get_layout_class(); ?>">
	
			<div id="content" role="main">
			<?php cryout_before_content_hook(); ?>
			
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
					<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
				</header>
				
				<div class="content-masonry">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content/content', get_post_format() );
					
				endwhile; ?>
				</div> <!--content-masonry-->
				<?php
				if ( $parabolas['parabola_pagination']=="Enable" ) parabola_pagination(); else parabola_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'parabola' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'parabola' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
			
			<?php cryout_after_content_hook(); ?>
			</div><!-- #content -->
	<?php parabola_get_sidebar(); ?>
		</section><!-- #container -->

<?php 
get_footer(); 

// FIN