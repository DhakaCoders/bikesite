<?php 
$brandname = '';
$s_termID = '';
$termname = '';
$cityname = '';
$meta = array();
if( isset($_GET['brand']) && !empty($_GET['brand']) && ( !isset($_GET['city']) OR empty($_GET['city']))){ 
  $brandname = $_GET['brand'];
  $search_term = get_term_by('slug', $brandname, 'brand');
  if ( $search_term ){
    $s_termID = $search_term->term_id;
    $termname = $search_term->name;
  }

  $meta[] = array(
       'key'     => 'select_brand',
       'value'   => $s_termID,
       'compare' => '=' 
  );
}elseif( (isset($_GET['brand']) && !empty($_GET['brand']) ) && (isset($_GET['city']) && !empty($_GET['city'])) ){
  $brandname = $_GET['brand'];
  $cityname = $_GET['city'];

  $search_term = get_term_by('slug', $brandname, 'brand');
  if ( $search_term ){
    $s_termID = $search_term->term_id;
    $termname = $search_term->name;
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
}else{
  echo '<script>window.location.href = "'.esc_url( home_url('showroom') ).'";</script>';
  exit();
}

$args = array(
    'post_type' => 'showroom',
    'posts_per_page' => -1,
    'meta_query' => $meta
);
 
// Custom query.
$query = new WP_Query( $args );
 
$bannersec = array();
$bannersec = get_field('bannersec', get_the_ID());
$pagebanner = $bannersec['bannerimage'];
if( empty($pagebanner) ) $pagebanner = THEME_URI.'/assets/images/h4-img-42.jpg';
?>
<section class="samlle-banner inline-bg" style="background: url(<?php echo $pagebanner; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="samlle-banner-des-cntlr">
          <div class="samlle-banner-des page-banner-con">
            <div>
              <h4><span id="showroomcount">0</span> <?php echo $termname; ?> Bike <span id="showroomtype">Dealers</span> in Bangladesh</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="main-content showrooms-main-content">
<div class="hasImg">
  <img src="<?php echo THEME_URI; ?>/assets/images/bgimg1.jpg">
</div>
<div class="showrooms-filter">  
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-con-section search-filter-section">
            <div class="bt-search-filter-sec-hdr">
              <h4><span>search showrooms</span></h4>
            </div>
            <div class="bt-filter-search-controller">
              <form class="clearfix">
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
</div>

<div class="showrooms-single-page-grds">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-con-section">
            <?php 
              // Check that we have query results.
              if ( $query->have_posts() ) {
            ?>
            <div class="showrooms-tabs-cntrl">
                <div class="dealers-row">
                  <div class="dealers-row-hdr">
                    <div class="fl-sec-hdr">
                      <h4>
                        <?php 
                          if( !empty($cityname) ) 
                            echo $cityname; 
                          else
                            echo 'All'
                        ?>
                        Branch
                      </h4>
                    </div>
                    <div class="fl-tabs clearfix">
                        <button class="tab-link current" data-tab=".dealers"><span>Dealers</span></button>
                        <button class="tab-link" data-tab=".service-center"><span>Service Center</span></button>
                      </div>
                  </div>
                  <div class="fl-tab-content current" id="tab-1">
                    <div class="border-grd-items">
                      <ul class="clearfix ulc">
                        <?php 
                          // Start looping over the query results.
                          while ( $query->have_posts() ) { $query->the_post();
                            $address = get_field('address');
                            $telephone = get_field('telephone');
                            $categories = get_the_terms(get_the_ID(), 'showroom_cat');
                            $cat = '';
                            $separator = ' ';
                            if( ! empty( $categories ) ){
                              foreach ($categories as $category){
                               $cat .= $category->slug . $separator;
                              }
                              $cat = trim( $cat, $separator );
                            }
                        ?>
                        <li class="<?php echo $cat; ?>">
                          <div class="border-grd-item">
                            <h4>A. N Traders</h4>
                            <div class="dealers-address">
                              <i class="far fa-compass"></i>
                              <?php if( !empty($address) ) printf('<p class="mHc">%s</p>', $address); ?>
                              <div class="info-btncntlr">
                                <div class="mkdf-btn mkdf-btn-medium mkdf-btn-predefined">
                                  <div class="btn-popup">
                                    <?php 
                                    if( !empty($telephone) ):
                                    $preg_telephone = phone_preg($telephone); 
                                    ?>
                                    <a href="tel:<?php echo $preg_telephone; ?>">
                                      <i class="fas fa-phone"></i>
                                      <span> <?php echo $telephone; ?></span>
                                    </a>
                                    <?php endif; ?>
                                    <span><i class="fas fa-times"></i></span>
                                  </div>
                                  <span class="mkdf-btn-predefined-line-holder">
                                    <span class="mkdf-btn-line-hidden"></span>
                                    <span class="mkdf-btn-text">Contact Dealer</span>
                                    <span class="mkdf-btn-line"></span>
                                    <i class="mkdf-btn-predefined-icon mkdf-icon-ion-icon ion-ios-play fas fa-caret-right"></i>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      <?php  } ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="load-more-btn">
                  <div class="mkdf-btn mkdf-btn-medium mkdf-btn-predefined">
                    <span class="mkdf-btn-predefined-line-holder">
                      <span class="mkdf-btn-line-hidden"></span>
                      <span class="mkdf-btn-text">Load More</span>
                      <span class="mkdf-btn-line"></span>
                      <i class="mkdf-btn-predefined-icon mkdf-icon-ion-icon ion-ios-play fas fa-caret-right"></i>
                    </span>
                  </div>
                </div>
            </div>
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
</div>    
</section>