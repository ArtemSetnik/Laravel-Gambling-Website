@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('words.Confirm_recharge')}}</h3>
                    </div>
                    <!--内容头部-->
                    <form class="form-horizontal cmxform" name="registerForm" id="form" action="{{ route('recharge.confirm', ['id' => $data->getKey()]) }}" method="post">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="put">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="account" class="col-sm-2 control-label">{{__('words.Account')}}/{{__('words.card_number')}}</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="account" name="account" placeholder="{{__('words.username')}}" value="{{ $data->account }}" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="money" class="col-sm-2 control-label">{{__('words.Amount')}}</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="money" name="money" value="{{ $data->money }}" readonly required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diff_money" class="col-sm-2 control-label">{{__('words.Gift_amount')}}</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" id="diff_money" name="diff_money" value="{{ $data->diff_money }}"  required />
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-7">
                                    <button type="button" class="btn btn-primary submit-form-sync">{{__('words.submit')}}</button>
                                    &nbsp;<a href="{{ route('recharge.index') }}" class="btn btn-info">{{__('words.return')}}</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- /.content -->

@endsection