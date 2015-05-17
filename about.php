<?php
/**
 * Template Name: About
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( 'menu', 'top' ); ?>

<div class="container mainArea">
    <?php get_template_part( 'logo', 'top' ); ?>
    <div>
        <div class="headText">
            <h1>WELCOME</h1>
            <h2>TO THE STANDARD MARKET COMPANY</h2>
        </div>
        <?php
        $menuOptions = array(
            'theme_location' => '',
            'menu' => 'About',
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
    <hr>

    <div class="main-content">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
        endif;
        ?>
        <hr>
    </div>
    <?php get_template_part( 'triple', 'block' ); ?>
</div>

<?php get_footer(); ?>
</body>
</html>