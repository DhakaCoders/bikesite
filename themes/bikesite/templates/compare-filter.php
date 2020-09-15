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
                    $pbikeImg1 = $pbikeImg2 = '';
                    foreach( $popular_bikes as $p_bike ): 
                    $pbike1 = $p_bike['bike_1']; 
                    $pbike2 = $p_bike['bike_2'];
                    if( !empty($pbike1['image']) ) $pbikeImg1 = cbv_get_image_src( $pbike1['image'] );
                    if( !empty($pbike2['image']) ) $pbikeImg2 = cbv_get_image_src( $pbike2['image'] ); 
                  ?>
                  <div class="compare-bikes-grd-item">
                    <div class="compare-bikes-grd-item-innr">
                       <a class="overlay-link" href="#"></a>
                      <div class="clearfix compare-bike-imges">
                        <span class="vs">VS</span>
                        <div class="compare-bike-img" style="background: url(<?php echo  $pbikeImg1; ?>);">
                        </div>
                        <div class="compare-bike-img" style="background: url(<?php echo  $pbikeImg2; ?>);">
                        </div>
                      </div>
                      <div class="clearfix">
                        <div class="compare-bike-content-wrapper">
                          <div class="product-title-spreed">
                              <?php if( !empty($pbike1['title']) ) printf('<strong>%s</strong>', $pbike1['title']); ?>
                              <?php if( !empty($pbike1['rpm']) ) printf('<span>%s RPM</span>', $pbike1['rpm']); ?>
                          </div>
                          <div class="compare-bike-price">
                              <?php if( !empty($pbike1['price']) ) printf('<span>BDT %s</span>', $pbike1['price']); ?>
                          </div>
                        </div>
                        <div class="compare-bike-content-wrapper">
                          <div class="product-title-spreed">
                              <?php if( !empty($pbike2['title']) ) printf('<strong>%s</strong>', $pbike2['title']); ?>
                              <?php if( !empty($pbike2['rpm']) ) printf('<span>%s RPM</span>', $pbike2['rpm']); ?>
                          </div>
                          <div class="compare-bike-price">
                              <?php if( !empty($pbike2['price']) ) printf('<span>BDT %s</span>', $pbike2['price']); ?>
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
                    $scooterImg1 = $scooterImg2 = '';
                    foreach( $popular_scooters as $p_scooter ): 
                    $pscooter1 = $p_scooter['scooters_1']; 
                    $pscooter2 = $p_scooter['scooters_2']; 
                    if( !empty($pscooter1['image']) ) $scooterImg1 = cbv_get_image_src( $pscooter1['image'] );
                    if( !empty($pscooter2['image']) ) $scooterImg2 = cbv_get_image_src( $pscooter2['image'] );
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
                          <div class="product-title-spreed">
                              <?php if( !empty($pscooter1['title']) ) printf('<strong>%s</strong>', $pscooter1['title']); ?>
                              <?php if( !empty($pscooter1['rpm']) ) printf('<span>%s RPM</span>', $pscooter1['rpm']); ?>
                          </div>
                          <div class="compare-bike-price">
                              <?php if( !empty($pscooter1['price']) ) printf('<span>BDT %s</span>', $pscooter1['price']); ?>
                          </div>
                        </div>
                        <div class="compare-bike-content-wrapper">
                          <div class="product-title-spreed">
                              <?php if( !empty($pscooter2['title']) ) printf('<strong>%s</strong>', $pscooter2['title']); ?>
                              <?php if( !empty($pscooter2['rpm']) ) printf('<span>%s RPM</span>', $pscooter2['rpm']); ?>
                          </div>
                          <div class="compare-bike-price">
                              <?php if( !empty($pscooter2['price']) ) printf('<span>BDT %s</span>', $pscooter2['price']); ?>
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