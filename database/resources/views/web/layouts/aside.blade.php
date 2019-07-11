<!--<div id="fixd-left" class="fixscroll">
    <a href="javascript:;">
        <img src="{{ asset('/web/images/left_01.png') }}">
        <img class="fix_qrcode" src="{{ $_system_config->wap_qrcode }}" alt="">
    </a>
    <a href="javascript:;">
        <img src="{{ asset('/web/images/left_02.png') }}">
        <img class="fix_qrcode" src="{{ $_system_config->wap_qrcode }}" alt="">
    </a>
    <a class="ad-close" href="javascript:;"><img src="{{ asset('/web/images/close.png') }}"></a>
</div>
<div id="fixd-right" class="fixscroll">
    <a href="javascript:;" onclick="javascript:window.open('{{ $_system_config->service_link }}','','width=1024,height=768')">
        <img src="{{ asset('/web/images/right_01.png') }}">
    </a>
    <a href="javascript:;">
        <img src="{{ asset('/web/images/right_02.png') }}">
        <span class="fixscroll_qq">{{ $_system_config->qq }}</span>
    </a>
    <a href="javascript:;">
        <img src="{{ asset('/web/images/right_03.png') }}">
        <span class="fixscroll_qq" style="top: 23px;">{{ $_system_config->agent_qq }}</span>
    </a>
    <a href="javascript:;">
        <img src="{{ asset('/web/images/right_04.png') }}">
        <img class="fix_qrcode" style="left: 29px;bottom: 25px;width: 75px;height: 75px;" src="{{ $_system_config->wx_pic }}">
    </a>
    <a class="ad-close" href="javascript:;">
        <img src="{{ asset('/web/images/close.png') }}">
    </a>
</div>-->


<div class="hb">
    <a href="{{ route('web.red') }}" class="floathb" target="_blank"></a>
    <span class="close-hb">关闭红包</span>
</div>



<script>
    $(function () {
        $('.fixscroll').on('click', '.ad-close', function () {
            $(this).parent().hide();
        });
        $(".fixscroll").floatadv();
        $('.hb').on('click', '.close-hb', function () {
            $(this).parent().hide();
        });
    });
    jQuery.fn.floatadv = function (loaded) {
        var obj = this;
        body_height = parseInt($(window).height());
        block_height = parseInt(obj.height());

        top_position = parseInt((body_height / 2) - (block_height / 2) + $(window).scrollTop());

        if (body_height < block_height) {
            top_position = 0 + $(window).scrollTop();
        }
        ;

        if (!loaded) {
            obj.css({'position': 'absolute'});
            obj.css({'top': top_position});
            $(window).bind('resize', function () {
                obj.floatadv(!loaded);
            });
            $(window).bind('scroll', function () {
                obj.floatadv(!loaded);
            });
        } else {
            obj.stop();
            obj.css({'position': 'absolute'});
            obj.animate({'top': top_position}, 400, 'linear');
        }
    }
</script>