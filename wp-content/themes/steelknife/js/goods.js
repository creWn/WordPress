$(document).ready(function(){
  change_sidebar();
  $('.goods img').click(function(){
    $window_width = $(window).width();
    if($window_width >= 768){
      $('.image_popup').css({
        display: 'block',
        opacity: 0
      })
      .animate({
        opacity: 1
      }, 300)
    }

  })
  $('#close_img').click(function(){
    $('.image_popup').animate({
      opacity: 0
    }, 300)
    .css({
      display: 'none'
    })
  })
  
  $('#hamburger').click(function(){
    slide_sidebar(15, 1000) 
  })
  $window_width = $(window).width();
  $window_height = $(window).height();


  $(window).resize(function(){
    change_sidebar();
  })
function change_sidebar(){
    $window_width = $(window).width();
    $window_height = $(window).height();
    $aside_height = $('aside').outerHeight();
    if($window_width >= 1200 && $aside_height >= $window_height){
      $('aside').css({
      position: 'absolute',
      width: '100%'
    })
    }
}


function slide_sidebar($bootstrap_margin, $time){
    $visible = $('aside').css('display');
    $content_width = $('.wrap_content').outerWidth();
    $aside_width = $('aside').outerWidth();
    $dl_height = $('html').height();
    $('.dark_layout').css({
      height: $dl_height
    })
    if($visible == 'block'){
      //прячем
      $('.dark_layout').animate({
        opacity: 0
      }, 1000);
      $('aside').animate({
        marginLeft: -($aside_width + $bootstrap_margin),
      },1000, function(){
        $('aside').hide();
        $('.dark_layout').css({
          display: 'none'
        })
      })
    }
    else if($visible == 'none'){
      //показываем
      $('.dark_layout').css({
        display: 'block'
      })
      .animate({
        opacity: 0.9
      }, 1000);
      $('aside').css({
        display: 'block',
        marginLeft: -($aside_width + $bootstrap_margin)
      })
      .animate({
        marginLeft: 0
      }, 1000)
    }
  }


  function hide_sidebar(){
      $('aside').css({
        display: 'none'
      })
      $('.wrap_content').css({
        width: '100%'
      })
  }
  hide_sidebar();

    
  
});
// Если сайдбар имеет атрибут - usual_slide, тогда к нему применяется только обычный слайд, СУЧКА - все вынесено в лэйаут
