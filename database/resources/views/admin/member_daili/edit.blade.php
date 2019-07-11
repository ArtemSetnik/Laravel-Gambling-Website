@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.agent_editor')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal cmxform" name="registerForm" id="form" action="{{ route('member_daili.update', ['id' => $data->getKey()]) }}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="membername" class="col-sm-2 control-label">{{__('words.user_name')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name"  placeholder="{{__('words.user_name')}}" value="{{ $data->name }}" readonly />
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                        {{--<label for="money" class="col-sm-2 control-label">{{__('words.central_account_balance')}}</label>--}}
                        {{--<div class="col-sm-7">--}}
                        {{--<input type="number" class="form-control" id="money" name="money"  value="{{ $data->money }}" />--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<label for="fs_money" class="col-sm-2 control-label">{{__('words.return_water_account_balance')}}</label>--}}
                        {{--<div class="col-sm-7">--}}
                        {{--<input type="number" class="form-control" id="fs_money" name="fs_money"  value="{{ $data->fs_money }}"/>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="agent_uri" class="col-sm-2 control-label">{{__('words.agent_independent_link')}}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="agent_uri" name="agent_uri" placeholder="不需要填写 http://"  value="{{ $data->agent_uri }}"/><br><font color="red">{{__('words.point_to_domain_a')}}</font><br><br><b><font color="DarkRed">{{__('words.contact_interface_account')}}：SKYPE-</font><font color="Green">aobet.cn</font>　　<a href="http://skype.gmw.cn/down/" target="_blank" >SKYPE {{__('words.official_download_address')}}</a></b>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                &nbsp;<a href="{{ route('member_daili.index') }}" class="btn btn-info">{{__('words.return')}}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection