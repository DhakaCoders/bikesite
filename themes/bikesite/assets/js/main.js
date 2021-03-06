(function($) {
var windowWidth = $(window).width();

if($('#preloader').length){
  $('#status1').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(550).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(550).css({'overflow':'visible'});
}
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};



$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
if($('.mhCol').length){
    $('.mhCol').matchHeight();
};

if($('.specification-tbl-sub').length){
    $('.specification-tbl-sub li span').matchHeight();
};

$('.selectpicker').selectpicker();

/**
Sidebar menu
*/
if (windowWidth <= 991) {
  $('.line-icon').on('click', function(e){
    $('nav.main-nav').addClass('opacity-1');
    $('.bdoverlay').addClass('active');
    $('body').addClass('active-scroll-off');
    $(this).addClass('active-collapse');
  });
  $('.closebtn').on('click', function(e){
    $('.bdoverlay').removeClass('active');
    $('nav.main-nav').removeClass('opacity-1');
    $('body').removeClass('active-scroll-off');
    $('.line-icon').removeClass('active-collapse');
  });
  
  $('li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $('li.menu-item-has-children .sub-menu').slideUp(300);
    $(this).toggleClass('sub-menu-active');
    $(this).next().slideDown(300);

  });
}



if (windowWidth <= 991) {
  if($('.fl-textwidget.fl-bike-brands-textwidget').length){
    $('.fl-textwidget.fl-bike-brands-textwidget ul li').matchHeight();
  }
}

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
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            dots: true
          }
        }

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
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
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1
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
          breakpoint: 1200,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1
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
        $( "#amount" ).val( "BDT"+ui.values[ 0 ]+"-BDT"+ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "BDT"+ $( "#slider-range" ).slider( "values", 0 ) +
      "-BDT"+ $( "#slider-range" ).slider( "values", 1 ) );
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
if( $('.offersPageSlider').length ){
    $('.offersPageSlider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
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
var domaIn = '';
if( $("#bikeFilter").length ){
  domaIn = $("#bikeFilter").data('domain');
}

$("#bikeFilter").on('submit', function(e){
  e.preventDefault();
  var brand = '';
  var capacity = '';
  var type = '';
  brand = $("#bbrand").val();
  capacity = $("#bcapacity").val();
  type = $("#btype").val();
  amount = $("#amount").val();
  if( (brand != '') && ( type != '') && (capacity != '') && (amount != '')){
    document.location.href = domaIn+'?bbrand='+brand+'&btype='+type+'&bcapacity='+capacity+'&price-range='+amount;
  }else if( (brand != '') && (capacity != '') && (capacity != '') && (amount != '') ){
    document.location.href = domaIn+'?bbrand='+brand+'&bcapacity='+capacity+'&price-range='+amount;
  }else if( (brand != '') && (capacity != '') && (amount != '')){
    document.location.href = domaIn+'?bbrand='+brand+'&bcapacity='+capacity+'&price-range='+amount;
  }else if( (brand != '') && (type != '') && (amount != '')){
    document.location.href = domaIn+'?bbrand='+brand+'&btype='+type+'&price-range='+amount;
  }else if( (type != '') && (capacity != '') && (amount != '') ){
    document.location.href = domaIn+'?bcapacity='+capacity+'&btype='+type+'&price-range='+amount;
  }else if( (brand != '') && (amount != '') ){
    document.location.href = domaIn+'?bbrand='+brand+'&price-range='+amount;
  }else if( (capacity != '') && (amount != '') ){
    document.location.href = domaIn+'?bcapacity='+capacity+'&price-range='+amount;
  }else if( (type != '') && (amount != '') ){
    document.location.href = domaIn+'?btype='+type+'&price-range='+amount;
  }else if( (amount != '') ){
    document.location.href = domaIn+'?price-range='+amount;
  }else{

  }
  
});

if( $('#has-chat').length ){
  var did = $('#has-chat').data('ti');
  if( $('.wcUsersList .wcUsersListContainer a[data-wp-id="3"]').length ){
    //$('.wcUsersList .wcUsersListContainer a[data-wp-id="3"]').trigger('click');
    $('.wcUsersList .wcUsersListContainer a[data-wp-id="3"]').click();
    console.log('hello1');
  }
}
var counter = 0;
$(document).on('mouseover mouseout', 'body', function(){
  if( counter == 0 ){
  var did = $('#has-chat').data('ti');
  $('.wcUsersList .wcUsersListContainer a[data-wp-id="'+did+'"]').click();
  counter++;
  }
});


/*$('div.fl-tabs button').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('div.fl-tabs button').removeClass('current');
    $('.fl-tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
    $('.mHc').matchHeight();
});*/


$('.mkdf-btn').on('click', function (){
  $('.mkdf-btn').not(this).parent().removeClass('btn-popup-show');
  $(this).parent().toggleClass('btn-popup-show');
});

var countz = 0;
$('div.border-grd-items ul').find('li').each(function(){
    if($(this).hasClass("dealers"))
        countz++;
});
$("#showroomcount").text(countz);


})(jQuery);









