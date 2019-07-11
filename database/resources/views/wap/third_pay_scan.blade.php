@extends('wap.layouts.main')
@section('content')
    <div class="container-fluid gm_main">
        <div class="head">
            <a class="f_l" href="javascript:history.go(-1)"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>
            <span>扫码支付</span>
            <a class="f_r" href="javascript:history.go(-1)" style="visibility: hidden"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>
        </div>
        <div class="userInfo wrap" style="padding: 10px;">
            <form id="form1" name="form1" action="{{ route('pay') }}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="is_m" value="1">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" class="mt10">
                    <tr>
                        <td align="right">类型：</td>
                        <td class="c_blue">
                            <select name="bankcode" required>
                                {{--<option value="1">支付宝</option>--}}
                                {{--<option value="2">微信</option>--}}
                                <option value="905">QQ钱包</option>
                            </select>
                        </td>
                    </tr>
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
@endsection
@section('after.js')

    @if (session('msg_ok')|| session('msg_no') || $errors->any())
        <script>
            var css = 'color: #333; background-color: #fff; width: auto';
            var content = "{{ session('msg_no') }}";
            layer.open({
                content: content,
                //time: 1.5,
                style: css
            });
        </script>
    @endif
    @endsection