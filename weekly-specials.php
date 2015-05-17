<div class="leftAdds">
    <h2>OUR WEEKLY SPECIALS</h2>
    <hr>
    <?php
    query_posts('cat=21&posts_per_page=2');

    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="imageContainer">
            <div class="responsiveAddsHolder">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
                <div class="responsiveAddsHolder_box">
                    <div class="responsiveAddsHolder_inside">
                        <p><?php the_content(); ?></p>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/symbols.png">
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
    endif;
    ?>
    <hr class="visible-lg visible-md">
    <div class="leftAddsNewsletter visible-lg visible-md">
        <h3>NEWSLETTER</h3>
        <p>At The Standard Market Company,we’d love to keep you up to dateof our news and specials. To receiveour weekly newsletter, please submit your email address.</p>

        <form action="" method="post" class="newsletter-signup">
            <table>
                <tr class="myResponsiveSubmit">
                    <td><input type="email" name="cm-dumhk-dumhk" class="newsletter-input js-placeholder-text" placeholder="enter your email address"></td>
                    <td><button type="submit" class="newsletter-btn">SUBMIT</button></td>
                </tr>
            </table>
        </form>
    </div>
    <hr class="visible-lg visible-md">
</div>