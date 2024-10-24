<?php
$image = get_field('acf_hero_background');
$image_url = !empty($image['url']) ? esc_url($image['url']) : esc_url(get_template_directory_uri() . '/images/Bg.png');
$hero_text = !empty(get_field('acf_hero_text')) ? wp_kses_post(get_field('acf_hero_text')) : '<h1 style="text-align: center">Where Fans and Athletes <span style="color: #008000"><strong>WIN</strong></span> Together</h1>';
?>

<section class="hero h-parallax" style="background-image: url(<?php echo $image_url; ?>)">
  <div class="hero__container container section-42">
    <?php echo $hero_text; ?>
  </div>
</section>