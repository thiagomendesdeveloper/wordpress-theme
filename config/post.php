<?php 

function post_type_servico_register() {
    $labels = array(
        'name' => 'Serviços',
        'singular_name' => 'Serviço',
        'menu_name' => 'Serviços',
        'add_new' => _x('Adicionar Serviço', 'item'),
        'add_new_item' => __('Adicionar Novo Serviço'),
        'edit_item' => __('Editar Serviço'),
        'new_item' => __('Novo Serviço')
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'servicos'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array('title','editor', 'thumbnail')
    );
    register_post_type('servicos', $args);
}
add_action('init', 'post_type_servico_register');

$labels = array(
    'name'              => _x( 'Tipo', 'Taxonomy General Name', 'text_domain' ),
    'menu_name'         => __( 'Tipo', 'textdomain' ),
  );
  $args   = array(
    'labels'            => $labels,
    'hierarchical'      => true,
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud'     => true,
    'rewrite'           => array('slug' => 'servicos'), // url
  );
  
  register_taxonomy( 'servicos-tipo', array( 'servicos' ), $args ); // slug do post