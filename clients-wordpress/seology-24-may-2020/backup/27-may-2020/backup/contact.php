<?php 

/*

    Template name: contact

*/

 get_header();

?>

    <!-- Page Title Begin -->

    <section class="page-title-bg pt-250 pb-100" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/page-title.png">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="page-title text-center">

                        <h2><?php echo the_title(); ?></h2>

                        <ul class="list-inline">

                            <li><a href="<?php echo site_url(); ?>">Home</a></li>

                            <li><?php echo the_title(); ?></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Page Title End -->

   <?php if (have_posts()) :

   while (have_posts()) :

      the_post();

         

   endwhile;

endif; ?>

    <!-- Contact Info Begin -->

    <section class="pt-120 pb-120">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Interested in Digital Transformation?</h1>
                </div>

                <div class="col-lg-12 text-center">
                    <p>Thank you for your interest in Digitylst. To locate contacts in the Digitylst office closest to you, explore our worldwide offices.</p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="">
                        <img src="" width="100%">
                    </div>
                </div>
                <div class="col-lg-5">
                    <?php echo do_shortcode('[contact-form-7 id="279" title="contact form-7"]' ); ?>
                </div>
            </div>

        </div>

    </section>

    <!-- Contact Info End -->

<?php get_footer(); ?>