@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">添加TCG游戏</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('tcg_game_list.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="productCode" class="col-sm-2 control-label">产品名称 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="productCode" name="productCode" placeholder="例：PT" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gameType" class="col-sm-2 control-label">游戏类型 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="gameType" name="gameType" placeholder="例：RNG" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">中文名称 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gameName" class="col-sm-2 control-label">游戏名称 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="gameName" name="gameName" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tcgGameCode" class="col-sm-2 control-label">游戏代码 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="tcgGameCode" name="tcgGameCode" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="platform" class="col-sm-2 control-label">支持的平台 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="platform" name="platform" placeholder="例：flash,html5" />
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