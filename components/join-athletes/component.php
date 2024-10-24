<?php
$image = get_field('acf_join_athletes_background');
$image_url = !empty($image['url']) ? esc_url($image['url']) : esc_url(get_template_directory_uri() . '/images/football-field-scaled.jpg');
$link = get_field('acf_join_athletes_button');
$title = !empty(get_field('acf_join_athletes_title')) ? wp_kses_post(get_field('acf_join_athletes_title')) : '<h2 style="text-align: center">Want to Become a FanStake Athlete?</h2>';
$text = !empty(get_field('acf_join_athletes_text')) ? wp_kses_post(get_field('acf_join_athletes_text')) : '';
?>

<section class="simple-content banner h-parallax" style="background-image: url(<?php echo $image_url; ?>)">
    <div class="banner__container container section-120">
        <div class="title-wrapper">
            <?php echo $title; ?>
            <?php echo $text; ?>
        </div>
        <?php if (!empty($link)) { ?>
            <a class="btn btn--light-green" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
                <?php echo esc_html($link['title']); ?>
            </a>
        <?php } ?>
    </div>
</section>