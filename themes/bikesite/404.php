<?php get_header(); ?>
<section class="page-banner page-banner-404">
  <div class="page-banner-controller" style="overflow: hidden;">
    <div class="page-banner-bg inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/wines-pg-bnr.png');"></div>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-banner-des-inner">
              <h1 class="page-banner-title">404</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="main-content page-404-wrp error-404-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-404  text-center">
                    <h1>404</h1>
                    <h4>We cannot find this page</h4>
                    <p class="text-center"><a href="<?php echo esc_url( home_url() );?>">Home</a></p>
                </div>
            </div>
        </div><!-- end of .newsarea -->
    </div>
</section>

<?php get_footer(); ?>