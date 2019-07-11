@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-menu">
            <div class="menu-area">
                <ul class="list-group">
                    <li class="list-group-item system-message">
                        <a href="{{ route('member.service_center') }}">{{ __('ft.Official_News') }}</a>
                    </li>
                    <li class="list-group-item complaint active">
                        <a href="{{ route('member.complaint_proposal') }}">{{ __('ft.Feedback') }}</a>
                    </li>
                    {{--<li class="list-group-item activity">--}}
                    {{--<a href="">活动列表</a>--}}
                    {{--</li>--}}
                    <li class="list-group-item mymessage">
                        <a href="{{ route('member.message_list') }}">{{ __('ft.My_message') }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main-container">
            <div class="module-main" style="height: 630px; overflow: auto;margin-top:10px;">
                <form action="{{ route('member.post_feedback') }}" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-2 control-label">{{ __('ft.Feedback_Type') }}：</label>
                        <div class="col-xs-10">
                            <select class="form-control" name="type">
                                <option value="">--{{ __('ft.Please_Choose') }}--</option>
                                <option value="1">{{ __('ft.Platform_problem') }}</option>
                                <option value="2">{{ __('ft.financial_problem') }}</option>
                                <option value="3">{{ __('ft.Give_suggestion') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">{{ __('ft.Feedback_Content') }}：</label>
                        <div class="col-xs-10">
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">{{ __('ft.Phone_Number') }}：</label>
                        <div class="col-xs-10">
                            <input type="number" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label"></label>
                        <div class="col-xs-10">
                            <button type="button" class="btn btn-primary form-control ajax-submit-btn">{{ __('ft.Submit_feedback') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection