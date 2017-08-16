<div class="container-fluid header-wrapper">
    <div class="row header-img-wrapper">
        <div class="td-header-img" style="background-image:url(<?php echo get_template_directory_uri(). '/assets/images/bg-image.jpg'; ?>);"></div>
    </div>
    <div class="row">
        <div class="hamnburger-btn">
            <div class="hamburger hamburger--slider">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>
    <nav class="main-nav off-canvas" role="navigation">
        <?php $defaults = array(
            'theme_location'    => "main-menu" , 
            "menu_id"           => "" , 
            "menu_class"        => "",
            'container'         => '',
            );
            ?>

            <?php wp_nav_menu( $defaults ); ?>
        </nav>
    </div>
</div>