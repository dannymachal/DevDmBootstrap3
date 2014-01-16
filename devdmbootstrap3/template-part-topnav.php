
<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="row dmbs-top-menu">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                        <col-md- class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></col-md->
                        <col-md- class="icon-bar"></col-md->
                        <col-md- class="icon-bar"></col-md->
                        <col-md- class="icon-bar"></col-md->
                    </button>
                </div>

                <?php
                wp_nav_menu( array(
                        'theme_location'    => 'main_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </nav>
    </div>

<?php endif; ?>