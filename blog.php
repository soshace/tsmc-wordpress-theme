<?php
/**
 * Template Name: Blog
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php get_template_part('menu', 'top'); ?>

<?php
$category = get_field('category');
$top_post = get_field('top_post');
if (!empty($category)) {
    $category_id = $category[0]->term_taxonomy_id;
}

if (!empty($top_post)) {
    $top_post_id = $top_post->ID;
    $top_post_title = $top_post->post_title;

    if (have_posts()) : while (have_posts()) : the_post();
        $top_post_cover = get_field('cover', $top_post_id);
        $top_post_description = get_field('description', $top_post_id);
    endwhile;
    endif;
}

?>

<?php if (!empty($top_post)): ?>
    <div>
        <img src="<?php echo $top_post_cover['url']; ?>"/>

        <div><?php echo $top_post_title ?></div>
        <div><?php echo $top_post_description ?></div>
    </div>
<?php endif; ?>

<?php
if (!empty($category_id)) :
    query_posts(array(
        'posts_per_page' => 4,
        'cat' => $category_id,
        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
    ));

    if (have_posts()) :?>
        <ul>
            <?php
            while (have_posts()) : the_post();
                $post_cover = get_field('cover');
                $post_description = get_field('description');
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php if (!empty($post_cover)): ?>
                            <img src="<?php echo $post_cover['url']; ?>"/>
                        <?php endif ?>
                        <span>
                        <?php echo the_title(); ?>
                    </span>
                    <span>
                        <?php echo $post_description ?>
                    </span>
                        <a href='<?php echo get_permalink(); ?>'>Read more..</a>
                    </a>
                </li>
            <?php endwhile;
            ?>
        </ul>

        <div class="nav-next alignright"><?php previous_posts_link( '<< previous entries' ); ?></div>
        <div class="nav-previous alignleft"><?php next_posts_link( 'next entries >>' ); ?></div>
    <?php endif; endif; ?>

<?php get_footer(); ?>
</body>
</html>