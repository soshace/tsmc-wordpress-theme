<?php
/**
 * Template Name: Catering Category
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php get_template_part('menu', 'top'); ?>

<?php
$category = get_field('category');
if (!empty($category)) {
    $category_id = $category[0]->term_taxonomy_id;

    if (function_exists('z_taxonomy_image_url')) {
        $catering_logo = z_taxonomy_image_url($category_id);
    }
}
$catering_cover = get_field('cover');
?>

<div class="container mainArea catering">
    <div class="headData">
        <div class="headText">
            <h1>CATERING</h1>
        </div>
        <?php
        $menuOptions = array(
            'theme_location' => '',
            'menu' => 'Catering',
            'container' => 'ul',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'headLinks',
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
    <?php get_template_part('logo', 'top'); ?>
    <div class="catering_data">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="visible-xs">
                    <div class="headButtons">
                        <button class="customButton">CART(0)</button>
                        <button class="customButton">CHECKOUT</button>
                    </div>
                </div>
                <hr class="visible-xs">
                <div class="leftSmallPart">
                    <?php if (!empty($catering_logo)): ?>
                        <img src="<?php echo $catering_logo; ?>"/>
                    <?php endif; ?>

                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="rightCakes">
                    <div class="visible-lg visible-md visible-sm">
                        <div class="headButtons">
                            <button class="customButton">CART(0)</button>
                            <button class="customButton">CHECKOUT</button>
                        </div>
                    </div>
                    <hr class="visible-lg visible-md visible-sm">
                    <div class="main-content">
                        <?php if (!empty($catering_cover)): ?>
                            <img class="headImage" src="<?php echo $catering_cover['url']; ?>"
                                 alt="<?php echo $catering_cover['alt']; ?>"/>
                        <?php endif; ?>
                        <div class="productList">
                            <ul>
                                <?php
                                if (!empty($category_id)) :
                                    query_posts('cat=' . $category_id);

                                    if (have_posts()) : while (have_posts()) : the_post();
                                        $post_cover = get_field('cover');
                                        ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>" class="myCol4 myColXs6">
                                                <div class="productContainer">
                                                    <?php if (!empty($post_cover)): ?>
                                                        <img src="<?php echo $post_cover['url']; ?>"/>
                                                    <?php endif ?>

                                                    <p><?php the_title(); ?></p>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endwhile;
                                    endif;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
</html>