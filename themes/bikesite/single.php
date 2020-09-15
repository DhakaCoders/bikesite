<?php 
get_header(); 
while ( have_posts() ) :
the_post();
$bannersec = array();
$bannersec = get_field('bannersec', get_the_ID());
$pagebanner = $bannersec['bannerimage'];
if( empty($pagebanner) ) $pagebanner = THEME_URI.'/assets/images/h4-img-42.jpg';
?> 
<section class="main-banner page-banner" style="background: url(<?php echo $pagebanner; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-bnr-slider">
          <div class="main-bnr-slide-item clearfix">
            <div class="main-bnr-slide-item-des page-banner-con">
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
<?php 
$bikeimage = get_field( 'featuredimg' );
$fullspe = get_field( 'full_specifications' );
$engtrans = get_field( 'enginetransmission' );
$eoil = get_field( 'engine_oil' );
$bodybike = get_field( 'bodybike' );
$electr = get_field( 'electricals' );
$extrafe = get_field( 'extra_features' );
$price = get_field( 'priceav' );


$tbrands = get_the_terms( get_the_ID(), 'brand' );
$brand_name = '';
if ( ! empty( $tbrands ) ) {
    foreach( $tbrands as $tbrand ) {
      $brand_name = $tbrand->name; 
    }
}
$btypes = get_the_terms( get_the_ID(), 'bike_type' );
$btype_name = '';
if ( ! empty( $btypes ) ) {
    foreach( $btypes as $btype ) {
      $btype_name = $btype->name; 
    }
}
?>

