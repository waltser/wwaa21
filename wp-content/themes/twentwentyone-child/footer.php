<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

</div><!-- #page -->


<script>
$( document ).ready(function() {

moveWomenDetail();

});

function moveWomenDetail() {
var win = $(window).width();
if (win < 768) {
	$('#womendetail').after($('.imagewoman'));  
} else {
	$('#womendetail').append($('#contact')); 
}
}
</script>

<?php wp_footer(); ?>

</body>
</html>
