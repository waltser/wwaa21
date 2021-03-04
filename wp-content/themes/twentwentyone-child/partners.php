<?php
/*
 * Template Name: Partners
 * description: >-
  Page template without sidebar
 */


?>


<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
	
     
</div>

			<main id="main" class="site-main" role="main">


			<div id="listfruit">
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'partners',
    'posts_per_page' => 15,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
		<?php if (have_rows('partners')) : ?>
			<?php while (have_rows('partner')) : the_row();
				// Get sub field values.
				$image = get_sub_field('logo'); ?>
				<div id="fruit">
				<a class="modal-link"  href="<?php echo esc_url( get_permalink( get_page_by_title( 'Monthly Events' ) ) ); ?>">

					<div class='imagefruit' style="background: url('<?php echo esc_url($image['url']); ?>') "></div>

					<div id="fruitdetail">
						<div class="name">
							<?php the_sub_field('partnername'); ?>
						</div>
						<span class="job-bg">	<span class="job">
							<?php the_sub_field('description'); ?>
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
