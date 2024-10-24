  <?php
    $form_id = get_field('acf_contact_form');
    ?>

  <section class="subscription light-grey-section">
      <div class="subscription__container section-120 container">
          <div class="subscription__title-wrapper">
              <?php the_field('acf_sign_up_title'); ?>
          </div>
          <div class="subscription__form-wrapper">
              <div id="contact-form" class="contact-form">
                  <span class="wpcf7-form-control-wrap" data-name="email">
                      <?php echo do_shortcode('[contact-form-7 id="b875d46" title="Contact form 1"]'); ?>
                  </span>
                  <span class="wpcf7-spinner"></span>
                  <div class="wpcf7-response-output" aria-hidden="true"></div>
              </div>
          </div>
      </div>
      </div>
  </section>