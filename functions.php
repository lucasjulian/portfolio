<?php
    function wpm_enqueue_styles() {
        wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/2b2495badb.js');
        wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js');
    }
    add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

    function wpc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'wpc_mime_types');

    /*
    * On utilise une fonction pour créer notre custom post type 'intérêts'
    */

    function interest_custom_post_type() {

        // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'intérêts', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'intérêt', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Intérets'),
            // Les différents libellés de l'administration
            'all_items'           => __( 'Toutes les intérêts'),
            'view_item'           => __( 'Voir les intérêts'),
            'add_new_item'        => __( 'Ajouter un nouvel intérêt'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer la intérêts'),
            'update_item'         => __( 'Modifier la intérêts'),
            'search_items'        => __( 'Rechercher une intérêt'),
            'not_found'           => __( 'Non trouvée'),
            'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
        );
        
        // On peut définir ici d'autres options pour notre custom post type
        
        $args = array(
            'label'               => __( 'intérêts'),
            'description'         => __( 'Tous sur les intérêts'),
            'labels'              => $labels,
            // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
            'supports'            => array( 'title', 'thumbnail' ),
            /* 
            * Différentes options supplémentaires
            */
            'show_in_rest'        => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'interests'),

        );
        
        // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
        register_post_type( 'interests', $args );

    }

    add_action( 'init', 'interest_custom_post_type', 0 );