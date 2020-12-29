<?php 
  $taxs1 = array(); $taxs2 = array(); $taxs3 = array(); $meta1 = array(); $meta2 = array(); $meta3 = array();
  if ( isset($_GET['brand_one']) && !empty($_GET['brand_one']) && isset($_GET['model_one']) && !empty($_GET['model_one']) ){
    $taxs1[] = array(
      'taxonomy' => 'brand',
      'field' => 'slug',
      'terms' => $_GET['brand_one']
    );
    $meta1[] = array(
         'key'     => 'full_specifications_model',
         'value'   => $_GET['model_one'],
         'compare' => '=' 
    );
  } 
  if ( isset($_GET['brand_two']) && !empty($_GET['brand_two']) && isset($_GET['model_two']) && !empty($_GET['model_two']) ){
    $taxs2[] = array(
      'taxonomy' => 'brand',
      'field' => 'slug',
      'terms' => $_GET['brand_two']
    );
    $meta2[] = array(
         'key'     => 'full_specifications_model',
         'value'   => $_GET['model_two'],
         'compare' => '='
    );
  } 

  if ( isset($_GET['brand_three']) && !empty($_GET['brand_three']) && isset($_GET['model_three']) && !empty($_GET['model_three']) ){
    $taxs3[] = array(
      'taxonomy' => 'brand',
      'field' => 'slug',
      'terms' => $_GET['brand_three']
    );
    $meta3[] = array(
         'key'     => 'full_specifications_model',
         'value'   => $_GET['model_three'],
         'compare' => '=' 
    );
  }
?>
<?php
$taxquery1 = $taxquery2 = $taxquery3 = $metaquery1 = $metaquery2 = $metaquery3 ='';
$bkargs1 = array(
    'posts_per_page' => 1,
    'post_type' => 'bike',
    'tax_query' => array($taxs1),
    'meta_query' => array($meta1),
);
$bkquery1 = new WP_Query($bkargs1); 
$spef_1 = $engtrans_1 = $price_1 = $bdbike_1 = $eltr_1 = array(); $title1 = $gridimgID_1 = '';
if($bkquery1->have_posts()):
  while ( $bkquery1->have_posts() ) : $bkquery1->the_post();
  $spef_1 = get_field( 'full_specifications' );
  $engtrans_1 = get_field( 'enginetransmission' );
  $bdbike_1 = get_field( 'bodybike' );
  $eltr_1 = get_field( 'electricals' );
  $price_1 = get_field( 'priceav' );
  $imgsec_1 = get_field( 'featuredimg' );
  $gridimgID_1 = $imgsec_1['featured_image'];

  $title1 = get_the_title();

  endwhile;
  wp_reset_postdata(); endif;  

$bkargs2 = array(
    'posts_per_page' => 1,
    'post_type' => 'bike',
    'tax_query' => array($taxs2),
    'meta_query' => array($meta2),
);
$bkquery2 = new WP_Query($bkargs2); 

$spef_2 = $engtrans_2 = $price_2 = $bdbike_2 = $eltr_2 = array(); $title2 = $gridimgID_2 ='';
if($bkquery2->have_posts()):
  while ( $bkquery2->have_posts() ) : $bkquery2->the_post();
  $spef_2 = get_field( 'full_specifications' );
  $engtrans_2 = get_field( 'enginetransmission' );
  $bdbike_2 = get_field( 'bodybike' );
  $eltr_2 = get_field( 'electricals' );
  $price_2 = get_field( 'priceav' );
  $imgsec_2 = get_field( 'featuredimg' );
  $gridimgID_2 = $imgsec_2['featured_image'];

  $title2 = get_the_title();

  endwhile;
  wp_reset_postdata(); endif; 


$bkargs3 = array(
    'posts_per_page' => 1,
    'post_type' => 'bike',
    'tax_query' => array($taxs3),
    'meta_query' => array($meta3),
);

