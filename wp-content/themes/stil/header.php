<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="yandex-verification" content="ac85ef401c21509e" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<meta name="keywords" content="<?php the_field('ключевые_слова'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <div class="wrap hor-wrap dis-flex align-items-center">
        <div class="col-3-6">
            <nav class="header-nav">
                <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
            </nav>
        </div>
        <div class="col-3-6 text-center">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" class="margin-b-20">
        </div>
        <div class="col-3-6">
            
        </div>
    </div>
    <div class="wrap hor-wrap header-cat">
        <?php echo do_shortcode('[widget id="nav_menu-3"]'); ?>
    </div>
</header>