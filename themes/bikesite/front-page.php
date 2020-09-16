<?php get_header(); ?>
<?php 
$hmfilter = false;
if ( (isset($_GET['bbrand']) && !empty($_GET['bbrand'])) || ( isset($_GET['bcapacity']) && !empty($_GET['bcapacity']) ) || ( isset($_GET['btype']) && !empty($_GET['btype'])) || ( isset($_GET['price-range']) && !empty($_GET['price-range']))){
  $hmfilter = true;
}

if($hmfilter){
?>
<section class="hm-bike-filter">
<?php }else{ ?>
<?php 
$bannersec = array(); $pagebanner = '';
$bannersec = get_field('banner', HOMEID);
$bannertype = $bannersec['banner_type'];

if( $bannertype == 'image' ):
  $pbanner = $bannersec['bannerimage'];
  if( !empty($pbanner) ) $pagebanner = $pbanner;
endif;
?>
<section class="main-banner page-banner home-page-bnr" style="background: url(<?php echo $pagebanner; ?>);">
  <?php 
    if( $bannertype == 'video' ): 
    $mp4_video = $bannersec['mp4_video'];
    $ogg_video = $bannersec['ogg_video'];
  ?>
  <div class="bnr-vdo">
    <video id="bt-vdo" autoplay muted >
      <?php if( !empty($mp4_video) ): ?>
        <source src="<?php echo $mp4_video; ?>" type="video/mp4">
      <?php endif; ?>
      <?php if( !empty($ogg_video) ): ?>
      <source src="<?php echo $ogg_video; ?>" type="video/ogg">
      <?php endif; ?>
      Your browser does not support HTML5 video.
    </video>
  </div>
  <?php endif; ?>
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

<section>  
<?php } ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-con-section search-filter-section">
            <div class="bt-search-filter-sec-hdr">
              <h4><span>search your <br>bike</span></h4>
            </div>
            <div class="bt-filter-search-controller">
              <?php get_template_part('templates/home', 'search'); ?>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<!-- <div class="welcome-section text-center">
  <img src="<?php echo THEME_URI; ?>/assets/images/yamaha-fzs-fi-v3-abs-banner.jpg">
</div> -->

<section class="main-content home-main-content">
<div class="hasImg">
  <img src="<?php echo THEME_URI; ?>/assets/images/bgimg1.jpg">
</div>
  <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3">
          <div class="fl-lft-sidebar">
            <?php get_sidebar(); ?>
          </div>
        </div>
        <div class="col-sm-12 col-md-9">
          <?php 
            if ( $hmfilter ){
              get_template_part( 'templates/home-search', 'results' );
            }else{
              get_template_part( 'templates/home', 'main' );
            }
          ?>
          <div class="main-con-section">
            <div class="fl-sec-hdr">
              <h4>Popular Brands</h4>
            </div>
            <?php 
            $brands = get_terms( array(
              'taxonomy' => 'brand',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
            <div class="popular-brands-logos">
              <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
              <ul class="clearfix ulc">
                <?php 
                  $toalTerm = count($brands);
                  $totalActiveTerm = 0;
                  $i = 1;
                  foreach ( $brands as $brand ) { 
                  $is_popular = get_field('is_that_popular', $brand);
                  if($is_popular):
                    $totalActiveTerm = $i;
                ?>
                <li>
                  <a href="<?php echo get_term_link($brand); ?>">
                    <figure>
                      <?php 
                        $blogoID = get_field('blogo', $brand);
                        if( !empty($blogoID) ) echo cbv_get_image_tag($blogoID);
                      ?>
                    </figure>
                    <strong><?php echo $brand->name; ?></strong>
                  </a>
                </li>
                <?php $i++; endif; } ?>
                <?php if( $toalTerm > $totalActiveTerm ): ?>
                <li class="brands-more-items">
                  <a href="<?php echo home_url('brand'); ?>">
                    <strong>More item</strong>
                  </a>
                </li>
                <?php endif; ?>
              </ul>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>