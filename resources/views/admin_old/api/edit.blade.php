@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Edit_interface')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('apple.update', ['id' => $data->id]) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="api_name" class="col-sm-2 control-label">{{__('words.Interface_name')}} <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="api_name" name="api_name"  placeholder="{{__('words.example')}}：AG" value="{{ $data->api_name }}" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="api_title" class="col-sm-2 control-label">{{__('words.Interface_nickname')}} <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="api_title" name="api_title"  placeholder="{{__('words.Example_three_liters')}}" value="{{ $data->api_title }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label">{{__('words.Sort')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="sort" name="sort" placeholder="" value="{{ $data->sort }}" />
                            </div>
                        </div>
                        {{--<div class="form-group">
                            <label for="api_domain" class="col-sm-2 control-label">接口基础域名</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="api_domain" name="api_domain" placeholder="例：api.888.com" value="{{ $data->api_domain }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prefix" class="col-sm-2 control-label">账号前缀</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="prefix" name="prefix" placeholder="例：9k" value="{{ $data->prefix }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="api_Id" class="col-sm-2 control-label">API ID</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="api_Id" name="api_Id" placeholder="" value="{{ $data->api_id }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="api_Key" class="col-sm-2 control-label">API KEY</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="api_Key" name="api_Key" placeholder="" value="{{ $data->api_key }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="api_token" class="col-sm-2 control-label">API TOKEN</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="api_token" name="api_token" placeholder="" value="{{ $data->api_token }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="api_username" class="col-sm-2 control-label">ENCODE URI</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="api_username" name="api_username" placeholder="" value="{{ $data->api_username }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="api_password" class="col-sm-2 control-label">API PASSWORD</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="api_password" name="api_password" placeholder="" value="{{ $data->api_password }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="api_money" class="col-sm-2 control-label">API MONEY</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="api_money" name="api_money" min="0" placeholder="" value="{{ $data->api_money }}" readonly />
                            </div>
                        </div>--}}
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                &nbsp;<a href="{{ route('apple.index') }}" class="btn btn-info">{{__('words.return')}}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection