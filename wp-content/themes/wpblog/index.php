<?php 
get_header(); 
?>
<main>
    <h1>This is index of Blog</h1>
    <?php
    if (have_posts()):
        while (have_posts()): the_post();
            get_template_part('template-parts/post-card');
        endwhile;
    else:
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
