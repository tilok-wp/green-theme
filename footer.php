<?php  global $green_theme_global;
?>

    <!-- Start foorter -->
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

          <?php 
            if(!dynamic_sidebar( 'footer_col_widget' )) 
              echo 'There have no footer content';            
            ?>

          </div>

        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="footer-copywright">
          <?php echo $green_theme_global['copywrigt_text'] ?>
          </div>

        </div>

      </div>

    </footer>
    <!-- End foorter -->
    <!-- End To Top Link -->
    <!-- Start preloader-area -->
    <div class="preloader-area">
      <div class='preloader'>
        <div class="lds-ellipsis">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <!-- End preloader-area -->

    <?php wp_footer(); ?>
  </body>

  </html>