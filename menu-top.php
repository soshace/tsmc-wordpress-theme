<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="socialIcons visible-lg visible-md">
            <a href="" class="faceBook"><img></a>
            <a href="" class="instagram"><img></a>
        </div>
        <div class="socialIconsTablet visible-sm">
            <a href="" class="faceBook"><img></a>
            <a href="" class="twitter"><img></a>
            <a href="" class="instagram"><img></a>
        </div>
        <div class="row">
            <?php
            $menuOptions = array(
                'theme_location' => '',
                'menu' => 'Top Menu',
                'container' => 'ul',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'nav navbar-nav',
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
    </div>
</nav>