/**
 * Created by dell on 2017/4/7.
 */
var commomModule = (function ($) {

  var compareScroll = function (data, scroll) {
    var cod;
    if (data.length >= 2) {
      if (scroll < data[0]) {
        cod = 0;
      } else if (scroll >= data[data.length - 1]) {
        cod = data.length - 1;
      }
      $.each(data, function (i) {
        if (scroll >= this && scroll < data[i + 1]) {
          cod = i;
        }
      })
    } else {
      cod = 0;
    }
    return cod;
  };

  var flexSliderMove = function (selector) {
    var slider = $(selector).data('flexslider');
    var count = slider.move ? parseInt(slider.count / slider.move) + 1 : slider.count;
    $(selector).on('click', '.moveLeft', function () {
      var index = slider.currentSlide;
      slider.flexAnimate(index == 0 ? count - 1 : index - 1);
    }).on('click', '.moveRight', function () {
      var index = slider.currentSlide;
      slider.flexAnimate(index == count - 1 ? 0 : index + 1);
    });
    return slider;
  };

  //验证码倒计时
  var codeCountDown = function ($me, time) {
    if (!$me.hasClass('active')) {
      $me.time = time || 60;
      $me.addClass('active');
      $me.html('重新获取(' + $me.time + '秒)');
      $me.timer = setInterval(function () {
        $me.time--;
        $me.html('重新获取(' + $me.time + '秒)');
        if ($me.time == 0) {
          clearInterval($me.timer);
          $me.html('重新发送验证码').removeClass('active');
        }
      }, 1000);
    } else {
      return false;
    }
  };

  return {
    // scrollbarWidth: scrollbarWidth,$(this),60
    compareScroll: compareScroll,
    flexSliderMove: flexSliderMove,
    codeCountDown: codeCountDown
  }
})(jQuery);

//jQuery组件
(function ($) {

  //模态框
  $.fn.modal = function (options) {
    var _this = this, $this = $(this);
    var defaults = {
      show: true,
      animate: 'slide',//slide,fade
      clickClose: true,
      openCallback: function () {
      },
      closeCallback: function () {
      }
    };
    var opts = $.extend({}, defaults, options);
    $this.show = function () {
      if (opts.animate == 'slide')
        $this.slideDown();
      $('.backdrop').height($(document).height()).show();
      $('body').css({overflow: 'hidden', paddingRight: commomModule.scrollbarWidth + 'px'});
      opts.openCallback($this);
    };
    $this.close = function () {
      $this.hide();
      $('.backdrop').hide();
      $('body').css({overflow: 'visible', paddingRight: '0'});
      opts.closeCallback();
    };

    if (opts.show == true) {
      $this.show();
    } else {
      $this.close();
    }
    if (opts.clickClose) {
      this.unbind('click').on('click', function (e) {
        $this.close();
        e.stopPropagation();
      });
    }
    //阻止冒泡
    $this.find('.modal-content').unbind('click').on('click', function (e) {
      e.stopPropagation();
    });
    //为内部关闭元素绑定关闭事件
    $this.find('.close').unbind('click').on('click', function () {
      $this.close();
      return false;
    });
    $this.find('.set_now').unbind('click').on('click', function () {  //
      $('.loading_shadow').show();
        $('.user_right').load('safe_manage.html',function(responseTxt,statusTxt,xhr){
          if(statusTxt=="success"){
            $('.loading_shadow').hide();
            $('.user_left li').removeClass('active');
            $('.user_left li').eq(1).addClass('active');
          }
            if(statusTxt=="error"){
              alert("Error: "+xhr.status+": "+xhr.statusText);
              $('.loading_shadow').hide();
            }
              
        })

      $this.close();
      return false;
    });

    //打开填写获取验证码窗口
    $this.find('.emailsub').unbind('click').on('click', function () {  //
      $this.close();
      $('.ecodemodify-modal').modal({
        openCallback: function () {
          $('.aside').css({right: commomModule.scrollbarWidth + 10 + 'px'});
          $('.header').css({width: window.innerWidth - commomModule.scrollbarWidth + 'px'});
        },
        closeCallback: function () {
          $('.aside').css({right: '10px'});
          $('.header').css({width: '100%'});
        }
      });
    });
    

   //验证码倒计时
    $this.find('.send').unbind('click').on('click', function () {  //
      $(this).css({
        'background':'#ececec',
        'color':'#b2b2b2'
      });
      $(this).attr('disabled',true)
      var _this=$(this);
      var timeNum=59;
      var ecodetimer=setInterval(function(){
        if(timeNum>=0){
          _this.text('('+(timeNum--)+')秒后重新获取');
          
        }else{
          _this.text('发送验证码');
          clearInterval(ecodetimer);
          _this.attr('disabled',false);
          _this.css({
            'background':'#67db93',
            'color':'#fff'
          });
        }
        
      },1000);
      

    });
    return this;
  };

})(jQuery);

(function ($) {
  $(function () {
    //获取浏览器滚动条宽度
    commomModule.scrollbarWidth = function () {
      var w1, w2,
        div = $("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'>" +
          "<div style='height:100px;width:auto;'></div>" +
          "</div>"),
        innerDiv = div.children()[0];

      $("body").append(div);
      w1 = innerDiv.offsetWidth;
      div.css("overflow", "scroll");

      w2 = innerDiv.offsetWidth;

      if (w1 === w2) {
        w2 = div[0].clientWidth;
      }

      div.remove();

      return (w1 - w2);
    }();

  })
})(jQuery);