<?php
/**
 * Template Name: Catering Category
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php wp_nav_menu('menu=Top Menu'); ?>

<?php wp_nav_menu('menu=Catering'); ?>

<div>
    <?php
    $category = get_field('category');
    if (!empty($category)) {
        $category_id = $category[0]->term_taxonomy_id;

        if (function_exists('z_taxonomy_image_url')) {
            $catering_logo = z_taxonomy_image_url($category_id);
        }
    }

    if (!empty($catering_logo)): ?>
        <img src="<?php echo $catering_logo; ?>"/>
    <?php endif; ?>

    <?php
    if (have_posts()) : while (have_posts()) : the_post();
        the_content();
    endwhile;
    endif;
    ?>
</div>

<div>
    <?php
    $catering_cover = get_field('cover');
    if (!empty($catering_cover)): ?>
        <img src="<?php echo $catering_cover['url']; ?>" alt="<?php echo $catering_cover['alt']; ?>"/>
    <?php endif; ?>
</div>

<ul>
    <?php
    if (!empty($category_id)) :
        query_posts('cat=' . $category_id);

        if (have_posts()) : while (have_posts()) : the_post();
            $post_cover = get_field('cover');
            ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <?php if (!empty($post_cover)): ?>
                        <img src="<?php echo $post_cover['url']; ?>"/>
                    <?php endif ?>
                    <span>
                        <?php the_title(); ?>
                    </span>
                </a>
            </li>
        <?php endwhile;
        endif;
    endif;
    ?>
</ul>

<?php get_footer(); ?>
</body>
</html>