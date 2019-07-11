@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-menu">
            <div class="menu-area">
                <ul class="list-group">
                    <li class="list-group-item member-info active">
                        <a href="{{ route('member.userCenter') }}">{{ __('ft.Member_Data') }}</a>
                    </li>
                    <li class="list-group-item member-password">
                        <a href="{{ route('member.login_psw') }}">{{ __('ft.Change_Password') }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main-container">
            <div class="module-main" style="height: 630px; overflow: auto;">
                <div class="info-container">
                    <div class="heading">{{ __('ft.User_Info') }}</div>
                    <div class="info">
                        <table>
                            <tbody>
                            <tr>
                                <td class="col-xs-6">
                                    <table style="width:auto;">
                                        <tbody>
                                        <tr>
                                            <td style="text-align:right">{{ __('ft.Member_Account') }}：</td>
                                            <td><span>{{ $_member->name }}</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:right">{{ __('ft.Name') }}：</td>
                                            <td><span>{{ $_member->real_name }}</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td class="col-xs-6 item-info">
                                    <div>{{ __('ft.Balance') }}</div>
                                    <span class="member_money">{{ $_member->money }}</span> {{ __('ft.Yuan') }}
                                </td>
                                <td class="col-xs-3 item-info">
                                    <div>player id</div>
                                    <span>{{ $_member->game_id1 }}</span>
                                </td>
                                <td class="col-xs-3 item-info">
                                    <div>player pass</div>
                                    <span>{{ $_member->game_pass1 }}</span>
                                </td>
                                {{--<td class="col-xs-4 item-info">
                                    <div>红利余额</div>
                                    <span>{{ $_member->fs_money }}</span> 元
                                </td>--}}
                                <td class="col-xs-4 item-info"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="info-container">
                    <div class="heading">{{ __('ft.Bank_information') }}</div>
                    @if(!$_member->bank_name)
                        <div class="info">
                            {{ __('ft.You_have_not_yet_bound_a_bank_account') }}<a href="{{ route('member.update_bank_info') }}"
                                                                                   class="btn btn-primary">{{ __('ft.Click_to_Binding') }}</a>
                        </div>
                    @else
                        <div class="info">
                            <table>
                                <tbody>
                                <tr>
                                </tr>
                                <tr>
                                    <td style="text-align:right">{{ __('ft.Beneficiary_Bank') }}：</td>
                                    <td><span>{{ $_member->bank_name }}</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">{{ __('ft.Account_opening_address') }}：</td>
                                    <td><span>{{ $_member->bank_address }}</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">{{ __('ft.Account_opening_outlet') }}：</td>
                                    <td><span>{{ $_member->bank_branch_name }}</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">{{ __('ft.Beneficiary_User_Name') }}：</td>
                                    <td><span>{{ $_member->bank_username }}</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">{{ __('ft.Beneficiary_Bank') }}：</td>
                                    <td><span>{{ $_member->bank_card }}</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align:right"><a href="{{ route('member.update_bank_info') }}"
                                                                    class="btn btn-sm btn-primary">{{ __('ft.Click_edit') }}</a></td>
                                    <td></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after.js')
    <script>
        $(function () {
            $.ajax({
                type:'post',
                url : "{{route('member.api.wallet_balance')}}",
                dataType : 'json',
                success : function (data) {
                    //console.log(data);
                    if(data.statusCode == '01'){
                        var all = Number($('.member_money').text()) + Number(data.data);
                        $('.member_money').text('');
                        $('.member_money').text(parseInt(all.toFixed(2)));
                    }
                }
            })
        })
    </script>
@endsection