<?php get_header(); ?>
<section class="main-banner page-banner home-page-bnr" style="background: url();">
  <div class="bnr-vdo">
    <video id="bt-vdo" autoplay muted >
      <source src="<?php echo THEME_URI; ?>/assets/images/videos/RUIN.mp4" type="video/mp4">
      <source src="<?php echo THEME_URI; ?>/assets/images/videos/RUIN.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-bnr-slider">
          <div class="main-bnr-slide-item clearfix page-banner-con">
            <div class="main-bnr-slide-item-des">
              <div>
                <h5>Best Deal</h5>
                <h1>Find Your Dream Bike</h1>
                <p> Golden moment, make your dream tour.</p>
              </div>
            </div>
<!--             <div class="main-bnr-slide-item-img">
              <img src="<?php echo THEME_URI; ?>/assets/images/layer_img_1.png">
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>  
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-con-section search-filter-section">
            <div class="bt-search-filter-sec-hdr">
              <h4><span>search your <br>bike</span></h4>
            </div>
            <div class="bt-filter-search-controller">
              <form class="clearfix">
                <div class="clearfix bt-search-selects">
                  <div class="bt-filter-search-item bt-filter-search-item-brands">
                    <label>Brand -</label>
                    <div class="bt-selctpicker-ctlr">
                      <select class="selectpicker" data-size="7" data-live-search="true">
                        <option selected="selected">Select Brand</option>
                        <option>Hero</option>
                        <option>Honda</option>
                        <option>TVS</option>
                        <option>Yamaha</option>
                        <option>Suzuki</option>
                        <option>Lifan</option>
                        <option>Kawasaki</option>
                        <option>Runner</option>
                        <option>Keeway</option>
                        <option>Roadmaster</option>
                        <option>Benelli</option>
                        <option>Haojue</option>
                        <option>H Power</option>
                        <option>Race</option>
                        <option>Vespa</option>
                        <option>Aprilia</option>
                        <option>KTM</option>
                        <option>GPX</option>
                        <option>Taro</option>
                        <option>Zongshen</option>
                        <option>Atlas Zongshen</option>
                        <option>Mahindara</option>
                        <option>Avatar</option>
                        <option>Beetle Bolt</option>
                        <option>Dayun</option>
                        <option>Hundai</option>
                        <option>Kiden</option>
                        <option>Megelli</option>
                        <option>Meiduo</option>
                        <option>Motrac</option>
                        <option>Pegasus</option>
                        <option>UM</option>
                        <option>Victor</option>
                        <option>Znen</option>
                      </select>
                    </div>
                  </div>
                  <div class="bt-filter-search-item bt-filter-search-item-capacity">
                    <label>CAPACITY -</label>
                    <div class="bt-selctpicker-ctlr">
                      <select class="selectpicker" data-size="7" data-live-search="true">
                        <option selected="selected" max=10>Select Capacity</option>
                        <option value="100cc">100cc</option>
                        <option value="110cc">110cc</option>
                        <option value="125cc">125cc</option>
                        <option value="135cc">135cc</option>
                        <option value="150cc">150cc</option>
                        <option value="155cc">155cc</option>
                        <option value="160cc">160cc</option>
                        <option value="165">165</option>
                        <option value="50cc">50cc</option>
                        <option value="80cc">80cc</option>
                      </select>
                    </div>
                  </div>
                  <div class="bt-filter-search-item bt-filter-search-item-categoris">
                    <label>CATEGORIES -</label>
                    <div class="bt-selctpicker-ctlr">
                      <select class="selectpicker" data-size="7" data-live-search="true">
                        <option selected="selected">Select Bike Type</option>
                        <option value="cafe-racer">Cafe Racer</option>
                        <option value="cruiser-motorcycle">Cruiser Motorcycle</option>
                        <option value="cub">Cub</option>
                        <option value="dirt">Dirt</option>
                        <option value="dual-sports">Dual Sports</option>
                        <option value="mini-bike">Mini Bike</option>
                        <option value="moped">Moped</option>
                        <option value="naked-sports">Naked Sports</option>
                        <option value="off-road-motorcycle">Off-Road Motorcycle</option>
                        <option value="scooter">Scooter</option>
                        <option value="sports-motorcycle">Sports Motorcycle</option>
                        <option value="standard-motorcycle">Standard Motorcycle</option>
                      </select>
                    </div>
                  </div>
                  <div class="bt-filter-search-item bt-filter-search-item-price-range">
                    <div class="bt-search-range-slider">
                      <div class="bt-search-range-slider-hdr">
                        <label for="amount">Price range - </label>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                      </div>
                      <div id="slider-range"></div>
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

<!-- <div class="welcome-section text-center">
  <img src="<?php echo THEME_URI; ?>/assets/images/yamaha-fzs-fi-v3-abs-banner.jpg">
</div> -->

<section class="main-content home-main-content">
<div class="hasImg">
  <img src="<?php echo THEME_URI; ?>/assets/images/bgimg1.jpg">
