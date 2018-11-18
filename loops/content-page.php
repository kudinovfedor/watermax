<?php
/**
 * The Page Loop
 * =============
 */
?>



<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php if ((!is_page_template(array('page-landing.php')) && is_front_page()) || (!is_page_template(array('page-landing.php')) && !is_front_page())) : ?>
        <div class="sp-xs-4"></div>
        <h1 class="page-name"><?php the_title() ?></h1>
        <div class="sp-xs-2"></div>
    <?php endif; ?>

    <?php the_content() ?>
    <?php wp_link_pages(); ?>

<?php endwhile; else: ?>
    <?php get_template_part('loops/content', 'none'); ?>
<?php endif; ?>
