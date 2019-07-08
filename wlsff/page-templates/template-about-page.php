<div class="form-row">
<div class="col">
    <div class="form-group">
        <input type="text" name="name" placeholder="Name*" required>
    </div>
</div>
<div class="col">
    <div class="form-group">
        <input type="email" name="email" placeholder="Email*" required>
    </div>
</div>
</div>
<div class="form-group">
<input type="text" name="ptype" placeholder= 'ENTER: "Food", "Music", "Market", "Sponsor", or "Other" * '  >
</div>
<div class="form-group">
<textarea name="message" placeholder="Message"></textarea>
</div>
<input type="submit" value="Submit">

<?php get_header(); ?>
<body <?php body_class( ); ?> >
<?php get_template_part("template-parts/about-page-template/hero-page"); ?>
<div class="posts">
    <?php while(have_posts()): the_post();?>
    <div class="post <?php post_class( ); ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                <div class="col-md-12 text-center">
                    <h2 class="post-title"><?php the_title(); ?></h2>
                        <p>
                            <strong><?php the_author( ); ?></strong><br/>
                            <?php echo get_the_date(); ?>
                        </p>
                        <?php the_tags('<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>' )  ?>

                    </div>
                    <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <?php  $attachments = new Attachments( 'testimonials' );
                                if ( class_exists( 'Attachments' ) && $attachments->exist() ){
                                    ?>
                                    <h2 class="text-center"><?php _e( 'Testimonial', 'wssf' ); ?></h2>

                                <?php
                                }
                            ?>
                            <div class="testimonial-slider wssf-post-slider text-center">
                            <?php if ( class_exists( 'Attachments' ) ):?>
                                <?php if( $attachments->exist() ) : ?>
                                    <?php while( $attachments->get() ) : ?>
                                    <div>
                                        <?php echo $attachments->image( 'thumbnail' ); ?>
                                        <h4><?php echo $attachments->field( 'name' ); ?></h4>
                                        <p><?php echo $attachments->field( 'position' ); ?> at <?php echo $attachments->field( 'company' ); ?></p>
                                        <p><?php echo $attachments->field( 'testimonials' ); ?></p>
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?> 
                            <?php endif;?>
                            </div>
                        </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-12">
                                <div class="team-member">
                                <?php if ( class_exists( 'Attachments' ) ):?>
                                    <div class="row"> 
                                    <?php $attachments = new Attachments( 'team-members' ); ?>
                                    <?php if( $attachments->exist() ) : ?>
                                        <?php while( $attachments->get() ) : ?>
                                        <div class="col-md-4">
                                            <?php echo $attachments->image( 'medium' ); ?>
                                            <h4><?php echo $attachments->field( 'name' ); ?></h4>
                                            <p><?php echo $attachments->field( 'position' ); ?> at <?php echo $attachments->field( 'company' ); ?></p>
                                            <p><?php echo $attachments->field( 'bio' ); ?></p>
                                            <p><?php echo $attachments->field( 'email' ); ?></p>
                                        </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div>  
                                <?php endif;?>
                                </div>
                            </div>
                        </div>

                        <p>
                            <?php if (has_post_thumbnail()) {
                                // $thumbnail_url = get_the_post_thumbnail_url( null, 'large');
                                echo '<a href="#" class="pop-up" data-featherlight="image">';
                                the_post_thumbnail( 'large', array('class' => 'img-fluid') );
                                echo '</a>';
                            } ?>
                        </p>
                        <?php the_content(); ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <?php endwhile;?>
</div>

<?php  get_footer(); ?>