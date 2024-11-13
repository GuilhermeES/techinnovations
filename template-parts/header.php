<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title(); ?></title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <main class="main">
        <header class="header">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo get_home_url() ?>">Tech Innovations</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <?php wp_nav_menu(array(
                                'container' => false,
                                'menu_class' => 'navbar-nav',
                                'add_li_class' => 'nav-link',
                                'theme_location' => 'header',
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>