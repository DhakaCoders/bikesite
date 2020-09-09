<?php 
  /*
    Template Name: Contact
  */
  get_header(); 

  $thisID = get_the_ID();
  $spacialArry = array(".", "/", "+", " ", "(", ")");$replaceArray = '';
  $contform = get_field('conform', $thisID);
  $continfo = get_field('coninfo', $thisID);
  $instagram = get_field('instagram_url', 'options');
  $facebook = get_field('facebook_url', 'options');
  $twitter = get_field('twitter_url', 'options');


  $banner = get_field('banner', $thisID);
  $bgimg = $banner['background_image'];
  $bgimgColor = $banner['color'];
  $bgimgOpacity = $banner['opacity'];
  if( !empty( $bgimg ) ){
    $pagebanner = cbv_get_image_src($bgimg);
    echo '<style>.hasBannerOverlay:after{background: '.$bgimgColor.'; opacity: '.$bgimgOpacity.'%;}</style>';
  }else{
    $pagebanner = THEME_URI.'/assets/images/h4-img-42.jpg';
  }
?>
<section class="main-banner page-banner" style="background: url(<?php echo $pagebanner; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-bnr-slider">
          <div class="main-bnr-slide-item clearfix page-banner-con">
            <div class="main-bnr-slide-item-des">
              <div>
                <h5>Best Deal</h5>
                <h1>Find Your Dream Bike</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
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

