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

<div>
    <?php
    $image = get_field('department_icon');
    if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endif; ?>

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