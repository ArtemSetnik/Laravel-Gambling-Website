@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ __('words.add_an_site_message') }}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('message.store') }}" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">{{ __('words.title') }} <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="title" name="title" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-label">{{ __('words.content') }} <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="content" name="content" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">{{ __('words.jump_link') }}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="url" name="url" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">{{ __('words.select_issue_users') }} <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <label><input type="radio" name="send_member"  value="1" checked /> {{ __('words.all_users') }}</label>
                                <label><input type="radio" name="send_member"  value="2" /> {{ __('words.online_users') }}</label>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">{{ __('words.submit') }}</button>
                                &nbsp;<a href="{{ route('message.index') }}" class="btn btn-info">{{ __('words.return') }}</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection