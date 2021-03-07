<?php
/**
 * Template part for displaying year 2020
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


			<main id="main" class="site-main" role="main">


<div id="listwoman">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'year2020',
    'posts_per_page' => 25,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
		<?php if (have_rows('fruit')) : ?>
			<?php while (have_rows('fruit')) : the_row();
				// Get sub field values.
				$image = get_sub_field('image'); ?>
				<div id="woman" class="<?php the_field('coming_soon'); ?> ">
				<?php if( get_field('coming_soon') == 'coming_soon' ) {
echo'<div class="coming_text">Coming Soon!</div>';
    // Do something.
}
?>
		

					<div class='imagewoman  fade-in' style="background: url('<?php echo esc_url($image['url']); ?>') "></div>
					
				
					<div id="womandetail">
						<div class="name name2 fade-in-left">
							<?php the_sub_field('name'); ?>
						</div>
						<span class="job-bg job-bg2 fade-in-left-delay">	<span class="job job2 fade-in-left-delay">
							<?php the_sub_field('job'); ?>
		</span>	</span>
					</div>

					</a>

				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; // end of the loop. 
	?>
</div>
<?php endif; ?>