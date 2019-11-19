
<?php
/*
Template Name: About Page
*/
get_header(); ?>


  <!-- Start page-hero section -->
  <section class="page-hero text-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" >
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
  </section>
  <!-- End page-hero section -->
  <!-- Start feature section -->
  <section class="feature section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="single-feature">
            <!-- <i class="fas fa-mobile-alt"></i> -->
            <img src="assets/images/client/client-2.png" alt="">
            <h3>Frature one</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, nemo.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-feature">
            <i class="fas fa-mobile-alt"></i>
            <!-- <img src="assets/images/client/client-2.png" alt=""> -->
            <h3>Frature one</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, nemo.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-feature">
            <i class="fas fa-mobile-alt"></i>
            <!-- <img src="assets/images/client/client-2.png" alt=""> -->
            <h3>Frature one</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, nemo.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-feature">
            <!-- <i class="fas fa-mobile-alt"></i> -->
            <img src="assets/images/client/client-2.png" alt="">
            <h3>Frature one</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, nemo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature section -->
  <!-- Start about skill section -->
  <section class="about-skill">
    <div class="about-skill-wraper">
      <div class="wraper-box bg-overlay background-image" style="	background-image: url(assets/images/hero/hero-3.jpg)" >

      </div>
      <div class="wraper-box">
        <div class="skill-content ">
            <div class="section-heading text-center">
                <h3>Our skills</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem veniam praesentium hic earum aliquid
                  vitae, quibusdam nesciunt rerum voluptates assumenda.</p>
              </div>
            <div class="skills">
                <div class="skill_progress">
                  <div class="single_progress">
                    <span class="progress-title">HTML</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                        aria-valuemax="100" style="width: 90%;">
                        <div class="progress-status">90%</div>
                      </div>
                    </div>
                  </div>
                  <div class="single_progress">
                    <span class="progress-title">CSS</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%;">
                        <div class="progress-status">75%</div>
                      </div>
                    </div>
                  </div>
                  <div class="single_progress">
                    <span class="progress-title">Javascript</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;">
                        <div class="progress-status">80%</div>
                      </div>
                    </div>
                  </div>
                  <div class="single_progress">
                    <span class="progress-title">WordPress</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                        aria-valuemax="100" style="width: 65%;">
                        <div class="progress-status">65%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
    <div class="about-skill-wraper">
      <div class="wraper-box">
      <div class="skill-content ">
        <div class="row">
          <div class="col-md-6">
            <div class="single-count text-center">
              <i class="fas fa-phone"></i>
              <h3>2,5236</h3>
              <strong>SUBCRIBERS</strong>
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-count text-center">
              <i class="fas fa-phone"></i>
              <h3>2,5236</h3>
              <strong>SUBCRIBERS</strong>
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-count text-center">
              <i class="fas fa-phone"></i>
              <h3>2,5236</h3>
              <strong>SUBCRIBERS</strong>
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-count text-center">
              <i class="fas fa-phone"></i>
              <h3>2,5236</h3>
              <strong>SUBCRIBERS</strong>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="wraper-box bg-overlay background-image" style="	background-image: url(assets/images/hero/hero-3.jpg)">

      </div>

    </div>
  </section>
  <!-- End about skill section -->
  <!-- Start team setion -->
  <section class="team section-padding">
  <div class="container">
      <div class="section-heading text-center">
          <h3>Our Team</h3>
          <p>Maecenas tempus, tellus eget condimentum rhon cus, sem quam semper libero</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="single-team-member">
            <img src="assets/images/about/about-1.jpg" alt="">
            <h3>Michael James</h3>
            <strong>Designer</strong>
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-yelp"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-team-member">
            <img src="assets/images/about/about-1.jpg" alt="">
            <h3>Michael James</h3>
            <strong>Designer</strong>
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-yelp"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-team-member">
            <img src="assets/images/about/about-1.jpg" alt="">
            <h3>Michael James</h3>
            <strong>Designer</strong>
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-yelp"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End team setion -->



 
<?php get_footer(); ?>