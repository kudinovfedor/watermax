<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

<?php
/*

<?php
$args = array(
    'post_type' => 'reviews',
    'publish_status' => 'publish',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'meta_query' => array(
        array(
            'key' => 'review-display',
            'value' => '1',
        )
    ),
);

$query = new WP_Query($args);
if ($query->have_posts()) { ?>
    <div class="review-wrapper">
        <div class="review-list text-center js-reviews">
            <?php while ($query->have_posts()) {
                $query->the_post(); ?>
                <div>
                    <div class="review-item">
                        <div class="review-title"><?php the_title() ?></div>
                        <div class="review-content"><?php the_content() ?></div>
                        <div class="review-client">- <?php echo get_post_meta(get_the_ID(), 'review-client', true);  ?></div>
                        <div class="review-location"><?php echo get_post_meta(get_the_ID(), 'review-location', true);  ?></div>
                    </div>
                </div>
            <?php } ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="review-thumbnails review-nav js-reviews-nav text-center">
            <?php while ($query->have_posts()) {
                $query->the_post(); ?>
                <div class="review-thumbnail"><?php the_post_thumbnail() ?></div>
            <?php } ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

<?php } ?>

<?php echo do_shortcode('[bw-reviews]'); ?>
<?php echo do_shortcode('[bw-last-posts]'); ?>

<div style="padding: 20px; background-color: #1f8e5c;">
    <div class="table-responsive price-wrapper">
        <table class="price-table text-uppercase text-bold">
            <thead>
            <tr>
                <th>Услуга</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Копка колодца</td>
                <td>от <span class="text-size-22">300</span> грн</td>
            </tr>
            <tr>
                <td>Чистка колодца</td>
                <td>от <span class="text-size-22">1300</span> грн</td>
            </tr>
            <tr>
                <td>Копка канализации КС10/9</td>
                <td>от <span class="text-size-22">500</span> грн</td>
            </tr>
            <tr>
                <td>Копка канализации КС15/9</td>
                <td>от <span class="text-size-22">800</span> грн</td>
            </tr>
            <tr>
                <td>Копка канализации КС20/9</td>
                <td>от <span class="text-size-22">1000</span> грн</td>
            </tr>
            <tr>
                <td>Углубление колодца</td>
                <td>от <span class="text-size-22">1600</span> грн</td>
            </tr>
            <tr>
                <td>Копка траншеи</td>
                <td>от <span class="text-size-22">80</span> грн</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="table-responsive price-wrapper">
        <table class="price-table text-uppercase text-bold">
            <thead>
            <tr>
                <th>Размеры кольца</th>
                <th>Стоимость кольца</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>08-7</td>
                <td>от <span class="text-size-22">300</span> грн</td>
            </tr>
            <tr>
                <td>КС10-9</td>
                <td>от <span class="text-size-22">500</span> грн</td>
            </tr>
            <tr>
                <td>КС15-9</td>
                <td>от <span class="text-size-22">800</span> грн</td>
            </tr>
            <tr>
                <td>КС20-9</td>
                <td>от <span class="text-size-22">1200</span> грн</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

 */ ?>

<?php get_template_part('loops/content', 'home'); ?>

<?php get_footer(); ?>
