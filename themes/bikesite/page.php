  <?php 
  get_header(); 
  while ( have_posts() ) :
  the_post();

  $pagebanner = get_field('bannerimage', get_the_ID());
  if( empty($pagebanner) ) $pagebanner = THEME_URI.'/assets/images/page-banner-compare.jpg';
  ?> 
<section class="main-banner compare-page-bnr page-banner" style="background: url(<?php echo $pagebanner; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-bnr-slider">
          <div class="main-bnr-slide-item clearfix page-banner-con">
            <div class="main-bnr-slide-item-des">
              <div>
                <h1>Confused? Easy way to <br>compare bikes</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
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
          <?php the_content(); ?>
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