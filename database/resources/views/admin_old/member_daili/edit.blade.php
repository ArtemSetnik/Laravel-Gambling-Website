@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">代理编辑</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal cmxform" name="registerForm" id="form" action="{{ route('member_daili.update', ['id' => $data->getKey()]) }}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="membername" class="col-sm-2 control-label">用户名</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name"  placeholder="用户名" value="{{ $data->name }}" readonly />
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                        {{--<label for="money" class="col-sm-2 control-label">中心账户余额</label>--}}
                        {{--<div class="col-sm-7">--}}
                        {{--<input type="number" class="form-control" id="money" name="money"  value="{{ $data->money }}" />--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<label for="fs_money" class="col-sm-2 control-label">返水账户余额</label>--}}
                        {{--<div class="col-sm-7">--}}
                        {{--<input type="number" class="form-control" id="fs_money" name="fs_money"  value="{{ $data->fs_money }}"/>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="agent_uri" class="col-sm-2 control-label">代理独立链接</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="agent_uri" name="agent_uri" placeholder="不需要填写 http://"  value="{{ $data->agent_uri }}"/><br><font color="red">此处需要指向域名"A"记录或"CNAME"记录到服务器IP或别名</font><br><br><b><font color="DarkRed">接口开户或获取基础域名请联系：SKYPE-</font><font color="Green">aobet.cn</font>　　<a href="http://skype.gmw.cn/down/" target="_blank" >SKYPE官方下载地址</a></b>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                &nbsp;<a href="{{ route('member_daili.index') }}" class="btn btn-info">返回</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection