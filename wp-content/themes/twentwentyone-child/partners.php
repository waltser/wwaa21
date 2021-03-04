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
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>

		<?php get_template_part('template-parts/header/site-header'); ?>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">


			</div>

			<main id="main" class="site-main" role="main">


				<div id="partners">
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

				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; // end of the loop. 
	?>
		</div>
	<?php endif; ?>
	<?php

	get_footer();
