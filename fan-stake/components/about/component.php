  <?php
  $image = get_field('acf_about_image');
  $text = get_field('acf_about_text');
  /*

  Fixs:
  1) background-color not work
  2) img bad worked
  3) need check fields for empty
  4) remove garbage (<p>&nbsp;</p>)

  */

  $image_url = !empty($image['url']) ? esc_url($image['url']) :
    get_template_directory_uri() . '/images/about.png';

  $about_text = !empty($text) ? wp_kses_post($text) : ' ';
  ?>


  <section class="about dark-grey-section">
    <div class="about__container container">
      <img fetchpriority="high" decoding="async" class="aligncenter wp-image-2341 size-full" src="<?php echo esc_url($image['url']); ?>" alt="" width="1330" height="200">
      <?php echo $about_text; ?>
    </div>
  </section>