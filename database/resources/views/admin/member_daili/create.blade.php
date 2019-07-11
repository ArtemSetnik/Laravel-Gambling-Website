@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.new_agent')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('member_daili.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">{{__('words.select_member')}}</label>
                            <div class="col-sm-7">
                                <select name="member_id" id="member_id" class="form-control select2">
                                    <option value="">--{{__('words.please_choose')}}--</option>
                                    @foreach($member_list as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="agent_uri" class="col-sm-2 control-label">{{__('words.agent_independent_link')}}</label>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="text" class="form-control" id="agent_uri" name="agent_uri" placeholder="{{__('words.no_need_to_fill')}} http://"  value="" />--}}
                            {{--</div>--}}
                        {{--</div>--}}
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