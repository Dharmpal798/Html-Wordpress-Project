<?php 

/*

    Template name: home

*/

 get_header();

?>





    <!-- Slider Begin -->

    <section class="banner section-pattern" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/slider-pattern.png">

        <!-- Banner Slider Begin -->

        <div class="banner-slider owl-carousel d-flex align-items-center justify-content-center" data-owl-animate-in="fadeIn" data-owl-animate-Out="fadeOut" data-owl-autoplay="true" data-owl-dots="true" data-pause="true" data-interval="1000">

            <!-- Single Slide Begin -->



             <?php

                                    $loop = new WP_Query( array( 'post_type' => 'banner', 'posts_per_page' => 3) );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                        

                                ?> 

            <div class="single-banner-slider">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-lg-6">

                            <!-- Banner Content Begin -->

                            <div class="banner-content">

                                <h1><?php echo get_field('banner_heading'); ?></h1>

                                <p><?php echo the_content(); ?></p>

                                <a href="#" data-toggle="modal" data-target="#appointmentModalForm" class="banner-btn btn"><span>Get Appointment</span></a>

                            </div>

                            <!-- Banner Content End -->

                        </div>

                        <div class="col-lg-6">

                            <!-- Banner Content Begin -->

                            <div class="banner-image mt-50 mt-lg-0 text-center text-lg-right">

                                <?php the_post_thumbnail(); ?>

                            </div>

                            <!-- Banner Content End -->

                        </div>

                    </div>

                </div>

            </div>

            <?php endwhile; endif; wp_reset_query(); ?>

            <!-- Single Slide End -->



    

    

        </div>

        <!-- Banner Slider End -->

    </section>

    <!-- Slider End -->



    <!-- Modal Form Begin -->

    <div class="appointment-modal modal fade" id="appointmentModalForm" tabindex="1" role="dialog" aria-labelledby="appointmentModalForm" aria-hidden="true">

        <div class="modal-dialog d-flex align-items-center" role="document">

            <div class="container">

                <div class=" row justify-content-center">

                    <div class="col-lg-8 col-12">

                        <!-- Modal Content Begin -->

                        <div class="modal-content">

                            <!-- Modal Close Button Begin -->

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/close.svg" alt="">

                            </button>

                            <!-- End Modal Close End -->

    

                            <!-- Appointment Form Begin -->

                                  <?php echo do_shortcode('[contact-form-7 id="178" title="Home"]'); ?>                            <!-- End Appointment Form End -->

                        </div>

                        <!-- Modal Content End -->

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal Form End -->



    <!-- Feature Begin -->

    <section class="pt-120 pb-90 section-pattern" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/feature-pattern.png">

        <div class="container">

            <div class="row justify-content-center">



                    <?php

                                    $loop = new WP_Query( array( 'post_type' => 'feature', 'posts_per_page' => 3) );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                        

                                ?> 

                <div class="col-lg-4 col-md-6">

                    <!-- Single Feature Begin -->

                <a href="#">

                    <div class="single-feature text-center">

                        <!-- Feature Image Begin -->

                        <div class="image">

                           <?php the_post_thumbnail(); ?>

                        </div>

                        <!-- Feature Image End -->



                        <!-- Feature Content Begin -->

                        <div class="content">

                            <h3><?php echo the_title(); ?></h3>

                            <p><?php echo the_content(); ?></p>

                        </div>

                        <!-- Feature Content End -->

                    </div>

                  </a>

                    <!-- Single Feature End -->

                </div>



                 <?php endwhile; endif; wp_reset_query(); ?>

           

            </div>

        </div>

    </section>


    <!-- Feature End -->
