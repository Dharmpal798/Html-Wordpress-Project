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
	
	<style>
	
		.header-first {
		   background-color: #2F383D;
		   transition: all 0.3s linear 0.1s; 
		   width: 100%;
		}
		
		.header-first ul {
			width: 100%;
			padding: 6px 0;
			padding-right: 15px;
			margin: 0;
			text-align: right;
		}
		
		.header-first ul li {
			display: inline-block;
    		padding-right: 20px;
		}
		
		.header-first ul li a {
			color: #ccc;
		}
		
		.header-first ul li a > i {
			padding-right: 5px;
		}
		
		.testimonials_one .testimonial-content {
			text-align: center; 
		}
		
		.testimonials_one .testimonial-slider .single-testimonial-slide .testimonial-content p {
			font-size: 16px;
			font-style: normal;
		}
		
		.testimonials_one .testimonial-slider .owl-nav {
			left: 0;
			width: 100%;
		}
		
		.testimonials_one .owl-carousel .owl-nav button.owl-prev {
			margin-right: auto; 
		}
		
		.testimonials_one .owl-carousel .owl-nav button.owl-next {
			float: right; 
    		margin-left: auto;
		}
		
		.testimonials_one .section-title {
			margin-bottom: 0;
		}
		
		.testimonials_one .owl-carousel .owl-nav button {
			font-size: 0px;
			height: 40px;
			width: 40px;
			background-image: url(https://seologizt.com/wp-content/uploads/2020/05/left_icons.png);
			background-size: 20px;
			background-position: center;
			background-repeat: no-repeat;
			line-height: 40px;
			bottom: 60px;
			border-radius: 50%;
			transition: 0.5s;
		}
		
		.testimonials_one .owl-carousel .owl-nav button:hover {
		    background-color: #eee;
			transition: 0.5s;
		}
		
		.testimonials_one .owl-carousel .owl-nav button:hover:before {
		    border: 2px solid #eee !important; 
		}
		
		.testimonials_one .owl-carousel .owl-nav button.owl-next {
		    transform: rotate(180deg);
		}
		
		.testimonials_one .owl-carousel .owl-nav button:before {
			border: 1px solid;
			border-radius: 50%;
			border: 2px solid #ddd !important;
		}
		
		.testimonials_one .owl-carousel .owl-nav button:after {
			width: 1px;
			background-color: transparent;
		}
		
		.testimonials_one .section-title h2 {
/* 			font-size: 40px; */
			margin-top: 30px;
		}
		
		.testimonials_one .section-title h3 {
			position: relative;
		}
		
		.testimonials_one .section-title h3:before {
			content: "";
			position: absolute;
			top: 12px;
			left: 38%;
			background-color: #FF0099;
			width: 50px;
			height: 2px;
		}
		
		.testimonials_one .testimonial-slider .single-testimonial-slide .testimonial-content h4 span {
			padding-left: 10px;
		}
		
		.testimonials_one.section-pattern.pb-120 { 
/* 			padding-bottom: 60px; */
		}
		
		
		
		
	
	</style>



</head>



<body>

    


	
	

    <!-- Header Begin -->
    
    <header class="header header-style-four fixed-top">
    


        <!-- Header Style One Begin -->

        <div class="fixed header-main style--one">
			
			<div class="header-first">
				<div class="center-wr">
					<div class="headers"> 
						<div class="header-social">
							<div class="contact_set">
									<ul>
										<li class="info_mail">
											<a href="mailto:bizidea@gmail.com">
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<span>bizidea@gmail.com</span>
											</a>
									 	</li>
								 	    <li class="hr_contact">
											<a href="#">
												<i class="fa fa-phone" aria-hidden="true"></i>
												<span>+0096667331</span>
											</a>
										</li>
									</ul> 
								</div>
						</div> 
					</div> 
				</div>
		
			</div> 

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


