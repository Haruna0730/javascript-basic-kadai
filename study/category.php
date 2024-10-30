
<?php get_header(); ?>

<div id="container" class="wrapper">
    <main>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="text"><?php the_content(); ?></div>
                </article>
            <?php endwhile; ?>

        <?php else : ?>
            <p><?php esc_html_e('No posts found', 'your-theme-text-domain'); ?></p>
        <?php endif; ?>
    </main>

</div>

<?php get_footer(); ?>

