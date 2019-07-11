@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.member_editor')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal cmxform" name="registerForm" id="form" action="{{ route('member.update', ['id' => $data->getKey()]) }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="membername" class="col-sm-2 control-label">{{__('words.user_name')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name"  placeholder="{{__('words.user_name')}}" value="{{ $data->name }}" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="real_name" class="col-sm-2 control-label">{{__('words.actual_name')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="real_name"  placeholder="{{__('words.actual_name')}}" name="real_name" value="{{ $data->real_name }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">{{__('words.central_account_balance')}}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="money-all" name="money"  value="{{ $data->money }}" />
                            </div>
                        </div>
                        {{--<div class="form-group">
                            <label for="fs_money" class="col-sm-2 control-label">{{__('words.return_water_account_balance')}}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="fs_money" name="fs_money"  value="{{ $data->fs_money }}"/>
                            </div>
                        </div>--}}
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">{{__('words.mailbox')}}</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="email" name="email"  value="{{ $data->email }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">{{__('words.mobile_number')}}</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="phone" name="phone"  value="{{ $data->phone }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_username" class="col-sm-2 control-label">{{__('words.account_holder_name')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_username" name="bank_username"  value="{{ $data->bank_username }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_name" class="col-sm-2 control-label">{{__('words.bank_name')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_name" name="bank_name"  value="{{ $data->bank_name }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_card" class="col-sm-2 control-label">{{__('words.bank_card_number')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_card" name="bank_card"  value="{{ $data->bank_card }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_username" class="col-sm-2 control-label">{{__('words.bank_outlet')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_branch_name" name="bank_branch_name"  value="{{ $data->bank_branch_name }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_address" class="col-sm-2 control-label">{{__('words.account_opening_address')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_address" name="bank_address"  value="{{ $data->bank_address }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fs_money" class="col-sm-2 control-label">{{__('words.login_password')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="password" name="password" placeholder="{{__('words.original_password_not_modified')}}"  value="{{ $data->o_password }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fs_money" class="col-sm-2 control-label">{{__('words.withdrawals_password')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="qk_pwd" name="qk_pwd" maxlength="6" minlength="6" placeholder="{{__('words.original_password_not_modified')}}" value="{{ $data->qk_pwd }}"/>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                &nbsp;<a href="{{ route('member.index') }}" class="btn btn-info">{{__('words.return')}}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection
@section('after.js')
    <script>
        $(function(){
            var name = '{{$data->name}}'
            $.ajax({
                type:'post',
                url : "{{route('member.api.wallet_balance')}}",
                data : {name:name,},
                dataType : 'json',
                success : function (data) {
                    //console.log(data);
                    if(data.statusCode == '01'){
                        var all = Number($('#money-all').val()) + Number(data.data);
                        $('input[name=money]').val('');
                        $('input[name=money]').val(all.toFixed(2));
                    }
                }
            })
        })
    </script>
@endsection