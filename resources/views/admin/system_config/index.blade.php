@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.System_settings')}}</h3>
            </div>
            <div class="panel-body">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{__('words.information')}}</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{__('words.commission')}}</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">{{__('words.Transaction_account')}}</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.Third_party_payment')}}</a></li>
                        {{-- <li role="presentation"><a href="#banner" aria-controls="banner" role="tab" data-toggle="tab">{{__('words.Home')}}banner{{__('words.Figure')}}</a></li> --}}
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <form class="form-horizontal" id="form" action="{{ route('system_config.update', ['id' => 1]) }}" method="post">
                                <input type="hidden" name="_method" value="put">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="site_name" class="col-sm-2 control-label">{{__('words.Site_name')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $data->site_name }}"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">{{__('words.website')}}logo</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload" type="file" name="file" multiple>
                                            <div id="progress" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files" class="files">
                                                @if($data->site_logo)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $data->site_logo }}" target="_blank"><img src="{{ $data->site_logo }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="site_logo" value="{{ $data->site_logo }}">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">{{__('words.Mobile_station')}}logo</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload4" type="file" name="file" multiple>
                                            <div id="progress4" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files4" class="files">
                                                @if($data->m_site_logo)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $data->m_site_logo }}" target="_blank"><img src="{{ $data->m_site_logo }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="m_site_logo" value="{{ $data->m_site_logo }}">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">{{__('words.Customer_service_WeChat_QR_code')}}</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload_wx" type="file" name="file" multiple>
                                            <div id="progress_wx" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files_wx" class="files">
                                                @if($data->wx_pic)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $data->wx_pic }}" target="_blank"><img src="{{ $data->wx_pic }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="wx_pic" value="{{ $data->wx_pic }}">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_alert_on" class="col-sm-2 control-label"><span style="color: red">{{__('words.Whether_to_open_the_bullet_box')}}</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_alert_on"  value="0" @if($data->is_alert_on == 0)checked @endif />{{__('words.open')}}</label>
                                            <label><input type="radio" name="is_alert_on"  value="1" @if($data->is_alert_on == 1)checked @endif />{{__('words.shut_down')}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">{{__('words.Picture_frame')}}</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload9" type="file" name="file" multiple>
                                            <div id="progress9" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files9" class="files">
                                                @if($data->alert_img)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $data->alert_img }}" target="_blank"><img src="{{ $data->alert_img }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="alert_img" value="{{ $data->alert_img }}">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="form-group">--}}
                                        {{--<label for="is_alert_on" class="col-sm-2 control-label"><span style="color: red">是否开启左侧悬浮</span></label>--}}
                                        {{--<div class="col-sm-7">--}}
                                            {{--<label><input type="radio" name="is_left_on"  value="0" @if($data->is_left_on == 0)checked @endif />开放</label>--}}
                                            {{--<label><input type="radio" name="is_left_on"  value="1" @if($data->is_left_on == 1)checked @endif />关闭</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="subtitle" class="col-sm-2 control-label">悬浮图片</label>--}}
                                        {{--<div class="col-sm-7">--}}
                                            {{--<input id="fileupload10" type="file" name="file" multiple>--}}
                                            {{--<div id="progress10" class="progress">--}}
                                                {{--<div class="progress-bar progress-bar-success"></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="subtitle" class="col-sm-2 control-label"></label>--}}
                                        {{--<div class="col-sm-7">--}}
                                            {{--<div id="files10" class="files">--}}
                                                {{--@if($data->left_img)--}}
                                                    {{--<div class="pull-left" style="position:relative;margin: 10px;">--}}
                                                        {{--<a href="{{ $data->left_img }}" target="_blank"><img src="{{ $data->left_img }}" alt="" style="width: 100px;"></a>--}}
                                                        {{--<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>--}}
                                                        {{--<input type="hidden" name="left_img" value="{{ $data->left_img }}">--}}
                                                    {{--</div>--}}
                                                {{--@endif--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="is_alert_on" class="col-sm-2 control-label"><span style="color: red">是否开启右侧悬浮</span></label>--}}
                                        {{--<div class="col-sm-7">--}}
                                            {{--<label><input type="radio" name="is_right_on"  value="0" @if($data->is_right_on == 0)checked @endif />开放</label>--}}
                                            {{--<label><input type="radio" name="is_right_on"  value="1" @if($data->is_right_on == 1)checked @endif />关闭</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="subtitle" class="col-sm-2 control-label">悬浮图片</label>--}}
                                        {{--<div class="col-sm-7">--}}
                                            {{--<input id="fileupload11" type="file" name="file" multiple>--}}
                                            {{--<div id="progress11" class="progress">--}}
                                                {{--<div class="progress-bar progress-bar-success"></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="subtitle" class="col-sm-2 control-label"></label>--}}
                                        {{--<div class="col-sm-7">--}}
                                            {{--<div id="files11" class="files">--}}
                                                {{--@if($data->right_img)--}}
                                                    {{--<div class="pull-left" style="position:relative;margin: 10px;">--}}
                                                        {{--<a href="{{ $data->right_img }}" target="_blank"><img src="{{ $data->right_img }}" alt="" style="width: 100px;"></a>--}}
                                                        {{--<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>--}}
                                                        {{--<input type="hidden" name="left_img" value="{{ $data->right_img }}">--}}
                                                    {{--</div>--}}
                                                {{--@endif--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label for="site_title" class="col-sm-2 control-label">{{__('words.Website_title')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="site_title" name="site_title" value="{{ $data->site_title }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="site_domain" class="col-sm-2 control-label">{{__('words.Website_primary_domain')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="site_domain" name="site_domain" value="{{ $data->site_domain }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">{{__('words.Keyword')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="keyword" name="keyword"  value="{{ $data->keyword }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone1" class="col-sm-2 control-label">{{__('words.Customer_service_phone_1')}}</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="phone1" name="phone1"  value="{{ $data->phone1 }}" />
                                        </div>
                                        <label for="phone2" class="col-sm-1 control-label">{{__('words.Customer_service_phone_2')}}</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="phone2" name="phone2"  value="{{ $data->phone2 }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qq" class="col-sm-2 control-label">{{__('words.Customer_service')}}qq</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="qq" name="qq" placeholder="{{__('words.Fill_in_the_qq_number_directly')}}"  value="{{ $data->qq }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qq" class="col-sm-2 control-label">{{__('words.proxy')}}qq</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="qq" name="agent_qq" placeholder="{{__('words.Fill_in_the_qq_number_directly')}}"  value="{{ $data->agent_qq }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="service_link" class="col-sm-2 control-label">{{__('words.Customer_service_link')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="service_link" name="service_link"  value="{{ $data->service_link }}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="app_link" class="col-sm-2 control-label">APP{{__('words.link')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="app_link" name="app_link"  value="{{ $data->app_link }}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">APP{{__('words.Download_QR_code')}}</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload20" type="file" name="file" multiple>
                                            <div id="progress20" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files20" class="files">
                                                @if($data->wap_qrcode)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $data->wap_qrcode }}" target="_blank"><img src="{{ $data->wap_qrcode }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="wap_qrcode" value="{{ $data->wap_qrcode }}">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">{{__('words.Website_mode')}}</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_maintain"  value="0" @if($data->is_maintain == 0)checked @endif />{{__('words.normal')}}</label>
                                            <label><input type="radio" name="is_maintain"  value="1" @if($data->is_maintain == 1)checked @endif />{{__('words.maintain')}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="maintain_desc" class="col-sm-2 control-label">{{__('words.Maintenance_prompt')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="maintain_desc" name="maintain_desc"  value="{{ $data->maintain_desc }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fs_time" class="col-sm-2 control-label">{{__('words.Backwater_reminder_time')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="fs_time" name="fs_time"  value="{{ $data->fs_time or "15:00" }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cz_ration" class="col-sm-2 control-label">{{__('words.Recharge_credit_percentage')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="cz_ration" name="cz_ration" placeholder="{{__('words.Fill_in_only_numbers')}}"  value="{{ $data->cz_ration }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="auto_logout_time" class="col-sm-2 control-label">{{__('words.Automatic_logout_time_hours')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="auto_logout_time" name="auto_logout_time" placeholder="{{__('words.Fill_in_only_numbers')}}"  value="{{ $data->auto_logout_time }}" />
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <form class="form-horizontal" id="form" action="{{ route('system_config.update', ['id' => 1]) }}" method="post">
                                <input type="hidden" name="_method" value="put">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="active_member_money" class="col-sm-2 control-label">{{__('words.Active_user_monthly_recharge_amount')}}</label>
                                        <div class="col-sm-7">
                                            <input type="number" class="form-control" id="active_member_money" name="active_member_money"  value="{{ $data->active_member_money }}" />
                                        </div>
                                    </div><font color="red">{{__('words.This_amount_is_used_to_determine')}}</font>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <form class="form-horizontal" id="form" action="{{ route('system_config.update', ['id' => 1]) }}" method="post">
                                <input type="hidden" name="_method" value="put">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="is_wechat_on" class="col-sm-2 control-label"><span style="color: red">{{__('words.Whether_to_open_bank_card_transfer')}}</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_bankpay_on"  value="0" @if($data->is_bankpay_on == 0)checked @endif />{{__('words.open')}}</label>
                                            <label><input type="radio" name="is_bankpay_on"  value="1" @if($data->is_bankpay_on == 1)checked @endif />{{__('words.shut_down')}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_alipay_on" class="col-sm-2 control-label"><span style="color: red">{{__('words.Whether_to_open_Alipay_transfer')}}</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_alipay_on"  value="0" @if($data->is_alipay_on == 0)checked @endif />{{__('words.open')}}</label>
                                            <label><input type="radio" name="is_alipay_on"  value="1" @if($data->is_alipay_on == 1)checked @endif />{{__('words.shut_down')}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_wechat_on" class="col-sm-2 control-label"><span style="color: red">{{__('words.Whether_to_open_WeChat_transfer')}}</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_wechat_on"  value="0" @if($data->is_wechat_on == 0)checked @endif />{{__('words.open')}}</label>
                                            <label><input type="radio" name="is_wechat_on"  value="1" @if($data->is_wechat_on == 1)checked @endif />{{__('words.shut_down')}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_qq_on" class="col-sm-2 control-label"><span style="color: red">{{__('words.Whether_to_open_QQ_transfer')}}</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_qq_on"  value="0" @if($data->is_qq_on == 0)checked @endif />{{__('words.open')}}</label>
                                            <label><input type="radio" name="is_qq_on"  value="1" @if($data->is_qq_on == 1)checked @endif />{{__('words.shut_down')}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alipay_nickname" class="col-sm-2 control-label">{{__('words.Alipay')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="alipay_nickname" name="alipay_nickname"  value="{{ $data->alipay_nickname }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alipay_account" class="col-sm-2 control-label">{{__('words.Alipay_account')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="alipay_account" name="alipay_account"  value="{{ $data->alipay_account }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">{{__('words.Alipay_QR_code_can_upload_multiple')}}</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload2" type="file" name="file" multiple>
                                            <div id="progress2" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files2" class="files">
                                                @if($data->alipay_qrcode)
                                                    @php
                                                        $alipay_qrcode = explode(',',$data->alipay_qrcode);
                                                    @endphp
                                                @foreach($alipay_qrcode as $item)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $item }}" target="_blank"><img src="{{ $item }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="alipay_qrcode[]" value="{{ $item }}">
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="wechat_nickname" class="col-sm-2 control-label">{{__('words.WeChat_nickname')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="wechat_nickname" name="wechat_nickname"  value="{{ $data->wechat_nickname }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="wechat_account" class="col-sm-2 control-label">{{__('words.WeChat_account')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="wechat_account" name="wechat_account"  value="{{ $data->wechat_account }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">{{__('words.WeChat_QR_code_can_upload_multiple')}}</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload3" type="file" name="file" multiple>
                                            <div id="progress3" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files3" class="files">
                                                @if($data->wechat_qrcode)
                                                    @php
                                                        $wechat_qrcode = explode(',',$data->wechat_qrcode);
                                                    @endphp
                                                @foreach($wechat_qrcode as $item)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $item }}" target="_blank"><img src="{{ $item }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="wechat_qrcode[]" value="{{ $item }}">
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="qq_nickname" class="col-sm-2 control-label">QQ{{__('words.nickname')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="qq_nickname" name="qq_nickname"  value="{{ $data->qq_nickname }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qq_account" class="col-sm-2 control-label">QQ{{__('words.account_number')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="qq_account" name="qq_account"  value="{{ $data->qq_account }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">QQ{{__('words.QR_code_multiple_uploads')}}</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload77" type="file" name="file" multiple>
                                            <div id="progress77" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files77" class="files">
                                                @if($data->qq_qrcode)
                                                    @php
                                                        $qq_qrcode = explode(',',$data->qq_qrcode);
                                                    @endphp
                                                @foreach($qq_qrcode as $item)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $item }}" target="_blank"><img src="{{ $item }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="qq_qrcode[]" value="{{ $item }}">
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <form class="form-horizontal" id="form" action="{{ route('system_config.update', ['id' => 1]) }}" method="post">
                                <input type="hidden" name="_method" value="put">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="is_thirdpay_on" class="col-sm-2 control-label"><span style="color: red">{{__('words.Whether_to_open_third_party_payments')}}</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_thirdpay_on"  value="0" @if($data->is_thirdpay_on == 0)checked @endif />{{__('words.open')}}</label>
                                            <label><input type="radio" name="is_thirdpay_on"  value="1" @if($data->is_thirdpay_on == 1)checked @endif />{{__('words.shut_down')}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="third_version" class="col-sm-2 control-label">{{__('words.Third_party_version')}}</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="third_version" name="third_version" value="{{ $data->third_version }}"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="third_userid" class="col-sm-2 control-label">{{__('words.Third_party')}}userid</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="third_userid" name="third_userid" placeholder="{{__('words.example')}}：9999" value="{{ $data->third_userid }}"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="third_userkey" class="col-sm-2 control-label">{{__('words.Third_party')}}userkey</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="third_userkey" name="third_userkey" placeholder="{{__('words.example')}}：011d495aaaab9611cd7f1f31ccaaa9377c565aaa15" value="{{ $data->third_userkey }}"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="third_pay_url" class="col-sm-2 control-label">{{__('words.Third_party')}} url</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="third_pay_url" name="third_pay_url" value="{{ $data->third_pay_url }}"  />
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="banner">
                            <form class="form-horizontal" id="form" action="{{ route('banner.store') }}" method="post">
                                <input type="hidden" name="type" value="1">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">{{__('words.Computer_side_home_banner_map_multiple_sheets')}}</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload_b" type="file" name="file" multiple>
                                            <div id="progress_b" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files_b" class="files">
                                                    @foreach($banners as $item)
                                                        @if($item->type == 1)
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="{{ $item->path }}" target="_blank"><img src="{{ $item->path }}" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="banners[]" value="{{ $item->path }}">
                                                    </div>
                                                    @endif
                                                    @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            <form class="form-horizontal" id="form" action="{{ route('banner.store') }}" method="post">
                                <input type="hidden" name="type" value="2">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">{{__('words.Mobile_phone_home_banner_map_multiple')}}</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload_m" type="file" name="file" multiple>
                                            <div id="progress_m" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files_m" class="files">
                                                    @foreach($banners as $item)
                                                        @if($item->type == 2)
                                                        <div class="pull-left" style="position:relative;margin: 10px;">
                                                            <a href="{{ $item->path }}" target="_blank"><img src="{{ $item->path }}" alt="" style="width: 100px;"></a>
                                                            <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                            <input type="hidden" name="banners[]" value="{{ $item->path }}">
                                                        </div>
                                                    @endif
                                                    @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section><!-- /.content -->
@endsection
@section('after.js')
    <script src="{{ asset('/backstage/js/jquery.ui.widget.js') }}"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="{{ asset('/backstage/js/jquery.iframe-transport.js') }}"></script>
    <!-- The basic File Upload plugin -->
    <script src="{{ asset('/backstage/js/jquery.fileupload.js') }}"></script>
    <script>
        /*jslint unparam: true */
        /*global window, $ */
        var upload_url = "{{ route('upload.post') }}";
        $(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = upload_url;
            $('#fileupload').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="site_logo" value="'+img_path+'">' +
                        '</div>';
                    $('#files').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //手机站logo
            $('#fileupload4').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="m_site_logo" value="'+img_path+'">' +
                        '</div>';
                    $('#files4').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress4 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //弹框图片
            $('#fileupload9').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="alert_img" value="'+img_path+'">' +
                        '</div>';
                    $('#files9').append(html)
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress9 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            /************************************/
            //客服微信二维码
            $('#fileupload_wx').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="wx_pic" value="'+img_path+'">' +
                        '</div>';
                    $('#files_wx').append(html)
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress_wx .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
            /************************************/
            //左侧悬浮图片
            $('#fileupload10').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="left_img" value="'+img_path+'">' +
                        '</div>';
                    $('#files10').append(html)
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress10 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //右侧悬浮图片
            $('#fileupload11').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="right_img" value="'+img_path+'">' +
                        '</div>';
                    $('#files11').append(html)
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress11 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //支付宝
            $('#fileupload2').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="alipay_qrcode[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files2').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress2 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //微信
            $('#fileupload3').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="wechat_qrcode[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files3').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress3 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');


            //QQ
            $('#fileupload77').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="qq_qrcode[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files77').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress77 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //手机二维码
            $('#fileupload20').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="wap_qrcode" value="'+img_path+'">' +
                        '</div>';
                    $('#files20').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress20 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');


            //电脑端banner
            $('#fileupload_b').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="banners[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files_b').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress_b .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');


            //手机端端banner
            $('#fileupload_m').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="banners[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files_m').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress_m .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
        });

        function removeDiv(e)
        {
            $(e).closest('div').remove();
        }
    </script>
@endsection