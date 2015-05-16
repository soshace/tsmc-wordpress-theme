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
    <div class="triple-block">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h2>OUR WEEKLY SPECIAL</h2>
                <div class="imageContainer">
                    <div class="responsiveAddsHolder">
                        <div class="responsiveAddsHolder_box">
                            <div class="responsiveAddsHolder_inside"><p>ROYAL GALA APPLES $4.99KG</p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/symbols.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h2>LATEST BLOG ENTRY</h2>
                <div class="imageContainer">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/LatestBlogEntry.png">
                    <p class="imageContainer_text">National Sausage King Competition</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4">
                <h2>FEATURED RECIPE</h2>
                <div class="imageContainer">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/FeaturedRecipe.png">
                    <p class="imageContainer_text">Careme Traditional Pastry</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
</html>