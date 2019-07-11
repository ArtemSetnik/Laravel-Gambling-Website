@extends('admin.layouts.basic')
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">
        <form class="form-horizontal">
            <input type="hidden" name="_method" value="put">
            <div class="box-body">
                <div class="form-group">
                    <label for="api_name" class="col-sm-2 control-label">{{__('words.Interface_name')}}</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="api_name" name="api_name" placeholder="例：AG" value="{{ $data->api_name }}" disabled />
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
                        <input type="text" class="form-control" id="api_domain" name="api_domain" placeholder="例：api.888.com" value="{{ $data->api_domain }}" disabled />
                    </div>
                </div>
                <div class="form-group">
                    <label for="prefix" class="col-sm-2 control-label">账号前缀</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="prefix" name="prefix" placeholder="例：9k" value="{{ $data->prefix }}" disabled />
                    </div>
                </div>
                <div class="form-group">
                    <label for="api_id" class="col-sm-2 control-label">API ID</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="api_id" name="api_id" placeholder="" value="{{ $data->api_id }}" disabled />
                    </div>
                </div>
                <div class="form-group">
                    <label for="api_key" class="col-sm-2 control-label">API KEY</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="api_key" name="api_key" placeholder="" value="{{ $data->api_key }}" disabled />
                    </div>
                </div>
                <div class="form-group">
                    <label for="api_token" class="col-sm-2 control-label">API TOKEN</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="api_token" name="api_token" placeholder="" value="{{ $data->api_token }}" disabled />
                    </div>
                </div>
                <div class="form-group">
                    <label for="api_username" class="col-sm-2 control-label">ENCODE URI</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="api_username" name="api_username" placeholder="" value="{{ $data->api_username }}" disabled />
                    </div>
                </div>
                <div class="form-group">
                    <label for="api_password" class="col-sm-2 control-label">API PASSWORD</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="api_password" name="api_password" placeholder="" value="{{ $data->api_password }}" disabled />
                    </div>
                </div>
                <div class="form-group">
                    <label for="api_money" class="col-sm-2 control-label">API MONEY</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" id="api_money" name="api_money" min="0" placeholder="" value="{{ $data->api_money }}" disabled />
                    </div>
                </div>--}}
            </div><!-- /.box-body -->
        </form>
    </div>

@endsection