<?php 
  $ftabo = get_field('ftabout', 'options');

  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $e_mailadres = get_field('email', 'options');

  $copyright_text = get_field('copyrighttext', 'options');
  $smedias = get_field('socialmedia', 'options');
?>
<footer class="footer-wrap" style="background: url(<?php echo THEME_URI; ?>/assets/images/ftr-bg-img.jpg);">
  <div class="ftr-inner">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="ftr-col">
              <div class="ftr-aboutus-col">
                <?php if($ftabo): ?>
                <?php 
                  if( !empty($ftabo['title']) ) printf('<h6>%s</h6>', $ftabo['title']);
                  if( !empty($ftabo['description']) ) echo wpautop($ftabo['description']);
                ?>
                <?php endif; ?>
                <?php if( !empty( $e_mailadres ) ) printf('<div class="footer-mail"><i class="far fa-envelope"></i><a href="mailto:%s">%s</a></div>', $e_mailadres, $e_mailadres);  ?>
              </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-5">
          <div class="ftr-col ftr-mid-col">
            <h6><?php _e('Quick Links', THEME_NAME); ?></h6>
            <?php 
              $fmenuOptions = array( 
                  'theme_location' => 'cbv_ft_menu', 
                  'menu_class' => 'clearfix ulc',
                  'container' => '',
                  'container_class' => ''
                );
              wp_nav_menu( $fmenuOptions ); 
            ?>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="ftr-col ftr-rgt-col">
            <h6><?php _e('Follow Us', THEME_NAME); ?></h6>
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
            <div class="ftr-subscribe">
              <form>
                <input type="email" name="" placeholder="Enter Your E-Mail">
                <button><i class="far fa-paper-plane"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ftr-btm">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?> 
          </div>
          <div class="col-sm-6">
            <div class="developedby">
              Developed by -
              <a href="#">DhakaCoders</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="toTopBtn">
      <img src="<?php echo THEME_URI; ?>/assets/images/toTopBtnIcon.png">
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>