</div>
  <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3">
          <div class="fl-lft-sidebar">
            <div class="fl-sidebar bt-bike-brands-wrap">
              <h3 class="fl-widget-title">Bike Brands</h3>
              <div class="fl-textwidget fl-bike-brands-textwidget hide-xs">
                <ul>
                  <li><a href="#">Bajaj</a></li>
                  <li><a href="#">Hero</a></li>
                  <li><a href="#">Honda</a></li>
                  <li><a href="#">TVS</a></li>
                  <li><a href="#">Yamaha</a></li>
                  <li><a href="#">Suzuki</a></li>
                  <li><a href="#">Lifan</a></li>
                  <li><a href="#">Kawasaki</a></li>
                  <li><a href="#">Runner</a></li>
                  <li><a href="#">Keeway</a></li>
                  <li><a href="#">Roadmaster</a></li>
                  <li><a href="#">Benelli</a></li>
                  <li><a href="#">Haojue</a></li>
                  <li><a href="#">H Power</a></li>
                  <li><a href="#">Race</a></li>
                  <li><a href="#">Vespa</a></li>
                  <li><a href="#">Aprilia</a></li>
                  <li><a href="#">KTM</a></li>
                  <li><a href="#">GPX</a></li>
                  <li><a href="#">Taro</a></li>
                  <li><a href="#">Zongshen</a></li>
                  <li><a href="#">Atlas <br>Zongshen</a></li>
                  <li><a href="#">Mahindara</a></li>
                  <li><a href="#">Avatar</a></li>
                  <li><a href="#">Beetle Bolt</a></li>
                  <li><a href="#">Dayun</a></li>
                  <li><a href="#">Hundai</a></li>
                  <li><a href="#">Kiden</a></li>
                  <li><a href="#">Megelli</a></li>
                  <li><a href="#">Meiduo</a></li>
                  <li><a href="#">Motrac</a></li>
                  <li><a href="#">Pegasus</a></li>
                  <li><a href="#">UM</a></li>
                  <li><a href="#">Victor</a></li>
                  <!-- <li><a href="#">Znen</a></li> -->
                </ul>
              </div>
              <div class="bt-bike-brands-xs show-xs">
                <div class="bt-selctpicker-ctlr">
                  <select class="selectpicker" data-size="7" data-live-search="true">
                    <option selected="selected">Select Brand</option>
                    <option>Hero</option>
                    <option>Honda</option>
                    <option>TVS</option>
                    <option>Yamaha</option>
                    <option>Suzuki</option>
                    <option>Lifan</option>
                    <option>Kawasaki</option>
                    <option>Runner</option>
                    <option>Keeway</option>
                    <option>Roadmaster</option>
                    <option>Benelli</option>
                    <option>Haojue</option>
                    <option>H Power</option>
                    <option>Race</option>
                    <option>Vespa</option>
                    <option>Aprilia</option>
                    <option>KTM</option>
                    <option>GPX</option>
                    <option>Taro</option>
                    <option>Zongshen</option>
                    <option>Atlas Zongshen</option>
                    <option>Mahindara</option>
                    <option>Avatar</option>
                    <option>Beetle Bolt</option>
                    <option>Dayun</option>
                    <option>Hundai</option>
                    <option>Kiden</option>
                    <option>Megelli</option>
                    <option>Meiduo</option>
                    <option>Motrac</option>
                    <option>Pegasus</option>
                    <option>UM</option>
                    <option>Victor</option>
                    <option>Znen</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="fl-sidebar">
              
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-9">
          

          <div class="main-con-section">
            <div class="fl-sec-hdr">
              <h4>Latest Bikes</h4>
            </div>
            <div class="bt-grd-controller">
              <ul class="clearfix ulc">
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-1.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>270 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-2.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>300 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-3.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>250 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Matrio Max</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-4.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>250 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Matrio Max</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-5.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>250 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Matrio Max</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-6.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>250 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Matrio Max</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="main-con-section">
            <div class="fl-sec-hdr">
              <h4>Upcoming Bikes</h4>
            </div>
            <div class="bt-grd-controller">
              <ul class="clearfix ulc">
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-1.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>270 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-2.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>300 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-3.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>250 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Matrio Max</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-4.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>250 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Matrio Max</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-5.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>250 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Matrio Max</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="bt-grd-item">
                    <div class="product-img">
                      <a href="product-details.html">
                          <img src="<?php echo THEME_URI; ?>/assets/images/product-6.jpg" alt="">
                      </a>
                      <div class="product-item-dec">
                        <ul class="clearfix ulc">
                            <li>2018</li>
                            <li>MANUAL</li>
                            <li>PETROL</li>
                            <li>250 CC</li>
                        </ul>
                      </div>
                      <div class="product-content-wrapper">
                          <div class="product-title-spreed">
                              <h4><a href="product-details.html">Matrio Max</a></h4>
                              <span>6600 RPM</span>
                          </div>
                          <div class="product-price">
                              <span>BDT 307500</span>
                          </div>
                      </div>
                  </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="main-con-section">
            <div class="fl-sec-hdr">
              <h4>Popular Brands</h4>
            </div>
            <div class="popular-brands-logos">
              <ul class="clearfix ulc">
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-01.png">
                    </figure>
                    <strong>Bajaj</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-02.png">
                    </figure>
                    <strong>Suzuki</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-03.png">
                    </figure>
                    <strong>TVS</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-04.png">
                    </figure>
                    <strong>Yamaha</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-05.png">
                    </figure>
                    <strong>Honda</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-06.png">
                    </figure>
                    <strong>Hero</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-07.png">
                    </figure>
                    <strong>Ducati</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-08.png">
                    </figure>
                    <strong>H Power</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-09.png">
                    </figure>
                    <strong>BMW</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-10.png">
                    </figure>
                    <strong>Mahindara</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-11.png">
                    </figure>
                    <strong>Aprilia</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-12.png">
                    </figure>
                    <strong>Kawasaki</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-12.png">
                    </figure>
                    <strong>title</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-06.png">
                    </figure>
                    <strong>title</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-07.png">
                    </figure>
                    <strong>title</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-08.png">
                    </figure>
                    <strong>title</strong>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <figure>
                      <img src="<?php echo THEME_URI; ?>/assets/images/popular-brand--logo-09.png">
                    </figure>
                    <strong>title</strong>
                  </a>
                </li>
                <li class="brands-more-items">
                  <a href="#">
                    <strong>More item</strong>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>