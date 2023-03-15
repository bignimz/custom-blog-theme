<?php 

// Add Theme Support

function follownimrod_theme_support() {

    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'follownimrod_theme_support');


// Register Menus
function follownimrod_register_menus() {
   
    $locations = array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu'
    );
    register_nav_menus($locations);
}

add_action('init', 'follownimrod_register_menus');



// Register Styles
function follownimrod_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('follownimrod-css', get_template_directory_uri() . "/assets/css/style.css", ['follownimrod-bootstrap'], $version, 'all');
    wp_enqueue_style('follownimrod-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css", [], '5.3.0', 'all');
    wp_enqueue_style('follownimrod-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", '5.13.0', 'all');

    // Scripts
    wp_enqueue_script('follownimrod-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], '3.4.1', 'all', true);
    wp_enqueue_script('follownimrod-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', [], '5.3.0', 'all', true);
    wp_enqueue_script('follownimrod-mainjs', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', 'all', true);

}

add_action('wp_enqueue_scripts', 'follownimrod_register_styles');

// Register Scripts
// function follownimrod_register_scripts() {

//     wp_enqueue_script('follownimrod-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], '3.4.1', 'all', true);
//     wp_enqueue_script('follownimrod-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', [], '5.3.0', 'all', true);
//     wp_enqueue_script('follownimrod-mainjs', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', 'all', true);

// }

// add_action('wp_enqueue_scripts', 'follownimrod_register_scripts');

?>

