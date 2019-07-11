@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-container">
            <div class="member-exchange-module-index">
                <div class="module-top" style="margin-bottom:0;">
                    <div class="list-head-container" style="width: 920px; height: 31px;">
                        <div class="list-head" style="width: 920px;">
                            <div class="col-xs-12" style="padding:0;">
                                <div class="col-xs-6">{{ __('ft.My_Room') }}</div>
                                <div class="col-xs-6">{{ __('ft.Balance') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module-main" style="height: 630px; overflow: auto;padding:0">
                    <div class="col-xs-12 exchange" style="padding:0">
                        <table class="table table-striped table-bordered">
                            <tbody>

                            <?php
                            $own_api_list = $_member->apis()->pluck('api_id')->toArray();
                            ?>

                            @foreach($api_mod as $item)
                                <?php
                                $mod = '';
                                if (in_array($item->id, $own_api_list))
                                    $mod = $_member->apis()->where('api_id', $item->id)->first();
                                ?>

                                <tr>
                                    <td class="col-xs-6">{{ $item->api_title }} {{ __('ft.厅') }}</td>
                                    <td class="col-xs-6 exchange-money"><span class="newpos"> @if($mod) {{ __('ft.Yuan') }} {{ $mod->money }}  @else N/A @endif</span><a
                                                href="javascript:;" class="refresh"
                                                data-uri="{{ route('member.api.check') }}?api_name={{ $item->api_name }}"></a></td>

                                </tr>

                                {{--<li class="hasnotinfo" data-id="{{ $item->id }}">--}}
                                    {{--<p class="name">{{ $item->api_title }} <span class="pos">@if($mod) {{ $mod->money }}元  @else N/A @endif</span><a href="javascript:;" class="refresh" data-uri="{{ route('member.api.check') }}?api_name={{ $item->api_name }}"></a></p>--}}
                                    {{--<em></em>--}}
                                {{--</li>--}}
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <script>
            $(function () {

                $('.turn-in-action').on('click', function () {
                    $('.turn-in').show();
                    $('.turn-out').hide();
                    $(this).addClass('active');
                    $('.turn-out-action').removeClass('active');
                });
                $('.turn-out-action').on('click', function () {
                    $('.turn-out').show();
                    $('.turn-in').hide();
                    $(this).addClass('active');
                    $('.turn-in-action').removeClass('active');
                });

                $('.refresh').on('click', function () {
                    var _this = $(this);
                    var pos = _this.parent('.exchange-money').find('span');
                    _this.css({
                        'background': 'url({{ asset("/web/images/h-u-loading2.gif") }}) no-repeat center center'
                    })
                    $.ajax({
                        type: 'GET',
                        url: _this.attr('data-uri'),
                        data: '',
                        contentType: "application/json; charset=utf-8",
                        success: function (data) {

                            _this.css({
                                'background': 'url({{ asset("/web/images/bg-ico.png") }}) no-repeat center center',
                                'background-position': '-80px -102px'
                            })
                            if (data.Code != 0) {
                                //alert(data.Message);
                                return;
                            }
                            pos.html('RM ' +data.Data );
                        },
                        error: function (err, status) {
                            //console.log(err)
                        }
                    })
                });
                $('.refresh').trigger('click')
                // $('.exchange-money .refresh').each(function(){
                // $(this).trigger('click');
                // });
            });
        </script>
    </div>
   <!--  <script>
        $(function () {
            $('.refresh').on('click', function () {
                var _this = $(this);
                var pos = _this.parent('p').find('span');
                var money_span = _this.parent('p').next().find('span');
                _this.css({
                    'background': 'url({{ asset("/web/images/h-u-loading2.gif") }}) no-repeat center center'
                })
                $.ajax({
                    type: 'GET',
                    url: _this.attr('data-uri'),
                    data: '',
                    contentType: "application/json; charset=utf-8",
                    success: function (data) {

                        _this.css({
                            'background': 'url({{ asset("/web/images/bg-ico.png") }}) no-repeat center center',
                            'background-position': '-80px -102px'
                        })
                        if (data.Code != 0) {
                            alert(data.Message);
                            return;
                        }
                        pos.html(data.Data + '元');
                        //money_span.html(money_span.attr('data-username'))
                        //console.log(data)
                    },
                    error: function (err, status) {
                        //console.log(err)
                    }
                })
            });

            //选择账户
            $('.indoor_toplist').on('click', 'li', function () {
                var _index = $(this).index();
                //隐藏的input 值
                $('.indoor_toplist li').removeClass('on');
                $(this).addClass('on');
                $('input', $(this).parent()).val($(this).attr('data-type'));
            })

            //选择游戏平台
            $('.game_platform').on('click', 'li.hasinfo', function () {
                $('.game_platform li').removeClass('on');
                $(this).addClass('on');
                $('.dividend_bonus').show();

                //隐藏的input 值
                $('input', $(this).parent()).val($(this).attr('data-id'));
            })

            $('.game_platform').on('click', 'li.hasnotinfo', function () {
                $('.game_platform li').removeClass('on');
                $(this).addClass('on');
                $('.dividend_bonus').hide();

                //隐藏的input 值
                $('input', $(this).parent()).val($(this).attr('data-id'));
            })

            //转入游戏平台按钮 改变隐藏的input 值
            $('.line_form .account_save,.line_form .indoor_main').on('click', function () {
                var btn = $(this)
                $('input', btn.parent()).val(btn.attr('data-type'));

                btn.attr('disabled', true);

                var go = true;
                var form = $(this).parents('form');

                var url = form.attr('action');
                var method = form.attr('method');

                var rest_method = form.find("input[name='_method']");
                var method_s = rest_method.length > 0 ? rest_method.val() : method;
                if (go == true) {
                    var detailLoad = layer.load(2, {
                        shade: [0.2, '#ccc'], //遮罩层背景色、透明度,
                        //shade:false
                    });

                    $.ajax({
                        type: method_s,
                        url: url,
                        data: form.serialize(),
                        dataType: "json",
                        success: function (data) {
                            layer.close(detailLoad);
                            btn.attr('disabled', false);

                            var html = '';
                            var obj = JSON.parse(data.status.msg);

                            for (var p in obj) {
                                if (typeof (obj[p]) == 'string') {
                                    html += '<p><b>' + obj[p] + '</b></p>';
                                } else if (obj[p] instanceof Array) {
                                    for (var i = 0; i < obj[p].length; i++) {
                                        html += '<p><b>' + obj[p][i] + '</b></p>';
                                    }

                                }
                            }
                            //
                            layer.confirm(html, {
                                btn: ['确定'] //按钮
                            });
                            if (data.url)
                                location.href = data.url;
                            //else
                            //    layer.confirm(html, {
                            //        btn: ['确定'] //按钮
                            //    });

                        }
                    });
                }
            })


        })
    </script> -->
@endsection
