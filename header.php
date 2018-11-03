<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body(); ?>

<div class="wrapper">
    <?php /*
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <nav class="second-menu">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'second-menu',
                            'container' => false,
                            'menu_class' => 'menu-container',
                            'menu_id' => '',
                            'fallback_cb' => 'wp_page_menu',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 2
                        )); ?>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    Some info here
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    Some info here
                </div>
            </div>
        </div>
    </div>
    */ ?>

    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">

                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>

    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu">
            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            <?php wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => false,
                'menu_class' => 'menu-container',
                'menu_id' => '',
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 3
            )); ?>
        </nav>
    <?php } ?>

    <div class="page-wrapper container">

        <div class="nav-mobile-header">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <div class="logo"><?php get_default_logo_link(); ?></div>
        </div>

        <?php /*

        <?php get_default_logo_link(); ?>

        <?php if (function_exists('pll_the_languages')) { ?>
            <ul class="lang">
                <?php pll_the_languages(array(
                    'show_flags' => 1,
                    'show_names' => 0,
                    'hide_if_empty' => 0,
                    'display_names_as' => 'name'
                )); ?>
            </ul>
        <?php } ?>

        <?php if (has_social()) { ?>
            <ul class="social">
                <?php foreach (get_social() as $social) { ?>
                    <li class="social-item">
                        <a href="<?php echo esc_attr(esc_url($social['url'])); ?>" class="social-link" target="_blank">
                            <i class="<?php echo esc_attr($social['icon']); ?>" aria-hidden="true"
                               aria-label="<?php echo esc_attr($social['text']); ?>"></i>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>

        <?php if (has_messengers()) { ?>
            <ul class="messenger">
                <?php foreach (get_messengers() as $name => $messenger) { ?>
                    <li class="messenger-item">
                        <a class="messenger-link messenger-<?php echo esc_attr($name) ?>"
                           href="tel:<?php echo esc_attr(get_phone_number($messenger['tel'])); ?>" target="_blank">
                            <i class="<?php echo esc_attr($messenger['icon']); ?>" aria-hidden="true"
                               aria-label="<?php echo esc_attr($messenger['text']); ?>"></i>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>

        <?php if (has_phones()) { ?>
            <ul class="phone">
                <?php foreach (get_phones() as $phone) { ?>
                    <li class="phone-item">
                        <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>" class="phone-number">
                            <?php echo esc_html($phone); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>

        <?php
        $email = get_theme_mod('bw_additional_email');
        $address = get_theme_mod('bw_additional_address');
        if (!empty($email)) { ?>
            <a href="mailto:<?php echo esc_attr($email); ?>">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <?php echo esc_html($email); ?>
            </a>
        <?php }
        if (!empty($address)) { ?>
            <span>
                <b><?php _e('Address', 'brainworks'); ?>:</b>
                <?php echo esc_html($address); ?>
            </span>
        <?php } ?>

        <button type="button" class="button-medium <?php the_lang_class('js-call-back'); ?>">
            <?php _e('Call back', 'brainworks'); ?>
        </button>

        <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
        <h3><?php bloginfo('description'); ?></h3>
        <h3><?php bloginfo('admin_email'); ?></h3>

        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key' => 'on-front',
                    'value' => 'yes',
                ),
            )
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) { ?>
            <div class="container">
                <div class="row advert-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <section id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 advert-item'); ?>>
                            <?php if (has_post_thumbnail()) { ?>
                                <figure class="advert-preview">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'advert-thumbnail')); ?>
                                    </a>
                                </figure>
                            <?php } ?>
                            <h3 class="advert-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="advert-excerpt"><?php the_excerpt(); ?></div>
                            <div class="text-right">
                                <a class="button-small advert-link" href="<?php the_permalink(); ?>">
                                    <?php _e('Continue reading', 'brainworks'); ?>
                                </a>
                            </div>
                        </section>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        <?php } ?>

        <?php echo do_shortcode('[bw_advert count=3 class=advert]'); ?>

        */ ?>
