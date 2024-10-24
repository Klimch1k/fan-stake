<?php
$logo = get_field('acf_header_logo');
$copyright = get_field('acf_footer_сopyright');
$text = get_field('acf_footer_text');
?>
<footer class="footer">
    <nav class="footer__nav">
        <?php
        wp_nav_menu([
            'theme_location' => 'header-menu',
            'container' => false,
            'items_wrap' => '<ul id="footer-menu">%3$s</ul>',
            'item_class' => 'menu-item header__nav-item',
            'link_class' => 'header__nav-item',
        ]);
        ?>
    </nav>
    <div class="footer__holder">
        <a href="<?php echo home_url(); ?>" class="footer__logo">
            <?php if (!empty($logo['url'])): ?>
                <img width="1" height="1" src="<?php echo esc_url($logo['url']); ?>" alt="" loading="lazy">
            <?php endif; ?>
        </a>
        <div class="footer__main">
            <nav>
                <ul>
                    <li>
                        <a class="a" href="<?php echo home_url(); ?>/terms-of-use" target="_blank">Terms of use</a>
                    </li>
                    <li>
                        <a class="a" href="<?php echo home_url(); ?>/private-policy" target="_blank">Privacy Policy</a>
                    </li>
                </ul>
            </nav>
            <?php if (!empty($copyright)) { ?>
                <div class="footer__copyright"><?php echo wp_kses_post($copyright); ?></div>
            <?php } ?>
            <?php if (!empty($text)) { ?>
                <div class="footer__text"><?php echo wp_kses_post($text); ?></div>
            <?php } ?>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>