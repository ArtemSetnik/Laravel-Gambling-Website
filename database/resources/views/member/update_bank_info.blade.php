@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-menu">
            <div class="menu-area">
                <ul class="list-group">
                    <li class="list-group-item member-info active">
                        <a href="javascript:;">{{ __('ft.Bank_Info') }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main-container">
            <div class="module-main" style="height: 630px; overflow: auto;margin-top:20px">
                <form action="{{ route('member.update_bank_info') }}" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Beneficiary_Bank') }}：</label>
                        <div class="col-xs-6">
                            <select class="form-control" name="bank_name">
                                <option value="">--{{ __('ft.Please_Choose') }}--</option>
                                @foreach(\App\Models\Base::$BANK_TYPE as $v)
                                    <option value="{{ $v }}" @if($_member->bank_name == $v) selected @endif>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label class="col-xs-3 control-label">开户地址：</label>--}}
                        {{--<div class="col-xs-6">--}}
                            {{--<input class="form-control" name="bank_address" value="">--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-3 info">--}}
                            {{--* XXX省XXX市--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Bank_Name') }}：</label>
                        <div class="col-xs-6">
                            <input class="form-control" name="bank_branch_name" value="{{ $_member->bank_branch_name }}">
                        </div>
                        <div class="col-xs-3 info">
                            * {{ __('ft.XX_branch_XX_branch') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Account_name') }}：</label>
                        <div class="col-xs-6">
                            <input class="form-control" name="bank_username" value="{{ $_member->bank_username }}">
                        </div>
                        <div class="col-xs-3 info">
                            * {{ __('ft.Beneficiary_User_Name') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Bank_Account') }}：</label>
                        <div class="col-xs-6">
                            <input class="form-control" name="bank_card" value="{{ $_member->bank_card }}">
                        </div>
                        <div class="col-xs-3 info">
                            * {{ __('ft.Bank_Account_Number') }}
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
        var v_phone_url = "{{ route('sendSms') }}";
        (function ($) {
            $(function () {
                $('.sendMsg').on('click', function () {
                    var btn = $(this);
                    var phone = $('#v_phone').val();
                    var myreg = /^1[34578]\d{9}$/;
                    if (!myreg.test(phone)) {
                        layer.confirm('请输入有效的手机号码', {
                            btn: ['确定'] //按钮
                        });
                        return false;
                    }

                    $.ajax({
                        type: 'get',
                        url: v_phone_url,
                        data: {phone: phone},
                        dataType: "json",
                        success: function (data) {
                            //layer.close(detailLoad);
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
                            if (data.status.errorCode == 0) {
                                commomModule.codeCountDown(btn, 60);
                                btn.attr('disabled', true);
                            }

                            layer.confirm(html, {
                                btn: ['确定'] //按钮
                            });

                        }
                    });
                });
            })
        })(jQuery)
    </script>

@endsection