<!-- <div class="elementor-element elementor-element-5df0d7d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section elementskit-parallax-multi-container" data-id="5df0d7d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg_shape.png);
    background-color: #fff;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 150px 0px 150px 0px;
    box-sizing: border-box; ">
                        <div class="elementor-globe ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-5c3a251" style="transform: translateY(0px);">
                            <img class="elementskit-parallax-graphic " src="<?php echo get_template_directory_uri(); ?>/assets/img/globe_vector.png">
                        </div>
                    
                        <div class="elementor-man ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-a03b1c6" style="transform: translateY(31.8px);">
                            <img class="elementskit-parallax-graphic " src="<?php echo get_template_directory_uri(); ?>/assets/img/man_vector.png">
                        </div>
                    
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                <div class="elementor-element elementor-element-64d036e elementor-column elementor-col-100 elementor-top-column" data-id="64d036e" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-637a3cb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section elementskit-parallax-multi-container" data-id="637a3cb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                <div class="elementor-element elementor-element-0f6d981 elementor-column elementor-col-100 elementor-inner-column" data-id="0f6d981" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-28e47f1 xs-heading-text elementor-align-center elementor-widget elementor-widget-xs-heading" data-id="28e47f1" data-element_type="widget" data-widget_type="xs-heading.default">
                <div class="elementor-widget-container">
            <div class="geobin-heading-title">
            <h2>
                            <small>Better website - better user experience </small>
            Check your Website’s SEO </h2> 
    </div>      </div>
                </div>
                <div class="elementor-element elementor-element-5c0b9a6 elementor-widget elementor-widget-shortcode" data-id="5c0b9a6" data-element_type="widget" data-widget_type="shortcode.default">
                <div class="elementor-widget-container">
                    <div class="elementor-shortcode"><div role="form" class="wpcf7" id="wpcf7-f2895-p2792-o1" lang="en-US" dir="ltr">



<div class="row justify-content-center">
<div class="col-md-8 text-center">
<div class="analysis-form analysis-form-2">
<?php echo do_shortcode('[contact-form-7 id="229" title="Analyze Form"]'); ?>
</div>
</div>
</div>

