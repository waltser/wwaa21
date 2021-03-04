<?php
/*
 * Template Name: 2021
 * description: >-
  Page template without sidebar
 */

get_header(); ?>


<div id="listfruit">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'year2021',
    'posts_per_page' => 15,
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
				<div id="fruit">
				<a class="modal-link"  href="<?php echo esc_url( get_permalink( get_page_by_title( 'Monthly Events' ) ) ); ?>">

					<div class='imagefruit' style="background: url('<?php echo esc_url($image['url']); ?>') "></div>

					<div id="fruitdetail">
						<div class="name">
							<?php the_sub_field('name'); ?>
						</div>
						<span class="job-bg">	<span class="job">
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
<?php

get_footer();
