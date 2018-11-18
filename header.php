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

    <header class="header">
        <div class="container">
            <div class="row header-row">
                <div class="col-md-7">
                    <div class="logo header-logo">
                        <?php if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            $svg = sprintf('<svg class="logo-img" width="195" height="22" fill="#333" aria-label="%s"><use xlink:href="#logo"></use></svg>', get_bloginfo('name'));

                            $link = sprintf('<a class="logo-link" href="%s">%s</a>', esc_url(home_url('/')), $svg);

                            $span = sprintf('<span class="logo-link">%s</span>', $svg);

                            $html = is_front_page() ? $span : $link;

                            $desc = '<span class="logo-desc">Работаем без выходных</span>';

                            $html .= $desc;

                            echo $html;
                        } ?>
                    </div>
                </div>
                <div class="col-md-5 text-right">
                    <?php if (has_social()) { ?>
                        <ul class="social header-social">
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
                    <div class="d-inline-block v-align-middle text-center">
                        <?php if (has_phones()) { ?>
                            <ul class="phone header-phone">
                                <?php
                                $phones = get_phones();
                                foreach ($phones as $index => $phone) { ?>
                                    <?php if ($index === 0) { ?>
                                        <li class="phone-item">
                                            <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>"
                                               class="phone-number">
                                                <?php echo esc_html($phone); ?>
                                            </a>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            <ul class="sub-phone">
                                                <?php foreach ($phones as $key => $sub_phone) { ?>
                                                    <?php if ($key !== 0) { ?>
                                                        <li class="phone-item">
                                                            <a href="tel:<?php echo esc_attr(get_phone_number($sub_phone)); ?>"
                                                               class="phone-number">
                                                                <?php echo esc_html($sub_phone); ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                    <?php continue; ?>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                    <?php continue; ?>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        <button type="button" class="header-callback <?php the_lang_class('js-callback'); ?>">
                            <?php _e('Call back', 'brainworks'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu">
            <div class="container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-nav',
                    'container' => false,
                    'menu_class' => 'menu-container menu-list',
                    'menu_id' => '',
                    'fallback_cb' => 'wp_page_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 3
                )); ?>
                <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            </div>
        </nav>
    <?php } ?>

    <div class="page-wrapper container">

        <?php /*
        <button class="button-small">Continue reading</button>
        <button class="button-medium one-click">Continue reading</button>
        <button class="button-large">Continue reading</button>
        <button class="button-small button-secondary">Continue reading</button>
        <button class="button-medium button-secondary">Continue reading</button>
        <button class="button-large button-secondary">Continue reading</button>
        */ ?>

        <div class="nav-mobile-header">
            <div class="logo">
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    $svg = sprintf('<svg class="logo-img" width="195" height="22" fill="#333" aria-label="%s"><use xlink:href="#logo"></use></svg>', get_bloginfo('name'));

                    $link = sprintf('<a class="logo-link" href="%s">%s</a>', esc_url(home_url('/')), $svg);

                    $span = sprintf('<span class="logo-link">%s</span>', $svg);

                    $html = is_front_page() ? $span : $link;

                    echo $html;
                } ?>
            </div>
            <button class="hamburger js-hamburger" type="button" tabindex="0">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
