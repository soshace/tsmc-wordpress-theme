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
        $top_post_link = get_permalink($top_post_id);
    endwhile;
    endif;
}

?>

<div class="container mainArea">
    <?php get_template_part('logo', 'top'); ?>

    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3 visible-lg visible-md visible-sm">
            <?php get_template_part('weekly', 'specials'); ?>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="rightBlog">
                <div>
                    <div class="headText">
                        <h1>BLOG</h1>
                    </div>
                </div>
                <hr>
                <div class="main-content">
                    <?php if (!empty($top_post)): ?>
                        <a href="<?php echo $top_post_link; ?>">
                            <img class="headImage" src="<?php echo $top_post_cover['url']; ?>"/>

                            <h3><?php echo $top_post_title ?></h3>

                            <p><?php echo $top_post_description ?></p>
                        </a>
                    <?php endif; ?>
                    <?php
                    if (!empty($category_id)) :
                        query_posts(array(
                            'posts_per_page' => 4,
                            'cat' => $category_id,
                            'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
                        ));

                        if (have_posts()) :?>
                            <div class="raw">
                                <div class="image-tuple-text">
                                    <hr>
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
                                                    <h3><?php echo the_title(); ?></h3>

                                                    <p><?php echo $post_description ?></p>
                                                </a>
                                            </li>
                                        <?php endwhile;
                                        ?>
                                    </ul>
                                    <span class="entries next"><?php next_posts_link('NEXT ENTRIES >>'); ?></span>
                                    <span
                                        class="entries previous"><?php previous_posts_link('<< PREVIOUS ENTRIES'); ?></span>
                                </div>
                            </div>
                        <?php endif;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
</html>