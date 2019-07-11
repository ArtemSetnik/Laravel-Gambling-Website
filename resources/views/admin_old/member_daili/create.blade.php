@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">新增代理</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('member_daili.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">选择会员</label>
                            <div class="col-sm-7">
                                <select name="member_id" id="member_id" class="form-control select2">
                                    <option value="">--请选择--</option>
                                    @foreach($member_list as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="agent_uri" class="col-sm-2 control-label">代理独立链接</label>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="text" class="form-control" id="agent_uri" name="agent_uri" placeholder="不需要填写 http://"  value="" />--}}
                            {{--</div>--}}
                        {{--</div>--}}
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