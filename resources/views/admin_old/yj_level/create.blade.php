@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">添加佣金等级</h3>
            </div>
            <div class="panel-body">
                <h3 style="color: red" class="text-center"> 发放佣金时会按照佣金等级倒序匹配</h3>
                <form class="form-horizontal" id="form" action="{{ route('yj_level.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">选择佣金等级</label>
                            <div class="col-sm-7">
                                <select name="level" id="level" class="form-control">
                                    <option value="">--请选择--</option>
                                    @foreach(range(1, 10) as $v)
                                        <option value="{{ $v }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">等级名称</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name" placeholder="例：一星会员" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="min" class="col-sm-2 control-label">最小金额</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="min" name="min" placeholder="例：1500" />
                            </div>
                            <label for="max" class="col-sm-1 control-label">最大金额</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="max" name="max" placeholder="例：1500" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="num" class="col-sm-2 control-label">活跃用户数量</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="num" name="num" placeholder="例：20" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rate" class="col-sm-2 control-label">佣金比例</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="rate" name="rate" placeholder="例：1.5" />
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                &nbsp;<a href="{{ route('yj_level.index') }}" class="btn btn-info">返回</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection