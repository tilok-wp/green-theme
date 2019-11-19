<?php get_header();
  $service_heading = get_field('service_heading', false, false );
  $portfolio_heading = get_field('portfolio_heading', false, false );
  $about_heading = get_field('about_heading', false, false );
  $about_text = get_field('about_text');
  $about_image = get_field('about_image');
  $blog_heading = get_field('blog_heading', false, false );
  $testimonial_heading = get_field('testimonial_heading', false, false );
  $contact_heading = get_field('contact_heading', false, false );
  $front_page_contact_form = get_field('front_page_contact_form', false, false);
  $contact_section_details = get_field('contact_section_details');
  $client_carousel_heading = get_field('client_carousel_heading', false, false );
  

?>
<!-- Start hero -->
<section class="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

            <?php 
                    $Custom_post = null;
                    $Custom_post = new WP_Query(array(
                        'post_type' => 'slider',
                        'posts_per_page'=> -1,
                        'order' => 'ASC'
                    ));
                    if( $Custom_post->have_posts() ){
                        $x=0;
                        while( $Custom_post -> have_posts() ){
                            $Custom_post -> the_post();
                            $x++;
                            $content_image = get_field('slider_content_image');
                            ?>

            <div class="carousel-item hero-item <?php if($x==1) {echo 'active';} ?>">
                <div class="hero-image" style="	background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                </div>
                <div class="container hero-caption">
                    <div class="row">
                        <div class="col-md-6">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                        <div class="col-md-6">
                            <div class="hero-content-image">
                                <img src="<?php echo $content_image['url']; ?>"
                                    alt="<?php echo $content_image['alt']; ?>" width="100%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php }
                        }else{
                            echo 'No post';
                        }
                        wp_reset_postdata();
        ?>

        </div>

        <div class="container">
            <div class="carousel-button">
                <a class="carousel-prev" href="#heroCarousel" role="button" data-slide="prev">Prev</a>
                <a class="carousel-next" href="#heroCarousel" role="button" data-slide="next">Next</a>
            </div>
        </div>
    </div>
</section>
<!-- End hero -->

<!-- Start services -->
<section class="services section-padding" id="services">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h3><?php echo $service_heading; ?></h3>
        </div>

        <div class="row">


            <?php 
                    $Custom_post = null;
                    $Custom_post = new WP_Query(array(
                        'post_type' => 'services',
                        'posts_per_page'=> 3,
                        'order' => 'ASC'
                    ));
                    if( $Custom_post->have_posts() ){
                        $x=0;
                        while( $Custom_post -> have_posts() ){
                            $Custom_post -> the_post();
                            $x++;
                            $service_icon = get_field('service_icon');
            ?>


            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="<?php print_r( $service_icon['url']); ?>" alt="<?php echo $service_icon['alt']; ?>">
                    </div>
                    <div class="service-text">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <?php }
                        }else{
                            echo 'No post';
                        }
                        wp_reset_postdata();
            ?>


        </div>
    </div>
</section>
<!-- End services -->

<!-- Start portfolio -->
<section class="portfolio section-padding bg-dark" id="portfolio">
    <div class="section-heading text-center">
    <h3><?php echo $portfolio_heading; ?></h3>
    </div>
    <div class="container">
    <!-- Start tab button -->
    <div class="row">
        <div class="tab-button-list">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">

        <?php

        $terms = get_terms('portfolio_catagory'); // Get all terms of a taxonomy
        if ( $terms && !is_wp_error( $terms ) ) :
        
            foreach ( $terms as $term ) { $slag_name =  $term->slug; ?>
            <a class="nav-item nav-link <?php if($slag_name == 'all'): echo ' active'; endif ?>" id="nav-<?php echo $slag_name; ?>-tab" data-toggle="tab" href="#nav-<?php echo $slag_name; ?>" role="tab"  aria-controls="nav-<?php echo $slag_name; ?>" aria-selected="true"><?php echo $slag_name; ?> </a>
                
            <?php }
            ?>

        <?php
            endif;
        ?>

        </div>
        </div>
    </div>
    <!-- End tab button -->
    <!-- start tab content -->
    <div class="tab-content" id="nav-tabContent">
            <?php 
            $terms = get_terms('portfolio_catagory');

    if ( $terms && !is_wp_error( $terms ) ) :   
        foreach ( $terms as $term ) { $slag_name =  $term->slug; ?>
        <div class="tab-pane fade<?php if($slag_name == 'all'): echo ' active show'; endif ?>" id="nav-<?php echo $slag_name ?>" role="tabpanel" aria-labelledby="nav-<?php echo $slag_name; ?>-tab">
        <div class="row">

        <?php
            $Custom_post = null;
            $Custom_post = new	WP_Query(array(
                'post_type'=>'portfolio',
                'post_status'=>'publish',
                'portfolio_catagory' => $term->slug,
                'posts_per_page' => -1,

                ) );
                if($Custom_post->  have_posts() ){
                    while ($Custom_post->  have_posts() ) {
                    $Custom_post-> the_post(); ?>

                    <div class="col-md-4">
                        <div class="portfolio_box">
                            <div class="portpolio-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                            <div class="porfolio-details">
                            <div class="portfolio-links">
                                <a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>
                                <a href="#"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <a href="#">
                                <h4 class="portfolio-title"><?php the_title(); ?></h4>
                            </a>

                            </div>
                        </div>
                    </div>


            <?php	}
            }else{
                echo ('There Have No portfolio');
            } ?>
            <?php wp_reset_postdata(); ?>




        </div>
        </div>




        <?php } endif; 
    ?>
            
    </div>
    <!-- End tab content -->
    </div>
</section>
<!-- End portfolio -->
<!-- Start about -->
<section class="about section-padding" id="about">
    <div class="container">
    <div class="section-heading text-center">
        <h3> <?php echo $about_heading; ?> </h3>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="about-details">
            <div class="about-text">
                <?php echo $about_text; ?> 
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="about-image">
                <img src="<?php echo $about_image; ?>" alt="About image">            
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End about -->
<!-- Start blog -->
<section class="blog section-padding bg-dark" id="blog">
    <div class="container">
    <div class="section-heading text-center">
        <h3><?php echo $blog_heading; ?></h3>
    </div>
    <div class="blog-carousel owl-carousel">


    <?php
            $Custom_post = null;
            $Custom_post = new	WP_Query(array(
                'post_type'=>'post',
                'post_status'=>'publish',
                'posts_per_page' => 5,

              ) );
                if($Custom_post->  have_posts() ){
                  while ($Custom_post->  have_posts() ) {
                    $Custom_post-> the_post();

                    ?>
                    <article class="single-blog">
                        <div class="blogimage">
                            <?php echo the_post_thumbnail( 'large' ); ?>
                            <img src="assets/images/blog/blog-5.jpg" alt="">
                        </div>
                        <div class="blog-details">

                            <a href="<?php echo the_permalink(); ?>">
                            <h2><?php echo the_title(); ?></h2>
                            </a>
                            <div class="blog-info">
                            <ul>
                                <li class="blog-author"><?php echo get_the_author_meta('first_name'); ?> | </li>
                                <li class="blog-time"><?php echo get_the_date( 'd-m-Y' ); ?> </li>
                            </ul>
                                <?php the_content(); ?>
                            <a href="<?php echo the_permalink(); ?>">Read more</a>
                            </div>
                        </div>
                    </article>  
                <?php	}
                }else{
                  echo ('There Have No post');
                }
              ?>
              <?php wp_reset_postdata(); 
          ?>

        </div>
    </div>
</section>
<!-- End blog -->
  <!-- Start Claient testimonial section -->
  <section class="testimonial section-padding">
    <div class="container">
      <div class="section-heading text-center">
        <h3> <?php echo $testimonial_heading; ?> </h3>
      </div>
      <div class="testimonial-carousel owl-carousel">
        <div class="single-testimonial-item">
          <div class="single-wraper text-center">
            <!-- <img src="assets/images/blog/blog-3.jpg" alt=""> -->
            <div class="claient-image" style="background-image: url(assets/images/blog/blog-1.jpg)">

            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, aspernatur! Distinctio laudantium veritatis dolorem neque doloribus at sequi deleniti ipsum.</p>
            <h5>John smith</h5>
            <strong>Ceo/Marketing Manager</strong>
          </div>
        </div>
        <div class="single-testimonial-item">
          <div class="single-wraper text-center">
            <!-- <img src="assets/images/blog/blog-3.jpg" alt=""> -->
            <div class="claient-image" style="background-image: url(assets/images/blog/blog-1.jpg)">

            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, aspernatur! Distinctio laudantium veritatis dolorem neque doloribus at sequi deleniti ipsum.</p>
            <h5>John smith</h5>
            <strong>Ceo/Marketing Manager</strong>
          </div>
        </div>
        <div class="single-testimonial-item">
          <div class="single-wraper text-center">
            <!-- <img src="assets/images/blog/blog-3.jpg" alt=""> -->
            <div class="claient-image" style="background-image: url(assets/images/blog/blog-1.jpg)">

            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, aspernatur! Distinctio laudantium veritatis dolorem neque doloribus at sequi deleniti ipsum.</p>
            <h5>John smith</h5>
            <strong>Ceo/Marketing Manager</strong>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Claient testimonial section -->
<!-- Start contact -->
<section class="contact section-padding bg-dark">
    <div class="section-heading text-center">
    <h3> <?php echo $contact_heading; ?> </h3>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="contact details">
           <?php echo $contact_section_details; ?> 
        </div>

        </div>
        <div class="col-md-6">
            <div class="contact-form">
                 <?php echo do_shortcode($front_page_contact_form); ?>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End contact -->

<!-- Start claient -->
<section class="claient section-padding">
    <div class="container">
        <div class="section-heading text-center">
        <h3> <?php echo $client_carousel_heading; ?> </h3>
        </div>
        <div class="feature-carousel owl-carousel">
        <?php
        
            $myGalleryIDs = explode(',', $green_theme_global['claient_carousel_images']);
            foreach($myGalleryIDs as $myPhotoID){
            $photoArray = wp_get_attachment($myPhotoID);

            ?>           

            <img src="<?php echo $photoArray['src']; ?>" alt="<?php echo $photoArray['alt']; ?>">
            
            <?php } ?>

        </div>
    </div>
</section>
<!-- End claient -->


<?php get_footer(); ?>