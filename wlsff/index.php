<?php get_header(); ?>
<body <?php body_class( ); ?> >


<div class="posts">
   
    <?php while(have_posts()){ 
    
    the_post();

    get_template_part("post-formats/content",get_post_format() );

    } ?>
</div>
<?php  get_footer(); ?>