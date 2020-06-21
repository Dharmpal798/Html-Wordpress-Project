  

<!-- footer star -->

   <section class="callto-action">

            <!-- Wrapper -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-8 col-md-9 m-auto text-center">

                        <div class="sec-heading">

                        </div>

                    </div>

                </div>

                <div class="row">

    

                    <!-- OneFourth -->

                    <div class="col-md-3 contactInfo">

                           <?php



                    if(is_active_sidebar('footer-contact')){



                    dynamic_sidebar('footer-contact');



                    }



                    ?>

                    </div>

                    <!-- //OneFourth -->

    

                    <!-- OneFourth -->

                    <div class="col-md-3 contactInfo">

                            <?php



                    if(is_active_sidebar('footer-contact-2')){



                    dynamic_sidebar('footer-contact-2');



                    }



                    ?>

                    </div>

                    <!-- //OneFourth -->

    

                    <!-- OneFourth -->

                    <div class="col-md-3 contactInfo">

                            <?php



                    if(is_active_sidebar('footer-contact-3')){



                    dynamic_sidebar('footer-contact-3');



                    }



                    ?>

                    </div>

                    <!-- //OneFourth -->

    

                    <!-- OneFourth -->

                    <div class="col-md-3 contactInfo">

                             <?php



                    if(is_active_sidebar('footer-contact-4')){



                    dynamic_sidebar('footer-contact-4');



                    }



                    ?>

                    </div>

                    <!-- //OneFourth -->

                </div>

            </div>

            <!-- //Wrapper -->

        </section>



  











    <!-- Footer strat -->

    <footer class="footer">

      





        <div class="foo-btm">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <?php



                    if(is_active_sidebar('footer-copyright')){



                    dynamic_sidebar('footer-copyright');



                    }



                    ?>

                       

                    </div>

                    <div class="col-md-6">

                          <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'payments-types text-right  el-sm-center', 'container' => ''));  ?>

                       

                    </div>

                </div>



            </div>

        </div>

    </footer>

    <!-- Footer end -->







    <!-- JS -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/daterangepicker.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.js"></script>

     <!-- ======= Magnific Popup JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/coreNavigation-1.1.3.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<?php wp_footer(); ?> 
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-374bfe89-4226-47db-912b-4706e37ad60d"></div>
<?php wp_footer(); ?>
</body>



</html>