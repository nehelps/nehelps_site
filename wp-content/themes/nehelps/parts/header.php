<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
// Get the logo, alt text, and link from the ACF site settings field group
$logo = get_field('gsv-logo', 'option');
$logo_link = get_field('gsv-logo_link', 'option');

// Extract the necessary components from the logo link array
$logo_url = $logo_link['url'];
$logo_target = $logo_link['target'] ? $logo_link['target'] : '_self'; // Default to '_self' if no target is set
?>

<header class="absolute top-0 left-0 w-full z-50">
    <div class="max-w-screen-2xl mx-auto pt-scale-10 px-scale-8 md:px-scale-10 md:px-scale-10 lg:px-scale-13">
        <div>
        <?php if( $logo && $logo_url ): ?>
            <a href="<?= esc_url($logo_url); ?>" target="<?= esc_attr($logo_target); ?>" class="inline-block">
                <img class="max-w-scale-13 md:max-w-scale-14" src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>" />
            </a>
        <?php endif; ?>
        <!-- Navigation goes here -->
        </div>
    </div>
</header>