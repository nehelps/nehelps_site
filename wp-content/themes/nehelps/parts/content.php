<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_singular() ) : ?>
        <?php else : ?>
        <?php endif; ?>
    </header>

    <div class="entry-content">
        <?php
        if ( is_singular() ) {
            the_content();
        } else {
            the_excerpt(); // For archives or index pages, show the excerpt
        }
        ?>
    </div>

    <footer class="entry-footer hidden">
        <span class="posted-on"><?php echo get_the_date(); ?></span>
        <span class="byline"> by <?php the_author_posts_link(); ?></span>
        <span class="comments-link"><?php comments_popup_link(); ?></span>
    </footer>
</article>