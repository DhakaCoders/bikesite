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
            <?php 
            $blargs = array(
                'posts_per_page' => 6,
                'post_type' => 'bike'
            );
            $blquery = new WP_Query($blargs); 
            ?>
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
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>