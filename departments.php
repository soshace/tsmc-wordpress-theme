<?php
/**
 * Template Name: Departments
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php get_template_part('menu', 'top'); ?>

<div class="container mainArea departments-page">
    <?php get_template_part('logo', 'top'); ?>

    <div>
        <div class="headText">
            <h2>Departments</h2>
        </div>
        <?php
        $menuOptions = array(
            'theme_location' => '',
            'menu' => 'Departments',
            'container' => 'ul',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'headLinks visible-lg visible-md',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'depth' => 1,
            'walker' => ''
        );

        wp_nav_menu($menuOptions);
        ?>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-lg-2">
                <?php
                $department_icon = get_field('department_icon');
                if (!empty($department_icon)): ?>
                    <img src="<?php echo $department_icon['url']; ?>" alt="<?php echo $department_icon['alt']; ?>"/>
                <?php endif; ?>
            </div>
            <div class="col-lg-10">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
</html>