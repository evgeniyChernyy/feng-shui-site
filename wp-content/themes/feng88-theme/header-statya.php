<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Студия Гармония</title>

    <?php wp_head(); ?>
</head>

<body>
<div class="overflow-container">
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="allpage-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="logo-container">
                <a class="navbar-brand site-logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('url');?>/wp-content/uploads/2020/08/logo.svg" alt="Студия фен-шуй Гармония"></a>
            </div>
            <div class="slogan-container">
                <h2>Студия фэн-шуй <br> <span>Гармония</span></h2>
            </div>
            <div class="phone-container">
                <ul>
                    <li>
                        <a href="tel:+79255181788">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                             id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480"
                             style="enable-background:new 0 0 480 480;" xml:space="preserve">
                            <path d="M256,128c-8.832,0-16,7.168-16,16c0,8.832,7.168,16,16,16c35.296,0,64,28.704,64,64c0,8.832,7.168,16,16,16    c8.832,0,16-7.168,16-16C352,171.072,308.928,128,256,128z"/>
                                    <path d="M256,64c-8.832,0-16,7.168-16,16c0,8.832,7.168,16,16,16c70.592,0,128,57.408,128,128c0,8.832,7.168,16,16,16    c8.832,0,16-7.168,16-16C416,135.776,344.224,64,256,64z"/>
                                    <path d="M256,0c-8.832,0-16,7.168-16,16c0,8.832,7.168,16,16,16c105.888,0,192,86.112,192,192c0,8.832,7.168,16,16,16    c8.832,0,16-7.168,16-16C480,100.48,379.488,0,256,0z"/>
                                    <path d="M432,352c-46.464,0-90.72-10.112-131.52-30.048c-3.84-1.92-8.256-2.144-12.256-0.736c-4.032,1.408-7.328,4.352-9.184,8.16    l-25.152,52.064C188.8,345.12,134.912,291.264,98.624,226.176l52.032-25.216c3.84-1.856,6.752-5.152,8.16-9.184    c1.376-4,1.12-8.416-0.768-12.256C138.112,138.72,128,94.464,128,48c0-8.832-7.168-16-16-16H16C7.168,32,0,39.168,0,48    c0,238.208,193.792,432,432,432c8.832,0,16-7.168,16-16v-96C448,359.168,440.832,352,432,352z"/>
                            </svg><span>+7 (925) 518 17 88</span></a>
                    </li>
                    <li>
                        <a href="mailto:fensh88@gmail.com">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 230.17 230.17" style="enable-background:new 0 0 230.17 230.17;" xml:space="preserve">
                            <path d="M230,49.585c0-0.263,0.181-0.519,0.169-0.779l-70.24,67.68l70.156,65.518c0.041-0.468-0.085-0.94-0.085-1.418V49.585z"/>
                            <path d="M149.207,126.901l-28.674,27.588c-1.451,1.396-3.325,2.096-5.2,2.096c-1.836,0-3.672-0.67-5.113-2.013l-28.596-26.647   L11.01,195.989c1.717,0.617,3.56,1.096,5.49,1.096h197.667c2.866,0,5.554-0.873,7.891-2.175L149.207,126.901z"/>
                            <path d="M115.251,138.757L222.447,35.496c-2.427-1.443-5.252-2.411-8.28-2.411H16.5c-3.943,0-7.556,1.531-10.37,3.866   L115.251,138.757z"/>
                            <path d="M0,52.1v128.484c0,1.475,0.339,2.897,0.707,4.256l69.738-67.156L0,52.1z"/>
                        </svg>
                        <span>fensh88@gmail.com</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu([
                'theme_location'  => 'top',
                'menu'            => 'MainMenu',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarResponsive',
                'menu_class'      => 'navbar-nav ml-auto',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ]); ?>
        </div>
    </nav>
</header>
    <div class="hello-block header-text">
        <div class="banner-text-container">
        </div>
        </div>