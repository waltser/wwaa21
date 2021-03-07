<?php
/*
 * Template Name: 2020
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body <?php body_class(); ?>>



    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>


        <?php get_template_part('template-parts/header/site-header-2020'); ?>


        <?php get_template_part('template-parts/content/content-2020'); ?>

        <?php

        get_footer();
