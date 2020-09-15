<?php 
  /*
    Template Name: Contact
  */
  get_header(); 

  $thisID = get_the_ID();
  $spacialArry = array(".", "/", "+", " ", "(", ")");$replaceArray = '';
  $contform = get_field('conform', $thisID);
  $continfo = get_field('coninfo', $thisID);
  $e_mailadres = get_field('email', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $smedias = get_field('socialmedia', 'options');

$bannersec = array();
$bannersec = get_field('bannersec', get_the_ID());
$pagebanner = $bannersec['bannerimage'];
if( empty($pagebanner) ) $pagebanner = THEME_URI.'/assets/images/page-banner-compare.jpg';
?>
<section class="main-banner page-banner" style="background: url(<?php echo $pagebanner; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-bnr-slider">
          <div class="main-bnr-slide-item clearfix page-banner-con">
            <div class="main-bnr-slide-item-des">
              <div>
                <?php if( !empty($bannersec['title']) ) printf('<h5>%s</h5>', $bannersec['title']); ?>
                <?php
                  if( !empty($bannersec['subtitle']) ) printf('<h1>%s</h1>', $bannersec['subtitle']); 
                  if( !empty($bannersec['description']) ) echo wpautop( $bannersec['description'] ); 
                ?>
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
              <?php if(!empty($contform['form_shortcode'])) echo do_shortcode( $contform['form_shortcode'] ); ?>
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
            <?php if( !empty( $telefoon ) ): ?>
            <div class="bt-contact-tel">
              <i class="fas fa-phone"></i>
              <a href="tel:<?php echo $telefoon; ?>"><?php echo $show_telefoon; ?></a>
            </div>
            <?php endif; ?>
            <?php if( !empty( $e_mailadres) ): ?>
            <div class="bt-contact-mail">
                <i class="fa fa-envelope"></i>
                <a href="mailto:<?php echo $e_mailadres; ?>"><?php echo $e_mailadres; ?></a>
            </div>
            <?php endif; ?>
            <div class="ftr-social">
              <?php if(!empty($smedias)):  ?>
              <ul class="clearfix ulc">
              <?php 
                foreach($smedias as $smedia): 
              ?>
                <li><a target="_blank" href="<?php echo $smedia['url']; ?>">
                  <?php echo $smedia['icon']; ?>
                </a></li>
              <?php 
                endforeach; 
              ?>
              </ul>
              <?php endif; ?>
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