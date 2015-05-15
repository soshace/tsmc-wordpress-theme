<?php
/**
 * Template Name: Gift Ideas
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php wp_nav_menu('depth=1'); ?>

<h1>Departments</h1>
<?php wp_nav_menu('submenu=departments'); ?>

<?php get_footer(); ?>
</body>
</html>