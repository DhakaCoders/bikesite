<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- <div id="preloader">
    <div id="status1">
      <img src="<?php echo THEME_URI; ?>/assets/images/looding-img.gif">
    </div>
</div>  --> 
<div class="bdoverlay"></div>
<header class="header">
  <div class="hdr-topbar">
    <div class="hdr-topbar-inr">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="hdr-topbar-inner clearfix">
              <div class="hdr-topbar-social hide-sm">
                <ul class="ulc">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
              </div>
              <div class="showrooms-btn hide-sm">
                <button><i class="fas fa-store"></i>Showrooms</button>
              </div>
              <div class="hdr-search">
                <form>
                  <input type="search" name="" placeholder="Search here...">
                  <button>
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-btm-bar">
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="header-inr clearfix">
              <div class="hdr-lft">
                <div class="logo">
                  <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/bd-logo.svg"></a>
                </div>
              </div>
              <div class="hdr-rgt">
                <div class="line-icon show-sm">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <nav class="main-nav">
                  <div class="main-nav-inr">
                    <div class="closebtn show-sm">
                      <span></span>
                      <span></span>
                    </div>
                    <ul class="clearfix">
                      <li><a href="#">Home</a></li>
                      <li class="menu-item-has-children">
                        <a href="#">Bikes</a>
                        <ul class="sub-menu">
                          <li><a href="#">sub menu</a></li>
                          <li><a href="#">sub menu</a></li>
                          <li><a href="#">sub menu</a></li>
                          <li><a href="#">sub menu</a></li>
                          <li><a href="#">sub menu</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Scooters</a>
                        <ul class="sub-menu">
                          <li><a href="#">sub menu</a></li>
                          <li><a href="#">sub menu</a></li>
                          <li><a href="#">sub menu</a></li>
                          <li><a href="#">sub menu</a></li>
                          <li><a href="#">sub menu</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Offers</a></li>
                      <li><a href="#">Compare</a></li>
                      <li><a href="#">User Review</a></li>
                      <li><a href="#">Help Post</a></li>
                    </ul>
                  </div>
                  <div class="hdr-topbar-social show-sm">
                    <ul class="ulc">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                    <div class="showrooms-btn">
                      <button><i class="fas fa-store"></i>Showrooms</button>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</header>