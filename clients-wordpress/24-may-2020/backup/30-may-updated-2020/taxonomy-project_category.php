<?php 
/*
    Template name: projects
*/
 get_header();
?>
    <!-- Page Title Begin -->
    <section class="page-title-bg pt-250 pb-100" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/page-title.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Projects</h2>
                        <ul class="list-inline">
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li>Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->  


    <!-- Project Begin -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Begin -->
                    <div class="section-title text-center">
                        <h3>Case Studies</h3>
                        <h2>Our Recent Project</h2>
                        <p>Mutual has cannot beauty indeed now sussex merely you. It possible no husbands jennings ye
                            offended packages pleasant
                            he. Remainder recommend who applauded departure joy.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
    
            <div class="row">
                <div class="col-12">
                    <!-- Porject Nav Begin -->
                    <div class="project-nav text-center mb-30">
                        <div class="nav justify-content-center align-items-center">

                <?php

$taxonomy = 'project_category';

$terms = get_terms($taxonomy);

//print_r($terms);



if ( $terms && !is_wp_error( $terms ) ) :

?>   

                            <ul class="project_filter list-inline">
                                <li  data-filter="*">
                                    <span class="filter-btn"><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">ALL</a></span>
                                </li>

                                 <?php foreach ( $terms as $term ) { ?>

                              <li class="active" data-role="button" data-filter="category-<?php echo $slug_list; ?>">
                                    <span class="filter-btn"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></span>
                                </li>

                                  <?php } ?>
                               
                            </ul>
                             <?php endif;?>       
                        </div>
                    </div>
                    <!-- Project Nav End -->
                </div>
            </div>
    
            <div class="row project-items grid">
                 <?php



                                       $queried_object = get_queried_object();

                                        $term_id = $queried_object->term_id; 

                                        





 

$post_args = array(

      'posts_per_page' => -1,

      'post_type' => 'project', // you can change it according to your custom post type

      'tax_query' => array(

          array(

              'taxonomy' => 'project_category', // you can change it according to your taxonomy

              'field' => 'term_id', // this can be 'term_id', 'slug' & 'name'

              'terms' => $term_id,

          )

      )

);

$myposts = get_posts($post_args);



// echo "<pre>";

// print_r($myposts); 

// echo "</pre>";









                                  foreach ( $myposts as $post ) : setup_postdata( $post );

                                        

                                ?> 

                <!-- Single Project Begin -->
                <div class="col-lg-6 grid-item">
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
               <?php endforeach; // Term Post foreach ?>

    
    
    
 
            </div>
    
            <div class="row">
                <div class="col-12">
                    <div class="project-load-more text-center mt-20">
                        <a href="#" class="btn"><span>Load More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project End -->
<?php get_footer(); ?><?php 

/*

    Template name: projects

*/

 get_header();

?>

	 <!--Page Title-->

    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/header/19.jpg);">

        <div class="auto-container">

            <div class="inner-container clearfix">

                <div class="title-box">

                   
                    <h1><?php the_title(); ?></h1>

                    <span class="title"><?php echo get_field('title2');?></span>

                </div>

                <ul class="bread-crumb clearfix">

                    <li><a href="<?php echo site_url(); ?>">Home</a></li>

                    <li>Project category</li>

                </ul>

            </div>

        </div>

    </section>

    <!--End Page Title-->



    <!-- Projects Section -->

    <section class="projects-section alternate">

        <div class="auto-container">

             <!--MixitUp Galery-->

            <div class="mixitup-gallery">





                <!--Filter-->

                <div class="filters text-center clearfix">                     

                   <?php

$taxonomy = 'project_category';

$terms = get_terms($taxonomy);

//print_r($terms);



if ( $terms && !is_wp_error( $terms ) ) :

?>             

                    <ul class="filter-tabs filter-btns clearfix">

                       <li data-role="button" data-filter="all"><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">ALL</a></li>

                        <?php foreach ( $terms as $term ) { ?>

                        <li class="active filter" data-role="button" data-filter="category-<?php echo $slug_list; ?>"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>

                       <?php } ?>

                    </ul> 

                    <?php endif;?>                                                   

                </div>

                                            

                <div class="filter-list row">

                    

	 <div class="filter-list row">









                             <?php



                                       $queried_object = get_queried_object();

                                        $term_id = $queried_object->term_id; 

                                        





 

$post_args = array(

      'posts_per_page' => -1,

      'post_type' => 'project', // you can change it according to your custom post type

      'tax_query' => array(

          array(

              'taxonomy' => 'project_category', // you can change it according to your taxonomy

              'field' => 'term_id', // this can be 'term_id', 'slug' & 'name'

              'terms' => $term_id,

          )

      )

);

$myposts = get_posts($post_args);



// echo "<pre>";

// print_r($myposts); 

// echo "</pre>";









                                  foreach ( $myposts as $post ) : setup_postdata( $post );

                                        

                                ?> 

                    <!-- Project Block -->

                    <div class="project-block all mix interior architecture landescape col-lg-4 col-md-6 col-sm-12">

                        <div class="image-box">

                            <figure class="image"><?php the_post_thumbnail(10,100); ?></figure>

                            <div class="overlay-box">

                                <h4><?php the_title(); ?></h4>

                                <div class="btn-box">

                                    <a href="<?php echo get_field('image')?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>

                                </div>

                                <span class="tag"><?php the_category(', ') ?></span>

                            </div>

                        </div>

                    </div>



                    <?php endforeach; // Term Post foreach ?>



                

                </div>

            </div>





                </div>

            </div>



            <!--Post Share Options-->

           <!--  <div class="styled-pagination">



                <ul class="clearfix">

                    <li class="prev-post"><a href="#"><span class="fa fa-long-arrow-left"></span> Prev</a></li>

                    <li><a href="#">1</a></li>

                    <li class="active"><a href="#">2</a></li>

                    <li><a href="#">3</a></li>

                    <li class="next-post"><a href="#"> Next <span class="fa fa-long-arrow-right"></span> </a></li>

                </ul>

            </div> -->

        </div>

    </section>



<?php get_footer(); ?> 