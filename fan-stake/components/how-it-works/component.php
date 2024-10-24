<?php
$items = get_field('acf_how_it_works_cards');
$link = get_field('acf_how_it_works_button');
$title = !empty(get_field('acf_how_it_works_title')) ? get_field('acf_how_it_works_title') : '<h2 style="text-align: center">How It Works</h2>';
$text_bottom =
    !empty(get_field('acf_how_it_works_text_bottom')) ? get_field('acf_how_it_works_text_bottom') : '<p>FanStake allows fans to invest in an athletes futures earnings, sharing in their success. Like venture capital for startups, FanStake identifies promising sports stars, offering fans a chance to invest in their careers. FanStake gives fans a unique opportunity to back the next big star and share in their earnings.
Like investments in fine art, music royalties, and similar alternative investment strategies, FanStake now allows fans to be both emotionally and financially involved with their favorite athlete.
FanStake will provide diversified, professionally managed strategies across a wide spectrum of athletes across all collegiate sports.
Investors in FanStake can share in future earnings and contract signings and receive monthly cash flow by showing support for their selected athlete offering.</p>';
?>

<section class="how-it-works dark-grey-section" id="how-it-works">
    <div class="how-it-works__container container section-42">
        <div class="title-wrapper">
            <?php echo wp_kses_post($title); ?>
        </div>
        <div class="how-it-works__list">
            <?php
            if (!empty($items)) {
                foreach ($items as $item) {
                    $image = $item['acf_how_it_works_cards_image'];
                    $text = $item['acf_how_it_works_cards_text'];
            ?>
                    <div class="how-it-works__item">
                        <div class="how-it-works__item-image">
                            <img decoding="async" width="1" height="1" src="<?php echo esc_url($image['url']); ?>" class="" alt="">
                        </div>
                        <div class="how-it-works__item-info">
                            <?php echo esc_html($text); ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="how-it-works__text-wrapper">
            <?php echo wp_kses_post($text_bottom); ?>
        </div>
        <?php if (!empty($link)) {
        ?>
            <a class="btn btn--light-green" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
                <?php echo esc_html($link['title']); ?>
            </a>
        <?php } ?>
    </div>
</section>