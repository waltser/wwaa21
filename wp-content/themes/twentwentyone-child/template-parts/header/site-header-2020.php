<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>

</header><!-- #masthead -->

<div id="content" class="site-content  sgl-cat-women">
		<div id="primary" class="content-area">

        <div id="introduction">
		<div class="bannerlogo" ><img class="bannerlogopic"
     src="http://localhost/wordpress/wp-content/uploads/2021/03/wwaaLogo12020.png"
     alt="wwaa21 logo"></div>
		<div class="introtext">
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=description2020' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
</div>
</div>
