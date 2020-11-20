<?php get_header(); ?>
<?php 
$hmfilter = false;
if ( (isset($_GET['bbrand']) && !empty($_GET['bbrand'])) || ( isset($_GET['bcapacity']) && !empty($_GET['bcapacity']) ) || ( isset($_GET['btype']) && !empty($_GET['btype'])) || ( isset($_GET['price-range']) && !empty($_GET['price-range']))){
  $hmfilter = true;
}

if($hmfilter){
?>
<section class="filter-banner samlle-banner inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/h4-img-42.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="samlle-banner-des-cntlr">
          <div class="samlle-banner-des page-banner-con">
            <div>
              <h1></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-con-section search-filter-section">
            <div class="bt-search-filter-sec-hdr">
              <h4><span>Search a <br>bike you like</span></h4>
            </div>
            <div class="bt-filter-search-controller">
              <?php get_template_part('templates/home', 'search'); ?>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

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

            get_template_part( 'templates/home', 'brands' );
          ?>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>