<?php 
get_header(); 
get_template_part('template-parts/header');
?>

<main>
    <?php get_template_part('template-parts/slider'); ?>

    <section>
        <h2>Latest Posts</h2>
        <?php
        $recent_posts = new WP_Query(['posts_per_page' => 3]);
        if ($recent_posts->have_posts()):
            while ($recent_posts->have_posts()): $recent_posts->the_post();
                get_template_part('template-parts/post-card');
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
