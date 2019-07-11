@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-container">
            <div class="top-filter" style="margin-top:5px">
                <div class="col-xs-4" style="padding-left:0;padding-right:0">
                    <div class="form-group">
                        <label class="col-xs-4" style="text-align:center;padding-top:7px;padding-right:0">{{ __('ft.Query_type') }}</label>
                        <div class="col-xs-7">
                            <select onchange="deposit(0,0)" class="form-control report_option">
                                <option value="0" @if($type == 0) selected @endif>{{ __('ft.Deposit_History') }}</option>
                                <option value="1" @if($type == 1) selected @endif>{{ __('ft.Withdraw_History') }}</option>
                                <option value="2" @if($type == 2) selected @endif>{{ __('ft.Credit_Convert') }}</option>
                                <option value="3" @if($type == 3) selected @endif>{{ __('ft.Game_History') }}</option>
                                <option value="4" @if($type == 4) selected @endif>{{ __('ft.Bonus_History') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4" style="padding-left:0;padding-right:0">
                    <div class="form-group">
                        <label class="col-xs-4" style="text-align:center;padding-top:7px;padding-right:0">{{ __('ft.Start_Time') }}</label>
                        <div class="col-xs-7">
                            <input type="text" id="startTime" onfocus="var endTime=$dp.$(&#39;endTime&#39;);WdatePicker({onpicked:function(){endTime.focus();},maxDate:&#39;2020-09-22&#39;})" class="form-control" placeholder="{{ __('ft.Click_to_select_date') }}">
                        </div>
                    </div>
                </div>
                <div class="col-xs-4" style="padding-left:0;padding-right:0">
                    <div class="form-group">
                        <label class="col-xs-4" style="text-align:center;padding-top:7px;padding-right:0">{{ __('ft.End_Time') }}</label>
                        <div class="col-xs-7">
                            <input type="text" id="endTime" onfocus="WdatePicker({onpicked:function(){deposit(this,1);},minDate:&#39;#F{$dp.$D(\&#39;startTime\&#39;,{M:0,d:1});}&#39;,maxDate:&#39;#F{$dp.$D(\&#39;startTime\&#39;,{M:0,d:6});}&#39;})" style="margin-right:0" class="form-control" placeholder="{{ __('ft.Click_to_select_date') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="module-main" style="height: 630px; overflow: auto">
                <div class="table-top">
                    <table class="table table-striped table-bordered">
                        <thead><th>{{ __('ft.platform') }}</th><th>{{ __('ft.Bureau_number') }}</th><th>{{ __('ft.Betting') }}</th><th>{{ __('ft.Win_or_lose') }}</th><th>{{ __('ft.time') }}</th></thead>
                        <tbody><tr><td>{{ __('ft.sum') }}</td><td></td><td>0元</td><td>undefined元</td><td></td></tr></tbody>
                    </table>
                    <div class="tcdPageCode tcdPageCode0" style="display: none;"></div>
                    <div class="tcdPageCode tcdPageCode1" style="display: none;"></div>
                    <div class="tcdPageCode tcdPageCode2" style="display: none;"></div>
                    <div class="tcdPageCode tcdPageCode3" style="display: block;"><span class="disabled">{{ __('ft.Previous_page') }}</span><span class="disabled">{{ __('ft.Next_page') }}</span></div>

                </div>
            </div>
            <div class="loading_shadow" style="display: none;">
                <div class="shadow"></div>
                <img src="{{ asset('/web/images/loading-win8.gif') }}" class="loading_win">
            </div>
        </div>

        <script type="text/javascript">

            function deposit(obj,type){
                //obj  选择时间控件的时候 obj传递了他本身 this
                //type=0  左侧select选择模式  type=1 右侧时间选择
                //左侧select切换的时候，右侧有默认时间，则请求的时候要带上；
                var optionIndex= $('option:selected', '.report_option').val(); //选中的option的index
                var theadArr=[['存款时间','存款金额','状态'],['提款时间','提款金额','状态'],['转账时间','金额','转出/转入账户','状态'],['平台','局号','投注','输赢','时间'],['红利类型','金额',  '发放时间']];
                //请求的地址1111 以数组存放  一一对应

                var defaultStartTime=$('#startTime').val();  //开始时间内
                var defaultEndTime=$('#endTime').val();   //结束时间

                //存款记录
                //提款记录
                //额度转换
                //游戏记录
                var getUrl=["http://mb7.boya558.com/member/rechargeList","http://mb7.boya558.com/member/drawingList","http://mb7.boya558.com/member/transferList","http://mb7.boya558.com/member/gameRecordList","http://mb7.boya558.com/member/dividendList"];
                var initPage=false;  //初始状态
                var tbodyHtml='';  //tbody tag
                var theadHtml='';  //thead tag




                $('.loading_shadow').show();


                var getList = function (filter) {
                    console.log(optionIndex);

                    $.ajax({
                        type : 'GET',
                        url : getUrl[optionIndex]+"?page="+filter.page+"&start_at="+defaultStartTime+"&end_at="+defaultEndTime,
                        success : function(data){
                            $('.loading_shadow').hide();
                            var data=data;
                            var totalPage=Math.ceil(data.total/data.per_page);
                            var currentPage=data.current_page;

                            tbodyHtml='';

                            if(optionIndex==0){  //存款记录
                                var m =0;
                                for(var i=0;i<data.data.length;i++){
                                    tbodyHtml+='<tr>';
                                    tbodyHtml+='   <td>'+data.data[i].hk_at+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].money+'</td>';
                                    var status = data.data[i].status;
                                    if (status == 1)
                                        status = '<span class="status_confirming">{{ __("ft.To_Be_Confirmed") }}</span>';
                                    else if(status == 2)
                                        status = '<span class="status_success">{{ __("ft.Recharge_Successful") }}</span>';
                                    else if(status ==3)
                                        status = '<span class="status_error">{{ __("ft.Recharge_Failed") }}</span>'
                                    tbodyHtml+='   <td>'+status+'</td>';
                                    tbodyHtml+='</tr>';
                                    m+=Number(data.data[i].money);
                                }
                                tbodyHtml+='<tr>';
                                tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                                tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                                tbodyHtml+='<td></td>';
                                tbodyHtml+='</tr>';

                            }else if(optionIndex==1){  //提款记录
                                var m =0;
                                for(var i=0;i<data.data.length;i++){
                                    tbodyHtml+='<tr>';
                                    tbodyHtml+='   <td>'+data.data[i].created_at+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].money+'</td>';
                                    var status = data.data[i].status;
                                    if (status == 1)
                                        status = '<span class="status_confirming">{{ __("ft.To_Be_Confirmed") }}</span>';
                                    else if(status == 2)
                                        status = '<span class="status_success">提款成功</span>';
                                    else if(status ==3)
                                        status = '<span class="status_error">提款失败</span>'
                                    tbodyHtml+='   <td>'+status+'</td>';
                                    tbodyHtml+='</tr>';
                                    m+=Number(data.data[i].money);
                                }
                                tbodyHtml+='<tr>';
                                tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                                tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                                tbodyHtml+='<td></td>';
                                tbodyHtml+='</tr>';

                            }else if(optionIndex==2){  //额度转换
                                var m =0;
                                for(var i=0;i<data.data.length;i++){
                                    tbodyHtml+='<tr>';
                                    tbodyHtml+='   <td>'+data.data[i].created_at+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].money+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].transfer_out_account+'/'+data.data[i].transfer_in_account+'</td>';
                                    status = '成功'
                                    tbodyHtml+='   <td>'+status+'</td>';
                                    tbodyHtml+='</tr>';
                                    m+=Number(data.data[i].money);
                                }
                                tbodyHtml+='<tr>';
                                tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                                tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                                tbodyHtml+='<td></td>';
                                tbodyHtml+='<td></td>';
                                tbodyHtml+='</tr>';
                            }else if(optionIndex==3){  //游戏记录
                                var m = n =0;
                                for(var i=0;i<data.data.length;i++){
                                    var type = '';
                                    var api_t = data.data[i].api_type;
                                    if (api_t == 3)
                                        type = 'AG';
                                    else if(api_t == 4)
                                        type = 'BBIN';
                                    else if(api_t == 5)
                                        type = 'AB';
                                    else if(api_t == 6)
                                        type = 'PT';
                                    else if(api_t == 7)
                                        type = 'MG';
                                    else if(api_t == 8)
                                        type = 'TTG';
                                    else if(api_t == 9)
                                        type = 'IBC';
                                    else if(api_t == 10)
                                        type = 'YC';
                                    else if(api_t == 11)
                                        type = 'CG';
                                    else if(api_t == 12)
                                        type = 'SA';
                                    else if(api_t == 13)
                                        type = 'BG';
                                    else if(api_t == 14)
                                        type = 'DT';
                                    else if(api_t == 19)
                                        type = 'OG';
                                    else if(api_t == 21)
                                        type = 'EG';
                                    else if(api_t == 29)
                                        type = 'VR';
                                    else if(api_t == 30)
                                        type = 'CQ9';



                                    var sy = data.data[i].netAmount - data.data[i].betAmount;
                                    sy = sy.toFixed(2);
                                    tbodyHtml+='<tr>';
                                    tbodyHtml+='   <td>'+type+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].billNo+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].betAmount+'</td>';
                                    tbodyHtml+='   <td>'+sy+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].betTime+'</td>';
                                    tbodyHtml+='</tr>';
                                    m+=Number(data.data[i].betAmount);
                                    n+=Number(sy);
                                    var y = n.toFixed(2);
                                }
                                tbodyHtml+='<tr>';
                                tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                                tbodyHtml+='<td></td>';
                                tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                                tbodyHtml+='<td>'+y+' {{ __("ft.Yuan") }}</td>';
                                tbodyHtml+='<td></td>';
                                tbodyHtml+='</tr>';
                            }else if(optionIndex==4){  //红利记录
                                var m = n =0;
                                for(var i=0;i<data.data.length;i++){
                                    var type = '';
                                    var api_t = data.data[i].type;
                                    if (api_t == 1)
                                        type = '充值红利';
                                    else if(api_t == 2)
                                        type = '平台红利';
                                    else if(api_t == 3)
                                        type = '返水';

                                    tbodyHtml+='<tr>';
                                    tbodyHtml+='   <td>'+type+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].money+'</td>';
                                    tbodyHtml+='   <td>'+data.data[i].created_at+'</td>';
                                    tbodyHtml+='</tr>';
                                    m+=Number(data.data[i].money);
                                }
                                tbodyHtml+='<tr>';
                                tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                                tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                                tbodyHtml+='<td></td>';
                                tbodyHtml+='</tr>';
                            }

                            $('tbody').html(tbodyHtml);

                            $('.tcdPageCode').hide().eq(optionIndex).show();
                            if (initPage == false) {

                                //表头
                                for(var m=0;m<theadArr[optionIndex].length;m++){
                                    theadHtml+='<th>'+theadArr[optionIndex][m]+'</th>';
                                }
                                $('thead').html(theadHtml);

                                $(".tcdPageCode"+optionIndex).createPage({
                                    pageCount: totalPage,
                                    current: currentPage,
                                    backFn: function (p) {
                                        $('.loading_shadow').show();
                                        search(p);
                                    }
                                });
                                $('.loading_shadow').hide();
                                initPage = true;
                            } else {

                                $(".tcdPageCode"+optionIndex).createPage({
                                    pageCount: totalPage,
                                    current: filter.page,
                                    backFn:function(){
                                        $('.loading_shadow').show();
                                    }
                                });
                                $('.loading_shadow').hide();
                            }
                        }
                    })
                };

                var search = function (p,type) {
                    var filter = {
                        page: p
                    }

                    getList(filter);

                };

                search(1);
            }

            deposit();

            function dateAjax(nowDate){
                console.log(nowDate.value);
                console.log($('#startTime').val());
            }

            //日期选择

        </script>
    </div>
    <script type="text/javascript">

        function deposit(obj,type){
            //obj  选择时间控件的时候 obj传递了他本身 this
            //type=0  左侧select选择模式  type=1 右侧时间选择
            //左侧select切换的时候，右侧有默认时间，则请求的时候要带上；
            var optionIndex= $('option:selected', '.report_option').val(); //选中的option的index
            var theadArr=[['{{ __("ft.Deposit_Time_After") }}','{{ __("ft.Deposit_Amount") }}','{{ __("ft.Deposit_Status") }}'],['{{__("words.Withdraw_time")}}','{{__("words.withrawal_amount")}}','{{__("words.status")}}'],['转账时间','金额','转出/转入账户','状态'],['平台','投注','输赢','时间'],['红利类型','金额',  '发放时间']];
            //请求的地址1111 以数组存放  一一对应

            var defaultStartTime=$('#startTime').val();  //开始时间内
            var defaultEndTime=$('#endTime').val();   //结束时间

            //存款记录
            //提款记录
            //额度转换
            //游戏记录
            var getUrl=["{{ route('member.rechargeList') }}","{{ route('member.drawingList') }}","{{ route('member.transferList') }}","{{ route('member.gameRecordList') }}","{{ route('member.dividendList') }}"];
            var initPage=false;  //初始状态
            var tbodyHtml='';  //tbody tag
            var theadHtml='';  //thead tag




            $('.loading_shadow').show();


            var getList = function (filter) {
                console.log(optionIndex);

                $.ajax({
                    type : 'GET',
                    url : getUrl[optionIndex]+"?page="+filter.page+"&start_at="+defaultStartTime+"&end_at="+defaultEndTime,
                    success : function(data){
                        $('.loading_shadow').hide();
                        var data=data;
                        var totalPage=Math.ceil(data.total/data.per_page);
                        var currentPage=data.current_page;

                        tbodyHtml='';

                        if(optionIndex==0){  //存款记录
                            var m =0;
                            for(var i=0;i<data.data.length;i++){
                                tbodyHtml+='<tr>';
                                tbodyHtml+='   <td>'+data.data[i].hk_at+'</td>';
                                tbodyHtml+='   <td>'+data.data[i].money+'</td>';
                                var status = data.data[i].status;
                                if (status == 1)
                                    status = '<span class="status_confirming">{{ __("ft.To_Be_Confirmed") }}</span>';
                                else if(status == 2)
                                    status = '<span class="status_success">{{ __("ft.Recharge_Successful") }}</span>';
                                else if(status ==3)
                                    status = '<span class="status_error">{{ __("ft.Recharge_Failed") }}</span>'
                                tbodyHtml+='   <td>'+status+'</td>';
                                tbodyHtml+='</tr>';
                                m+=Number(data.data[i].money);
                            }
                            tbodyHtml+='<tr>';
                            tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                            tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                            tbodyHtml+='<td></td>';
                            tbodyHtml+='</tr>';

                        }else if(optionIndex==1){  //提款记录
                            var m =0;
                            for(var i=0;i<data.data.length;i++){
                                tbodyHtml+='<tr>';
                                tbodyHtml+='   <td>'+data.data[i].created_at+'</td>';
                                tbodyHtml+='   <td>'+data.data[i].money+'</td>';
                                var status = data.data[i].status;
                                if (status == 1)
                                    status = '<span class="status_confirming">{{ __("ft.To_Be_Confirmed") }}</span>';
                                else if(status == 2)
                                    status = '<span class="status_success">提款成功</span>';
                                else if(status ==3)
                                    status = '<span class="status_error">提款失败</span>'
                                tbodyHtml+='   <td>'+status+'</td>';
                                tbodyHtml+='</tr>';
                                m+=Number(data.data[i].money);
                            }
                            tbodyHtml+='<tr>';
                            tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                            tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                            tbodyHtml+='<td></td>';
                            tbodyHtml+='</tr>';

                        }else if(optionIndex==2){  //额度转换
                            var m =0;
                            for(var i=0;i<data.data.length;i++){
                                tbodyHtml+='<tr>';
                                tbodyHtml+='   <td>'+data.data[i].created_at+'</td>';
                                tbodyHtml+='   <td>'+data.data[i].money+'</td>';
                                tbodyHtml+='   <td>'+data.data[i].transfer_out_account+'/'+data.data[i].transfer_in_account+'</td>';
                                status = '成功'
                                tbodyHtml+='   <td>'+status+'</td>';
                                tbodyHtml+='</tr>';
                                m+=Number(data.data[i].money);
                            }
                            tbodyHtml+='<tr>';
                            tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                            tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                            tbodyHtml+='<td></td>';
                            tbodyHtml+='<td></td>';
                            tbodyHtml+='</tr>';
                        }else if(optionIndex==3){  //游戏记录
                            var m = n =0;
                            for(var i=0;i<data.data.length;i++){
                                    var sy = data.data[i].netAmount;
                                tbodyHtml+='<tr>';
                                tbodyHtml+='   <td>'+data.data[i].api.api_title+'</td>';
                                tbodyHtml+='   <td>'+data.data[i].betAmount+'</td>';
                                tbodyHtml+='   <td>'+sy+'</td>';
                                tbodyHtml+='   <td>'+data.data[i].betTime+'</td>';
                                tbodyHtml+='</tr>';
                                m+=Number(data.data[i].betAmount);
                                n+=Number(sy);
                            }
                            tbodyHtml+='<tr>';
                            tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                            tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                            tbodyHtml+='<td>'+n+' {{ __("ft.Yuan") }}</td>';
                            tbodyHtml+='<td></td>';
                            tbodyHtml+='</tr>';
                        }else if(optionIndex==4){  //红利记录
                            var m = n =0;
                            for(var i=0;i<data.data.length;i++){
                                var type = '';
                                var api_t = data.data[i].type;
                                if (api_t == 1)
                                    type = '充值红利';
                                else if(api_t == 2)
                                    type = '平台红利';
                                else if(api_t == 3)
                                    type = '返水';
                                else if (api_t == 4)
                                    type = '充值红包';
                                tbodyHtml+='<tr>';
                                tbodyHtml+='   <td>'+type+'</td>';
                                tbodyHtml+='   <td>'+data.data[i].money+'</td>';
                                tbodyHtml+='   <td>'+data.data[i].created_at+'</td>';
                                tbodyHtml+='</tr>';
                                m+=Number(data.data[i].money);
                            }
                            tbodyHtml+='<tr>';
                            tbodyHtml+='<td>'+'{{ __("ft.sum") }}'+'</td>';
                            tbodyHtml+='<td>'+m+' {{ __("ft.Yuan") }}</td>';
                            tbodyHtml+='<td></td>';
                            tbodyHtml+='</tr>';
                        }

                        $('tbody').html(tbodyHtml);

                        $('.tcdPageCode').hide().eq(optionIndex).show();
                        if (initPage == false) {

                            //表头
                            for(var m=0;m<theadArr[optionIndex].length;m++){
                                theadHtml+='<th>'+theadArr[optionIndex][m]+'</th>';
                            }
                            $('thead').html(theadHtml);

                            $(".tcdPageCode"+optionIndex).createPage({
                                pageCount: totalPage,
                                current: currentPage,
                                backFn: function (p) {
                                    $('.loading_shadow').show();
                                    search(p);
                                }
                            });
                            $('.loading_shadow').hide();
                            initPage = true;
                        } else {

                            $(".tcdPageCode"+optionIndex).createPage({
                                pageCount: totalPage,
                                current: filter.page,
                                backFn:function(){
                                    $('.loading_shadow').show();
                                }
                            });
                            $('.loading_shadow').hide();
                        }
                    }
                })
            };

            var search = function (p,type) {
                var filter = {
                    page: p
                }

                getList(filter);

            };

            search(1);
        }

        deposit();

        function dateAjax(nowDate){
            console.log(nowDate.value);
            console.log($('#startTime').val());
        }

        //日期选择

    </script>
@endsection
