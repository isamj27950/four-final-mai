<?php
//
function four_register_post_types_sucre()
{

    $labels = [
        'name'=> 'Recettes Sucrées',
        'all_items'=> ' Toutes les recettes',
        'add_new_item'=> 'Ajouter une recette',
        'edit_item'=> 'Modifier une recette',
        'menu_name'=>'recette Sucrées'
    ];

    $args =[
        'labels'=> $labels,
        'public'=> true,
        'has_archive' =>true,
        //permet d'avoir editeur gutemberg  et REST API
        'show_in_rest'=>  true,
        //cpt peut etre de type Article (post) ou de type Pge(page)
        'capabilyty_type' => 'post',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        //permet d'avoir des champs en editeur morsque l'on ajoute une npouvelle recette
        'menu_position' => 4,
        'menu_icon' => 'dashicons-buddicons-community'

    ];

    register_post_type('sucre',$args );
}

//
function four_register_post_types_sale()
{
    $labels = [
        'name'=> 'Recettes Salées',
        'all_items'=> ' Toutes les recettes',
        'add_new_item'=> 'Ajouter une recette',
        'edit_item'=> 'Modifier une recette',
        'menu_name'=>'recette Salées'
    ];

     $args =[
        'labels'=> $labels,
        'public'=> true,
        'has_archive' =>true,
        //permet d'avoir editeur gutemberg  et REST API
        'show_in_rest'=>  true,
        //cpt peut etre de type Article (post) ou de type Pge(page)
        'capabilyty_type' => 'post',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        //permet d'avoir des champs en editeur morsque l'on ajoute une npouvelle recette
        'menu_position' => 4,
        'menu_icon' => 'dashicons-buddicons-community'

    ];

    register_post_type('sale',$args );
}

