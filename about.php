<?php
/**
 * Template Name: About
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php wp_nav_menu('menu=Top Menu'); ?>

<h1>Welcome</h1>
<h2>to the standard market company</h2>
<?php wp_nav_menu('menu=About'); ?>

<div>
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
        the_content();
    endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>
</body>
</html>