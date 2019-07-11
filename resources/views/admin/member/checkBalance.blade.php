@extends('admin.layouts.basic')
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="{{ route('member.checkBalance', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.interface_balance')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showGameRecordInfo', ['id' => $id]) }}" aria-controls="home" role="tab" data-toggle="tab">{{__('words.history_win_lose')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showRechargeInfo', ['id' => $id]) }}" aria-controls="profile" role="tab" data-toggle="tab">{{__('words.historical_recharge')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showDrawingInfo', ['id' => $id]) }}" aria-controls="messages" role="tab" data-toggle="tab">{{__('words.historical_withdrawal')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showDividendInfo', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.historical_dividend')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showTransfer', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.platform_transfer_record')}}</a></li>
            </ul>
        </div>
        
        <section class="content" style="margin-top: 10px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{__('words.interface_balance')}}</h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid" style="margin-bottom: 10px;">

                    </div>

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 25%">{{__('words.interface_balance')}}</th>
                            <th>{{__('words.balance')}}</th>
                        </tr>
                        @foreach($data->apis as $item)
                            <tr>
                                <td>
                                    {{ $item->api->api_name }}
                                </td>
                                <td>
                                    <span class="balance">{{ $item->money }} RM</span>
                                    <a class="refresh" href="javascript:void(0)"  data-uri="{{ route('api.balance', ['id' => $id, 'api_name' => $item->api->api_name]) }}"></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>

        </section><!-- /.content -->
    </div>

    <script>
        $(function(){

            $('.refresh').on('click',function(){
                var _this=$(this);
                var pos = _this.prev('span');
//                 var money_span = _this.parent('p').next().find('span');
                _this.css({
                    'background':'url({{ asset("/web/images/h-u-loading2.gif") }}) no-repeat center center'
                })
                $.ajax({
                    type : 'GET',
                    url : _this.attr('data-uri'),
                    data : '',
                    contentType : "application/json; charset=utf-8",
                    success : function(data){

                        _this.css({
                            'background':'url({{ asset("/web/images/bg-ico.png") }}) no-repeat center center',
                            'background-position': '-80px -102px'
                        })
                        if (data.Code != 0)
                        {
                            alert(data.Message);
                            return ;
                        }
                        pos.html(data.Data+'元');
                    },
                    error: function (err, status) {
                        console.log(err)
                    }
                })
            })
        });
    </script>

@endsection