

    <!-- Footer Begin -->

    <footer class="footer bg-light section-pattern footer-bg" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/footer-pattern.png">

        <!-- Footer Top Begin -->

        <div class="footer-top pt-60">

            <div class="container border-bottom">

                <div class="row">

                    <div class="col-lg-3 col-sm-6">

                        <!-- Contact Widget Begin -->

                        <div class="widget widget_contact_info">

                            <!-- Widget Logo Begin -->

                            <div class="widget-logo">

                                  <?php



                    if(is_active_sidebar('footer-logo')){



                    dynamic_sidebar('footer-logo');



                    }



                    ?>

                            </div>

                            <!-- Widget Logo End -->



                            <!-- Widget Content Begin -->

                            <div class="info-content">

                                <div class="single-info">

                                    <span>Office Location</span>

                                       <?php



                    if(is_active_sidebar('footer-address')){



                    dynamic_sidebar('footer-address');



                    }



                    ?>

                                </div>

                                <div class="single-info">

                                    <span>Business Phone</span>

                                       <?php



                    if(is_active_sidebar('footer-contact')){



                    dynamic_sidebar('footer-contact');



                    }



                    ?>

                                </div>

                                <div class="single-info">

                                    <span>Support mail</span>

                                      <?php



                    if(is_active_sidebar('footer-email')){



                    dynamic_sidebar('footer-email');



                    }



                    ?>

                                </div>

                            </div>

                            <!-- Widget Content End -->

                        </div>

                        <!-- About Widget End -->

                    </div>

                   <div class="col-lg-3 col-sm-6">

                        <!-- Widget Quick Nav -->

                        <div class="widget widget_nav_menu">

                            <!-- Widget Title Begin  -->

                            <div class="widget-title">

                                <h4>Resources</h4>

                            </div>

                            <!-- Widget Title End  -->

                                 <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'menu', 'container' => ''));  ?>

                            <!-- Menu Begin -->

                      

                            <!-- Menu End -->

                        </div>

                        <!-- Widget Quick Nav -->

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <!-- Widget Quick Nav -->

                        <div class="widget widget_nav_menu">

                            <!-- Widget Title Begin  -->

                            <div class="widget-title">

                                <h4>Quick Links</h4>

                            </div>

                            <!-- Widget Title End  -->

                                 <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'menu', 'container' => ''));  ?>

                            <!-- Menu Begin -->

                      

                            <!-- Menu End -->

                        </div>

                        <!-- Widget Quick Nav -->

                    </div>

                    <!-- replaced news letter is here -->
                     <div class="col-lg-3 col-sm-6">

                        <!-- Widget Quick Nav -->

                        <div class="widget widget_nav_menu">

                            <!-- Widget Title Begin  -->

                            <div class="widget-title">

                                <h4>Company List</h4>

                            </div>

                            <!-- Widget Title End  -->

                                 <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'menu', 'container' => ''));  ?>

                            <!-- Menu Begin -->

                      

                            <!-- Menu End -->

                        </div>

                        <!-- Widget Quick Nav -->

                    </div>
                    <!-- <div class="col-lg-4 col-sm-6">

                        <div class="widget widget_newsletter">

                            <div class="widget-title">

                                <h4>Newsletter</h4>

                            </div>


                            <div class="newsletter-content">

                                  <?php



                    if(is_active_sidebar('newsletter')){



                    dynamic_sidebar('newsletter');



                    }



                    ?>



                                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" class="newsletter-form">

                                    <div class="theme-input-group">

                                      

                                         <?php echo do_shortcode('[email-subscribers-form id="1" namefield="" desc="" group="Public"]' ); ?>

                                    </div>

                                </form>

                            </div>

                        </div>

                        <div class="widget widget_social_icon">

                            <ul class="social_icon_list list-inline">

                                <li>

                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                </li>

                                <li>

                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                </li>

                                <li>

                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                                </li>

                                <li>

                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                                </li>

                            </ul>

                        </div>

                    </div> -->

                </div>

            </div>

        </div>

        <!-- Footer Top End -->



        <!-- Footer Bottom Begin -->

        <div class="footer-bottom">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="copyright-text text-center">

                             <span>  <?php



                    if(is_active_sidebar('footer-copyright')){



                    dynamic_sidebar('footer-copyright');



                    }



                    ?></span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Footer Bottom End -->

        

    </footer>

    <!-- Footer End -->



    <!-- Back to Top Begin -->

    <a href="#" class="back-to-top position-fixed">

        <div class="back-toop-tooltip"><span>Back To Top</span></div>

        <div class="top-arrow"></div>

        <div class="top-line"></div>

    </a>

    <!-- Back to Top End -->



    <!-- ======= jQuery Library ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

    

    <!-- ======= Bootstrap Bundle JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>



    <!-- =======  Mobile Menu JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/menu.min.js"></script>

    

    <!-- ======= Waypoints JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/waypoints/jquery.waypoints.min.js"></script>

    

    <!-- ======= Counter Up JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/waypoints/jquery.counterup.min.js"></script>



    <!-- ======= Owl Carousel JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/owlcarousel/owl.carousel.min.js"></script>



    <!-- ======= Isotope JS ====== -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>



    <!-- ======= Magnific Popup JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>



    <!-- ======= Countdown JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/countdown/countdown.min.js"></script>



    <!-- ======= Retina JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/retinajs/retina.min.js"></script>



    <!-- ======= Google API ======= -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>



    <!-- ======= Main JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-main.js"> 
        
    </script>   

    <!-- <script src="https://www.conductor.com/wp-content/plugins/ewww-image-optimizer-cloud/includes/lazysizes.min.js"></script> --> 

    <!-- ======= Custom JS ======= -->

    <!-- <script src="<?php// echo get_template_directory_uri(); ?>/assets/js/custom.js"></script> -->

    <!-- ============ Typed js========== -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/typed.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/indexone.js"></script>
    <script>
        var typed = new Typed('#typed', {
        strings: ['Arts and crafts for kids', 'When can I retire?', 'Travel insurance reviews', 'How to work from home?', 'Best camera phone'],
        typeSpeed: 40,
        backDelay: 3500,
        loop: true,
        });
    </script>
 <!-- js for hero sliders -->
    <script> 
        var myIndex = 0; 
        carouselOne();

        function carouselOne() {
          var i;
          var x = document.getElementsByClassName("mySlides"); 
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}     
          x[myIndex-1].style.display = "block";  
          setTimeout(carouselOne, 4000); // Change image every 2 seconds
        }
     </script>

     <script>
            var myIndex = 0;
            carouselTwo();      

            function carouselTwo() {
              var i;
              var x = document.getElementsByClassName("mySlidestwo");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++; 
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carouselTwo, 4000); // Change image every 2 seconds
            } 

            var myIndex = 0;
            carouselThree();

            function carouselThree() {
              var i;
              var x = document.getElementsByClassName("mySlidesthree");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++; 
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carouselThree, 4000); // Change image every 2 seconds
            } 
     </script> 
</body>

</html>







