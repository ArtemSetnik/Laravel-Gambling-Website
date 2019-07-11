@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">电子控制器</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('system_config.update', ['id' => 1]) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="u" value="{{ route('ctr.index') }}">
                    <table class="table table-striped">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="keyword" class="col-sm-2 control-label"><span style="color: red">是否开启后台控制</span></label>
                                <div class="col-sm-3">
                                    <label><input type="radio" name="is_ctr_on"  value="0" @if($system_config->is_ctr_on == 0)checked @endif />开启</label>
                                    <label><input type="radio" name="is_ctr_on"  value="1" @if($system_config->is_ctr_on == 1)checked @endif />关闭</label>
                                </div>
                                {{--<div class="col-sm-4">--}}
                                    {{--<button type="button" class="btn btn-primary submit-form-sync btn-sm">提交</button>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </table>
                </form>

            </div>
            <div class="panel-body">
                <h3 style="color: red" class="text-center">本控制器只针对接口商老虎机及捕鱼电子类游戏，真人、彩票、体育游戏控制无效</h3>
                <h3 style="color: red" class="text-center">接口概率范围为50%-70% 如需设置70%,只需填写 70</h3>
                <form class="form-horizontal" id="form" action="{{ route('ctr.store') }}" method="post">
                    <table class="table table-striped">
                        <div class="box-body">
                            @foreach($apis as $item)

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">接口：</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control"  value="{{ $item->api_name }}" readonly/>
                                    <input type="hidden" name="api_ids[]" value="{{ $item->id }}">
                                </div>
                                <label for="" class="col-sm-1 control-label">概率</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="rates[]" placeholder="如 70%,只需填写 70"  value="{{ $item->ctr->rate or 50 }}" />
                                </div>
                            </div>
                            @endforeach
                        </div><!-- /.box-body -->
                        {{--<div class="box-footer">--}}
                            {{--<div class="form-group">--}}
                                {{--<label class="col-sm-2 control-label"></label>--}}
                                {{--<div class="col-sm-7">--}}
                                    {{--<button type="button" class="btn btn-primary submit-form-sync">提交</button>--}}
                                    {{--&nbsp;<a href="{{ route('role.index') }}" class="btn btn-info">返回</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </table>

                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection
@section('after.js')
@endsection