$bkquery3 = new WP_Query($bkargs3);
$spef_3 = $engtrans_3 = $price_3 = $bdbike_3 = $eltr_3 = array(); $title3 = $gridimgID_3 ='';
if($bkquery3->have_posts()):
  while ( $bkquery3->have_posts() ) : $bkquery3->the_post();
  $spef_3 = get_field( 'full_specifications' );
  $engtrans_3 = get_field( 'enginetransmission' );
  $bdbike_3 = get_field( 'bodybike' );
  $eltr_3 = get_field( 'electricals' );
  $price_3 = get_field( 'priceav' );
  $imgsec_3 = get_field( 'featuredimg' );
  $gridimgID_3 = $imgsec_3['featured_image'];

  $title3 = get_the_title( get_the_ID());

  endwhile;
  wp_reset_postdata(); endif; 
  $col_6 = $start_compare_vs = $end_compare_vs = '';
  if( (!empty($title1) && !empty($title2) && empty($title3)) OR (!empty($title1) && !empty($title3) && empty($title2)) OR (!empty($title2) && !empty($title3) && empty($title1)) ){
    $col_6 = ' compare-col-6';
    $start_compare_vs = '<div class="compare-vs-center clearfix">';
    $end_compare_vs = '</div>';
  }
?>

<section class="main-content compare-single-page-con compare-vs-3">
<div class="hasImg">
  <img src="<?php echo THEME_URI; ?>/assets/images/bgimg1.jpg">
