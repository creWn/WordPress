$(document).ready(function(){
  $('#hamburger').click(function(){
    $window_width = $(window).width();
    if($window_width < 1200 && $window_width >= 768){
      beautiful_slide(15, 1000);
    }
    else if($window_width < 768){
      slide_sidebar(15,1000);
    }
  })
  $window_width = $(window).width();
  $window_height = $(window).height();
  change_sidebar();
  resize_category();
  hide_sidebar();
  $(window).resize(function(){
  	change_sidebar();
    resize_category();
    fixed_sidebar();
  })
function change_sidebar(){
  	$aside_height = $('aside').outerHeight();
  	if($window_width >= 1200 && $aside_height >= $window_height){
  		$('aside').css({
			position: 'absolute',
			width: '100%'
		})
  	}
}
function resize_category(){
  $window_width = $(window).width();
  if($window_width >= 768){  
    $aside_width = $('aside').outerWidth();
    $content_width = $window_width - ($aside_width + 20);
    $('.wrap_content').css({
      width: $content_width
    })
  }
}
function fixed_sidebar(){
  $window_width = $(window).width();
  if($window_width >= 1200){
    $('aside').css({
      display: 'block',
      marginLeft: 0
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
  function beautiful_slide($bootstrap_margin, $time){
    $window_width = $(window).width();
    $visible = $('aside').css('display');
    $content_width = $('.wrap_content').outerWidth();
    $aside_width = $('aside').outerWidth();
    if($window_width >= 768 && $window_width < 1200){
      if($visible == 'block'){
        //прячем
        $('aside').animate({
          marginLeft: -($aside_width + $bootstrap_margin),
        },$time, function(){
          $('aside').hide();
        })
        $('.wrap_content').animate({
          width: $content_width + $aside_width + $bootstrap_margin
        },$time)

      }
      else if($visible == 'none'){
        //показываем
        $aside_width = $('aside').outerWidth();
        $('aside').css({
          display: 'block',
          marginLeft: -($aside_width + $bootstrap_margin)
        })
        .animate({
          marginLeft: 0
        },$time)
        $('.wrap_content').animate({
          width: $content_width - $aside_width - $bootstrap_margin
        }, $time)
      }
    }
  }

  function hide_sidebar(){
    if($window_width < 992){
      $('aside').css({
        display: 'none'
      })
      $('.wrap_content').css({
        width: '100%'
      })
    }
  }
  
});
// Если сайдбар имеет атрибут - usual_slide, тогда к нему применяется только обычный слайд, СУЧКА - все вынесено в лэйаут