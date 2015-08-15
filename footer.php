<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CafeTheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		     <main id="footer" class="social" role="social-footer">
            <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
            </main>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cafetheme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'cafetheme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'cafetheme' ), 'COFFEE SHOP', '<a href="http://www.anguswong.co" class="by" rel="designer">Angus Wong </a> & <a href="http://www.alexdavey.ca" class= "by" rel="designer">  Alex Davey</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