</div>
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          
          <div class="compare-vs-titles clearfix">
            <?php echo $start_compare_vs; ?>
            <?php if( !empty($title1) ): ?>
            <div class="compare-vs-title">
              <?php printf('<h5 class="mhCol">%s</h5>', $title1); ?>
              <span>vs</span>
            </div> 
            <?php endif; ?>
            <?php if( !empty($title2) ): ?>
            <div class="compare-vs-title">
              <?php  printf('<h5 class="mhCol">%s</h5>', $title2); ?>
              <span>vs</span> 
            </div>
            <?php endif; ?>
            <?php if( !empty($title3) ): ?>
            <div class="compare-vs-title">
              <?php printf('<h5 class="mhCol">%s</h5>', $title3); ?>
            </div>
            <?php endif; ?>
            <?php echo $end_compare_vs; ?>
            <!-- <div class="compare-vs-title">
              <h5 class="mhCol">Hero Pleasure Plus Comparison</h5>
              <span>vs</span> 
            </div> -->
          </div>
          <div class="compare-single-top-grd">
            <?php echo $start_compare_vs; ?>
            <ul class="clearfix ulc">
              <?php if( !empty($title1) ): ?>
              <li>
                <div class="compare-single-top-grd-col">
                  <div class="compare-single-top-grd-img">
                    <?php
                      if( !empty($gridimgID_1) ) echo cbv_get_image_tag($gridimgID_1);
                    ?>
                  </div>
                  <?php if( !empty($title1) ) printf('<strong>%s</strong>', $title1); ?>
                  <?php if( !empty($price_1['price']) ) printf('<span>BDT %s</span>', $price_1['price']); ?>
                </div>
              </li>
              <?php endif; ?>
              <?php if( !empty($title2) ): ?>
              <li>
                <div class="compare-single-top-grd-col">
                  <div class="compare-single-top-grd-img">
                    <?php
                      if( !empty($gridimgID_2) ) echo cbv_get_image_tag($gridimgID_2);
                    ?>
                  </div>
                  <?php if( !empty($title2) ) printf('<strong>%s</strong>', $title2); ?>
                  <?php if( !empty($price_2['price']) ) printf('<span>BDT %s</span>', $price_2['price']); ?>
                </div>
              </li>
              <?php endif; ?>
              <?php if( !empty($title3) ): ?>
              <li>
                <div class="compare-single-top-grd-col">
                  <div class="compare-single-top-grd-img">
                    <?php
                      if( !empty($gridimgID_3) ) echo cbv_get_image_tag($gridimgID_3);
                    ?>
                  </div>
                  <?php if( !empty($title3) ) printf('<strong>%s</strong>', $title3); ?>
                  <?php if( !empty($price_3['price']) ) printf('<span>BDT %s</span>', $price_3['price']); ?>
                </div>
              </li>
             <!--  <li>
                <div class="compare-single-top-grd-col">
                  <div class="compare-single-top-grd-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/compare-single-img-04.jpg">
                  </div>
                  <strong>Hero Pleasure Plus 125</strong>
                  <span>BDT 75000</span>
                </div>
              </li> -->
            <?php endif; ?>
            </ul>
            <?php echo $end_compare_vs; ?>
          </div>
          <div class="fl-sec-hdr">
            <h4>comparison table</h4>
          </div>
          <div class="comparison-tbl">
            <ul class="comparison-tbl-headers ulc clearfix">
              <li class="mhCol"><strong> Specification</strong></li>
              <?php if( !empty($title1) ): ?>
              <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($title1) ) printf('<strong>%s</strong>', $title1); else printf('<strong>%s</strong>', '------'); ?></li>
              <?php endif; ?>
              <?php if( !empty($title2) ): ?>
              <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($title2) ) printf('<strong>%s</strong>', $title2); else printf('<strong>%s</strong>', '------'); ?></li>
              <?php endif; ?>
              <?php if( !empty($title3) ): ?>
              <li class="mhCol<?php echo $col_6; ?>"><?php printf('<strong>%s</strong>', $title3); ?></li>
              <!-- <li class="mhCol"><strong> Hero Pleasure Plus 125</strong></li> -->
              <?php endif; ?>
            </ul>
            <div class="comparison-tbls-data">
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Engine</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['engine_type']) ) printf('%s', $engtrans_1['engine_type']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['engine_type']) ) printf('%s', $engtrans_2['engine_type']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['engine_type']) ) printf('%s', $engtrans_3['engine_type']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Single Cylinder, Four Stroke, Air Cooled, SOHC Engine</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Displacement</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['displacement_cc']) ) printf('%scc', $engtrans_1['displacement_cc']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['displacement_cc']) ) printf('%scc', $engtrans_2['displacement_cc']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['displacement_cc']) ) printf('%scc', $engtrans_3['displacement_cc']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">160.3cce</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Bore x Stroke</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['bore_x_stroke']) ) printf('%s', $engtrans_1['bore_x_stroke']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['bore_x_stroke']) ) printf('%s', $engtrans_2['bore_x_stroke']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['bore_x_stroke']) ) printf('%s', $engtrans_3['bore_x_stroke']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">57.3mm x 57.9mm</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Valve System</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['valve_system']) ) printf('%s-Valve SOHC', $engtrans_1['valve_system']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['valve_system']) ) printf('%s-Valve SOHC', $engtrans_2['valve_system']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['valve_system']) ) printf('%s-Valve SOHC', $engtrans_3['valve_system']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">4-Valve SOHC</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Compression Ratio</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['compr_ratio']) ) printf('%s', $engtrans_1['compr_ratio']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['compr_ratio']) ) printf('%s', $engtrans_2['compr_ratio']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['compr_ratio']) ) printf('%s', $engtrans_3['compr_ratio']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">9.5:1</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Maximum Power</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['max_power']) ) printf('%sRPM', $engtrans_1['max_power']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['max_power']) ) printf('%sRPM', $engtrans_2['max_power']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['max_power']) ) printf('%sRPM', $engtrans_3['max_power']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">13 BHP @ 7,000RPM</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Maximum Torque</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['max_torque']) ) printf('%sRPM', $engtrans_1['max_torque']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['max_torque']) ) printf('%sRPM', $engtrans_2['max_torque']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['max_torque']) ) printf('%sRPM', $engtrans_3['max_torque']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">12.8N.m (1.3kgfm) @ 6,000RPM</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Fuel-Supply</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['fuelsupply']) ) printf('%s', $engtrans_1['fuelsupply']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['fuelsupply']) ) printf('%s', $engtrans_2['fuelsupply']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['fuelsupply']) ) printf('%s', $engtrans_3['fuelsupply']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Fuel Injection</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Ignition</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['ignition']) ) printf('%s', $engtrans_1['ignition']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['ignition']) ) printf('%s', $engtrans_2['ignition']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['ignition']) ) printf('%s', $engtrans_3['ignition']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Electronic</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Starting Method</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['starting_method']) ) printf('%s', $engtrans_1['starting_method']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['starting_method']) ) printf('%s', $engtrans_2['starting_method']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['starting_method']) ) printf('%s', $engtrans_3['starting_method']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Kick & Electric Start</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Clutch Type</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['clutch']) ) printf('%s', $engtrans_1['clutch']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['clutch']) ) printf('%s', $engtrans_2['clutch']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['clutch']) ) printf('%s', $engtrans_3['clutch']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Wet, Multiple-Disc</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Lubrication</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['lubrication']) ) printf('%s', $engtrans_1['lubrication']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['lubrication']) ) printf('%s', $engtrans_2['lubrication']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['lubrication']) ) printf('%s', $engtrans_3['lubrication']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Wet Sump</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Transmission</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['transmission']) ) printf('%s', $engtrans_1['transmission']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['transmission']) ) printf('%s', $engtrans_2['transmission']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['transmission']) ) printf('%s', $engtrans_3['transmission']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">6 Speed; 1-N-2-3-4-5-6</li> -->
                <?php endif; ?>
              </ul>

              <div class="dimension-divider"><h5>Dimension</h5></div>

              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Frame Type</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['bore_x_stroke']) ) printf('%s', $engtrans_1['bore_x_stroke']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['bore_x_stroke']) ) printf('%s', $engtrans_2['bore_x_stroke']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['bore_x_stroke']) ) printf('%s', $engtrans_3['bore_x_stroke']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Perimeter Frame</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Dimension (LxWxH)</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_1['dimension_lxwxh']) ) printf('%s', $bdbike_1['dimension_lxwxh']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_2['dimension_lxwxh']) ) printf('%s', $bdbike_2['dimension_lxwxh']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_3['dimension_lxwxh']) ) printf('%s', $bdbike_3['dimension_lxwxh']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">2,017mm x 803mm x 1,060mm</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Wheelbase</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_1['wheel_base_mm']) ) printf('%smm', $bdbike_1['wheel_base_mm']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_2['wheel_base_mm']) ) printf('%smm', $bdbike_2['wheel_base_mm']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_3['wheel_base_mm']) ) printf('%smm', $bdbike_3['wheel_base_mm']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">1,330mm</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Ground Clearance</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_1['ground_clearancemm']) ) printf('%smm', $bdbike_1['ground_clearancemm']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_2['ground_clearancemm']) ) printf('%smm', $bdbike_2['ground_clearancemm']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_3['ground_clearancemm']) ) printf('%smm', $bdbike_3['ground_clearancemm']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">167mm</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Saddle Height</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_1['seat_height']) ) printf('%smm', $bdbike_1['seat_height']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_2['seat_height']) ) printf('%smm', $bdbike_2['seat_height']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_3['seat_height']) ) printf('%smm', $bdbike_3['seat_height']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Not Found</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Weight (Kerb)</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_1['kerb_weight']) ) printf('%sKg', $bdbike_1['kerb_weight']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_2['kerb_weight']) ) printf('%sKg', $bdbike_2['kerb_weight']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_3['kerb_weight']) ) printf('%sKg', $bdbike_3['kerb_weight']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">148Kg</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Fuel Capacity</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_1['fuel_tank_capacity']) ) printf('%s Liters', $bdbike_1['fuel_tank_capacity']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_2['fuel_tank_capacity']) ) printf('%s Liters', $bdbike_2['fuel_tank_capacity']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_3['fuel_tank_capacity']) ) printf('%s Liters', $bdbike_3['fuel_tank_capacity']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">10.8 Liters</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Engine Oil Capacity</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_1['reserve_fuel_capacity']) ) printf('%s Liters', $engtrans_1['reserve_fuel_capacity']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_2['reserve_fuel_capacity']) ) printf('%s Liters', $engtrans_2['reserve_fuel_capacity']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
               <?php if( !empty($title3) ): ?>
               <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($engtrans_3['reserve_fuel_capacity']) ) printf('%s Liters', $engtrans_3['reserve_fuel_capacity']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">10.2 Liters</li> -->
                <?php endif; ?>
              </ul>

              <div class="dimension-divider"><h5><i class="fas fa-tire"></i> Wheel, Brake & Suspension</h5></div>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">The suspension (Front/Rear)</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_1['suspension_front']) ) printf('%s', $bdbike_1['suspension_front']); else printf('%s', '------'); ?>/<?php if( !empty($bdbike_1['suspension_rear']) ) printf('%s', $bdbike_1['suspension_rear']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_2['suspension_front']) ) printf('%s', $bdbike_2['suspension_front']); else printf('%s', '------'); ?>/<?php if( !empty($bdbike_2['suspension_rear']) ) printf('%s', $bdbike_2['suspension_rear']); else printf('%s', '------'); ?></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><?php if( !empty($bdbike_3['suspension_front']) ) printf('%s', $bdbike_3['suspension_front']); else printf('%s', '------'); ?>/<?php if( !empty($bdbike_3['suspension_rear']) ) printf('%s', $bdbike_3['suspension_rear']); else printf('%s', '------'); ?></li>
                <!-- <li class="mhCol">Telescopic Fork with Anti-friction Bush / Nitrox Mono Shock Absorber with Canister</li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol"><div>Brake system (Front/Rear)</div></li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($bdbike_1['brake_front']) ) printf('%s', $bdbike_1['brake_front']); else printf('%s', '------'); ?>/<?php if( !empty($bdbike_1['brake_rear']) ) printf('%s', $bdbike_1['brake_rear']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($bdbike_2['brake_front']) ) printf('%s', $bdbike_2['brake_front']); else printf('%s', '------'); ?>/<?php if( !empty($bdbike_2['brake_rear']) ) printf('%s', $bdbike_2['brake_rear']); else printf('%s', '------'); ?></li>
                  <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($bdbike_3['brake_front']) ) printf('%s', $bdbike_3['brake_front']); else printf('%s', '------'); ?>/<?php if( !empty($bdbike_3['brake_rear']) ) printf('%s', $bdbike_3['brake_rear']); else printf('%s', '------'); ?></div></li>
                <!-- <li class="mhCol"><div>260mm Hydraulic Disk Brake / 230mm Hydraulic Disk Brake Single Channel ABS</div></li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol">Tire size (Front / Rear)</li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>">
                  <div>
                    
                  </div>
                  <div>
                    <span>Front: <?php if( !empty($bdbike_1['tyre_front']) ) printf('%s', $bdbike_1['tyre_front']); else printf('%s', '------'); ?></span>
                    <span>Rear: <?php if( !empty($bdbike_1['tyre_rear']) ) printf('%s', $bdbike_1['tyre_rear']); else printf('%s', '------'); ?></span>
                  </div>
                </li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>">
                  <div>
                    <span>Front: <?php if( !empty($bdbike_2['tyre_front']) ) printf('%s', $bdbike_2['tyre_front']); else printf('%s', '------'); ?></span>
                    <span>Rear: <?php if( !empty($bdbike_2['tyre_rear']) ) printf('%s', $bdbike_2['tyre_rear']); else printf('%s', '------'); ?></span>
                  </div>
                </li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>">
                  <div>
                    <span>Front: <?php if( !empty($bdbike_3['tyre_front']) ) printf('%s', $bdbike_3['tyre_front']); else printf('%s', '------'); ?></span>
                    <span>Rear: <?php if( !empty($bdbike_3['tyre_rear']) ) printf('%s', $bdbike_3['tyre_rear']); else printf('%s', '------'); ?></span>
                  </div>
                </li>
                <!-- <li class="mhCol">
                  <div>
                    <span>Front: 90/90 -17 49P</span>
                    <span>Rear: 120/80 -17 61P</span>
                    <span>Both Tubeless</span>
                  </div>
                </li> -->
                <?php endif; ?>
              </ul>

              <div class="dimension-divider"><h5>Electrical & Other</h5></div>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol"><div>Battery</div></li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_1['battery']) ) printf('%s', $eltr_1['battery']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_2['battery']) ) printf('%s', $eltr_2['battery']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_3['battery']) ) printf('%s', $eltr_3['battery']); else printf('%s', '------'); ?></div></li>
                <!-- <li class="mhCol"><div>12V Full DC MF</div></li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol"><div>Headlamp</div></li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_1['head_lamp']) ) printf('%s', $eltr_1['head_lamp']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_2['head_lamp']) ) printf('%s', $eltr_2['head_lamp']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>

                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_3['head_lamp']) ) printf('%s', $eltr_3['head_lamp']); else printf('%s', '------'); ?></div></li>
                <!-- <li class="mhCol"><div>H4 (12V 55/60W)</div></li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol"><div>Tail Lamp</div></li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_1['tail_lamp']) ) printf('%s', $eltr_1['tail_lamp']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_2['tail_lamp']) ) printf('%s', $eltr_2['tail_lamp']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_3['tail_lamp']) ) printf('%s', $eltr_3['tail_lamp']); else printf('%s', '------'); ?></div></li>
                <!-- <li class="mhCol"><div>Bulb</div></li> -->
                <?php endif; ?>
              </ul>
              <ul class="comparison-tbl-data ulc clearfix">
                <li class="mhCol"><div>Speedometer</div></li>
                <?php if( !empty($title1) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_1['speedometer']) ) printf('%s', $eltr_1['speedometer']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>
                <?php if( !empty($title2) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_2['speedometer']) ) printf('%s', $eltr_2['speedometer']); else printf('%s', '------'); ?></div></li>
                <?php endif; ?>
                <?php if( !empty($title3) ): ?>
                <li class="mhCol<?php echo $col_6; ?>"><div><?php if( !empty($eltr_3['speedometer']) ) printf('%s', $eltr_3['speedometer']); else printf('%s', '------'); ?></div></li>
                <!-- <li class="mhCol"><div>Digital with Analog Rev</div></li> -->
                <?php endif; ?>
              </ul>

            </div>
          </div>
        </div>
      </div>
  </div>    
</section>