<?php 
  /*
    Template Name: Compare
  */
  get_header(); 
$bannersec = array();
$bannersec = get_field('bannersec', get_the_ID());
$pagebanner = $bannersec['bannerimage'];
if( empty($pagebanner) ) $pagebanner = THEME_URI.'/assets/images/page-banner-compare.jpg';
?>
<section class="main-banner page-banner" style="background: url(<?php echo $pagebanner; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-bnr-slider">
          <div class="main-bnr-slide-item clearfix page-banner-con">
            <div class="main-bnr-slide-item-des">
              <div>
                <?php
                  if( !empty($bannersec['title']) ) printf('<h1>%s</h1>', $bannersec['title']); 
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
<?php 
  if ( (isset($_GET['bbrand']) && !empty($_GET['brand_one'])) || ( isset($_GET['brand_two']) && !empty($_GET['brand_two']) ) || ( isset($_GET['brand_three']) && !empty($_GET['brand_three'])) ){
    get_template_part( 'templates/compare', 'results' );
  }else{
    get_template_part( 'templates/compare', 'filter' );
  }
?>

<?php get_footer(); ?>