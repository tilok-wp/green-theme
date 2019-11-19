<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "green_theme_global";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Green theme' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'v-1.0.1' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Green Theme Options', 'green_theme' ),
        'page_title'           => __( 'Green Theme Options', 'green_theme' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'green_theme' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'green_theme' );
    }

    // Add content after the form.
    // $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'green_theme' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'green_theme' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'green_theme' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'green_theme' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'green_theme' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'green_theme' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Greentheme fields Fields

    // Redux::setSection( $opt_name, array(
    //     'title'      => ( 'Section Active / Inactive / Shorter Options'),
    //     'id'         => 'page_shorter_option',
    //     'desc'       => 'This field use Section Active / Inactive / Shorter Setting',
    //     'icon'       => 'el el-view-mode'
    // ) );
    // Redux::setSection( $opt_name, array(
    //     'title'      => ( 'Header Follow'),
    //     'id'         => 'section_sort__a',
    //     'subsection' => true,
    //     'fields'     => array (
    //         array(
    //             'id'    => 'section_sorter_opt',
    //             'desc'  =>  'Section Sort',
    //             'type'  =>  'sorter',
    //             'options' => array(
    //                 'Active' => array(
    //                     'hero' => 'Hero Section',
    //                     'about' => 'About Section',
    //                     'service' => 'Service Section',
    //                     'counterup' => 'Counter Section',
    //                     'gallery' => 'Gallery Section',
    //                     'claient' => 'Claient Section',
    //                     'testimontal' => 'Testimontal Section',  
    //                 ),
    //                 'Deactive' =>array(
    //                 ),
    //             )       
    //         )
    //     )
    // ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => ( 'Header Options'),
        'id'         => 'header_option',
        'desc'       => 'This field use for header elements',
        'icon'       => 'el el-home'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => ( 'Header Top info'),
        'id'         => 'header_top',
        'subsection' => true,
        'fields'     => array (
            array(
                'id'    => 'header_top_text',
                'desc'  =>  'Header massage text',
                'url'   => true,
                'type'  =>  'editor',
                'default' => 'Email: <a href="mailto:yourmail@mail.com">yourmail@mail.com</a>'      
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => ( 'Logo options'),
        'id'         => 'header_sub',
        'subsection' => true,
        'fields'     => array (
            array(
                'id'    => 'site_logo',
                'desc'  =>  'Upload site logo',
                'url'   => true,
                'type'  => 'media',
                'default' => array (
                    'url'   => get_template_directory_uri ().'/assets/images/logo-1.png',
                )
            )
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => ( 'Text logo option'),
        'id'         => 'text_logo_options',
        'subsection' => true,
        'fields'     => array (
            array(
                'id'    => 'text_logo',
                'desc'  =>  'Logo text input',
                'type'  =>  'text',
                'default' => 'Logo'      
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => ( 'Client carousel Options'),
        'id'         => 'claient_carousel',
        'desc'       => 'This field use for header elements',
        'icon'       => 'el el-th-large'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => ( 'Client carousel images'),
        'id'         => 'claient_carousel_img',
        'subsection' => true,
        'fields'     => array (
            array(
                'id'    => 'claient_carousel_images',
                'desc'  =>  'Input crousel images',
                'url'   => true,
                'type'  =>  'gallery'     
            )
        )
    ) );
    //Footer bottom options
    Redux::setSection( $opt_name, array(
        'title'      => ( 'Footer bottom Options'),
        'id'         => 'footer_option',
        'desc'       => 'This field use for header elements',
        'icon'       => 'el el-bag'
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => ( 'Copywright options'),
        'id'         => 'footer_sub',
        'subsection' => true,
        'fields'     => array (
            array(
                'id'    => 'copywrigt_text',
                'desc'  =>  'Input Copy Wright Text',
                'type'  =>  'editor',
                'default' => ' &copy;2019 Copyright GreenTheme. All right reserved.'
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */
