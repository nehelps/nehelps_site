<?php get_template_part('parts/header'); ?>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part('parts/content');
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>

<?php get_template_part('parts/footer'); ?>