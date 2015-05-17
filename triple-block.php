<div class="triple-block">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
            <h2>OUR WEEKLY SPECIAL</h2>

            <?php
            query_posts('cat=21&posts_per_page=1');

            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="imageContainer">
                    <div class="responsiveAddsHolder">
                        <div class="responsiveAddsHolder_box">
                            <div class="responsiveAddsHolder_inside"><p><?php the_content(); ?></p><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/symbols.png"></div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
            <h2>LATEST BLOG ENTRY</h2>

            <?php
            query_posts('cat=20&posts_per_page=1');

            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="imageContainer">
                    <img src="<?php echo get_field('cover')['url'] ?>">

                    <p class="imageContainer_text"><?php the_title(); ?></p>
                </a>
            <?php endwhile;
            endif; ?>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4">
            <h2>FEATURED RECIPE</h2>
            <?php
            query_posts('cat=16,17,18,19&posts_per_page=1');

            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="imageContainer">
                    <img src="<?php echo get_field('cover')['url'] ?>">

                    <p class="imageContainer_text"><?php the_title(); ?></p>
                </a>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>