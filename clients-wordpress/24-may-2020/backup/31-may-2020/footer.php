

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

    <script src="https://www.conductor.com/wp-content/plugins/ewww-image-optimizer-cloud/includes/lazysizes.min.js"></script>

    

    <!-- ======= Custom JS ======= -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<!--     <script src="https://cdn.iubenda.com/cs/iubenda_cs.js"></script> -->

  <!--   <script src="https://marketo.clearbit.com/assets/v1/marketo/forms.js"></script> 

    <script src="https://app-sjf.marketo.com/js/forms2/js/forms2.min.js"></script> -->

  <!-- <script>MktoForms2.loadForm("//app-sjf.marketo.com", "149-ZMU-763", 1782);</script>
 -->

 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/indexone.js"></script>
 
 <script>
     
         // alert('hii');
// Can also be included with a regular script tag
import Typed from 'typed.js';   

export default function home() {
  if (!document.querySelector('.page--home'))
    return false;

  hero();
  equation();
}



function hero() {

  const heroData = window.heroData;
  const first = heroData.shift();
  heroData.push(first);
  setTimeout(() => {
    new Typed('#typed', {
      strings: heroData.map(({ search }) => search),
      typeSpeed: 40,
      backDelay: 4000,
      loop: true,
      onStringTyped(index, instance)  {
        const { backDelay } = instance;
        const photosLeft = document.querySelectorAll('.hh-icon--left > div');
        const photosRight = document.querySelectorAll('.hh-icon--right > div');
        const searchCount = document.querySelectorAll('.home-hero figure li');
        const nextIndex = index+1;
        const hasNext = typeof searchCount[nextIndex] != 'undefined';

        [...photosLeft].forEach(p => p.classList.remove('active'));
        [...photosRight].forEach(p => p.classList.remove('active'));
        [...searchCount].forEach(p => p.classList.remove('active'));

        if (hasNext) {
          photosLeft[nextIndex].classList.add('active');
          photosRight[nextIndex].classList.add('active');
          searchCount[nextIndex].classList.add('active');
        } else {
          photosLeft[0].classList.add('active');
          photosRight[0].classList.add('active');
          searchCount[0].classList.add('active');
        }

      },
    });
  }, 4000);
}


function equation() {

  [...document.querySelectorAll('.equation__controls .equation-arrow')].forEach(arrow => {
    arrow.addEventListener('click', () => {
      const currentNumber = +document.querySelector('.two-column-content.is-shown').dataset.no;
      const total = document.querySelectorAll('.two-column-content').length;
      const direction = arrow.dataset.controls;
      let number = 0;

      if (direction === 'prev') {
        number = (currentNumber == 0) ? total-1 : currentNumber-1;
      } else if (direction === 'next') {
        number = (currentNumber == total-1) ? 0 : currentNumber+1;
      }

      changeSlideTo(number);
    })
  });

  [...document.querySelectorAll('.equation li')].forEach(el => {
    el.addEventListener('click', function() {
      const number = this.getAttribute('data-no');
      changeSlideTo(number);
    })
  })



  function changeSlideTo(number) {
    const items = document.querySelectorAll(`.two-column-content`);
    const lines = [...document.querySelectorAll('.equation > li')];

    for (let index = 0; index < lines.length; index++) {
      const element = lines[index];
      if (number < index) {
        element.classList.remove('active');
      } else {
        element.classList.add('active');
      }
    }

    [...items].forEach(itm => {
      if (itm.getAttribute('data-no') == number) {
        itm.classList.add('is-shown')
      } else {
        itm.classList.remove('is-shown')
      }
    })

  }



}

 </script>



</body>

</html>







