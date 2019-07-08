<div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author( ); ?></strong><br/>
                        <?php echo get_the_date(); ?>
                    </p>
                    <?php the_tags('<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>' )  ?>

                    <span class="dashicons dashicons-admin-links"></span>

                </div>
                <div class="col-md-8">
                    <p>
                        <?php the_post_thumbnail( 'large', array('class' => 'img-fluid') )?>
                    </p>


                    <?php  the_excerpt(  );
                    ?>
                </div>
            </div>

        </div>
    </div>