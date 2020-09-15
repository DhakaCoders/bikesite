<?php 
  get_header(); 
  while ( have_posts() ) :
  the_post();

  $description = get_field('description', get_the_ID());
  $bannersec = array();
  $bannersec = get_field('bannersec', get_the_ID());
  $pagebanner = $bannersec['bannerimage'];
  if( empty($pagebanner) ) $pagebanner = THEME_URI.'/<?php echo THEME_URI; ?>/assets/images/page-banner-compare.jpg';
?> 
<section class="main-banner page-banner" style="background: url(<?php echo $pagebanner; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-bnr-slider">
          <div class="main-bnr-slide-item clearfix page-banner-con">
            <div class="main-bnr-slide-item-des">
              <div>
                <?php if( !empty($bannersec['title']) ) printf('<h5>%s</h5>', $bannersec['title']); ?>
                <?php
                  if( !empty($bannersec['subtitle']) ) printf('<h1>%s</h1>', $bannersec['subtitle']); 
                  if( !empty($bannersec['description']) ) echo wpautop( $bannersec['description'] ); 
                ?>
              </div>
            </div>
<!--             <div class="main-bnr-slide-item-img">
              <img src="<?php echo THEME_URI; ?>/assets/images/layer_img_1.png">
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="main-content">
<div class="hasImg">
  <img src="<?php echo THEME_URI; ?>/assets/images/bgimg1.jpg">
</div>
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="bt-default-page-con">
          <?php echo wpautop( $description ); ?>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>    
</section>
<?php
endwhile;
get_footer(); 
?>