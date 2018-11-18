<?php
/**
 * Template Name: Sidebar Left
 **/
?>

<?php get_header(); ?>

<?php if ((!is_page_template(array('page-landing.php')) && is_front_page()) || (!is_page_template(array('page-landing.php')) && !is_front_page())) {

    if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » ');

} ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 hide-on-mobile">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
            <?php get_template_part('loops/content', 'page'); ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
