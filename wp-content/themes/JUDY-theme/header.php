<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="header_nav inner">
            <ul class="header_nav_list">
                <li><a href="<?php echo esc_url(home_url("/company/")); ?>"></a>会社概要<br><span>Company</span></li>
                <li><a href="<?php echo esc_url(home_url("/requirements/")); ?>"></a>募集要項<br><span>Requirements</span></li>
                <li><a href="<?php echo esc_url(home_url("/welfare/")); ?>"></a>数字で見る<br><span>Welfare</span></li>
                <li><a href="<?php echo esc_url(home_url("/entry/")); ?>"></a>エントリー<br><span>Entry</span></li>
            </ul>
            <div class="header_nav_img"><a href="<?php echo esc_url(home_url()); ?>"></a><img src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" alt=""></div>
        </nav>
    </header>