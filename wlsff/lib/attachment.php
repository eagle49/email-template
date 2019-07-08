<?php

define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); // disable the Settings screen

add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance

function wssf_slider( $attachments )
{
  $fields         = array(
    array(
      'name'      => 'title',                        
      'type'      => 'text',                          
      'label'     => __( 'Title', 'attachments' ),    
      'default'   => 'title',                         
    ),
  );

  $args = array(

    'label'         => 'Post Slider',
    'post_type'     => array( 'post'),
    'position'      => 'normal',
    'priority'      => 'high',
    'filetype'      => array('image'),
    'note'          => 'Attach files here!',
    'append'        => true,
    'button_text'   => __( 'Attach Images', 'attachments' ),
    'modal_text'    => __( 'Attach', 'attachments' ),
    'router'        => 'browse',
	'post_parent'   => false,
    'fields'        => $fields,

  );

  $attachments->register( 'wssf_slider', $args ); // unique instance name
}

add_action( 'attachments_register', 'wssf_slider' );




function wssf_testimonial_attachment( $attachments )
{
  $fields         = array(
    array(
      'name'      => 'name',                        
      'type'      => 'text',                          
      'label'     => __( 'Name', 'attachments' ),    
      'default'   => 'title',                         
    ),
    array(
      'name'      => 'position',                        
      'type'      => 'text',                          
      'label'     => __( 'Position', 'attachments' ),    
      'default'   => 'title',                         
    ),
    array(
      'name'      => 'company',                        
      'type'      => 'text',                          
      'label'     => __( 'Company', 'attachments' ),    
      'default'   => 'title',                         
    ),
    array(
      'name'      => 'testimonials',                        
      'type'      => 'textarea',                          
      'label'     => __( 'Testimonials', 'attachments' ),    
      'default'   => 'title',                         
    ),
  );

  $args = array(

    'label'         => 'Testimonial Slider',
    'post_type'     => array( 'page'),
    'position'      => 'normal',
    'priority'      => 'high',
    'filetype'      => array('image'),
    'note'          => 'Attach testimonials here!',
    'append'        => true,
    'button_text'   => __( 'Attach Testimonial', 'attachments' ),
    'modal_text'    => __( 'Attach', 'attachments' ),
    'router'        => 'browse',
	'post_parent'   => false,
    'fields'        => $fields,

  );

  $attachments->register( 'testimonials', $args ); // unique instance name
}

add_action( 'attachments_register', 'wssf_testimonial_attachment' );




function wssf_team_attachment( $attachments )
{
  $fields         = array(
    array(
      'name'      => 'name',                        
      'type'      => 'text',                          
      'label'     => __( 'Name', 'attachments' ),    
      'default'   => 'title',                         
    ),
    array(
      'name'      => 'position',                        
      'type'      => 'text',                          
      'label'     => __( 'Position', 'attachments' ),    
      'default'   => 'title',                         
    ),
    array(
      'name'      => 'company',                        
      'type'      => 'text',                          
      'label'     => __( 'Company', 'attachments' ),    
      'default'   => 'title',                         
    ),
    array(
      'name'      => 'email',                        
      'type'      => 'text',                          
      'label'     => __( 'Email', 'attachments' ),    
      'default'   => 'title',                         
    ),
    array(
      'name'      => 'bio',                        
      'type'      => 'textarea',                          
      'label'     => __( 'Bio', 'attachments' ),    
      'default'   => 'title',                         
    ),
  );

  $args = array(

    'label'         => 'Team Member',
    'post_type'     => array( 'page'),
    'position'      => 'normal',
    'priority'      => 'high',
    'filetype'      => array('image'),
    'note'          => 'Attach team member here!',
    'append'        => true,
    'button_text'   => __( 'Attach Team Member', 'attachments' ),
    'modal_text'    => __( 'Attach', 'attachments' ),
    'router'        => 'browse',
	'post_parent'   => false,
    'fields'        => $fields,

  );

  $attachments->register( 'team-members', $args ); // unique instance name
}

add_action( 'attachments_register', 'wssf_team_attachment' );