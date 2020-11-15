<?php 
$bannersec = array();
$bannersec = get_field('bannersec', get_the_ID());
$pagebanner = $bannersec['bannerimage'];
if( empty($pagebanner) ) $pagebanner = THEME_URI.'/assets/images/h4-img-42.jpg';
?>
<section class="samlle-banner inline-bg" style="background: url(<?php echo $pagebanner; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="samlle-banner-des-cntlr">
          <div class="samlle-banner-des page-banner-con">
            <div>
              <?php if( !empty($bannersec['title']) ) printf('<h4>%s</h4>', $bannersec['title']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="main-content showrooms-main-content">
<div class="hasImg">
  <img src="<?php echo THEME_URI; ?>/assets/images/bgimg1.jpg">
</div>
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-con-section">
            <div class="fl-sec-hdr">
              <h4>Showrooms in Bnagladesh</h4>
            </div>
            <?php 
            $brands = get_terms( array(
              'taxonomy' => 'brand',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
            <div class="showrooms-cntrl">
              <div class="popular-brands-logos">
                <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
                <ul class="clearfix ulc">
                <?php 
                  $i = 1;
                  foreach ( $brands as $brand ) { 
                ?>
                  <li>
                    <a href="<?php echo esc_url( home_url('showroom/?brand='.$brand->slug) ); ?>">
                      <figure>
                        <?php 
                          $blogoID = get_field('blogo', $brand);
                          if( !empty($blogoID) ) echo cbv_get_image_tag($blogoID);
                        ?>
                      </figure>
                      <strong><?php echo $brand->name; ?></strong>
                    </a>
                  </li>
                <?php } // end of foreach ?>
                </ul>
                <?php } // end of if condition ?>
              </div>
            </div>
            
          </div>
        </div>
      </div>
  </div>    
</section>