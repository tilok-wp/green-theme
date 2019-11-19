
<?php global  $green_theme_global;
/*
Template Name: Contact Page
*/
get_header();
  $office_info_heading = get_field('office_info_heading', false, false );
  $office_info_content = get_field('office_info_content');
  $contact_form_heading = get_field('contact_form_heading', false, false);
  $contact_form_short_code = get_field('contact_form_short_code', false, false);
  $contact_form_map_link = get_field('google_map_link', false, false);
  $client_carousel_heading = get_field('client_carousel_heading');
?>

  <!-- Start page-hero section -->
  <section class="page-hero text-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" >
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
  </section>
  <!-- End page-hero section -->
 
  <section class="contact-info section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-info">
            <div class="section-heading ">
              <h3><?php echo $office_info_heading; ?></h3>
            </div>
            <?php echo $office_info_content; ?>
            
            <?php if(! dynamic_sidebar( 'social_widget' )) ?>

          </div>
        </div>
        <div class="col-md-8">
          <div class="contact-info">
            <div class="section-heading ">
              <h3><?php echo $contact_form_heading; ?></h3>
            </div>
            <div class="contact-form">
              <?php echo do_shortcode($contact_form_short_code); ?>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- Start location map -->
   <div class="location-map">
   <iframe src="https://www.google.com/maps/embed?pb=<?php echo $contact_form_map_link; ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
  <!-- End location map -->
  <!-- Start claient -->
  <section class="claient section-padding">
    <div class="container">
      <div class="section-heading text-center">
        <h3><?php echo $client_carousel_heading; ?></h3>
      </div>
      <div class="feature-carousel owl-carousel">
        <?php 
        
          $myGalleryIDs = explode(',', $green_theme_global['claient_carousel_images']);
          foreach($myGalleryIDs as $myPhotoID){
            $photoArray = wp_get_attachment($myPhotoID);
            // print_r($photoArray);
            ?>
            

            <img src="<?php echo $photoArray['src']; ?>" alt="<?php echo $photoArray['alt']; ?>">
            
         <?php }

  
       ?>


      </div>
    </div>
  </section>
  <!-- End claient -->

<?php get_footer();

?>