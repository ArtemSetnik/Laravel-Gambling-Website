@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-container">
            <div class="module-main" style="height: 630px; overflow: auto;margin-top:20px">
                <form action="{{ route('member.drawing') }}" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Beneficiary_Bank') }}：</label>
                        <div class="col-xs-6">
                            <select class="form-control" disabled="">
                                <option value="{{ $_member->bank_name }}">{{ $_member->bank_name }}</option>
                            </select>
                        </div>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label class="col-xs-3 control-label">开户地址：</label>--}}
                        {{--<div class="col-xs-6">--}}
                            {{--<input class="form-control" value="江苏省宁波市" disabled="">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Bank_Name') }}：</label>
                        <div class="col-xs-6">
                            <input class="form-control" value="{{ $_member->bank_branch_name }}" disabled="">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Beneficiary_User_Name') }}：</label>
                        <div class="col-xs-6">
                            <input class="form-control" value="{{ $_member->bank_username }}" disabled="">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Bank_Account') }}：</label>
                        <div class="col-xs-6">
                            <input class="form-control" value="{{ $_member->bank_card }}" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Withdrawal_amount') }}：</label>
                        <div class="col-xs-6">
                            <input type="number" class="form-control" name="money" placeholder="{{ __('ft.Enter_the_withdrawal_amount_minimum_100') }}">
                        </div>
                        <div class="col-xs-3 info">
                            * {{ __('ft.The_withdrawal_amount_cannot_be_less_than_100') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Withdrawals_password') }}：</label>
                        <div class="col-xs-6">
                            <input type="password" class="form-control" name="qk_pwd" maxlength="6">
                        </div>
                        <div class="col-xs-3 info">
                            * {{ __('ft.6_digit_withdrawal_password') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label"></label>
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-primary form-control ajax-submit-without-confirm-btn">
                                {{ __('ft.Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $('#drawing_submit_btn').click(function () {
                var btn = $(this);
                var go = false;

                layer.confirm('首次充值需20倍流水，否则需扣除提款金额60%的手续费,非首次需1倍流水，否则需扣除提款金额20%的手续费', {
                    btn: ['确定', '取消'] //可以无限个按钮
                }, function (index, layero) {
                    go = true;
                    if (go == true) {
                        btn.attr('disabled', true);
                        var form = btn.parents('form');

                        var url = form.attr('action');
                        var method = form.attr('method');

                        var rest_method = form.find("input[name='_method']");
                        var method_s = rest_method.length > 0 ? rest_method.val() : method;
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
                }, function (index) {
                    layer.close(index);
                    return false;
                });


            })

        })
    </script>
@endsection
