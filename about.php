<?php
/**
 * Template Name: About
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php wp_nav_menu('depth=1'); ?>

<h1>Welcome to the standard market company</h1>
<?php wp_nav_menu('submenu=about'); ?>

<?php get_footer(); ?>
</body>
</html>