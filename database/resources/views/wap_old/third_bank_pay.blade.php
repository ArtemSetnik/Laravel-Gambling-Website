@extends('wap.layouts.main')
@section('content')
    <div class="container-fluid gm_main">
        <div class="head">
            <a class="f_l" href="javascript:history.go(-1)"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>
            <span>网银支付</span>
            <a class="f_r" href="javascript:history.go(-1)" style="visibility: hidden"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>
        </div>
        <div class="userInfo wrap" style="padding: 10px;">
            <form id="form1" name="form1" action="{{ route('pay') }}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="mid" value="{{ $_member->id }}">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" class="mt10">
                    <tr>
                        <td align="right">选择银行：</td>
                        <td class="c_blue">
                            <select name="bankcode">
                                <option value="902">微信扫码</option>
                                <option value="908">QQ扫码</option>
                                <option value="911">银联扫码</option>
                            </select>
                            <input type="hidden" name="get_code" value="0">
                        </td>
                    </tr>
                    {{--<tr id="bankcode">--}}
                    {{--<td align="right">选择银行：</td>--}}
                    {{--<td class="c_blue">--}}
                    {{--<select name="bankcode" id="bankcode">--}}
                    {{--<option value="ICBC">工商银行</option>--}}
                    {{--<option value="CMB">招商银行</option>--}}
                    {{--<option value="CCB">建设银行</option>--}}
                    {{--<option value="COMM">交通银行</option>--}}
                    {{--<option value="ABC">农业银行</option>--}}
                    {{--<option value="BOC">中国银行</option>--}}
                    {{--<option value="CIB">兴业银行</option>--}}
                    {{--<option value="SPDB">浦发银行</option>--}}
                    {{--<option value="CMBC">民生银行</option>--}}
                    {{--<option value="CNCB">中信银行</option>--}}
                    {{--<option value="CEB">光大银行</option>--}}
                    {{--<option value="HXB">华夏银行</option>--}}
                    {{--<option value="PSBC">邮政储蓄银行</option>--}}
                    {{--<option value="CGB">广发银行</option>--}}
                    {{--<option value="PAB">平安银行</option>--}}
                    {{--</select>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr id="weixin" style="display:none">--}}
                    {{--<td align="right">微信选项</td>--}}
                    {{--<td class="c_blue">--}}
                    {{--<select name="get_code">--}}
                    {{--<option value="0">默认</option>--}}
                    {{--<option value="1">仅获取二维码</option>--}}
                    {{--</select>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    <tr>
                        <td align="right">存款金额：</td>
                        <td><input name="amount" type="number" class="inp" id="v_amount" maxlength="10" required/></td>
                    </tr>
                </table>
                <button type="submit" class="submit_btn" id="SubTran" style="width: 100%">提交信息</button>
            </form>

            <!--        </div>-->
        </div>
    </div>
    <script>
        //        function changePay(pname){
        //            //document.getElementById('bankcode').style.display='none';
        //            document.getElementById('weixin').style.display='none';
        ////            if(pname=='bank'){
        ////                document.getElementById('bankcode').style.display='';
        ////            }
        //            if(pname=='weixin'){
        //                document.getElementById('weixin').style.display='';
        //            }
        //        }
    </script>
@endsection