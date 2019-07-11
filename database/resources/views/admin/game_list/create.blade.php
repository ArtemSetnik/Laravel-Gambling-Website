@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">添加游戏</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('game_list.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="api_id" class="col-sm-2 control-label">所属接口 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <select name="api_id" id="api_id" class="form-control">
                                    <option value="">--请选择--</option>
                                    @foreach($_api_list as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="game_type" class="col-sm-2 control-label">游戏类型 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <select name="game_type" id="game_type" class="form-control">
                                    <option value="">--请选择--</option>
                                    @foreach(config('platform.game_type') as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_type" class="col-sm-2 control-label">游戏平台 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <select name="client_type" id="client_type" class="form-control">
                                    <option value="">--请选择--</option>
                                    @foreach(config('platform.client_type') as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">游戏名称 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="game_id" class="col-sm-2 control-label">游戏代码 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="game_id" name="game_id" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img_pc" class="col-sm-2 control-label">PC图片 </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="img_pc" name="img_pc" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img_phone" class="col-sm-2 control-label">手机图片 </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="img_phone" name="img_phone" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="game_id" class="col-sm-2 control-label">游戏代码 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="game_id" name="game_id" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label">排序 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="sort" name="sort" value="1000"  />
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                &nbsp;<a href="{{ route('tcg_game_list.index') }}" class="btn btn-info">返回</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection