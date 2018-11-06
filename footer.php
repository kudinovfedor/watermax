</div><!-- .page-wrapper end-->

<?php if (is_active_sidebar('footer-widget-area')) : ?>
    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('footer-widget-area'); ?>
            </div>
        </div>
    </div><!-- .pre-footer end-->
<?php endif; ?>

<footer class="footer">
    <div class="container">
        <div class="row footer-row">
            <div class="col-md-8">
                <div class="logo footer-logo">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        $svg = sprintf('<svg class="logo-img" width="195" height="22" fill="#fff" aria-label="%s"><use xlink:href="#logo"></use></svg>', get_bloginfo('name'));

                        $link = sprintf('<a class="logo-link" href="%s">%s</a>', esc_url(home_url('/')), $svg);

                        $span = sprintf('<span class="logo-link">%s</span>', $svg);

                        $html = is_front_page() ? $span : $link;

                        echo $html;
                    } ?>
                </div>
                <div class="copyright footer-copyright">&copy; <?php echo date('Y'); ?>. Все права защищены</div>
            </div>
            <div class="col-md-4 footer-developer text-right">
                <div class="developer ">
                    <?php _e('Developed by', 'brainworks') ?>
                    <a href="https://brainworks.com.ua/" target="_blank">
                        <svg class="svg-icon" width="80" height="49" fill="#fff">
                            <use xlink:href="#developer"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