<section class="main-content contact-main-content">

  <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 pull-right">
          <div class="bt-contact-page-con">
            <?php if($contform): ?>
            <div class="fl-sec-hdr">
              <?php if( !empty($contform['title']) ) printf('<h4>%s</h4>', $contform['title']); ?>
            </div>
            <div class="bt-contact-form">
              <form>
                <div class="clearfix bt-form-row">
                  <div class="bt-form-d2-col">
                    <div class="dt-input-field">
                      <label>Name *</label>
                      <input type="text" name="" placeholder="Enter Your Name">
                    </div>
                  </div>
                  <div class="bt-form-d2-col">
                    <div class="dt-input-field">
                      <label>Email *</label>
                      <input type="email" name="" placeholder="Enter Your Email">
                    </div>
                  </div>
                </div>
                <div class="clearfix bt-form-row">
                  <div class="bt-form-d2-col">
                    <div class="dt-input-field">
                      <label>Phone Number *</label>
                      <input type="text" name="" placeholder="Enter Your Phone Number">
                    </div>
                  </div>
                  <div class="bt-form-d2-col">
                    <label>City *</label>
                    <div class="bt-selctpicker-ctlr">
                      <select class="selectpicker" data-size="7" data-live-search="true">
                        <option selected="selected">Select City</option>
                        <option value="cafe-racer">Badarganj</option>
                        <option value="cafe-racer">Bajitpur</option>
                        <option value="cafe-racer">Bandarban</option>
                        <option value="cafe-racer">Baniachang</option>
                        <option value="cafe-racer">Barisal</option>
                        <option value="cafe-racer">Bera</option>
                        <option value="cafe-racer">Bhairab Bazar</option>
                        <option value="cafe-racer">Bhandaria</option>
                        <option value="cafe-racer">Bhatpara Abhaynagar</option>
                        <option value="cafe-racer">Bheramara</option>
                        <option value="cafe-racer">Bhola</option>
                        <option value="cafe-racer">Bogra</option>
                        <option value="cafe-racer">Burhanuddin</option>
                        <option value="cafe-racer">Char Bhadrasan</option>
                        <option value="cafe-racer">Chhagalnaiya</option>
                        <option value="cafe-racer">Chhatak</option>
                        <option value="cafe-racer">Chilmari</option>
                        <option value="cafe-racer">Chittagong</option>
                        <option value="cafe-racer">Comilla</option>
                        <option value="cafe-racer">Cox's Bazar</option>
                        <option value="cafe-racer">Dhaka</option>
                        <option value="cafe-racer">Dinajpur</option>
                        <option value="cafe-racer">Dohar</option>
                        <option value="cafe-racer">Faridpur</option>
                        <option value="cafe-racer">Fatikchari</option>
                        <option value="cafe-racer">Feni</option>
                        <option value="cafe-racer">Gafargaon</option>
                        <option value="cafe-racer">Gaurnadi</option>
                        <option value="cafe-racer">Habiganj</option>
                        <option value="cafe-racer">Hajiganj</option>
                        <option value="cafe-racer">Jamalpur</option>
                        <option value="cafe-racer">Jessore</option>
                        <option value="cafe-racer">Jhingergacha</option>
                        <option value="cafe-racer">Joypur Hat</option>
                        <option value="cafe-racer">Kalia</option>
                        <option value="cafe-racer">Kaliganj</option>
                        <option value="cafe-racer">Kesabpur</option>
                        <option value="cafe-racer">Khagrachhari</option>
                        <option value="cafe-racer">Khulna</option>
                        <option value="cafe-racer">Kishorganj</option>
                        <option value="cafe-racer">Kushtia</option>
                        <option value="cafe-racer">Laksham</option>
                        <option value="cafe-racer">Lakshmipur</option>
                        <option value="cafe-racer">Lalmanirhat</option>
                        <option value="cafe-racer">Lalmohan</option>
                        <option value="cafe-racer">Madaripur</option>
                        <option value="cafe-racer">Manikchari</option>
                        <option value="cafe-racer">Mathba</option>
                        <option value="cafe-racer">Maulavi Bazar</option>
                        <option value="cafe-racer">Mehendiganj</option>
                        <option value="cafe-racer">Mirzapur</option>
                        <option value="cafe-racer">Morrelgonj</option>
                        <option value="cafe-racer">Mymensingh</option>
                        <option value="cafe-racer">Nabinagar</option>
                        <option value="cafe-racer">Nagarpur</option>
                        <option value="cafe-racer">Nageswari</option>
                        <option value="cafe-racer">Nalchiti</option>
                        <option value="cafe-racer">Narail</option>
                        <option value="cafe-racer">Narayanganj</option>
                        <option value="cafe-racer">Narsingdi</option>
                        <option value="cafe-racer">Nawabganj</option>
                        <option value="cafe-racer">Netrakona</option>
                        <option value="cafe-racer">Pabna</option>
                        <option value="cafe-racer">Palang</option>
                        <option value="cafe-racer">Panchagarh</option>
                        <option value="cafe-racer">Par Naogaon</option>
                        <option value="cafe-racer">Parbatipur</option>
                        <option value="cafe-racer">Patiya</option>
                        <option value="cafe-racer">Phultala</option>
                        <option value="cafe-racer">Pirgaaj</option>
                        <option value="cafe-racer">Pirojpur</option>
                        <option value="cafe-racer">Raipur</option>
                        <option value="cafe-racer">Rajshahi</option>
                        <option value="cafe-racer">Ramganj</option>
                        <option value="cafe-racer">Rangpur</option>
                        <option value="cafe-racer">Raojan</option>
                        <option value="cafe-racer">Saidpur</option>
                        <option value="cafe-racer">Sakhipur</option>
                        <option value="cafe-racer">Sandwip</option>
                        <option value="cafe-racer">Sarankhola</option>
                        <option value="cafe-racer">Sarishabari</option>
                        <option value="cafe-racer">Satkania</option>
                        <option value="cafe-racer">Satkhira</option>
                        <option value="cafe-racer">Shahzadpur</option>
                        <option value="cafe-racer">Sherpur</option>
                        <option value="cafe-racer">Shibganj</option>
                        <option value="cafe-racer">Sirajganj</option>
                        <option value="cafe-racer">Sylhet</option>
                        <option value="cafe-racer">Tangail</option>
                        <option value="cafe-racer">Teknaf</option>
                        <option value="cafe-racer">Thakurgaon</option>
                        <option value="cafe-racer">Tungi</option>
                        <option value="cafe-racer">Tungipara</option>
                        <option value="cafe-racer">Uttar Char Fasson</option>
                      </select>
                    </div>
                  </div>
                  <div class="clearfix bt-form-row bt-form-textarea-row">
                    <div class="dt-input-field">
                        <label>Message *</label>
                        <textarea placeholder="Enter Your Message"></textarea>
                    </div>
                  </div>
                </div>
                <div class="bt-form-submit-btn">
                  <input type="submit" name="" value="Submit">
                </div>
              </form>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 pull-left">
          <?php if( $continfo ): ?>
          <div class="bt-contact-lft-sliderbar">
            <div class="fl-sec-hdr">
              <?php if( !empty($continfo['title']) ) printf('<h4>%s</h4>', $continfo['title']); ?>
            </div>
            <div class="bt-contact-tel">
              <i class="fas fa-phone"></i>
              <a href="tel:01735519844">01735-519844</a>
            </div>
            <div class="bt-contact-mail">
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@bikertrust.net">info@bikertrust.com</a>
            </div>
            <div class="ftr-social">
              <ul class="clearfix ulc">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>
            <!-- <div class="dft-bike-img">
              <img src="<?php echo THEME_URI; ?>/assets/images/newsletter-img.png">
            </div> -->
          </div>
          <?php endif; ?>
        </div>
        
      </div>
  </div>    
</section>
<?php get_footer(); ?>