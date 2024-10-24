<?php

/* Template Name: Main Template */


get_header();
?>

<main class="page_main">
    <?php
    get_template_part('components/hero/component');
    get_template_part('components/about/component');
    get_template_part('components/featured-athlete/component');
    get_template_part('components/how-it-works/component');
    get_template_part('components/join-athletes/component');
    get_template_part('components/sign-up/component');

    ?>
</main>

<?php

get_footer();
