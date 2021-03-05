<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>





<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if (have_rows('woman')) : ?>
			<?php while (have_rows('woman')) : the_row();
				// Get sub field values.
				$image = get_sub_field('image'); ?>
				<div id="leftcol">

					<img class='imagewoman fade-in' src="<?php echo esc_url($image['url']); ?>">
					<div class="bio">
							<?php the_field('bio'); ?>
						</div>

						</div>

						<?php endwhile; ?>
		<?php endif; ?>

	

					<div id="womancontent">
					<?php if (have_rows('woman')) : ?>
			<?php while (have_rows('woman')) : the_row();?>
					<div id="womandetail">
						<div class="name">
							<?php the_sub_field('name'); ?>
						</div>
						<div class="job">
							<?php the_sub_field('job'); ?>
						</div>
					</div>

					<?php endwhile; ?>
		<?php endif; ?>

						
					<?php if (have_rows('contact')) : ?>
			<?php while (have_rows('contact')) : the_row();?>
					
					<div id="contact">
						<div class="twitter womansm">
							<a href="<?php the_sub_field('twitter'); ?>"><i class="fab fa-twitter pink">	</i></a>
							
						</div>
						<div class="linkedin womansm">
						<a href="<?php the_sub_field('linkedin'); ?>"><i class="fab fa-linkedin pink">	</i></a>

						
						</div>
						<div class="towoman womansm">
						<a href="<?php the_sub_field('mail'); ?>"><i class="fas fa-envelope-open-text pink"></i></a>

							
						</div>
					</div>
					
			<?php endwhile; ?>
		<?php endif; ?>
					
						<div class="interview">
							<?php the_field('interview'); ?>
						</div>
					</div>






</article><!-- #post-<?php the_ID(); ?> -->
