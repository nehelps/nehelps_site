<?php


function nehelps_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/custom-styles.css', array('tailwindcss'));
}
add_action('wp_enqueue_scripts', 'nehelps_enqueue_styles');


function enqueue_custom_fonts() {
    // Preconnect to Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";

    // Enqueue the Google Fonts stylesheet
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Charis+SIL:ital,wght@0,400;0,700;1,400;1,700&family=Gabarito:wght@400..900&display=swap', false);
}

function my_acf_blocks_init() {

    // Check if function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register the hero block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero Section'),
            'description'       => __('A custom hero section block with background image/video, headline, body copy, and CTA buttons.'),
            'render_template'   => 'parts/blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'cover-image',
            'keywords'          => array( 'hero', 'section', 'header' ),
            'supports'          => array(
                'align' => false,
                'mode' => true,
                'jsx' => true, // This allows inline editing
            ),
            'mode'              => 'edit'
        ));

        // Register the left text block.
        acf_register_block_type(array(
            'name'              => 'left-text',
            'title'             => __('Left Text'),
            'description'       => __('A custom hero section block with background image/video, headline, body copy, and CTA buttons.'),
            'render_template'   => 'parts/blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'cover-image',
            'keywords'          => array( 'hero', 'section', 'header' ),
            'supports'          => array(
                'align' => false,
                'mode' => true,
                'jsx' => true, // This allows inline editing
            ),
            'mode'              => 'edit'
        ));
    }
}
add_action('acf/init', 'my_acf_blocks_init');


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Global Site Variables',
        'menu_title'    => 'Global Site Variables',
        'menu_slug'     => 'global-site-variables',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}



