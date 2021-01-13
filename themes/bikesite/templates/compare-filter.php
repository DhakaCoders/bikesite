<?php $thisID = get_the_ID(); ?>
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
          <div class="compare-page-con-ctrl clearfix">
            <div class="compare-bikes-scooters-filter-sec">
              <div class="fl-sec-hdr">
                <h4>Compare Bikes and Scooters</h4>
              </div>
              <div class="compare-bikes-filter-ctlr">
                <form action="" method="get">
                  <div class="clearfix">
                    <div class="compare-bikes-filter-col">
                      <div class="compare-bikes-filter-col-inr">
                        <div class="add-bike-con">
                          <strong class="addTitle">Add bike</strong>
                        </div>
                        <div class="clearfix">
                          <div class="bt-selctpicker-ctlr">
                        <?php                    
                          $brands = get_terms( array(
                            'taxonomy' => 'brand',
                            'hide_empty' => false,
                            'parent' => 0
                          ) );
                        ?>
                        <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
                        <select name="brand_one" id="brand_one" onchange="getBikeModel('one');" class="selectpicker" data-size="7" data-live-search="true">
                          <option value="">Select Brand</option>
                          <?php foreach ( $brands as $brand ) { ?>
                          <option value="<?php echo $brand->slug; ?>"><?php echo $brand->name; ?></option>
                          <?php } ?>
                        </select>
                        <?php } ?>
                          </div>
                          <div style="height: 10px;"></div>
                          <div class="bt-selctpicker-ctlr">
                            <select name="model_one" class="selectpicker" id="brand-model-one">
                              <option value="">Select Model</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="compare-bikes-filter-col">
                      <div class="compare-bikes-filter-col-inr">
                        <div class="add-bike-con">
                          <strong class="addTitle">Add bike</strong>
                        </div>
                        <div class="clearfix">
                          <div class="bt-selctpicker-ctlr">
                          <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
                          <select name="brand_two" id="brand_two" onchange="getBikeModel('two');" class="selectpicker" data-size="7" data-live-search="true">
                            <option value="">Select Brand</option>
                            <?php foreach ( $brands as $brand ) { ?>
                            <option value="<?php echo $brand->slug; ?>"><?php echo $brand->name; ?></option>
                            <?php } ?>
                          </select>
                          <?php } ?>
                          </div>
                          <div style="height: 10px;"></div>
                          <div class="bt-selctpicker-ctlr">
                            <select name="model_two" class="selectpicker" id="brand-model-two">
                              <option value="">Select Model</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="compare-bikes-filter-col">
                      <div class="compare-bikes-filter-col-inr">
                        <div class="add-bike-con">
                          <strong class="addTitle">Add bike</strong>
                        </div>
                        <div class="clearfix">
                          <div class="bt-selctpicker-ctlr">
                          <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
                          <select name="brand_three" id="brand_three" onchange="getBikeModel('three');" class="selectpicker" data-size="7" data-live-search="true">
                            <option value="">Select Brand</option>
                            <?php foreach ( $brands as $brand ) { ?>
                            <option value="<?php echo $brand->slug; ?>"><?php echo $brand->name; ?></option>
                            <?php } ?>
                          </select>
                          <?php } ?>
                          </div>
                          <div style="height: 10px;"></div>
                          <div class="bt-selctpicker-ctlr">
                            <select name="model_three" class="selectpicker" id="brand-model-three">
                              <option value="">Select Model</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bt-search-selects-submit-btn">
                    <input type="submit" name="" value="Compare Now">
                  </div>
                </form>
              </div>
            </div>
            <?php 
              $popular_bikes = get_field('popular_bikes', $thisID);
              if( $popular_bikes ):
            ?>
            <div class="popular-bikes-compare-sec">
              <div class="fl-sec-hdr">
                <h4>Popular Bikes Comparison</h4>
              </div>
              <div class="compare-bikes-grd-ctlr">
                <div class="clearfix ulc compare-bikes-slider" id="">
                  <?php 
                    
                  foreach( $popular_bikes as $p_bike ): 
                    $pbikeImg1 = $pbikeImg2 = '';
                    $pbike1 = $p_bike['select_bike1']; 
                    $pbike2 = $p_bike['select_bike2'];
                    $bike_ID1 = $pbike1->ID;
                    $bike_ID2 = $pbike2->ID;
                    $bike_featured1 =  get_field('featuredimg', $bike_ID1);
                    $bike_featured2 =  get_field('featuredimg', $bike_ID2);
                    if( !empty($bike_featured1['featured_image']) ) {
                      $pbikeImg1 = cbv_get_image_src( $bike_featured1['featured_image'], 'comparegrid' );
                    }
                    if( !empty($bike_featured2['featured_image']) ) {
                      $pbikeImg2 = cbv_get_image_src( $bike_featured2['featured_image'], 'comparegrid' );
                    }

                  ?>
                  <div class="compare-bikes-grd-item">
                    <div class="compare-bikes-grd-item-innr">
                       <a class="overlay-link" href="#"></a>
                      <div class="clearfix compare-bike-imges">
                        <span class="vs">VS</span>
                        <div class="compare-bike-img" style="background: url(<?php echo $pbikeImg1; ?>);">
                        </div>
                        <div class="compare-bike-img" style="background: url(<?php echo $pbikeImg2; ?>);">
                        </div>
                      </div>
                      <div class="clearfix">
                        
                        <div class="compare-bike-content-wrapper">
                          <?php 
                            $bike_engin1 =  get_field('enginetransmission', $bike_ID1);
                            $bike_price1 =  get_field('priceav', $bike_ID1);
                          ?>
                          <div class="product-title-spreed">
                              <?php if( !empty($pbike1->post_title) ) printf('<strong>%s</strong>', $pbike1->post_title); ?>
                              <?php if( !empty($bike_engin1['rpm']) ) printf('<span>%s RPM</span>', $bike_engin1['rpm']); ?>
                          </div>
                          <div class="compare-bike-price">
                              <?php if( !empty($bike_price1['price']) ) printf('<span>BDT %s</span>', $bike_price1['price']); ?>
                          </div>

                        </div>

                        <div class="compare-bike-content-wrapper">
                          <?php 
                            $bike_engin2 =  get_field('enginetransmission', $bike_ID2);
                            $bike_price2 =  get_field('priceav', $bike_ID2);
                          ?>
                          <div class="product-title-spreed">
                              <?php if( !empty($pbike2->post_title) ) printf('<strong>%s</strong>', $pbike2->post_title); ?>
                              <?php if( !empty($bike_engin2['rpm']) ) printf('<span>%s RPM</span>', $bike_engin2['rpm']); ?>
                          </div>
                          <div class="compare-bike-price">
                              <?php if( !empty($bike_price2['price']) ) printf('<span>BDT %s</span>', $bike_price2['price']); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php 
              $popular_scooters = get_field('popular_scooters', $thisID);
              if( $popular_scooters ):
            ?>
            <div class="popular-bikes-compare-sec">
              <div class="fl-sec-hdr">
                <h4>Popular Scooters Comparison</h4>
              </div>
              <div class="compare-bikes-grd-ctlr">
                <div class="clearfix ulc compare-bikes-slider" id="">
                  <?php 
                  foreach( $popular_scooters as $p_scooter ): 
                    $scooterImg1 = $scooterImg2 = '';
                    $pscooter1 = $p_scooter['select_scooters1']; 
                    $pscooter2 = $p_scooter['select_scooters2']; 

                    $sct_ID1 = $pscooter1->ID;
                    $sct_ID2 = $pscooter2->ID;
                    $sct_featured1 =  get_field('featuredimg', $sct_ID1);
                    $sct_featured2 =  get_field('featuredimg', $sct_ID2);
                    if( !empty($sct_featured1['featured_image']) ) {
                      $scooterImg1 = cbv_get_image_src( $sct_featured1['featured_image'], 'comparegrid' );
                    }
                    if( !empty($sct_featured2['featured_image']) ) {
                      $scooterImg2 = cbv_get_image_src( $sct_featured2['featured_image'], 'comparegrid' );
                    }
                  ?>
                  <div class="compare-bikes-grd-item">
                    <div class="compare-bikes-grd-item-innr">
                     <a class="overlay-link" href="#"></a>
                      <div class="clearfix compare-bike-imges">
                        <span class="vs">VS</span>
                        <div class="compare-bike-img" style="background: url(<?php echo  $scooterImg1; ?>);">
                        </div>
                        <div class="compare-bike-img" style="background: url(<?php echo $scooterImg2; ?>);">
                        </div>
                      </div>
                      <div class="clearfix">
                        <div class="compare-bike-content-wrapper">
                          <?php 
                            $sct_engin1 =  get_field('enginetransmission', $sct_ID1);
                            $sct_price1 =  get_field('priceav', $sct_ID1);
                          ?>
                          <div class="product-title-spreed">
                              <?php if( !empty($pscooter1->post_title) ) printf('<strong>%s</strong>', $pscooter1->post_title); ?>
                              <?php if( !empty($sct_engin1['rpm']) ) printf('<span>%s RPM</span>', $sct_engin1['rpm']); ?>
                          </div>
                          <div class="compare-bike-price">
                              <?php if( !empty($sct_price1['price']) ) printf('<span>BDT %s</span>', $sct_price1['price']); ?>
                          </div>
                        </div>
                        <div class="compare-bike-content-wrapper">
                          <?php 
                            $sct_engin2 =  get_field('enginetransmission', $sct_ID2);
                            $sct_price2 =  get_field('priceav', $sct_ID2);
                          ?>
                          <div class="product-title-spreed">
                              <?php if( !empty($pscooter2->post_title) ) printf('<strong>%s</strong>', $pscooter2->post_title); ?>
                              <?php if( !empty($sct_engin2['rpm']) ) printf('<span>%s RPM</span>', $sct_engin2['rpm']); ?>
                          </div>
                          <div class="compare-bike-price">
                              <?php if( !empty($sct_price2['price']) ) printf('<span>BDT %s</span>', $sct_price2['price']); ?>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>                  
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
  </div>    
</section>