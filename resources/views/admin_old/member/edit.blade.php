@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">会员编辑</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal cmxform" name="registerForm" id="form" action="{{ route('member.update', ['id' => $data->getKey()]) }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="membername" class="col-sm-2 control-label">用户名</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name"  placeholder="用户名" value="{{ $data->name }}" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="real_name" class="col-sm-2 control-label">真实姓名</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="real_name"  placeholder="真实姓名" name="real_name" value="{{ $data->real_name }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">中心账户余额</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="money-all" name="money"  value="{{ $data->money }}" />
                            </div>
                        </div>
                        {{--<div class="form-group">
                            <label for="fs_money" class="col-sm-2 control-label">返水账户余额</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="fs_money" name="fs_money"  value="{{ $data->fs_money }}"/>
                            </div>
                        </div>--}}
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">邮箱</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="email" name="email"  value="{{ $data->email }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">手机</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="phone" name="phone"  value="{{ $data->phone }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_username" class="col-sm-2 control-label">开户人名字</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_username" name="bank_username"  value="{{ $data->bank_username }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_name" class="col-sm-2 control-label">银行名称</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_name" name="bank_name"  value="{{ $data->bank_name }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_card" class="col-sm-2 control-label">银行卡号</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_card" name="bank_card"  value="{{ $data->bank_card }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_username" class="col-sm-2 control-label">开户行网点</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_branch_name" name="bank_branch_name"  value="{{ $data->bank_branch_name }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bank_address" class="col-sm-2 control-label">开户地址</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bank_address" name="bank_address"  value="{{ $data->bank_address }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fs_money" class="col-sm-2 control-label">登录密码</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="password" name="password" placeholder="不修改则为原密码"  value="{{ $data->o_password }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fs_money" class="col-sm-2 control-label">取款密码</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="qk_pwd" name="qk_pwd" maxlength="6" minlength="6" placeholder="不修改则为原密码" value="{{ $data->qk_pwd }}"/>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                &nbsp;<a href="{{ route('member.index') }}" class="btn btn-info">返回</a>
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