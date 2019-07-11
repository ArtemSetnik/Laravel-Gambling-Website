@extends('admin.layouts.basic')
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="{{ route('member.checkBalance', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">接口余额</a></li>
                <li role="presentation"><a href="{{ route('member.showGameRecordInfo', ['id' => $id]) }}" aria-controls="home" role="tab" data-toggle="tab">历史输赢</a></li>
                <li role="presentation"><a href="{{ route('member.showRechargeInfo', ['id' => $id]) }}" aria-controls="profile" role="tab" data-toggle="tab">历史充值</a></li>
                <li role="presentation"><a href="{{ route('member.showDrawingInfo', ['id' => $id]) }}" aria-controls="messages" role="tab" data-toggle="tab">历史提款</a></li>
                <li role="presentation"><a href="{{ route('member.showDividendInfo', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">历史红利</a></li>
                <li role="presentation"><a href="{{ route('member.showTransfer', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">平台转账记录</a></li>
            </ul>
        </div>

        <section class="content" style="margin-top: 10px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">接口余额</h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid" style="margin-bottom: 10px;">

                    </div>

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 25%">接口名称</th>
                            <th>余额</th>
                        </tr>
                        @foreach($data->apis as $item)
                            <tr>
                                <td>
                                    {{ $item->api->api_name }}
                                </td>
                                <td>
                                    <span class="balance">{{ $item->money }}</span>
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