@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-xs-4">
            <!-- small box -->
            <div class="small-box bg-red text-center">
                <div class="inner">
                    <h4>会员监控</h4>

                    <p>监控同IP下登录的会员</p>
                </div>
                <div class="icon">
                    {{--<i class="ion ion-pie-graph"></i>--}}
                </div>
                <a href="{{ route('monitor.index') }}?type=1" class="small-box-footer">查看</a>
            </div>
        </div>

        <div class="col-lg-4 col-xs-4">
            <!-- small box -->
            <div class="small-box bg-red text-center">
                <div class="inner">
                    <h4>大额监控</h4>

                    <p>监控大额转入/转出行为的会员</p>
                </div>
                <div class="icon">
                    {{--<i class="ion ion-pie-graph"></i>--}}
                </div>
                <a href="{{ route('monitor.index') }}?type=2" class="small-box-footer">查看</a>
            </div>
        </div>

        <div class="col-lg-4 col-xs-4">
            <!-- small box -->
            <div class="small-box bg-red text-center">
                <div class="inner">
                    <h4>套利监控</h4>

                    <p>监控频繁转出行为的会员</p>
                </div>
                <div class="icon">
                    {{--<i class="ion ion-pie-graph"></i>--}}
                </div>
                <a href="{{ route('monitor.index') }}?type=3" class="small-box-footer">查看</a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <style>
        .apiList{
            font-size: 18px;
            font-weight: bold;
            padding: 0 15px;
        }
        .apiList span{
            color: red;
            font-weight: normal;
        }
        .apiList img{
            margin:0 auto 15px;
            width: 50%;
            display: block;
        }
        .content-wrapper {
            background-color: #ffffff;
        }
        .apiList>div{
            border-right: 1px solid #666
        }
        .apiList .pull-left {
            padding-left: 10px;
        }
        .apiList .pull-right {
            padding-right: 5px;
        }
    </style>
    <div class="row apiList clearfix">
        <div class="col-xs-2">
            <div class="text-center">
                <button class="btn btn-primary refresh-all">全部刷新</button>
            </div>
        </div>
        @foreach($apis as $item)
            <div class="col-xs-2">
                {{-- <img src="{{ asset('/backstage/images') }}/{{ in_array($item->api_name, ['AB','ALLBET'])?'ALLBET': $item->api_name }}.jpg" alt=""> --}}
                <div class="text-center">
                    <label class="pull-left">{{ $item->api_name }}</label>
                    <div class="pull-right">
                        <span>{{ $item->api_money }}</span>
                        <a href="#" data-uri="{{ route('api.credit') }}?api_name={{ $item->api_name }}" class="refresh" style="vertical-align: top"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ count($_online_member_array) }}</h3>

                        <p>在线会员</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-bag"></i>--}}
                    </div>
                    <a href="{{ route('member.index') }}?on_line=1" class="small-box-footer">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $today_recharge_count }}</h3>

                        <p>今日充值笔数</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-person-add"></i>--}}
                    </div>
                    <a href="{{ route('recharge.index') }}?status=1" class="small-box-footer">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $today_drawing_count }}</h3>

                        <p>今日出款笔数</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-stats-bars"></i>--}}
                    </div>
                    <a href="{{ route('drawing.index') }}?status=1" class="small-box-footer">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ $today_dividend_count }}</h3>

                        <p>今日送出红利笔数</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-pie-graph"></i>--}}
                    </div>
                    <a href="{{ route('dividend.index') }}" class="small-box-footer">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $today_register_count }}</h3>

                        <p>今日注册人数</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-bag"></i>--}}
                    </div>
                    <a href="javascript:;" class="small-box-footer">平台总注册（{{ $total_register_count }}）</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $today_recharge_sum }}</h3>

                        <p>今日充值金额</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-person-add"></i>--}}
                    </div>
                    <a href="javascript:;" class="small-box-footer">平台总充值（{{ $total_recharge_sum }}）</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $today_drawing_sum }}</h3>

                        <p>今日出款金额</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-stats-bars"></i>--}}
                    </div>
                    <a href="javascript:;" class="small-box-footer">平台总出款（{{ $total_drawing_sum }}） </a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ $today_dividend_sum }}</h3>

                        <p>今日送出红利金额</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-pie-graph"></i>--}}
                    </div>
                    <a href="javascript:;" class="small-box-footer">平台总红利 （{{ $total_dividend_sum }}）</a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">

            <div class="col-lg-4 col-xs-4" id="mapuser" style="width: 50%;height: 400px;">

            </div>

            <div class="col-lg-4 col-xs-4" id="moneyoutin" style="width: 50%;height: 400px"></div>

        </div>

        <div class="row">
            <div class="col-lg-12 col-xs-12" id="moneyInputTotal" style="width: 100%;height: 400px">

                <a href="javascript:void(0)" id="total_btn" class="btn btn-primary">获取投注总量</a>

            </div>
        </div>
    </section>
