<div class="main-con-section">
  <div class="fl-sec-hdr">
    <h4>Popular Brands</h4>
  </div>
  <?php 
  $brands = get_terms( array(
    'taxonomy' => 'brand',
    'hide_empty' => false,
    'parent' => 0
  ) );
  ?>
  <div class="popular-brands-logos">
    <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
    <ul class="clearfix ulc">
      <?php 
        $toalTerm = count($brands);
        $totalActiveTerm = 0;
        $i = 1;
        foreach ( $brands as $brand ) { 
        $is_popular = get_field('is_that_popular', $brand);
        if($is_popular):
          $totalActiveTerm = $i;
      ?>
      <li>
        <a href="<?php echo get_term_link($brand); ?>">
          <figure>
            <?php 
              $blogoID = get_field('blogo', $brand);
              if( !empty($blogoID) ) echo cbv_get_image_tag($blogoID);
            ?>
          </figure>
          <strong><?php echo $brand->name; ?></strong>
        </a>
      </li>
      <?php $i++; endif; } ?>
      <?php if( $toalTerm > $totalActiveTerm ): ?>
      <li class="brands-more-items">
        <a href="<?php echo home_url('brand'); ?>">
          <strong>More item</strong>
        </a>
      </li>
      <?php endif; ?>
    </ul>
    <?php } ?>
  </div>
</div>