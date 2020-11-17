<?php 
get_header(); 
while( have_posts() ): the_post();
?>
<section class="samlle-banner inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/h4-img-42.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="samlle-banner-des-cntlr">
          <div class="samlle-banner-des page-banner-con">
            <div>
              <h4><?php the_title(); ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="offers-page">
  <div class="hasImg">
    <img src="<?php echo THEME_URI; ?>/assets/images/bgimg1.jpg">
  </div>

  <section class="offers-single-page-con">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3">
          <div class="fl-lft-sidebar">
			<?php get_sidebar(); ?>
            <div class="fl-sidebar">
              
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-9">
          <div class="ospc-cntlr">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</div>
<?php
endwhile;
get_footer(); 
?>