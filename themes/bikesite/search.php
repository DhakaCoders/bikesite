<?php 
get_header(); 
?>
<section class="main-content home-main-content">
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
          <div class="main-con-section">
            <div class="fl-sec-hdr">
              <h4>Search Results: <?php the_search_query(); ?></h4>
            </div>
            <div class="searchbt-grd-controller">
              <?php if(have_posts()): ?>
              <ul class="clearfix ulc">
                <?php 
                  while ( have_posts() ) : the_post();
                  $fullspe = get_field( 'full_specifications' );
                  $engtrans = get_field( 'enginetransmission' );
                  $price = get_field( 'priceav' );
                  $imgsec = get_field( 'featuredimg' );
                  $gridimgID = $imgsec['featured_image'];
                ?>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <?php if ( get_post_type( get_the_ID() ) == 'bike' ){ ?>
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
                            <?php if( !empty($engtrans['fuel_type']) ) printf('<li>%s</li>', $engtrans['fuel_type']); ?>
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
                      <?php }else{ ?>
                        <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <?php the_title(); ?>
                          </div>
                        </div>
                      <?php } ?>
                  </div>
                  </div>
                </li>
                <?php endwhile; ?><!-- end of the loop -->
              </ul>
              <?php else: ?>
                <div class="noresults">No Results</div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>