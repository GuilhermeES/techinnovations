<?php

function services_setup(){
    register_post_type('servicos', array(
        'labels' => array(
            'name' => 'Serviços',
            'singular_name' => 'Serviço',
            'add_new_item' => 'Adicionar novo'
        ),
        'supports' => array('title', 'thumbnail', 'editor'),
        'menu_position' => 6,
        'public' => true,
        'publicly_queryable'  => false,
        'rewrite' => array(
            'slug' => 'servicos'
        )
    ));
}
add_action('after_setup_theme', 'services_setup');