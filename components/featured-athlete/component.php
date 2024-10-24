<?php
$image = get_field('acf_featured_athlete_image');
$image_back = get_field('acf_featured_athlete_image_back');
$link = get_field('acf_athlete_card_button');

$title = !empty(get_field('acf_athlete_card_title')) ? get_field('acf_athlete_card_title') : '<h2 class="featured-athlete__title">Featured Athlete</h2>';
$card_text = !empty(get_field('acf_athlete_card_text')) ? get_field('acf_athlete_card_text') : ' ';
$link_url = !empty($link['url']) ? $link['url'] : '';
$link_title = !empty($link['title']) ? $link['title'] : '';
$link_target = !empty($link['target']) ? $link['target'] : '_blank';

?>
<section class="featured-athlete">
    <div class="featured-athlete__container container">
        <img decoding="async" width="498" height="689" src="<?php echo esc_url($image['url'] ?? get_template_directory_uri() . '/images/featured-athlete-1'); ?>" class="featured-athlete__athlete-image" alt="">
        <img decoding="async" src="<?php echo esc_url($image_back['url'] ?? get_template_directory_uri() . '/images/green.svg'); ?>" alt="background" class="featured-athlete__athlete-bg-image">
        <div class="featured-athlete__main-wrapper">
            <?php echo $title;
            ?>
            <div class="featured-athlete__main">
                <div class="featured-athlete__about">
                    <?php echo wp_kses_post($card_text);
                    ?>
                </div>
                <?php if (!empty($link_url)) { ?>
                    <a class="btn btn--light-green" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>