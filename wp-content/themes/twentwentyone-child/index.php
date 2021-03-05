<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>


<div id="listwoman">
	<?php while (have_posts()) : the_post(); ?>
		<?php if (have_rows('woman')) : ?>
			<?php while (have_rows('woman')) : the_row();
				// Get sub field values.
				$image = get_sub_field('image'); ?>
				<div id="woman">
					<a class="modal-link" href="<?php echo esc_url(get_permalink(get_page_by_title('Monthly Events'))); ?>">

						<div class='imagewoman' style="background: url('<?php echo esc_url($image['url']); ?>') "></div>

						<div id="womandetail">
							<div class="name">
								<?php the_sub_field('name'); ?>
							</div>
							<span class="job-bg"> <span class="job">
									<?php the_sub_field('job'); ?>
								</span> </span>
						</div>

					</a>

				</div>


			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; // end of the loop. 
	?>
</div>
<?php

get_footer();
