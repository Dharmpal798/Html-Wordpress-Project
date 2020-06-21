<!DOCTYPE html>

<html lang="en">



<head>

    <!-- Page Title -->

    <title>Seologizt</title>



    <!-- Meta Data -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="keywords" content="">



    <!-- Favicon -->

    <link rel="shortcut icon" href="favicon.png">



    <!-- Web Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli%7CRubik:400,400i,500,700">



    <!-- ======= Bootstrap CSS ======= -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">



    <!-- ======= Font Awesome CSS ======= -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">



    <!-- ======= Owl Carousel CSS ======= -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/owlcarousel/owl.carousel.min.css">



    <!-- ======= Magnific Popup CSS ======= -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/magnific-popup/magnific-popup.min.css">



    <!-- ======= Main Stylesheet ======= -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">



    <!-- ======= Custom Stylesheet ======= -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">



</head>



<body>

    



    <!-- Header Begin -->
    
    <header class="header header-style-four fixed-top">



        <!-- Header Style One Begin -->

        <div class="fixed header-main style--one">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-3 col-sm-4 col-8">

                        <!-- Logo Begin -->

                        <div class="logo">

                            <a href="<?php echo site_url(); ?>">

                                <img class="default-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" data-rjs="2" alt="">

                                <img class="sticky-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/sticky_logo.png" data-rjs="2" alt="">

                            </a>

                        </div>

                        <!-- Logo End -->

                    </div>



                    <div class="col-lg-9 col-sm-8 col-4">

                        <!-- Main Menu Begin -->

                        <div class="main-menu d-flex align-items-center justify-content-end">

                                    <?php wp_nav_menu(array('theme_location' => 'header', 'menu_class' => 'nav align-items-center', 'container' => ''));  ?>

     
                        </div>

                        <!-- Main Menu ENd -->

                    </div>

                </div>

            </div>

        </div>

        <!-- Header Style One End -->

    </header>

    <!-- Header End -->


