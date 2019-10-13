<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simplus Blog
 */

?>

				</div><!-- .row -->
			</div><!-- #content -->

			<footer id="colophon" class="site-footer">
				<div class="container">

					<?php simplus_blog_render_footer_widgets(); ?>

					<div class="site-info">
						<div class="pull-right">

							<?php /* translators: %1$s: Theme, %2$s: Author url, %3$s: Author */ ?>
							<?php printf( __( 'Theme: %1$s by <a href="%2$s" target="_blank">%3$s</a>.', 'simplus-blog' ), 'Simplus Blog', 'https://www.8therate.com', '8therate.com' ); ?>

						</div><!-- .pull-right -->

						<?php simplus_blog_footer_copyright(); ?>

					</div><!-- .site-info -->
				</div><!-- .container -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>
