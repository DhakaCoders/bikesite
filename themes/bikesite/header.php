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
<?php 
$logoObj = get_field('hdlogo', 'options');
$smedias = get_field('socialmedia', 'options');
if( is_array($logoObj) ){
  $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
  $logo_tag = '';
}
?>
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
              <?php if(!empty($smedias)):  ?>
              <ul class="clearfix ulc">
              <?php 
                foreach($smedias as $smedia): 
              ?>
                <li><a target="_blank" href="<?php echo $smedia['url']; ?>">
                  <?php echo $smedia['icon']; ?>
                </a></li>
              <?php 
                endforeach; 
              ?>
              </ul>
              <?php endif; ?>
              </div>
              <div class="showrooms-btn hide-sm">
                <button><i class="fas fa-store"></i>Showrooms</button>
              </div>
              <div class="hdr-search">
                <form action="<?php echo esc_url( home_url('/') );?>" method="get">
                  <input type="search" name="s" value="<?php the_search_query(); ?>" placeholder="Search here...">
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
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo $logo_tag; ?>
                  </a>
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
                  <?php 
                    $menuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $menuOptions ); 
                  ?>
                  </div>
                  <div class="hdr-topbar-social show-sm">
                  <?php if(!empty($smedias)):  ?>
                  <ul class="clearfix ulc">
                  <?php 
                    foreach($smedias as $smedia): 
                  ?>
                    <li><a target="_blank" href="<?php echo $smedia['url']; ?>">
                      <?php echo $smedia['icon']; ?>
                    </a></li>
                  <?php 
                    endforeach; 
                  ?>
                  </ul>
                  <?php endif; ?>
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