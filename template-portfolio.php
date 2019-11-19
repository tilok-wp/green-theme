
<?php
/*
Template Name: Portfolio Page
*/
get_header(); ?>


  <!-- Start page-hero section -->
  <section class="page-hero text-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" >
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
  </section>
  <!-- End page-hero section -->
  <!-- Start portfolio -->
  <section class="portfolio section-padding" id="portfolio">
    <div class="section-heading text-center">
      <h3>Portfolio</h3>
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
  <?php echo do_shortcode('[slider_call-1]'); ?>



<?php get_footer();

?>