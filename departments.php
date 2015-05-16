<?php
/**
 * Template Name: Departments
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php get_template_part( 'menu', 'top' ); ?>

<h1>Departments</h1>
<?php wp_nav_menu('menu=Departments'); ?>

<div>
    <?php
    $department_icon = get_field('department_icon');
    if( !empty($department_icon) ): ?>
        <img src="<?php echo $department_icon['url']; ?>" alt="<?php echo $department_icon['alt']; ?>" />
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