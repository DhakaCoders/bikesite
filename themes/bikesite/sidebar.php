<div class="fl-sidebar bt-bike-brands-wrap">
  <h3 class="fl-widget-title">Brands</h3>
  <?php 
  $active_cat = get_queried_object();
  $brands = get_terms( array(
    'taxonomy' => 'brand',
    'hide_empty' => false,
    'parent' => 0
  ) );
  ?>
  <div class="fl-textwidget fl-bike-brands-textwidget hide-xs">
    <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
    <ul>
      <?php foreach ( $brands as $brand ) { ?>
      <li<?php echo ($active_cat->term_id == $brand->term_id)?' class="active"':'';?>><a href="<?php echo get_term_link($brand);  ?>"><?php echo $brand->name; ?></a></li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
  <div class="bt-bike-brands-xs show-xs">
    <div class="bt-selctpicker-ctlr">
      <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
      <select class="selectpicker" data-size="7" data-live-search="true">
        <option selected="selected">Select Brand</option>
          <?php foreach ( $brands as $brand ) { ?>
          <option value="<?php echo get_term_link($brand);  ?>" <?php echo ($active_cat->term_id == $brand->term_id)?'selected':'';?>><?php echo $brand->name; ?></option>
          <?php } ?>
        </select>
      <?php } ?>
    </div>
  </div>
</div>

<div class="fl-sidebar">
  
</div>