<section class="main-content">
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
          <div class="single-page-con-ctrl">
            <div class="bt-bike-gallery-section clearfix">
              <div class="bt-bike-gallery-sec-lft-con">
                <div class="bt-bike-gallery-slider">
                  <div class="bt-bike-gallery-full-img" id="btBikeGallerySlider">
                    <?php 
                      if( $bikeimage ):
                      $galleries = $bikeimage['gallery'];
                      $featured_image = $bikeimage['featured_image'];
                      if($galleries): 
                    ?>
                    <?php foreach( $galleries as $galleryid ): ?>
                    <div class="bt-bike-gallery-full-img-item">
                      <?php if( !empty($galleryid) ){
                        echo cbv_get_image_tag($galleryid['id']);
                      }?>
                    </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <div class="bt-bike-gallery-full-img-item">
                      <?php if( !empty($featured_image) ){
                        echo cbv_get_image_tag($featured_image);
                      }?>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="bt-bike-gallery-main-fea">
                <h4><?php the_title(); ?></h4>
                <ul class="clearfix specification-tbl ulc">
                  <li class="clearfix">
                    <span>Bike Brand</span>
                    <?php 
                      if( !empty($brand_name) )
                        printf('<span>%s</span>', $brand_name);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Bike Type</span>
                    <?php 
                      if( !empty($btype_name) )
                        printf('<span>%s</span>', $btype_name);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Engine </span>
                    <?php 
                      if( !empty($engtrans['engine_type']) )
                        printf('<span>%s</span>', $engtrans['engine_type']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Mileage</span>
                    <?php 
                      if( !empty($engtrans['mileage_company']) )
                        printf('<span>%s Kmpl - (approx)</span>', $engtrans['mileage_company']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Brand Origin</span>
                    <?php 
                      if( !empty($fullspe['brand_origin']) )
                        printf('<span>%s</span>', $fullspe['brand_origin']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Made in</span>
                    <?php 
                      if( !empty($fullspe['assemblemade']) )
                        printf('<span>%s</span>', $fullspe['assemblemade']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>BDT</span>
                    <?php 
                      if( !empty($price['price']) )
                        printf('<span>৳ %s (approx)</span>', $price['price']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                </ul>
              </div>
            </div>

            <div class="bt-full-specifications-ctrl">
              <h5 class="bt-full-specifications-entry-title">Full Specifications of <?php the_title(); ?></h5>
              <div class="bt-full-specifications-row-01 bt-full-specifications-row">
                <?php if( $fullspe ): ?>
                <ul class="clearfix specification-tbl specification-tbl-sub ulc">
                  <li class="clearfix">
                    <span>Bike Name</span>
                    <?php 
                      if( !empty($fullspe['bike_name']) )
                        printf('<span>%s</span>', $fullspe['bike_name']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Brand</span>
                    <?php 
                      if( !empty($brand_name) )
                        printf('<span>%s</span>', $brand_name);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Bike Category</span>
                    <?php 
                      if( !empty($fullspe['bike_category']) )
                        printf('<span>%s</span>', $fullspe['bike_category']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Brand Origin</span>
                    <?php 
                      if( !empty($fullspe['brand_origin']) )
                        printf('<span>%s</span>', $fullspe['brand_origin']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Assemble/Made in</span>
                    <?php 
                      if( !empty($fullspe['assemblemade']) )
                        printf('<span>%s</span>', $fullspe['assemblemade']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <?php 
                  $extoptions = $fullspe['additional_options']; 
                  if( $extoptions ):
                  foreach( $extoptions as $extoption ):  
                  ?>
                  <li class="clearfix">
                    <?php if( !empty($extoption['label']) ) printf('<span>%s</span>', $extoption['label']); ?>
                    <?php if( !empty($extoption['option_name']) ) printf('<span>%s</span>', $extoption['option_name']); ?>
                  </li>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
                <?php endif; ?>
              </div>
              <div class="bt-full-specifications-row-02 bt-full-specifications-row">
                <h6>Engine and Transmission</h6>
                <?php if( $engtrans ): ?>
                <ul class="clearfix specification-tbl specification-tbl-sub ulc">
                  <li class="clearfix">
                    <span>Transmission</span>
                    <?php 
                      if( !empty($engtrans['transmission']) )
                        printf('<span>%s</span>', $engtrans['transmission']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Engine Type</span>
                    <?php 
                      if( !empty($engtrans['engine_type']) )
                        printf('<span>%s</span>', $engtrans['engine_type']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Displacement (cc)</span>
                    <?php 
                      if( !empty($engtrans['displacement_cc']) )
                        printf('<span>%s cc</span>', $engtrans['displacement_cc']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Max Power</span>
                    <?php 
                      if( !empty($engtrans['max_power']) )
                        printf('<span>%s rpm <strong>(Max Power Converter)</strong></span>', $engtrans['max_power']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Max Torque</span>
                    <?php 
                      if( !empty($engtrans['max_torque']) )
                        printf('<span>%s rpm <strong>(Max Torque Converter)</strong></span>', $engtrans['max_torque']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Mileage (Company)</span>
                    <?php 
                      if( !empty($engtrans['mileage_company']) )
                        printf('<span>%s KM/L (Approx) <strong>(Fuel Measure Converter)</strong></span>', $engtrans['mileage_company']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Reserve Fuel Capacity</span>
                    <?php 
                      if( !empty($engtrans['reserve_fuel_capacity']) )
                        printf('<span>%s litres</span>', $engtrans['reserve_fuel_capacity']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Bore x Stroke</span>
                    <?php 
                      if( !empty($engtrans['bore_x_stroke']) )
                        printf('<span>%s</span>', $engtrans['bore_x_stroke']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?> 
                  </li>
                  <li class="clearfix">
                    <span>Cooling</span>
                    <?php 
                      if( !empty($engtrans['cooling']) )
                        printf('<span>%s</span>', $engtrans['cooling']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Starting Method</span>
                    <?php 
                      if( !empty($engtrans['starting_method']) )
                        printf('<span>%s</span>', $engtrans['starting_method']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Gears</span>
                    <?php 
                      if( !empty($engtrans['gears']) )
                        printf('<span>%s</span>', $engtrans['gears']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Clutch</span>
                    <?php 
                      if( !empty($engtrans['clutch']) )
                        printf('<span>%s</span>', $engtrans['clutch']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <?php 
                  $extoptions = $engtrans['additional_options']; 
                  if( $extoptions ):
                  foreach( $extoptions as $extoption ):  
                  ?>
                  <li class="clearfix">
                    <?php if( !empty($extoption['label']) ) printf('<span>%s</span>', $extoption['label']); ?>
                    <?php if( !empty($extoption['option_name']) ) printf('<span>%s</span>', $extoption['option_name']); ?>
                  </li>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
                <?php endif; ?>
              </div>

              <div class="bt-full-specifications-row-03 bt-full-specifications-row">
                <h6>Engine Oil</h6>
                <?php if( $eoil ): ?>
                <ul class="clearfix specification-tbl specification-tbl-sub ulc">
                  <li class="clearfix">
                    <span>Mineral</span>
                    <?php 
                      if( !empty($eoil['mineral']) )
                        printf('<span>%s</span>', $eoil['mineral']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Synthetic</span>
                    <?php 
                      if( !empty($eoil['synthetic']) )
                        printf('<span>%s</span>', $eoil['synthetic']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <?php 
                  $extoptions = $eoil['additional_options']; 
                  if( $extoptions ):
                  foreach( $extoptions as $extoption ):  
                  ?>
                  <li class="clearfix">
                    <?php if( !empty($extoption['label']) ) printf('<span>%s</span>', $extoption['label']); ?>
                    <?php if( !empty($extoption['option_name']) ) printf('<span>%s</span>', $extoption['option_name']); ?>
                  </li>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
                <?php endif; ?>
              </div>

              <div class="bt-full-specifications-row-04 bt-full-specifications-row">
                <h6>Body</h6>
                <?php if( $bodybike ): ?>
                <ul class="clearfix specification-tbl specification-tbl-sub ulc">
                  <li class="clearfix">
                    <span>Chassis Type</span>
                    <?php 
                        if( !empty($bodybike['chassis_type']) )
                          printf('<span>%s</span>', $bodybike['chassis_type']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Dimension (LxWxH)</span>
                    <?php 
                        if( !empty($bodybike['dimension_lxwxh']) )
                          printf('<span>%s</span>', $bodybike['dimension_lxwxh']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Seat Height</span>
                    <?php 
                        if( !empty($bodybike['seat_height']) )
                          printf('<span>%s</span>', $bodybike['seat_height']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Wheel Base (mm)</span>
                    <?php 
                        if( !empty($bodybike['wheel_base_mm']) )
                          printf('<span>%s</span>', $bodybike['wheel_base_mm']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Ground Clearance (mm)</span>
                    <?php 
                        if( !empty($bodybike['ground_clearancemm']) )
                          printf('<span>%s</span>', $bodybike['ground_clearancemm']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Fuel Tank Capacity (L)</span>
                    <?php 
                        if( !empty($bodybike['fuel_tank_capacity']) )
                          printf('<span>%s <strong>(Fuel Measure Converter)</strong></span>', $bodybike['fuel_tank_capacity']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Kerb Weight (KG)</span>
                    <?php 
                        if( !empty($bodybike['kerb_weight']) )
                          printf('<span>%s <strong>(Weight Converter)</strong></span>', $bodybike['kerb_weight']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Suspension Front</span>
                     <?php 
                        if( !empty($bodybike['suspension_front']) )
                          printf('<span>%s</span>', $bodybike['suspension_front']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Suspension Rear</span>
                    <?php 
                        if( !empty($bodybike['suspension_rear']) )
                          printf('<span>%s</span>', $bodybike['suspension_rear']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Brake Front</span>
                    <?php 
                        if( !empty($bodybike['brake_front']) )
                          printf('<span>%s</span>', $bodybike['brake_front']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Brake Rear</span>
                    <?php 
                        if( !empty($bodybike['brake_rear']) )
                          printf('<span>%s</span>', $bodybike['brake_rear']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Wheel Front</span>
                    <?php 
                        if( !empty($bodybike['wheel_front']) )
                          printf('<span>%s</span>', $bodybike['wheel_front']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Wheel Rear</span>
                    <?php 
                        if( !empty($bodybike['wheel_rear']) )
                          printf('<span>%s</span>', $bodybike['wheel_rear']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Tyre Front</span>
                    <?php 
                        if( !empty($bodybike['tyre_front']) )
                          printf('<span>%s</span>', $bodybike['tyre_front']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Tyre Rear</span>
                    <?php 
                        if( !empty($bodybike['tyre_rear']) )
                          printf('<span>%s</span>', $bodybike['tyre_rear']);
                        else
                           printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <?php 
                  $extoptions = $bodybike['additional_options']; 
                  if( $extoptions ):
                  foreach( $extoptions as $extoption ):  
                  ?>
                  <li class="clearfix">
                    <?php if( !empty($extoption['label']) ) printf('<span>%s</span>', $extoption['label']); ?>
                    <?php if( !empty($extoption['option_name']) ) printf('<span>%s</span>', $extoption['option_name']); ?>
                  </li>
                  <?php endforeach; ?>
                  <?php endif; ?> 
                </ul>
                <?php endif; ?>
              </div>

              <div class="bt-full-specifications-row-05 bt-full-specifications-row">
                <h6>Electricals</h6>
                <?php if( $electr ): ?>
                <ul class="clearfix specification-tbl specification-tbl-sub ulc">
                  <li class="clearfix">
                    <span>Battery</span>
                    <?php 
                      if( !empty($electr['battery']) )
                        printf('<span>%s</span>', $electr['battery']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Head Lamp</span>
                    <?php 
                      if( !empty($electr['head_lamp']) )
                        printf('<span>%s</span>', $electr['head_lamp']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Tail Lamp</span>
                    <?php 
                      if( !empty($electr['tail_lamp']) )
                        printf('<span>%s</span>', $electr['tail_lamp']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>GPS & Navigation</span>
                    <?php 
                      if( !empty($electr['gps_navigation']) )
                        printf('<span>%s</span>', $electr['gps_navigation']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Braking System</span>
                    <?php 
                      if( !empty($electr['braking_system']) )
                        printf('<span>%s</span>', $electr['braking_system']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Speedometer</span>
                    <?php 
                      if( !empty($electr['speedometer']) )
                        printf('<span>%s</span>', $electr['speedometer']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Low Fuel Indicator</span>
                    <?php 
                      if( !empty($electr['lowfuelindicator']) )
                        printf('<span>%s</span>', $electr['lowfuelindicator']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Low Oil Indicator</span>
                    <?php 
                      if( !empty($electr['lowoil_indicator']) )
                        printf('<span>%s</span>', $electr['lowoil_indicator']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Low Battery Indicator</span>
                    <?php 
                      if( !empty($electr['lowbatteryindicator']) )
                        printf('<span>%s</span>', $electr['lowbatteryindicator']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Shift Light</span>
                    <?php 
                      if( !empty($electr['shift_light']) )
                        printf('<span>%s</span>', $electr['shift_light']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Clock</span>
                    <?php 
                      if( !empty($electr['clock']) )
                        printf('<span>%s</span>', $electr['clock']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Headlight Bulb Type</span>
                    <?php 
                      if( !empty($electr['headlightbulbtype']) )
                        printf('<span>%s</span>', $electr['headlightbulbtype']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Brake/Tail Light</span>
                    <?php 
                      if( !empty($electr['tail_light']) )
                        printf('<span>%s</span>', $electr['tail_light']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Turn Signal</span>
                    <?php 
                      if( !empty($electr['turn_signal']) )
                        printf('<span>%s</span>', $electr['turn_signal']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Pass Light</span>
                    <?php 
                      if( !empty($electr['pass_light']) )
                        printf('<span>%s</span>', $electr['pass_light']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <?php 
                  $extoptions = $electr['additional_options']; 
                  if( $extoptions ):
                  foreach( $extoptions as $extoption ):  
                  ?>
                  <li class="clearfix">
                    <?php if( !empty($extoption['label']) ) printf('<span>%s</span>', $extoption['label']); ?>
                    <?php if( !empty($extoption['option_name']) ) printf('<span>%s</span>', $extoption['option_name']); ?>
                  </li>
                  <?php endforeach; ?>
                  <?php endif; ?> 
                </ul>
                <?php endif; ?>
              </div>

              <div class="bt-full-specifications-row-06 bt-full-specifications-row">
                <h6>Extra Features</h6>
                <?php if( $extrafe ): ?>
                <ul class="clearfix specification-tbl specification-tbl-sub ulc">
                  <li class="clearfix">
                    <span>Color</span>
                    <?php 
                      if( !empty($extrafe['color']) )
                        printf('<span>%s</span>', $extrafe['color']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <?php 
                  $extoptions = $extrafe['additional_options']; 
                  if( $extoptions ):
                  foreach( $extoptions as $extoption ):  
                  ?>
                  <li class="clearfix">
                    <?php if( !empty($extoption['label']) ) printf('<span>%s</span>', $extoption['label']); ?>
                    <?php if( !empty($extoption['option_name']) ) printf('<span>%s</span>', $extoption['option_name']); ?>
                  </li>
                  <?php endforeach; ?>
                  <?php endif; ?> 
                </ul>
                <?php endif; ?>
              </div>

              <div class="bt-full-specifications-row-06 bt-full-specifications-row">
                <h6>Price/Availability</h6>
                <?php if( $price ): ?>
                <ul class="clearfix specification-tbl specification-tbl-sub ulc">
                  <li class="clearfix">
                    <span>Price</span>
                    <?php 
                      if( !empty($price['price']) )
                        printf('<span>Tk. %s</span>', $price['price']);
                      else
                         printf('<span>%s</span>', '-----');
                    ?>
                  </li>
                  <li class="clearfix">
                    <span>Search</span>
                    <span>407,371 times</span>
                  </li>
                </ul>
                <?php endif; ?>
              </div>

            </div>
            <?php 
            $terms = get_the_terms( get_the_ID(), 'brand' );
            $termid = '';
            if( !empty($terms) && !is_wp_error($terms) ){
              foreach( $terms  as $term ){
                $termid = $term->term_id;
              }
            }
            if( !empty($termid) ): 
            $query = new WP_Query(array( 
              'post_type'=> 'bike',
              'posts_per_page' => 10,
              'order'=> 'DESC',
              'post__not_in'=> array(get_the_ID()),
              'tax_query' => array(
                array(
                  'taxonomy' => 'brand',
                  'field' => 'term_id',
                  'terms' => $termid
                  )
                )
              ) 
            );
            if($query->have_posts()):
            ?>
            <div class="bt-related-bikes-section">
              <div class="fl-sec-hdr">
                <h4>Releted Bikes</h4>
              </div>
              <div class="bt-related-bikes-slider" id="btRelatedBikesSlider">
                <?php 
                while($query->have_posts()): $query->the_post(); 
                  $fullspe = get_field( 'full_specifications' );
                  $engtrans = get_field( 'enginetransmission' );
                  $price = get_field( 'priceav' );
                  $imgsec = get_field( 'featuredimg' );
                  $gridimgID = $imgsec['featured_image'];
                ?>
                <div class="bt-related-bikes-slide-item">
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
                            <li>PETROL</li>
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
                </div>
                <?php endwhile; ?>
              </div>
            </div>
            <?php endif; wp_reset_postdata(); endif;?>

          </div>
        </div>
      </div>
  </div>    
</section>
<?php
endwhile;
get_footer(); 
?>