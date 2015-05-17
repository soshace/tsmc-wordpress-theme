<?php
/**
 * Template Name: Site Map
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php get_template_part( 'menu', 'top' ); ?>
<div class="container mainArea">
    <?php get_template_part('logo', 'top'); ?>

    <div>
        <div class="headText">
            <h2>Site Map</h2>
        </div>
    </div>

    <div class="main-content">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
        endif;
        ?>
        <hr>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>