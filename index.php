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
 * @package SEOZEN 
 * @subpackage SEOZEN_Dummy
 * @since SEOZEN Dummy 1.0
 */

get_header();
?>
<section class="site-container">
    <main class="site-main">
        <?php get_template_part('content'); ?>
    </main>
    <aside class="site-aside">
        <?php get_sidebar(); ?>
    </aside>
</section>
<?php
get_footer();