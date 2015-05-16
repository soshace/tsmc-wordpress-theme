<?php
/**
 * Template Name: Catering Item
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

    if (!empty($catering_logo)): ?>
        <img src="<?php echo $catering_logo; ?>"/>
    <?php endif; ?>

    <?php if (!empty($catering_logo)): ?>
        <h3><?php echo $category_description; ?></h3>
    <?php endif; ?>

    <a href="<?php echo $category_link ?>"><< back to <?php echo $category_name; ?> overview</a>

    <ul>
        <?php
        if (!empty($category_id)) :
            query_posts('cat=' . $category_id);

            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile;
            endif;
        endif;
        ?>
    </ul>
</div>

<div>
    <?php
    $cover = get_field('cover');
    if (!empty($cover)): ?>
        <img src="<?php echo $cover['url']; ?>" alt="<?php echo $cover['alt']; ?>"/>
    <?php endif; ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $post = get_post($postId) ?>
    <?php endwhile; endif; ?>


    <div>
        <?php echo $post->post_title ?>
    </div>

    <div>
        <?php echo $post->post_content ?>
    </div>
</div>

</body>
</html>