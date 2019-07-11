var commomModule = (function ($) {

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
		codeCountDown: codeCountDown
	}
})(jQuery);



(function($){
	$().ready(function(){
		var obj='';
		var objLeft=0;
		var $this='';
		$('.header ul.menu li').hover(function(){
			$(this).addClass('active');
			obj=$(this).attr('class');
			$this=$(this);
			$(this).addClass('active');
			objIndex=$(this).position().left;
			$('.header .nav ul li.move').stop(true,true).animate({'left':objIndex+'px'},300)
			if(obj!=undefined){
				$('#game_nav.'+obj).delay(300).queue(function(){
					$(this).show()
				})
			}
		},function(){
			$('#game_nav.'+obj).delay(300).queue(function(){
				$(this).hide()
			})
			$this.removeClass('active')
		});

		var hoverIndex=0;
		hoverIndex=$('.nav .on').index();
		hoverIndex<0?hoverIndex=1:hoverIndex;
		console.log(hoverIndex);
		$('.header .nav ul li.move').stop(true,true).animate({'left':(hoverIndex-1)*99+'px'},300)
		$('.nav').hover(function(){
			hoverIndex=$('.nav .on').index();
		},function(){
			$('.header .nav ul li.move').stop(true,true).animate({'left':'0px'},300)
		});

		//scroll
		$(window).scroll(function() {
			var top = $(window).scrollTop()+100;
			$(".floatDiv").stop(false,true).animate({ top: top + "px" },120,'swing');
			$(".cdfloater01holder").stop(false,true).animate({ top: top + "px" },120,'swing');

			if($(window).scrollTop()>100){

				$('.mainnav-wrap').css({
					'position':'fixed',
					'width':'100%',
					'left':'0',
					'top':'0',
					'background-color':'transparent',
					'box-shadow': '0 2px 5px 0 rgba(0,0,0,.7)'

				})
				$('.header').css({
					'padding-bottom':'42px'
				})
				$('.goTop').show()
			}else{
				$('.mainnav-wrap').css({
					'position':'relative',
					'width':'100%',
					'left':'0',
					'top':'0',
					'box-shadow': 'none',
					'background-color':'#020917',
				})
				$('.header').css({
					'padding-bottom':'0px'
				})
				$('.goTop').hide()
			}
		});

		$('.floatDiv .kf-close').on('click',function(){
			$('.floatDiv').slideUp();
		})
		$('.cdfloater01holder .close').on('click',function(){
			$('.cdfloater01holder').slideUp();
		})

	})
})(jQuery);

var colorBtn=true;
function colorChange(objCr){
	setInterval(function(){
		if(colorBtn){
			for(var i=0;i<objCr.length;i++){
				$(objCr[i].obj).css({
					'color':objCr[i].afterCr
				})

			}
			colorBtn=false;
		}else{
			/*$(objCr).css({
			 'color':sourceCr
			 })
			 colorBtn=true;*/
			for(var i=0;i<objCr.length;i++){
				$(objCr[i].obj).css({
					'color':objCr[i].sourcrCr
				})

			}
			colorBtn=true;
		}
		/*},500)*/
	},500)

}

colorChange([
	{obj:'#download1',sourcrCr:'#f4b300',afterCr:'#ffff00'},
	{obj:'#fishclinent',sourcrCr:'#f4b300',afterCr:'#ffff00'},
	{obj:'#tryPlay2',sourcrCr:'#ffff00',afterCr:'#f4b300'},
	{obj:'#events2',sourcrCr:'#ffff00',afterCr:'#f4b300'}]
);
































