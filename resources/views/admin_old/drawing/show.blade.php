@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">确认提款</h3>
                    </div>
                    <!--内容头部-->
                    <form class="form-horizontal cmxform" name="registerForm" id="form" action="{{ route('drawing.confirm', ['id' => $data->getKey()]) }}" method="post">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="put">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="account" class="col-sm-2 control-label">用户名</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="name"  placeholder="用户名" value="{{ $data->member->name }}" required readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="money" class="col-sm-2 control-label">提款金额</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="money" name="money" value="{{ $data->money }}" readonly required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="counter_fee" class="col-sm-2 control-label">手续费</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" id="counter_fee" name="counter_fee" value="{{ $sxf_money }}" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="counter_fee" class="col-sm-2 control-label">最终打款金额</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control"  required value="{{ $need_money }}" />
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-7">
                                    <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                    &nbsp;<a href="{{ route('drawing.index') }}" class="btn btn-info">返回</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- /.content -->

@endsection