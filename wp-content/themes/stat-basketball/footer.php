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

	<footer id="colophon" class="site-footer" role="contentinfo " style="text-align:center">
		<hr style="margin-bottom:10px" />
			<h4>COPYRIGHT &copy; 2016. STAT BASKETBALL, LLC. ALL RIGHTS RESERVED.</h4>
			<h4><small>TERMS OF SERVICE | PRIVACY POLICY</small></h4>
		<hr style="margin-top:10px">
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>


<script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="./wp-content/themes/stat-basketball/js/scrollax.js"></script>
<script src="./wp-content/themes/stat-basketball/js/app.js"></script>
<script>
$(document).ready(function(){

	$(window).enllax();

	$("#menu-icon-container a").click(function(e){

		var menuOpen = $(this).attr("data-menuOpen");
		if ( menuOpen === 'no' ){

			  $("#menu-icon-container a").find('.material-icons').text('close');
				$("#menu-icon-container a").attr("data-menuOpen", 'yes');
				$(".full-screen-menu").animate({
						left:"0"
				},500);

		} else {

				$("#menu-icon-container a").find('.material-icons').text('menu');
			  $("#menu-icon-container a").attr("data-menuOpen", 'no');
				$(".full-screen-menu").animate({
						left:"-100%"
				},500);
		}



	}) // end menu-icon click




})

</script>
</html>
