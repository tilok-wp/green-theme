<?php get_header(); ?>

  <!-- Start page-hero section -->
  <section class="page-hero text-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" >
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
  </section>
  <!-- End page-hero section -->
  <!-- Start blog section -->
  <main class="blog-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

        <?php 
              if( have_posts() ){
                  while( have_posts() ){
                      the_post(); 
                      
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
                          
                  <?php }
                  }else{
                      echo 'No post';
                  }
                  wp_reset_postdata();
          ?>

        </div>
        <div class="col-md-4">
          <aside class="sidebar">
            <div class="singel_blog_side_bar">
              <h4>Search form</h4>
              <form action="">

              </form>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </main>
  <!-- End blog section -->


<?php get_footer(); ?>
