<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Ezreso</title>

    <!-- Core Stylesheet -->
    <?php if(!is_home()) {

        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';

    } ?>

    <?php wp_head() ?>
</head>

    <?php if(is_home()) {
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
                    <?php ezreso_logo(); ?>

                    <!-- Navbar Toggler -->
                     <?php ezreso_navbar_toggler(); ?>
                   
                    <!-- Menu -->
                    <?php ezreso_menu(); ?>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->