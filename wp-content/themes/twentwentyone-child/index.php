<?php
/**
 * The header+main
 *
 *
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
	
        <div id="introduction">
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=description' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
</div>

			<main id="main" class="site-main" role="main">



<div id="listfruit">
	<?php while (have_posts()) : the_post(); ?>
		<?php if (have_rows('fruit')) : ?>
			<?php while (have_rows('fruit')) : the_row();
				// Get sub field values.
				$image = get_sub_field('image'); ?>
				<div id="fruit">
				<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Monthly Events' ) ) ); ?>">

					<div class='imagefruit' style="background: url('<?php echo esc_url($image['url']); ?>') "></div>

					<div id="fruitdetail">
						<div class="name">
							<?php the_sub_field('name'); ?>
						</div>
						<div class="job">
							<?php the_sub_field('job'); ?>
						</div>
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
