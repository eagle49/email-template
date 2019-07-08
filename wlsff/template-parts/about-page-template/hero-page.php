
<div class="header page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h3 class="tagline"><?php bloginfo('description')?></h3>
                <h1 class="align-self-center display-1 text-center heading"><a class="site-title" href="<?php echo site_url(); ?>"><?php bloginfo("name"); ?></a></h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        
    <div class="col-md-12" style="padding-top:50px;">
                <?php

                    wp_nav_menu( array(
                        "theme_location" => "topmenu",
                        "menu_class" => "list-inline  text-center",
                        "menu_id" => "topmenu",
                    ) );

                ?>
            </div>
    </div>
</div>

