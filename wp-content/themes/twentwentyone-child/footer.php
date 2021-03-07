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



<?php wp_footer(); ?>


<script>

/* 
$( document ).ready(function() {
	moveWomenDetail();
	function moveWomenDetail() {
var win = $(window).width();
if (win < 768) {
	$('#womendetail').after($('.imagewoman'));
	$('#contact').after($('#womendetail'));  

} else {
	$('#womendetail').before($('.interview')); 
	$('#contact').after($('#womendetail')); 
}
}

});
 */

</script>

<!-- <script>

window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
</script> -->
</body>
</html>
