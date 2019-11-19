<?php 
    function green_theme_custom_post(){
        register_post_type('slider', array(
            'labels' => array(
                    'name'=> 'Hero Slider',
                    'menu_name' => 'Slider Item',
                    'all_items' =>'All Slider item',
                    'add_new' => 'Add New Slider content',
                    'add_new_item' => 'Add New Slider Item',
                                        
            ),
            'public' => true,
            'menu_icon'   => 'dashicons-slides',
            'supports'=>array(
                'title','revisions','page-attributes','editor','thumbnail'
            )
        ));

        register_post_type('services', array(
            'labels' => array(
                    'name'=> 'services Items',
                    'menu_name' => 'service Item',
                    'all_items' =>'All services content',
                    'add_new' => 'Add New services item',
                    'add_new_item' => 'Add New services content Item'
                    
            ),
            'public' => true,
            'menu_icon'   => 'dashicons-rest-api',
            'supports'=>array(
                'title','revisions','editor','thumbnail','custom-fields','page-attributes'
            )
        ));

        register_post_type('portfolio', array(
            'labels' => array(
                    'name'=> 'Portfolio items',
                    'menu_name' => 'Portfolio Menu',
                    'all_items' =>'All portfolioero items',
                    'add_new' => 'Add New portfolio item',
                    'add_new_item' => 'Add New portfolio Item',
                    
            ),
            'public' => true,
            // 'taxonomies' => array ('category'),
            'menu_icon'   => 'dashicons-layout',
            'supports'=>array(
                'title', 'thumbnail','page-attributes','editor'
            )
        ));
        register_taxonomy('portfolio_catagory','portfolio',
        array(
            'labels' =>array(
                'name' => 'Portfolio Catagory',
                'add_new_item' => 'Add New portfolio catagory'
            ),
            'hierarchical' => true,
            'show_admin_column' => true
        ));

        // register_post_type('claient-logo', array(
        //     'labels' => array(
        //             'name'=> 'Claient Content',
        //             'menu_name' => 'Claient Item',
        //             'all_items' =>'All Claient',
        //             'add_new' => 'Add New Claient Logo',
        //             'add_new_item' => 'Add New Claient Logo Item'
                    
        //     ),
        //     'public' => true,
        //     'supports'=>array(
        //         'title','revisions','thumbnail'
        //     )
        // ));
        // register_post_type('testimonial', array(
        //     'labels' => array(
        //             'name'=> 'Testimonial Content',
        //             'menu_name' => 'Testimonial Item',
        //             'all_items' =>'All Testimonial',
        //             'add_new' => 'Add New Testimonial',
        //             'add_new_item' => 'Add New Testimonial Item',
        //     ),
        //     'public' => true,
        //     'supports'=>array(
        //         'title','revisions','thumbnail','custom-fields','page-attributes'
        //     )
        // ));

        // register_taxonomy(
        //     'gallery_cat',
        //     'galerrys',
        //     array(
        //         // 'label' => 'Gallery Category'
        //         'labels' => array(
        //             'name' => 'Galerry Category ',
        //             'add_new_item' => 'Add Galerry Item Category ',

        //         ),
        //         'hierarchical' => true,
        //         'show_admin_column' => true,
        //     )
        // );

        // register_taxonomy(
        //     'gallery_tag',
        //     'galerrys',
        //     array(
        //         // 'label' => 'Gallery Category'
        //         'labels' => array(
        //             'name' => 'Galerry Tag ',
        //             'add_new_item' => 'Add Galerry Item Tag ',

        //         ),
        //         'hierarchical' => false,
        //         'show_admin_column' => true,
        //     )
        // );
    }
    add_action('init','green_theme_custom_post');

   