<section class="min-h-screen relative z-20">
<div class="absolute inset-0 bg-black bg-opacity-80 pointer-events-none z-10"></div>
<?php if( get_field('background_type') == 'image' ): ?>
    <span>background image</span>
    
<?php elseif( get_field('background_type') == 'video' ): ?>
    <video autoplay muted loop class="absolute inset-0 object-cover w-full h-full z-9">
        <source src="<?php the_field('background_video'); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
<?php endif; ?>

<div class="max-w-screen-2xl mx-auto pt-scale-17 relative z-20 px-scale-8 md:px-scale-10 md:px-scale-10 lg:px-scale-13 ">

    <div class="2xl:w-8/12">
        <h1 class="text-scale-8 md:text-scale-10 lg:text-scale-12 text-generosity font-extrabold leading-none mb-scale-8"><?php the_field('headline'); ?></h1>
        <p class="text-white font-serif text-scale-5 md:text-scale-6 leading-normal mb-scale-10"><?php the_field('body_copy'); ?></p>

    <?php if( have_rows('cta_buttons') ): ?>
        <div>
            <?php while( have_rows('cta_buttons') ): the_row(); ?>
                <?php
                $link = get_sub_field('button_link');
                $button_style = get_sub_field('button_style');
                $classes = ''; // Initialize an empty string for classes

                // Conditional statements to set classes based on button style
                if( $button_style == 'primary' ) {
                    $classes = 'relative text-scale-5 md:text-scale-6 text-generosity font-serif border-generosity italic primary-btn pr-scale-6';
                } elseif( $button_style == 'secondary' ) {
                    $classes = 'class-e class-f class-g';
                } elseif( $button_style == 'tertiary' ) {
                    $classes = 'class-h class-i class-j';
                }

                if( $link ):
                    $url = $link['url'];
                    $title = $link['title'];
                    $target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>" class="<?php echo esc_attr($classes); ?>">
                        <?php echo esc_html($title); ?>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>
</div>
</section>
