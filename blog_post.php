<?php
/**
 * Template Name: Blog Post
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php get_template_part('menu', 'top'); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $title = get_the_title();
        $content = get_the_content();
        $cover = get_field('cover');
    endwhile;
endif;
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
                    <img class="headImage" src="<?php echo $cover['url']; ?>"/>

                    <h3><?php echo $title ?></h3>

                    <p><?php echo $content ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
</html>