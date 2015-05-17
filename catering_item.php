<?php
/**
 * Template Name: Catering Item
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php get_template_part('menu', 'top'); ?>

<?php
$postId = get_the_ID();
$category = get_the_category($postId);
if (!empty($category)) {
    $category_id = $category[0]->term_taxonomy_id;
    $category_description = $category[0]->description;
    $category_slug = $category[0]->slug;
    $category_link = '/catering/' . $category_slug;
    $category_name = $category[0]->name;

    if (function_exists('z_taxonomy_image_url')) {
        $catering_logo = z_taxonomy_image_url($category_id);
    }
}
$cover = get_field('cover');

if (have_posts()) : while (have_posts()) : the_post();
    $post = get_post($postId);
endwhile; endif; ?>

<div class="container mainArea catering catering_click_on">
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
                <div class="leftSmallPart hidden-xs">
                    <?php
                    if (!empty($catering_logo)): ?>
                        <img src="<?php echo $catering_logo; ?>"/>
                    <?php endif; ?>
                    <?php if (!empty($category_description)): ?>
                        <h3><?php echo $category_description; ?></h3>
                    <?php endif; ?>
                    <span class="backToCake">
                        <a href="<?php echo $category_link ?>">
                            <p><i>&#60&#60back to cake overview</i>

                            <p>
                        </a>
                    </span>
                    <ul>
                        <?php
                        if (!empty($category_id)) :
                            query_posts('cat=' . $category_id);

                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
                                </li>
                            <?php endwhile;
                            endif;
                        endif;
                        ?>
                    </ul>
                    <p>
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
                        <div class="productContainer">
                            <?php if (!empty($cover)): ?>
                                <img src="<?php echo $cover['url']; ?>" alt="<?php echo $cover['alt']; ?>"/>
                            <?php endif; ?>

                            <p><?php echo $post->post_title ?></p>
                        </div>
                        <div class="productDefinition">
                            <p><?php echo $post->post_content ?></p>
                            <ul>
                                <li>
                                    <div class="productPrice">
                                        <p>$45 each</p>

                                        <form class="inputQuantity">
                                            <label>quantity:</label>
                                            <input type="number">
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <div class="productPrice">
                                        <p>$45 each</p>

                                        <form class="inputQuantity">
                                            <label>quantity:</label>
                                            <input type="number">
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <div class="productPrice">
                                        <p>$45 each</p>

                                        <form class="inputQuantity">
                                            <label>quantity:</label>
                                            <input type="number">
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <div class="productPrice">
                                        <p>$45 each</p>

                                        <form class="inputQuantity">
                                            <label>quantity:</label>
                                            <input type="number">
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <div class="productPrice">
                                        <p>$45 each</p>

                                        <form class="inputQuantity">
                                            <label>quantity:</label>
                                            <input type="number">
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <div class="productPrice">
                                        <p>$45 each</p>

                                        <form class="inputQuantity">
                                            <label>quantity:</label>
                                            <input type="number">
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <hr class="yellow">
                        <div class="bottomButtons">
                            <button class="customButton">ADD TO CART</button>
                            <button class="customButton">CHECKOUT</button>
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