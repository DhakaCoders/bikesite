(function($) {
var windowWidth = $(window).width();

if($('#preloader').length){
  $('#status1').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(550).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(550).css({'overflow':'visible'});
/*function timeout_trigger() {
   $("#status1").css("left",p+"%");
   $(".progress-view").text(p+"%");
   if(p!=100) {
       setTimeout('timeout_trigger()', 50);
   }
   p++;
}
timeout_trigger();*/
/*function onLoad() { 
  var now = new Date().getTime();
  var page_load_time = now - performance.timing.navigationStart;
  console.log("User-perceived page loading time: " + page_load_time);
}
onLoad();*/

/*var i = 0;

$('img').each(function() {

  $(this).one('load', function() {
  i++;
  console.log(i);
  });

});*/
/*function timeout_trigger() {
   $(".progress").css("max-width",p+"%");
   $(".progress-view").text(p+"%");
   if(p!=100) {
       setTimeout('timeout_trigger()', 50);
   }
   p++;
}
timeout_trigger();*/

}



$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
if($('.mhCol').length){
    $('.mhCol').matchHeight();
  };
/**
Responsive on 767px
*/

// if (windowWidth <= 767) {

  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }


// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


//$("[data-fancybox]").fancybox({});
/*if( $('.main-bnr-slider').length ){
    $('.main-bnr-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
    });
}*/
if( $('#btBikeGallerySlider').length ){
    $('#btBikeGallerySlider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
    });
}
if( $('#btRelatedBikesSlider').length ){
    $('#btRelatedBikesSlider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

if( $('.compare-bikes-slider').length ){
    $('.compare-bikes-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


if( $('#slider-range').length ){
    $( "#slider-range" ).slider({
      range: true,
      min: 50000,
      max: 700000,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "BDT " + ui.values[ 0 ] + " - BDT " + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "BDT " + $( "#slider-range" ).slider( "values", 0 ) +
      " - BDT " + $( "#slider-range" ).slider( "values", 1 ) );
}

$(".toTopBtn").click(function () {
   $("html, body").animate({scrollTop: 0}, 1000);
});


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

if( $('#bt-vdo').length ){
document.getElementById('bt-vdo').play();
}
/*var $video  = $('#bt-vdo'),
    $window = $(window); 

$(window).resize(function(){
    //var height = $window.height();
    //$video.css('height', height);

    var videoWidth = $video.width(),
        windowWidth = $window.width();
    //marginLeftAdjust =   (windowWidth - videoWidth) / 2;

    $video.css({
        'width': windowWidth
        //'marginLeft' : marginLeftAdjust
    });
}).resize();

    new WOW().init();*/

})(jQuery);









