@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">分配代理</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('member.post_assign', ['id' => $data->id]) }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">用户账号</label>
                            <div class="col-sm-7">
                                <input type="text" value="{{ $data->name }}" disabled class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">选择代理</label>
                            <div class="col-sm-7">
                                <select name="top_id" id="top_id" class="form-control select2">
                                    <option value="">--请选择--</option>
                                    @foreach($daili_list as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
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