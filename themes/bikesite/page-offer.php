<?php 
/*
  Template Name: Offer
*/
get_header(); 
$thisID = get_the_ID();
?>
<?php 
$brandname = '';
$s_termID = '';
$cityname = '';
$meta = array();
if( isset($_GET['brand']) && !empty($_GET['brand']) && ( !isset($_GET['city']) OR empty($_GET['city']))){ 
  $brandname = $_GET['brand'];
  $search_term = get_term_by('slug', $brandname, 'brand');
  if ( $search_term ){
    $s_termID = $search_term->term_id;
  }

  $meta[] = array(
       'key'     => 'select_brand',
       'value'   => $s_termID,
       'compare' => '=' 
  );
}elseif( (!isset($_GET['brand']) && empty($_GET['brand']) ) && (isset($_GET['city']) && !empty($_GET['city'])) ){
  $cityname = $_GET['city'];

  $meta[] = array( 
      array(
          'key' => 'select_city',
          'value' => $_GET['city'],
          'compare' => '='
      ),
  );
}elseif( (isset($_GET['brand']) && !empty($_GET['brand']) ) && (isset($_GET['city']) && !empty($_GET['city'])) ){
  $brandname = $_GET['brand'];
  $cityname = $_GET['city'];

  $search_term = get_term_by('slug', $brandname, 'brand');
  if ( $search_term ){
    $s_termID = $search_term->term_id;
  }

  $meta[] = array( 
      'relation' => 'AND',
      array(
      'key' => 'select_brand',
      'value' => $s_termID,
      'compare' => '='
      ),
      array(
          'key' => 'select_city',
          'value' => $_GET['city'],
          'compare' => '='
      ),
  );
}
$slides = get_field('slider', $thisID);
if( $slides ):
?>
<section class="page-slider-section">
    <div class="offers-page-slider-cntlr clearfix">
      <div class="offersPageSlider">
      	<?php 
      	foreach( $slides as $slide ): 
      	$slideID = $slide['image'];
      	if( !empty($slideID) ){
      	?>
        <div class="offersPageSlideItem">
          <div>
            <a href="#"><?php echo cbv_get_image_tag($slideID, 'full'); ?></a>
          </div>
        </div>
    	<?php } ?>
    	<?php endforeach; ?>
      </div>
    </div>
</section>
<?php endif; ?>

<div class="offers-page">
  <div class="hasImg">
    <img src="<?php echo THEME_URI; ?>/assets/images/bgimg1.jpg">
  </div>
  <section class="offers-page-filters">  
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="search-filter-section">
              <div class="bt-search-filter-sec-hdr">
                <h4><span>search bike offers</span></h4>
              </div>
              <div class="bt-filter-search-controller">
                <form class="clearfix" action="" method="get">
                  <div class="clearfix bt-search-selects">
                    <div class="bt-filter-search-item bt-filter-search-item-brands">
                      <label>Brand -</label>
                      <?php                 
                        $brands = get_terms( array(
                          'taxonomy' => 'brand',
                          'hide_empty' => false,
                          'parent' => 0
                        ) );
                      ?>
                      <div class="bt-selctpicker-ctlr">
	                      <select name="brand" class="selectpicker" data-size="7" data-live-search="true">
	                        <option value="">Select Brand</option>
	                        <?php if ( ! empty( $brands ) && ! is_wp_error( $brands ) ){  ?>
	                          <?php foreach ( $brands as $brand ) { ?>
	                            <option value="<?php echo $brand->slug; ?>" <?php echo ($brandname == $brand->slug)? 'selected':'';?>><?php echo $brand->name; ?></option>
	                          <?php } ?>
	                        <?php } ?>
	                      </select>
                      </div>
                    </div>
                    <div class="bt-filter-search-item bt-filter-search-item-capacity">
                      <label>Model -</label>
                      <div class="bt-selctpicker-ctlr">
                        <select class="selectpicker" data-size="7" data-live-search="true">
                          <option selected="selected" max=10>GSX 250 R</option>
                          <option value="Dhaka_Branch">MT 15</option>
                          <option value="Mymensing_Branch">GSX 250 R</option>
                        </select>
                      </div>
                    </div>
                    <div class="bt-filter-search-item bt-filter-search-item-capacity">
                      <label>CITIES -</label>
                      <div class="bt-selctpicker-ctlr">
	                      <select name="city" class="selectpicker" data-size="7" data-live-search="true">
	                        <option value="">Select Cities</option>
	                        <?php 
	                        $districts = districts_option();
	                        if( !empty($districts) ): ?>
	                          <?php foreach( $districts as $district ): $district_slug = strtolower($district['name']); ?>
	                            <option value="<?php echo $district_slug;?>" <?php echo ($cityname == $district_slug)? 'selected':'';?>><?php echo $district['name'];?> Branch</option>
	                          <?php endforeach; ?>
	                        <?php endif; ?>
	                      </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="bt-search-selects-submit-btn">
                    <input type="submit" name="" value="Search">
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
<?php 
$args = array(
'post_type' => 'offers',
'posts_per_page' => -1,
'meta_query' => $meta
);

// Custom query.
$query = new WP_Query( $args );
?>
  <section class="offers-page-content-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="offers-page-content">
            <?php 
              // Check that we have query results.
              if ( $query->have_posts() ) {
            ?>
            <div class="fl-sec-hdr">
              <h4>Bike news</h4>
            </div>

            <ul class="ulc">
	        <?php 
	          // Start looping over the query results.
	          while ( $query->have_posts() ) { $query->the_post();
	        ?>	
              <li>
                <div class="offer-item-row clearfix">
                  <div class="offer-item-row-lft">
                  	<?php 
                  		$thumID = get_post_thumbnail_id( get_the_ID() );
                  		if( !empty($thumID) ){
                  			echo cbv_get_image_tag($thumID, 'offergrid');
                  		}else{
                  	?>
                    <img src="<?php echo THEME_URI; ?>/assets/images/offers-img-1.jpg">
                	<?php } ?>
                  </div>
                  <div class="offer-item-row-rgt">
                    <h4><?php the_title(); ?></h4>
                    <strong>2020-10-25</strong>
                    <?php echo get_the_excerpt(); ?>
                    <div class="read-more-btn">
                      <a href="<?php the_permalink( );?>" class="mkdf-btn mkdf-btn-medium mkdf-btn-predefined">
                        <span class="mkdf-btn-predefined-line-holder">
                          <span class="mkdf-btn-line-hidden"></span>
                          <span class="mkdf-btn-text">Read More</span>
                          <span class="mkdf-btn-line"></span>
                          <i class="mkdf-btn-predefined-icon mkdf-icon-ion-icon ion-ios-play fas fa-caret-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <?php  } ?>
            </ul>
            <?php 
            }else{
              echo '<div clas="no-results">No Results!</div>';
            }
            // Restore original post data.
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
get_footer(); 
?>