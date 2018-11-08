<?php
/**
 *  Template Name: Home template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 */

get_header();
get_template_part('template-parts/slide-banner');
get_template_part('template-parts/most-popular');
get_template_part('template-parts/banner-home');
get_template_part('template-parts/photograb');
get_template_part('template-parts/video');
get_footer();
?>
