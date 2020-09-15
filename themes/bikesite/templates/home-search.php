  <?php 
  $bbrand = $bcapacity = $bktype = $bprice = '';
  if ( isset($_GET['bbrand']) && !empty($_GET['bbrand'])){
    $bbrand = $_GET['bbrand'];
  }
  if ( isset($_GET['bcapacity']) && !empty($_GET['bcapacity'])){
    $bcapacity = $_GET['bcapacity'];
  } 
  if ( isset($_GET['btype']) && !empty($_GET['btype'])){
    $bktype = $_GET['btype'];
  } 

  if ( isset($_GET['price-range']) && !empty($_GET['price-range'])){
    $bprice = $_GET['price-range'];
  }

  $brands = get_terms( array(
    'taxonomy' => 'brand',
    'hide_empty' => false,
    'parent' => 0
  ) );
  ?>
<form class="clearfix" id="bikeFilter">
  <div class="clearfix bt-search-selects">
    <div class="bt-filter-search-item bt-filter-search-item-brands">
      <label>Brand -</label>
      <div class="bt-selctpicker-ctlr">
        <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
        <select name="bbrand" id="bbrand" class="selectpicker" data-size="7" data-live-search="true">
          <option value="">Select Brand</option>
          <?php foreach ( $brands as $brand ) { ?>
          <option <?php echo ( $bbrand == $brand->slug )? 'selected': ''; ?> value="<?php echo $brand->slug; ?>"><?php echo $brand->name; ?></option>
          <?php } ?>
        </select>
        <?php } ?>
      </div>
    </div>
  <?php 
  $capacitys = get_terms( array(
    'taxonomy' => 'capacity',
    'hide_empty' => false,
    'parent' => 0
  ) );
  ?>
    <div class="bt-filter-search-item bt-filter-search-item-capacity">
      <label>CAPACITY -</label>
      <div class="bt-selctpicker-ctlr">
        <?php if ( ! empty( $capacitys ) && ! is_wp_error( $capacitys ) ){  ?>
        <select name="bcapacity" id="bcapacity" class="selectpicker" data-size="7" data-live-search="true">
          <option value="">Select Capacity</option>
          <?php foreach ( $capacitys as $capacity ) { ?>
          <option <?php echo ( $bcapacity == $capacity->slug )? 'selected': ''; ?> value="<?php echo $capacity->slug; ?>"><?php echo $capacity->name; ?>cc</option>
          <?php } ?>
        </select>
        <?php } ?>
      </div>
    </div>
    <?php 
      $btypes = get_terms( array(
        'taxonomy' => 'bike_type',
        'hide_empty' => false,
        'parent' => 0
      ) );
    ?>
    <div class="bt-filter-search-item bt-filter-search-item-categoris">
      <label>CATEGORIES -</label>
      <div class="bt-selctpicker-ctlr">
        <?php if ( ! empty( $btypes ) && ! is_wp_error( $btypes ) ) { ?>
        <select name="btype" id="btype" class="selectpicker" data-size="7" data-live-search="true">
          <option value="">Select Bike Type</option>
          <?php foreach( $btypes as $btype ) { ?>
          <option <?php echo ( $bktype == $btype->slug )? 'selected': ''; ?> value="<?php echo $btype->slug; ?>"><?php echo $btype->name; ?></option>
          <?php } ?>
        </select>
        <?php } ?>
      </div>
    </div>
    <div class="bt-filter-search-item bt-filter-search-item-price-range">
      <div class="bt-search-range-slider">
        <div class="bt-search-range-slider-hdr">
          <label for="amount">Price range - </label>
          <input type="text" name="price-range" id="amount" value="<?php echo !( $bprice )? $bprice: ''; ?>" readonly style="border:0; color:#f6931f; font-weight:bold;">
        </div>
        <div id="slider-range"></div>
      </div>
    </div>
  </div>
  
  <div class="bt-search-selects-submit-btn">
    <input type="submit" name="" value="Search">
  </div>
</form>