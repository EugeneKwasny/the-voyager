<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Voyager
 */

?>

		</div><!-- #content -->
	</div><!-- #page -->

	<footer id="colophon" class="site-footer mt-[90px]" role="contentinfo">
		<div class="site-info container mx-auto max-w-7xl px-5 py-[20px] text-center border-t border-color-border">
			<span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'the-voyager' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'the-voyager' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'the-voyager' ), 'The Voyager', esc_html__( 'Codeians', 'the-voyager' ) ); ?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
