<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package STAT
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer page-wrapper" role="contentinfo ">
		<div class="site-info">
		Christian Bryant Productions.
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'stat-basketball' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'stat-basketball' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'stat-basketball' ), 'stat-basketball', '<a href="http://underscores.me/" rel="designer">Christian Bryant</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>


<script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="./wp-content/themes/stat-basketball/js/app.js"></script>

</html>
