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
		<div class="bannerlogo" ><img class="bannerlogopic"
     src="http://localhost/wordpress/wp-content/uploads/2021/03/wwaa21Logo.png"
     alt="wwaa21 logo"></div>
		<div class="introtext">
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
</div>

			<main id="main" class="site-main" role="main">