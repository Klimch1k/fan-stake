<?php
$logo = get_field('acf_header_logo');
$button_1 = get_field('acf_header_navigation_right_icon_button');
$button_2 = get_field('acf_header_navigation_right_button');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="page">
		<header class="header">
			<div class="header__holder">
				<a href="<?php echo home_url(); ?>" class="header__logo">
					<?php if (!empty($logo['url'])) { ?>
						<img width="1" height="1" src="<?php echo esc_url($logo['url']); ?>" alt="">
					<?php } ?>
				</a>
				<div class="header__nav-tablet">
					<?php if (!empty($button_1)) {?>
						<a class="header__messages-link" href="<?php echo esc_url($button_1['url']); ?>" target="<?php echo esc_attr($button_1['target']); ?>">
							<svg width="24" height="24" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.83301 11.6667L16.4997 16.0001L25.1663 11.6667" stroke-width="2.16667" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M3.5 16C3.5 11.9427 3.5 9.91402 4.47373 8.45673C4.89527 7.82586 5.43694 7.28419 6.06782 6.86265C7.52511 5.88892 9.55378 5.88892 13.6111 5.88892H19.3889C23.4462 5.88892 25.4749 5.88892 26.9322 6.86265C27.5631 7.28419 28.1047 7.82586 28.5263 8.45673C29.5 9.91402 29.5 11.9427 29.5 16C29.5 20.0574 29.5 22.086 28.5263 23.5433C28.1047 24.1742 27.5631 24.7159 26.9322 25.1374C25.4749 26.1111 23.4462 26.1111 19.3889 26.1111H13.6111C9.55378 26.1111 7.52511 26.1111 6.06782 25.1374C5.43694 24.7159 4.89527 24.1742 4.47373 23.5433C3.5 22.086 3.5 20.0574 3.5 16Z" stroke-width="2.16667"></path>
							</svg>
						</a>
					<?php } ?>
					<button type="button" class="burger-menu__opener">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21 6H3" stroke="#EAFFF3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M17 12.3087H3" stroke="#EAFFF3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M21 18.3087H3" stroke="#EAFFF3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</button>
				</div>
				<div class="burger-menu__wrapper">
					<nav class="header__nav">
						<?php
						wp_nav_menu([
							'theme_location' => 'header-menu',
							'container' => false,
							'items_wrap' => '<ul class="header__nav-list" id="menu-header">%3$s</ul>',
							'item_class' => 'menu-item header__nav-item',
							'link_class' => 'header__nav-item',
						]);
						?>
						<div class="header__nav-right-part">
							<?php if (!empty($button_1)) { ?>
								<a class="header__messages-link" href="<?php echo esc_url($button_1['url']); ?>" target="<?php echo esc_attr($button_1['target']); ?>">
									<svg width="24" height="24" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.83301 11.6667L16.4997 16.0001L25.1663 11.6667" stroke-width="2.16667" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M3.5 16C3.5 11.9427 3.5 9.91402 4.47373 8.45673C4.89527 7.82586 5.43694 7.28419 6.06782 6.86265C7.52511 5.88892 9.55378 5.88892 13.6111 5.88892H19.3889C23.4462 5.88892 25.4749 5.88892 26.9322 6.86265C27.5631 7.28419 28.1047 7.82586 28.5263 8.45673C29.5 9.91402 29.5 11.9427 29.5 16C29.5 20.0574 29.5 22.086 28.5263 23.5433C28.1047 24.1742 27.5631 24.7159 26.9322 25.1374C25.4749 26.1111 23.4462 26.1111 19.3889 26.1111H13.6111C9.55378 26.1111 7.52511 26.1111 6.06782 25.1374C5.43694 24.7159 4.89527 24.1742 4.47373 23.5433C3.5 22.086 3.5 20.0574 3.5 16Z" stroke-width="2.16667"></path>
									</svg>
								</a>
							<?php } ?>
							<div class="header__login">
								<?php if (!empty($button_2)) { ?>
									<a class="btn btn--light-green" href="<?php echo esc_url($button_2['url']); ?>" target="<?php echo esc_attr($button_2['target']); ?>">
										<?php echo esc_html($button_2['title']); ?>
									</a>
								<?php } ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>