@endsection
@section('after.js')
    <script src="{{ asset('/backstage/js/style.js') }}"></script>
    <script src="{{ asset('/backstage/js/echarts.min.js') }}"></script>
    <script src="{{ asset('/backstage/js/macarons.js') }}"></script>

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
            });
            $('.refresh-all').on('click',function () {
                $('.refresh').trigger('click');
            })



            //注册会员统计
            var userMap = echarts.init(document.querySelector("#mapuser"),'macarons');
            var mapUserOption = {
                title: {
                    text: '注册会员统计',
                    subtext: '刷新时间：'+ '{{ $chartsData["time"]  }}',
                    // right:'0',
                    // top:'5%',
                    // textAlign:'right'
                },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data: ['注册人数']
                },
                toolbox: {
                    show: true,
                    feature: {
                        magicType: {
                            show: true,
                            type: ['line', 'bar']
                        },
                        restore: {
                            show: true,
                        },
                        saveAsImage: {
                            show: true
                        }
                    }
                },
                xAxis: {
                    type: 'category',
                    boundaryGap: false,
                    data: ['本月', '本周', '今天']
                },
                yAxis: {
                    type: 'value',
                    axisLabel: {
                        formatter: '{value} 人'
                    }
                },
                series: [{
                    name: '注册人数',
                    type: 'line',
                    data: [{{ $chartsData['month_num'] }},{{ $chartsData['week_num'] }}, {{ $chartsData['today_num'] }}],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最大值'
                        }, {
                            type: 'min',
                            name: '最小值'
                        }]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                }]
            };
            userMap.setOption(mapUserOption);

            //资金存取数据汇总
            var moneyMap = echarts.init(document.querySelector('#moneyoutin'),'macarons');
            var moneyMapOption = {
                title: {
                    text: '资金存取数据汇总',
                    subtext: '刷新时间：'+ '{{ $chartsData["time"]  }}',
                    //right:'0',
                    // top:'5%',
                    // textAlign:'right',
                    // padding:0
                },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data: ['充值', '出款', '红利']
                },
                toolbox: {
                    show: true,
                    feature: {
                        dataView: {
                            show: true,
                            readOnly: false
                        },
                        magicType: {
                            show: true,
                            type: ['line', 'bar']
                        },
                        restore: {
                            show: true
                        },
                        saveAsImage: {
                            show: true
                        }
                    }
                },
                calculable: true,
                xAxis: [{
                    type: 'category',
                    data: ['本月', '本周', '今日']
                }],
                yAxis: [{
                    type: 'value',
                    axisLabel: {
                        formatter: '{value} 元'
                    }
                }],
                series: [{
                    name: '充值',
                    type: 'bar',
                    data: [ {{ $chartsData['month_recharge'] }}, {{ $chartsData['week_recharge'] }}, {{ $chartsData['today_recharge'] }}],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最大值'
                        }, {
                            type: 'min',
                            name: '最小值'
                        }]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                }, {
                    name: '出款',
                    type: 'bar',
                    data: [{{ $chartsData['month_drawing'] }}, {{ $chartsData['week_drawing'] }}, {{ $chartsData['today_drawing'] }}],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最大值'
                        }, {
                            type: 'min',
                            name: '最小值'
                        }]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                }, {
                    name: '红利',
                    type: 'bar',
                    data: [{{ $chartsData['month_dividend'] }}, {{ $chartsData['week_dividend'] }}, {{ $chartsData['today_dividend'] }}],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最大值'
                        }, {
                            type: 'min',
                            name: '最小值'
                        }]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                }]
            };
            moneyMap.setOption(moneyMapOption);

            var moneyInputTotalOption = {
                title: {
                    text: '投注总量',
                    subtext: '刷新时间：'+ '{{ $chartsData["time"]  }}',
                    // right:'0',
                    // top:'5%',
                    // textAlign:'right'
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'cross',
                        label: {
                            backgroundColor: '#6a7985'
                        }
                    }
                },
                legend:{
                    data:[]
                },
                toolbox: {
                    show: true,
                    feature: {
                        dataView: {
                            show: true,
                            readOnly: false
                        },
                        magicType: {
                            show: true,
                            type: ['line', 'bar']
                        },
                        restore: {
                            show: true
                        },
                        saveAsImage: {
                            show: true
                        }
                    }
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis: [{
                    type: 'category',
                    boundaryGap: false,
                    data: ['本月', '本周', '今天']
                }],
                yAxis: [{
                    type: 'value'
                }],
                series:[
                ]
            };

            $("#total_btn").on('click',function(){
                $.ajax({
                    type : 'GET',
                    url : '{{ route('admin.charts_data') }}',
                    contentType : "application/json; charset=utf-8",
                    success:function(datas){
                        var game_list = distinct(getDisplayDataField(datas));
                        moneyInputTotalOption.legend.data = game_list;
                        //moneyInputTotalOption.series = new Array();
                        for(data in game_list){
                            moneyInputTotalOption.series.push(getDisplayObj(data,game_list,datas));
                        }
                        var moneyInputTotalMap = echarts.init(document.querySelector('#moneyInputTotal'),'macarons');
                        console.log(moneyInputTotalOption);
                        moneyInputTotalMap.setOption(moneyInputTotalOption);
                    },error:function(err){
                        console.log(error);
                    }
                });
            });

            function getDataName(data){
                return data.split('_')[1];
            }

            function getDisplayDataField(datas){
                return Object.getOwnPropertyNames(datas).map(getDataName);
            }

            function distinct(data){
                return Array.prototype.filter.call(data,function(element,index,self){
                    return self.indexOf(element) === index;
                });
            }

            function getDisplayObj(data,datas,ajax_data){
                return {
                    name:datas[data],
                    type:'line',
                    stack: '总量',
                    areaStyle:{
                        normal:{}
                    },
                    data: [ajax_data['month_'+datas[data]], ajax_data['week_'+datas[data]], ajax_data['today_'+datas[data]]]
                };
            }
        });


    </script>
@endsection