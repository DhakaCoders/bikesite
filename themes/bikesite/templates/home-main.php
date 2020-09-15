<div class="main-con-section">
  <div class="fl-sec-hdr">
    <h4>Latest Bikes</h4>
  </div>
  <?php 
  $blargs = array(
      'posts_per_page' => 6,
      'post_type' => 'bike',
      'tax_query'     => array(
          array(
              'taxonomy'  => 'status',
              'field'     => 'slug', 
              'terms'     => array( 'upcoming' ),
              'operator' => 'NOT IN'
          )
      ) 
  );
  $blquery = new WP_Query($blargs); 
  ?>
  <div class="bt-grd-controller">
    <?php if($blquery->have_posts()): ?>
    <ul class="clearfix ulc">
      <?php 
        while ( $blquery->have_posts() ) : $blquery->the_post();
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
      </li>
      <?php endwhile; ?><!-- end of the loop -->
    </ul>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</div>
<div class="main-con-section">
  <div class="fl-sec-hdr">
    <h4>Upcoming Bikes</h4>
  </div>
  <?php
  $buargs = array(
      'posts_per_page' => 6,
      'post_type' => 'bike',
      'tax_query'     => array(
          array(
              'taxonomy'  => 'status',
              'field'     => 'slug', 
              'terms'     => array( 'upcoming' ),
          )
      ) 
  );
  $buquery = new WP_Query($buargs); 
  ?>
  <div class="bt-grd-controller">
    <?php if($buquery->have_posts()): ?>
    <ul class="clearfix ulc">
      <?php 
        while ( $buquery->have_posts() ) : $buquery->the_post();
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
      </li>
      <?php endwhile; ?><!-- end of the loop -->
    </ul>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</div>