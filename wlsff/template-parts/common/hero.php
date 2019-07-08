<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center header-logo">
                    <?php  the_custom_logo( ); ?>
                </div>
                <h3 class="tagline"><?php bloginfo('description')?></h3>
                <h1 class="align-self-center display-1 text-center heading"><a class="site-title" href="<?php echo site_url(); ?>"><?php bloginfo("name"); ?></a></h1>
            </div>
            <div class="col-md-12">
                <?php

                    wp_nav_menu( array(
                        "theme_location" => "topmenu",
                        "menu_class" => "list-inline  text-center",
                        "menu_id" => "topmenu",
                    ) );

                ?>
            </div>
        </div>
        <div class="row justify-content-center">
                <?php
                    if(is_search()){
                        ?>
                        <h2>You search for : <?php the_search_query() ?></h2>
                        <?php
                    }
                ?>
                <div class="col-lg-6 offset-lg-3 text-center" style="margin-bottom:50px;border-bootm:1px solid #333;">
                    <?php echo get_search_form( ); ?>
                </div>
                <hr>
        </div>
    </div>
</div>