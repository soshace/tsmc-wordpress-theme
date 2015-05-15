<?php
/**
 * Template Name: Departments
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php wp_nav_menu('menu=Top Menu'); ?>

<h1>Departments</h1>
<?php wp_nav_menu('menu=Departments'); ?>

<?php get_footer(); ?>
</body>
</html>