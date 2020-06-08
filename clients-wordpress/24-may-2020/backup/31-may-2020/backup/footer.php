

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

    <!-- <script src="<?php //echo get_template_directory_uri(); ?>/assets/js/custom-main.js"> -->
        
    </script>   

    <script src="https://www.conductor.com/wp-content/plugins/ewww-image-optimizer-cloud/includes/lazysizes.min.js"></script>

    

    <!-- ======= Custom JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

    <script src="https://cdn.iubenda.com/cs/iubenda_cs.js"></script>

  <!--   <script src="https://marketo.clearbit.com/assets/v1/marketo/forms.js"></script> 

    <script src="https://app-sjf.marketo.com/js/forms2/js/forms2.min.js"></script> -->

  <!-- <script>MktoForms2.loadForm("//app-sjf.marketo.com", "149-ZMU-763", 1782);</script>
 -->
 

<noscript><style>.lazyload[data-src]{display:none !important;}</style></noscript>       <style type="text/css" id="wp-custom-css">
            .mobile-nav ul.header__nav__container>li>a {
    padding-right:1.31rem;
    
}

.mobile-nav ul.header__nav__container>li>a>div img {
    max-width:15px;
}

header form.sign-up {
    margin-bottom:0;
}

.sub-menu--solutions .sub-menu__container .header__nav__item:nth-of-type(4) {
    margin-top:-73px;
}       </style>


    <script type="text/javascript">
var _iub = _iub || [];
_iub.csConfiguration = {"lang":"en","siteId":1357287,"cookiePolicyUrl":"https://www.conductor.com/privacy-policy","cookiePolicyId":48142839, "banner":{ "prependOnBody":false,"applyStyles":false,"cookiePolicyLinkCaption":"cookie policy","content":"<p>We use cookies to ensure that you get the best experience on our website. <br>By continuing to browse, you agree to the use of cookies detailed in our <a target=\"_blank\" class=\"iubesnda-cs-cookie-policy-lnk\" href=\"https://www.conductor.com/privacy-policy\">cookie policy<\/a>.<\/p>" }};
</script><script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

            <script>
                var iCallback = function() {};
                var _iub = _iub || {};

                if ( typeof _iub.csConfiguration != 'undefined' ) {
                    if ( 'callback' in _iub.csConfiguration ) {
                        if ( 'onConsentGiven' in _iub.csConfiguration.callback )
                            iCallback = _iub.csConfiguration.callback.onConsentGiven;

                        _iub.csConfiguration.callback.onConsentGiven = function() {
                            iCallback();

                            /* separator */
                            jQuery('noscript._no_script_iub').each(function (a, b) { var el = jQuery(b); el.after(el.html()); });
                        }
                    }
                }
            </script>

       <script>
window.heroData = [{"search":"How to work from home?","search_volume":"9,900","photo":16993,"image_left":"https:\/\/www.conductor.com\/wp-content\/uploads\/2020\/04\/Conductor-Illustrations2_Home-Left.svg","image_right":"https:\/\/www.conductor.com\/wp-content\/uploads\/2020\/04\/Conductor-Illustrations2_Home-Right-.svg"},{"search":"How do I improve my credit score?","search_volume":"9,900","photo":17019,"image_left":"https:\/\/www.conductor.com\/wp-content\/uploads\/2019\/11\/3.0.svg","image_right":"https:\/\/www.conductor.com\/wp-content\/uploads\/2019\/11\/Asset-8.svg"},{"search":"Arts and crafts for kids","search_volume":"15,000","photo":16996,"image_left":"https:\/\/www.conductor.com\/wp-content\/uploads\/2020\/04\/Conductor-Illustrations2_Kids-Left.svg","image_right":"https:\/\/www.conductor.com\/wp-content\/uploads\/2020\/04\/Conductor-Illustrations2_Kids-Right.svg"},{"search":"Travel insurance reviews","search_volume":"12,100","photo":16995,"image_left":"https:\/\/www.conductor.com\/wp-content\/uploads\/2019\/11\/Asset-3.svg","image_right":"https:\/\/www.conductor.com\/wp-content\/uploads\/2019\/11\/Asset-4.svg"},{"search":"Best camera phone","search_volume":"27,000","photo":16994,"image_left":"https:\/\/www.conductor.com\/wp-content\/uploads\/2019\/11\/Asset-12.svg","image_right":"https:\/\/www.conductor.com\/wp-content\/uploads\/2019\/11\/Asset-11.svg"},{"search":"When can I retire? ","search_volume":"4,000","photo":17021,"image_left":"https:\/\/www.conductor.com\/wp-content\/uploads\/2019\/11\/Asset-15.svg","image_right":"https:\/\/www.conductor.com\/wp-content\/uploads\/2019\/11\/Asset-10.svg"}];
</script>

     <script>MktoForms2.loadForm("//app-sjf.marketo.com", "149-ZMU-763", 1782);</script>


      <script>
      window.intercomSettings = {
        app_id: "cbgv4xmu"
      };
    </script>

        <script> 
      (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/cbgv4xmu';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>

     <script type="text/javascript">var _iub = _iub || []; _iub.csConfiguration = {"lang":"en","siteId":1357287,"cookiePolicyUrl":"https://www.wework.com/legal/cookie-policy","cookiePolicyId":48142839, "banner":{ "prependOnBody":false,"applyStyles":false,"cookiePolicyLinkCaption":"cookie policy","content":"<p>We use cookies to ensure that you get the best experience on our website. <br>By continuing to browse, you agree to the use of cookies detailed in our <a class=\"iubenda-cs-cookie-policy-lnk\" href=\"https://www.wework.com/legal/cookie-policy\">cookie policy</a>.</p>" }};</script>

</body>

</html>







