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

		.header .header-main.style--one .main-menu .nav > li:last-child {
			display: none;
		}

		.banner.section-pattern.bg-img {
			background-image: url(https://seologizt.com/wp-content/uploads/2020/05/banner-bg.png) !important; 
			min-height: 750px;
			background-size: cover; 
			background-position: center;
		    /*padding-top: 150px;*/
		}

		.banner.section-pattern.bg-img .banner-slider .banner-image img {
		    width: auto !important;
		    max-width: 450px;
		}

		.banner.section-pattern.bg-img .banner-content h1 {
		    font-size: 45px;
		    line-height: 50px;
		}

		.header .header-main.sticky .header-first {
			display: none; 
		}

		.header .header-main.sticky .main-menu.d-flex {    
			max-height: 60px; 
		}
	
		.header-first {
		   background-color: #f1f1f1;
		   transition: all 0.3s linear 0.1s; 
		   width: 100%;
		}
		
		.header-first ul {
			width: 100%;
			padding: 3px 0; 
			padding-right: 15px;
			margin: 0;
			text-align: right;
		}
		
		.header-first ul li {
			display: inline-block;
    		padding-right: 20px;
		}

		.header-first ul li i {
			font-size: 14px;
		}
		
		.header-first ul li a {
			color: #48454c;
    		font-size: 13px; 

		}
		
		.header-first ul li a > i {
			padding-right: 5px;
		}

		.header-first ul li .has-search .form-control {
		    padding-left: 2.375rem; 
		}

		.header-first ul li .form-group {
		    max-width: 200px;
		    margin-bottom: 0px;
		    position: relative;
		    display: none;
		}

		.header-first ul li .has-search .form-control-feedback {
	        position: absolute;
		    top: -5px;
		    left: 10px;
		    z-index: 2;
		    display: block;
		    line-height: 2.375rem;
		    text-align: center;
		    pointer-events: none;
		    color: #aaa;
		}

		.header-first ul li .has-search .form-control { 
			display: block;
		    width: 100%;
		    height: 28px;
		    font-size: 14px;
		    line-height: 20px;
		    color: #495057;
		    background-color: #f1f1f1;
		}

		.header-first .first_left ul { 
			/*padding-right: auto;*/
			padding-left: 30px;
			text-align: left; 
		}

		.header-first .first_left ul li span { 	
		    color: #48454c;
		    font-size: 13px;
		}

		.header-first .first_left ul li a {
			padding-right: 2px;
    		padding-left: 5px;
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

		.testimonials_one .testimonial-slider .single-testimonial-slide .testimonial-content h4 {
		    margin-top: 15px;
		}
		
		.testimonials_one.section-pattern.pb-120 { 
/* 			padding-bottom: 60px; */
		} 

		section.section-pattern.ready_started { 
    		background: linear-gradient(45deg, #fb4275 0%, #f35d46 100%);
    		padding: 0.5rem 0 3rem;
		}        

		section.section-pattern.ready_started .ready__started-box {
		    background: #fff;
		    padding: 2rem;
		    border-radius: 5px;
		    margin-top: 3rem;
		    width: 100%;
		}

		section.section-pattern.ready_started .ready__started-box h3 { 
			font-size: 32px; 
		}

		section.section-pattern.ready_started .ready__started-box p {
		    color: #000;
		    font-size: 22px;
		    margin-bottom: 0;
		    margin-top: 10px;    
		}

		section.section-pattern.ready_started .ready__started-box a.btn-get {
			font-size: 18px;
		    color: #fff !important;
		    text-transform: capitalize;
		    background-image: -webkit-gradient(linear, left top, right top, from(#b70b83), to(#33077f));
		    background: linear-gradient(45deg, #fb4275 0%, #f35d46 100%);
		    padding: 0 30px 0;
		    position: relative;
		    border: 0;
		    border-radius: 5px;
		    overflow: hidden;
		    text-transform: capitalize !important; 
		    margin-left: auto;
		    transition: 0.5s;
		}

		section.section-pattern.ready_started .ready__started-box a.btn-get:hover {
			background: linear-gradient(45deg, #f35d46 0%, #fb4275 100%); 
		}

		section.contact-form-details { 
			padding-top: 80px !important;  
			background-image: url(https://seologizt.com/wp-content/uploads/2020/05/bg-girl_contact.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center; 
			width: 100%;
		}

		section.contact-form-details h1 {
			color: #414042;
			font-size: 40px;
    		font-weight: 500;
			margin-bottom: 18px;
			line-height: 1.3;
		    margin: 0 0 25px;
		    letter-spacing: 0.1px;
		    text-rendering: optimizeLegibility;
		    position: relative;
		}

		section.contact-form-details h1:after {
			content: "";
		    width: 70px;
		    height: 2px;
		    background-color: #fe8c00;
		    position: absolute;
		    left: 48%;
		    top: 66px;
		}

		section.contact-form-details p { 
			font-style: normal;
		    font-size: 20px;
		    line-height: 30px;
		    max-width: 80%;
		    margin-left: auto;
		    margin-right: auto;
		    color: #7a7c7f;
		    margin-bottom: 160px;
		    margin-top: 30px;
		}

		section.contact-form-details .form_setone {     
			width: 100%;
		    background-color: #fff;
		    overflow: hidden;
		    padding: 45px;
		}

		section.contact-form-details .form_setone h3 {     
			 margin-bottom: 26px;
		    font-size: 20px;
		    color: #414042;
		    text-align: center;
		    font-weight: 500;
		}

		section.contact-form-details .form_setone p {   
		 	margin-top: 0; 
		    margin-bottom: 20px;
		    margin-left: 0px;
		    width: 100%;
		    max-width: 100%;
		    color: #7a7c7f;
		    font-size: 15px;
		    text-align: center;
		    line-height: 24px;

		}

		section.contact-form-details .form_setone p label span input {
			width: 100%;
		    font-family: "proxima", sans-serif;
		    color: #7a7c7f;
		    background-color: #f7f9fb;
		    padding: 12px 20px;
		    border-radius: 3px;
		    border-style: solid;
		    border-width: 1px;
		    border-color: #e5e7f3;
		    font-size: 15px;
		    margin-bottom: 10px;
		    text-shadow: none;
		    box-shadow: none;
		    box-sizing: border-box;
		    transition: all ease 0.3s; 
		    margin-bottom: 5px; 
		}

		section.contact-form-details .form_setone p input[type="submit"] { 
			background-color: #fe5104;
			font-family: "proxima", sans-serif;
		    font-weight: 700;
		    font-size: 13px;
		    line-height: 24px;
		    text-transform: uppercase;
		    color: #fff;
		    padding: 18px 52px;
		    border-radius: 40px;
		    display: inline-block;
		    -webkit-appearance: none;
		    transition: all ease 0.3s;
		}

		section.contact-form-details .form_setone p input[type="submit"]:hover {
			background-color: #414042;
		}      

		section.contact-form-details .form_setone p label span.wpcf7-not-valid-tip {
			color: red;
			float: left;
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
							<div class="row">
								<div class="col-lg-6 col-12"> 
									<div class="first_left">      
										<ul>
											<li class="info_mail">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>Locations : 
													<a href="#">Boston</a>
													<a href="#">San Francisco</a>
													<a href="#">Portsmouth</a>
												</span> 
										 	</li>
										</ul> 
									</div>
								</div>
								<div class="col-lg-6 col-12">  
									<div class="contact_set"> 
											<ul>
												<li>
													<div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" class="form-control" placeholder="Search">
  </div>
												</li>
												<li class="info_mail">
													<a href="#">
														<i class="fa fa-phone" aria-hidden="true"></i> 
														<span>+0096665431</span>
													</a>
											 	</li>
										 	    <li class="hr_contact">
													<a href="#">
														<i class="fa fa-envelope" aria-hidden="true"></i>
														Contact
													</a>
												</li>
											</ul> 
										</div>
								</div>
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


