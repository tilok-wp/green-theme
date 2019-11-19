<?php  global $green_theme_global; ?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body <?php body_class(); ?> >
    <!-- Start header  -->
    <header class="header" id="home-top">
      <div class="header-top-bar">
        <div class="container">
          <div class="row">
            <div class="top-wraper">
              <div class="top-left">
                <?php echo $green_theme_global['header_top_text'] ?>
              </div>
              <div class="top-right">
                Socials:
                <div class="socials-icon">
                  <?php if(! dynamic_sidebar( 'social_widget' )) ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="header-main">
        <nav class="manubar">
          <div class="container">
            <div class="row">
              <div class="col-md-2 order-md-1">
                <div class="logo-box">
                  <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo($green_theme_global['site_logo']['url']) ?>" alt="<?php echo($green_theme_global['site_logo']['alt']) ?>" class="main-logo">
                    <!-- <h1 class="text-logo"><?php echo($green_theme_global['text_logo']) ?></h1> -->
                  </a>
                  <a class="manubar-toggler">
                    <i class="fas fa-times"></i>
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-9 order-md-2">
                <div class="main-menu">

                <?php wp_nav_menu(array(
                  'theme_loaction' => 'header-main_menu',
                  'fallback_cb' => 'green_theme_falback_menu',
                  'container' => '',
                  'menu_class' => ''
              )); 
               ?>

                </div>
              </div>
              <div class="col-md-1 order-md-3">
                <div class="menu-right">
                  <a class="search-toggler">
                    <i class="fas fa-times"></i>
                    <i class="fas fa-search"></i>
                  </a>
                  <div class="serarch-form">
                    <form method="GET" action="<?php bloginfo('home'); ?>">
                      <input type="text" name="s" placeholder="Input keyword" required>
                      <button type="submit" value="" class="fas fa-search"></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- End header  -->