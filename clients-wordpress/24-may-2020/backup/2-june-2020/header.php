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

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/check.css">



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
   <!--  <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/assets/css/custom_home.css"> -->
	
	<style> 

.header .header-main.style--one .main-menu .nav > li:last-child {
     display: none;
}
 .banner.section-pattern.bg-img {
     background-image: url(https://seologizt.com/wp-content/uploads/2020/05/banner-bg.png) !important;
     min-height: 750px;
     background-size: cover;
     background-position: center;
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
    /* font-size: 40px;
     */
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
    /* padding-bottom: 60px;
     */
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
/*free anylize start code css*/
 .second-section p {
     font-size: 17px;
     color: #333;
     padding: 25px 0;
}
 .second-section h1 {
     font-size: 50px;
}
 .thired-section .get_started {
     border: 2px solid black;
     text-align: center;
     padding: 50px;
     position: relative;
     background-color: #fff;
}
 .thired-section .get_started:before {
     content: '';
     display: block;
     position: absolute;
     z-index: -1;
     height: 100%;
     background-color: #000;
     left: 2%;
     top: 10px;
     top: 0.555556rem;
     width: 100%;
}
 .thired-section .get_started h3 {
     font-size: 20px;
     font-weight: 500;
     color: #333;
     line-height: 28px;
     margin-bottom: 30px;
}
 .thired-section .get_started form p {
}
 .thired-section .get_started form p label {
     font-weight: 600;
     color: #333;
     width: 100%;
     text-align: left;
     max-width: 80%;
}
 .thired-section .get_started form p label span {
     margin-top: 5px;
     display: block;
}
 .thired-section .get_started form p label span.wpcf7-not-valid-tip {
     color: red;
}
 .thired-section .get_started form p label span input {
     padding: 0 16px !important;
     padding: 0 0.888889rem !important;
     width: 100% !important;
     border: 1px solid #000 !important;
     border-bottom: 6px solid #000 !important;
     font-size: 14.8PX !important;
     height: 50px;
}
 .thired-section .get_started form p label span select {
     padding: 0 16px !important;
     padding: 0 0.888889rem !important;
     width: 100% !important;
     border: 1px solid #000 !important;
     border-bottom: 6px solid #000 !important;
     font-size: 14.8PX !important;
     height: 50px;
     background-color: transparent;
}
 .thired-section .get_started form p span span span.wpcf7-list-item.first.last {
     display: block;
     max-width: 80%;
     width: 100%;
     margin: auto;
}
 .thired-section .get_started form p span input[type="checkbox"] {
     margin-right: 8px;
     height: 17px;
     width: 17px;
     position: relative;
     top: 3px;
}
 .thired-section .get_started form p input[type="submit"] {
     background-color: #fe5104;
     font-family: "proxima", sans-serif;
     font-weight: 700;
     font-size: 18px;
     line-height: 24px;
     display: block !important;
     width: 80%;
     margin: auto;
     text-transform: uppercase;
     color: #fff;
     padding: 12px 52px;
     border-radius: 0px;
     display: inline-block;
     -webkit-appearance: none;
     transition: all ease 0.3s;
}
 .thired-section .get_started form p input[type="submit"]:hover {
     background-color: #414042;
}
 .thired-section .col-lg-2 > div.f1 {
     padding-top: 120px;
}
 .thired-section .col-lg-2 > div.f2 {
     padding-top: 200px;
}
 .fourth-section {
     padding: 60px 0 50px !important;
}
 .fourth-section .learn-how {
     border: 2px solid #1d1d1d;
     background-color: #fff;
     border-radius: 2px;
     position: relative;
     padding: 30px;
     min-height: 350px;
     margin-bottom: 50px;
     background-color: #fff;
     margin-left: 10px;
     margin-right: 10px;
}
 .fourth-section .learn-how:before {
     content: '';
     position: absolute;
     bottom: -10px;
     bottom: -0.555556rem;
     right: -10px;
     right: -0.555556rem;
     height: calc(100% - 46PX);
     width: calc(100% - 37PX);
     background-color: #fe5104;
     z-index: -1;
     border-radius: 2px;
     -webkit-transition: background-color 0.3s ease, -webkit-transform 0.3s ease;
     transition: background-color 0.3s ease, -webkit-transform 0.3s ease;
     transition: background-color 0.3s ease, transform 0.3s ease;
     transition: background-color 0.3s ease, transform 0.3s ease, -webkit-transform 0.3s ease;
}
 .fourth-section .col-lg-4:nth-child(2) .learn-how:before {
     background-color: #fb4275;
}
 .fourth-section .col-lg-4:nth-child(3) .learn-how:before {
     background-color: #f35d46;
}
 .fourth-section .col-lg-4:nth-child(4) .learn-how:before {
     background-color: #ed2fae;
}
 .fourth-section .col-lg-4:nth-child(5) .learn-how:before {
     background-color: #f19455;
}
 .fourth-section .col-lg-4:nth-child(6) .learn-how:before {
     background-color: #1d1d1d;
}
 .fourth-section .learn-how img {
     position: absolute;
     top: -22px;
}
 .fourth-section .learn-how h3 {
     font-size: 24px;
     line-height: 34px;
     margin: 25px 0 18px;
     font-weight: 500;
     color: #333;
}
 .fourth-section .learn-how p {
     color: #000;
     font-size: 17px;
}
 .fifth-section h1 {
     font-size: 45px;
     line-height: 60px;
     font-weight: 600;
}
 .six-section .research {
     background-color: #f8f8f8;
     padding: 30px;
     margin-bottom: 30px;
     position: relative;
}
 .six-section .research h3 {
     font-weight: 500;
     margin-bottom: 15px;
     color: #333;
}
 .six-section .research p {
     font-size: 18px;
     color: #000;
}
 .six-section .research span {
     color: #fff;
     background: #000;
     display: inline-block;
     width: 40px;
     height: 40px;
     line-height: 40px;
     text-align: center;
     font-weight: 600;
     position: absolute;
     right: 20px;
     top: 20px;
}
 .fifth-section .research .request_btn {
}
 .six-section .request_btn > a {
     background-color: #fe5104;
     font-family: "proxima", sans-serif;
     font-weight: 700;
     font-size: 16px;
     line-height: 24px;
     text-transform: uppercase;
     color: #fff;
     padding: 12px 24px;
     border-radius: 0px;
     display: inline-block;
     -webkit-appearance: none;
     transition: all ease 0.3s;
}
 .six-section .request_btn > a:hover {
     background-color: #414042;
}
 .six-section .research_img {
     position: relative;
}
 .six-section .research_img:before {
     content: '';
     position: absolute;
     bottom: 0;
     right: 0;
     height: calc(100% - 100px);
     height: calc(100% - 5.555556rem);
     width: calc(100% - 133px);
     width: calc(100% - 7.388889rem);
     background: #ed4e5d;
     z-index: -1;
     top: 140px;
}
 .six-section .research_img > img {
     max-width: 450px;
}
 .seven-section {
     margin-top: 90px;
     margin-bottom: 90px;
     padding: 90px 0 !important;
     background-color: #f8f8f8;
}
 .seven-section h1 {
     font-size: 45px;
     line-height: 60px;
     font-weight: 600;
}
 .seven-section ul.brands_detail {
     width: 100%;
     margin: 0;
     padding: 0;
     margin-top: 60px;
}
 .seven-section ul.brands_detail li { 
     list-style: none;
     display: inline-block;
     margin-left: 40px;
     margin-right: 40px;
}
 .seven-section ul.brands_detail li img {
     max-width: 100px;
}
.header .header-main.style--one .main-menu .nav > li:nth-last-child(2) > a {
    border-radius: 50px;
    margin-top: 10px;
    padding: 0 0 0 0;
    font-size: 13px;
    line-height: 35px;
    border: none;
    padding: 0 30px;
    font-size: 14px;
    font-weight: 600;
    line-height: 45px;
    position: relative;
    text-transform: capitalize;
    -webkit-transition: .3s ease-in-out .2s;
    -o-transition: .3s ease-in-out .2s;
    transition: .3s ease-in-out .2s;
    z-index: 9;
    color: #fb4275 !important;
    background-color: rgba(251, 66, 117, 0.1) !important;
    border: solid 2px rgba(251, 66, 117, 0) !important;       
}
.header .header-main.style--one .main-menu .nav > li:nth-last-child(2) > a:hover {
     border: solid 2px #fb4275 !important;
}
/*baner new features start code css*/
.figure_changes {

}
.figure_changes div > span {
    color: #fff;
    font-size: 17px;
    font-weight: bold;                 
}
.figure_changes div.txt_search {  
    color: #fff;
    font-size: 14px;
    padding-left: 8px;
    text-transform: uppercase;
    font-weight: bold;
    padding-top: 2px;  
}
.home-hero .home-hero__searchbar figure { 
    padding: 15px 36px !important; 
}
.home-hero .hero-hero-outer .hh-icon > div.sliderOnemanages {  
     opacity: 1;
}
section.home-hero { 
    padding-top: 60px; 
}
.home-hero .home-hero__searchbar .hero-search li > span {
    font-size: 17px; 
}
/*section.home-hero a#get-started-homepage {
    background-color: #ed5256; 
    transition: 0.5s; 
}
section.home-hero a#get-started-homepage:hover { 
    background-color: #ed4075;
}*/
/*baner new features end code css*/
section.bg-img + section.pt-120.pb-120 > .container > .row > .col-md-11 > img {
     max-height: 450px !important;  
     object-fit: cover; 
}
/*media query start code css*/
 @media (min-width: 1200px) {
     .fourth-section .container {
         max-width: 1280px;
    }
     .six-section .container {
         max-width: 1280px;
    }
}
@media screen and (min-width: 768px) { 
     section.home-hero h1 {  
         font-size: 55px;  
     }
}

@media only screen and (max-width: 991px){ 
     .header .header-main.style--one {
         padding: 0 0;
     }
}
@media (min-width: 768px) and (max-width: 991px) {
     .testimonials_one .owl-carousel .owl-nav button.owl-prev {
         margin-left: -50px;
     }  
     .testimonials_one .owl-carousel .owl-nav button.owl-next {
         margin-right: -50px; 
     }   
     .testimonials_one .section-title h3:before {
         left: 29%;
     } 
     .ready_started .ready__started-box .btn span { 
         padding: 0 0;
         font-size: 18px;
     } 
     .ready_started .ready__started-box p {
         font-size: 18px;
     }
}
@media (max-width: 767px) {  
     section.home-hero h1 {
          padding-top: 50px; 
     }
     .ready_started .ready__started-box a.btn-get {  
         margin-top: 30px; 
     }  
     header.header .header-main.style--one {
         padding: 0 0;
     }
     .header-first ul li {
         padding-right: 6px;
     }
     .header-first ul li a {
         font-size: 12px;
     }
     .header-first .first_left ul {
         padding-left: 14px;
         text-align: left;
     }
} 
@media (max-width: 576px) {
     .header-first .first_left ul li span {
         color: #48454c;
         font-size: 12px;
     }
}


/*free anylize start code css*/

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
								<div class="col-lg-6 col-md-6 col-sm-7 col-12"> 
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
								<div class="col-lg-6 col-md-6 col-sm-5 col-12">  
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


