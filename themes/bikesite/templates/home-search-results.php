<?php 
  $taxs = array(); $meta = array();
  if ( isset($_GET['bbrand']) && !empty($_GET['bbrand'])){
    $taxs[] = array(
      'taxonomy' => 'brand',
      'field' => 'slug',
      'terms' => $_GET['bbrand']
    );
  }
  if ( isset($_GET['bcapacity']) && !empty($_GET['bcapacity'])){
    $taxs[] = array(
      'taxonomy' => 'capacity',
      'field' => 'slug',
      'terms' => $_GET['bcapacity']
    );
  } 
  if ( isset($_GET['btype']) && !empty($_GET['btype'])){
    $taxs[] = array(
      'taxonomy' => 'bike_type',
      'field' => 'slug',
      'terms' => $_GET['btype']
    );
  } 

  if ( isset($_GET['price-range']) && !empty($_GET['price-range'])){
  	$exprice = explode('-', str_replace('BDT', '', $_GET['price-range']));
	$meta[] = array(
         'key'     => 'priceav_price',
         'value'   => array( $exprice[0], $exprice[1]),
         'compare' => 'BETWEEN',
         'type'    => 'NUMERIC', 
    );
  }
?>
<div class="main-con-section">
  <div class="fl-sec-hdr">
    <h4>Search Results</h4>
  </div>
  <?php
	$taxquery = $metaquery = '';
	if( $taxs ){
	  if(count($taxs) > 1){
	    $taxquery = array(
	    'relation' => 'AND',
	    $taxs
	    );
	  } else{
	    $taxquery = array($taxs);
	  }
	}
	if( $meta ){
	    $metaquery = array($meta);
	}
  $buargs = array(
      'posts_per_page' => 6,
      'post_type' => 'bike',
      'tax_query' => $taxquery,
      'meta_query' => $metaquery,
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

                    <span>6600 RPM</span>
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
    <?php else: ?>
      <div class="noresults">No Results</div>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</div>