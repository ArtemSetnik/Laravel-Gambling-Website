/**
 * Created by dell on 2017/11/23.
 */
//jQuery组件
(function ($) {

  //模态框
  $.fn.yk_modal = function (options) {
    var _this = this, $this = $(this);
    console.log(this);
    var defaults = {
      show: true,
      animate: 'slide',//slide,fade
      clickClose: true,
      width:'600px',
      height:'400px',
      title:'title',
      content:'content',
      openCallback: function () {
      },
      closeCallback: function () {
      },
      btn_sure_callback: function () {

      }
    };
    var opts = $.extend({}, defaults, options);
    var $container=$this.find('.yk_modal-container');
    var $hd=$this.find('.yk_modal-hd');
    var $content=$this.find('.yk_modal-content');
    var $ft=$this.find('.yk_modal-ft');
    $this.show = function () {
      if (opts.animate == 'slide'){
        $this.slideDown();
      }else{
        $this.fadeIn();
      }
      $container.css({width:opts.width,height:opts.height});
      $content.css({height:parseInt(opts.height)-110+'px'});
      $hd.html(opts.title);
      $content.html(opts.content);
      $('.yk_backdrop').height($(document).height()).show();
      $('body').css({overflow: 'hidden'});
      opts.openCallback($this);
    };
    $this.close = function () {
      $this.hide();
      $('.yk_backdrop').hide();
      $('body').css({overflow: 'visible'});
      opts.closeCallback();
    };

    if (opts.show == true) {
      $this.show();
    } else {
      $this.close();
    }
    if (opts.clickClose) {
      this.on('click', function (e) {
        $this.close();
        e.stopPropagation();
      });
    }
    //阻止冒泡
    $this.find('.yk_modal-content').unbind('click').on('click', function (e) {
      //e.stopPropagation();
    });
    //为内部关闭元素绑定关闭事件
    $this.find('[data-close="close"]').unbind('click').on('click', function () {
      $this.close();
      return false;
    });
    $this.find('.yk_btn-sure').unbind('click').on('click',function () {
      $this.close();
      opts.btn_sure_callback();
      return false;
    });
    return this;
  };

})(jQuery);