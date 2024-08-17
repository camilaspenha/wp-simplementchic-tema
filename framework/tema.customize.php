<?php


add_action( 'customize_register', function( $wp_customize ) {

    /*
    Redes Sociais
    ----------------------------------------------------------------*/

    $wp_customize->add_section( 'tema-contatos' , array(
    'title'      => "Contatos",
        'priority'   => 40,
    ) );
  
        //Instagram
        $wp_customize->add_setting( 'instagram', array(
            'default'           => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ));
        $wp_customize->add_control( 'instagram', array(
            'label'    => "Instagram",
            'description' => '',
            'section'  => 'tema-contatos',
            'type' => 'text',
        ));

        //Whatsapp
        $wp_customize->add_setting( 'whatsapp', array(
          'default'           => '',
          'sanitize_callback' => 'wp_filter_nohtml_kses'
        ));
        $wp_customize->add_control( 'whatsapp', array(
          'label'    => "Whatsapp",
          'description' => '',
          'section'  => 'tema-contatos',
          'type' => 'text',
        ));

       //Whatsapp API
       $wp_customize->add_setting( 'whatsapp-api', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
       ));
        $wp_customize->add_control( 'whatsapp-api', array(
          'label'    => "Whatsapp API",
          'description' => '',
          'section'  => 'tema-contatos',
          'type' => 'text',
        ));

        //E-mail
        $wp_customize->add_setting( 'email', array(
          'default'           => '',
          'sanitize_callback' => 'wp_filter_nohtml_kses'
        ));
        $wp_customize->add_control( 'email', array(
          'label'    => "E-mail",
          'description' => '',
          'section'  => 'tema-contatos',
          'type' => 'text',
        ));
       
        /*
        Footer
        ----------------------------------------------------------------*/
        $wp_customize->add_section( 'tema-footer' , array(
            'title'      => "Footer",
            'priority'   => 40,
        ) );
            //Slogan
            $wp_customize->add_setting( 'slogan', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'slogan', array(
                'label'    => "Slogan",
                'description' => '',
                'section'  => 'tema-footer',
                'type' => 'text',
            ) );   
        

});
?>