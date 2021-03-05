<?php
/*
 * Template Name: Partners
 * description: >-
  Page template without sidebar
 */



get_header(); ?>
	<div class="partnersintro">
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=partners' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?></div>

<?php
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'partners',
	'posts_per_page' => 15,
);
$arr_posts = new WP_Query($args);

if ($arr_posts->have_posts()) :

	while ($arr_posts->have_posts()) :
		$arr_posts->the_post();
?>

		<div id="partners">

			<?php if (have_rows('partner')) : ?>
				<?php while (have_rows('partner')) : the_row();
					// Get sub field values.
					$image = get_sub_field('logo'); ?>

					<div id="partner">
						<img class="partnerlogo" src='<?php echo esc_url($image['url']); ?>' alt="logo">

						<div id="partnerdescription">
							<div class="partnername">
								<?php the_sub_field('partnername'); ?>
							</div>
							<div class="partnerdescription">
								<?php the_sub_field('description'); ?>
							</div>
							<div class="partnersite">
								<a href="<?php the_sub_field('site_partner'); ?>">Click here to visit <?php the_sub_field('partnername'); ?> website</a>
							</div>
						</div>

					</div>
				<?php endwhile; ?>
		</div>
	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>




<?php
get_footer();
