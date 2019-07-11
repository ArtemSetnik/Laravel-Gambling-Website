<div class="m_header">
    <div class="m_container">
        <div class="pullLeft">
            <img class="logo" src="{{ $_system_config->m_site_logo }}" alt="">
        </div>
        <div class="pullRight m_header-info">
            @if (Auth::guard('member')->guest())
            @else
                <div>{{ $_member->name }}</div>
                <div><strong class="money">{{ $_member->money }}</strong>&nbsp;RMB</div>
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
                    $('.money').text(parseInt(all.toFixed(2)));
                }
            }
        })
    })
    @endif
</script>