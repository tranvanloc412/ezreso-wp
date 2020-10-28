<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Ezreso</title>

    <!-- Core Stylesheet -->
    <?php if(!is_front_page()) {
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
    } ?>

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">



    <?php wp_head() ?>
</head>

    <?php if(is_front_page()) {
        echo '<body class="light-version page-home">';
    } else {
        echo '<body class="light-version page-road-map">';
    } ?>

    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

     <!-- ##### Header Area Start ##### -->
    <header class="header-area fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container breakpoint-off dark left">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="<?php echo home_url(); ?>"> EZRESO </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li><a href="road-map">Road map</a></li>
                            </ul>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->