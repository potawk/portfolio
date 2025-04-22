<!-- ヘッダーパーツ -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<div class="height-wrap">
	<header class="header">
		<div class="header__wrap">
			<?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
			<<?php echo $html_tag; ?> class="header__logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri() ?>/img/common/logo.svg" alt="My Work">
				</a>
			</<?php echo $html_tag; ?>>
			<nav>
				<ul class="header__items">
					<li class="header__item"><a href="<?php echo esc_url(home_url('/category/works/')); ?>" class="header__item-text">WORKS</a></li>
					<li class="header__item"><a href="<?php echo esc_url(home_url('/')); ?>#about" class="header__item-text">ABOUT</a></li>
					<li class="header__item"><a href="<?php echo esc_url(home_url('/')); ?>#services" class="header__item-text">SERVICES</a></li>
					<li class="header__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="header__item-text">CONTACT</a></li>
				</ul>
			</nav>
			<div class="hamburger-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav id="hamburger-navigation">
				<ul class="sections">
					<li class="hamburger-menu-section">
						<a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
					</li>
					<li class="hamburger-menu-section">
						<a href="<?php echo esc_url(home_url('/category/works/')); ?>">WORKS</a>
					</li>
					<li class="hamburger-menu-section">
						<a href="<?php echo esc_url(home_url('/')); ?>#about">ABOUT</a>
					</li>
					<li class="hamburger-menu-section">
						<a href="<?php echo esc_url(home_url('/')); ?>#services">SERVICES</a>
					</li>
					<li class="hamburger-menu-section">
						<a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>