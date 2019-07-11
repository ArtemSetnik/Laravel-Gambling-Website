<div class="m_header">
    <div class="m_container">
        <div class="pullLeft">
            <img class="logo" src="{{ $_system_config->m_site_logo }}" alt="">
        </div>
        <div class="pullRight m_header-info">
            <a class="flag" href="{{URL('m/lang/zh_cn')}}" title="Chinese">
                <img src="{{ asset('/web/images/china.gif') }}" style="display: inline">
            </a>
            <span>&nbsp;</span>
            <a class="flag" href="{{URL('m/lang/en')}}" title="English">
                <img src="{{ asset('/web/images/usa.gif') }}" style="display: inline">
            </a>
            <span>&nbsp;</span>
            <a class="flag" href="{{URL('m/lang/malaya')}}" title="Malaya">
                <img src="{{ asset('/web/images/malay.png') }}" style="display: inline;height: 14px;width: 25px;">
            </a>
            @if (Auth::guard('member')->guest())
            @else
                <div>{{ $_member->name }}
                <strong>RM&nbsp;</strong><strong class="money">{{ $_member->money }}</strong></div>
            @endif
        </div>
    </div>
</div>
<script>
    @if (!Auth::guard('member')->guest())
    $(function () {
        $.ajax({
            type:'post',
            url : "{{route('member.api.wallet_balance')}}",
            dataType : 'json',
            success : function (data) {
                //console.log(data);
                if(data.statusCode == '01'){
                    var all = Number($('.money').text()) + Number(data.data);
					
                    $('.money').text('');
                    $('.money').text(parseFloat(all.toFixed(2)));
                }
            }
        })
    })
    @endif
</script>