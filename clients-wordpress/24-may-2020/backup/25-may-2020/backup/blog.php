<?php 

/*

    Template name: blogs

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





        <!-- Blog Begin -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                              <?php

                                    $loop = new WP_Query( array( 'post_type' => 'blogs') );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                            

                                        

                                ?> 

                        <div class="col-12">
                            <!-- Single Blog Item Begin -->
                            <div class="single-blog-style--two position-relative">
                                <!-- Blog Bg Shape -->
                                <div class="date-bg-shape position-absolute">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/blog-date-shape.svg" class="svg" alt="">
                                </div>
                                <!-- End Blog Bg Shape -->
                                <p class="posted-on position-absolute"><?php echo get_the_date('M d'); ?></p>
                                <!-- Blog Image Begin -->
                                <div class="blog-image">
                                    <img src="<?php echo get_field('blog_image')?>" data-rjs="2" alt="">
                                </div>
                                <!-- Blog Image End -->

                                <!-- Blog Content Begin -->
                                <div class="blog-content box-shadow">
                                    <p class="category"><a><?php 

               $category = get_the_category( $post->ID );

               echo $category[0]->cat_name;?></a></p>

                                    <h4 class="blog-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h4>

                                    <ul class="post-meta list-inline">
                                        <li>Posted by: <a><?php echo comment_author(); ?></a></li>
                                        <li>Comments: <span><?php echo get_comments_number(); ?></span></li>
                                    </ul>

                                    <p class="blog-excerpt"><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>

                                    <a href="<?php echo the_permalink(); ?>" class="btn-inline">Read More</a>
                                </div>
                                <!-- Blog Content End -->


                            </div>
                            <!-- Single Blog Item End -->
                        </div>

                         <?php endwhile; endif; wp_reset_query(); ?>

                      

                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Sidebar Begin -->
                    <aside class="sidebar mt-5 mt-lg-0">
                       

                        <!-- Widget Categories Begin -->
                        <div class="widget widget_categories">
                            <div class="widget-title">
                                <h4>Categories</h4>
                            </div>
                                      <?php

$taxonomy = 'blogs_category';

$terms = get_terms($taxonomy);



if ( $terms && !is_wp_error( $terms ) ) :

?>   
                              <ul>
                                 <?php foreach ( $terms as $term ) { ?>
                                <li><a href=""><?php echo $term->name; ?></a></li>
                              
                                 <?php } ?>
                            </ul>
                                <?php endif;?>  
                        </div>
                        <!-- End Categories End -->

                        <!-- Widget Ad Begin -->
                        <div class="widget widget_ad">
                            <?php

                    if(is_active_sidebar('blog-image')){

                    dynamic_sidebar('blog-image');

                    }

                    ?>
                        </div>
                        <!-- Widget Ad End -->

                        <!-- Widget Related Post Begin -->
                        <div class="widget widget_related_post">
                            <!-- Widget Title Begin  -->
                            <div class="widget-title">
                                <h4>Related Posts</h4>
                            </div>
                            <!-- Widget Title End  -->

                              <?php

                                      $curr = get_the_ID();

                                        $loop = new WP_Query( array( 'post_type' => 'blogs', 'posts_per_page' => 3, 'orderby' => 'rand', 'post__not_in' => array($curr) ) );

                                    if ( $loop->have_posts() ) :

                                        while ( $loop->have_posts() ) : $loop->the_post(); 

                                        

                                ?> 
                            <!-- Single Related Post Begin -->
                            <div class="single-post">
                                <div class="post-content">
                                    <span class="posted-on"><?php echo get_the_date(); ?></span>
                                    <h5><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
                                </div>
                            </div>
                            <!-- Single Related Post End -->
                               <?php endwhile; endif; wp_reset_query(); ?>

                           
                        </div>
                        <!-- Widget Related Post End -->

                        <!-- Widget Tag Cloud Begin -->
                        <div class="widget widget_tag_cloud">
                            <div class="widget-title">
                                <h4>Tags</h4>
                            </div>
                            <div class="tagcloud">
                                  <?php

$taxonomy = 'post_tag';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
            <?php foreach ( $terms as $term ) { ?>
                               <a href=""><?php echo $term->name; ?></a>
                               
                                <?php } ?>
                                 <?php endif;?>
                            </div>
                        </div>
                        <!-- Widget Tag Cloud End -->

                    </aside>
                    <!-- Sidebar End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

<?php get_footer(); ?>