<?php get_header(); ?>
<?php
$currentcat = get_queried_object(); 
$bannersec = array(); $pagebanner = '';
$bannersec = get_field('banner', HOMEID);
$bannertype = $bannersec['banner_type'];

if( $bannertype == 'image' ):
  $pbanner = $bannersec['bannerimage'];
  if( !empty($pbanner) ) $pagebanner = $pbanner;
endif;
?>
<section class="main-banner page-banner home-page-bnr" style="background: url(<?php echo $pagebanner; ?>);">
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

<section class="main-content archive-main-content">
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
          <div class="main-con-section">
            <div class="pt-15 fl-sec-hdr">
              <h4><?php echo $currentcat->name; ?></h4>
            </div>
            <div class="bt-grd-controller">
              <?php if(have_posts()): ?>
              <ul class="clearfix ulc">
                <?php 
                  while ( have_posts() ) : the_post();
                  $fullspe = get_field( 'full_specifications' );
                  $engtrans = get_field( 'enginetransmission' );
                  $price = get_field( 'priceav' );
                  $imgsec = get_field( 'featuredimg' );
                  $gridimgID = $imgsec['featured_image'];  
                ?>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="<?php the_permalink(); ?>">
                        <?php
                          if( !empty($gridimgID) )
                            echo cbv_get_image_tag($gridimgID);
                          else
                            echo '<img src="'.THEME_URI.'/assets/images/product-1.jpg" alt="">';
                        ?>
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <?php if( !empty($fullspe['year']) ) printf('<li>%s</li>', $fullspe['year']); ?>
                            <li>MANUAL</li>
                            <?php if( !empty($engtrans['fuel_type']) ) printf('<li>%s</li>', $engtrans['fuel_type']); ?>
                            <?php if( !empty($engtrans['displacement_cc']) ) printf('<li>%s CC</li>', $engtrans['displacement_cc']); ?>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                              <?php if( !empty($engtrans['rpm']) ) printf('<span>%s RPM</span>', $engtrans['rpm']); ?>
                          </div>
                          <div class="product-price"> 
                            <?php if( !empty($price['price']) ) printf('<span>BDT %s</span>', $price['price']); ?>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <?php endwhile; ?><!-- end of the loop -->
              </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>