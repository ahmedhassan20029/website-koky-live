<!DOCTYPE html>
<html dir='rtl' lang='ar'>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php bloginfo('name'); ?>
            <?php wp_title('|', 'true', ''); ?>
        </title>
        <link rel="bingback" href="<?php bloginfo('bingback_url') ?>"/>
        <link rel="icon" href="<?php echo get_template_directory_uri() . '/img/logo.png'?>" sizes="32x32" type="image/png">
        <?php wp_head(); ?>
    </head>
    <body>
    <section class='navbarx' id='navbar-xj'>
        <div class='container'>
            <div class='row'>
                <div class='logo col-4 col-lg-5'>
                    <a href="<?php bloginfo('url') ?>">
                            <img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="">
                    </a>
                </div>
                <div class='poper col-8 col-lg-7'>
                    <!--start navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="nav-head">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php by_bootstrap_menu() ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>     
