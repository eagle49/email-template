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

                    <?php 
                    $wssf_post_format = get_post_format();

                    if( $wssf_post_format == 'audio'){
                        echo '<span class="dashicons dashicons-format-audio"></span>';
                    }else  if( $wssf_post_format == 'video'){
                        echo '<span class="dashicons dashicons-format-video"></span>';
                    }else  if( $wssf_post_format == 'image'){
                        echo '<span class="dashicons dashicons-format-image"></span>';
                    }else  if( $wssf_post_format == 'quote'){
                        echo '<span class="dashicons dashicons-format-quote"></span>';
                    }

                    ?>

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