</div></div>
                </div>
                </div>
                        </div>
            </div>
        </div>
                        </div>
            </div>
        </div>
                        </div>
            </div>
        </div>
                        </div>
            </div>
        </div> -->

        <section class="section-pattern ready_started">  
            <div class="container"> 
                <div class="ready__started-box"> 
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Ready to get started? </h3>
                            <p class="d-flex"><strong>Schedule a 15 minutes</strong>, No-Obligation Consultation</p>
                        </div> 
                        <div class="col-md-4 d-inline-flex justify-content-center text-right flex-column ">
                            <a class=" btn btn-get" target="blank" href="https://meetings.hubspot.com/vivek20"><span>Get In Touch</span></a>
                        </div>
                    </div>
                </div>
        </div>
        </section>

     <!-- Service Begin -->



    <section class="pt-120 pb-120 section-pattern" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/service-pattern.png">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <!-- Section Title Begin -->

                    <div class="section-title">

                        <h3>Service</h3>

                        <h2>We’re Providing <br>

                        Best Solutions <br>

                        For Your Business</h2>

                        <p>We highest ye friends is exposed equally in. Ignorant had too strictly followed. Astonished as travelling assistance or

                        unreserved oh pianoforte ye.</p>

                    </div>

                    <!-- Section Title End -->



                    <!-- Button Begin -->

                    <a href="<?php echo site_url(); ?>/services/" class="btn"><span>view All</span></a>

                    <!-- Button End -->

                </div>



                <div class="col-lg-6">

                    <div class="row mt-40 mt-lg-0">

                        <?php

                                      $curr = get_the_ID();

    $loop = new WP_Query( array('post_parent' => '9', 'post_type' => 'page', 'posts_per_page' => 4 ) );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                        

                                ?> 

                        <div class="col-sm-6 single-service-wrapper">

                            <!-- Single Service Begin -->

                            <div class="single-service text-center">

                                <!-- Icon Begin -->

                                <div class="icon">

                                    <?php the_post_thumbnail(); ?>

                                </div>

                                <!-- Icon End  -->



                                <!-- Content Begin -->

                                <div class="content">

                                    <h4><?php echo the_title(); ?></h4>

                                    <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="btn-inline">Read More</a>

                                </div>

                                <!-- Content End -->

                            </div>

                            <!-- Single Service End -->

                        </div>

                         <?php endwhile; endif; wp_reset_query(); ?>

                     

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Service End -->
  



    <!-- Counter Begin -->

    <section class="pt-120 pb-70 gradient-bg">

        <div class="container">

              <div class="row align-items-center">

                    <?php

                                    $loop = new WP_Query( array( 'post_type' => 'experience') );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                        

                                ?> 

                <!-- Single Counter -->

                <div class="col-lg-3 col-sm-6">

                    <div class="single-counter text-center text-white">

                        <h2 class="count"><span><?php echo the_content(); ?></span><?php echo get_field('number')?>+</h2>

                        <p><?php echo the_title(); ?></p>

                    </div>

                </div>

                  <?php endwhile; endif; wp_reset_query(); ?>

                <!-- End Single Counter -->



            </div>

        </div>

    </section>

    <!-- Counter End -->



    <!-- Work Process Begin -->

    <section class="pt-120 pb-70 section-pattern" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/work-process-pattern.png">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <!-- Section Title Begin -->

                    <div class="section-title text-center">

                        <h3>Steps</h3>

                        <h2>Work Process Our Experts Do</h2>

                        <p>Delivered dejection necessary objection do mr prevailed. Mr feeling do chiefly cordial in do. Water timed folly right

                        aware if oh truth. Imprudence attachment him his for sympathize.</p>

                    </div>

                    <!-- Section Title End -->

                </div>

            </div>

            

            <div class="row process-bg" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/process_shape.png">





                    <?php

                                    $loop = new WP_Query( array( 'post_type' => 'process', 'posts_per_page' => 4) );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                        

                                ?> 

                <div class="col-lg-3 col-sm-6 single-process-wrapper">

                    <!-- Single Work Process Begin -->

                    <div class="single-process text-center">

                        <!-- Image Begin -->

                        <div class="image">

                            <?php the_post_thumbnail(); ?>

                        </div>

                        <!-- Image End -->



                        <!-- Content Begin -->

                        <div class="content">

                            <h3><?php echo the_title(); ?></h3>

                            <p><?php echo the_content(); ?></p>

                        </div>

                        <!-- Content End -->

                    </div>

                    <!-- Single Work Process End -->

                </div>

                 <?php endwhile; endif; wp_reset_query(); ?>



            </div>

        </div>

    </section>

    <!-- Work Process End -->



   
    <!-- Project Begin -->

    <section class="pt-120 pb-90 section-pattern" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/case-study-pattern.png">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <!-- Section Title Begin -->

                    <div class="section-title text-center">

                        <h3>Case Studies</h3>

                        <h2>Our Recent Project</h2>

                        <p>Mutual has cannot beauty indeed now sussex merely you. It possible no husbands jennings ye offended packages pleasant

                        he. Remainder recommend who applauded departure joy.</p>

                    </div>

                    <!-- Section Title End -->

                </div>

            </div>



         



            <div class="row project-items grid">



                     <?php



                                    $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' =>4) );



                                    if ( $loop->have_posts() ) :



                                        while ( $loop->have_posts() ) : $loop->the_post(); 



                                        



                                ?> 

                <!-- Single Project Begin -->

                <div class="col-lg-6 grid-item sales business">

                    <div class="single-project-item">

                        <!-- Project Image Begin -->

                        <div class="image">

                           <?php the_post_thumbnail(); ?>

                        </div>

                        <!-- Project Image End -->



                        <!-- Project Body Begin -->

                        <div class="project-body">

                             <h3><a href="#"><?php echo the_title(); ?></a></h3>

                             <p class="project-meta">Client:<span><?php echo get_field('client'); ?></span></p>

                            <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>

                             <a href="<?php the_permalink(); ?>" class="btn-inline">Read More</a>

                        </div>

                        <!-- Project Body End -->

                    </div>

                </div>

                <!-- Single Project End -->



                 <?php endwhile; endif; wp_reset_query(); ?>



        

          

            </div>



        </div>

    </section>

    <!-- Project End -->




    <!-- CTA Begin -->

    <section class="gradient-bg pt-120 pb-120">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <!-- CTA Content Begin -->

                    <div class="cta-content text-center text-white">

                        <h2>The best strategical business <br>

                        agency to build up your business in next level.</h2>

                        <p>Distrusts fulfilled happiness unwilling as explained of difficult. No landlord of peculiar ladyship attended if contempt

                        ecstatic. Loud wish made on is am as hard. Court so avoid in plate hence.</p>

                        <a href="#" class="btn btn-white"><span>Get expert advice</span></a>

                    </div>

                    <!-- CTA Content End -->

                </div>

            </div>

        </div>

    </section>

    <!-- CTA End -->




    <!-- Testimonial Begin -->

    <section class="pt-120 pb-120 section-pattern testimonials_one" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/testimonial-pattern.png"> 

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <!-- Section Title Begin -->

                    <div class="section-title text-center">

                        <h3>Testimonial</h3>

                        <h2>Our Happy Client Tell About Us</h2>

                        <p>It bachelor cheerful of mistaken. Tore has sons put upon wife use bred seen. Its dissimilar invitation ten has

                        discretion unreserved. Had you him humoured jointure ask expenses learning.</p>

                    </div>

                    <!-- Section Title End -->

                </div>

            </div>



            <!-- Testimonial Slider Begin -->

            <div class="testimonial-slider owl-carousel" data-owl-nav="true" data-owl-autoplay="false" data-owl-animate-Out="fadeOut" data-owl-animate-in="fadeIn" data-owl-margin="3">



                 

                <!-- Single Testimonial Begin -->

                 <?php

                                    $loop = new WP_Query( array( 'post_type' => 'testimonial') );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                        

                                ?> 

                <div class="single-testimonial-slide">

                    <div class="row align-items-center">

                        <div class="col-md-12 col-12">               

                            <!-- Testimonial Content Begin -->

                            <div class="testimonial-content">

                                <!-- <p><?php //echo the_content(); ?></p> -->



                                <h4><?php echo the_title(); ?> <span><?php echo get_field('testimonial_positions')?></span></h4>

                                

                            </div>

                            <!-- Testimonial Content End -->

                        </div>

                    </div>

                </div>

                <?php endwhile; endif; wp_reset_query(); ?>

                <!-- Single Testimonial End -->

            </div>

            <!-- Testimonial Slider End -->

        </div>

    </section>

    <!-- Testimonial End -->



    <!-- Blog Begin -->

    <section class="pt-120 pb-120 section-pattern" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/blog-pattern.png">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <!-- Section Title Begin -->

                    <div class="section-title text-center">

                        <h3>Blogs</h3>

                        <h2>Our Latest News On Business</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna

                        aliqua. Quis ipsum suspendisse ultrices gravida risus commodo viverra .</p>

                    </div>

                    <!-- Section Title End -->

                </div>

            </div>



            <div class="row">

                <div class="col-12">

                    <!-- Blog Slider Begin -->

                    <div class="blog-slider owl-carousel custom-owl dots-horizontal" data-owl-items="2" data-owl-margin="30" data-owl-dots="true" data-owl-responsive='{"0": {"items": "1"},"992": {"items": "2"}}'>

                        <!-- Single Blog Item Begin -->

                           <?php



                                      $curr = get_the_ID();



                                        $loop = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 4, 'orderby' => 'rand', 'post__not_in' => array($curr) ) );



                                    if ( $loop->have_posts() ) :



                                        while ( $loop->have_posts() ) : $loop->the_post(); 



                                        



                                ?> 

                        <div class="single-blog-item position-relative">

                            <!-- Blog Bg Shape -->

                            <div class="date-bg-shape position-absolute">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/blog-date-shape.svg" class="svg" alt="">

                            </div>

                            <!-- End Blog Bg Shape -->



                           

                            <!-- Blog Content Begin -->

                            <div class="blog-content">

                                <p class="posted-on"><?php echo get_the_date('M d'); ?></p>

                                <p class="category"><?php 

               $category = get_the_category( $post->ID );

               echo $category[0]->cat_name;?></p>



                                <h3 class="blog-title"><?php echo the_title(); ?></h3>



                                <p class="blog-excerpt"><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>

                            </div>

                            <!-- Blog Content End -->

                          



                            <!-- Blog Hover Begin -->

                            <div class="blog-hover text-center text-white position-absolute w-100 h-100 d-flex align-items-center justify-content-center bg-overlay" data-bg-img="<?php echo get_field('blog_image'); ?>">

                                <h3 class="blog-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>

                            </div>

                            <!-- Blog Hover End -->



                            <!-- Blog Button Begin -->

                            <div class="blog-button position-absolute w-100 d-flex align-items-center justify-content-center" data-bg-img=""> 

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/blog-shape.svg" class="svg" alt="">

                                <a href="<?php the_permalink(); ?>" class="btn-inline">Read More</a>

                            </div>

                            <!-- Blog Button End -->

                        </div>

                            <?php endwhile; endif; wp_reset_query(); ?>

                        <!-- Single Blog Item End -->





                    </div>

                    <!-- Blog Slider End -->

                </div>

            </div>

        </div>

    </section>

    <!-- Blog End -->



    <!-- Brand Slider Begin -->

    <section class="pt-120 pb-120">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <!-- Partners -->

                    <div class="brand-logo owl-carousel" data-owl-items="6" data-owl-autoplay="false" data-owl-responsive='{"0": {"items": "2"},"575":{"items": "3"},"768": {"items": "4"},"992": {"items": "6"}}'>



                         <?php

                                    $loop = new WP_Query( array( 'post_type' => 'sponsor') );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                        

                                ?> 

                        <!-- Single Partner -->

                        <a href="#" class="single-brand-logo">

                            <?php the_post_thumbnail(); ?>

                        </a>

                         <?php endwhile; endif; wp_reset_query(); ?>

                        <!-- End Single Partner -->

    

                    </div>

                    <!-- End of Partners -->

                </div>

            </div>     

        </div>

    </section>

    <!-- Brand Slider End -->

<?php get_footer(); ?>